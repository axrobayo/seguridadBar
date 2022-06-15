<?php 
	require '../ConexionSQL/conexion.php';
    //$consultar="SELECT * FROM bar";
    $consultar="SELECT Menu.men_id,Menu.bar_id,Menu.men_nombre,Menu.men_precio,Menu.men_disponible,Menu.men_descripcion,
    Bar.bar_nombre,Bar.bar_abierto
    FROM menu Menu
    INNER JOIN bar Bar ON Menu.bar_id=Bar.bar_id";
    $query=mysqli_query($conn,$consultar);
    $array=mysqli_fetch_array($query);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    //echo "Connected successfully";
    mysqli_close($conn);
 ?>