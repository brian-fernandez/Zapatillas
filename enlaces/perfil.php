<?php 

include '../php/conexion.php';

$idcliente = $_GET['idusu'];

 $consulta6 = "SELECT * FROM producto p JOIN reserva r on (p.id = r.idProducto) where r.idCliente=$idcliente and r.estado='Entregado'  ORDER BY 10 DESC" ;

if ($ejecutar6 = $conexion->query($consulta6)) {
    $i6 = 0 ;
    $usuario6 = [];
    while ($fila6 = $ejecutar6->fetch_array()){
                
                $usuario6[$i6]['id'] =$fila6['id'];
                $usuario6[$i6]['nombre'] =$fila6['nombre'];
                $usuario6[$i6]['foto']=$fila6['foto'];
                $usuario6[$i6]['marca'] =$fila6['marca'];
                $usuario6[$i6]['precio'] =$fila6['precio'];
                $usuario6[$i6]['cantidad'] =$fila6['cantidad'];
                $usuario6[$i6]['fechaInicio'] =$fila6['fechaInicio'];
                $usuario6[$i6]['categoria'] =$fila6['categoria'];
                $usuario6[$i6]['comentario'] =$fila6['comentario'];
                $usuario6[$i6]['costo'] =$fila6['costo'];
        
                $i6++;
    
    
    
    }
    $datoerror2 = 0;
}else{

    $datoerror2 = 1;
   
}



                 $consulta7 = "SELECT * FROM producto p JOIN reserva r on (p.id = r.idProducto) where r.idCliente=$idcliente and r.estado = 'Pendiente' ORDER BY 10 DESC" ;
                
                if ($ejecutar7 = $conexion->query($consulta7)) {
                    $i7 = 0 ;
                    $usuario7 = [];
                    while ($fila7 = $ejecutar7->fetch_array()){
                                
                                $usuario7[$i7]['id'] =$fila7['id'];
                                $usuario7[$i7]['nombre'] =$fila7['nombre'];
                                $usuario7[$i7]['foto']=$fila7['foto'];
                                $usuario7[$i7]['marca'] =$fila7['marca'];
                                $usuario7[$i7]['precio'] =$fila7['precio'];
                                $usuario7[$i7]['cantidad'] =$fila7['cantidad'];
                                $usuario7[$i7]['fechaInicio'] =$fila7['fechaInicio'];
                                $usuario7[$i7]['categoria'] =$fila7['categoria'];
                                $usuario7[$i7]['comentario'] =$fila7['comentario'];
                                $usuario7[$i7]['costo'] =$fila7['costo'];
                        
                                $i7++;
                    
                    
                    
                    }
                    $datoerror= 0;
                }else
                {
                    $datoerror = 1;
                   
                }
               

$datoerror;
                                
?>









<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/fonts.css">
</head>

<body>

<?php 

if (empty($_GET['idusu'])) {
  include "topnav.php";
  
}else
{
    ?>
  <div class="container-fluid bg-dark ">         
              <a href="perfil.php?idusu=<?php echo $_GET['idusu'] ?>" class="btn btn-dark" >Ver perfil</a>
  </div>
  <?php
   
}

?>
<div class="container-fluid  p-0 ">

<div class="container-fluid p-4 ">
    <div class="row">
        <div class="col-sm-1 " style="display: flex;">
            <img src="../img/iconos/logo.PNG" alt="" width="" class="imgicon">

        </div>


    </div>
</div>


