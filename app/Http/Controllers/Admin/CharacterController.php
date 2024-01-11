<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCharacterRequest;
use App\Http\Requests\UpdateCharacterRequest;
use App\Models\Character;
use App\Models\Type;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function index() {
        $characters = Character::all();

        return view('admin.characters.index', compact('characters'));
    }

    public function show(Character $character) {

        return view('admin.characters.show', compact('character'));

    }

    public function create(){
        $types = Type::orderBy('name', 'ASC')->get();
    
        return view('admin.characters.create', compact('types'));
    }

    public function store(StoreCharacterRequest $request){
        $data = $request->validated();
        
        $new_character = Character::create($data);
        return redirect()->route('admin.characters.show', $new_character);
    }

    public function edit(Character $character){
        $types = Type::orderBy('name', 'ASC')->get();

        return view('admin.characters.edit', compact('character', 'types'));
    }

    public function update(UpdateCharacterRequest $request, Character $character){
        $data = $request->validated();
        
        $character->update($data);

        return redirect()->route('admin.characters.index', $character);
    }

    public function destroy(Character $character) {
        $character->delete();

        return redirect()->route('admin.characters.index');
    }
}
