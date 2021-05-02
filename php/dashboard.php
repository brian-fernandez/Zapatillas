<!DOCTYPE html>
<html lang="en">
<?php
        include "../php/conexion.php";
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/dashboards.css">
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
                    <a class="active" href="#"><span class="las la-igloo"></span>
                        <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="clientes.php"><span class="las la-users"></span>
                        <span>Clientes</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-shopping-bag"></span>
                        <span>Ventas</span></a>
                </li>
                <li>
                    <a href="productos.php"><span class="las la-receipt"></span>
                        <span>Productos</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-user-circle"></span>
                        <span>Reservas</span></a>
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
                <img src="../img/WIN_20210428_15_16_22_Pro.jpg" width="45px" height="45px" alt="">
                <div>
                    <h4>Jonh Mer</h4>
                    <small> Super admin </small>
                </div>
            </div>
        </header>

        <main>
            <div class="cards">
                
                <div class="card-single">
                    <?php
                        $consulta="SELECT count(*) FROM cliente";
                        $ejecutar= $conexion->query($consulta);
                        $fila= $ejecutar->fetch_array();
                    ?>
                    <div>
                        <h1><?php echo $fila[0] ?></h1>
                        <span>Clientes</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>79</h1>
                        <span>Marcas</span>
                    </div>
                    <div>
                        <span class="las la-clipboard"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>0</h1>
                        <span>Ventas</span>
                    </div>
                    <div>
                        <span class="las la-shopping-bag"></span>
                    </div>
                </div>
                <div class="card-single">
                <?php
                        $consulta="SELECT count(*) FROM producto";
                        $ejecutar= $conexion->query($consulta);
                        $fila= $ejecutar->fetch_array();
                    ?>
                    <div>
                        <h1><?php echo $fila[0] ?></h1>
                        <span>Productos</span>
                    </div>
                    <div>
                        <span class="lab la-google-wallet"></span>
                    </div>
                </div>

            </div>

            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Productos Recientes</h3>
                            <button  onclick="location.href='productos.php'">Ver Todos <span class="las la-arrow-right"></span> </button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">

                                    <thead>
                                        <tr>
                                            <td>Nombre</td>
                                            <td>Categoria</td>
                                            <td>Marca</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $consulta="SELECT * FROM producto WHERE stock=1 ORDER BY fechaInicio DESC";
                                        $ejecutar= $conexion->query($consulta);
                                        $cont=0;
                                        while($cont<5):
                                        $fila = $ejecutar-> fetch_array();
                                        try{
                                            if($fila == null){
                                                break;
                                            }    
                                        }
                                        catch(Exception $e)
                                        {
                                            break;
                                        }
                                        if($fila['categoria']=="Unisex")
                                        {
                                            $color='green';
                                        }
                                        if($fila['categoria']=="Varon")
                                        {
                                            $color='blue';
                                        }
                                        if($fila['categoria']=="Mujer")
                                        {
                                            $color='pink';
                                        }
                                    
                                    
                                    ?>
                                        <tr>
                                            <td><?php echo $fila['nombre']; ?></td>
                                            <td>
                                                <?php echo $fila['categoria']; ?>
                                                <span class="status <?php echo $color; ?>"></span>
                                            </td>
                                            <td>
                                                <?php echo $fila['marca']; ?>
                                            </td>
                                        </tr>
                                        <?php $cont++; endwhile; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="customers">
                    <div class="card">
                        <div class="card-header">
                            <h3>Nuevos Clientes</h3>
                            <button onclick="location.href='clientes.php'">Ver todos<span class="las la-arrow-right"></span> </button>
                        </div>
                        <div class="card-body">
                            <?php
                                $consulta="SELECT * FROM cliente ORDER BY fechaInicio DESC";
                                $ejecutar= $conexion->query($consulta);
                                $cont=0;
                                while($cont<5):
                                    $fila = $ejecutar-> fetch_array();
                                    try{
                                        if($fila == null){
                                            break;
                                        }    
                                    }
                                    catch(Exception $e)
                                    {
                                        break;
                                    }
                                    
                                    
                                    
                            ?>
                            <div class="customer">
                                <div class="info">
                                    <img src="data:image/jpg;base64,<?php echo base64_encode($fila['foto']); ?>" width="40px" height="40px" alt="" />
                                    <div>
                                        <h4><?php echo $fila['nombre']; ?> <?php echo $fila['apellidoPaterno']; ?> <?php echo $fila['apellidoMaterno']; ?></h4>
                                        <small><?php echo $fila['ocupacion']; ?></small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="la la-user-circle"></span>
                                    <span class="la la-comment"></span>
                                    <span class="la la-phone"></span>
                                </div>

                            </div>
                            <?php $cont++; endwhile; ?>
                        </div>
                    </div>
                </div>
        </main>
    </div>
</body>

</html>