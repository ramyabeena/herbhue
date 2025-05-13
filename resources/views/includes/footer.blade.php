 <!-- Footer -->


 <footer class="text-start bg-white text-muted">



<!-- Section: Social media -->
<section class=" p-4 border-bottom " style=" background:#FDF4F4;">
    <div class="container  ">
        <h4 class="text-black fw-bold mb-1 pb-1 text-center">Sign up and save</h4>
        <p class="text-black py-0 my-0 text-center">Sign up for email updates on products offers and discounts</p>
       <div class="d-flex justify-content-center mt-4">
       <div class="input-group mb-3  subscribe  ">
        <input type="email" id="subscribeEmail" name="subscribeEmail" class="rounded-start-pill shadow form-control   form-control-lg" aria-describedby="button-addon2" placeholder="Enter your email">
        <button class="btn btn-secondary shadow rounded-end-circle  px-lg-5 text-white" type="button" id="button-addon2" onclick="subscribe();">Subscribe</button>
        </div>
       </div>
    </div>
    <!-- Right -->
</section>
<!-- Section: Social media -->

<!-- Section: Links  -->
<section class="border-bottom">
    <div class="container text-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <!-- Content -->
                <h6 class="text-uppercase fw-bold mb-4 text-black">
                    Got Questions? Call Us 24/7
                </h6>
                <p class="text-black fw-bold">
                    <img src="{{ asset('img/Call Icon.svg') }}" width="18px" class="me-2" alt="call icon">+44 7480603398
                </p>
                <h6 class="text-uppercase fw-bold my-4 text-black">
                    Contact Info
                </h6>
                <p class="text-black  fw-medium">
                    <img src="{{ asset('img/Address Icon.svg') }}" width="18px" class="me-2"alt="address">Theodor Court, 1 Nobel Close, Colindale, NW9 5TF, United Kingdom
                </p>
                <ul class="ul3 ps-0">
                    <li class="social-icon me-2"><a href="javascript:void(0);"><img src="{{ asset('img/Facebook.png') }}" alt="social icon"></a></li>
                    <li class="social-icon me-2"><a href="javascript:void(0);"><img src="{{ asset('img/Insta.png') }}" alt="social icon"></a></li>
                    <li class="social-icon me-2"><a href="javascript:void(0);"><img src="{{ asset('img/Pinterest.png') }}" alt="social icon"></a></li>
                    <li class="social-icon me-2"><a href="javascript:void(0);"><img src="{{ asset('img/Twitter.png') }}" alt="social icon"></a></li>
                    <li class="social-icon me-2"><a href="javascript:void(0);"><img src="{{ asset('img/Youtube.png') }}" alt="social icon"></a></li>
                </ul>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2  mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-black fw-bold mb-4">
                    Information
                </h6>
                <p class="pb-0 mb-0">
                    <a href="{{ route('home') }}" class="text-black fw-medium">Home</a>
                </p>
                <p class="pb-0 mb-0">
                    <a href="{{ route('aboutus') }}" class="text-black fw-medium">About</a>
                </p>
                <p class="pb-0 mb-0">
                    <a href="{{ route('products') }}" class="text-black fw-medium">Shop</a>
                </p>
                <p class="pb-0 mb-0">
                    <a href="{{ route('blogpage') }}" class="text-black fw-medium">Blog</a>
                </p>
                <p class="pb-0 mb-0">
                    <a href="{{ route('contact') }}" class="text-black fw-medium">Contact Us</a>
                </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2  mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-black fw-bold mb-4">
                    Accounts
                </h6>
                <p class="pb-0 mb-0">
                    <a href="{{ route('myaccount') }}" class="text-black fw-medium">Your Account</a>
                </p>
                <p class="pb-0 mb-0">
                    <a href="{{ route('login') }}" class="text-black fw-medium">Login/Register</a>
                </p>
                <p class="pb-0 mb-0">
                    <a href="{{ route('myorders') }}" class="text-black fw-medium">Order History</a>
                </p>
                <p class="pb-0 mb-0">
                    <a href="{{ route('mywishlist') }}" class="text-black fw-medium">Wishlist</a>
                </p>

                <p class="pb-0 mb-0">
                    <a href="{{ route('viewcart') }}" class="text-black fw-medium">Cart</a>
                </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3  mx-auto mb-md-0 mb-4">
                <!-- Links -->
                <h6 class="text-black fw-bold mb-4">
                    Useful Links
                </h6>

                <p class="pb-0 mb-0">
                    <a href="javascript:void(0);" class="text-black fw-medium"> Privacy Policy</a>
                </p>
                <p class="pb-0 mb-0">
                    <a href="javascript:void(0);" class="text-black fw-medium"> Shipping Policy</a>
                </p>
                <p class="pb-0 mb-0">
                    <a href="javascript:void(0);" class="text-black fw-medium">Return Policy </a>
                </p>
                <p class="pb-0 mb-0">
                    <a href="javascript:void(0);" class="text-black fw-medium">Refund Policy</a>
                </p>

                <p class="pb-0 mb-0">
                    <a href="javascript:void(0);" class="text-black fw-medium">Disclaimer</a>
                </p>
            </div>
            <!-- Grid column -->
        </div>
        <!-- Grid row -->
    </div>
    <div class="container mt-3 border-top pt-2">
        <div class="row my-3">
            <div class="col-md-4">
                <div class="row">
                    <div class="col-2">
                        <img src="{{ asset('img/Reliable.png') }}" alt="reliable" width="80px">
                    </div>
                    <div class="col-10 ps-3">
                        <h6 class="text-black text-start ps-2 ps-lg-0">Reliable</h6>
                        <p class="text-secondary small text-start ps-2 ps-lg-0 fw-medium"> All products displayed on Herbhue are procured from
                            verified and licensed pharmacies. All labs listed on the platform are accredited</p>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-2">
                        <img src="{{ asset('img/Secure.png') }}" alt="Secure"   width="60px">
                    </div>
                    <div class="col-10 ps-3">
                        <h6 class="text-black text-start ps-2 ps-lg-0">Secure</h6>
                        <p class="text-secondary small text-start ps-2 ps-lg-0 fw-medium"> Herbhue uses Secure Sockets Layer (SSL) 128-bit encryption and is Payment Card Industry Data Security Standard (PCI DSS) compliant</p>

                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="row">
                    <div class="col-2">
                        <img src="{{ asset('img/Affordable.png') }}" alt="Affordable"   width="80px">
                    </div>
                    <div class="col-10 ps-3">
                        <h6 class="text-black text-start ps-2 ps-lg-0">Affordable</h6>
                        <p class="text-secondary small text-start ps-2 ps-lg-0 fw-medium">Find affordable medicine substitutes, save up to 50% on health products, up to 80% off on lab tests and free doctor consultations.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section: Links  -->

<!-- Copyright -->
<div class="container-fluid bg-secondary">
    <div class="container px-4 pt-1">
        <div class="row">
            <div class="col-md-7 pt-2">
                <p class="fs-6 text-black fw-medium">&copy; Herbhue | All Rights Reserved | Powered By SEO DIGITAL INDIA MARKETING</p>
            </div>
            <div class="col-md-5 text-end">
                <img src="{{ asset('img/Payment Method.png') }}" width="320px" alt="">
            </div>
        </div>


    </div>
</div>

<!-- Copyright -->
</footer>
<!-- Footer -->
