<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.header')
</head>


<body>
@include('layouts.nav')
@include('layouts.app')

<div class="container">
    <div class="row mt-5">
        <div class="col-6 offset-3">
<form action="/product/create" method="post">
    <div class="form-group">
        @csrf
        <label>Name</label>
        <input type="text" name="prname" class="form-control">
    </div>
    <div class="form-group">
        <label>Price</label>
        <input type="number" name="price" class="form-control">
    </div>
    <div class="form-group">
        <label>Description</label>
        <input type="text" name="description" class="form-control">
    </div>
    {{--    <div class="form-group">--}}
    {{--        <label>proddate</label>--}}
    {{--        <input type="date" name="proddate" hidden  class="form-control" aria-describedby="emailHelp" value="">--}}
    {{--    </div>--}}
    <br>
    <button type="submit" class="btn btn-success">Add</button>
</form>
        </div>
    </div>
</div>
</body>
</html>
<?php


