<?php


namespace App\Http\Controllers;

use App\Http\Requests\StoreCharacterRequest;
use App\Http\Requests\UpdateCharacterRequest;
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

    public function store(StoreCharacterRequest $request){
        $data = $request->all();

        $new_character = Character::create($data);
        return redirect()->route('characters.show', $new_character);
    }

    public function edit(Character $character){
        return view('characters.edit', compact('character'));
    }

    public function update(UpdateCharacterRequest $request, Character $character){
        $data = $request->all();
        
        $character->update($data);

        return redirect()->route('characters.index', $character);
    }

    public function destroy(Character $character) {
        $character->delete();

        return redirect()->route('characters.index');
    }
}
