@extends('admin')

@section('title')
    Admin
@stop


@section('content')


    <a href="{{'admin/posts/create'}}" class="btn btn-success">Criar novo post</a>
    <br>
    <br>



    <table class="table">
        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Data publicação</th>
            <th>Opções</th>

        </tr>

        @foreach($posts as $post)
            <tr>
                <td>  {{$post->id}}</td>
                <td>  {{$post->title}}</td>
                <td>  {{$post->author}}</td>
                <td>  {{$post->created_at}}</td>

                <td>
                    <a href=" {{ route('admin.post.edit',['id'=>$post->id]) }}" class="btn btn-default">Editar</a>
                    <a href=" {{ route('admin.post.delete',['id'=>$post->id]) }}" class="btn btn-danger">Apagar</a>
                </td>

            </tr>
        @endforeach

    </table>

    {!! $posts->render() !!}

@stop
