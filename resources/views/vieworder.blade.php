@extends('layouts.app')
@section('title')
<title>Herbhue - View Order {{ $order->order_id }}</title>
@endsection
@section('css')

@endsection
@section('content')
<div class="container-fluid">
<div class="container mb-5">
    <h4 class="text-black my-4">View Order {{ $order->order_id }}</h4>

  		
  	<p>Order Number : <strong> {{ $order->order_id }}</strong><br>
     Date : <strong> {{ $order->added_date }}</strong><br>
     Payment Method : <strong>{{ $order->payment_method }}</strong><br>
    </p>
    <h3 class="section-title section-title__sm mb-2 pb-2 font-size-18">Order details</h3>
    <table class="table m-3">
      <thead>
      <tr>
        <th class="product-name">Product</th>
        <th class="product-subtotal">Total</th>
      </tr>
      </thead>
      <tbody>
        @if(count($order_products)>0)
        @foreach($order_products as $ord_prod)
        <tr>
  
          <td>{{ $ord_prod->product_name }} x {{ $ord_prod->quantity }}</td>
          <td>&pound; {{ $ord_prod->total }}</td>
        </tr>
        @endforeach
        @endif
        <tr>
          <td>Sub Total</td>
          <td>&pound; {{ $order->subtotal }}</td>
        </tr>
         <tr>
          <td>Delivery Charge</td>
          <td>&pound; {{ $order->delivery_charge }}</td>
        </tr>
        @if($order->coupon_amount>0)
         <tr>
          <td>Coupon Amount</td>
          <td>&pound; {{ $order->coupon_amount }}</td>
        </tr>
        @endif
        <tr>
          <td>Total</td>
          <td>&pound; {{ $order->total }}</td>
        </tr>
      </tbody>
    </table> 
    <table>
      <tr>
        <th><h3 class="section-title section-title__sm mb-2 pb-2 font-size-18">Billing Address</h3></th>
      </tr>
      <tr>
        <td>
         {{ $billing->billing_firstname }} {{ $billing->billing_lastname }}<br>
        	{{ $billing->billing_street_address }}<br>
            {{ $billing->billing_street_address2 }}<br>
            {{ $billing->billing_city }}<br>
            {{ $billing->billing_pincode }}<br>
            {{ $billing->billing_phone }}
        </td>
      <tr>  
    </table>
    </div>
</div>
@endsection
@section('script')

@endsection
