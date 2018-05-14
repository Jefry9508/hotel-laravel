@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Información
        </h1>
    </section>
    <div class="content">
        <div class="padre">
        <div class="card">
            <h3><b>{{$hotel->nombre}}</b></h3>
            <h4>{{$hotel->estrellas}} estrellas</h4>
            <h5>{{$hotel->ciudad}}</h5>

            <img style="width: 250px; height:250px" src="http://www.pngmart.com/files/4/Hotel-PNG-Pic.png" class="hotel-item">

            <p>Dirección: {{$hotel->ubicacion}}</p>

            <div class="o-price">
                Precio de la habitación : <span class="o-price__currency"> </span>
                <span class="o-price__num">$ {{ number_format($hotel->costo, 0, ',', '.') }}</span>
            </div>


            <span class="o-hotel-review__score"><em>{{$hotel->calificacion}}</em>/5</span>
            <h5>{{  App\Models\Comentario::where([ ['id_hotel', '=', $hotel->id],])->get()->count()}} Comentarios</h5>


            {!! Form::open(['route' => ['hotels.destroy', $hotel->id], 'method' => 'delete']) !!}
            <div class='btn-group'>
                <a href="{!! route('hotels.show', [$hotel->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i> Ver </a>

                <a href="{!! route('hotels.edit', [$hotel->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i> Editar </a>

                {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
            </div>
            {!! Form::close() !!}
        </div>
        </div>
        @foreach($hotel->comentarioshotel as $comment)
            <hr>
        <div class="cuadrado">
            <div class="comment-item">

                <div class="contenidoIzq">
                    <h5>{!! $comment->created_at->format('D d/M/Y H:i') !!} </h5>
                    <h3>{{    App\User::where([ ['id', '=', $comment->id_user]])->first()->name   }} comentó:</h3>
                    <span class="o-hotel-review__score"><em>{{$comment->calificacion}}</em>/5</span>
                </div>

                <div class="contenidoDer">

                    <h5>{{$comment->comentario}}</h5>
                </div>

            </div>
        </div>
        @endforeach
    </div>
@endsection
