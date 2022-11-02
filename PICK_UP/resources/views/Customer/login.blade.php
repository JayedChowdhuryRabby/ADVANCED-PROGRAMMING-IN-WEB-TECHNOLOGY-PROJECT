@extends('layouts.app')
<br>
@section('content')
<form action="{{route('login')}}" method="post">

	{{@csrf_field()}}
	<input type="text" name="email" placeholder="Email"><br>
	<input type="password" name="password" placeholder="Password"><br>
	<input type="checkbox" name="remember"> Remember Me<br>
	<input type="submit" name="" value="Login">
</form>
@endsection  