<nav class="navbar navbar-expand-lg navbar-light bg-light ">
                <div class="container-fluid">

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <div class="collapse navbar-collapse circle" id="navbarSupportedContent">


                        <?php 
  
                include '../php/conexion.php';

                $consulta  = "SELECT marca FROM producto GROUP BY marca;";
                $ejecutar= $conexion->query($consulta);
                $i = 0 ;
                $marca = [];
                while ($fila = $ejecutar->fetch_array()){
                            
                            $marca[$i]['marca'] =$fila['marca'];
                            
                            $i++;
                
                
                
                }
  
                ?>



                        <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="font-style: oblique;">

                            <li class="nav-item">
                                <?php  
                        if (empty($_GET['idusu'])) {
                            echo  '<a class="nav-link" href="../index.php">'  ?> INICIO</a>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                MARCAS
                            </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                                        <?php 
                                    foreach ($marca as $marcas) {
                                       echo '<li><a class="dropdown-item" href="producto.php?marca='.$marcas['marca'].'&categoria">'. $marcas['marca'].'</a></li>';
                                    }
                                    
                                    ?>

                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="producto.php?categoria=varon&marca">HOMBRE /</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="producto.php?categoria=mujer&marca">MUJER /</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="producto.php?categoria=unisex&marca">UNISEX /</a>
                                </li>


                                <?php
                        }else{
                            echo  '<a class="nav-link" href="../index.php?&idusu='.$_GET['idusu'].'">    INICIO</a>'?>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                MARCAS
                            </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <?php 


                                foreach ($marca as $marcas) {
                                
                               echo '<li><a class="dropdown-item" href="producto.php?marca='.$marcas['marca'].'&categoria&idusu='.$_GET['idusu'].'">'. $marcas['marca'].'</a></li>';
                            }



                              ?>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <?php 
                            echo '<a class="nav-link" href="producto.php?categoria=varon&marca&idusu='.$_GET['idusu'].'">HOMBRE /</a>';
                            ?>

                            </li>
                            <li class="nav-item">
                                <?php echo ' <a class="nav-link" href="producto.php?categoria=mujer&marca&idusu='.$_GET['idusu'].'">MUJER /</a>'; ?>

                            </li>
                            <li class="nav-item">
                                <?php echo ' <a class="nav-link" href="producto.php?categoria=unisex&marca&idusu='.$_GET['idusu'].'">UNISEX /</a>'; ?>

                            </li>
                           

                            <?php }?>







                        </ul>

                    </div>
                </div>
     </nav>





<!---->

<?php 

include '../php/conexion.php';

$idusuario = $_GET['idusu'];

 $consulta = "SELECT * FROM cliente where ci=$idusuario";
$ejecutar = $conexion->query($consulta);

$i = 0 ;
                $usuario = [];
                while ($fila = $ejecutar->fetch_array()){
                            
                            $usuario[$i]['ci'] =$fila['ci'];
                            $usuario[$i]['nombre'] =$fila['nombre'];
                            
                            $usuario[$i]['apellidoPaterno'] =$fila['apellidoPaterno'];
                            $usuario[$i]['apellidoMaterno'] =$fila['apellidoMaterno'];
                            $usuario[$i]['celular'] =$fila['celular'];
                            $usuario[$i]['dirección'] =$fila['dirección'];
                            
                            $usuario[$i]['contrasena'] =$fila['contrasena'];
                            $usuario[$i]['ocupacion'] =$fila['ocupacion'];
                            $usuario[$i]['foto'] =$fila['foto'];
                            $usuario[$i]['fechaInicio'] =$fila['fechaInicio'];
                            $i++;
                
                
                
                }

             $consulta2 = "SELECT * FROM reserva where idCliente=$idusuario and estado='Entregado' ORDER BY 1 desc " ;
                $ejecutar2 = $conexion->query($consulta2);
                
                $i2 = 0 ;
                                $usuario2 = [];
                                while ($fila2 = $ejecutar2->fetch_array()){
                                            
                                            $usuario2[$i2]['idProducto'] =$fila2['idProducto'];
                                            $usuario2[$i2]['cantidad'] =$fila2['cantidad'];
                                            
                                            $usuario2[$i2]['fechaRecojo'] =$fila2['fechaRecojo'];
                                            $usuario2[$i2]['costo'] =$fila2['costo'];
                                            $usuario2[$i2]['estado'] =$fila2['estado'];
                                            $usuario2[$i2]['comentario'] =$fila2['comentario'];
                
                                    
                                            $i2++;
                                
                                
                                
                                }

                                if (empty($usuario2[0]['idProducto'])) {
                                    $error = 1;
                                }else
                                {
                                    $ultimoproducto = $usuario2[0]['idProducto'];
                                     $consulta3 = "SELECT * FROM producto p JOIN reserva r on (p.id = r.idProducto)   where p.id=$ultimoproducto ORDER BY 10 DESC" ;
                                    $ejecutar3 = $conexion->query($consulta3);
                                    
                                    $i3 = 0 ;
                                                    $usuario3 = [];
                                                    while ($fila3 = $ejecutar3->fetch_array()){
                                                                
                                                                $usuario3[$i3]['id'] =$fila3['id'];
                                                                $usuario3[$i3]['nombre'] =$fila3['nombre'];
                                                                $usuario3[$i3]['foto']=$fila3['foto'];
                                                                $usuario3[$i3]['marca'] =$fila3['marca'];
                                                                $usuario3[$i3]['precio'] =$fila3['precio'];
                                                                $usuario3[$i3]['cantidad'] =$fila3['cantidad'];
                                                                $usuario3[$i3]['fechaInicio'] =$fila3['fechaInicio'];
                                                                $usuario3[$i3]['categoria'] =$fila3['categoria'];
                                                                $usuario3[$i3]['comentario'] =$fila3['comentario'];
                                                                $usuario3[$i3]['costo'] =$fila3['costo'];
                                                        
                                                                $i3++;
                                                    
                                                    
                                                    
                                                    }

                                                   
                                    $error = 0;
                                }

                                $consulta4 = "SELECT * FROM reserva where idCliente=$idusuario and estado='Pendiente' ORDER BY 1 desc " ;
                                $ejecutar4 = $conexion->query($consulta4);
                                
                                $i4 = 0 ;
                                                $usuario4 = [];
                                                while ($fila4 = $ejecutar4->fetch_array()){
                                                            
                                                            $usuario4[$i4]['idProducto'] =$fila4['idProducto'];
                                                            $usuario4[$i4]['cantidad'] =$fila4['cantidad'];
                                                            
                                                            $usuario4[$i4]['fechaRecojo'] =$fila4['fechaRecojo'];
                                                            $usuario4[$i4]['costo'] =$fila4['costo'];
                                                            $usuario4[$i4]['estado'] =$fila4['estado'];
                                                            $usuario4[$i4]['comentario'] =$fila4['comentario'];
                                
                                                    
                                                            $i4++;
                                            
                                                }
                                                if (empty($usuario4[0]['idProducto'])) {
                                                    $error2 = 1;
                                                }else
                                                {
                                                    $primerproducto = $usuario4[0]['idProducto'];
                                                     $consulta5 = "SELECT * FROM producto where id=$primerproducto";
                                                    $ejecutar5 = $conexion->query($consulta5);
                                                    
                                                    $i5 = 0 ;
                                                                    $usuario5 = [];
                                                                    while ($fila5 = $ejecutar5->fetch_array()){
                                                                                
                                                                                $usuario5[$i5]['id'] =$fila5['id'];
                                                                                $usuario5[$i5]['nombre'] =$fila5['nombre'];
                                                                                $usuario5[$i5]['foto']=$fila5['foto'];
                                                                                $usuario5[$i5]['marca'] =$fila5['marca'];
                                                                                $usuario5[$i5]['precio'] =$fila5['precio'];
                                                                                $usuario5[$i5]['cantidad'] =$fila5['cantidad'];
                                                                                $usuario5[$i5]['fechaInicio'] =$fila5['fechaInicio'];
                                                                                $usuario5[$i5]['categoria'] =$fila5['categoria'];
                                                    
                                                                        
                                                                                $i5++;
                                                                    
                                                                    
                                                                    
                                                                    }
                
                                                                   
                                                    $error2 = 0;
                                                }
                               
                

