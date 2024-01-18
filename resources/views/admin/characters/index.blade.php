@extends('layouts.app')

@section('content')
    <div class="container">
        <button><a href="{{route('admin.characters.create')}}">Sezione create</a></button>
        <div class="row row-gap-5">
            @foreach($characters as $character)
                <div class="col-3">
                    <div class="card h-100" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">
                            <a href="{{ route('admin.characters.show', $character) }}">{{$character->name}}</a>
                          </h5>

                        <div class="d-flex">
                            <ul>
                                @foreach($character->items as $item)
                            
                                <li class="badge rounded-pill text-bg-primary"> 
                                    <a class="text-light" href="{{ route('admin.items.show', $item) }}">
                                        {{$item->name}}
                                    </a>
                                </li>

                                @endforeach
                            </ul>
                        </div>
                      
                          <p class="card-text">Bio: {{$character->bio}}</p>
                          <p class="card-text">Defense: {{$character->defense}}</p>
                          <p class="card-text">Speed: {{$character->speed}}</p>
                          <p class="card-text">Hp: {{$character->hp}}</p>
                        </div>
                        <button><a href="{{route('admin.characters.edit', $character)}}">EDIT</a></button>
                        <form action="{{ route('admin.characters.destroy', $character) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger" type="submit">delete</button>

                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection