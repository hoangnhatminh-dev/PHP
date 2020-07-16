<?php

?>

{{--Thua ke tu app.blade template--}}
@extends('layouts.app')

{{--Noi dung trang con--}}
{{--Dung app.css--}}
@section('content')

    {{--    Dinh nghia phan noi dung cua trang product--}}
    <div class = "container">
        <div class = "row">
            <div class = "col-xs-12 col-md-12">
                {{--        Thuc hien thong bao loi--}}
                @include('errors.503')

                {{--            Form nhap thong tin cua Product--}}
                <form action = "{{url('product')}}" method = "post" class = "col-xs-12 col-md-12 form-horizontal">
                    {{csrf_field()}}

                    <div class = "form-group col-xs-12 col-md-12">
                        {{--            Ten Product--}}
                        <label for = "product" class = "col-xs-12 col-md-12 control-label">Product's Name</label>
                        <div class = "col-xs-12 col-md-12">
                            <input type = "text" name ="name" id = "product-name" class="form-control col-xs-12 col-md-12">
                        </div>
                        {{--            Gia tien Product--}}
                        <label for = "product" class = "col-xs-12 col-md-12 control-label">Product's Price</label>
                        <div class = "col-xs-12 col-md-12">
                            <input type = "number" name ="price" id = "product-price" class="form-control col-xs-12 col-md-12">
                        </div>
                    </div>

                    {{--            Nut them san pham--}}
                    <div class = "form-group">
                        <div class = "col-xs-12 col-md-12">
                            <button type = "submit" class = "btn btn-default">
                                <i class = "fa fa-plus"></i>Add Product
                            </button>
                        </div>
                    </div>
                </form>

                {{--        Hien thi Product hien tai co trong database--}}
                @if(count($products) > 0)
                    <div class = "col-xs-12 col-md-12">
                        <div class = "col-xs-12 col-md-12">
                            Current Product
                        </div>
                        <div class = "col-xs-12 col-md-12">
                            <table class = "text-center table-striped col-xs-12 col-md-12">
                                {{--                        Tao tieu de cua cot--}}
                                <tr>
                                    <th>ID</th>
                                    <th>Product</th>
                                    <th>Price</th>
                                </tr>
                                {{--                        Tao cac dong de hien thi noi dung--}}
                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td class = "product-test">
                                            <div>{{$product->id}}</div>
                                        </td>
                                        <td class = "product-test">
                                            <div>{{$product->name}}</div>
                                        </td>
                                        <td class = "product-test">
                                            <div>{{$product->price}}</div>
                                        </td>
                                        <td>
                                            <form action = "admin/product/{{$product->id}}" method = "post" class = "method">
                                                {{csrf_field()}}
                                                {{method_field('DELETE')}}
                                                <button>Delete Product</button>
                                                <input type = "hidden" name = "_method" value = "DELETE">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection


