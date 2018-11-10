<?php ?>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="content-Type" content="text/html;charset=utf-8">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-sacale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <script src="bootstrap/js/categoria.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css"/>
    <script type="text/javascript" src="js/funciones.js"></script>
</head>

<body>
    <header>
        <div style="background-color: rgb(225,225,225)">
            <h1 style="color: rgb(22,157,178); text-align:center; padding-top:10px; font-size:65px"><strong>HIPERMERCADOS</strong></h1>
            <h5 style="color: rgb(95,95,95); text-align:center; margin-left:180px; padding-bottom:10px; font-size:22px"><i>Donde
                    comprar es muy fácil</i></h5>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(22,157,178)">
            <a class="navbar-brand" style="color: rgb(255, 255, 255)" href="index.php">MAESTROS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" style="color: rgb(255, 255, 255)" href="RegistroCategoria.php">CATEGORIA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: rgb(255, 255, 255)" href="RegistroProveedor.php">PROVEEDOR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: rgb(255, 255, 255)" href="RegistroEmpleado.php">EMPLEADOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: rgb(255, 255, 255)" href="RegistroProductoBase.php">PRODUCTO
                            BASE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: rgb(255, 255, 255)" href="RegistroTienda.php">NUEVA TIENDA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: rgb(255, 255, 255)" href="RegistroProductoVenta.php">PRODUCTO
                            VENTA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: rgb(255, 255, 255)" href="RegistroClientes.php">CLIENTES</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color: rgb(255, 255, 255)" href="#" id="navbarDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            REPORTES
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <form role="form" name="registro" action="php-registrar/RegistrarCategoria.php" method="post">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group row mt-5">
                        <div class="col-md-12">
                            <div class="card text-white bg-info mb-3">
                                <center>
                                    <h1 class="card-header">REGISTRO DE CATEGORIA</h1>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">CATEGORIA</label>
                        <div class="col-sm-7">
                            <input type="text" id="nombrecategoria" class="form-control" name="nombrecategoria">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">DESCRIPCIÓN</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="descripcioncategoria" name="descripcioncategoria">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-3">
                    <div class="form-group row d-flex justify-content-around flex-wrap">
                        <button type="submit" class="btn btn-outline-success mt-2" class="btn btn-success">GUARDAR</button>
                        <button type="button" class="btn btn-outline-warning mt-2">CANCELAR</button>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group row mt-5">
                        <div class="col-md-12">
                            <div class="card text-white bg-info mb-3">
                                <center>
                                    <h2 class="card-header">LISTA DE CATEGORIAS</h2>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group row">
                        <Label class="col-sm-3 col-form-label">BUSCAR CATEGORIA</Label>
                        <div class="col-sm-6">
                            <input type="text" id="buscarcategoria" name="buscarcategoria" class="form-control">
                        </div>
                        <div class="col-sm-3">
                            <button ID="btnbuscar" class="btn btn-outline-info">BUSCAR</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="table-response">
                        <table class="table">
 
               <table class="table table-bordered">
               <tr>
               <td>Código</td>
               <td>Nombre </td>
               <td>Descripcion</td>
               </tr>

                       <?php  
                           $conexion=mysqli_connect("localhost","root","","dbventas");
                           ?>
                           <?php
                            $sql= "SELECT * FROM categorias"; 
                            $result=mysqli_query($conexion,$sql);
                            while($mostrar=mysqli_fetch_array($result)){
                             ?>
                             <tr>
                               <td><?php echo $mostrar['IdCategoria']?></td> 
                               <td><?php echo $mostrar['Categoria']?></td>
                               <td><?php echo $mostrar['Descripcion']?></td> 
                               </tr>
                            <?php
                            }
                            ?>  
                       </tr>
                           </table> 
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>