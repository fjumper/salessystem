<?php 
    include 'php/get.php';
    $get = new get();
    $resultSub = $get->getCategorias();
?>
<!DOCTYPE html>
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
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="nav-link" style="color: rgb(255, 255, 255)" href="RegistroProductoBase.php">PRODUCTO BASE
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: rgb(255, 255, 255)" href="RegistroTienda.php">NUEVA TIENDA
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: rgb(255, 255, 255)" href="RegistroProductoVenta.php">PRODUCTO VENTA
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: rgb(255, 255, 255)" href="RegistroClientes.php">CLIENTES</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color: rgb(255, 255, 255)" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
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
    <form role="form" name="registro" action="php-registrar/RegistrarProducto.php" method="post" enctype="multipart/form-data">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group row mt-5">
                        <div class="col-md-12">
                            <div class="card text-white bg-info mb-3">
                                <center>
                                    <h1 class="card-header">REGISTRO DE PRODUCTO BASE</h1>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">CÓDIGO DE BARRAS</label>
                        <div class="col-sm-8">
                            <input type="text" id="codigo" name="codigo" class="form-control" maxlength="13" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">PRODUCTO</label>
                        <div class="col-sm-8">
                            <input type="text" id="nombreproducto" name="nombreproducto" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">LOTE</label>
                        <div class="col-sm-8">
                            <input type="text" id="codigolote" name="codigolote" class="form-control" maxlength="10" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">CATEGORIA</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="Categoria" name="Categoria">
                                <option value="0">Seleccione</option>
                                <?php while ($rowSub = $resultSub->fetch_assoc()) { ?>
                                <option value="<?php echo $rowSub['IdCategoria']; ?>">
                                    <?php echo $rowSub['Categoria']; ?>
                                </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label"> SUB CATEGORIA</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="Subcategoria" name="Subcategoria" required>
                                <option value="0" Enabled="true">Seleccione</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">DESCRIPCIÓN</label>
                        <div class="col-sm-8">
                            <textarea id="descripcion" name="descripcion" class="form-control" required></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">PRECIO COMPRA</label>
                        <div class="col-sm-5">
                            <input type="text" id="preciocompra" name="preciocompra" class="form-control" required>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" id="moneda" name="moneda" placeholder="Soles" class="form-control" disabled>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">PESO</label>
                        <div class="col-sm-5">
                            <input type="text" id="peso" name="peso" class="form-control" required>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" id="dimensionpeso" name="dimensionpeso" placeholder="Gramos" class="form-control" disabled>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">CANTIDAD</label>
                        <div class="col-sm-8">
                            <input type="number" min="1" id="cantidad" name="cantidad" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <center><label class="col-form-label">VOLUMEN</label></center>
                        </div>
                        <div class="col-sm-4">
                            <input type="number" id="alto" name="alto" class="form-control" min="1" placeholder="Alto" required>
                        </div>
                        <div class="col-sm-4">
                            <input type="number" id="largo" name="largo" class="form-control" min="1" placeholder="Largo" required>
                        </div>
                        <div class="col-sm-4">
                            <input type="number" id="ancho" name="ancho" class="form-control" min="1" placeholder="Ancho" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label"></label>
                        <div class="col-sm-8">
                            <input type="text" id="dimensionvolumen" name="dimensionvolumen" placeholder="Centímetros" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">PERECIBLE</label>
                        <div class="col-sm-8">
                            <input type="checkbox" class="input-group mb-3" id="perecible" name="perecible">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">IMAGEN</label>
                        <div class="col-sm-8">
                            <input type="file" id="inputFile1" name="inputFile1" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">PRE-VISUALIZACIÓN</label>
                        <div class="col-sm-8">
                            <img id="img1" class="rounded mx-auto d-block" style="BorderColor:Black; BorderStyle:Solid" id="name" width="150px" height="150px">
                        </div>
                    </div>

                </div>
                <div class="col-md-12 mt-3">
                    <div class="form-group row d-flex justify-content-around flex-wrap">
                        <button type="submit" class="btn btn-outline-success mt-2"><i class="far fa-save"></i>GUARDAR</button>
                        <button type="reset" class="btn btn-outline-warning mt-2">LIMPIAR</button>
                    </div>
                </div>

            </div>
        </div>
    </form>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/mostrarimagen.js"></script>
    <script>
        $(function () {
            $('#Categoria').change(function (e) {
                e.preventDefault();
                $("#Categoria").each(function () {
                    IdCategoria = $(this).val();
                    $.post("php/getSubCategorias.php", {
                        IdCategoria: IdCategoria
                    }, function (data) {
                        $("#Subcategoria").html(data);
                    });
                });
            });
        });
    </script>
</body>

</html>