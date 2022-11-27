{{--@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection--}}


    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.header')
</head>


<body>
@include('layouts.nav')
@include('layouts.app')


<div class="container">
{{--    <div class="row mt-5">--}}
{{--        <div class="col-sm-12">--}}
{{--            <table class="table">--}}
{{--                <thead>--}}
{{--                <th>Name</th>--}}
{{--                <th>Price</th>--}}
{{--                <th>Description</th>--}}
{{--                </thead>--}}
{{--                <tbody>--}}
<div class="card-group">
                @foreach($products as $product)
{{--                    <tr>--}}
{{--                        <td hidden>--}}
{{--                            {{$product->id}}--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            {{$product->prname}}--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            {{$product->price}}--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            {{$product->description}}--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            <a href="{{url('/product/save', ['$product'=>$product->id])}}">Save</a>--}}
{{--                            <a href="{{url('/product/delete', ['$product'=>$product->id])}}">Delete</a>--}}
{{--                        </td>--}}
{{--                        <td><a href='{{url('details', $product->id)}}' class="btn btn-info btn-sm">DETAILS</a></td>--}}
{{--                    </tr>--}}

    <div class="col-sm-3">
        <div class="card">
            <form action="/addToCart" method="post">
                @csrf
        {{--                    <img class="card-img-top" src="..." alt="Card image cap">--}}
                    <div class="card-body">
                        <th>
                            <img src="storage/{{$product->image}}" width="100px" alt="image" style="max-width: 60px">
                        </th>
                        <p hidden>  {{$product->id}}</p>
                        <h4 class="card-title">{{$product->prname}}</h4>
                        <h7 class="card-title fw-bold">Price: {{$product->price}} $</h7>

{{--                        <a href="{{url('/product/save', ['$product'=>$product->id])}}">Save</a>--}}


                            <input hidden name="prid" value="{{$product->id}}">
                            <button class="btn btn-primary">Add to cart</button>

                        <a href="{{url('/product/delete', ['$product'=>$product->id])}}">Delete</a>
                        <a href='{{url('details', $product->id)}}' class="btn btn-info btn-sm">DETAILS</a>
                    </div>
            </form>
        </div>
    </div>

                @endforeach
{{--                </tbody>--}}
{{--            </table>--}}
</div>
</div>
</body>
</html>
<?php



