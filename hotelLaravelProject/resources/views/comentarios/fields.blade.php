<!-- Comentario Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('comentario', 'Comentario:') !!}
    {!! Form::textarea('comentario', null, ['class' => 'form-control']) !!}
</div>

<!-- Calificacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('calificacion', 'Calificacion:') !!}
    {!! Form::select('calificacion', ['Seleccione', 1, 2, 3, 4, 5], null, ['class' => 'form-control']) !!}
</div>

<!-- User Id Field -->

{!! Form::hidden('id_user', $user, null, ['class' => 'form-control']) !!}

<!-- Hotel Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hotel_id', 'Escoja un hotel:') !!}
    {!! Form::select('id_hotel', $hotels, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('comentarios.index') !!}" class="btn btn-default">Cancel</a>
</div>

