<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('Pages/login');
    }

    public function signin(Request $request)
    {
        $data = DB::table('user')->where('email', $request->email)->where('password', $request->password)->get();
        $data = $data->toArray();
        switch (count($data)) {
            case 0:
                $err = "Email hoặc mật khẩu không chính xác!";
                return view('Pages/login', compact('err'));
            default:
                session_start();
                // dd($data[0]);
                $data = $data[0];
                $_SESSION['auth'] = $data->id;
                return view('Pages/home');
        }
    }
}
