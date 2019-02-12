@extends('frontend.layout')

@section('addcss')
<link rel="stylesheet" href="{{ asset('resources/views/frontend/css/flexslider.css') }}" type="text/css" media="screen" />
<link href="{{ asset('resources/views/frontend/css/easy-responsive-tabs.css') }}" rel='stylesheet' type='text/css'/>
<style>
.resp-tabs-list li {
	border-bottom: 3px solid #ccc;
    color: #ccc !important;
    font-weight: normal !important;
    margin-right: 12px;
}
.resp-tabs-list .resp-tab-active {
	border-bottom: 4px solid #ff6633;
    background: #ff6633;
    color: #fff !important;
    font-weight: normal !important;
    border-radius: 6px;
}
.resp-tab-active:before {
    display: none;
}
</style>
@endsection

@section('content')

<div class="page-head_agile_info_w3l">
    <div class="container dottedline-bheim">
        <h3>Endless <span>Products  </span></h3>
        <!--/w3_short-->
        <div class="services-breadcrumb">
            <div class="agile_inner_breadcrumb">

                <ul class="w3_short">
                    <li><a href="">Home</a><i>|</i></li>
                    <li>
                        <a href="">
                            {{ $product->categories_name }}
                        </a><i>|</i></li>
                    <li>
                        {{ ucwords(strtolower($product->products_name)) }}
                    </li>
                </ul>
            </div>
        </div>
        <!--//w3_short-->
    </div>
</div>

