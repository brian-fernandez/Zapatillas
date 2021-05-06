<!DOCTYPE html>
<html lang="en">
<?php
        include "../php/conexion.php";

            $idadmin = $_GET['idusu'];


        $consulta = "SELECT * from admin where ci = $idadmin";
        $ejecutar= $conexion->query($consulta);
        $filadmin = $ejecutar->fetch_array();




?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/dashboards.css">
    <link rel="stylesheet" href="../css/pop.css">
    <link rel="stylesheet" href="../css/responsive.css">
    
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>

<body>
    <input type="checkbox" id="nav-toggle">

    <div class="sidebar">
        <div class="sidebar-brand">
            <h2> <span class="lab la-accusoft"></span> <span>Dino Sport</span> </h2>
        </div>
        <div class="sidebar-menu">
        <ul>
                <li>
                    <a class="active" href="dashboard.php?idusu=<?php echo $filadmin[0] ?>"><span class="las la-igloo"></span>
                        <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="clientes.php?idusu=<?php echo $filadmin[0] ?>"><span class="las la-users"></span>
                        <span>Clientes</span></a>
                </li>
                <li>
                    <a href="entregadas.php?idusu=<?php echo $filadmin[0] ?>"><span class="las la-shopping-bag"></span>
                        <span>Reservas Entregadas</span></a>
                </li>
                <li>
                    <a href="productos.php?idusu=<?php echo $filadmin[0] ?>"><span class="las la-receipt"></span>
                    <span>Productos</span></a>
                </li>
                <li>
                    <a href="pendientes.php?idusu=<?php echo $filadmin[0] ?>"><span class="las la-user-circle"></span>
                        <span>Reservas Pendientes</span></a>
                </li>
               
            </ul>
        </div>



    </div>
    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>
                Dashboard
            </h2>
            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Buscar" />
            </div>
            <div class="user-wrapper">
            <img src="data:image/jpg;base64,<?php echo base64_encode($filadmin[6]); ?>" width="45px" height="45px" alt="">
                <div>
                <h4><?php echo $filadmin[1] ?></h4>
                    <small> <?php echo $filadmin[4]?> </small>
                    <a href="../index.php">Salir</a>
                </div>
            </div>
        </header>
        <main>
            <button onclick="popupToggle();">Agregar Nuevo Producto <span class="las la-arrow-right"></span> </button>
            <br> <br>
            <div class="table-responsive">
                <table width="100%">

                    <thead>
                        <tr>
                            <td>FILA</td>
                            <td>Imagen</td>
                            <td>Nombre</td>
                            <td>Categoria</td>
                            <td>Marca</td>
                            <td>precio</td>
                            <td>cantidad</td>
                            <td>stock</td>
                            <td>Opción</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "../php/conexion.php";
                        $consulta = "SELECT * FROM producto ORDER BY fechaInicio DESC";
                        $ejecutar = $conexion->query($consulta);

                        while ($fila = $ejecutar->fetch_array()) :


                            if ($fila['categoria'] == "Unisex") {
                                $color = 'green';
                            }
                            if ($fila['categoria'] == "Varon") {
                                $color = 'blue';
                            }
                            if ($fila['categoria'] == "Mujer") {
                                $color = 'pink';
                            }
                            if ($fila['stock'] == 1) {
                                $colorback = 'lightgreen';
                            } else {
                                $colorback = 'red';
                            }

                        ?>
                            <tr>
                            <td><?php echo $fila['id']; ?></td>
                                <td><img src="data:image/jpg;base64,<?php echo base64_encode($fila['foto']); ?>" width="90px" height="90px" alt="" /></td>
                                <td><?php echo $fila['nombre']; ?></td>
                                <td>
                                    <?php echo $fila['categoria']; ?>
                                    <span class="status <?php echo $color; ?>"></span>
                                </td>
                                <td>
                                    <?php echo $fila['marca']; ?>
                                </td>
                                <td>
                                    <?php echo $fila['precio']; ?>
                                </td>
                                <td>
                                    <?php echo $fila['cantidad']; ?>
                                </td>
                                <td class="st <?php echo $colorback; ?>">
                                    <?php
                                    if ($fila['stock'] == '1') {
                                        echo 'SI';
                                    } else {
                                        echo 'NO';
                                    }
                                    ?>
                                </td>
                                <td>
                                    <button onclick="popupToggle2(
                                            '<?php echo $fila['id']; ?>',
                                            '<?php echo $fila['nombre']; ?>',
                                            '<?php echo $fila['marca']; ?>',
                                            '<?php echo $fila['precio']; ?>',
                                            '<?php echo $fila['stock']; ?>',
                                            '<?php echo $fila['cantidad']; ?>'
                                            );">Editar</button>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
    <!--POP UPS-->
    <!--IF-->
    <?php
        if(isset($_REQUEST['guardar'])){
            if(isset($_FILES['prfoto']['name'])){
                $nombre=$_POST['prnombre'];
                $marca=$_POST['prmarca'];
                $precio=$_POST['prprecio'];
                $stock=1;
                $fecha='2021-05-05';
                $cantidad=$_POST['prcantidad'];
                $nombreArchivo=$_FILES['prfoto']['name'];
                $tamañoArchivo=$_FILES['prfoto']['size'];
                $imagenSubida= fopen($_FILES['prfoto']['tmp_name'],'r');
                $binariosImagen=fread($imagenSubida,$tamañoArchivo);
                $categoria=$_POST['prcategoria'];;
                include_once "conexion.php";
                $binariosImagen=mysqli_escape_string($conexion,$binariosImagen);
                $query="INSERT INTO producto (nombre,marca,precio,stock,cantidad,foto,fechaInicio,categoria) 
                VALUES ('$nombre','$marca','$precio','$stock','$cantidad','".$binariosImagen."','$fecha','$categoria')";
                
                $res = mysqli_query($conexion, $query);
                if ($res) {
    ?>
    
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        Registro insertado exitosamente
                    </div>
                <?php
                } else {
                ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        Error <?php echo mysqli_error($conexion); ?>
                    </div>
        <?php

                }
            }
        }
        
    ?>
    <!--IF-->


    <div class="popup" id="popup">
        <div class="content-p">
        <div class="cod-container">
                <div class="form-header">

                </div>
                <div class="form-content">
                    <form method="POST" action=""class="cod-form" enctype="multipart/form-data">
                        <div class="form-title">
                            <h3>Agregar Producto</h3>
                        </div>
                        <div class="input-group">
                            <label class="label active" for="nombreProductoPop2">Nombre</label>
                            <input type="text" name="prnombre" class="form-input" id="nombreProductoPop2">
                        </div>
                        <div class="input-group">
                            <label class="label active" for="marcaProductoPop2">Marca</label>
                            <input type="text" name="prmarca" class="form-input" id="marcaProductoPop2">
                        </div>
                        <div class="input-group">
                            <label class="label active" for="precioProductoPop2">Precio</label>
                            <input type="text" name="prprecio" class="form-input" id="precioProductoPop2">
                        </div>
                        
                        <div class="input-group">
                            <label class="label active" for="cantidadProductoPop2">Cantidad</label>
                            <select name="prcantidad" id="cantidadProductoPop2">
                                <option disabled>Numero pares disponible</option>
                                
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                                <option>13</option>
                                <option>14</option>
                                <option>15</option>
                                <option>16</option>
                                <option>17</option>
                                <option>18</option>
                                <option>19</option>
                                <option>20</option>
                                <option>21</option>
                                <option>22</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <label for="imagenProductoPop2">Imagen Producto</label>
                            <input type="file" name="prfoto" id="imagenProductoPop2" class="form-input">
                        </div>
                        <div class="input-group">
                            <label class="label active" for="categoriaProductoPop2">Categoria</label>
                            <select name="prcategoria" id="categoriaProductoPop2">
                                <option disabled>Categoria</option>
                                <option>Unisex</option>
                                <option>Varon</option>
                                <option>Mujer</option>

                            </select>
                        </div>
                    
                        <button class="input" type="submit" name="guardar">GUARDAR </button>

                    </form>


                </div>
            </div>
        </div>
        <a href="#" class="close" onclick="popupToggle();"><img src="../img/close.png" alt=""></a>
    </div>


