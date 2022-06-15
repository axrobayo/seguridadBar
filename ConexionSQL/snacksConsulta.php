<?php 
	require '../ConexionSQL/conexion.php';
    //$consultar="SELECT * FROM bar";
    $consultar="SELECT Snack.sna_id,Snack.bar_id,Snack.sna_nombre,Snack.sna_precio,Snack.sna_disponible,
    Bar.bar_nombre,Bar.bar_abierto
    FROM snack Snack
    INNER JOIN bar Bar ON Snack.bar_id=Bar.bar_id";
    $query=mysqli_query($conn,$consultar);
    $array=mysqli_fetch_array($query);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    //echo "Connected successfully";
    mysqli_close($conn);
 ?>