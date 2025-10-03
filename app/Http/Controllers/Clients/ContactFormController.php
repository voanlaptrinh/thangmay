<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\Contacts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Exception;

class ContactFormController extends Controller
{
    /**
     * Xử lý form tư vấn và báo giá
     */
    public function store(Request $request)
    {
        try {
            // Validation
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'phone' => ['required', 'string', 'regex:/^(0|\+84)[0-9]{9,10}$/'],
                'email' => 'nullable|email|max:255',
                'description' => 'nullable|string|max:1000',
            ], [
                'name.required' => 'Vui lòng nhập họ tên',
                'name.max' => 'Họ tên không được vượt quá 255 ký tự',
                'phone.required' => 'Vui lòng nhập số điện thoại',
                'phone.regex' => 'Số điện thoại không đúng định dạng (VD: 0901234567)',
                'email.email' => 'Email không đúng định dạng',
                'email.max' => 'Email không được vượt quá 255 ký tự',
                'description.max' => 'Nhu cầu không được vượt quá 1000 ký tự',
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput()
                    ->with('error', 'Vui lòng kiểm tra lại thông tin!');
            }

            // Lưu vào database
            Contacts::create($validator->validated());

            return redirect()->back()
                ->with('success', 'Cảm ơn bạn đã đăng ký! Chúng tôi sẽ liên hệ với bạn trong vòng 30 phút.');

        } catch (Exception $e) {
            return redirect()->back()
                ->with('error', 'Có lỗi xảy ra, vui lòng thử lại sau!')
                ->withInput();
        }
    }
}
