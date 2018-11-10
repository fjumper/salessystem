<?php 
    include 'php/get.php';
    $get = new get();
    $resultT = $get->getTiendas();
    $resultC = $get->getCategorias();
?>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="content-Type" content="text/html;charset=utf-8">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-sacale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
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
                            BASE
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: rgb(255, 255, 255)" href="RegistroTienda.php">NUEVA TIENDA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: rgb(255, 255, 255)" href="RegistroProductoVenta.php">PRODUCTO
                            VENTA
                        </a>
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

    <form action="php-registrar/RegistrarProveedor.php" method="POST">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group row mt-5">
                        <div class="col-md-12">
                            <div class="card text-white bg-info mb-3">
                                <center>
                                    <h1 class="card-header">REGISTRO DE PRODUCTO VENTA</h1>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row mt-3">
                        <div class="col-md-12">
                            <div class="card text-white bg-info mb-3">
                                <center>
                                    <h4 class="card-header"> PRODUCTO UNITARIO</h4>
                                </center>
                            </div>
                        </div>
                    </div>
                    <fieldset>


                        <legend>Fecha Válida</legend>
                        <div class="form-group row">
                                <label class="col-sm-5 col-form-label">FECHA DE INICO</label>
                                <div class="col-sm-7">
                            <?php
                                    $date = date("d");
                                    $date = $date -1;
                                    if($date <= 9){
                                        $date = "0".$date;
                                    }
        
                                ?>
                                <input type="date" class="form-control" id="feiniProd" name="feiniProd" value="<?php echo date("Y-m-d");?>" >
        
                            </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-sm-5 col-form-label">FECHA FINAL</label>
                                <div class="col-sm-7">
                            <?php
                                    $date = date("d");
                                    $date = $date -1;
                                    if($date <= 9){
                                        $date = "0".$date;
                                    }
        
                                ?>
                                <input type="date" class="form-control" id="fefinProd" name="fefinProd" value="<?php echo date("Y-m-d");?>" >
        
                            </div>
                        </div>
                    </fieldset>

                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">CATEGORIA</label>
                        <div class="col-sm-7">
                            <select class="form-control" id="Categoria" name="Categoria">
                                <option value="0">Seleccione</option>
                                <?php while ($rowSub = $resultC->fetch_assoc()) { ?>
                                <option value="<?php echo $rowSub['IdCategoria']; ?>">
                                    <?php echo $rowSub['Categoria']; ?>
                                </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label"> SUB CATEGORIA</label>
                        <div class="col-sm-7">
                            <select class="form-control" id="Subcategoria" name="Subcategoria" required>
                                <option value="0" Enabled="true">Seleccione</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">PRODUCTO</label>
                        <div class="col-sm-7">
                            <select class="form-control" id="producto" name="producto" required>
                                <option value="0" Enabled="true">Seleccione</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">CÓDIGO DE BARRA</label>
                        <div class="col-sm-7">
                            <input type="text" id="codigobarrasPro" name="codigobarrasPro" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group row mt-3">
                        <div class="col-md-12">
                            <div class="card text-white bg-info mb-3">
                                <center>
                                    <h4 class="card-header">PRODUCTO EN OFERTA</h4>
                                </center>
                            </div>
                        </div>
                    </div>
                    <fieldset>
                        <legend>Fecha Válida</legend>
                        <div class="form-group row">
                                <label class="col-sm-5 col-form-label">FECHA DE INICO</label>
                                <div class="col-sm-7">
                            <?php
                                    $date = date("d");
                                    $date = $date -1;
                                    if($date <= 9){
                                        $date = "0".$date;
                                    }
        
                                ?>
                                <input type="date" class="form-control" id="feiniOfer" name="feiniOfer" value="<?php echo date("Y-m-d");?>" >
        
                            </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-sm-5 col-form-label">FECHA FINAL</label>
                                <div class="col-sm-7">
                            <?php
                                    $date = date("d");
                                    $date = $date -1;
                                    if($date <= 9){
                                        $date = "0".$date;
                                    }
        
                                ?>
                                <input type="date" class="form-control" id="fefinOfer" name="fefinOfer" value="<?php echo date("Y-m-d");?>" >
        
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <div class="form-group row">
                            <label class="col-sm-5 col-form-label">NOMBRE DE OFERTA</label>
                            <div class="col-sm-7">
                                <input type="text" id="nombre" name="nombre" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-5 col-form-label">CÓDIGO DE BARRA</label>
                            <div class="col-sm-7">
                                <input type="text" id="codigobarrasPro" name="codigobarrasPro" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-5 col-form-label">PRODUCTO</label>
                            <div class="col-sm-7">
                                <input type="text" id="nombre" name="nombre" class="form-control">
                            </div>
                        </div>

                </div>

<hr style="width:75%;">

                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">TIPO DE VENTA</label>
                        <div class="col-sm-7">
                            <select class="form-control">
                                <option>WEB</option>
                                <option selected>PRESENCIAL</option>
                                <option>MÓVIL</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">BONOS</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">PRIORIDAD</label>
                        <div class="col-sm-7">
                            <select class="form-control">
                                <option>1</option>
                                <option selected>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">PRECIO</label>
                        <div class="col-sm-7">
                            <input type="text" id="" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">UTILIDAD</label>
                        <div class="col-sm-7">
                            <input type="text" id="" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">TOTAL</label>
                        <div class="col-sm-7">
                            <input type="text" id="" class="form-control">
                        </div>
                    </div>
                    </fieldset>
                    <fieldset>
                        <legend>Tienda</legend>

                        <div class="form-group row">
                            <label class="col-sm-5 col-form-label">TIENDAS</label>
                            <div class="col-sm-7">
                                <select name="Departamento" id="Departamento" class="form-control">
                                    <option value="0">Seleccione</option>
                                    <?php while ($rowD = $resultT->fetch_assoc()) { ?>
                                    <option value="<?php echo $rowD['IdTienda']; ?>">
                                        <?php echo $rowD['NombreTienda']; ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-md-12">
                    <h1>Lista de Tiendas</h1>
                    <div class="table-response">
                        <table class="table">
                            <thead class="table table-hover">
                                <tr>
                                    <th>Id</th>
                                    <th>SELECCIONAR</th>
                                    <th>DISTRITO</th>
                                    <th>TIENDA</th>
                                    <th>REFERENCIA</th>
                                </tr>
                                <tr>
                                    <td>01</td>
                                    <td><input type="checkbox"></td>
                                    <td>El Tambo</td>
                                    <td>El Tambo, Av. Sumar</td>
                                    <td>A media cuadra de Real</td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <center><button type="submit" class="btn btn-warning">CANCELAR</button></center>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <center><button type="submit" class="btn btn-success">GUARDAR</button></center>
                        </div>
                    </div>
                    <h1>Lista de Precios</h1>
                    <div class="table-response">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Id</th>
                                    <th>CODIGO PRODUCTO</th>
                                    <th>TIPO DE VENTA</th>
                                    <th>FECHA DE INICIO</th>
                                    <th>FECHA DE FIN</th>
                                    <th>BONOS</th>
                                    <th>ACCIÓN</th>
                                </tr>
                                <tr>
                                    <td>01</td>
                                    <td>CAD23</td>
                                    <td>WEB</td>
                                    <td>02-10-2018</td>
                                    <td>20-01-2019</td>
                                    <th>100</th>
                                    <th> <button class="btn btn-success">Modificar</button></th>
                                </tr>
                                <tr>
                                    <td>02</td>
                                    <td>CAD24</td>
                                    <td>WEB</td>
                                    <td>02-10-2018</td>
                                    <td>20-01-2019</td>
                                    <th>120</th>
                                    <th> <button class="btn btn-success">Modificar</button></th>
                                </tr>
                            </thead>

                        </table>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <center><button type="submit" class="btn btn-warning">CANCELAR</button></center>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <center><button type="submit" class="btn btn-success">GUARDAR</button></center>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </form>


</body>

</html>