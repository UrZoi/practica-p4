<?php
$Cantidad1=$_GET['Can'];
$Cantidad2=$_GET['Can2'];
$Cantidad3=$_GET['Can3'];
$Precio1=$_GET['Pre1'];
$Precio2=$_GET['Pre2'];
$Precio3=$_GET['Pre3'];
$Producto1=$_GET['Pro'];
$Producto2=$_GET['Pro2'];
$Producto3=$_GET['Pro3'];
?>
<html>
    <body>
<h1></h1>
<br>
<br>
    <center><table>
    		<tr>
    			<th>Producto</th>
    			<th>Total</th>
    		</tr>
    		
              <tr>

    			<td><?php echo $Producto1; ?></td>
    			<td><?php $Resultado1=$Cantidad1*$Precio1; echo $Resultado1; ?></td>
    		</tr>
    		<tr>
    			<td><?php echo $Producto2; ?></td>
    			<td><?php $Resultado2=$Cantidad2*$Precio2; echo $Resultado2; ?></td>
    		</tr>
    		<tr>
    			<td><?php echo $Producto3; ?></td>
    			<td><?php $Resultado3=$Cantidad3*$Precio3; echo $Resultado3; ?></td>
    		</tr>
    		<tr>
    			<td>Subtotal</td>
    			<td><?php  $Subtotal=$Resultado3+$Resultado2+$Resultado1; echo $Subtotal; ?></td>
    		</tr>
    		<tr>
    			<td>IVA</td>
    			<td><?php $Iva=$Subtotal*.16; echo $Iva?></td>
    		</tr>
    		<tr>
    			<td>TOTAL</td>
    			<td><?php $Total=$Subtotal*1.16;
 echo $Total; ?></td>
    		</tr>
    	</table></center>
    </body>

</html>
