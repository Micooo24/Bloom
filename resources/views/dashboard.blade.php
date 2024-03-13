<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- Add dd($products) here to debug -->    
    <div class="container">
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div id="productCarousel{{$product->id}}" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @php
                                            $imageArray = explode(',', $product->product_image);
                                        @endphp
                                        @foreach($imageArray as $key => $image)
                                            <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                                                <img src="{{ asset('product_image/' . trim($image)) }}" class="d-block w-100" alt="{{ $product->product_name }}" style="height: 50px; width: 50px;">
                                            </div>
                                        @endforeach
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel{{$product->id}}" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#productCarousel{{$product->id}}" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $product->product_name }}</h5>
                                    <p class="card-text">{{ $product->product_description }}</p>
                                    <p class="card-text">Price: ${{ $product->product_price }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ZJwomFsujHuALV9xDpPtCKz4JitlD/og3PgsCfNfuZ4zlceL/9JIP7rQxHN79lD3" crossorigin="anonymous"></script>
