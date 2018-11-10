<?php 
    include 'php/get.php';
    $get = new get();
    $resultD = $get->getProveedores();
?>
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
                       <ul><li><a href="productos.php">PRODUCTOS</a></li>
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
           <center>
        <div class="container">
        <div class="row">
        <form role="form" name="registro" action="php-registrar/RegistrarCuentasProveedor.php" method="post">
            <center><h1>REGISTRO DE CUENTAS DE PROVEEDOR</h1></center>
            <br/>
            <br/>
        <div class="col-md-12">
       
                <div class="col-md-5">
                    <div class="form-group">
                        <label>PROVEEDOR</label> 
                    </div>
                </div>
                    
                <div class="col-md-7">
                    <div class="form-group">
                    <select name="proveedor" id="proveedor" class="form-control">
                        <option value="0">Seleccione</option>
                            <?php while ($rowD = $resultD->fetch_assoc()) { ?>
                            <option value="<?php echo $rowD['IdProveedor']; ?>">
                            <?php echo $rowD['IdProveedor']; ?>
                        </option>
                        <?php } ?>
                    </select>
                    </div>
                </div>
                    
                <div class="col-md-5">
                    <div class="form-group">
                        <label>NÚMERO DE CUENTA</label>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form-group">
                        <input type="text" id="numerocuenta" name="numerocuenta" class="form-control" >
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="form-group">
                        <label>NOMBRE DE BANCO</label>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form-group">
                        <select id="nombrebanco" name="nombrebanco" class="form-control" >
                            <option selected disabled>Seleccione</option>
                            <option>Banco de Comercio</option>
                            <option>Banco de Crédito del Perú</option>
                            <option>Banco Interamericsno de Finanzas(Banbif)</option>
                            <option>Banco Pichincha</option>
                            <option>Banco Falabella</option>
                            <option>Banco Ripley</option>
                            <option>Banco Azteca</option>
                            <option>Banco de la Nación</option>
                            <option>BBVA Continental</option>
                            <option>CitiBank Perú</option>
                            <option>Interbank</option>
                            <option>MiBanco</option>
                            <option>Scotianbank Perú</option>
                            <option>Agrobanco</option>
                            <option>Crediscotia</option>
                            <option>Confianza</option>
                            <option>PreEmpresa</option>
                            <option>Qapaq</option>
                            <option>TFC</option>
                            <option>Caja Arequipa</option>
                            <option>Caja Cusco</option>
                            <option>Caja Trujillo</option>
                            <option>Caja del Santa</option>
                            <option>Caja Huancayo</option>
                            <option>Caja Arequipa</option>
                            <option>Caja Ica</option>
                            <option>Caja Piura</option>
                            <option>Caja Sullana</option>
                            <option>Caja Maynas</option>
                            <option>Caja Tacna</option>
                            <option>Caja Los Andes</option>
                            <option>Caja Sipán</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">  
                        <button type="submit" class="btn btn-info">REGISTRAR</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">  
                        <button type="button" class="btn btn-info">CANCELAR</button>
                    </div>
                </div>
                        
            </div>
        </div>
       </div>
       </form>
    </center>
   
   </body>
</html>