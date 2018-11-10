<?php

    include 'php/get.php';
    $get = new get();
    $resultD = $get->getDepartamentos();
    
?>

<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="content-Type" content="text/html;charset=utf-8">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-sacale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel=Stylesheet href="css/estilos.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div id="contenedoor">
        <header>
            <div id="titulo">
                <div id="logo">
                </div>
                <div id="h1"> HIPERMERCADOS </div>
                <div id="h2">Donde comprar es muy fácil</div>
                <H2></H2>
                <div style="clear:both;"></div>
            </div>
            <nav>
                <ul>
                    <ul>
                        <li><a href="productos.php">PRODUCTOS</a></li>
                        <li><a href="Clientes.php">CLIENTES</a></li>
                        <li><a href="ListaPrecios.php">PRODUCTO A VENDER</a></li>
                        <li><a href="categoria.php">CATEGORIA</a></li>
                        <li><a href="usuario.php">USUARIO</a></li>
                        <li><a href="RegistroProveedores.php">PROVEEDOR</a></li>
                        <li><a href="registrotienda.php">TIENDA</a></li>
                    </ul>
                </ul>
            </nav>
        </header>
        <form action="php-registrar/RegistrarProveedor.php" method="POST">
            <div class="container">
                <div class="row">
                    <h1>REGISTRO DE PROVEEDORES</h1><br /><br />

                    <div class="col-md-6">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>EMPRESA </label>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="form-group">
                                <input type="text" id="RazonSocial" name="RazonSocial" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>RUC</label>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <input type="text" id="RUC" name="RUC" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>PROVEEDOR DE </label>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <input type="text" id="Categoria" name="Categoria" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>CELULAR</label>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <input type="text" id="Celular" name="Celular" class="form-control" maxlength="9">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>CUENTA BANCARIA</label>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <a href="cuentasproveedor.php"  class="btn btn-info">AGREGAR</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>E-MAIL</label>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <input type="text" id="Email" name="Email" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>DIRECCIÓN</label>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <input type="text" id="Direccion" name="Direccion" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>DEPARTAMENTO</label>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <select name="Departamento" id="Departamento" class="form-control">
                                    <option value="0">Seleccione</option>
                                    <?php while ($rowD = $resultD->fetch_assoc()) { ?>
                                    <option value="<?php echo $rowD['IdDepartamento']; ?>">
                                        <?php echo $rowD['Departamento']; ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>PROVINCIA</label>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <select name="Provincia" id="Provincia" class="form-control">
                                    <option value="0" Enabled="true">Seleccione</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>DISTRITO</label>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <select name="Distrito" id="Distrito" class="form-control">
                                    <option value="0" Enabled="true">Seleccione</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">

                        <div class="col-md-6">
                            <div class="form-group">
                                <center><button type="submit" class="btn btn-success">GUARDAR</button></center>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <button type="button" class="btn btn-warning">CANCELAR</button>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="row">
                    <div class="col-md-12">
                        <CENTER>
                            <h1>RELACIÓN DE PROVEEDORES</h1>
                        </CENTER>
                        <div class="col-md-6">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>BUSCAR</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-response">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>EMPRESA</th>
                                        <th>RUC</th>
                                        <th>TIPO DE PROVEEDOR</th>
                                        <th>CELULAR</th>
                                        <th>EMAIL</th>
                                        <th>DIRECCION</th>
                                        <th>ACCION</th>
                                    </tr>
                                    <TR>
                                        <th>01</th>
                                        <th>Rosales.SAC</th>
                                        <th>75768696875</th>
                                        <th>Muebles</th>
                                        <th>934756835</th>
                                        <th>rosales@gmail.com</th>
                                        <th>Av.Mariategui N°134</th>
                                        <th><input type="checkbox"></th>

                                    </TR>
                            </table>
                            <center><button class="btn btn-warning">CANCELAR</button></center>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
    <script src="bootstrap/js/jquery-3.3.1.min.js"></script>
    <script>
        $(function () {
            $('#Departamento').change(function (e) {
                e.preventDefault();
                $("#Departamento").each(function () {
                    IdDepartamento = $(this).val();

                    $('#Distrito').find('option').remove().end().append(
                        '<option value="0">Seleccione</option>');
                    $.post("php/getProvincias.php", {
                        IdDepartamento: IdDepartamento
                    }, function (data) {
                        $("#Provincia").html(data);
                    });
                });
            });
        });

        $(function () {
            $('#Provincia').change(function (e) {
                e.preventDefault();
                $("#Provincia").each(function () {
                    IdProvincia = $(this).val();
                    $.post("php/getDistritos.php", {
                        IdProvincia: IdProvincia
                    }, function (data) {
                        $("#Distrito").html(data);
                    });
                });
            });
        });
    </script>
</body>

</html>