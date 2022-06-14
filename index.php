<?php
    include("ConexionSQL\conexion.php");
    $bares = "SELECT * FROM bar";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="error">
        <span>Bar ESPEL</span>
    </div>
    <div class="main" >
        <form action="" id="form">
            <input type="text" name="usuario" placeholder="Usuario" />
            <input type="text" name="pass" placeholder="Contraseña" />
            <input type="submit" name="usuario" placeholder="Inicar Sesión" />
        </form>
    </div>
    <div class="table-responsive">
    <table class="table caption-top">
        <caption>Bares</caption>
        <thead>
            <tr class="table-dark">
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
            </tr>
        </thead>
        <tbody>
            <tr class="table-secondary">
                <?php $resultado = mysqli_query($conn, $bares);
                    while($datos = mysqli_fetch_assoc($resultado)){?>
                    <td><?php echo $datos['bar_id'];?></td>
                    <td><?php echo $datos['bar_nombre'];?></td>
                <?php } ?>  
            </tr>
        </tbody>
    </table>
    </div>
</body>
</html>