<?php 
	require '../ConexionSQL/conexion.php';
    //$consultar="SELECT * FROM bar";
    $consultar="SELECT Preferencias.pre_id,Preferencias.men_id,Preferencias.pre_fecha,Preferencias.pre_observacion,
    Menu.men_nombre,Menu.men_disponible
    FROM preferencias Preferencias
    INNER JOIN menu Menu ON Preferencias.men_id=Menu.men_id";
    $query=mysqli_query($conn,$consultar);
    $array=mysqli_fetch_array($query);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    //echo "Connected successfully";
    mysqli_close($conn);
 ?>