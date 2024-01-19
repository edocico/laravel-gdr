@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center m-5">Characters</h1>
        <div class="row justify-content-end mb-3">
            <div class="col-auto">
                <a class="btn btn-primary text-light" href="{{route('admin.characters.create')}}">New Character</a>
            </div>
        </div>
        
        <div class="row row-gap-5">
            @foreach($characters as $character)
                <div class="col-3">
                    <div class="card h-100">
                        <img src="https://www.the-sun.com/wp-content/uploads/sites/6/2023/10/www-instagram-com-monkeycatluna-hl-851711797.jpg" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column">
                          <h5 class="card-title mb-3 min-vh-50" style="min-height: 50px">
                            <a class="text-black fs-2 text-decoration-none" href="{{ route('admin.characters.show', $character) }}">{{$character->name}}</a>
                          </h5>
                          <div style="min-height: 100px">
                            <div class="d-flex mb-5">
                                <ul class="p-0 m-0 d-flex flex-wrap gap-2 row-gap-2" >
                                    @foreach($character->items as $item)
                                
                                    <li class="badge rounded-pill text-bg-primary"> 
                                        <a class="text-light text-decoration-none" href="{{ route('admin.items.show', $item) }}">
                                            {{$item->name}}
                                        </a>
                                    </li>

                                    @endforeach
                                </ul>
                            </div>
                          </div>
                          <p class="card-text"><strong>Defense:</strong> {{$character->defense}}</p>
                          <p class="card-text"><strong>Speed:</strong> {{$character->speed}}</p>
                          <p class="card-text"><strong>Hp:</strong> {{$character->hp}}</p>
                            <div class="modal-footer d-flex gap-2 mt-auto">
                                <a href="{{route('admin.characters.edit', $character)}}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('admin.characters.destroy', $character) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>                          
                        </div>
                        
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection