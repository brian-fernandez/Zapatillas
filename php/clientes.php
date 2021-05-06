<?php
        include "../php/conexion.php";

            $idadmin = $_GET['idusu'];


        $consulta = "SELECT * from admin where ci = $idadmin";
        $ejecutar= $conexion->query($consulta);
        $filadmin = $ejecutar->fetch_array();




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/clientes.css">
    <link rel="stylesheet" href="../css/responsive.css">
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
            <div class="card-body">
                
                <?php
                include "../php/conexion.php";
                $consulta = "SELECT * FROM cliente ORDER BY fechaInicio DESC";
                $ejecutar = $conexion->query($consulta);
                while ($fila = $ejecutar->fetch_array()) :

                ?>
                    <div class="customer">
                        <div class="info">
                            <img src="data:image/jpg;base64,<?php echo base64_encode($fila['foto']); ?>" width="75px" height="75px" alt="" />
                            <div>
                                <h4><?php echo $fila['nombre']; ?> <?php echo $fila['apellidoPaterno']; ?> <?php echo $fila['apellidoMaterno']; ?></h4>
                                <small><?php echo $fila['ocupacion']; ?></small>
                            </div>
                        </div>
                        <div class="contact">
                        <a target="_blank" href="../enlaces/perfil.php?idusu=<?php echo $fila['ci'] ?>&con=1">  <span class="la la-user-circle"></span></a>
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