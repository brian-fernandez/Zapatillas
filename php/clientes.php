<!DOCTYPE html>
<html lang="en">

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
            <h2> <span class="lab la-accusoft"></span> <span> Dino Sport</span> </h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="dashboard.php"><span class="las la-igloo"></span>
                        <span>Dashboard</span></a>
                </li>
                <li>
                    <a class="active" href="#"><span class="las la-users"></span>
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
            <div class="card-body">
                
                <?php
                include "../php/conexion.php";
                $consulta = "SELECT * FROM cliente ORDER BY fechaInicio DESC";
                $ejecutar = $conexion->query($consulta);
                while ($fila = $ejecutar->fetch_array()) :

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
                <?php endwhile; ?>
            </div>
        </main>
    </div>
    
</body>

</html>