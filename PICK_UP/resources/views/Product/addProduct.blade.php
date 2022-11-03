@extends('layouts.single')
@section('content')
<form action="{{ route('addProduct') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container">
            <div class="col-md-4 form-group">
        <span>Product Name</span>
        <input type="text" name="name" value="{{old('name')}}" class="form-control">
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Price</span>
        <input type="number" name="price" value="{{old('price')}}"class="form-control">
        @error('price')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>



    <div class="col-md-4 form-group">
        <span>Product Id</span>
        <input type="text" name="id" value="{{old('id')}}"class="form-control">
        @error('id')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
      
                <br>
                <div class="form-group">
                    <input type="file" name="image" class="form-control">
                </div>

                <br>
                <div class="form-group">
                    <br>
                    <button type="submit" class="btn btn-success">Upload</button>
                    <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>
                </div>

            </div>
            </div>

     

        </form>

@endsection