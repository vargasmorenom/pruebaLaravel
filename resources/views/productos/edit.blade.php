<form action="{{url('/productos/'.$producto->id)}}" method="post">
{{csrf_field()}}
{{method_field('PATCH')}}
@include('productos.form',['Modo'=>'editar'])
</form>
