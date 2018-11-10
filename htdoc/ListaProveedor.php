<?php ?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
    <meta http-equiv="content-Type" content="text/html;charset=utf-8">
    <title>Page Title</title>
    <meta name="viewport"content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-sacale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel=Stylesheet href="css/estilos.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script src = "bootstrap/js/categoria.js" ></script>
    </head>
   
   <body>
   <div id="contenedor">
           <header>
               <div id="titulo">
                   <div id="logo">
                   </div>
                   <div id="h1"> HIPERMERCADOS </div>
                   <div id="h2">Donde comprar es muy fácil</div>
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
               <div style="clear:both;"></div>   
           </header>
           <div style="clear:both;"></div>
        <div class="container">
          <div class="row">
                <center><h1>LISTA DE PROVEEDORES</h1> </center>
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
                          <thead class="thead-dark">
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
                        </thead>
                       
                      </table>
                </div>
                <div class="col-md-6">
                        <div class="form-group">  
                            
                            <center><button type="submit" class="btn btn-success">GUARDAR</button></center>
                        </div>
                </div>
                <div class="col-md-6">
                        <div class="form-group">  
                                <center><button type="submit" class="btn btn-warning">CANCELAR</button></center>
                        </div>
                </div>

             </div>




          </div>
        </div>
    </div>
</body>
</html>
                   