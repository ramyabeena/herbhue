@extends('layouts.app') 
@section('title')
<title>Herbhue - Thanks Page</title>
@endsection
@section('css')

@endsection
@section('content')
<div class="container-fluid my-5">
    <div class="container"  data-aos="zoom-in"
     data-aos-duration="2000">
        <div class="row">
            <div class="col-md-8 border-end">
                <div class="d-flex justify-content-center">
                    <img src="{{asset('img/order-successful.png')}}" style="width:150px" alt="">
                </div>

                <h3 class="text-black fw-bold text-center">Order Confirmed</h3>
                <p class="fs-5 text-center ">Your order is currently being processed. <br> You will received an order confirmation email shortly.</p>

                <p class="fs-5 text-center ">Total Price for item &pound; {{ $order_amount }}</p>
                <p class="fs-5 text-center "><a href="#" class="text-decoration-none text-black"> View Details > </a></p>
                <div class="text-center">
                    <a href="{{ route('products') }}"    title="Continue Shopping"> <button type="button" class="btn btn-dark">Continue Shopping</button></a>
                </div>
              
            </div>
            <div class="col-md-4  pt-5">
                <p class="fs-4 text-muted fw-bold">Thank you for shopping with us. <br> Visit again !</p>
            </div>
        </div>
    </div>
    <!-- Thank You for ordering with us.<br>
    You have made a successfull order.<br>
    Your Order Id is {{ $order_id }}.<br>
    <a href="{{ route('products') }}" class="btn btn-outline-black"   title="Continue Shopping">Continue Shopping</a> -->
</div>
@endsection