@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update Product</div>
                <div class="card-body">
                    <!-- isi -->
				<form method="POST" action="/admin/product/{{$product->id}}" accept-charset="UTF-8" enctype="multipart/form-data">
<input name="_method" type="hidden" value="PUT">
{!! csrf_field() !!}
  <div class="form-group">
    <label for="sku">SKU</label>
    <input type="text" class="form-control" name="sku" id="sku" value="{{$product->sku}}">
  </div>
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" id="name" value="{{$product->name}}">
  </div>

  <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" name="description" id="description" rows="3">{{$product->description}}</textarea>
  </div>
  <div class="form-group">
    <label for="name">Price</label>
    <input type="text" class="form-control" name="price" id="price" value="{{$product->price}}">
  </div>
  <div class="form-group">
    <label for="name">Stock</label>
    <input type="text" class="form-control" name="stock" id="stock" value="{{$product->stock}}">
  </div>
  <div class="form-group">
    <label for="foto">Choose Image</label>
    <p><img alt="{{$product->foto}}" src="/img/products/{{$product->foto}}" width="50px" class="img-circle img-responsive"></p>
    <input name="foto" type="file" id="foto"><br />
    <em class="text-info">don't fill image if you don't want to change</em>
  </div>
  <button type="submit" class="btn btn-primary">Update Product</button>
</form>
                    <!-- /isi -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
