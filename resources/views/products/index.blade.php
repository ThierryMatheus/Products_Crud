@extends('layouts.app')
@section('content')


<div class="row">
  <div class="col">
    <div class="pull-left">
      <h2>Seus Produtos</h2>
    </div>
  </div>
</div>

@if (session('sucess'))
    <div class="alert alert-sucess">
      {{session('sucess')}}
    </div>
@endif
@if (session('error'))
    <div class="alert alert-danger">
      {{session('error')}}
    </div>
@endif


<table class="table table-bordered">
  <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Preço</th>
    <th>Vendendor</th>
    <th width="230px">Mais ações</th>
  </tr>
  @foreach ($products ?? '' as $product)
  <tr>
    <td>{{$product->id }}</td>
    <td>
      <a href="{{url("/products/{$product->id}")}}">
        {{$product->name}}
      </a>
    </td>
    <td>
       R${{$product->value}}
      </a>
    </td>
    <td>
      {{$product->user->name}}
    </a>
  </td>


    <td>
      <form action="{{route('products.destroy', $product->id)}}" method="POST">
        <a class="btn btn-info" href="{{route('products.show',$product->id)}}">
          Detalhes
        </a>
        <a class="btn btn-primary" href="{{route('products.edit',$product->id)}}">Editar</a>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Deletar</button>
      </form>
    </td>
  </tr>
  @endforeach
</table>

{{ $products ?? ''->links() }}

@endsection