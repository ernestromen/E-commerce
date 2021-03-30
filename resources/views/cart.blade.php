@extends('master')
@section('main_content')
<div class="container">
<div class="row">
<div class="col">
<h1>Shopping cart</h1>
@if($cart)
<table class="table table-bordered">
<thead>
<tr>
<td>Product</td>
<td class="text-center">Quantity</td>
<td>Price</td>
<td>Sub total</td>
</tr>
</thead>
<tbody>
@foreach($cart as $item)
<tr>
    <td>
    <img class="img-thumbnail" width="70" src="{{ asset('images/' . $item['attributes']['image'] ) }}">
    <span>{{ $item['name'] }}</span>
    </td>
<td class="text-center">
<a data-op="minus" data-pid="{{ $item['id'] }}" class="update-cart-btn" href="#"><i class="fas fa-minus-square"></i></a>
    <input size="1" type="text" value="{{ $item['quantity'] }}">
    <a data-op="plus" data-pid="{{ $item['id'] }}" class="update-cart-btn" href="#"><i class="fas fa-plus-square"></i></a>
</td>
<td>${{ $item['price'] }}</td>
<td>${{ $item['quantity'] * $item['price'] }}</td>
<td class="text-center">
<a href="{{ url('shop/remove-item/' . $item['id']) }}" class="text-danger remove-item-btn"><i class="fas fa-trash"></i> </a>
</td>
</tr>
@endforeach
</tbody>
</table>
<p>
    <b>Total:</b>${{ Cart::getTotal() }}
    <span class="float-right">
    <a href="{{ url('shop/clear-cart') }}" class="btn-btn-light"> Clear Cart</a>
    </span>
</p>
<p>
<a href="{{ url('shop/order-now') }}" class="btn-btn-primary btn-lg">ORDER NOW!</a>
</p>
@else
<p><i>No items in cart!</i></p>
@endif

</div>
</div>
</div>



@endsection