<!--IF................................................................................................................-->
<?php
        if(isset($_REQUEST['editar'])){
            
                $nombre=$_POST['ednombre'];
                $marca=$_POST['edmarca'];
                $precio=$_POST['edprecio'];
                $stock=$_POST['st'];
                $cantidad=$_POST['ca'];
                $categoria=$_POST['edcategoria'];
                $id=$_POST['idp'];
                include_once "conexion.php";
                $query="UPDATE producto SET  nombre='$nombre',marca='$marca',precio='$precio',stock='$stock',cantidad='$cantidad',
                categoria='$categoria' WHERE id=$id " ;
                
                
                
               
            
                $res = mysqli_query($conexion, $query);
                if ($res) {
    ?>
    
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        
                    </div>
                <?php
                } else {
                ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        Error <?php echo mysqli_error($conexion); ?>
                    </div>
        <?php

                }
            
        }
        
    ?>
    <!--IF-->

    <div class="popup" id="popup2">
        <div class="content-p">
            <div class="cod-container">
                <div class="form-header">

                </div>
                <div class="form-content">
                    <form method="post" class="cod-form">
                        <div class="form-title">
                            <h3>Editar Producto</h3>
                        </div>
                        <label for="idProductoPop" ></label>
                        <input type="text" id="idProductoPop" name="idp" > vacio</input>
                        <div class="input-group">
                            <label class="label  active " for="nombreProductoPop">Nombre</label>
                            <input type="text" class="form-input" name="ednombre" id="nombreProductoPop">
                        </div>
                        <div class="input-group">
                            <label class="label  active " for="marcaProductoPop">Marca</label>
                            <input type="text" class="form-input" name="edmarca" id="marcaProductoPop">
                        </div>
                        <div class="input-group">
                            <label class="label  active" for="precioProductoPop">Precio</label>
                            <input type="text" class="form-input" name="edprecio" id="precioProductoPop">
                        </div>
                        <div class="input-group">
                            <label class="label active " for="stockProductoPop">Disponible</label> <br>
                            <input type="button" class="form-input" id="stockProductoPop" name="edstock" onclick="cambiar();" value="vacio">
                        </div>
                        <div class="input-group">
                        <input hidden type="text" id="cantidadProductoPoplb"></input>
                            <label class="label active " for="cantidadProductoPop">Cantidad</label> <br>
                            <select name="edcantidad" id="cantidadProductoPop">
                                <option disabled>Numero pares disponible</option>
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                                <option>13</option>
                                <option>14</option>
                                <option>15</option>
                                <option>16</option>
                                <option>17</option>
                                <option>18</option>
                                <option>19</option>
                                <option>20</option>
                                <option>21</option>
                                <option>22</option>
                            </select>
                            <input type="text" style="display: none;" name="ca" id="ca">
                            <input type="text"  name="st" id="st">

                        </div>
                        <div class="input-group">
                            <label class="label  active" for="categoriaProductoPop">Categoria</label> <br>
                            <select name="edcategoria" id="categoriaProductoPop">
                                <option disabled>Categoria</option>
                                <option>Unisex</option>
                                <option>Varon</option>
                                <option>Mujer</option>

                            </select>
                        </div>
                        <div class="input-group">
                            <input type="radio" id="radioAceptar" required class="form-input">
                            <label for="radioAceptar">Acepto cambiar los datos del producto</label>
                        </div>
                        
                       

                        <input type="submit" name="editar" value="EDITAR">

                    </form>


                </div>
            </div>
        </div>

        <a href="#" class="close" onclick="popupToggle2();"><img src="../img/close.png" alt=""></a>
    </div>




    <!--END POP UPS-->
    <script src="../js/pops.js"></script>
</body>

</html>