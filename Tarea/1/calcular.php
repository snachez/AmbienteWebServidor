<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
if ($_REQUEST['radio']=="Nike") {
     $subtotal=20500;
     $impuesto=(13*20500)/100;
     $total=$subtotal+$impuesto;
     $monto_pago=$_REQUEST['pago'];
     $vuelto=$monto_pago-$total;
     echo "<p>Subtotal: ".$subtotal."</p>"."<p>Impuesto de venta(13%): ".$impuesto."</p>"."<p>Total a pagar: ".$total."</p>"."<p>Monto con que pago: ".$monto_pago."</p>"."<p>Cambio: ".$vuelto."</p>";
   }else{
    if ($_REQUEST['radio']=="converse") {
      $subtotal=25000;
     $impuesto=(13*25000)/100;
     $total=$subtotal+$impuesto;
     $monto_pago=$_REQUEST['pago'];
     $vuelto=$monto_pago-$total;
   echo "<p>Subtotal: ".$subtotal."</p>"."<p>Impuesto de venta(13%): ".$impuesto."</p>"."<p>Total a pagar: ".$total."</p>"."<p>Monto con que pago: ".$monto_pago."</p>"."<p>Cambio: ".$vuelto."</p>";
    }else{
    	if ($_REQUEST['radio']=="dr martens") {
    		 $subtotal=65000;
     $impuesto=(13*65000)/100;
     $total=$subtotal+$impuesto;
     $monto_pago=$_REQUEST['pago'];
     $vuelto=$monto_pago-$total;
     echo "<p>Subtotal: ".$subtotal."</p>"."<p>Impuesto de venta(13%): ".$impuesto."</p>"."<p>Total a pagar: ".$total."</p>"."<p>Monto con que pago: ".$monto_pago."</p>"."<p>Cambio: ".$vuelto."</p>";
    	}else{
    	if ($_REQUEST['radio']=="adidas") {
    		 $subtotal=45000;
     $impuesto=(13*45000)/100;
     $total=$subtotal+$impuesto;
     $monto_pago=$_REQUEST['pago'];
     $vuelto=$monto_pago-$total;
    echo "<p>Subtotal: ".$subtotal."</p>"."<p>Impuesto de venta(13%): ".$impuesto."</p>"."<p>Total a pagar: ".$total."</p>"."<p>Monto con que pago: ".$monto_pago."</p>"."<p>Cambio: ".$vuelto."</p>";
    	}else{
    	if ($_REQUEST['radio']=="vans") {
    		 $subtotal=27000;
     $impuesto=(13*27000)/100;
     $total=$subtotal+$impuesto;
     $monto_pago=$_REQUEST['pago'];
     $vuelto=$monto_pago-$total;
   echo "<p>Subtotal: ".$subtotal."</p>"."<p>Impuesto de venta(13%): ".$impuesto."</p>"."<p>Total a pagar: ".$total."</p>"."<p>Monto con que pago: ".$monto_pago."</p>"."<p>Cambio: ".$vuelto."</p>";
    	}else{
    	if ($_REQUEST['radio']=="puma") {
    		 $subtotal=60000;
     $impuesto=(13*60000)/100;
     $total=$subtotal+$impuesto;
     $monto_pago=$_REQUEST['pago'];
     $vuelto=$monto_pago-$total;
    echo "<p>Subtotal: ".$subtotal."</p>"."<p>Impuesto de venta(13%): ".$impuesto."</p>"."<p>Total a pagar: ".$total."</p>"."<p>Monto con que pago: ".$monto_pago."</p>"."<p>Cambio: ".$vuelto."</p>";
    	}else{
    	if ($_REQUEST['radio']=="reebok") {
    		 $subtotal=43000;
     $impuesto=(13*43000)/100;
     $total=$subtotal+$impuesto;
     $monto_pago=$_REQUEST['pago'];
     $vuelto=$monto_pago-$total;
    echo "<p>Subtotal: ".$subtotal."</p>"."<p>Impuesto de venta(13%): ".$impuesto."</p>"."<p>Total a pagar: ".$total."</p>"."<p>Monto con que pago: ".$monto_pago."</p>"."<p>Cambio: ".$vuelto."</p>";
    	}
    }
    }
    }
    }
    }
   }
?>
</body>
</html>
