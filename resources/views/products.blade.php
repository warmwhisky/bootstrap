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

                <div class="form-group col-md-2 mb-4">
                    <label for="inputState">Animals</label>
                    <select class="custom-select mr-sm-2" name="state" id="animals_redirect">
                        @foreach($animal_types as $animal_type)
                            <option selected value="/products?filter_animals={{$animal_type->animal_type}}">{{$animal_type->animal_type}}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-2 mb-4">
                    <label for="inputState">Glasses</label>
                    <select class="custom-select mr-sm-2" name="state" id="glasses_redirect">
                        @foreach($glass_type as $glass_type_1)
                            <option selected value="/products?filter_glasses={{$glass_type_1->glass_type_1}}"> {{$glass_type_1->glass_type_1}}
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
                                    {{$product->volume}}


                                </div>
                        </div>
                        @endforeach
                        </a>
                </div>
            </div>
        </div>
@endsection
@section('jscript')
    <script>
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

    </script>

@endsection

