@extends('layouts.app')
@section('content')
    <h1>Order Details</h1>
    <h4>Order Id: {{$order->id}}</h4>
    <h4>Order By: {{$order->customer->name}}</h4>
    <h4>Phone: {{$order->customer->phone}}</h4>
    <h5>Order Details </h5>
    <table class="table table-bordered">
        <tr>
            <td>Name</td>
            <td>Image</td>
            <td>Unit Price</td>
            <td>Qty</td>
        </tr>
        @foreach($order->orderdetails as $od)
            <tr>
                <td>{{$od->product->name}}</td>
                <td><img width="100px" height="100px" src="{{asset('images/'.$od->product->image)}}"></td>
                <td>{{$od->unit_price}}</td>
                <td>{{$od->qty}}</td>
            </tr>
        @endforeach
    </table>
@endsection