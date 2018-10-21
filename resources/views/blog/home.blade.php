@extends('main')

@section('content')
    @foreach($posts as $post)

        <a href=" {{ route('admin.post.view',['id'=>$post->id]) }}" ><h2>{{$post->title}}</h2></a>

        <p><b>Autor:</b> {{$post->author}} - <b>Categoria:</b> {{$post->category}} </p>
        <p><b>Palavras-chave:</b> {{$post->keywords}} - <b>Criado em:</b> {{$post->created_at}} </p>
        <hr>
    @endforeach
@stop
