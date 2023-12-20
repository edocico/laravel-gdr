@extends('layouts.app')

@section('content')

<section class="py-5">
  <div class="container">
    <h1>Page EDIT</h1>
    <form action="{{ route('characters.update', $character ) }}" method="POST" >

      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="name" value="{{ $character->name }}">
      </div>
      <div class="mb-3">
        <label for="bio" class="form-label">Bio</label>
        <textarea class="form-control" name="bio" id="bio" rows="3" placeholder="biografia"> {{ $character->bio }}</textarea>

      </div>
      <div class="mb-3">
        <label for="defense" class="form-label">defense</label>
        <input type="number" class="form-control" name="defense" id="defense" placeholder="defense character"  value="{{ $character->defense }}">
      </div>
      <div class="mb-3">
        <label for="speed" class="form-label">speed</label>
        <input type="number" class="form-control" name="speed" id="speed" placeholder="speed character"  value="{{ $character->speed }}">
      </div>

      <div class="mb-3">
        <label for="hp" class="form-label">HP</label>
        <input type="number" class="form-control" name="hp" id="hp" placeholder="hp character"  value="{{ $character->hp }}">
      </div>
      
      <div class="">
        <input type="submit" class="btn btn-primary" value="Edit">
      </div>

    </form>
  </div>
</section>

@endsection