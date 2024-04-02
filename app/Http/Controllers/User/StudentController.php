<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('user.student.index');
    }

    public function profile(user $user)
    {
        $user = Auth::user();

        return view('user.student.profile', compact('user'));
    }

    public function contribution()
    {
        return view('user.student.Contribution');
    }

    public function upload(Request $request)
    {
        // Xác thực dữ liệu
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Định dạng và kích thước ảnh
            'document' => 'required|mimes:doc,docx|max:2048', // Định dạng và kích thước tệp Word
        ]);

        // Xử lý tệp ảnh
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            // Lưu đường dẫn tới ảnh trong CSDL hoặc thực hiện các thao tác khác
        }

        // Xử lý tệp Word
        if ($request->hasFile('document')) {
            $document = $request->file('document');
            $documentName = time() . '_' . $document->getClientOriginalName();
            $document->move(public_path('documents'), $documentName);
            // Lưu đường dẫn tới tệp Word trong CSDL hoặc thực hiện các thao tác khác
        }

        // Thông báo thành công hoặc chuyển hướng
        return redirect()->back()->with('success', 'Tải lên thành công.');
    }
}
