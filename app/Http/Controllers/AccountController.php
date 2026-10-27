<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    public function index()
    {
        session_start();
        $data = [];
        if ($_SESSION['auth']) {
            $data = $_SESSION['auth'];
            var_dump($data);
        }

        $user = DB::table('user')->where('id', $data)->get();
        $user = $user->toArray();
        $user = $user[0];

        var_dump($user);

        return view('Pages/account', compact('user'));
    }

    public function update(Request $request)
    {
        $valid = true;
        if ($request->name == "") {
            $err = "Tên không được để trống";
            $valid = false;
        }
        if ($request->password == "") {
            $err = "Mật khẩu không hợp lệ";
            $valid = false;
        }


        if ($valid) {
            DB::table('user')->where('email', $request->email)->update(['name' => $request->name, 'password' => $request->password]);
            return view('Pages/account');
        } else {
            return view('Pages/account', compact('err'));
        }
    }
}