?>




<div class="container-fluid">

<div class="row">
<?php 

if (empty($_GET['con'])) {
    ?>
   <div class="col-lg-2" >
    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="text-align: left;">
    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Perfil</button>
    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Lista de productos entregados</button>
    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Listad de productos en reserva</button>
    
    <a href="../index.php" class="btn btn-danger">Salir</a>
  </div>
    </div>
  <?php
}else
{
    
}

?>

   
    <div class="col-lg-10 align-self-center">
                <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">


                <div class="container-fluid">
                    <div class="row p-4 border boder-1">
                        <div class="col-lg-6">
                        <div class="card" style="width: 18rem;">
                            <img src="data:image/jpg;base64,<?php echo base64_encode($usuario[0]['foto']); ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $usuario[0]['nombre']." ".$usuario[0]['apellidoPaterno']." ".$usuario[0]['apellidoMaterno']; ?></h5>
                                <p class="card-text">CI: <?php echo $usuario[0]['ci']; ?></p>
                                <p class="card-text">Ocupacion: <?php echo $usuario[0]['ocupacion']; ?> </p>
                                <p class="card-text">Direccion: <?php echo $usuario[0]['dirección']; ?> </p>
                                
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-6 ">
                        <h5>Ultimo comentario escrito</h5>
                        <div class="card" style="width: 18rem;">
            
                            <div class="card-body">
                                <?php 
                                if ($error) {
                                    echo "no hay comentarios";
                                }else
                                {
                                    ?>

            <div class="row">
                                <div class="col-lg-auto"><img style="height: 70px;padding: 10px 1px;width: 60px;" src="data:image/jpg;base64,<?php echo base64_encode($usuario3[0]['foto']); ?>" class="img-fluid"  alt="">     </div>
                                <div class="col-lg-8"> <h6><?php echo $usuario3[0]['nombre'] ?></h6></div>
                            </div>  


                                <p class="card-text"><?php echo $usuario3[0]['comentario']; ?></p>
                            </div>
            <?php  }
                                ?>
                            
                            </div>
                        </div>
                    </div>
                </div>    
                
                <div class="container-fluid">
                    <div class="row p-4 border border-1">
                        <div class="col-lg-6  ">
                            <h5>Ultimo Producto entregado</h5>
                            <div class="card" style="width: 18rem;">
                                            <?php
                                            if ($error) {
                                                echo 'No hay productos';
                                            }else
                                            {?>
                                                <img style="padding: 10px 1px" src="data:image/jpg;base64,<?php echo base64_encode($usuario3[0]['foto']); ?>" class="img-fluid"  alt="">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $usuario3[0]['nombre'] ?></h5>
                                <p class="card-text"><?php echo $usuario3[0]['marca'] ?></p>
                                
                                <p class="card-text"><?php echo $usuario3[0]['precio']?>bs </p>
                                
                                <?php } 
                                            ?>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-6 ">
                            <h5>Ultimo Producto reservado</h5>
                            <div class="card" style="width: 18rem;">
                                            <?php
                                            if ($error2) {
                                                echo 'No hay productos';
                                            }else
                                            {?>
                                                <img style="padding: 10px 1px" src="data:image/jpg;base64,<?php echo base64_encode($usuario5[0]['foto']); ?>" class="img-fluid"  alt="">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $usuario5[0]['nombre'] ?></h5>
                                <p class="card-text"><?php echo $usuario5[0]['marca'] ?></p>
                                
                                <p class="card-text"><?php echo $usuario5[0]['precio']?>bs </p>
                                
                                <?php } 
                                            ?>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>    




                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">


                
                    <?php
            
            if ($datoerror2) {?>


                
            <?php 

            echo "no hay datos";

            }else{?>
            
                <table class="table">
                <thead>
                <tr>
                <th scope="col">Foto</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Total</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                foreach ($usuario6 as $usuario6s) {
            
            
                
                ?>

                <tr>
                <td><img src="data:image/jpg;base64,<?php echo base64_encode($usuario6s['foto']); ?>" width="80px" alt=""></td>
                <th scope="row"><?php echo $usuario6s['nombre']?></th>
                <td><?php echo $usuario6s['marca']?></td>
                <td><?php echo $usuario6s['cantidad']?></td>
                <td><?php echo $usuario6s['precio']?></td>
                <td><?php echo $usuario6s['categoria']?></td>
                <td><?php echo $usuario6s['costo']?></td>
                </tr>
                </div>
            
                <?php }?>
                </tbody>
            </table>
                <?php
            }
            
            ?>
               </div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">  
                    <div class="container-fluid p-4">
                    <?php
            
            if ($datoerror) {?>


                
            <?php 

            echo "no hay datos";

            }else{?>
                <table class="table">
                <thead>
                <tr>
                <th scope="col">Foto</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Total</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                foreach ($usuario7 as $usuario7s) {
            
            
                
                ?>

                <tr>
                <td><img src="data:image/jpg;base64,<?php echo base64_encode($usuario7s['foto']); ?>" width="80px" alt=""></td>
                <th scope="row"><?php echo $usuario7s['nombre']?></th>
                <td><?php echo $usuario7s['marca']?></td>
                <td><?php echo $usuario7s['cantidad']?></td>
                <td><?php echo $usuario7s['precio']?></td>
                <td><?php echo $usuario7s['categoria']?></td>
                <td><?php echo $usuario7s['costo']?></td>
                </tr>
                <?php }?>
                </tbody>
            </table>
                <?php
            }
            
            ?>
                </div>
            </div>
               
            </div>
                </div>
            </div>


