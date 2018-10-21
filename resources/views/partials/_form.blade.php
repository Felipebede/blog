<div class="form-group">
    {!! Form::label('title', 'Titulo') !!}
    {!! Form::text('title', null, ['class'=>'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('category', 'Categoria') !!}
    {!! Form::text('category', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('author', 'Autor') !!}
    {!! Form::text('author', null, ['class'=>'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('keywords', 'Palavras-chave') !!}
    {!! Form::text('keywords', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('content', 'Conteúdo') !!}
    {!! Form::textarea('content', null, ['class'=>'form-control']) !!}
</div>