<div class="products spaceproheim">
    <div class="container p-0">
        
            <div class="single-page">
                <div class="single-page-row" id="detail-21">
                    <div class="col-md-6">
                            <div id="slider" class="flexslider">
                              <ul class="slides">
                                    <li>
                                        <img src="{{ asset($product->products_image) }}" data-imagezoom="true"/>
                                    </li>
                                    @foreach ($product_images as $item)
                                        <li>
                                            <img src="{{ asset($item->image) }}" data-imagezoom="true"/>
                                        </li>
                                    @endforeach
                              </ul>
                            </div>
                            <div id="carousel" class="flexslider">
                              <ul class="slides">
                                    <li>
                                        <div class="thumb-image"><img src="{{ asset($product->products_image) }}"/></div>
                                    </li>
                                    @foreach ($product_images as $item)
                                        <li>
                                            <div class="thumb-image"><img src="{{ asset($item->image) }}"/></div>
                                        </li>
                                    @endforeach
                              </ul>
                            </div>
                            
                    </div>
            
                    <form action="" method="post">
                        <div class="col-md-6 single-right-left simpleCart_shelfItem">
                            
                            <div class="product-attr">
                                <h4>{{ trans('labels.Price') }} :</h4>
                                <p><span class="item_price"> {{ $currency }} </span> {{ $product->products_price }}</p>
                                <h4>{{ trans('labels.Quantity') }} :</h4>
                                <div class="form-group m-t-10" style="width:100px">
                                    <input type="number" value="1" min="1" name="product_qty" class="form-control">
                                </div>
                            </div>
            
                            <div class="">
                                <div class="row">
                                    <div class="col-md-4 col-lg-4 col-xs-4 col-sm-4">
                                        <button class="btn btn-buy-product btn-block" type="submit" name="add_cart">
                                            Buy now
                                        </button>
                                    </div>
                                    <div class="col-md-4 col-lg-4 col-xs-4 col-sm-4">
                                        <button class="btn btn-view-product btn-block" type="submit" name="add_wishlist">
                                            Add to Cart
                                        </button>
                                    </div>
                                    <div class="col-md-4 col-lg-4 col-xs-4 col-sm-4">
                                        <button class="btn btn-wishlist-product btn-block" type="submit" name="add_wishlist">
                                            Wishlist
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <ul class="social-nav model-3d-0 footer-social w3_agile_social single_page_w3ls">
                                <li class="share">share on : </li>
                                <li>
                                    <a href="https://web.facebook.com/blankenheimID?_rdc=1&amp;_rdr" class="facebook">
                                        <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/blankenheimID" class="twitter">
                                        <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/blankenheimstyle/?hl=en" class="instagram">
                                        <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://id.pinterest.com/blankenheim/" class="pinterest">
                                        <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                        <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </form>
            
                    <div class="clearfix"> </div>
                </div>
            </div>

        <!-- /new_arrivals -->
        <div class="responsive_tabs_agileits">
            <div id="horizontalTab">
                <ul class="resp-tabs-list">
                    <li>Hardware Description</li>
                    <li>Endless OS Package</li>
                </ul>
                <div class="resp-tabs-container">
                    <!--/tab_one-->
                    <div class="tab1">

                        <div class="single_page_agile_its_w3ls">
                            <h6>{{ ucwords(strtolower($product->products_name)) }}</h6>
                            <p>
                                {{ strip_tags($product->products_description) }}
                            </p>
                        </div>
                    </div>
                    <!--//tab_one-->
                    <div class="tab2">

                        <div class="single_page_agile_its_w3ls">
                            <div class="bootstrap-tab-text-grids">
                                <div class="bootstrap-tab-text-grid">
                                    <div class="bootstrap-tab-text-grid-left">
                                        <img src="images/t1.jpg" alt=" ">
                                    </div>
                                    <div class="bootstrap-tab-text-grid-right">
                                        <ul>
                                            <li><a href="#">Admin</a></li>
                                            <li><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i> Reply</a></li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget.Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit.</p>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="add-review">
                                    <h4>add a review</h4>
                                    <form action="#" method="post">
                                        <input type="text" name="Name" required="Name">
                                        <input type="email" name="Email" required="Email">
                                        <textarea name="Message" required=""></textarea>
                                        <input type="submit" value="SEND">
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab3">

                        <div class="single_page_agile_its_w3ls">
                            <h6>SIZE GUIDE</h6>
                            <div class="container">
                                <div class="row">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>EURO</th>
                                                <th>CM</th>
                                                <th>UK</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>39</td>
                                                <td>25.5</td>
                                                <td>8</td>
                                            </tr>
                                            <tr>
                                                <td>40</td>
                                                <td>26</td>
                                                <td>8.5</td>
                                            </tr>
                                            <tr>
                                                <td>41</td>
                                                <td>26.5</td>
                                                <td>9</td>
                                            </tr>
                                            <tr>
                                                <td>42</td>
                                                <td>27</td>
                                                <td>9.5</td>
                                            </tr>
                                            <tr>
                                                <td>43</td>
                                                <td>27.5</td>
                                                <td>10</td>
                                            </tr>
                                            <tr>
                                                <td>44</td>
                                                <td>28</td>
                                                <td>10.5</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //new_arrivals -->
        <!--/slider_owl-->
    </div>
</div>
<!--//single_page-->

<!--see other products-->
<div class="products spaceproheim ">
    <div class="container">
        <hr>
        <div class="single-page ">
            <div class="single_page_agile_its_w3ls centerheim ">
                <h6>{{ trans('labels.OtherProduct') }}</h6>
            </div>
        </div>
    </div>
</div>
<!--see other products-->
@stop

@section('addscript')
<script type="text/javascript" src="{{ asset('resources/views/frontend/js/jquery-2.1.4.min.js') }}"></script>>
<script src="{{ asset('resources/views/frontend/js/easy-responsive-tabs.js') }}"></script>
<script src="{{ asset('resources/views/frontend/js/imagezoom.js') }}"></script>
<script src="{{ asset('resources/views/frontend/js/jquery.flexslider.js') }}"></script>
<script>
    $(window).load(function() {
        $('#carousel').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            itemWidth: 120,
            asNavFor: '#slider'
        });
        
        $('#slider').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            sync: "#carousel"
        });
    });
</script>
<script type="text/javascript" src="{{ asset('resources/views/frontend/js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('resources/views/frontend/js/jquery.easing.min.js') }}"></script>
@endsection