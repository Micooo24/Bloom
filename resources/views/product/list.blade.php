<!-- <div>
    <ul>
    @foreach($products as $i)
    <li>{{$i->product_name}}</li> 
    <li>{{$i->product_description}}</li> 
    <li>{{$i->product_image}}</li>
    <li>{{$i->product_price}}</li> 
    @endforeach
    </ul>
</div> -->


@extends('layouts.design')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Products CRUD</h2>
            </div>
            <div class="pull-right" style="margin-bottom:10px;">
            <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>

    
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


    <table class="table table-bordered">
        <tr>
             <th>No</th>
            <th>Product Name</th>
            <th>Product Description</th>
            <th>Product Image</th>
            <th>Product Price</th>
            <th width="280px">Action</th>
        </tr>
        @php
            $i = 0;
        @endphp

        @foreach ($products as $product)
        <tr>
             <td>{{ ++$i }}</td> 
            <td>{{ $product->product_name }}</td>
            <td>{{ $product->product_description }}</td>
            <td><img src="/product_images/{{ $product->product_image }}" width="100px"></td>
            <td>{{ $product->product_price }}</td>
            <td>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST">    

                    <a class ="btn btn-info" href="{{ route('products.show', $product->id) }}">Show</a>
       
                    <a class="btn btn-primary" href="{{route('products.edit',$product->id)}}">Edit</a> 
      
                    @csrf
                    @method('DELETE')
         
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $products->links() !!}

    @endsection