<!-- <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Product Name:</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="description">Product Description:</label>
        <textarea name="description" class="form-control" required></textarea>
    </div>
    <div class="form-group">
        <label for="image">Product Image:</label>
        <input type="file" name="image" class="form-control-file">
        <small class="form-text text-muted">Upload a JPEG, PNG, JPG, or GIF file (max: 2048 KB).</small>
    </div>
    <div class="form-group">
        <label for="price">Product Price ($):</label>
        <input type="number" step="1.00" name="price" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Create Product</button>
</form> -->


@extends('layouts.design')
   
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ url('/') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 

<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
     
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product_Name</strong>
                <input type="text" name="product_name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product_Description</strong>
                <textarea class="form-control" style="height:150px" name="product_description" placeholder="Description"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product_Image</strong>
                <input type="file" name="product_image" class="form-control" placeholder="Image">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product_Price</strong>
                <input type="number" step="0.01" name="product_price" class="form-control" placeholder="Price">
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
</div>
      
</form>
@endsection