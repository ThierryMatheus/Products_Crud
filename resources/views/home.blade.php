@extends('layouts.app')

@section('content')

    @foreach ($products as $product)
    <div class="card">
        <div class="card-header">
            <h1>{{$product->name}}</h1>
        </div>
    </div>
    <div class="card-body">
        <p class="card-title">Vendendor: {{$product->user->name}}</p>
        <p class="card-text">Preço: R${{$product->value}}</p>
        @isset($product->image)
        <img class="card-img-top" src="{{asset('storage/'.$product->image->path)}}">
        @endisset
    </div>

    @endforeach

    {{$products->links()}}
{{-- <img src="{{asset('storage/5c5bbc3772150b3a8ff13726beae75b2.jpg')}}" alt=""> --}}
@endsection
