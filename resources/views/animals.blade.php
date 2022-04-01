@extends('layouts.app')

@section('title')
    Home
@endsection
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2>Animal products in the company</h2>
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
                                    <a href="/lions">
                                        <img src="/images/products/300/AP-LI_hover.jpg">
                                        <div class="text">LION</div>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="product_wrapper">
                                    <a href="/buffaloes">
                                        <img src="/images/products/300/AP-LE.jpg">
                                        <div class="text">BUFFALO</div>
                                    </a>
                                </div>
                            </td>

                            <td>
                                <div class="product_wrapper">

                                    <a href="/lizards">
                                        <img src="/images/products/300/IMG_3698.jpg">
                                        <div class="text">LIZARD</div>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="product_wrapper align-content-center">
                                    <a href="/giraffe">
                                        <img src="/images/products/300/07-E-Q-ST.jpg ">
                                        <div class="text">GIRAFFE</div>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="product_wrapper">
                                    <a href="/hippo">
                                        <img src="/images/products/300/03-B.jpg">
                                        <div class="text">HIPPO</div>
                                    </a>
                                </div>
                            </td>

                            <td>
                                <div class="product_wrapper">

                                    <a href="/zebra">
                                        <img src="/images/products/300/IMG_3698.jpg">
                                        <div class="text">ZEBRA</div>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="product_wrapper align-content-center">
                                    <a href="/penguin">
                                        <img src="/images/products/300/013-C-Q.jpg ">
                                        <div class="text">PENGUIN</div>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="product_wrapper">
                                    <a href="/rhino">
                                        <img src="/images/products/300/03-NR-E-P.jpg">
                                        <div class="text">RHINO</div>
                                    </a>
                                </div>
                            </td>

                            <td>
                                <div class="product_wrapper">

                                    <a href="/python">
                                        <img src="/images/products/300/AP-CO.jpg">
                                        <div class="text">PYTHON</div>
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