</div>

























</body>
<footer class="text-light" style="background-color: #141414;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6  p-4">
                <img src="../img/iconos/logo.PNG" alt="" class="imgicon">
            </div>
            <div class="col-lg-6  p-4">
                <img src="../img/iconos/upds-logo-social-preview.jpg" width="170px" class="rounded float-end imgicon" alt="">
            </div>
        </div>
        <div class="row">

            <div class="col-lg-2 p-4">
                <h6>ATENCION AL CLIENTE</h6>
                <br>
                <a href="" class="text-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop">¿Necesitas
                    ayuda?</a>
                <br>
                <br>
                <a href="" class="text-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">Importante
                    Covid-19</a>
                <br>
                <br>
                <a href="" class="text-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">Términos y
                    Condiciones</a>
            </div>
            <div class="col-lg-4 p-4">
                <h6>INTEGRANTES</h6>
                <br>
                <a href="" class="text-light">Brayan Fernandez Mercado</a>
                <br>
                <br>
                <a href="" class="text-light">Kevin Campero Alvarez</a>
            </div>

        </div>
        <div class="row border-top p-3">
            <div class="col-lg-12">
                <p class="text-center">Copyright 2021 © Zapatillas</p>
            </div>
        </div>
    </div>
</footer>
<div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog-scrollable modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">¿Necesitas ayuda?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body " style="text-align: justify;">
                <h6>¿Cómo puedo contactarlos?</h6>Contamos con distintos canales de atención, cualquier duda o consulta que tengas siéntete libre de preguntar mediante: Nuestras redes sociales: Facebook , Instagram, Twiter, TickTok, Tumblr Correo electrónico
                elmergm82@gmail.com Número de WhatsApp 67407464
                <h6>¿Cuál es el horario de atención?</h6>Puedes contactarnos en cualquier momento, para recibir respuestas más inmediatas nuestro horario es el siguiente: 9:00 AM a 8 :00 PM de lunes a Sábado. Y domingo de 9 am hasta 2 pm
                <h6>¿Este es un sitio seguro?
                </h6> Ten la confianza de que tu información está siendo gestionada de la manera correcta y que este sitio web tiene los certificados de seguridad SSL correspondientes.
                <h6>¿Cómo realizan el servicio de despacho?</h6> Los despachos los realizamos habiendo confirmado la información de los pedidos y realizado el empaque y procediendo de despacho hasta las 9:00 AM en días hábiles. Para que tu producto este seguro
                tenemos tres métodos de entrega: Pasa por nuestra tienda principal ubicado en la C. Reza # 363 casi Tumusla y te entregamos tu producto *El costo de envió en Cochabamba es de 10 Bs y interior 20 Bs. *Entrega Mediante Flota o transportadora
                que llegaría al día siguiente *Entrega mediante las tiendas Status. * Entrega en Avion. En cualquiera de los casos llamamos por WhatsApp de manera gratuita y coordinamos en vivo tu pedido y entrega para indicarte en que situación Si tienes
                dudas nos puedes escribir a nuestro formulario de contactos
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
<!---->

