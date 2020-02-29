@extends('layouts.app')

@section('title', 'Shoepi')

@section('content')
@if (session('status'))
    <div class="alert alert-primary text-center">
        {{ session('status') }}
    </div>
@endif
<br><br>
<div class="container-fluid">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="/img/promo1.png" alt="First slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="/img/promo2.png" alt="Second slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<br><br>

<div class="container-fluid ">
    <h4 class="float-left">Categories</h4>
    <small class="float-right ">See All</small>
    <br><hr>
    <div class="row text-center">
        <div class="col-2"><a class="navbar-brand" href="{{route('category',['id'=>'1'])}}"><img class="catsize" src="/img/sneakers.jpg"></a></div>
        <div class="col-2"><a class="navbar-brand" href="{{route('category',['id'=>'5'])}}"><img class="catsize" src="/img/formal.jpg"></a></div>
        <div class="col-2"><a class="navbar-brand" href="{{route('category',['id'=>'4'])}}"><img class="catsize" src="/img/heels.jpg"></a></div>
        <div class="col-2"><a class="navbar-brand" href="{{route('category',['id'=>'3'])}}"><img class="catsize" src="/img/sportshoes.jpg"></a></div>
        <div class="col-2"><a class="navbar-brand" href="{{route('category',['id'=>'2'])}}"><img class="catsize" src="/img/casual.jpg"></a></div>
        <div class="col-2"><a class="navbar-brand" href="{{route('category',['id'=>'6'])}}"><img class="catsize" src="/img/sandal.jpg"></a></div>
    </div>
    <div class="row text-center">
        <div class="col-2"><a class="navbar-brand" href="{{route('category',['id'=>'1'])}}"><small>Sneakers</small></a></div>
        <div class="col-2"><a class="navbar-brand" href="{{route('category',['id'=>'5'])}}"><small>Formal</small></a></div>
        <div class="col-2"><a class="navbar-brand" href="{{route('category',['id'=>'4'])}}"><small>Heels</small></a></div>
        <div class="col-2"><a class="navbar-brand" href="{{route('category',['id'=>'3'])}}"><small>Sport</small></a></div>
        <div class="col-2"><a class="navbar-brand" href="{{route('category',['id'=>'2'])}}"><small>Casual</small></a></div>
        <div class="col-2"><a class="navbar-brand" href="{{route('category',['id'=>'6'])}}"><small>Sandals</small></a></div>
    </div>

</div>
<br>
<div class="container-fluid">
    <img class="d-block w-100 rounded" src="/img/promo3.png">
</div>
<br>
<div class="container-fluid bg-light">
    <div class="container-fluid bg-primary text-white">
        <h2>On Sale</h2>
    </div>
    @foreach ($products as $prod)
    <?php
    $seller=$prod->Seller()->get();
    ?>
        <div class="item" style="width: 13rem;">
            <div>
                <a href="/product/{{$prod->product_id}}">    
                <img class="searchimg" src="{{url('uploads/'.$prod->filename)}}">
                </a>
            </div>
            <div class="card-body nopad">
                <h5>
                    <a class="text-dark" href="/product/{{$prod->product_id}}">{{$prod->product_name}}</a>
                </h5>
                <small><div>{{$seller[0]->seller_name}}</div></small>
                <p class="harga">Rp. {{$prod->price}}</p>
            </div>
    </div>
    @endforeach
    <div class="pagination justify-content-center">
       {{ $products->links()}} 
    </div>

</div>


@endsection