<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zapatillas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fonts.css">

</head>

<body>


    <!-- inicio sesion-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Iniciar sesion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Correo electronico</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">contraseña</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-dark">Entrar</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
    <!---->


    <!-- registro-->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registrarse</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="nombre" class="col-form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre">
                        </div>
                        <div class="mb-3">
                            <label for="ApellP" class="col-form-label">Apellido Paterno</label>
                            <input type="text" class="form-control" id="ApellP">
                        </div>
                        <div class="mb-3">
                            <label for="ApellM" class="col-form-label">Apellido Materno</label>
                            <input type="text" class="form-control" id="ApellM">
                        </div>
                        <div class="mb-3">
                            <label for="correo" class="col-form-label">Correo electronico</label>
                            <input type="email" class="form-control" id="correo">
                        </div>
                        <div class="mb-3">
                            <label for="tel" class="col-form-label">Numero de celular</label>
                            <input type="number" class="form-control" id="tel">
                        </div>
                        <div class="mb-3">
                            <label for="pass" class="col-form-label">Contraseña</label>
                            <input type="password" class="form-control" id="pass1">
                        </div>
                        <div class="mb-3">
                            <label for="pass2" class="col-form-label">Ingresa la contraseña nuevamente</label>
                            <input type="password" class="form-control" id="pass2">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-dark">Registrase</button>
                </div>
            </div>
        </div>
    </div>
    <!---->

    <?php 

  if (empty($_GET['idusu'])) {
    include "enlaces/topnav.php";
    
  }else
  {
      ?>
    <div class="container-fluid bg-dark ">

                <a href="enlaces/perfil.php?idusu=<?php echo $_GET['idusu'] ?>" class="btn btn-dark">Ver perfil</a>
    </div>
    <?php
    include "enlaces/carrito.php";  
  }
  
  ?>

        <div class="container-fluid  p-0 ">

            <div class="container-fluid p-4 ">
                <div class="row">
                    <div class="col-sm-1 " style="display: flex;">
                        <img src="img/iconos/logo.PNG" alt="" width="" class="imgicon">

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
  
                include 'php/conexion.php';

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
                            echo  '<a class="nav-link" href="index.php">'  ?> INICIO</a>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                MARCAS
                            </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                                        <?php 
                                    foreach ($marca as $marcas) {
                                       echo '<li><a class="dropdown-item" href="enlaces/producto.php?marca='.$marcas['marca'].'&categoria">'. $marcas['marca'].'</a></li>';
                                    }
                                    
                                    ?>

                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="enlaces/producto.php?categoria=varon&marca">HOMBRE /</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="enlaces/producto.php?categoria=mujer&marca">MUJER /</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="enlaces/producto.php?categoria=unisex&marca">UNISEX /</a>
                                </li>
                              

                                <?php
                        }else{
                            echo  '<a class="nav-link" href="index.php?&idusu='.$_GET['idusu'].'">    INICIO</a>'?>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                MARCAS
                            </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <?php 


                                foreach ($marca as $marcas) {
                                
                               echo '<li><a class="dropdown-item" href="enlaces/producto.php?marca='.$marcas['marca'].'&categoria&idusu='.$_GET['idusu'].'">'. $marcas['marca'].'</a></li>';
                            }



                              ?>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <?php 
                            echo '<a class="nav-link" href="enlaces/producto.php?categoria=varon&marca&idusu='.$_GET['idusu'].'">HOMBRE /</a>';
                            ?>

                            </li>
                            <li class="nav-item">
                                <?php echo ' <a class="nav-link" href="enlaces/producto.php?categoria=mujer&marca&idusu='.$_GET['idusu'].'">MUJER /</a>'; ?>

                            </li>
                            <li class="nav-item">
                                <?php echo ' <a class="nav-link" href="enlaces/producto.php?categoria=unisex&marca&idusu='.$_GET['idusu'].'">UNISEX /</a>'; ?>

                            </li>
                      

                            <?php }?>







                        </ul>

                    </div>
                </div>
            </nav>


        </div>



        <div class="container-fluid slider">
            <div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/banner/11new-balance1_1_.jpg" class="d-block w-100 bannerimg" alt="..." data-bs-interval="100">
                    </div>
                    <div class="carousel-item">
                        <img src="img/banner/banner-web--break-da-rules.jpg" class="d-block w-100 bannerimg" alt="..." data-bs-interval="100">
                    </div>
                    <div class="carousel-item">
                        <img src="img/banner/new-balance.jpg" class="d-block w-100 bannerimg" alt="..." data-bs-interval="100">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
        </div>




        <div class=" container-fluid p-3">
            <div class="row ">
                <div class="col-md-12 p-5">
                    <h1 class="text-center ">
                        Nuevos productos
                    </h1>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row ">


                    <?php
                
                include "php/conexion.php";

                $consulta = "SELECT * FROM producto WHERE stock=1 ORDER BY 1 DESC";
                $ejecutar= $conexion->query($consulta);
                $i = 0 ;
                $usuario = [];
                while ($fila = $ejecutar->fetch_array()){
                            
                            $usuario[$i]['id'] =$fila['id'];
                            $usuario[$i]['nombre'] =$fila['nombre'];
                            $usuario[$i]['marca'] =$fila['marca'];
                            $usuario[$i]['precio'] =$fila['precio'];
                            $usuario[$i]['stock'] =$fila['stock'];
                            $usuario[$i]['cantidad'] =$fila['cantidad'];
                            $usuario[$i]['foto'] =$fila['foto'];
                            $usuario[$i]['fechaInicio'] =$fila['fechaInicio'];
                            $usuario[$i]['categoria'] =$fila['categoria'];
                            $i++;
                
                
                
                }
                

                for ($i=0; $i <3 ; $i++) { 
                
                    ?>
                        <div class="col-md-auto p-0 m-lg-auto">
                            <div class="card m-1" style="width: 18rem;">
                                <img src="data:image/jpg;base64,<?php echo base64_encode($usuario[$i]['foto']); ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p>
                                        <?php echo $usuario[$i]['categoria'];?>
                                    </p>
                                    <form method="POST">
                                        <label style="display: none;" for="" name="idpr">
                                    <?php echo $usuario[$i]['id']; ?>
                                </label>
                                        <h5 class="card-title">
                                            <?php echo $usuario[$i]['nombre']; ?>
                                        </h5>
                                        <p>
                                            <?php  echo $usuario[$i]['marca']; ?>
                                        </p>
                                        <p class="card-text">
                                            <?php echo $usuario[$i]['precio']; ?> bs
                                        </p>
                                        <?php 
                        
                        
                        
                        if (empty($_GET['idusu'])) {

                            echo  '<button class="btn btn-secondary">Se necesita iniciar sesion</button>';

                        }else
                        {
                            
                            echo '<a class="btn btn-dark" href="enlaces/reserva.php?idProducto='.$usuario[$i]['id'].'&idusu='.$_GET['idusu'].'&comentario&fecha&cantidad=1">    Reservar</a>';
                           
                           
                       
                        }
                        
                        



                        ?>


                                    </form>


                                </div>
                            </div>
                        </div>
                        <?php
                }

                ?>

                </div>
            </div>


            <div class="container-fluid mx-auto position-relative">
                <div class="row ">
                    <div class="col-md-12 ">
                        <h1 class="text-center p-5">
                            Catalogos por genero
                        </h1>
                    </div>
                </div>
                <div class="row gx-5 position-relative ">
                    <div class="col mx-auto position-relative abs1">

                        <div class="position-absolute top-50 start-50 translate-middle abs circle2">
                            <div class="card sexcard" style="width: 18rem;height: 50%;">
                                <img src="img/tenis-hombre-nike.jpg" class="img-thumbnail cardimg p-0 border-0" alt="...">
                                <div class="card-body text-center ">
                                <p>HOMBRE</p>
                                    <?php 
                                    if (empty($_GET['idusu'])) {

                                        echo  '<a class="btn btn-outline-dark" href="enlaces/producto.php?categoria=varon&marca"> Ver</a>';
            
                                    }else
                                    {
                                        echo ' <a class="btn btn-outline-dark" href="enlaces/producto.php?categoria=varon&marca&idusu='.$_GET['idusu'].'" > Ver</a>';
                                        
                                       
                                       
                                   
                                    }
                                    ?>
                                   
                                </div>
                            </div>


                        </div>

                    </div>
                    <div class="col mx-auto position-relative abs1 circle2">

                        <div class="card sexcard " style="width: 18rem; ">

                            <img src="img/fab6c405b602564b69ee15d83af26e1c.jpg" style="width: 100%;height: 210px;" class="img-thumbnail  cardimg p-0 border-0" alt="... ">
                            <div class=" card-body text-center ">
                                <p>MUJER</p>
                            <?php 
                                    if (empty($_GET['idusu'])) {

                                        echo  '<a class="btn btn-outline-dark" href="enlaces/producto.php?categoria=mujer&marca"> Ver</a>';
            
                                    }else
                                    {
                                        echo ' <a class="btn btn-outline-dark" href="enlaces/producto.php?categoria=mujer&marca&idusu='.$_GET['idusu'].'" > Ver</a>';
                                        
                                       
                                       
                                   
                                    }
                                    ?>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>



        </div>


        <div class="container-fluid ">
            <div class="row p-0 ">
                <div class="col-md-4 p-0 ">
                    <img alt="Bootstrap Image Preview " src="img/feet-1840619_1920.jpg " class="img-thumbnail imgsinborde " />
                </div>
                <div class="col-md-4 p-0 ">
                    <img alt="Bootstrap Image Preview " src="img/shoes-5379215_1920.jpg " class="img-thumbnail imgsinborde " />
                </div>
                <div class="col-md-4 p-0 ">
                    <img alt="Bootstrap Image Preview " src="img/shoes-5015809_1920.jpg " class="img-thumbnail imgsinborde " />
                </div>
            </div>
        </div>
        <div class="container-fluid ">
            <div class="row p-0 ">
                <div class="col-md-8 p-0 ">
                    <img alt="Bootstrap Image Preview " src="img/sneakers-4197495.jpg " class="img-thumbnail imgsinborde " />
                </div>
                <div class="col-md-4 p-0 ">
                    <img alt="Bootstrap Image Preview " src="img/basketball-1868494.jpg " class="img-thumbnail imgsinborde " style="max-height: 97%;width: 100%; " />
                </div>
            </div>
        </div>


        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-12 p-5">
                    <h1 class="text-center ">
                        Productos de calidad
                    </h1>
                </div>
            </div>


            <div class="row ">
                <?php
                include "php/conexion.php";

                $consulta = "SELECT * FROM producto WHERE stock=1 ORDER BY RAND() ASC";
                $ejecutar= $conexion->query($consulta);
                $i = 0 ;
                $usuario = [];
                while ($fila = $ejecutar->fetch_array()){
                            
                            $usuario[$i]['id'] =$fila['id'];
                            $usuario[$i]['nombre'] =$fila['nombre'];
                            $usuario[$i]['marca'] =$fila['marca'];
                            $usuario[$i]['precio'] =$fila['precio'];
                            $usuario[$i]['stock'] =$fila['stock'];
                            $usuario[$i]['cantidad'] =$fila['cantidad'];
                            $usuario[$i]['foto'] =$fila['foto'];
                            $usuario[$i]['fechaInicio'] =$fila['fechaInicio'];
                            $usuario[$i]['categoria'] =$fila['categoria'];
                            $i++;
                
                
                
                }
                

                for ($i=0; $i <3 ; $i++) { 
                
                    ?>
                    <div class="col-md-auto p-0 m-lg-auto">
                        <div class="card m-1" style="width: 18rem;">
                            <img src="data:image/jpg;base64,<?php echo base64_encode($usuario[$i]['foto']); ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p>
                                    <?php echo $usuario[$i]['categoria'];?>
                                </p>
                                <form method="POST">
                                    <label style="display: none;" for="" name="idpr">
                                <?php echo $usuario[$i]['id']; ?>
                            </label>
                                    <h5 class="card-title">
                                        <?php echo $usuario[$i]['nombre']; ?>
                                    </h5>
                                    <p>
                                        <?php  echo $usuario[$i]['marca']; ?>
                                    </p>
                                    <p class="card-text">
                                        <?php echo $usuario[$i]['precio']; ?> bs
                                    </p>
                                    <?php 
                        
                        
                        
                        if (empty($_GET['idusu'])) {

                            echo  '<button class="btn btn-secondary">Se necesita iniciar sesion</button>';

                        }else
                        {
                            
                            echo '<a class="btn btn-dark" href="enlaces/reserva.php?idProducto='.$usuario[$i]['id'].'&idusu='.$_GET['idusu'].'&comentario&fecha&cantidad=1">    Reservar</a>';
                           
                           
                       
                        }
                        
                        



                        ?>


                                </form>


                            </div>
                        </div>
                    </div>
                    <?php
                }


                ?>

            </div>
        </div>
        <div class="container-fluid p-5 bg-dark text-light banner1 ">
            <div class="row ">
                <div class="col-sm-7 p-lg-5 ">
                    <h1>Proximamente</h1>
                    <br>
                    <h5>Envío gratuito</h5>
                    <p>Te llevamos a casa GRATIS todas tus compras online de pedidos mayores de 45€ 😎 *Excluidas máquinas y bicicletas
                    </p>

                    <h5>Financiación en 3 o 4 cuotas</h5>
                    <p>Cómpralo ya y fracciona tu compra hasta en 4 cómodas cuotas con "Oney Pago Aplazado " 😏</p>

                    <h5>Devolución en tienda física sin coste</h5>
                    <p>Puedes devolver todas tus compras GRATIS en cualquiera de nuestras más de 180 tiendas físicas por toda España ✌️</p>

                    <h5>Más de 300 marcas disponibles</h5>
                    <p>Tenemos más de 300 marcas disponibles en nuestra página web 🔥 ¡Encuentra todo lo que necesites!</p>
                </div>
                <div class="col-sm-5 p-lg-5 ">
                    <video src="videos/video-banner-ventajas.mp4 " autoplay loop width="100% " height="auto "></video>
                </div>


            </div>
        </div>
</body>

<footer class="text-light" style="background-color: #141414;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6  p-4">
                <img src="img/iconos/logo.PNG" alt="" class="imgicon">
            </div>
            <div class="col-lg-6  p-4">
                <img src="img/iconos/upds-logo-social-preview.jpg" width="170px" class="rounded float-end imgicon" alt="">
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
