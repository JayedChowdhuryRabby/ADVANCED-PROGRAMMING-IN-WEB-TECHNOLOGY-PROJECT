@if(Session::has('user'))
<a class="btn btn-primary" href="{{route('products.list')}}">Products</a>
<a class="btn btn-primary" href="{{route('products.emptycart')}}">Empty Cart </a>
<a class="btn btn-primary" href="{{route('products.mycart')}}"> Cart </a>
<a class="btn btn-primary" href="{{route('customer.myorders')}}"> My Orders </a>
<a class="btn btn-primary" href="{{route('customerDash')}}"> DashBoard </a>
@elseif(Session::has('userClient'))
<a class="btn btn-primary" href="{{route('addProduct')}}"> Add Product </a>
<a class="btn btn-primary" href="{{route('products.list')}}">Products</a>
<a class="btn btn-primary" href="{{route('clientDash')}}"> DashBoard </a>
@elseif(Session::has('userAdmin'))
<a class="btn btn-primary" href="{{route('adminDash')}}"> DashBoard </a>
<a class="btn btn-primary" href="{{route('customerList')}}"> Customer List </a>
<a class="btn btn-primary" href="{{route('clientList')}}"> Client List </a>

@else
<a class="btn btn-primary" href="{{route('products.list')}}">Products</a>
<a class="btn btn-primary" href="{{route('products.mycart')}}"> Cart </a>
<a class="btn btn-primary" href="{{route('products.emptycart')}}">Empty Cart </a>
<a class="btn btn-primary" href="{{route('customerCreate')}}">Customer Registration</a>
<a class="btn btn-primary" href="{{route('clientCreate')}}">Client Registration</a>
<a class="btn btn-primary" href="{{route('login')}}">Login</a>
@endif

