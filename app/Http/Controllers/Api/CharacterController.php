<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
   public function index() {

    $results = Character::all();

    return response()->json([
        'success'=> true,
        'results'=> $results,
    ]);

   }
}
