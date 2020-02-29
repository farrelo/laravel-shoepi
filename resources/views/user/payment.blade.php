@extends('layouts.app')

@section('title', 'Shoepi')

@section('content')
<form method="POST" action="{{route('order')}}">
@csrf
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
    <div class="col-3 my-5 ml-5">
    <img class="searchimg" src="{{url('uploads/'.$prod[0]->filename)}}" style="width:100px; height:100px;">
    </div>
    <div class="col-8">
      <div class="card-body">
        <h4><a class="card-title" href="/product/{{$prod[0]->product_id}}">{{$prod[0]->product_name}}</a></h4>
        <p class="card-text"><small class="text-muted">{{$seller[0]->seller_name}}</small></p>
        <span class="badge badge-dark p-2" style="font-size:14.5px;">Quantity : {{$itm->quantity}}</span>
        <span class="badge badge-secondary p-2" style="font-size:14.5px; margin-left: 40px;">Subtotal : Rp{{($itm->quantity*$prod[0]->price)}}</span>
      </div>
    </div>
  </div>
  </div>
  
@endforeach
<div class="input-group mb-3" style="width: 850px;">
  <div class="input-group-prepend d-inline-block">
    <label class="input-group-text">Delivery Option</label>
  </div>
  <select class="form-control col-3">
    <option selected>Choose...</option>
    <option value="1">JNE Reguler (2-3 hari)</option>
    <option value="2">J&T Express (2-3 hari)</option>
    <option value="3">JNE YES (1 hari)</option>
  </select>
  <div class="input-group-prepend">
  <label class="input-group-text ml-3">Note</label>
</div>
    <textarea class="form-control" rows="1"></textarea>
</div>
<div class="input-group mb-3" style="width: 850px;">
<div class="input-group-prepend">
  <label class="input-group-text">Address</label>
</div>
<textarea class="form-control" rows="1"></textarea>
</div>
<div class="input-group mb-3" style="width: 850px;">
  <div class="input-group-prepend d-inline-block">
    <label class="input-group-text">Bank Option</label>
  </div>
  <select class="form-control col-5">
    <option selected>Choose...</option>
    <option value="1">BCA (Automatically Checked)</option>
    <option value="2">Mandiri (Automatically Checked)</option>
    <option value="3">BNI (Automatically Checked)</option>
    <option value="4">BNI (Manually Checked)</option>
    <option value="5">BNI (Manually Checked)</option>
    <option value="6">BNI (Manually Checked)</option>
  </select>
</div>
</div>
<div style="position:fixed; margin-left:1000px;">
<button type="submit" class="btn hvr">
<span class="badge badge-warning p-2 mb-2" style="font-size:14.5px;">Total Price : Rp{{$tprice}}</span><br>
<img src="/img/order.png" style="width:200px; height:200px;"></button>
</div>
</div>
</form>
@endsection