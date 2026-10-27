<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestPlayer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Player;

class PlayerController extends Controller
{
    public function index()
    {
        $data = Player::all();
        return view('list-player', compact('data'));
    }

    public function add()
    {
        return view('add-player');
    }

    public function insert(RequestPlayer $request)
    {
        $player = new Player();
        $player->name = $request->name;
        $player->age = $request->age;
        $player->national = $request->national;
        $player->position = $request->position;
        $player->salary = $request->salary;
        $player->save();
        return view('add-player');
    }

    public function edit($id)
    {
        $data = Player::find($id);
        return view('edit-player', compact('data'));
    }

    public function update($id, RequestPlayer $request)
    {
        Player::where('id', $id)->update([
            'name' => $request->name,
            'age' => $request->age,
            'national' => $request->national,
            'position' => $request->position,
            'salary' => $request->salary
        ]);
        $data = Player::find($id);
        return view('edit-player', compact('data'));
    }

    public function delete($id)
    {
        Player::where('id', $id)->delete();
        $data = Player::all();
        return view('list-player', compact('data'));
    }
}
