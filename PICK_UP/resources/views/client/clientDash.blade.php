@extends('layouts.single')
@section('content')

    @if(Session::get('userclient')) {{Session::get('userclient')}} 
    <br>
    <br>
    <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>
    @endif 
@endsection 