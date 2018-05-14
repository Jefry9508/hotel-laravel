<li class="{{ Request::is('hotels*') ? 'active' : '' }}">
    <a href="{!! route('hotels.index') !!}"><i class="fa fa-search"></i><span>Buscar un hotel</span></a>
</li>

<li class="{{ Request::is('comentarios*') ? 'active' : '' }}">
    <a href="{!! route('comentarios.create') !!}"><i class="fa fa-edit"></i><span>Comentar sobre un hotel</span></a>
</li>

