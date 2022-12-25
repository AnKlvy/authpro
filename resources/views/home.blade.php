<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.header')

</head>


<body>
@include('layouts.app')

{{--Carousel--}}
<div class="container col col-xxl">
    <div id="carouselExampleIndicators" class=" carousel slide" data-bs-ride="true">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="storage/carousel/GIT_-Fame_20th_EN.webp" class="d-block w-100" alt="1....................">
            </div>
            <div class="carousel-item">
                <img src="storage/carousel/GIT_JaD_Vintage_EN.webp" class="d-block w-100" alt="2....................">
            </div>
            <div class="carousel-item">
                <img src="storage/carousel/MS_50-Years-Deals.webp" class="d-block w-100" alt="3....................">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<section class="section-products">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-8 col-lg-6">
                <div class="header">
                    {{--                    <h3>Featured Product</h3>--}}
                    <h2>Popular Products</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Single Product -->
            @foreach($products as $product)

                <style>
                    .section-products #product{{$product->id}} .part-1::before {
                        background: url({{$product->image}}) no-repeat center;
                        background-size: cover;
                        transition: all 0.3s;
                    }
                </style>




                    <div
                        class="col-md-6 col-lg-4 col-xl-3"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal{{$product->id}}"
                        style="cursor: pointer">
                        <div id="product{{$product->id}}" class="single-product">
                            <div class="part-1">

                                <!--style="background: url({$product->image}}) no-repeat center;background-size: cover;transition: all 0.3s"-->
                                <ul>
                                    {{--                                <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>--}}
                                    {{--                                <li><a href="#"><i class="fas fa-heart"></i></a></li>--}}
                                    {{--                                <li><a href="#"><i class="fas fa-plus"></i></a></li>--}}
                                    @if(Auth::user()->isAdmin())
                                        <li><a href="{{url('edit', $product->id)}} "
                                               style="width: 70px; background: #53a403; color:white;"><i>Edit</i></a>
                                        </li>
                                        @endif
                                        {{--                                <li><a class="bg-danger" href="{{url('details', $product->id)}} "--}}
                                        {{--                                       style="width: 70px; color:white;"><i>Details</i></a>--}}
                                        </li>
                                        {{--                                <li> <button type="button" class="btn btn-primary bg-danger" style="border-radius: 0; border-color: darkred" data-bs-toggle="modal" data-bs-target="#exampleModal{{$product->id}}">--}}
                                        {{--                                        <i>Details</i>--}}
                                        {{--                                    </button></li>--}}

                                </ul>
                            </div>
                            <div class="part-2">
                                <h3 class="product-title">{{$product->prname}}</h3>
                                {{--                            <h4 class="product-old-price">$79.99</h4>--}}
                                <h4 class="product-price text-danger">${{$product->price}}</h4>
                            </div>
                        </div>
                        <!-- Modal -->
                        @include('details')
                    </div>


            @endforeach
        </div>
    </div>
</section>

</body>
</html>
