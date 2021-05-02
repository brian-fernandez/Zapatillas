<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/dashboards.css">
    <link rel="stylesheet" href="../css/pop.css">
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
                    <a href="dashboard.php"><span class="las la-igloo"></span>
                        <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="clientes.php"><span class="las la-users"></span>
                        <span>Clientes</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-shopping-bag"></span>
                        <span>Reservas Entregadas</span></a>
                </li>
                <li>
                    <a class="active" href="#"><span class="las la-receipt"></span>
                        <span>Productos</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-user-circle"></span>
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
                <img src="../img/WIN_20210428_15_16_22_Pro.jpg" width="45px" height="45px" alt="">
                <div>
                    <h4>Jonh Mer</h4>
                    <small> Super admin </small>
                    <a href="../index.php">Salir</a>
                </div>
            </div>
        </header>
        <main>
        <button onclick="popupToggle();">Agregar Nuevo Producto  <span class="las la-arrow-right"></span> </button>
            <div class="table-responsive">
                <table width="100%">

                    <thead>
                        <tr>
                            <td>Imagen</td>
                            <td>Nombre</td>
                            <td>Categoria</td>
                            <td>Marca</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "../php/conexion.php";
                        $consulta = "SELECT * FROM producto WHERE stock=1 ORDER BY fechaInicio DESC";
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


                        ?>
                            <tr>
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
                                    <button onclick="popupToggle2();">Editar</button>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
    <!--POP UPS-->
    <div class="popup" id="popup">
            <div class="content-p">
                AGREGAR
            </div>
            
            <a href="#" class="close" onclick="popupToggle();"><img src="../img/close.png" alt=""></a>
        </div>
        <div class="popup" id="popup2">
            <div class="content-p">
                EDITAR
            </div>
            
            <a href="#" class="close" onclick="popupToggle2();"><img src="../img/close.png" alt=""></a>
        </div>
        



        <!--END POP UPS-->>
<script>
    function popupToggle(){
    let popup =document.getElementById('popup');
    popup.classList.toggle('acti')
    }
    function popupToggle2(){
    let popup =document.getElementById('popup2');
    popup.classList.toggle('acti')
    }
</script>
</body>

</html>