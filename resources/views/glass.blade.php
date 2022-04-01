@extends('layouts.app')

@section('title')
    Home
@endsection
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2>Glass products in the company</h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="d-flex justify-content-center flex-wrap">
                    <table class="table-bordered  table mt-3 table-hover">
                        <tbody>
                        <tr>
                            <td>
                                <div class="product_wrapper align-content-center">
                                    <a href="/animals">
                                        <img src="/images/products/300/AD2-T.jpg ">
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="product_wrapper">
                                    <a href="/images/products/300/B-083_hover.jpg">
                                        <img src="/images/products/300/IB-BL.jpg">
                                    </a>
                                </div>
                            </td>

                            <td>
                                <div class="product_wrapper">

                                    <a href="/images/products/300/AP-PP.jpg">
                                        <img src="/images/products/300/WC-AD4-T-O_hover.jpg">
                                    </a>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('jscript')
    <script>


    </script>
@endsection

