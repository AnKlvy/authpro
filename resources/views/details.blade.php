<!-- Button trigger modal -->
{{--<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">--}}
{{--    Details--}}
{{--</button>--}}

<!-- Modal -->


<div class="modal " id="exampleModal{{$product->id}}" tabindex="-1"
     aria-labelledby="exampleModalLabel{{$product->id}}" aria-hidden="true"
style="cursor: default">
    <div class="modal-dialog">
        <form action="{{url('/addToCart', ['$product'=>$product])}}" method="post">
            @csrf
{{--            <input type="hidden" name="id" value="{{$product}}">--}}

            <div class="modal-content" style="width: 800px">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel{{$product->id}}"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <label>
                                <img src="{{$product->image}}" alt="image" style="max-width: 300px">
                            </label>
                        </div>
                        <div class="col">
                            <h3>{{$product->prname}}</h3>
                            <h2 class="product-price text-danger">{{$product->price}}$</h2>
                            <div class="text-break">{{$product->description}}</div>
{{--                            <button >-</button>--}}
{{--                            <p>2</p>--}}
{{--                            <button >+</button>--}}

                                <input type="number" name="number" class="form-control" value="1" min="1">

                        </div>
{{--                        <div class="row">--}}
{{--                            <div class="col">--}}
{{--                               --}}
{{--                            </div>--}}
{{--                            <div class="col"></div>--}}
{{--                            <div class="col"></div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-success">Add to cart</button>
            </div>
        </div>
        </form>

    </div>
</div>


<?php

