<table>
    <thead>
       

    </thead>
    <tbody>

    
    <tr>
        <td><b>Zona</b></td>
         <td><b>Usuario</b></td>
       <td><b>Venta</b></td>
       <td><b>Nombre del producto</b></td>
       <td><b>Nombre cultivo usado</b></td>
        <td><b>Participación</b></td>
        <td><b>Dosis por hectarea en litros</b></td>
        <td><b>Número de aplicaciones al año</b></td>
        <td><b>Nombre del blanco biologico</b></td>
        
      </tr>
      @foreach($Zonasusers as $zon)

    <tr>
        <td>{{ $zon->desc }}</td>
        @endforeach

      @foreach($Venta as $ventas)

        <td>{{ $ventas->name }}</td>
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