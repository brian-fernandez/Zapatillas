<?php 

  if (empty($_GET['idusu'])) {
    include "topnav.php";
    
  }else
  {
    echo 'error';
    include "carrito.php";
    
      
  }
  
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/fonts.css">
</head>

<body>
    <!--Lista-->


    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <a href="reservalist.html" class="btn btn-success">Realizar Pedido</a>

            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="../img/zapatilla1.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">ZAPATILLAS RUNNING ADIDAS DURAMO SL MUJER NEGRA</h5>
                                    <p class="card-text">50bs</p>
                                    <button class="card-text btn btn-danger">Cancelar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-12">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="../img/zapatilla1.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">ZAPATILLAS RUNNING ADIDAS DURAMO SL MUJER NEGRA</h5>
                                    <p class="card-text">50bs</p>
                                    <button class="card-text btn btn-danger">Cancelar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-12">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="../img/zapatilla1.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">ZAPATILLAS RUNNING ADIDAS DURAMO SL MUJER NEGRA</h5>
                                    <p class="card-text">50bs</p>
                                    <button class="card-text btn btn-danger">Cancelar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!---->

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
                            <div id="emailHelp" class="form-text">Nunca compartiremos su correo electr??nico con nadie m??s.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">contrase??a</label>
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
                            <label for="pass" class="col-form-label">Contrase??a</label>
                            <input type="password" class="form-control" id="pass1">
                        </div>
                        <div class="mb-3">
                            <label for="pass2" class="col-form-label">Ingresa la contrase??a nuevamente</label>
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
                                    <a class="nav-link" href="ayuda.php">CONTACTANOS</a>
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
                                <?php echo ' <a class="nav-link" href="ayuda.php?idusu='.$_GET['idusu'].'">CONTACTANOS</a>'; ?>

                            </li>

                            <?php }?>







                        </ul>

                    </div>
                </div>
     </nav>


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
                <a href="" class="text-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop">??Necesitas ayuda?</a>
                <br>
                <br>
                <a href="" class="text-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">Importante Covid-19</a>
                <br>
                <br>
                <a href="" class="text-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">T??rminos y Condiciones</a>
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
                <p class="text-center">Copyright 2021 ?? Zapatillas</p>
            </div>
        </div>
    </div>
</footer>
<div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog-scrollable modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">??Necesitas ayuda?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body " style="text-align: justify;">
                <h6>??C??mo puedo contactarlos?</h6>Contamos con distintos canales de atenci??n, cualquier duda o consulta que tengas si??ntete libre de preguntar mediante: Nuestras redes sociales: Facebook , Instagram, Twiter, TickTok, Tumblr Correo electr??nico
                elmergm82@gmail.com N??mero de WhatsApp 67407464
                <h6>??Cu??l es el horario de atenci??n?</h6>Puedes contactarnos en cualquier momento, para recibir respuestas m??s inmediatas nuestro horario es el siguiente: 9:00 AM a 8 :00 PM de lunes a S??bado. Y domingo de 9 am hasta 2 pm
                <h6>??Este es un sitio seguro?
                </h6> Ten la confianza de que tu informaci??n est?? siendo gestionada de la manera correcta y que este sitio web tiene los certificados de seguridad SSL correspondientes.
                <h6>??C??mo realizan el servicio de despacho?</h6> Los despachos los realizamos habiendo confirmado la informaci??n de los pedidos y realizado el empaque y procediendo de despacho hasta las 9:00 AM en d??as h??biles. Para que tu producto este seguro
                tenemos tres m??todos de entrega: Pasa por nuestra tienda principal ubicado en la C. Reza # 363 casi Tumusla y te entregamos tu producto *El costo de envi?? en Cochabamba es de 10 Bs y interior 20 Bs. *Entrega Mediante Flota o transportadora
                que llegar??a al d??a siguiente *Entrega mediante las tiendas Status. * Entrega en Avion. En cualquiera de los casos llamamos por WhatsApp de manera gratuita y coordinamos en vivo tu pedido y entrega para indicarte en que situaci??n Si tienes
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
                Atendiendo a las recomendaciones de las Autoridades Nacionales tomamos algunas medidas en nuestras tiendas f??sicas y virtuales: Todos nuestros productos estas desinfectados con diferentes productos para cuidar tu salud, adem??s al momento de ingresar a
                nuestra tienda te desinfectamos desde tus pies hasta tu cabello para resguardar tu salud y la salud de tu familia. Nuestros clientes tienen la posibilidad de realizar cualquier compra, aprovechando nuestras promociones tomando en cuenta
                lo siguiente:
                <h5>ENTREGAS:</h5> Para Cochabamba la entrega debe ser en el mismo dia. Los pedidos para el interior del pa??s ser??n despachados entre 2 a 3 dias , esto debito a todav??a pasamos por un periodo de cuarentena para todo el pais.
                <h5>RECOJO EN TIENDA:</h5> Si realizaste un pedido de Recojo en tienda Status, el mismo estar?? disponible el tiempo necesario hasta que puedas buscarlo.
                <h5>CAMBIOS Y DEVOLUCIONES:</h5>Extenderemos el plazo para que puedas realizar tu solicitud (Tomando en cuenta el punto; ??Como realizo un cambio?). . Tendr??s 3 d??as a partir de la entrega de tu producto para poder realizar la solicitud de
                cambiarlo del mismo producto, de lo contrario no se podr?? realizar ning??n cambio. Nuestras sucursales permanecer??n totalmente cerradas hasta finalizar el aislamiento.
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
                <h5 class="modal-title" id="staticBackdropLabel">T??rminos y Condiciones</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body " style="text-align: justify;">
                <h6>Propiedad intelectual</h6>
                <li>El contenido que publicamos en este sitio web, ya sea texto, fotograf??as, videos, entre otros, son propiedad exclusiva de Status Zapatillas.</li> <br>
                <li> El uso de nuestra marca est?? prohibido para aquellos que no est??n autorizados por titulares.</li>
                <br>
                <li>El registro de cada Usuario se verificar?? una vez que el formulario sea completando y enviado.</li> <br>
                <h6>Contrase??a</h6> Ya una vez que el usuario est?? registrado, este acceder?? a su cuenta por medio de su correo electr??nico y su contrase??a para un acceso confidencial y seguro. <br> El Usuario asume totalmente la responsabilidad por el mantenimiento
                de la confidencialidad de su clave secreta registrada en este Sitio, la cual le permite efectuar compras, solicitar servicios y obtener informaci??n. Dicha clave es de uso personal y su entrega a terceros, no involucra responsabilidad de
                la Empresa en caso de mala utilizaci??n. </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js " integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG " crossorigin="anonymous "></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js " integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc " crossorigin="anonymous "></script>

</html>