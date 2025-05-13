@extends('layouts.app') 
@section('title')
<title>Herbhue - Cart</title>
@endsection
@section('css')
<style>
    .order-summary{
    background:#ACB69C2B;
    position: sticky; 
    top: 158px;
}
</style>
@endsection
@section('content')
<div class="container-fluid my-5"  data-aos="fade-up"
     data-aos-duration="2000">
    <div class="container">
        @if(count($cart)>0)
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="card border-0">
                    <div class="card-header bg-transparent d-flex justify-content-between ">
                        <h5>{{ count($cart) }} Item in your Cart</h3>
                        
                    </div>
                    <div class="card-body">
                        @foreach($cart as $cart_product)
                        <div class="row @if(!$loop->last) border-bottom  @endif pb-2 mb-3">
                                <div class="col-3">
                                    @if($cart_product->product_image!="")
                                    <img src="https://herbhue.azurewebsites.net/herbhue-admin/public/images/{{ $cart_product->product_image }}" class="w-100" alt="">
                                    @else
                                    <img src="{{ asset('img/no_image.svg') }}"  class="w-100" alt="">
                                    @endif
                                </div>
                                <div class="col-6">
                                    <h6 class="fw-bold">{{ $cart_product->product_name }}</h6>
                                    <p class="text-secondary p-0 m-0">{{ $cart_product->describe }}</p>
                                    <span class="text-secondary text-nowrap">M.R.P: <span
                                            class="text-decoration-line-through text-secondary">&pound; {{ $cart_product->mrp_price }}</span><span
                                            class="fw-bold text-black ms-3">&pound; {{ $cart_product->price }}</span></span>
                                            <p class="text-black  fw-bold pb-1 mb-1 mob-view">
                                        <a href="javascript:void(0);" class="text-dark" @if(!empty(Session::get('username'))) onclick="addtowishlist({{ $cart_product->product_id }});" @else onclick="showalert();" @endif><i class="fa fa-heart"></i> Save for Later</a>
                                    </p>

                                </div>
                                <div class="col-3">

                                    <p class="text-end">
                                        <a href="javascript:void(0);" onclick="deletecart({{ $cart_product->id }});"><img src="{{ asset('img/delete_FILL0_wght400_GRAD0_opsz24.svg') }}" alt="" style="width: 20px;"></a>
                                    </p>
                               
                                    <p class="text-black text-end fw-bold pb-1 mb-1 web-view">
                                        <a href="javascript:void(0);" class="text-dark" @if(!empty(Session::get('username'))) onclick="addtowishlist({{ $cart_product->product_id }});" @else onclick="showalert();" @endif><i class="fa fa-heart"></i> Save for Later</a>
                                    </p>
                                    <div class="d-flex justify-content-end">
                                        <a class="minus btn btn-dark btn-sm shadow"  style="height: 35px;" onclick="decrementvalue({{ $cart_product->option_id }})" href="javascript:void(0);">-</a>
                                        <input type="number" class="count shadow border-0 border-top border-bottom value{{ $cart_product->option_id }}"
                                        name="qty" value="{{ $cart_product->quantity }}" style="width: 40px; height: 35px;" disabled="">
                                        <a class="plus btn btn-dark btn-sm   shadow"
                                            style="height: 35px;"  onclick="incrementvalue({{ $cart_product->option_id }})" href="javascript:void(0);">+</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-6">

            <div class="card border-0  rounded-0 p-4 order-summary"  data-aos="fade-up"
     data-aos-duration="2000">
                    <p class="fs-5  mt-1">Order Summary</p>
                    <p class="d-flex justify-content-between px-0 pb-2 mb-1">
                        <strong>Cart value</strong> 
                        <span class="text-muted">&pound; {{ $cart_total }}</span>
                    </p>    
                    <p class="d-flex justify-content-between border-bottom px-0 pb-2 mb-1">
                        <strong>Delivery Charges</strong> 
                        <span class="text-success">free</span>
                    </p>    
                    @php $coupon_amount=0; @endphp
                    @if(!empty(Session::get('coupon_code')))
                    @php $coupon_amount=Session::get('coupon_amount'); @endphp
                    
                    <p class="d-flex justify-content-between border-bottom px-0 pb-2 mb-1">
                        <strong>Coupon Charges</strong> 
                        <span  class="text-muted">&pound; {{ $coupon_amount }}</span>
                    </p>
                    @endif
                    <p class="d-flex justify-content-between border-bottom px-0 pb-2 mb-1">
                        <strong>Order Total</strong> 
                        <span class="text-success">&pound; {{ $cart_total-$coupon_amount }}</span>
                    </p> 

                    <p class="d-flex justify-content-between px-0 pb-2 mb-1">
                        <strong>Amount To be paid</strong> 
                        <span class="text-success">&pound; {{ $cart_total-$coupon_amount }}</span>
                    </p> 

                    <div class="card-footer bg-transparent border-0 p-0">
                           
                    <div class="card shadow my-4 pt-1 pb-0">
                                <div class="card-body d-flex justify-content-between py-2" data-bs-toggle="modal" data-bs-target="#exampleModal" style="cursor:pointer;">

                                    <h4><img src="{{ asset('img/Group 70.svg') }}" alt="" style="width: 35px;" class="me-2">Apply Coupon</h4>

                                    <p class="pb-0 mb-0"><img src="{{ asset('img/Down Arrow.svg') }}" style="width: 12px;" alt=""></p>
                                </div>
                            </div>
                    </div>
                    @if(empty(Session::get('username')))
                        <a href="{{ route('login') }}"  class="btn bg-black text-white w-100 btn-lg py-3">Checkout</a>
                        @else
                        <a href="{{ route('checkout') }}"  class="btn bg-black text-white w-100 btn-lg py-3">Checkout</a>
                        @endif
                </div>


            </div>

        </div>
        @else
        <div class="row mt-3">
          <div class="col-md-3"></div>
          <div class="col-md-6">  
            <div class="d-flex justify-content-center">
                <img src="{{ asset('img/no-cart.png') }}" alt="Cart Empty" class="w-75">
            </div> 
        <h5 class="text-center"> Your cart is empty.</h5>
        </div>

          <div class="col-md-3"></div>
           
        </div>
        @endif
    </div>

