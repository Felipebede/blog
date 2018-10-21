@extends('admin')

@section('title')
    Criar um post
@stop


@section('content')

    <h1>Editar Publicação: {{$post->title}}</h1>

    @if($errors-> any())

        <ul class="alert">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>

            @endforeach


        </ul>


    @endif

    {!! Form::model($post, ['route'=>['admin.post.update', $post->id ],'method'=>'put']) !!}

    @include('partials._form')

    <div class="form-group">

        {!! Form::submit('Salvar alterações', ['class'=>'btn btn-primary']) !!}
    </div>


    {!! Form::close() !!}

@endsection

