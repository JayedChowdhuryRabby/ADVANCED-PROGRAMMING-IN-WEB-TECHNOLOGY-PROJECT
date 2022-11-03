@extends('layouts.single')
@section('content')
    <div class="col-md-3">
        @foreach ($products as $item)
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{asset('images/'.$item->image)}}" alt="Card image cap">
                <div class="card-body">
                <p class="card-text text-center">{{$item->name}}<br>
                <span>Price: BDT{{$item->price}}</span><br>
                <span>Product Id: {{$item->id}}</span><br>
                </div>
                <br>
                
            </div>
        @endforeach
    </div>       
    <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>

@endsection 