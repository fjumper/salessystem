<?php ?>
<html>
    <head>
    <meta charset="utf-8" />
    <meta http-equiv="content-Type" content="text/html;charset=utf-8">
    <title>Page Title</title>
    <meta name="viewport"content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-sacale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel=Stylesheet href="css/estilos.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
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
                <h1>Producto a Vender</h1>
                <br>
        </div>
        <div class="col-md-6">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>PRODUCTO</label> 
                </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">  
                        <input type="text" id="idProducto" class="form-control" disabled>
                </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">  
                        <button type="submit" class="btn btn-info">PRODUCTO</button>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" id="producto" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>NOMBRE DE OFERTA</label> 
                </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <input type="text" class="form-control">
                </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>TIPO DE VENTA</label>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <select class="form-control">
                            <option>WEB</option>
                            <option selected>PRESENCIAL</option>
                            <option>MÓVIL</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>BONOS</label>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>PRIORIDAD</label>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
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
        <fieldset>
                <legend>Fecha Válida</legend>
        <div class="col-md-4">
                    <div class="form-group">
                        <label>FECHA DE INICIO </label> 
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <input type="date" id="" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>FECHA DE FIN</label> 
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <input type="date" id="" class="form-control">
                    </div>
                </div>
            </fieldset> 
            <fieldset>
                <legend>Precio</legend>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>PRECIO</label> 
                    </div>
                    </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <input type="text" id="" class="form-control">
                    </div>
                </div> 
                <div class="col-md-4">
                    <div class="form-group">
                        <label>UTILIDAD</label> 
                    </div>
                    </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <input type="text" id="" class="form-control">
                    </div>
                </div> 
                <div class="col-md-4">
                    <div class="form-group">
                        <label>TOTAL</label> 
                    </div>
                    </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <input type="text" id="" class="form-control">
                    </div>
                </div>
                </fieldset>
                <fieldset>
                        <legend>Tienda</legend>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>DISTRITO</label> 
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <select class="form-control">
                            <option>EL TAMBO</option>
                            <option selected>CHILCA</option>
                            <option>HUANCAYO</option>
                            <option>SAPALLANGA</option>
                        </select>
                    </div>
                </div> 
                <div class="col-md-4">
                    <div class="form-group">
                        <label>TIENDA</label> 
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <select class="form-control">
                            <option>EL TAMBO, Av. Julio C tello N° 123</option>
                            <option selected>El Tambo, Calle Real N° 123</option>
                        </select>
                    </div>
                </div>     
        </fieldset>
        </div>               
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
                                <th> <button class="btn btn-success" >Modificar</button></th>
                            </tr>
                             <tr>
                                <td>02</td>
                                <td>CAD24</td>
                                <td>WEB</td>
                                <td>02-10-2018</td>
                                <td>20-01-2019</td>
                                <th>120</th>
                                <th> <button class="btn btn-success" >Modificar</button></th>
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
       
   
   </body>
    </html>