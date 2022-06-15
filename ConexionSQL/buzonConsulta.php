<?php 
	require '../ConexionSQL/conexion.php';
    //$consultar="SELECT * FROM bar";
    $consultar="SELECT Buzon.buz_id,Buzon.bar_id,Buzon.buz_fecha,Buzon.buz_descripcion,
    Bar.bar_nombre,Bar.bar_abierto
    FROM buzon Buzon
    INNER JOIN bar Bar ON Buzon.bar_id=Bar.bar_id";
    $query=mysqli_query($conn,$consultar);
    $array=mysqli_fetch_array($query);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    //echo "Connected successfully";
    mysqli_close($conn);
 ?>