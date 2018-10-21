<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }} @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}"/>


    @yield('stylesheet')
</head>
<body>

{{--<div class="blog-masthead">--}}
{{--<div class="blog-header container">--}}
{{--<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fix">--}}

{{--<div class="navbar-header">--}}
{{--<a class="navbar-brand" href="{{'/'}}">Blog</a>--}}
{{--</div>--}}


{{--<div class=" collapse navbar-collapse" id="navbarNav">--}}

{{--<ul class="nav navbar-nav">--}}
{{--<li class="nav-item active">--}}
{{--<a class="nav-link" href="{{'/'}}">Home <span class="sr-only">(current)</span></a>--}}
{{--</li>--}}

{{--<li class="nav-item">--}}
{{--<a class="nav-link" href=" {{ route('admin.index') }}">Admin</a>--}}
{{--</li>--}}

{{--</ul>--}}
{{--</div>--}}
{{--<hr>--}}
{{--</nav>--}}
{{--</div>--}}
{{--</div>--}}

<div class="navbar navbar-fix">

    <div class="navbar-header">
        <a class="navbar-brand" href="{{'/'}}">Blog</a>
    </div>

    <ul class="nav navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="{{'/'}}">Home <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href=" {{ route('admin.index') }}">Admin</a>
        </li>

    </ul>


</div>
<br>
<br>