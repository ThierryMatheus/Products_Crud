@extends('layouts.app')
@section('content')

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">Nome: {{$product->name}}</h5>
        <h5 class="card-text">Preço: R${{$product->value}}</h5>
        <a href="{{route('products.index')}}" class="btn btn-outline-secondary">Voltar</a>
        {{-- <h5>image:</h5>
        <img class="card-img-top" src="{{ asset('storage/'.$product->image->path)}}" alt="Card image cap"> --}}
      </div>
</div>
@endsection