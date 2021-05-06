<?php
    include "php/conexion.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/log.css">
</head>
<body>
    <div class="cod-container">
        <div class="form-header">
            
            <h1>Camacho <span>Hnos.</span> </h1>
        </div>
        <div class="form-content">
            <form method="POST" class="cod-form">
                <div class="form-title">
                    <h3>Iniciar Sesión</h3>
                </div>
                <div class="input-group">
                    <input type="number" class="form-input" name="i-correo" id="correo">
                    <label class="label " for="correo">Carnet</label>
                </div>
                <div class="input-group">
                    <input type="password" class="form-input" name="i-contraseña" id="pass">
                    <label class="label " for="pass">Contraseña</label>
                </div>
                <div class="input-group">
                    <input type="submit" name="ingresar" class="form-input1" value="Iniciar Sesión">
                    
                </div>


                <div class="input-group">
                    <input type="submit" name="invitado" class="form-input1" value="Ingresar como invitado">
                    <br>
                    <br>
                    <input type="submit" name="admin" class="form-input1" value="Ingresar como admnistrador">
                </div>

            </form>
            <?php
            if(isset($_POST['ingresar'])){
                
                $email= $_POST['i-correo'];
                $contraseña=$_POST['i-contraseña'];
                if($email!=""){
                   echo $consulta="SELECT ci,contrasena FROM cliente WHERE ci = '$email'";
                   $ejecutar = $conexion->query($consulta);
                   $fila = $ejecutar->fetch_array();

                    if($fila['contrasena']==$contraseña)
                    {
                        
                        echo "<script> window.location.replace('index.php?idusu=".$email."'); </script>";
                        
                    }
                    else{
                        echo "<script> alert('no coincide'); </script>";    
                    }
                
                }    
               
            }
            if(isset($_POST['invitado'])){
                
                echo "<script> window.location.replace('index.php'); </script>";
               
            }
            if(isset($_POST['admin'])){
                
                 
                
                $email= $_POST['i-correo'];
                $contraseña=$_POST['i-contraseña'];
                if($email!=""){
                   echo $consulta="SELECT ci,contrasena FROM admin WHERE ci = '$email'";
                   $ejecutar = $conexion->query($consulta);
                   $fila = $ejecutar->fetch_array();

                    if($fila['contrasena']==$contraseña)
                    {
                        
                        echo "<script> window.location.replace('php/dashboard.php?idusu=".$email."'); </script>";
                        
                    }
                    else{
                        echo "<script> alert('no coincide'); </script>";    
                    }
                
                }    
               
            
               
            }
        
        
        ?>
        </div>



        <div class="form-content">
            <form action="#" method="POST" class="cod-form">
                <div class="form-title">
                    <h3>Registro</h3>
                </div>
                <div class="input-group">
                    <input type="text" class="form-input" name="ci" id="reg-ci">
                    <label class="label " for="reg-ci">CI</label>
                </div>
                <div class="input-group">
                    <input type="text" class="form-input" name="nombre" id="reg-nombre">
                    <label class="label " for="reg-nombre">Nombre</label>
                </div>
                <div class="input-group">
                    <input type="text" class="form-input" name="apellido" id="reg-apellido">
                    <label class="label " for="reg-apellido">Apellido</label>
                </div>
                <div class="input-group">
                    <input type="email" class="form-input" name="correo" id="reg-correo">
                    <label class="label " for="reg-correo">Correo</label>
                </div>
                <div class="input-group">
                    <input type="password" class="form-input" name="contraseña" id="reg-pass">
                    <label class="label " for="reg-pass">Contraseña</label>
                </div>
                <div class="input-group">
                    <input type="password" class="form-input" name="confirmar" id="conf-pass">
                    <label class="label " for="conf-pass">Confirmar Contraseña</label>
                </div>
                <div class="input-group">
                    <input type="submit" name="registrar" class="form-input" value="Registrarse">
                    <p>¿Ya tienes una cuenta? <a href="#" class="alt-form">Inicia Sesión</a> </p>
                </div>
            </form>
            <?php
            if(isset($_POST['registrar'])){
                
                $ci = $_POST['ci'];
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $confirmar= $_POST['confirmar'];
                $correo= $_POST['correo'];
                $contra=$_POST['contraseña'];
                if($confirmar==$contra)
                {
                    
                    $consulta="INSERT INTO cliente VALUES ('$ci','$nombre','$apellido','$correo','$contra')";
                    $ejecutar= $conexion->query($consulta);
                }
                else{
                    $var= 'contraseñas no iguales';
                    echo "<script> alert('".$var."'); </script>";
                }
               
            }
        
        
        
        ?>
        </div>

    </div>










    <script src="/js/jquery-3.5.1.min.js"></script>
    <script src="/js/log.js"></script>
</body>
</html>