<div class="modal fade " id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog-scrollable modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Importante Covid-19</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body " style="text-align: justify;">
                Atendiendo a las recomendaciones de las Autoridades Nacionales tomamos algunas medidas en nuestras tiendas físicas y virtuales: Todos nuestros productos estas desinfectados con diferentes productos para cuidar tu salud, además al momento de ingresar a
                nuestra tienda te desinfectamos desde tus pies hasta tu cabello para resguardar tu salud y la salud de tu familia. Nuestros clientes tienen la posibilidad de realizar cualquier compra, aprovechando nuestras promociones tomando en cuenta
                lo siguiente:
                <h5>ENTREGAS:</h5> Para Cochabamba la entrega debe ser en el mismo dia. Los pedidos para el interior del país serán despachados entre 2 a 3 dias , esto debito a todavía pasamos por un periodo de cuarentena para todo el pais.
                <h5>RECOJO EN TIENDA:</h5> Si realizaste un pedido de Recojo en tienda Status, el mismo estará disponible el tiempo necesario hasta que puedas buscarlo.
                <h5>CAMBIOS Y DEVOLUCIONES:</h5>Extenderemos el plazo para que puedas realizar tu solicitud (Tomando en cuenta el punto; ¿Como realizo un cambio?). . Tendrás 3 días a partir de la entrega de tu producto para poder realizar la solicitud de
                cambiarlo del mismo producto, de lo contrario no se podrá realizar ningún cambio. Nuestras sucursales permanecerán totalmente cerradas hasta finalizar el aislamiento.
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
<!---->
<div class="modal fade " id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog-scrollable modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Términos y Condiciones</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body " style="text-align: justify;">
                <h6>Propiedad intelectual</h6>
                <li>El contenido que publicamos en este sitio web, ya sea texto, fotografías, videos, entre otros, son propiedad exclusiva de Status Zapatillas.</li> <br>
                <li> El uso de nuestra marca está prohibido para aquellos que no están autorizados por titulares.</li>
                <br>
                <li>El registro de cada Usuario se verificará una vez que el formulario sea completando y enviado.</li>
                <br>
                <h6>Contraseña</h6> Ya una vez que el usuario esté registrado, este accederá a su cuenta por medio de su correo electrónico y su contraseña para un acceso confidencial y seguro. <br> El Usuario asume totalmente la responsabilidad por el mantenimiento
                de la confidencialidad de su clave secreta registrada en este Sitio, la cual le permite efectuar compras, solicitar servicios y obtener información. Dicha clave es de uso personal y su entrega a terceros, no involucra responsabilidad de
                la Empresa en caso de mala utilización.
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js " integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG " crossorigin="anonymous ">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js " integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc " crossorigin="anonymous ">
</script>

</html>