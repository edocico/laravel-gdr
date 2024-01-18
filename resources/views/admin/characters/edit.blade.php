@extends('layouts.app')

@section('content')

<section class="py-5">
  <div class="container">
    <h1>Page EDIT</h1>
    <form action="{{ route('admin.characters.update', $character ) }}" method="POST" >

      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="name" value="{{ old('name',$character->name) }}">
      </div>
      <div class="mb-3">
        <label for="bio" class="form-label">Bio</label>
        <textarea class="form-control" name="bio" id="bio" rows="3" placeholder="biografia"> {{ old('bio',$character->bio) }}</textarea>

      </div>

      <div class="form-group mb-3">
        <p>Seleziona la items:</p>
        <div class="d-flex flex-wrap gap-4">
          @foreach($items as $item)
            <div class="form-check">
              <input 
                name='items[]' 
                class="form-check-input" 
                type="checkbox" 
                value="{{$item->id}}" 
                id="item-{{$item->id}}" 
                @checked(in_array($item->id, old('items', $character->items->pluck('id')->all())))
              >
              <label class="form-check-label" for="item-{{$item->id}}">
                {{$item->name}}
              </label>
            </div>
          @endforeach
        </div>
      </div>

      <div class="mb-3">
        <label for="defense" class="form-label">defense</label>
        <input type="number" class="form-control" name="defense" id="defense" placeholder="defense character"  value="{{ old('defense',$character->defense) }}">
      </div>
      <div class="mb-3">
        <label for="speed" class="form-label">speed</label>
        <input type="number" class="form-control" name="speed" id="speed" placeholder="speed character"  value="{{ old('speed',$character->speed) }}">
      </div>

      <div class="mb-3">
        <label for="hp" class="form-label">HP</label>
        <input type="number" class="form-control" name="hp" id="hp" placeholder="hp character"  value="{{ old('hp',$character->hp) }}">
      </div>
      
      <div class="mb-3">
        <label for="title" class="form-label text-light">Seleziona una categoria</label>
            <select name="type_id" class="form-control mb-3" id="type_id">
                <option>Seleziona una categoria</option>
                @foreach($types as $type)
                  <option @selected( old('type_id', optional($character->type)->id) == $type->id ) value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>
      </div>
      
      <div class="">
        <input type="submit" class="btn btn-primary" value="Edit">
      </div>

    </form>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  </div>
</section>

@endsection