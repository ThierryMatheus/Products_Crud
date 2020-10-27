@extends('layouts.app')
@section('content')

<div class="row">
  <div class="col">
    <div class="pull-left">
      <h2>Editar Produto</h2>
    </div>
  </div>
</div>

<form action="{{route('products.update', $product->id)}}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')

  <div class="form-group">
    <label for="exampleInputEmail1">Nome do Produto</label>
  <input type="text" class="form-control" name="name" value="{{$product->name}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Preço do Produto</label>
    <input type="text" class="form-control" name="value" value="{{$product->value}}">
  </div>  
  <div class="form-group">
    <label for="exampleInputEmail1">Imagem do Produto</label>
  <img src="{{asset('storage/'.$product->image->path)}}" style="max-width:200px;">
    <input type="file" class="form-control" name="image" id="image">
  </div> 
  <button type="submit" class="btn btn-primary">Editar</button>
</form>

@endsection