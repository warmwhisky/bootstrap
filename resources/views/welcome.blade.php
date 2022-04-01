@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h3>Get all the products we make</h3>
            </div>
        </div>
    </div>

    <div class="col-md-6 offset-md-3">
        <div class="mb-4">
        <div class="image-container">
            <div id="slideshow-example" data-component="slideshow">


                <div role="list">
                    <div class="slide"> <!-- Load image 01 -->
                        <img src="/images/products/1000/VU7-GOLF.jpg" alt="" style="width: 90%">
                        <div class="text"><h2>GOLF GLASSES</h2></div>
                    </div>

                    <div class="slide">
                        <img src="images/products/1000/B-02.jpg" style="width: 90%" alt="">
                        <div class="text"><h2>BEER GLASS</h2></div>
                    </div>

                    <div class="slide">
                        <img src="/images/products/1000/02-EE-X.jpg" style="width: 90%" alt="">
                        <div class="text"><h2>XMAS DECORE</h2></div>
                    </div>

                    <div class="slide">
                        <img src="/images/products/1000/02-E-ST.jpg" style="width: 90%" alt="">
                        <div class="text"><h2>WINE STOPPER</h2></div>
                    </div>

                    <div class="slide">
                        <img src="/images/products/1000/013-D-Q.jpg" style="width: 90%" alt="">
                        <div class="text"><h2>PENGUIN ANIMAL</h2></div>
                    </div>

                    <div class="slide">
                        <img src="/images/products/1000/T4.jpg" style="width: 90%" alt="">
                        <div class="text"><h2>JUICE GLASS</h2></div>
                    </div>

                    <div class="slide">
                        <img src="/images/products/1000/VU2-T-T-N_2.jpg" style="width: 90%" alt="">
                        <div class="text"><h2>WHISKY GLASS</h2></div>
                    </div>

                    <div class="slide">
                        <img src="/images/products/1000/WC-N2-O_1.jpg" style="width: 90%" alt="">
                        <div class="text"><h2>WINE COOLER</h2></div>
                    </div>

                    <div class="slide">
                        <img src="/images/products/1000/07-E-QQ-ST.jpg" style="width: 90%" alt="">
                        <div class="text"><h2>WINE STOPPER</h2></div>
                    </div>

                    <div class="slide">
                        <img src="/images/products/1000/VU7-T-BL.jpg" style="width: 90%" alt="">
                        <div class="text"><h2>BEER GLASS</h2></div>
                    </div>

                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="col-md-6 offset-md-3">
    <div class="mt-1">
        <a href="/animals">
            <button type="button" class="btn btn-outline-primary float-left">VIEW ANIMAL PRODUCTS</button>
        </a>
        <a href="/glass">
            <button type="submit" class="btn btn-outline-primary float-right mr-2">VIEW GLASS PRODUCTS</button>
        </a>
    </div>
    </div>
    </div>
<br>

@endsection
@section('jscript')

    <script>

        var slideshows = document.querySelectorAll('[data-component="slideshow"]'); // call slideshow data-component
        slideshows.forEach(initSlideShow);

        function initSlideShow(slideshow) { // slideshow function

            var slides = document.querySelectorAll(`#${slideshow.id} [role="list"] .slide`);

            var welcome = 0, time = 5000; // set slide time
            slides[welcome].classList.add('active');

            setInterval(() => { // slide every 5 second
                slides[welcome].classList.remove('active');

                welcome++;
                if (welcome === slides.length) welcome = 0;

                slides[welcome].classList.add('active');

            }, time);
        }

    </script>
    <style>

        [data-component="slideshow"] .slide {
            display: none;
            text-align: center;
        }

        [data-component="slideshow"] .slide.active {
            display: block;
        }

    </style>
@endsection
