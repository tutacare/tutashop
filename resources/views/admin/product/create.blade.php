@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Product</div>
                <div class="card-body">
                    <!-- isi -->
                    <form method="POST" action="/admin/product" enctype="multipart/form-data">
                    {!! csrf_field() !!}
  <div class="form-group">
    <label for="sku">SKU</label>
    <input type="text" class="form-control" name="sku" id="sku">
  </div>
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" id="name">
  </div>

  <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" name="description" id="description" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="name">Price</label>
    <input type="text" class="form-control" name="price" id="price">
  </div>
  <div class="form-group">
    <label for="name">Stock</label>
    <input type="text" class="form-control" name="stock" id="stock">
  </div>
  <div class="form-group">
    <label for="foto">Choose Image</label>
    <input name="foto" type="file" id="foto">
  </div>
  <button type="submit" class="btn btn-primary">Add Product</button>
</form>
                    <!-- /isi -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
