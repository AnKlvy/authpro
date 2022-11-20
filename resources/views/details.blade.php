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
            <form action="{{url('/product/save', ['$product'=>$products->id])}}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$products->id}}">
                <div class="form-group">
                    <label>
                        NAME :
                    </label>
                    <input type="text" class="form-control" name="prname" value="{{$products->prname}}">
                </div>
                <div class="form-group">
                    <label>
                        PRICE :
                    </label>
                    <input type="number" class="form-control" name="price"
                           value="{{$products->price}}">
                </div>
                <div class="form-group">
                    <label>
                        DESCRIPTION :
                    </label>
                    <input type="text" class="form-control" name="description" value="{{$products->description}}">
                </div>


                <div class="form-group">
                    <button class="btn btn-success">SAVE ITEM</button>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger ml-2" data-bs-toggle="modal"
                            data-bs-target="#deleteModal">
                        DELETE ITEM
                    </button>
                </div>
            </form>


            <!-- Modal -->
            <div class="modal fade" id="deleteModal" data-bs-backdrop="static" data-bs-keyboard="false"
                 tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form action="" method="post">
                        <input type="hidden" name="id" value={{$products->id}}>
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel"></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h5 text="Are you sure?"></h5>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close
                                </button>
                                <a class="btn btn-danger" href="{{url('/product/delete', ['$product'=>$products->id])}}">Delete</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{--    <div class="row mt-5">--}}
    {{--        <div class="col-6 offset-3">--}}
    {{--            <table class="table table-striped">--}}
    {{--                <tbody>--}}
    {{--                <tr th:each="cat : ${item.categories}">--}}
    {{--                    <form th:action="@{'/removecategory'}" method="post">--}}
    {{--                        <input type="hidden" th:value="${item.id}" name="item_id">--}}
    {{--                        <input type="hidden" th:value="${cat.id}" name="category_id">--}}
    {{--                        <td th:text="${cat.name}"></td>--}}
    {{--                        <td width="10%">--}}
    {{--                            <button class="btn btn-danger btn-sm"> -</button>--}}
    {{--                        </td>--}}
    {{--                    </form>--}}
    {{--                </tr>--}}
    {{--                </tbody>--}}
    {{--            </table>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--    <div class="row mt-5">--}}
    {{--        <div class="col-6 offset-3">--}}
    {{--            <table class="table table-striped">--}}
    {{--                <tbody>--}}
    {{--                <tr th:each="cat : ${categories}">--}}
    {{--                    <form th:action="@{'/assigncategory'}" method="post">--}}
    {{--                        <input type="hidden" th:value="${item.id}" name="item_id">--}}
    {{--                        <input type="hidden" th:value="${cat.id}" name="category_id">--}}
    {{--                        <td th:text="${cat.name}"></td>--}}
    {{--                        <td width="10%">--}}
    {{--                            <button class="btn btn-success btn-sm"> +</button>--}}
    {{--                        </td>--}}
    {{--                    </form>--}}
    {{--                </tr>--}}
    {{--                </tbody>--}}
    {{--            </table>--}}
    {{--        </div>--}}
    {{--    </div>--}}

</div>
</body>
</html>
<?php
