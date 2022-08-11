<?php

namespace App\Http\Controllers;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index(){

        $rooms = Room::With('users')->paginate(5);

        return view('admin.room.list', compact('rooms'));
    }
}
