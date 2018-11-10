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
    <link rel="stylesheet" href="php/style_imagen.css">
    <link rel="stylesheet" href="php/style_imagen.css">
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
        <div class="col-md-12">
                <h1>Registro de Clientes</h1>
                <br>
        </div>
        <div class="col-md-6">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>CÓDIGO</label> 
                </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">  
                        <input type="text" id="idProducto" class="form-control" disabled>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>TIPO DE CLIENTE</label> 
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <select class="form-control">
                            <option>NATURAL</option>
                            <option selected>JURIDICO</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>EMPRESA</label>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <input type="text" id="producto" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>APELLIDO PATERNO</label>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>APELLIDO MATERNO</label> 
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <input type="text" id="" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>TIPO DOCUMENTO</label> 
                    </div>
                </div>
                <div class="col-md-13">
                    <div class="col-md-3"> 
                    <div class="form-group">
                        <select class="form-control">
                            <option>DNI</option>
                            <option selected>RUC</option>
                        </select>
                    </div>
                    </div>
                    <div class="col-md-5"> 
                        <div class="form-group">
                        <input type="text" id="" class="form-control" maxlength="11">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>TIPO CLIENTE</label> 
                    </div>
                </div>
                <div class="col-md-13">
                    <div class="col-md-3"> 
                    <div class="form-group">
                        <select class="form-control">
                            <option>1</option>
                            <option selected>2</option>
                            <option>3</option>
                        </select>
                    </div>
                    </div>
                    <div class="col-md-5"> 
                        <div class="form-group">
                        <input type="text" id="" class="form-control" maxlength="11">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>GÉNERO</label> 
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <select class="form-control">
                            <option>MASCULINO</option>
                            <option selected>FEMENINO</option>
                            <option>OTRO</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>FECHA NACIMIENTO</label> 
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <input type="date" id="" class="form-control" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>E-MAIL</label> 
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <input type="text" id="" class="form-control" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>ESTADO CIVIL</label> 
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <select class="form-control">
                            <option>CASADO</option>
                            <option selected>SOLTERO</option>
                            <option>VIUDO</option>
                            <option selected>CONVIVIENTE</option>
                            <option>DIVORCIADO</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>COD. VERIFICACION</label> 
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <input type="text" id="" class="form-control" >
                    </div>
                </div>
                
        </div>    
        <div class="col-md-6">
                <div class="col-md-5">
                        <div class="form-group">
                            <label>BONOS ACUMULADOS</label> 
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group">
                            <input type="text" id="" class="form-control" DISABLED>
                        </div>
                    </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label>PASSWORD</label> 
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form-group">
                        <input type="password" id="" class="form-control" >
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label>CONFIRMA PASSWORD</label> 
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form-group">
                        <input type="password" id="" class="form-control" >
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label>DIRECCION FACTURACION</label> 
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form-group">
                        <input type="text" id="" class="form-control" >
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label>DIRECCION ENTREGA</label> 
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form-group">
                        <input type="text" id="" class="form-control" >
                    </div>
                </div>
                <h3>Seleccionar dirección: </h3>
                <div class="col-md-7">
                    <div class="form-group">
                        <div id="map" style="width:500px;height:300px;"></div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" id="Longitud" class="form-control" disabled>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" id="Latitud" class="form-control" disabled>
                    </div>
                </div>
        </div>      
        </div>
        <div div class="row">
        <div class="col-md-12">
            <h1>LISTA DE CLIENTES</h1>
                <div class="table-response">
                        <table class="table">
                        <thead class="table table-hover">
                          <tr>
                            <th>Id</th>
                            <th>TIPO CLIENTE</th>
                            <th>NOMBRE</th>
                            <th>APELLIDO PATERNO</th>
                            <th>APELLIDO MATERNO</th>
                            <th>TIPO DOCUMNTO</th>
                            <th>N° DOCUMENTO</th>
                            <th>DIRECCION ENTREGA</th>
                            <th>DIRECCION FACTURACION</th>
                          </tr>
                          <tr>
                            <td>01</td>
                            <td>NATURAL</td>
                            <td>NOEMI</td>
                            <td>ATAUCUSI</td>
                            <td>MATENCIO</td>
                            <td>DNI</td>
                            <td>70304554</td>
                            <td>Av. San Carlos N° 123</td>
                            <td>Av. San Antonio N° 345</td>
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
        </div>
        <script src="js/maps.js"></script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7gh0RuOd-hx-NEDxkAx_usEqlUqw1afE&callback=initMap"></script>
   </body>
</html>