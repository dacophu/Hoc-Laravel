<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function index()
    {
        return view('Pages/register');
    }

    public function signup(Request $request)
    {
        $valid = true;
        if ($request->name == "") {
            $err = "Tên không được để trống";
            $valid = false;
        }
        if ($request->email == "" || $request->password == "") {
            $err = "Email hoặc mật khẩu không hợp lệ";
            $valid = false;
        }
        $data = DB::table('user')->where('email', $request->email)->get();
        $data = $data->toArray();
        if (count($data) > 0) {
            $err = "Email đã tồn tại";
            $valid = false;
        }

        if ($valid) {
            DB::table('user')->insert(['name' => $request->name, 'email' => $request->email, 'password' => $request->password]);
            return view('Pages/login');
        } else {
            return view('Pages/register', compact('err'));
        }
    }
}
