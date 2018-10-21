@extends('read')

@section('title')
    {{$post->title}}
@stop


@section('content')
    <div class="blog-content">

        {{$post->content}}
    </div>
@stop

