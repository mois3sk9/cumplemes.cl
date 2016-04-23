<div class="col-md-11">
    <table class="table-responsive table-striped table-hover encima col-md-12">
        <thead>
            <tr>
             	<th>
                    Imagen
                </th>
                <th>
                    ID
                </th>
                <th>
                    Nombre
                </th>
                <th>
                    Descripción
                </th>
                <th>
                	Cantidad
                </th>
                <th>
                	Precio
                </th>
                <th>
                	Subtotal
                </th>
               
            </tr>
        </thead>
        <tbody>
        @foreach($productos as $producto)
            <tr>
            	<td>
                    <img src="{{asset('images/corazon.jpg')}}" class="img-thumbnail img-responsive" width="100px" height="100px">
                </td>
                <td>
                   {{$producto['id']}}
                </td>
                <td>
                    {{$producto['nombre']}}
                </td>
                <td>
                    {{$producto['descripcion']}}
                </td>
                <td>
                	{{$producto['cantidad'] }}
                </td>
                <td>
                	{{$producto['precio'] }}
                </td>
                <th>
                	{{ $producto['precio'] * $producto['cantidad'] }}
                </th>
                
            </tr>
         @endforeach 
        </tbody>
        <hr />
        <tfoot>
			<tr>
				<td colspan="6">
					<div class="pull-right">
						Total:   
					</div>
				</td>
				<td>
					 <b>150.000</b>
				</td>
			</tr>
        </tfoot>
    </table>
    <hr />
</div>