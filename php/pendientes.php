<?php include '../clases/reserva.php'; ?>
<!DOCTYPE html>

<?php
        include "../php/conexion.php";

            $idadmin = $_GET['idusu'];


        $consulta = "SELECT * from admin where ci = $idadmin";
        $ejecutar= $conexion->query($consulta);
        $filadmin = $ejecutar->fetch_array();




?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/dashboards.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <title>Pendientes</title>
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
            <div class="table-responsive">
                <table style="border: 3px solid #22a2eb;" width="100%">

                    <thead>
                        <tr>
                            <td>Imagen</td>
                            <td>Nombre Cliente</td>
                            <td>Apellido Cliente</td>
                            <td>Nombre Producto</td>
                            <td>Cantidad</td>
                            <td>Fecha de recojo</td>
                            <td>Costo</td>
                            <td>Estado</td>
                            <td>Opción</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include "../php/conexion.php";
                            
                            $consulta = "SELECT c.foto,c.nombre,c.apellidoPaterno,p.nombre,r.cantidad,r.fechaRecojo, r.costo, r.estado, r.comentario, r.idReserva FROM reserva r 
                            JOIN producto p ON (r.idProducto =p.id)
                            JOIN cliente c ON(c.ci=r.idCliente) 
                            WHERE r.estado='Pendiente'
                            ORDER BY r.fechaRecojo DESC";
                            $ejecutar = $conexion->query($consulta);
                            while ($fila = $ejecutar->fetch_array()) :

                                if($fila[8]==null)
                                {
                                    $fila[8]="Ninguno";
                                }
                                $reserva1= new reserva();
                            $reserva1->setid($fila[9]);
                        ?>
                            <tr>
                                <td><img src="data:image/jpg;base64,<?php echo base64_encode($fila[0]); ?>" width="90px" height="90px" alt="" /></td>
                                <td><?php echo $fila[1]; ?></td>
                                <td>
                                    <?php echo $fila[2]; ?>

                                </td>
                                <td>
                                    <?php echo $fila[3]; ?>
                                </td>
                                <td>
                                    <?php echo $fila[4]; ?>
                                </td>
                                <td>
                                    <?php echo $fila[5]; ?>
                                </td>
                                <td>
                                    <?php echo $fila[6]; ?>
                                </td>
                                <td style="background-color:#ff2f2fd6;">
                                    <?php echo $fila[7]; ?>
                                </td>
                                <td>
                                    
                                    <form action="" method="POST">
                                        <input style="background-color: #38bd55; color: white;padding:10px; border:none;color:black" type="submit" name='atender' value="Atender">
                                        
                                    </form>
                                    <?php
                                        
                                        if(isset($_POST['atender']))
                                        {
                                            
                                            $reserva1->atenderReserva();
                                            break;
                                            
                                            
                                        }
                                    ?>
                                </td>
                                
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </main>

    </div>
</body>

</html>