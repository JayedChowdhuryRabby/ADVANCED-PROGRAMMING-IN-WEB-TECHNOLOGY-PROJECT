@extends('layouts.app')
@section('content')

    @if(Session::get('user')) {{Session::get('user')}} 
    <br>
    <br>
    <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>
    @endif 
@endsection 