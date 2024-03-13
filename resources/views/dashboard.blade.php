<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- Add dd($products) here to debug -->    
    <div class="row">
    @foreach($products as $product)
        <div class="col-md-4 mb-4">
            <div class="card">
                @if ($product->product_image)
                    <img src="{{ asset('product_images/' . $product->product_image) }}" class="card-img-top" alt="{{ $product->product_name }}">
                @else
                    <div class="no-image">
                        <p class="card-text">No Image Available</p>
                    </div>
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $product->product_name }}</h5>
                    <p class="card-text">{{ $product->product_description }}</p>
                    <p class="card-text">Price: ${{ $product->product_price }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>

 </x-app-layout>