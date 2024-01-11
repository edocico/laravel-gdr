@extends('layouts.app')

@section('content')
<button><a href="{{route('projects.index')}}">Sezione comics</a></button>
    <div class="container">
        <div class="row row-gap-5">
            
                <div class="col-8">
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
           
        </div>
    </div>
@endsection