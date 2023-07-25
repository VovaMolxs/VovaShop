@extends('layouts.layouts')
@section('content')
<!-- Quick view -->

<main class="main">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html" rel="nofollow">Home</a>
                <span></span> Fashion
                <span></span> Abstract Print Patchwork Dress
            </div>
        </div>
    </div>
    <section class="mt-50 mb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-detail accordion-detail">
                        <div class="row mb-50">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="detail-gallery">
                                    <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                    <!-- MAIN SLIDES -->
                                    <div class="product-image-slider">
                                        <figure class="border-radius-10">
                                            <img src="{{asset('/storage')}}/{{$products->link_image}}" alt="product image">
                                        </figure>
                                        <figure class="border-radius-10">
                                            <img src="{{asset('/storage')}}/{{$products->link_image}}" alt="product image">
                                        </figure>
                                        <figure class="border-radius-10">
                                            <img src="{{asset('/storage')}}/{{$products->link_image}}" alt="product image">
                                        </figure>
                                        <figure class="border-radius-10">
                                            <img src="{{asset('/storage')}}/{{$products->link_image}}" alt="product image">
                                        </figure>
                                        <figure class="border-radius-10">
                                            <img src="{{asset('/storage')}}/{{$products->link_image}}" alt="product image">
                                        </figure>
                                        <figure class="border-radius-10">
                                            <img src="{{asset('/storage')}}/{{$products->link_image}}" alt="product image">
                                        </figure>
                                        <figure class="border-radius-10">
                                            <img src="{{asset('/storage')}}/{{$products->link_image}}" alt="product image">
                                        </figure>
                                    </div>
                                    <!-- THUMBNAILS -->
                                    <div class="slider-nav-thumbnails pl-15 pr-15">
                                        <div><img src="{{asset('/storage')}}/{{$products->link_image}}" alt="product image"></div>
                                        <div><img src="{{asset('/storage')}}/{{$products->link_image}}" alt="product image"></div>
                                        <div><img src="{{asset('/storage')}}/{{$products->link_image}}" alt="product image"></div>
                                        <div><img src="{{asset('/storage')}}/{{$products->link_image}}" alt="product image"></div>
                                        <div><img src="{{asset('/storage')}}/{{$products->link_image}}" alt="product image"></div>
                                        <div><img src="{{asset('/storage')}}/{{$products->link_image}}" alt="product image"></div>
                                        <div><img src="{{asset('/storage')}}/{{$products->link_image}}" alt="product image"></div>
                                    </div>
                                </div>
                                <!-- End Gallery -->
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="detail-info">
                                    <h2 class="title-detail">{{$products->title}}</h2>
                                    <div class="product-detail-rating">
                                        <div class="pro-details-brand">
                                            <span> Brands: <a href="shop-grid-right.html">Bootstrap</a></span>
                                        </div>
                                        <div class="product-rate-cover text-end">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width:90%">
                                                </div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (25 reviews)</span>
                                        </div>
                                    </div>
                                    <div class="clearfix product-price-cover">
                                        <div class="product-price primary-color float-left">
                                            <ins><span class="text-brand">${{$products->promotional_price}}</span></ins>
                                            <ins><span class="old-price font-md ml-15">${{$products->regular_price}}</span></ins>
                                            <span class="save-price  font-md color3 ml-15">{{$products->tax_rate}}% Off</span>
                                        </div>
                                    </div>
                                    <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                    <div class="short-desc mb-30">
                                        <p>{{$products->description}}</p>
                                    </div>
                                    <div class="product_sort_info font-xs mb-30">
                                        <ul>
                                            <li class="mb-10"><i class="fi-rs-crown mr-5"></i> 1 Year AL Jazeera Brand Warranty</li>
                                            <li class="mb-10"><i class="fi-rs-refresh mr-5"></i> 30 Day Return Policy</li>
                                            <li><i class="fi-rs-credit-card mr-5"></i> Cash on Delivery available</li>
                                        </ul>
                                    </div>
                                    <div class="attr-detail attr-color mb-15">
                                        <strong class="mr-10">Color</strong>
                                        <ul class="list-filter color-filter">
                                            <li><a href="#" data-color="Red"><span class="product-color-red"></span></a></li>
                                            <li><a href="#" data-color="Yellow"><span class="product-color-yellow"></span></a></li>
                                            <li class="active"><a href="#" data-color="White"><span class="product-color-white"></span></a></li>
                                            <li><a href="#" data-color="Orange"><span class="product-color-orange"></span></a></li>
                                            <li><a href="#" data-color="Cyan"><span class="product-color-cyan"></span></a></li>
                                            <li><a href="#" data-color="Green"><span class="product-color-green"></span></a></li>
                                            <li><a href="#" data-color="Purple"><span class="product-color-purple"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="attr-detail attr-size">
                                        <strong class="mr-10">Size</strong>
                                        <ul class="list-filter size-filter font-small">
                                            <li><a href="#">S</a></li>
                                            <li class="active"><a href="#">M</a></li>
                                            <li><a href="#">L</a></li>
                                            <li><a href="#">XL</a></li>
                                            <li><a href="#">XXL</a></li>
                                        </ul>
                                    </div>
                                    <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                                    <div class="detail-extralink">
                                        <div class="detail-qty border radius">
                                            <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                            <span class="qty-val">1</span>
                                            <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                        </div>
                                        <div class="product-extra-link2">
                                            <button type="submit" class="button button-add-to-cart">Add to cart</button>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                    </div>
                                    <ul class="product-meta font-xs color-grey mt-50">
                                        <li class="mb-5">SKU: <a href="#">FWM15VKT</a></li>
                                        <li class="mb-5">Tags: {{$products->tags}} </li>
                                        <li>Availability:<span class="in-stock text-success ml-5">8 Items In Stock</span></li>
                                    </ul>
                                </div>
                                <!-- Detail Info -->
                            </div>
                        </div>
                        <!--
                        <div class="row">
                            <div class="col-lg-10 m-auto entry-main-content">
                                <h2 class="section-title style-1 mb-30">Description</h2>
                                <div class="description mb-50">
                                    <p>Uninhibited carnally hired played in whimpered dear gorilla koala depending and much yikes off far quetzal goodness and from for grimaced goodness unaccountably and meadowlark near unblushingly crucial scallop
                                        tightly neurotic hungrily some and dear furiously this apart.</p>
                                    <p>Spluttered narrowly yikes left moth in yikes bowed this that grizzly much hello on spoon-fed that alas rethought much decently richly and wow against the frequent fluidly at formidable acceptably flapped
                                        besides and much circa far over the bucolically hey precarious goldfinch mastodon goodness gnashed a jellyfish and one however because.
                                    </p>
                                    <ul class="product-more-infor mt-30">
                                        <li><span>Type Of Packing</span> Bottle</li>
                                        <li><span>Color</span> Green, Pink, Powder Blue, Purple</li>
                                        <li><span>Quantity Per Case</span> 100ml</li>
                                        <li><span>Ethyl Alcohol</span> 70%</li>
                                        <li><span>Piece In One</span> Carton</li>
                                    </ul>
                                    <hr class="wp-block-separator is-style-dots">
                                    <p>Laconic overheard dear woodchuck wow this outrageously taut beaver hey hello far meadowlark imitatively egregiously hugged that yikes minimally unanimous pouted flirtatiously as beaver beheld above forward
                                        energetic across this jeepers beneficently cockily less a the raucously that magic upheld far so the this where crud then below after jeez enchanting drunkenly more much wow callously irrespective limpet.</p>
                                    <h4 class="mt-30">Packaging & Delivery</h4>
                                    <hr class="wp-block-separator is-style-wide">
                                    <p>Less lion goodness that euphemistically robin expeditiously bluebird smugly scratched far while thus cackled sheepishly rigid after due one assenting regarding censorious while occasional or this more crane
                                        went more as this less much amid overhung anathematic because much held one exuberantly sheep goodness so where rat wry well concomitantly.
                                    </p>
                                    <p>Scallop or far crud plain remarkably far by thus far iguana lewd precociously and and less rattlesnake contrary caustic wow this near alas and next and pled the yikes articulate about as less cackled dalmatian
                                        in much less well jeering for the thanks blindly sentimental whimpered less across objectively fanciful grimaced wildly some wow and rose jeepers outgrew lugubrious luridly irrationally attractively
                                        dachshund.
                                    </p>
                                </div>
                                <h3 class="section-title style-1 mb-30">Additional info</h3>
                                <table class="font-md mb-30">
                                    <tbody>
                                    <tr class="stand-up">
                                        <th>Stand Up</th>
                                        <td>
                                            <p>35″L x 24″W x 37-45″H(front to back wheel)</p>
                                        </td>
                                    </tr>
                                    <tr class="folded-wo-wheels">
                                        <th>Folded (w/o wheels)</th>
                                        <td>
                                            <p>32.5″L x 18.5″W x 16.5″H</p>
                                        </td>
                                    </tr>
                                    <tr class="folded-w-wheels">
                                        <th>Folded (w/ wheels)</th>
                                        <td>
                                            <p>32.5″L x 24″W x 18.5″H</p>
                                        </td>
                                    </tr>
                                    <tr class="door-pass-through">
                                        <th>Door Pass Through</th>
                                        <td>
                                            <p>24</p>
                                        </td>
                                    </tr>
                                    <tr class="frame">
                                        <th>Frame</th>
                                        <td>
                                            <p>Aluminum</p>
                                        </td>
                                    </tr>
                                    <tr class="weight-wo-wheels">
                                        <th>Weight (w/o wheels)</th>
                                        <td>
                                            <p>20 LBS</p>
                                        </td>
                                    </tr>
                                    <tr class="weight-capacity">
                                        <th>Weight Capacity</th>
                                        <td>
                                            <p>60 LBS</p>
                                        </td>
                                    </tr>
                                    <tr class="width">
                                        <th>Width</th>
                                        <td>
                                            <p>24″</p>
                                        </td>
                                    </tr>
                                    <tr class="handle-height-ground-to-handle">
                                        <th>Handle height (ground to handle)</th>
                                        <td>
                                            <p>37-45″</p>
                                        </td>
                                    </tr>
                                    <tr class="wheels">
                                        <th>Wheels</th>
                                        <td>
                                            <p>12″ air / wide track slick tread</p>
                                        </td>
                                    </tr>
                                    <tr class="seat-back-height">
                                        <th>Seat back height</th>
                                        <td>
                                            <p>21.5″</p>
                                        </td>
                                    </tr>
                                    <tr class="head-room-inside-canopy">
                                        <th>Head room (inside canopy)</th>
                                        <td>
                                            <p>25″</p>
                                        </td>
                                    </tr>
                                    <tr class="pa_color">
                                        <th>Color</th>
                                        <td>
                                            <p>Black, Blue, Red, White</p>
                                        </td>
                                    </tr>
                                    <tr class="pa_size">
                                        <th>Size</th>
                                        <td>
                                            <p>M, S</p>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="social-icons single-share">
                                    <ul class="text-grey-5 d-inline-block">
                                        <li><strong class="mr-10">Share this:</strong></li>
                                        <li class="social-facebook"><a href="#"><img src="assets/imgs/theme/icons/icon-facebook.svg" alt=""></a></li>
                                        <li class="social-twitter"> <a href="#"><img src="assets/imgs/theme/icons/icon-twitter.svg" alt=""></a></li>
                                        <li class="social-instagram"><a href="#"><img src="assets/imgs/theme/icons/icon-instagram.svg" alt=""></a></li>
                                        <li class="social-linkedin"><a href="#"><img src="assets/imgs/theme/icons/icon-pinterest.svg" alt=""></a></li>
                                    </ul>
                                </div>
                                <h3 class="section-title style-1 mb-30 mt-30">Reviews (3)</h3>
                                -->
                                <!--Comments-->
                                <div class="comments-area style-2">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <h4 class="mb-30">Customer questions & answers</h4>
                                            <div class="comment-list">
                                                @foreach($comments as $comments)
                                                <div class="single-comment justify-content-between d-flex">
                                                    <div class="user justify-content-between d-flex">
                                                        <div class="thumb text-center">
                                                            <!-- <img src="{{ asset('/storage') }}/assets/imgs/page/avatar-6.jpg" alt=""> -->
                                                            <h6><a href="#">{{$comments->name}}</a></h6>
                                                        </div>
                                                        <div class="desc">
                                                            <div class="product-rate d-inline-block">
                                                                <div class="product-rating" style="width:90%">
                                                                </div>
                                                            </div>
                                                            <p>{{$comments->text}}</p>
                                                            <div class="d-flex justify-content-between">
                                                                <div class="d-flex align-items-center">
                                                                    <p class="font-xs mr-30">{{$comments->updated_at}} </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>



                                        <div class="col-xs-12 col-sm-12 col-md-12">



                                        <div class="col-lg-4">
                                            <h4 class="mb-30">Customer reviews</h4>
                                            <div class="d-flex mb-30">
                                                <div class="product-rate d-inline-block mr-15">
                                                    <div class="product-rating" style="width:90%">
                                                    </div>
                                                </div>
                                                <h6>4.8 out of 5</h6>
                                            </div>
                                            <div class="progress">
                                                <span>5 star</span>
                                                <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                            </div>
                                            <div class="progress">
                                                <span>4 star</span>
                                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                            </div>
                                            <div class="progress">
                                                <span>3 star</span>
                                                <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>
                                            </div>
                                            <div class="progress">
                                                <span>2 star</span>
                                                <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
                                            </div>
                                            <div class="progress mb-30">
                                                <span>1 star</span>
                                                <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                                            </div>
                                            <a href="#" class="font-xs text-muted">How are ratings calculated?</a>
                                        </div>
                                    </div>
                                </div>
                                <!--comment form-->
                                <div class="comment-form">
                                    <h4 class="mb-15">Add a review</h4>
                                    <div class="product-rate d-inline-block mb-30">
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8 col-md-12">

                                                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                                <input type="hidden" name="product_id" id="product_id" value="{{ $products->id }}">
                                                <input type="hidden" name="user_id" id="user_id" value="{{ $comments->user_id }}">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <input type="text" id="review_mark" name="mark">
                                                            <textarea class="form-control w-100" name="text" id="review_text" cols="30" rows="9" placeholder="Write Comment"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" id="send_review" class="button button-contactForm">Submit
                                                        Review</button>
                                                </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer class="main">
    <section class="newsletter p-30 text-white wow fadeIn animated">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-md-3 mb-lg-0">
                    <div class="row align-items-center">
                        <div class="col flex-horizontal-center">
                            <img class="icon-email" src="assets/imgs/theme/icons/icon-email.svg" alt="">
                            <h4 class="font-size-20 mb-0 ml-3">Sign up to Newsletter</h4>
                        </div>
                        <div class="col my-4 my-md-0 des">
                            <h5 class="font-size-15 ml-4 mb-0">...and receive <strong>$25 coupon for first shopping.</strong></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <!-- Subscribe Form -->
                    <form class="form-subcriber d-flex wow fadeIn animated">
                        <input type="email" class="form-control bg-white font-small" placeholder="Enter your email">
                        <button class="btn bg-dark text-white" type="submit">Subscribe</button>
                    </form>
                    <!-- End Subscribe Form -->
                </div>
            </div>
        </div>
    </section>
    <section class="section-padding footer-mid">
        <div class="container pt-15 pb-20">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="widget-about font-md mb-md-5 mb-lg-0">
                        <div class="logo logo-width-1 wow fadeIn animated">
                            <a href="index.html"><img src="assets/imgs/theme/logo.svg" alt="logo"></a>
                        </div>
                        <h5 class="mt-20 mb-10 fw-600 text-grey-4 wow fadeIn animated">Contact</h5>
                        <p class="wow fadeIn animated">
                            <strong>Address: </strong>562 Wellington Road, Street 32, San Francisco
                        </p>
                        <p class="wow fadeIn animated">
                            <strong>Phone: </strong>+01 2222 365 /(+91) 01 2345 6789
                        </p>
                        <p class="wow fadeIn animated">
                            <strong>Hours: </strong>10:00 - 18:00, Mon - Sat
                        </p>
                        <h5 class="mb-10 mt-30 fw-600 text-grey-4 wow fadeIn animated">Follow Us</h5>
                        <div class="mobile-social-icon wow fadeIn animated mb-sm-5 mb-md-0">
                            <a href="#"><img src="assets/imgs/theme/icons/icon-facebook.svg" alt=""></a>
                            <a href="#"><img src="assets/imgs/theme/icons/icon-twitter.svg" alt=""></a>
                            <a href="#"><img src="assets/imgs/theme/icons/icon-instagram.svg" alt=""></a>
                            <a href="#"><img src="assets/imgs/theme/icons/icon-pinterest.svg" alt=""></a>
                            <a href="#"><img src="assets/imgs/theme/icons/icon-youtube.svg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3">
                    <h5 class="widget-title wow fadeIn animated">About</h5>
                    <ul class="footer-list wow fadeIn animated mb-sm-5 mb-md-0">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Delivery Information</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms &amp; Conditions</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Support Center</a></li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-3">
                    <h5 class="widget-title wow fadeIn animated">My Account</h5>
                    <ul class="footer-list wow fadeIn animated">
                        <li><a href="#">Sign In</a></li>
                        <li><a href="#">View Cart</a></li>
                        <li><a href="#">My Wishlist</a></li>
                        <li><a href="#">Track My Order</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Order</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5 class="widget-title wow fadeIn animated">Install App</h5>
                    <div class="row">
                        <div class="col-md-8 col-lg-12">
                            <p class="wow fadeIn animated">From App Store or Google Play</p>
                            <div class="download-app wow fadeIn animated">
                                <a href="#" class="hover-up mb-sm-4 mb-lg-0"><img class="active" src="assets/imgs/theme/app-store.jpg" alt=""></a>
                                <a href="#" class="hover-up"><img src="assets/imgs/theme/google-play.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-12 mt-md-3 mt-lg-0">
                            <p class="mb-20 wow fadeIn animated">Secured Payment Gateways</p>
                            <img class="wow fadeIn animated" src="assets/imgs/theme/payment-method.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container pb-20 wow fadeIn animated">
        <div class="row">
            <div class="col-12 mb-20">
                <div class="footer-bottom"></div>
            </div>
            <div class="col-lg-6">
                <p class="float-md-left font-sm text-muted mb-0">&copy; 2021, <strong class="text-brand">Evara</strong> - HTML Ecommerce Template </p>
            </div>
            <div class="col-lg-6">
                <p class="text-lg-end text-start font-sm text-muted mb-0">
                    Designed by <a href="http://alithemes.com/" target="_blank">Alithemes.com</a>. All rights reserved
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="text-center">
                <h5 class="mb-5">Now Loading</h5>
                <div class="loader">
                    <div class="bar bar1"></div>
                    <div class="bar bar2"></div>
                    <div class="bar bar3"></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
