<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/all.min.css">
    <link rel="stylesheet" href="/css/brands.min.css">
    <link rel="stylesheet" href="/css/solid.min.css">
    <style>
        .table td, .table th {
            padding: 1px;
        }
    </style>
</head>
<body>
<div class="container">

    @include("includes.nav")

    @yield('content')

{{--    @include("includes.sidebar")--}}

</div>


<script src="/js/jquery.slim.min.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>
