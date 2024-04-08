{{$Modo == 'crear' ? 'Agregar Producto' : 'Editar Producto'}}
<label for="Producto">{{'Producto'}}</label>
<input type="text" name="producto" id="producto" value="{{isset($producto->producto)?$producto->producto:''}}">
<label for="Cantidad">{{'Cantidad'}}</label>
<input type="text" name="cantidad" id="cantidad" value="{{isset($producto->cantidad)?$producto->cantidad:''}}">

<input type="submit" value="{{$Modo == 'crear' ? 'Agregar' : 'Editar'}}">
<a href="{{url('productos')}}">Regresar</a>
