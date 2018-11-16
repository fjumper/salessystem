<?php
session_start();

if(isset($_SESSION["IdEmpleado"])){
    if($_SESSION["TipoCargo"] == "asesor")
          header('Location: index.html');
}
else{
    header('Location: index.html');
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
   integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet" href="css/ventas.css">
   <script src="https://code.jquery.com/jquery-3.3.1.js"
   integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
   crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.4/dist/sweetalert2.min.css">
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.4/dist/sweetalert2.min.js"></script>
   <title>Ventas</title>
</head>
<body>
   <br>
   <div class="cont container">


         <div class="row">
            <div class="col-8">
                  <fieldset class="row form-group">
                        <legend class="col-sm-2">Cliente</legend>
                        <div class="col-12">
                              <div class="form-row">
                                    <label for="staticEmail" class="col-sm-1 col-form-label">DNI</label>
                                    <div class="col-sm-4">
                                      <input type="text" id="dni" class="form-control" placeholder="DNI">
                                    </div>
                                    <label for="staticEmail" class="col-sm-1 col-form-label">Datos</label>
                                    <div class="col-sm-6">
                                      <input type="text" readonly id="nombre_cliente" class="form-control" placeholder="Nombre cliente">
                                    </div>        
                                  </div>
                        </div>
         
                     </fieldset>
                     <br>
                     <fieldset class="row form-group" >
                           <legend class="col-sm-4">Descripcion de venta</legend>
                           <div class="col-12" id="descr_venta">
                                 <div class="form-row">
                                    
                                       <table class="table">
                                             <thead class="thead-dark">
                                               <tr>
                                                 <th scope="col">Codigo</th>
                                                 <th scope="col">Nombre</th>
                                                 <th scope="col">Cantidad</th>
                                                 <th scope="col">Precio</th>
                                                 <th scope="col">Sub Total</th>
                                               </tr>
                                             </thead>
                                             <tbody id="tabla_productos">
           
                                             </tbody>
                                           </table>
            
                                     </div>
                           </div>
            
                        </fieldset>

                     <fieldset class="row form-group">
                           <legend class="col-sm-3">Datos de caja</legend>
                           <div class="col-12">
                                 <div class="form-row">
                                    <label for="staticEmail" class="col-sm-1 col-form-label">Cajero</label>
                                    <div class="col-sm-6">
                                      <input type="text" readonly class="form-control" value="<?php echo $_SESSION['Nombre'].' '.$_SESSION['Apellidos'] ?>">
                                    </div>
                                    <label for="staticEmail" class="col-sm-1 col-form-label">Caja</label>
                                    <div class="col-sm-1">
                                      <input type="text" readonly class="form-control" value="<?php echo $_SESSION['caja'] ?>">
                                    </div> 
                                    <label for="staticEmail" class="col-sm-1 col-form-label">Hora</label>
                                    <div class="col-sm-2">
                                      <input type="text" readonly class="form-control" id="hora">
                                    </div> 
            
                                 </div>
                           </div>
            
                        </fieldset>
            </div>

            <div class="col-4">
               <br>
               <div class="row">
                  <div class="col-9">
                     <div class="row" align="center">
                           
                           <div class="col-12">
                                 <input type="text" id="id_producto" class="form-control">
                              </div> <br> <br>
                              <div class="col-4">
                                 <button class="btn" onclick="add_number('9');">
                                    9
                                 </button>
                              </div>
                              <div class="col-4">
                                 <button class="btn" onclick="add_number('8');">
                                    8
                                 </button>
                              </div>
                              <div class="col-4">
                                 <button class="btn" onclick="add_number('7');">
                                    7
                                 </button>
                              </div>
                              <div class="col-4">
                                 <button class="btn" onclick="add_number('6');">
                                    6
                                 </button>
                              </div>
                              <div class="col-4">
                                 <button class="btn" onclick="add_number('5');">
                                    5
                                 </button>
                              </div>
                              <div class="col-4">
                                 <button class="btn" onclick="add_number('4');">
                                   4
                                 </button>
                              </div>
                              <div class="col-4">
                                 <button class="btn" onclick="add_number('3');">
                                    3
                                 </button>
                              </div>
                              <div class="col-4">
                                 <button class="btn" onclick="add_number('2');">
                                    2
                                 </button>
                              </div>
                              <div class="col-4">
                                 <button class="btn" onclick="add_number('1');">
                                    1
                                 </button>
                              </div>
                              <div class="col-4">
                                    <button class="btn btn-success" onclick="limpiar();">
                                       CE
                                    </button>
                                 </div>
                              <div class="col-4">
                                 <button class="btn" onclick="add_number('0');">
                                    0
                                 </button>
                              </div>
                              <div class="col-4">
                                 <button class="btn" onclick="add_number('.');">
                                    .
                                 </button>
                              </div>
                     </div>
                  </div>
                  <div class="col-3">
                     <div style="height:230px" class="row align-items-end">
                        <div class="col">
                           <button style="height:100px" class="btn btn-primary" onclick="add_producto();"> 
                              E
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
               
               <fieldset class="row form-group">
                     <legend class="col-sm-3">Montos</legend>
                     <div class="col-12">
                           <div class="row">
                              <div class="col-9">
                                    <div class="form-row">
                                          <label for="staticEmail" class="col-sm-4 col-form-label">Total</label>
                                          <div class="col-sm-7">
                                            <input type="text" class="form-control" placeholder="0">
                                          </div>
                                          <label for="staticEmail" class="col-sm-4 col-form-label">Recibido</label>
                                          <div class="col-sm-7">
                                            <input type="text" class="form-control" placeholder="0">    
                                          </div>
                                          <label for="staticEmail" class="col-sm-4 col-form-label">Vuelto</label>
                                          <div class="col-sm-7">
                                            <input type="text" class="form-control" placeholder="0">    
                                          </div>
                           
                                    </div> 
                              </div>
                              <div class="col-3 align-self-end">
                                 <button onclick="envio()" class="btn btn-default">
                                    Env
                                 </button>
                                 <input type="text" hidden id="direccion">
                                 <button onclick="window.history.back()" class="btn btn-warning">
                                       Canc
                                    </button>
                              </div>
                           </div>
                           <br>
                           <div class="row">
                                 
                                 <div class="col-sm-9">
                                       <select id="inputState" class="form-control">
                                             <option selected>T. de pago </option>
                                             <option>Efectivo</option>
                                             <option>Tarjeta</option>
                                           </select>

                                       <select id="inputState" class="form-control">
                                          <option selected>C. de pago</option>
                                          <option>Boleta</option>
                                          <option>Factura</option>
                                          </select>
                                 </div>
                                 <div  class="col-sm-3">
                                    <button onclick="location.href='boleta.html'" style="height:70px"  class="btn btn-primary">
                                       Pagar
                                    </button>
                                 </div>
                           </div>
                     </div>

                  </fieldset>

            </div>
         </div>

   </div>

   <script>

   function envio(){
      swal.mixin({
            input: 'text',
            confirmButtonText: 'Next &rarr;',
            showCancelButton: true,
            }).queue([
            {
                  title: 'Direccion de envio..',
                  text: 'Escriba la direccion de envio'
                  }
                  ]).then((result) => {
                  
                  if (result.value) {
                        $("#direccion").val(result.value);
                  }
            })
   }

   </script>
   <script src="js_ajax/carga_ventas.js">
   </script>


</body>
</html>