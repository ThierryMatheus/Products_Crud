@extends('layouts.app')
@section('content')
    <div class="row">
      <div class="col-lg-12 margin-tb">
        <div class="pull-left">
          <h2>Cadastrar Produto</h2>
        </div>
      </div>
    </div>

  <form action="{{ route('products.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Nome do Produto</label>
      <input type="text" class="form-control" name="name" placeholder="Nome">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Preço do Produto</label>
      <input type="text" class="form-control" name="value" placeholder="R$0,00">
    </div> 
    {{-- <div class="form-group">
      <label for="exampleInputEmail1">Imagem do Produto</label>
      <input type="file" class="form-control" name="image" id="image">
    </div>  --}}
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>
@endsection