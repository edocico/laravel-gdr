@extends('layouts.app')

@section('content')

<section class="py-5">
  <div class="container">
    <form action="{{ route('characters.store' ) }}" method="POST" >

      @csrf

      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="name" value="{{ old('name') }}">
      </div>
      <div class="mb-3">
        <label for="bio" class="form-label">Bio</label>
        <textarea class="form-control" name="bio" id="bio" rows="3" placeholder="biografia" >{{ old('bio') }}</textarea>

      </div>
      <div class="mb-3">
        <label for="defense" class="form-label">defense</label>
        <input type="number" class="form-control" name="defense" id="defense" placeholder="defense character" value="{{ old('defense') }}">
      </div>
      <div class="mb-3">
        <label for="speed" class="form-label">speed</label>
        <input type="number" class="form-control" name="speed" id="speed" placeholder="speed character" value="{{ old('speed') }}">
      </div>

      <div class="mb-3">
        <label for="hp" class="form-label">HP</label>
        <input type="number" class="form-control" name="hp" id="hp" placeholder="hp character" value="{{ old('hp') }}">
      </div>
      
      <div class="">
        <input type="submit" class="btn btn-primary" value="crea">
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