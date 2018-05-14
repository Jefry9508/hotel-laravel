<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $comentario->id !!}</p>
</div>

<!-- Comentario Field -->
<div class="form-group">
    {!! Form::label('comentario', 'Comentario:') !!}
    <p>{!! $comentario->comentario !!}</p>
</div>

<!-- Calificacion Field -->
<div class="form-group">
    {!! Form::label('calificacion', 'Calificacion:') !!}
    <p>{!! $comentario->calificacion !!}</p>
</div>

<!-- Id Hotel Field -->
<div class="form-group">
    {!! Form::label('id_hotel', 'Id Hotel:') !!}
    <p>{!! $comentario->id_hotel !!}</p>
</div>

<!-- Id User Field -->
<div class="form-group">
    {!! Form::label('id_user', 'Id User:') !!}
    <p>{!! $comentario->id_user !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $comentario->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $comentario->updated_at !!}</p>
</div>

