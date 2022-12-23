<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.header')
</head>


<body>
@include('layouts.app')

<div class=" mt-5">
    <div class="offset-3 ">
        <div class="container gx-5 row">

            @foreach($products as $product)

            <div class="card"  style="width: 14rem; height: 26rem;">
                <img src="{{$product->image}}" class="card-img-top" alt="{{$product->prname}}">
                <div class="card-body">
                    <p hidden>  {{$product->id}}</p>
                    <h5 class="card-title" >{{$product->prname}}</h5>
                    <strong><p class="card-text text-danger d-flex justify-content-end" >{{$product->price}}€</p></strong>
<!--some admin check-->  <!--<a  th:href="@{'/details?id='+ ${item.getId()}}" class="btn btn-primary stretched-link">Edit</a>-->
<!--some user check-->  <a href='{{url('details', $product->id)}}' class="btn btn-info btn-sm">DETAILS</a>
                    <!--                    <a  >Edit</a>-->
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
