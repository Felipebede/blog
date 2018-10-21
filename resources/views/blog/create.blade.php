@extends('admin')

@section('title')
    Nova Publicação
@stop


@section('content')

    <h1>Criar nova Publicação</h1>

    @if($errors-> any())

        <ul class="alert">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>

            @endforeach


        </ul>


    @endif

    {!! Form::open(['route'=>'admin.post.store','method'=>'post']) !!}

    @include('partials._form')

    <div class="form-group">

        {!! Form::submit('Publicar', ['class'=>'btn btn-primary']) !!}
    </div>


    {!! Form::close() !!}

@endsection

