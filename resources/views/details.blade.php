<!-- Button trigger modal -->
{{--<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">--}}
{{--    Details--}}
{{--</button>--}}

<!-- Modal -->
<div class="modal fade" id="exampleModal{{$product->id}}" tabindex="-1"
     aria-labelledby="exampleModalLabel{{$product->id}}" aria-hidden="true"
style="cursor: default">
    <div class="modal-dialog">
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-warning">Add to cart</button>
            </div>
        </div>
    </div>
</div>


<?php

