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
               <div style="clear:both;"></div>   
           </header>
           <div style="clear:both;"></div>
        <div class="container">
                <center>
        <div class="row">
            
            <center><h1>REGISTRO DE TIENDA</h1></center>
            <br/>
            <br/>
        <div class="col-md-6">
        <center>
                <div class="col-md-4">
                        <div class="form-group">
                            <label>DISTRITO</label> 
                        </div>
                    </div>
                    
                    <div class="col-md-8">
                            <div class="form-group">
                                <select class="form-control">
                                    <option selected disabled>DISTRITO</option>
                                    <option >HUANCAYO</option>
                                    <option>CHILCA</option>
                                    <option>TAMBO</option>
                                    
                                </select>
                            </div>
                        </div> 
                    
                <div class="col-md-4">
                    <div class="form-group">
                        <label>DIRECCION</label>
                    </div>
                </div>
                <div class="col-md-8">
                        <div class="form-group">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>LONGITUD</label>
                        </div>
                    </div>
                    <div class="col-md-8">
                            <div class="form-group">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>LATITUD</label>
                            </div>
                        </div>
                        <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
        
                        
        </div>  

        <div class="col-md-6">
                
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>SELECCIONE DIRECCIÓN</label>
                            <img src="img/3.PNG" height="150" width="400"><br/>
                        </div>
                    
                        </div>   </div>     
                   
            
        </div>  
        <div class="col-md-12">
            <div class="col-md-11">
                <div class="form-group">  
                    <button type="submit" class="btn btn-success">GUARDAR</button>
                   
         <button type="submit" class="btn btn-warning">CANCELAR</button>
                    </div>
                </div>  
            </div>    
        </div>
       </div>
       </center>
       
   
   </body>
    </html>