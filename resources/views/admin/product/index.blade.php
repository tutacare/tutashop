@extends('layouts.app')

@section('content')
@include('widgets.alert-message')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><a href="/admin/product/create" class="btn btn-primary">Add Product</a></div>
                <div class="card-body">
                <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">SKU</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">Stock</th>
      <th scope="col">Image</th>
      <th scope="col">EDIT</th>
      <th scope="col">DELETE</th>
    </tr>
  </thead>
  <tbody>
  @foreach($product as $value)
    <tr>
      <th scope="row">{{ $value->id }}</th>
      <td>{{ $value->sku }}</td>
      <td>{{ $value->name }}</td>
      <td>{{ $value->description }}</td>
      <td>@currency($value->price)</td>
      <td>{{ $value->stock }}</td>
      <td><img alt="{{$value->foto}}" src="/img/products/{{$value->foto}}" width="50px" class="img-circle img-responsive"></td>
      <td><a class="btn btn-small btn-info" href="/admin/product/{{$value->id}}/edit">EDIT</a></td>
      <td><form method="POST" action="/admin/product/{{$value->id}}" class="pull-right">
                  {!! csrf_field() !!}
                  <input name="_method" type="hidden" value="DELETE">
                  <button class="btn btn-small btn-danger" type="submit" value="Delete" onclick="if (!confirm('are you sure?')) {return false;};">DELETE</button>
                  </form></td>
    </tr>
    @endforeach
  </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
