@extends('layouts.app')

@section('title')
    About
@endsection
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">

                <form>
                    <label><h2>Get every product at Ngwenya Glass</h2></label>
                    <select id="products">
                        <option value="">Please select</option>
                        <option value="glasses">Glasses</option>
                        <option value="african_animals">African animals</option>
                        <option value="botanical">Botanical</option>
                        <option value="canddle_holders">Canddle Holders</option>
                        <option value="decanters">Decanters</option>
                        <option value="hospitality">Hospitality</option>
                        <option value="jugs">Jugs</option>
                        <option value="orbs">Orbs</option>
                        <option value="portjie">Portjie</option>
                        <option value="pewter">Pewter</option>
                        <option value="stoppers">Stoppers</option>
                        <option value="vase">Vase</option>
                    </select>
                </form>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <a href="#" onMouseOver="document.myImage.src = image2.src;"
                   onMouseOut="document.myImage.src = image1.src;">
                    <img name="myImage" src="/images/products/300/AP-PP_hover.jpg"/>
                </a>
            </div>
        </div>
    </div>

@endsection
@section('jscript')
    <script>

        if (document.images) {
            var image1 = new Image();     // Preload an image
            image1.src = "/images/products/300/AP-PP_hover.jpg";
            var image2 = new Image();     // Preload second image
            image2.src = "/images/products/300/WC-N2-O_1.jpg";
        }

    </script>
@endsection



