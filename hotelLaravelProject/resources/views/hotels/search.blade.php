@extends('layouts.app')

@section('content')
    <section class="content-header">

        <div class="form-group col-md-4">
            {!! Form::label('tipo', 'Tipo busqueda:') !!}
            {!! Form::select('criterio', ['nombre','ciudad'], null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group col-sm-6">
            {!! Form::label('criterio', 'Criterio:') !!}
            {!! Form::text('text', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-sm-12">
            <a href="{!! route('hotels.index') !!}" class="btn btn-info">Buscar</a>
        </div>
        <h1 class="pull-right">
            <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('hotels.create') !!}">Agregar</a>
        </h1>
    </section>

    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                {!! Form::open(['route' => 'hotels.search']) !!}

                @include('hotels.table')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

