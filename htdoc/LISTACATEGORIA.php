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
                            <li><a href="LISTACATEGORIA.php">CATEGORIA</a></li>
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
                <center><h1>LISTA DE CATEGORIA</h1> </center>
 <div class="col-md-12">
            
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
                                    <td><input type="checkbox"></td>
                                  <td>A12</td>
                                  <td>Electrodomesticos</td>
                                  <td>Microondas,Cocina</td>
                                  <td>elc.png</td>
                                  <td><button type="submit" class="btn btn-success">Modificar</button></td>
                                 
                                  <th></th>
                                </tr>
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
                   