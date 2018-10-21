@include('partials._header')

<div class="container">
    <div class="blog-header">
        <h1 class="blog-title">{{$post->title}}</h1>
        <p class="lead blog-description">Autor(a): {{$post->author}}</p>
    </div>

    <div class="row">
        <div class="col-lg-12 blog-main">


            @yield('content')


        </div><!-- /.blog-main -->


    </div><!-- /.row -->
</div><!-- /.container -->

@include('partials._footer')