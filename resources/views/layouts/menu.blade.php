<li class="{{ Request::is('contribuyentes*') ? 'active' : '' }}">
    <a href="{!! route('contribuyentes.index') !!}"><i class="fa fa-edit"></i><span>Contribuyentes</span></a>
</li>

<li class="{{ Request::is('rubros*') ? 'active' : '' }}">
    <a href="{!! route('rubros.index') !!}"><i class="fa fa-edit"></i><span>Rubros</span></a>
</li>

<li class="{{ Request::is('negocios*') ? 'active' : '' }}">
    <a href="{!! route('negocios.index') !!}"><i class="fa fa-edit"></i><span>Negocios</span></a>
</li>

