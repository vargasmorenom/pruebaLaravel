@if(Session::has('Mensaje')){{
    Session::get('Mensaje')
}}
@endif

<a href="{{url('productos/create')}}">Nuevo Productos</a>
<table class="table table-light">
 <thead class="thead-light">
    <tr>
        <th>codigo</th>
        <th>Producto</th>
        <th>Cantidad</th>
        <th>Acciones</th>
    </tr>
 </thead>
    <tbody>
    @foreach ($productos as $producto)
         <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$producto->producto}}</td>
            <td>{{$producto->cantidad}}</td>
            <td><a href="{{ url('/productos/'.$producto->id.'/edit')}}">Editar</a> |
            <form method="post" action="{{url('/productos/'.$producto->id)}}">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button type="submit" onclick="return confirm('Borrar?');">Borrar</button>
            </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
