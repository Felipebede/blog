@include('partials._header')
<a name="top"></a>

<div class="container">

    <div class="row header">
        <h1>Felipe Bedê</h1>
    </div>


    <div class="row">
        <div class="col-sm-8 blog-main position">

            @yield('content')

        </div><!-- /.blog-main -->

        <!--Sidebar-->
        @include('partials._sidebar')

    </div><!-- /.row -->
</div><!-- /.container -->
<br>
<br>
<br>
@include('partials._footer')