@extends('layouts.app')

@section('content')
<button><a href="{{route('admin.characters.index')}}">Sezione comics</a></button>
    <div class="container">
        <div class="row row-gap-5">
                <div class="col-8">
                    <div class="card h-100" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">{{$item->name}}</h5>

                          <p class="card-text">Descrizione: {{$item->description}}</p>
                        
                          <p class="card-text">Price: {{$item->price}} $</p>
                        
                        </div>
                    </div>
                </div>
           
        </div>
    </div>
@endsection