<table class="table table-responsive" id="contribuyentes-table">
    <thead>
        <tr>
        <th>Nombre</th>
        <th>Dui</th>
        <th>Nit</th>
        <th>Nacimiento</th>
        <th>Telefono</th>
        <th>Genero</th>
        <th>Direccion</th>
        <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($contribuyentes as $contribuyentes)
            <tr>
                <td>{!! $contribuyentes->nombre !!}</td>
                <td>{!! $contribuyentes->dui !!}</td>
                <td>{!! $contribuyentes->nit !!}</td>
                <td>{!! $contribuyentes->nacimiento !!}</td>
                <td>{!! $contribuyentes->telefono !!}</td>
                <td>{!! $contribuyentes->genero !!}</td>
                <td>{!! $contribuyentes->direccion !!}</td>
                <td>
                    {!! Form::open(['route' => ['contribuyentes.destroy', $contribuyentes->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('contribuyentes.show', [$contribuyentes->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('contribuyentes.edit', [$contribuyentes->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        @if(count($contribuyentes) == 0)
            <tr>
                <td colspan="8">
                    <h2 class='text-center'>Lo sentimos pero no hay contribuyentes por el momento</h2>
                </td>
            </tr>
        @endif
    </tbody>
</table>