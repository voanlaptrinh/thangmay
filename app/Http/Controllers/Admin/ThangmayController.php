<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Thangmay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Exception;

class ThangmayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $thangmays = Thangmay::latest()->paginate(10);
        return view('admin.thangmay.index', compact('thangmays'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.thangmay.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'title' => 'required|string|max:255',
                'description' => 'nullable|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ], [
                'title.required' => 'Tiêu đề không được để trống',
                'title.max' => 'Tiêu đề không được vượt quá 255 ký tự',
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
                $image->move(public_path('uploads/thangmay'), $imageName);
                $data['image'] = 'uploads/thangmay/' . $imageName;
            }

            Thangmay::create($data);

            return redirect()->route('thangmay.index')
                ->with('success', 'Thêm thang máy thành công');

        } catch (Exception $e) {
            return redirect()->back()
                ->with('error', 'Có lỗi xảy ra: ' . $e->getMessage())
                ->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $thangmay = Thangmay::findOrFail($id);
        return view('admin.thangmay.show', compact('thangmay'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $thangmay = Thangmay::findOrFail($id);
        return view('admin.thangmay.edit', compact('thangmay'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $thangmay = Thangmay::findOrFail($id);

            $validator = Validator::make($request->all(), [
                'title' => 'required|string|max:255',
                'description' => 'nullable|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ], [
                'title.required' => 'Tiêu đề không được để trống',
                'title.max' => 'Tiêu đề không được vượt quá 255 ký tự',
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
                if ($thangmay->image && file_exists(public_path($thangmay->image))) {
                    unlink(public_path($thangmay->image));
                }

                $image = $request->file('image');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('uploads/thangmay'), $imageName);
                $data['image'] = 'uploads/thangmay/' . $imageName;
            }

            $thangmay->update($data);

            return redirect()->route('thangmay.index')
                ->with('success', 'Cập nhật thang máy thành công');

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
            $thangmay = Thangmay::findOrFail($id);

            // Xóa ảnh nếu có
            if ($thangmay->image && file_exists(public_path($thangmay->image))) {
                unlink(public_path($thangmay->image));
            }

            $thangmay->delete();

            return redirect()->route('thangmay.index')
                ->with('success', 'Xóa thang máy thành công');

        } catch (Exception $e) {
            return redirect()->back()
                ->with('error', 'Có lỗi xảy ra: ' . $e->getMessage());
        }
    }

    /**
     * Toggle status của thang máy
     */
    public function toggleStatus(Request $request, string $id)
    {
        try {
            $thangmay = Thangmay::findOrFail($id);
            $thangmay->is_active = $request->input('is_active');
            $thangmay->save();

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
