<?php ?>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="content-Type" content="text/html;charset=utf-8">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-sacale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel=Stylesheet href="css/estilos.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/categoria.js"></script>
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
                        <li>
                            <a href="productos.php">PRODUCTOS</a>
                        </li>
                        <li>
                            <a href="Clientes.php">CLIENTES</a>
                        </li>
                        <li>
                            <a href="ListaPrecios.php">PRODUCTO A VENDER</a>
                        </li>
                        <li>
                            <a href="categoria.php">CATEGORIA</a>
                        </li>
                        <li>
                            <a href="usuario.php">USUARIO</a>
                        </li>
                        <li>
                            <a href="RegistroProveedores.php">PROVEEDOR</a>
                        </li>
                        <li>
                            <a href="registrotienda.php">TIENDA</a>
                        </li>
                    </ul>
                </ul>
            </nav>
            <div style="clear:both;"></div>
        </header>
        <div style="clear:both;"></div>
        <div class="container">
            <div class="row">
                <form role="form" name="registro" action="php-registrar/RegistrarCategoria.php" method="post">
                    <center>
                        <h1>REGISTRO DE CATEGORIA</h1>
                    </center>
                    <br/>
                    <br/>
                    <div class="col-md-12">
                        <center>

                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>NOMBRE CATEGORIA</label>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="text" id="nombrecategoria" class="form-control" name="nombrecategoria">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>DESCRIPCIÓN DEL PRODUCTO</label>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="descripcioncategoria" name="descripcioncategoria">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <button type="submit" id="btnguardar" name="btnguardar" class="btn btn-success">GUARDAR</button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <button type="button" class="btn btn-info">CANCELAR</button>
                                </div>
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <CENTER>
                                <h1>LISTA DE CATEGORIAS</h1>
                            </CENTER>
                            <div class="col-md-1">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>BUSCAR</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <button type="button" class="btn btn-info" id="buscar" nombre="buscar">BUSCAR</button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="table-response">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th></th>
                                    <th>IdCategoria</th>
                                    <th>Nombre Categoria</th>
                                    <th>Descripción</th>
                                    <th>Imagen</th>

                                    <th>ACCIÓN</th>
                                </tr>
                                <thead class="thead-dark">
                                    <tr>

                                    </tr>
                                </thead>

                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>