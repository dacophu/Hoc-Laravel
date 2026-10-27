<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data = DB::table('user')->get();
        $data = User::all();
        // dd($data);

        return view('user', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        DB::table('user')->insert(['name' => 'Đặng Công Phú', 'email' => 'admin@gmail.com', 'password' => '123']);
        DB::table('user')->insert(['name' => 'Nguyễn Văn A', 'email' => 'nguyenvana@gmail.com', 'password' => '123']);
        DB::table('user')->insert(['name' => 'Nguyễn Văn B', 'email' => 'nguyenvanb@gmail.com', 'password' => '123']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
