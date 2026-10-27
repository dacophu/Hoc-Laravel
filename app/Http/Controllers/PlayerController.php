<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Player;

class PlayerController extends Controller
{
    public function index()
    {
        // $data = DB::table('player')->get();
        // dd($data);

        $data = Player::all();

        return view('list-player', compact('data'));
    }

    public function add()
    {
        return view('add-player');
    }

    public function insert(Request $request)
    {
        if ($request->name == "" || $request->age == "" || $request->national == "" || $request->position == "" || $request->salary == "") {
            $msg = "Thêm thất bại";
        } else {
            $player = new Player();
            $player->name = $request->name;
            $player->age = $request->age;
            $player->national = $request->national;
            $player->position = $request->position;
            $player->salary = $request->salary;
            $player->save();
            // DB::table('player')->insert(["name" => $request->name, "age" => $request->age, "national" => $request->national, "position" => $request->position, "salary" => $request->salary]);
            $msg = "Thêm thành công";
        }
        return view('add-player', compact('msg'));
    }

    public function edit($id)
    {
        // $data = DB::table('player')->where('id', $id)->get();

        // // dd($data);
        // $data = $data[0];

        $data = Player::find($id);

        return view('edit-player', compact('data'));
    }

    public function update($id, Request $request)
    {
        $msg = "";
        $valid = true;
        if ($request->name == "" || $request->age == "" || $request->national == "" || $request->position == "" || $request->salary == "") {
            $msg = "Vui lòng điền đầy đủ thông tin";
            $valid = false;
        }
        if ($valid) {
            // DB::table('player')->where('id', $id)->update(
            //     [
            //         'name' => $request->name,
            //         'age' => $request->age,
            //         'national' => $request->national,
            //         'position' => $request->position,
            //         'salary' => $request->salary
            //     ]
            // );
            Player::where('id', $id)->update([
                'name' => $request->name,
                'age' => $request->age,
                'national' => $request->national,
                'position' => $request->position,
                'salary' => $request->salary
            ]);
            $msg = "Cập nhập thành công";
        }

        // $data = DB::table('player')->where('id', $id)->get();
        // $data = $data[0];
        $data = Player::find($id);

        return view('edit-player', compact('data', 'msg'));
    }

    public function delete($id)
    {
        // DB::table('player')->where('id', $id)->delete();
        // $data = DB::table('player')->get();
        Player::where('id', $id)->delete();
        $data = Player::all();

        return view('list-player', compact('data'));
    }
}
