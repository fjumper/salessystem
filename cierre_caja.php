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
   <title>Cierre de caja</title>
</head>
<body>
   <br>
   <div class="cont container">
         <br><br>
               <div class="row">
                  <div class="col-7">
                     <fieldset class="row form-group">
                     <legend class="col-sm-4">Datos del cliente</legend>
                     <div class="col-12">
                           <div class="form-row">
                                 
                                 <label for="staticEmail" class="col-sm-2 col-form-label">Cajero</label>
                                 <div class="col-sm-4">
                                    <input type="text" readonly class="form-control" value="Gian Santander">
                                 </div>
                                 <label for="staticEmail" class="col-sm-2 col-form-label">N° de caja</label>
                                 <div class="col-sm-4">
                                    <input type="text" readonly class="form-control" value="1">
                                 </div>        
                                 <label for="staticEmail" class="col-sm-2 col-form-label">Hora</label>
                                 <div class="col-sm-4">
                                    <input type="text" readonly class="form-control" value="12:00am">
                                 </div> 
                              </div>
                     </div>

                  </fieldset>
                  <br> 

               </div>


                  <div class="col-12">
                        <fieldset class="row form-group">
                              <legend class="col-sm-4">Detalle de caja</legend>
                              <div class="col-12">
                                    <div class="form-row">
                                          
                                          <table class="table">
                                                <thead class="thead-dark">
                                                  <tr>
                                                    <th scope="col">Total en efectivo</th>
                                                    <th scope="col">Total en tarjetas</th>
                                                    <th scope="col">Total en notas de credito</th>
                                                    <th scope="col">Monto del dia</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td>S/. 1000.00</td>
                                                    <td>S/. 500.00</td>
                                                    <td>S/. 200.00</td>
                                                    <td>S/. 1700.00</td>
                                                  </tr>
                                                  
                                                
                                                </tbody>
                                              </table>
                                       </div>
                              </div>
         
                           </fieldset>
                  </div>
    
            
              
               <div class="col-12" style="margin-top:1em" align="right">
                   <button onclick="window.history.back()"  style="width:100px" class="btn btn-warning">Atras</button>
                   <button onclick="guardar()"  style="width:150px" class="btn btn-primary">Cerrar caja</button>
                   <button style="width:100px" class="btn btn-danger">Imprimir</button>
               </div>
            


   </div>

   <script>
      function guardar(){
            swal({
                  title: '¿Desea cerrar la caja?',
                  text: "Verifique la informacion antes de continuar",
                  text: "Luego de enviar, sera verificado por el administrador",
                  type: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Si, cerrar!'
                  }).then((result) => {
                        if (result.value) {
                        swal(
                              '¡Se envio correctamente!',   
                        )
                        }
                  })
                  
            }
      </script>
</body>
</html>
