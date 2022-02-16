@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')


    <div class="row">
        <div class="col-md-12">
            <div class="cart-container"></div>
            <div class=”Header”><br>
                <h3 class=”Heading”>PRODUCTS</h3>


                @foreach($animal_types as $animal_type)
                    <a href="/products?filter={{$animal_type->animal_type}}"
                       class="mr-4">{{$animal_type->animal_type}}</a>
                @endforeach

                <div class="form-group col-md-2 mb-4">
                    <label for="inputState"></label>
                    <select class="custom-select mr-sm-2" name="state" id="inlineFormCustomSelect">
                        @foreach($animal_types as $animal_type)
                            <option selected value="{{$animal_type->animal_type}}">{{$animal_type->animal_type}}s
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="d-flex justify-content-center flex-wrap">
                    @foreach($products as $product)
                        <div class="product_wrapper">
                            <a href="/images/products/300/{{$product->code}}.jpg">
                                <img src="/images/products/300/{{$product->code}}.jpg">


                                <div class="code">
                                    {{$product->code}}
                                    <br>
                                    @csrf
                                    {{$product->mother_cat_1}}
                                    <br>
                                    {{$product->prod_desc}}
                                    <br>
                                    {{$product->volume}}


                                </div>
                        </div>
                        @endforeach
                        </a>
                </div>
            </div>
        </div>

@endsection

