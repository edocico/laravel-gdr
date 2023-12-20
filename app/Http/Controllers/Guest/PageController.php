<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Character;
use App\Models\User;

class PageController extends Controller
{
    public function index()
    {
        $characters = Character::all();
        // $characters = $this->uppercase($characters);
        return view('guest.index', compact('characters'));
    }

    // private function uppercase($characters)
    // {

    // }

    // public function dashboard()
    // {
    //     $characters = Character::all();
    //     $users = User::all();
    //     return view('guest.dashboard', compact('characters','users'));
    // }

    
}
