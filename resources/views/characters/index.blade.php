@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row row-gap-5">
            @foreach($characters as $character)
                <div class="col-3">
                    <div class="card h-100" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">{{$character->name}}</h5>

                          <p class="card-text">Bio: {{$character->bio}}</p>
                          <p class="card-text">Defense: {{$character->defense}}</p>
                          <p class="card-text">Speed: {{$character->speed}}</p>
                          <p class="card-text">Hp: {{$character->hp}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection