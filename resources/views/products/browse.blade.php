@extends('layouts.app')

@section('title', 'Shoepi')

@section('content')
<br>
<div class="container">
<h4>Menampilkan beberapa pencarian untuk '{{$search}}'</h4>
<br>
    @foreach($product as $prod)
    <div class="item" style="width: 15rem;">
            <div>
            <a href="/product/{{$prod->product_id}}">    
            <img class="searchimg" src="{{url('uploads/'.$prod->filename)}}">
            </a>
            </div>
            <div class="card-body nopad">
                <p>
                    <a class="text-dark" href="/product/{{$prod->product_id}}">{{$prod->product_name}}</a>
                </p>
                <small><div>{{$prod->seller_name}}</div></small>
                <p class="harga">Rp. {{$prod->price}}</p>
                <p> Rating: {{$prod->rating}}</p>
            </div>
    </div>
    @endforeach
    <div class="pagination justify-content-center">
       {{ $product->links()}} 
    </div>
</div>
@endsection