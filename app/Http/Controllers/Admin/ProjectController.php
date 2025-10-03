<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Exception;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::latest()->paginate(10);
        return view('admin.project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'title' => 'required|string|max:255',
                'address' => 'nullable|string|max:255',
                'description' => 'nullable|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ], [
                'title.required' => 'Tên dự án không được để trống',
                'title.max' => 'Tên dự án không được vượt quá 255 ký tự',
                'address.max' => 'Địa chỉ không được vượt quá 255 ký tự',
                'image.image' => 'File phải là ảnh',
                'image.mimes' => 'Ảnh phải có định dạng: jpeg, png, jpg, gif',
                'image.max' => 'Ảnh không được vượt quá 2MB',
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }

            $data = $validator->validated();

            // Xử lý upload ảnh
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('uploads/projects'), $imageName);
                $data['image'] = 'uploads/projects/' . $imageName;
            }

            Project::create($data);

            return redirect()->route('project.index')
                ->with('success', 'Thêm dự án thành công');

        } catch (Exception $e) {
            return redirect()->back()
                ->with('error', 'Có lỗi xảy ra: ' . $e->getMessage())
                ->withInput();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $project = Project::findOrFail($id);
        return view('admin.project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $project = Project::findOrFail($id);

            $validator = Validator::make($request->all(), [
                'title' => 'required|string|max:255',
                'address' => 'nullable|string|max:255',
                'description' => 'nullable|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ], [
                'title.required' => 'Tên dự án không được để trống',
                'title.max' => 'Tên dự án không được vượt quá 255 ký tự',
                'address.max' => 'Địa chỉ không được vượt quá 255 ký tự',
                'image.image' => 'File phải là ảnh',
                'image.mimes' => 'Ảnh phải có định dạng: jpeg, png, jpg, gif',
                'image.max' => 'Ảnh không được vượt quá 2MB',
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }

            $data = $validator->validated();

            // Xử lý upload ảnh mới
            if ($request->hasFile('image')) {
                // Xóa ảnh cũ
                if ($project->image && file_exists(public_path($project->image))) {
                    unlink(public_path($project->image));
                }

                $image = $request->file('image');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('uploads/projects'), $imageName);
                $data['image'] = 'uploads/projects/' . $imageName;
            }

            $project->update($data);

            return redirect()->route('project.index')
                ->with('success', 'Cập nhật dự án thành công');

        } catch (Exception $e) {
            return redirect()->back()
                ->with('error', 'Có lỗi xảy ra: ' . $e->getMessage())
                ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $project = Project::findOrFail($id);

            // Xóa ảnh nếu có
            if ($project->image && file_exists(public_path($project->image))) {
                unlink(public_path($project->image));
            }

            $project->delete();

            return redirect()->route('project.index')
                ->with('success', 'Xóa dự án thành công');

        } catch (Exception $e) {
            return redirect()->back()
                ->with('error', 'Có lỗi xảy ra: ' . $e->getMessage());
        }
    }

    /**
     * Toggle status của project
     */
    public function toggleStatus(Request $request, string $id)
    {
        try {
            $project = Project::findOrFail($id);
            $project->is_active = $request->input('is_active');
            $project->save();

            return response()->json([
                'success' => true,
                'message' => 'Cập nhật trạng thái thành công!'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Có lỗi xảy ra: ' . $e->getMessage()
            ], 500);
        }
    }
}
