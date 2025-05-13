@extends('layouts.app') 
@section('title')
<title>Herbhue - Shop Products</title>
@endsection
@section('css')
<style>
    
 .owl-carousel .owl-nav button.owl-prev,
.owl-carousel .owl-nav button.owl-next {
  z-index: 1;
  width: 40px;
  height: 40px;
  /* background-color: white; */
  position: absolute;
  top: 45% !important;
  transform: translatey(-50%);
  clip-path: circle();
  /* color: #3038AC !important;
  -webkit-box-shadow: 0px 1px 23px 0px rgba(0, 0, 0, 0.75) !important;
  -moz-box-shadow: 0px 1px 23px 0px rgba(0, 0, 0, 0.75) !important;
  box-shadow: 0px 1px 23px 0px rgba(0, 0, 0, 0.75) !important; */

}

/* .owl-nav button span {
  font-size: 30px;
  height: 100%;
  display: block;
  width: 100%;
  line-height: 35px;
  -webkit-box-shadow: 0px 1px 23px 0px rgba(0, 0, 0, 0.75) !important;
  -moz-box-shadow: 0px 1px 23px 0px rgba(0, 0, 0, 0.75) !important;
  box-shadow: 0px 1px 23px 0px rgba(0, 0, 0, 0.75) !important;
}  */
  .owl-carousel .owl-nav button.owl-prev {
  left: 0;
} 
  .owl-carousel .owl-nav button.owl-next {
  right: 0;
}

.owl-carousel .owl-nav {
  margin: 0;
}

.owl-carousel .owl-item img {
  display: flex !important;
  width: 100% !important;
} 
</style>
@endsection

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
@section('content')
<div class="container-fluid mb-5">
    <img src="{{asset('img/shop-banner.png')}}" class="w-100" height="300px" alt="">
    
    <div class="container my-3">
    <form id="prodcut-form" method="get" action="{{ route('products') }}">
                    @csrf
<div class="input-group input-group-lg mb-3 rounded-0 shadow">
  <input type="text" class="form-control" placeholder="Search by Product Name" name="searchkey" value="{{ request()->get('searchkey') }}">
  <button class="btn  bg-transparent" type="submit" id="button-addon2"><i class="fa fa-search"></i></button>
</div>
</form>
</div>
    <div class="container my-5" >
            <div class="cate1 owl-carousel owl-theme">
            @foreach($products as $prod)
            <div class="item">
            <div class="card border-secondary shadow">
                    <div class="card-body">
                        <div class="text-center mb-3">
                            @if($prod->image1!="")
                            <img src="https://herbhue.azurewebsites.net/herbhue-admin/public/images/{{ $prod->image1 }}" style="width:100%; height:230px;" alt="">
                            @else
                            <img src="{{ asset('img/no_image.svg') }}" style="width:100%; height:230px;" alt="">
                            @endif
                        </div>
                        <p class="small text-center text-secondary py-0 my-0">{{ $prod->product_options->quantity }} {{ $prod->product_options->quantitytype }}</p>
                        <div class="d-flex justify-content-center">
                        <h5 class="text-truncate text-center" style="max-width: 265px;">{{ $prod->name }}</h5></div>
                        <div class="d-flex justify-content-center">
                        <p class="text-secondary text-center pb-1 mb-1  text-truncate" style="max-width: 265px;">
                        {!! $prod->description !!}</p></div>
                        
                        <a href="{{ route('productdetail', $prod->id) }}" class="btn btn-outline-dark text-black bg-white fw-bold w-100 text-black">Buy 
                            <span class="text-decoration-line-through text-muted mx-1"> &pound; {{ $prod->product_options->mrp_price }}</span> 
                            <span class="text-black"> &pound; {{ $prod->product_options->price }}</span>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>  
        
    </div>

    <div class="container" >

    <div class="cate12 owl-carousel owl-theme">
         @foreach($category as $cat)
            <div class="item">
            <div class="card border-0">
                    <img src="https://herbhue.azurewebsites.net/herbhue-admin/public/images/{{ $cat->image }}" class=" card-img-top mb-3" width="150px" alt="">
                    <div class="top-desc">
                        <h4>{{ $cat->name }}</h4>
                        <!-- <p class="text-secondary">For your skin, gut and muscle health.</p> -->
                    </div>
                    <div class="desc-bottom">
                        <a href="{{ route('products')}}?category_id={{ $cat->id}}" class="btn btn-secondary rounded-pill ">LEARN MORE</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
       
    </div>
</div>


@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script async="" defer="" src="https://buttons.github.io/buttons.js"></script>
    <script>
        $(".cate1").owlCarousel({
            loop: true,
            margin: 20,
            navText: ['<img src="{{ asset('img/arrow-right.png') }}">', '<img src="{{ asset('img/owl-arrow.png') }}">'],    
            autoplay: false,
            nav: true,
            dots: false,
            responsive: {
                0: {
                    items: 1, 
                    nav: true,
                },
                600: {
                    items: 1, 
                    nav: true,
                },
                1000: {
                    items: 4, 
                    nav: true,
                },
            },
        });


        $(".cate12").owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            navText: ['<img src="{{ asset('img/arrow-right.png') }}">', '<img src="{{ asset('img/owl-arrow.png') }}">'],    
            autoplay: false,
            dots: false,
            responsive: {
                0: {
                    items: 1,
                    nav: true,
                },
                600: {
                    items: 1,
                    nav: true,
                },
                1000: {
                    items: 4,
                    nav: true,
                },
            },
        });
</script>
@endsection
