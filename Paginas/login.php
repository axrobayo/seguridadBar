<?php

    $conn = new mysqli("localhost","root","","bares");
    $nombre = $_POST["txtusuario"];
    $pass 	= $_POST["txtpassword"];

    //Para iniciar sesión
    if(isset($_POST["btnloginx"]))
    {

        $queryusuario = mysqli_query($conn,"SELECT * FROM user WHERE user_email = '$nombre'");
        $nr 		= mysqli_num_rows($queryusuario); 
        $mostrar	= mysqli_fetch_array($queryusuario); 
            
        if (($nr == 1) && (password_verify($pass,$mostrar['user_password'])) )
            { 
                session_start();
                $_SESSION['nombredelusuario']=$nombre;
                header("Location: index.php");
            }
        else
            {
            echo "<script> alert('Usuario o contraseña incorrecto.');window.location= 'auth.html' </script>";
            }
    }

    //Para registrar
    if(isset($_POST["btnregistrarx"]))
    {

        $queryusuario 	= mysqli_query($conn,"SELECT * FROM user WHERE user_email = '$nombre'");
        $nr 			= mysqli_num_rows($queryusuario); 

        if ($nr == 0)
        {

            $pass_fuerte = password_hash($pass, PASSWORD_BCRYPT);
            $queryregistrar = "INSERT INTO user(user_email, user_password) values ('$nombre','$pass_fuerte')";
            

        if(mysqli_query($conn,$queryregistrar))
        {
            echo "<script> alert('Usuario registrado: $nombre');window.location= 'auth.html' </script>";
        }
        else 
        {
            echo "Error: " .$queryregistrar."<br>".mysqli_error($conn);
        }

        }else
        {
            echo "<script> alert('No puedes registrar a este usuario: $nombre');window.location= 'auth.html' </script>";
            echo 'mensaje';
        }

    } 
?>