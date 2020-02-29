@extends('layouts.app')

@section('title', 'Shoepi')

@section('content')
<br>
<div class="container">
    <h3>{{$product->product_name}}</h3>
    <p>Rating: {{$product->rating}}</p>
    <br>
    <div class="row">
        <div class="col-5">
            <img class="detailimg" src="{{url('uploads/'.$product->filename)}}">
        </div>
        <div class="col">
        <br>
            <p class="detailtext">Penjual : {{$product->seller_id}}</p>
            <p class="detailtext">Kategori : {{$product->cat_id}}
            <p class="detailtext">Harga : <span class="orange">Rp. {{$product->price}}</span></p>
            <p class="detailtext">Stok tersedia : {{$product->stock}}</p>
            <p class="detailtext">Deskripsi : </p>
            <p class="detailinfo">{{$product->description}}</p>
            <a button type="button" class="btn btn-primary text-white" href="{{route('addItem',$product)}}">Add to Cart</a>
            @if(Session('status'))
            <div class="alert alert-primary mt-3" style="width:230px;" role="alert">
                {{Session('status')}}
            </div>
            @endif
        </div>    
    </div>
</div>


@endsection