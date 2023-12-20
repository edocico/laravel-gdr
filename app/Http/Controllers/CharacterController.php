<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function index() {
        $characters = Character::all();

        return view('characters.index', compact('characters'));
    }

    public function show(Character $character) {

        return view('characters.show', compact('character'));

    }

    public function create(){
        return view('characters.create');
    }

    public function store(Request $request){
        $data = $request->all();
        $new_character = Character::create($data);
        return redirect()->route('characters.show', $new_character);
    }

    public function edit(Character $character){
        return view('characters.edit', compact('character'));
    }

    public function update(Request $request, Character $character){
        $data = $request->all();
        
        $character->update($data);

        return redirect()->route('characters.index', $character);
    }
}
