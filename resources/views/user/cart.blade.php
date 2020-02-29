@extends('layouts.app')

@section('title', 'Shoepi')

@section('content')
<?php
$tprice=0;
?>
<div class="row pl-5 pt-5">
<div class="col-10">
@foreach($cart as $itm)
<?php
$prod=$itm->Product()->get();
$seller=$prod[0]->Seller()->get();
$tprice+=($itm->quantity*$prod[0]->price);
?>
<div class="card mb-3 pb-3" style="max-width: 850px;">
  <div class="row">
    <div class="col-3 ml-3 mt-3">
    <img class="searchimg" src="{{url('uploads/'.$prod[0]->filename)}}" style="height:200px;">
    </div>
    <div class="col-8">
      <div class="card-body">
        <h4><a class="card-title" href="/product/{{$prod[0]->product_id}}">{{$prod[0]->product_name}}</a></h4>
        <p class="card-text">{{$prod[0]->description}}</p>
        <p class="card-text"><small class="text-muted">{{$seller[0]->seller_name}}</small></p>
        <a button type='button' class="btn hvr" href="{{route('subItem',$prod[0])}}"><img class="cart" src="/img/minus.png"></a>
        <span class="badge badge-dark p-1" style="font-size:14.5px;">Quantity : {{$itm->quantity}}</span>
        <a button type='button' class="btn hvr" href="{{route('addItem',$prod[0])}}"><img class="cart" src="/img/plus.png"></a>
        <span class="badge badge-secondary p-2" style="font-size:14.5px; margin-left: 40px;">Subtotal : Rp{{($itm->quantity*$prod[0]->price)}}</span>
        <a button type='button' class="btn hvr" href="{{route('cancelItem',$prod[0])}}"><img class="cart" src="/img/cancel.png"></a>
      </div>
    </div>
  </div>
  </div>
  
@endforeach
</div>


<div style="position:fixed; margin-left:1000px;">
<a button type='button' class="btn hvr" href="{{route('co')}}">
<span class="badge badge-warning p-2 mb-2" style="font-size:14.5px;">Total Price : Rp{{$tprice}}</span><br>
<img src="/img/pay.png" style="width:50px; height:200px;"></a>
</div>
</div>



@endsection