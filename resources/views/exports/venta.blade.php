<table>
    <thead>
       

    </thead>
    <tbody>

    
    <tr style="backgroung-color:green;"> 
        <td><b>ZONA</b></td>
         <td><b>USUARIO</b></td>
       <td><b>No DE VENTA</b></td>
       <td><b>DESCRIPCION VENTA</b></td>
       <td><b>NOMBRE DEL PRODUCTO</b></td>
       <td><b>CULTIVO</b></td>
        <td><b>PARTICIPACION</b></td>
        <td><b>DOSIS POR HECTAREA</b></td>
        <td><b>NUMERO DE APLICACIONES AL Año</b></td>
        <td><b>BLANCO BIOLOGICO</b></td>
        
      </tr>



      @foreach($Venta as $ventas)
      <tr>  
        @php
            $zona = '';
        @endphp
        @foreach($Zonasusers as $zon)
            @php
                if ($zon->id_usu == $ventas->id_usu) {
                    $zona .= $zon->desc.', ';
                }
            @endphp
        @endforeach
        @php
            $zona = substr($zona,0,strlen($zona) - 2 );
        @endphp
        <td>{{ $zona }}</td>
        <td>{{ $ventas->name }}</td>
        <td>{{ $ventas->id }}</td>
        <td>{{ $ventas->desc }}</td>
        <td>{{ $ventas->desc_prod_use }}</td>
        <td>{{ $ventas->desc_cult_use }}</td>
        <td>{{ $ventas->participacion }}</td>
        <td>{{ $ventas->litros }}</td>
        <td>{{ $ventas->aplicaciones }}</td>
        <td>{{ $ventas->desc_bb_use }}</td>
    </tr>
@endforeach
    
</tbody>
</table>