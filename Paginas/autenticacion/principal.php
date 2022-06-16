<link rel="stylesheet" href="/assets/style.css">
<div class="cajafuera">
    <div class="pagprincipal">
        
        <?php
            include('conexionLogin.php');
            session_start();

            if(isset($_SESSION['nombredelusuario']))
            {
                $usuarioingresado = $_SESSION['nombredelusuario'];
                echo "<h1>Bienvenido: $usuarioingresado </h1>";
            }
            else
            {
                header('location: auth.html');
            }
            ?>
            <form method="POST">
                <tr><td colspan='2' align="center"><input type="submit" value="Cerrar sesión" name="btncerrar" /></td></tr>
            </form>

            <?php 

            if(isset($_POST['btncerrar']))
            {
                session_destroy();
                header('location: auth.html');
            }
                
        ?>
    </div>
</div>