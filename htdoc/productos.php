<?php 
    include '/php/config.php';
?>
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
          <form role="form" name="registro" action="php-registrar/RegistrarProducto.php" method="post">
            <div class="col-md-12">
                <h1>Registro de Productos Base </h1> <br>
            </div>      
           <div class="col-md-6">
            <div class="col-md-4">
                <div class="form-group"> 
                    <label>CODIGO</label>
                </div>
            </div>
            <div class="col-md-8">
                    <div class="form-group"> 
                        <input type="text" id="codigo" name="codigo" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                        <div class="form-group"> 
                            <label>NOMBRE</label>
                        </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group"> 
                        <input type="text" id="nombreproducto" name="nombreproducto" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group"> 
                        <label>CATEGORIA</label>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group"> 
                        <select class="form-control" id="categoria" name="categoria"> 
                            <option value="">Seleccione:</option>
                            <?php
                            $query = $cn -> query ("SELECT * FROM categoria");
                            while ($valores = mysqli_fetch_array($query)) {
                            echo '<option value="'.$valores[IdCategoria].'">'.$valores[Categoria].'</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
            
                <div class="col-md-4">
                    <div class="form-group"> 
                        <label>UNIDAD DE MEDIDA</label>
                    </div>
                </div>
                <div class="col-md-8">
                     <div class="form-group"> 
                     <select id="unidadmedida" name="unidadmedida" class="form-control">
                            <option>Unidad</option>
                            <option>Decena</option>
                            <option>Millar</option>
                        </select>
                        </div>   
                </div>
                <div class="col-md-4"> 
                        <div class="form-group"> 
                         <label>ESPECIFICAR OTROS</label>
                        </div>
                </div>
                        
                <div class="col-md-8">
                        <div class="form-group"> 
                        <input type="text" id="otros" name="otros" class="form-control">
                        </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group" >
                        <label>PROVEEDOR</label>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <select class="form-control" id="proveedor" name="proveedor"> 
                            <option value="">Seleccione:</option>
                            <?php
                            $query = $cn -> query ("SELECT * FROM proveedores");
                            while ($valores = mysqli_fetch_array($query)) {
                            echo '<option value="'.$valores[IdProveedor].'">'.$valores[RazonSocial].'</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
             
            </div>
           
        <div  class="col-md-6">
             <div class="col-md-3" >
                    <div class="form-group">
                            <label>DESCRIPCIÓN</label> 
                    </div>
             </div>
            <div class="col-md-9">
                    <div class="form-group">

                <textarea id="descripcion" name="descripcion" cols="20" rows="2" class="form-control"></textarea>
                </div>
            </div>
            
            <div class="col-md-3">
                    <div class="form-group">
                            <label>PESO</label> 
                    </div>
             </div>
            <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" id="peso" name="peso" class="form-control">
                    </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <select class="form-control" id="unidadpeso" name="unidadpeso">
                        <option>Kg</option>
                        <option>gramos</option>
                    </select>    
                </div>
            </div>
            <div class="col-md-3" >
                    <div class="form-group">
                            <label>DIMENSIÓN</label> 
                    </div>
             </div>
            <div class="col-md-3">
                    <div class="form-group">
                        <input type="number" id="alto" name="alto" class="form-control" min="1" placeholder="Alto">
                </div>
            </div>
            <div class="col-md-3">
                    <div class="form-group">
                        <input type="number" id="largo" name="largo" class="form-control" min="1" placeholder="Largo">
                </div>
            </div>
            <div class="col-md-3">
                    <div class="form-group">
                        <input type="number" id="ancho" name="ancho" class="form-control" min="1" placeholder="Ancho">
                </div>
            </div>
            <div class="col-md-3" >
                    <div class="form-group">
                            <label></label> 
                    </div>
             </div>
            <div class="col-md-9">
                <div class="form-group">
                    <select class="form-control" id="unidaddimensiones" name="unidaddimensiones">
                        <option>cm</option>
                        <option>m</option>
                        <option>mm</option>
                    </select>    
                </div>
            </div>
             <div class="col-md-3">
                    <div class="form-group">
                        <label>FOTO</label>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="form-group">
                            <img id="img1" width="100PX" height="100PX" ><br>
                            <input id="inputFile1" id="imagen" name="imagen" type="file" >
                    </div>
                </div>     
                
        </div>
                  
          </div>
          <div class="col-md-12">
              <div class="col-md-6">
                 <div class="col-md-6">
             
                 </div>
                 <div class="col-md-6">
             
                        <center><button type="submit" class="btn btn-success" id="btnguardar" name="btnguardar">GUARDAR</button></center> 
                        </div>
              </div>
                            
                <div class="col-md-6">
                    <button type="reset" class="btn btn-warning">LIMPIAR</button>
                </div>    
        </form>
    </div>
  </div>    
</div>    
</body>
</html>