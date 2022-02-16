@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')


    <div class="row">
        <div class="col-md-12">
            <div class="cart-container"></div>
            <div class=”Header”>
                <h3 class=”Heading”>PRODUCTS</h3>
            </div>

            <div class="d-flex justify-content-center flex-wrap">
                @foreach($products as $product)
                    <div class="product_wrapper">
                        <img src="/images/products/300/{{$product->code}}/{{$product->code}}.jpg">
                        <div class="code">
                            {{$product->code}}

                        </div>
                    </div>
            </div>
                @endforeach
        </div>
    </div>

@endsection
