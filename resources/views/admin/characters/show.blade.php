@extends('layouts.app')

@section('content')
<button><a href="{{route('admin.characters.index')}}">Sezione comics</a></button>
    <div class="container">
        <div class="row row-gap-5">
            
                <div class="col-8">
                    <div class="card h-100" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">{{$character->name}}</h5>

                          <p class="card-text">Bio: {{$character->bio}}</p>
                          <p>
                            <div class="d-flex">
                                <ul>
                                    @foreach($character->items as $item)
                                
                                    <li class="badge rounded-pill text-bg-primary">{{$item->name}}</li>
    
                                    @endforeach
                                </ul>
                            </div>    
                          </p>
                          <p class="card-text">Defense: {{$character->defense}}</p>
                          <p class="card-text">Speed: {{$character->speed}}</p>
                          <p class="card-text">Hp: {{$character->hp}}</p>
                          <p class="card-text">Type: {{$character->type->name ?? '/'}}</p>
                          <p class="card-text">Description: {{$character->type->description ?? '/'}}</p>
                        </div>
                    </div>
                </div>
           
        </div>
    </div>
@endsection