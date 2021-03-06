@extends('frontend.layout')

@section('content')

    @include('frontend.common.slider')
    <div class="bg-paint">
        <div class="container">
            <div class="row">
                <div class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3 col-md-3 col-md-offset-4 text-center">
                    <img class="img-responsive" src="{{ asset('resources/views/frontend/images/logo/endless.png') }}" alt="">
                </div>
            </div>
            <div class="row feature-box">
                @foreach ($features as $item)
                    <div class="col-md-4 col-sm-6 text-center">
                        <img src="{{ asset($item->sliders_image) }}" class="img-feature" alt="">
                        <h4>{{ $item->sliders_title }}</h4>
                        <p>{{ $item->sliders_html_text }}</p>
                    </div>
                @endforeach
            </div>
        </div>  
    </div> 
    <div class="bg-paint_b">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1><span>Our</span> Product</h1>
                </div>
            </div>
            <div class="row feature-product">
                @foreach ($products as $key => $product)
                    <div class="col-lg-4 col-md-6 text-center">
                        <img src="{{ asset($product->products_image) }}" class="img-feature" alt="">
                        <h4>{{ ucwords(trans(strtolower($product->products_name))) }}</h4>
                        <p>{{ App\Models\Setting::getAttr('currency_symbol') }} {{ number_format($product->products_price) }}</p>
                        <p><a href="{{ route('product.detail', $product->products_slug) }}">see more</a></p>
                    </div>
                @endforeach
                <div class="col-md-12 text-center">
                    <a style="color:#fff !important" class="hvr-outline-out button2 btn" href="{{ route('product') }}">Shop Now </a>
                </div>
            </div>
        </div>  
    </div>  

    <div class="container-fluid m-t-50 p-0">
        <div class="row feature-product">
            <?php $toggle_class = 'text-left pull-left'; ?>
            @foreach ($banners as $item)
                <?php $toggle_class = ($toggle_class == 'text-right pull-right' ? 'text-left pull-left' : 'text-right pull-right'); ?>
                <div class="col-md-12 text-center" style="background: url({{ asset($item['sliders_image']) }}) center bottom; background-size: cover">
                    <div class="col-md-4 home-banner <?php echo $toggle_class; ?>">
                        <h1>{{ $item['sliders_title'] }}</h1>
                        <p>{{ $item['sliders_html_text'] }}</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container m-t-50 p-0 text-center">
        <div class="row banner-support">
            
            <div class="col-md-8 col-md-offset-2">
                @foreach ($banner_apps as $item)
                    <div class="col-md-2 col-xs-6 col-sm-4 text-center">
                        {{-- <h1>{{ $item['sliders_title'] }}</h1> --}}
                        <img src="{{ asset($item['sliders_image']) }}" width="84" alt="">
                        <p>{{ $item['sliders_title'] }}</p>
                    </div>
                @endforeach
            </div>
            <div class="clearfix"></div>
            <div class="col-md-12 text-center m-t-50">
                <h4>{{ trans('labels.SupportApplication') }}</span></h4>
                <a class="m-t-50 hvr-outline-out button2 btn" href="">Shop Now </a>
            </div>
        </div>
    </div>
    
@endsection