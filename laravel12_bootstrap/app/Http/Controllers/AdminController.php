<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

//login
    public function login(){
        return view('admin.login');
    }
    public function check_login(){
        request()->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
        ]);
        $data = request() ->only('email', 'password');
        if (auth() -> attempt($data)) {
            return redirect()->route('admin.list');
        }
        else{
            return back()->withErrors([
                'email' => 'Tài khoản hoặc mặt khẩu không đúng.',
            ])->withInput();
        }
    }

    //đăng ký
    public function register(){
        return view('admin.register');
    }
    public function check_register(){
        request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
            'age' => 'required|integer|min:1'
        ]);
        $data = request()->only(['name', 'email', 'age']);
        $data['password'] = bcrypt(request('password'));
        User::create($data);
        return redirect()->route('admin.login')-> with('success', 'Đăng ký thành công');
    }


    //update
    public function update($id){


        $user = User::findOrFail($id);
        return view('admin.update', compact('user'));
    }
    public function check_update(Request $request, $id)
    {
        $user = User::FindOrFail($id);
        request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'. $user->id,
            'password' => 'nullable|confirmed',
            'age' => 'nullable|integer',
        ]);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->age = $request->input('age');

        // Nếu có mật khẩu mới thì cập nhật
        if ($request->filled('password')) {
            $user->password = bcrypt($request->input('password'));
        }

        // Lưu lại người dùng đã cập nhật
        $user->save();

        // Chuyển hướng về trang danh sách và kèm theo thông báo thành công
        return redirect()->route('admin.list')->with('success', 'Cập nhật thành công');
    }



    //danh sách
    public function list(){
        $users = User::all();
        return view('admin.list', compact('users'));
    }


    //hiển thị thong tin
    public function view($id){
        $user = User::findOrFail($id);
        //tra ve thong tin len view
        return view('admin.view', compact('user'));
    }
}
