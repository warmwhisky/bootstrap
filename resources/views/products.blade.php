@extends('layouts.app')

@section('title')
    Products
@endsection

@section('content')

    <div class="container">
        <div class="col-md-12">
            <h3 class=”Heading”>PRODUCTS</h3>
            <div class="form-row">
                <div class="form-group col-md-2 mb-4">
                    <label for="inputState">Show all</label>
                    <select class="custom-select mr-sm-2" name="show" id="show_redirect">
                        @foreach($products as $product)
                            <option selected value="/products?filter_products={{$product->mother_cat_1}}">{{$product->mother_cat_1}}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-2 mb-4">
                    <label for="inputState">Animals</label>
                    <select class="custom-select mr-sm-2" name="animals" id="animals_redirect">
                        @foreach($animal_types as $animal_type)

                            <option selected value="/products?filter_animals={{$animal_type->animal_type}}">{{$animal_type->animal_type}}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-2 mb-4">
                    <label for="inputState">Glasses</label>
                    <select class="custom-select mr-sm-2" name="glass" id="glasses_redirect">
                        @foreach($glass_type as $glass_type_1)
                            <option selected value="/products?filter_glasses={{$glass_type_1->glass_type_1}}"> {{$glass_type_1->glass_type_1}}
                            </option>
                        @endforeach
                    </select>
                </div>
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
                                {{$product->child_cat_1}}
                                <br>
                                {{$product->retail}}
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
@section('jscript')
    <script>

        // redirect to show all products
        $(function () {
            // bind change event to select
            $('#show_redirect').on('change', function () {
                var url = $(this).val(); // get selected value
                if (url) { // require a URL
                    window.location = url; // redirect
                }
                return false;
            });
        });

        // redirect to animals
        $(function () {
            // bind change event to select
            $('#animals_redirect').on('change', function () {
                var url = $(this).val(); // get selected value
                if (url) { // require a URL
                    window.location = url; // redirect
                }
                return false;
            });
        });

        // redirect to glasses
        $(function () {
            // bind change event to select
            $('#glasses_redirect').on('change', function () {
                var url = $(this).val(); // get selected value
                if (url) { // require a URL
                    window.location = url; // redirect
                }
                return false;
            });
        });


        $('.update_quantities').on('change', function () {

            let quantity = $(this).val()
            let price_per_box = $(this).attr('data-price-per-box')
            let order_item_id = $(this).attr('data-order-item-id')

            $('#row_total_' + order_item_id).html(quantity * price_per_box)

            updateCartTotal()
        })
        console.log()

        function updateCartTotal() {
            let row_totals = $('.row_total')

            let cart_total = 0;
            for (row_total of row_totals) {
                cart_total = cart_total + parseFloat($(row_total).html())
            }

            $('#cart_total').html(cart_total.toFixed(2))
        }


    </script>
@endsection

