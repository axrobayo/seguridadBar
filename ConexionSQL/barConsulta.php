<?php 
	require '../ConexionSQL/conexion.php';
    //$consultar="SELECT * FROM bar";
    $consultar="SELECT Bar.cam_id,Bar.bar_id,Bar.bar_nombre,Bar.bar_abierto,
    Cam.cam_nombre,Cam.cam_direccion
    FROM bar Bar
    INNER JOIN campus Cam ON Bar.cam_id=Cam.cam_id";
    $query=mysqli_query($conn,$consultar);
    $array=mysqli_fetch_array($query);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    //echo "Connected successfully";
    mysqli_close($conn);
 ?>