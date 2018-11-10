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
                <h1>REGISTRAR USUARIO</h1>
        <div class="col-md-6">
               
                
                <div class="col-md-4">
                    <div class="form-group">
                        <label>NOMBRE</label> 
                </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <input type="text" class="form-control">
                </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>APELLIDOS PATERNO</label> 
                </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <input type="text" class="form-control">
                </div>
                </div>
                <div class="col-md-4">
                        <div class="form-group">
                            <label>APELLIDOS MATERNO</label> 
                    </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <input type="text" class="form-control">
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="form-group">
                        <label>DNI</label> 
                </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <input type="text" class="form-control">
                </div>
                </div>
               
                <div class="col-md-4">
                    <div class="form-group">
                        <label>FECHA DE NAC </label> 
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <input type="date" id="" class="form-control">
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="form-group">
                        <label>CARGO</label>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <select class="form-control">
                            <option>VENDEDOR</option>
                            <option >ADMINISTRADOR</option>
                            
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                        <div class="form-group">
                            <label>ACCESO</label>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                           <input type="radio">Registar producto
                           <input type="radio">Lista de precios
                        </div>
                    </div>
        </div>    
        <div class="col-md-6">
             
                <div class="col-md-4">
                    <div class="form-group">
                        <label>CONTRASEÑA</label>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <input type="password" class="form-control" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>CELULAR</label>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <input type="text" class="form-control" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>EMAIL</label>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <input type="email" class="form-control" >
                    </div>
                </div>
                <div class="col-md-4">
                        <div class="form-group">
                            <label>DIRECCCIÓNL</label>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <input type="text" class="form-control" >
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
                            <option>FEMENINO</option>
                            <option >MASCULINO</option>
                            
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>FOTO</label>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                            <img id="img1" width="100PX" height="100PX" ><br/>
                            <input id="inputFile1" type="file">
                    </div>
                </div>
               
        </div>      
        </div>
        <div class="col-md-12">
         
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
       
   
   </body>
    </html>