</div>
@if(count($cart)>0)
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-body">

            <a href="javascript:void(0);" class="close" data-bs-dismiss="modal" aria-label="Close"><img  src="{{ asset('img/close_FILL0_wght400_GRAD0_opsz48 (2).svg') }}" style="width: 60px;position:absolute;top: -17%;left: 40%;background: white;padding: 2%; clip-path:circle();" alt="X"></a>

                    <div class="mb-3">
                        <label for="coupon_code" class="form-label text-black">Coupon Code </label>
                        <input type="text" class="form-control border-0 border-bottom border border-black rounded-0" id="coupon_code" name="coupon_code" placeholder="Enter Coupon Code" required>
                    </div>
                    
                    <div>
                        <button type="button" class="btn btn-dark text-white w-100" onclick="applycoupon();">Apply Coupon</button>

                    </div>
 
            </div>
        </div>
    </div>
</div>
@endif
@endsection
@section('script')
<script>
    function deletecart(cartid)
    {
      if(confirm("Are you sure want to delete this product from cart?"))
      {
        var url="{{URL('deletecart')}}";
         $.ajax(
        {
          url: url,
          method: 'delete', 
          data:{"cartid":cartid, "_token": "{{ csrf_token() }}" },
          success: function (response)
          {
            alert(response);
            window.location.reload();
          }
        });
      }        
    }
    function decrementvalue(optionid)
    {
      value1=$(".value"+optionid).val();
      value1=value1-1;
      if(value1<0) value1=0;
      $(".value"+optionid).val(value1);
      var url="{{URL('decrementvalue')}}";
      $.ajax(
        {
          url: url,
          method: 'post', 
          data:{"optionid":optionid,"quantity":	value1, "_token": "{{ csrf_token() }}" },
          success: function (response)
          {
            alert(response);
            window.location.reload();
          }
        });
    }
    function incrementvalue(optionid)
    {
      value1=$(".value"+optionid).val();
      value1=parseInt(value1)+1;
      if(value1<0) value1=0;
      $(".value"+optionid).val(value1);
      
      var url="{{URL('incrementvalue')}}";
      $.ajax(
        {
          url: url,
          method: 'post', 
          data:{"optionid":optionid,"quantity":	value1, "_token": "{{ csrf_token() }}" },
          success: function (response)
          {
            alert(response);
            window.location.reload();
          }
        });
    }
    function applycoupon()
    {
      var coupon=$("#coupon_code").val();
      if(coupon!="")
      {
       var url="{{URL('applycoupon')}}";
         $.ajax(
        {
          url: url,
          method: 'post', 
          data:{"coupon_code":coupon, "_token": "{{ csrf_token() }}" },
          success: function (response)
          {
            if(response=="notvalid")
            {
                alert("Please enter the valid coupon code");
            }
            else
            {
                alert("Coupon code applied");
                window.location.reload();
            }
           
          }
        });
      }
      else
      {
          alert("Please enter the coupon code");
      }
      
    }
    function addtowishlist(product_id)
    {
    //alert(product_id);
        var url="{{URL('addtowishlist')}}";
        $.ajax(
        {
            url: url,
            method: 'post', 
            data:{"product_id":product_id, "_token": "{{ csrf_token() }}" },
            success: function (response)
            {
                alert(response);
                window.location.reload();
            }
        });
    }
    function showalert()
    {
        alert('You are not Logged In. Please Register/LogIn yourself !');
        window.location.href="{{route('login') }}";
    }
</script>

@endsection
