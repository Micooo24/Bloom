@extends('layouts.proddesign')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
    <div class="menu-section">
        <h2>Products</h2>
        <div class="container"> 
            @foreach ($products as $product)
                <div class="product-card">
                    <div class="service">
                        <h3>{{ $product->product_name }}</h3>
                        <div class="slider" id="slider{{ $product->id }}">
                            @foreach (explode(',', $product->product_image) as $key => $image)
                                @if ($key == 0)
                                    <div class="carousel-item">
                                        <img src="/product_image/{{ $image }}" class="d-block w-100" alt="Image {{ $key + 1 }}">
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#" role="button" data-slider="slider{{ $product->id }}">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a class="carousel-control-next" href="#" role="button" data-slider="slider{{ $product->id }}">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                        <p>Description: {{ $product->product_description }}</p>
                        <p>Price: ${{ $product->product_price }}</p>
                        <!-- Quantity selector -->
                        <div class="product-quantity">
                            <button class="product-quantity-btn product-quantity-minus">
                                <span class="product-icon">-</span>
                            </button>
                            <input type="text" name="quantity" value="1" class="qty">
                            <button class="product-quantity-btn product-quantity-plus">
                                <span class="product-icon">+</span>
                            </button>
                        </div>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        $(document).ready(function(){
            // Loop through each slider and initialize Slick
            $('.slider').each(function(){
                var sliderId = $(this).attr('id');
                $(this).slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 2000,
                    arrows: true,
                    prevArrow: '<button type="button" class="slick-prev" data-slider="' + sliderId + '"><</button>',
                    nextArrow: '<button type="button" class="slick-next" data-slider="' + sliderId + '">></button>',
                });
            });

            // Handle click events for custom arrows
            $('.carousel-control-prev, .carousel-control-next').on('click', function(e){
                e.preventDefault();
                var sliderId = $(this).data('slider');
                $('#' + sliderId).slick($(this).attr('class').includes('prev') ? 'slickPrev' : 'slickNext');
            });
        });
    </script>
@endsection
