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
   
   <title>Nota Crediticia</title>
</head>
<body>
   <br>
   <div class="cont container">
         <fieldset class="form-group">
               <legend class="col-sm-2">Detalle nota credito</legend>
               <div class="row">
                  <div class="col-7">
                     <fieldset class="row form-group">
                     <legend class="col-sm-4">Datos del cliente</legend>
                     <div class="col-12">
                           <div class="form-row">
                                 <label for="staticEmail" class="col-sm-6 col-form-label">Ingrese codigo de nota crediticia</label>
                                 <div class="col-sm-3">
                                    <input type="text" class="form-control" placeholder="Codigo">
                                 </div>
                                 <div class="col-sm-3">
                                       <input type="submit" style="width:100px;" class="btn btn-dark" value="Buscar">
                                    </div>
                                 <label for="staticEmail" class="col-sm-4 col-form-label">DNI</label>
                                 <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="DNI">
                                 </div>
                                 <label for="staticEmail" class="col-sm-4 col-form-label">Nombre</label>
                                 <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="Nombre cliente">
                                 </div>        
                                 </div>
                     </div>

                  </fieldset>
                  <br> 
                  <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Codigo</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Importe</th>

                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">123456</th>
                            <td>Zapato</td>
                            <td>S/. 200.00</td>
                          </tr>
                          
                        
                        </tbody>
                      </table>

                  <div class="row" align="center">
                     <div class="col">
                           <div class="form-group">
                                 <label for="exampleInputEmail1">Saldo Total</label>
                                 <input style="text-align:center" type="text" class="form-control" placeholder="0.0">
                               </div>
                     </div>
                     <div class="col">
                           <div class="form-group">
                                 <label for="exampleInputEmail1">Saldo a cuenta</label>
                                 <input style="text-align:center" type="text" class="form-control" placeholder="0.0">
                               </div>
                     </div>
                     <div class="col">
                           <div class="form-group">
                                 <label for="exampleInputEmail1">Saldo Actual</label>
                                 <input style="text-align:center" type="text" class="form-control" placeholder="0.0">
                               </div>
                     </div>
                  </div>
               </div>
               <div class="col-5">
                  <br><br><br>
                     <div class="row">
                           <div class="col-9">
                              <div class="row" align="center">
                                    
                                    <div class="col-12">
                                          <input type="text" class="form-control">
                                       </div> <br> <br>
                                       <div class="col-4">
                                          <button class="btn">
                                             9
                                          </button>
                                       </div>
                                       <div class="col-4">
                                          <button class="btn">
                                             8
                                          </button>
                                       </div>
                                       <div class="col-4">
                                          <button class="btn">
                                             7
                                          </button>
                                       </div>
                                       <div class="col-4">
                                          <button class="btn">
                                             6
                                          </button>
                                       </div>
                                       <div class="col-4">
                                          <button class="btn">
                                             5
                                          </button>
                                       </div>
                                       <div class="col-4">
                                          <button class="btn">
                                            4
                                          </button>
                                       </div>
                                       <div class="col-4">
                                          <button class="btn">
                                             3
                                          </button>
                                       </div>
                                       <div class="col-4">
                                          <button class="btn">
                                             2
                                          </button>
                                       </div>
                                       <div class="col-4">
                                          <button class="btn">
                                             1
                                          </button>
                                       </div>
                                       <div class="col-4">
                                             <button class="btn btn-success">
                                                CE
                                             </button>
                                          </div>
                                       <div class="col-4">
                                          <button class="btn">
                                             0
                                          </button>
                                       </div>
                                       <div class="col-4">
                                          <button class="btn">
                                             .
                                          </button>
                                       </div>
                              </div>
                           </div>
                           <div class="col-3">
                              <div style="height:230px" class="row align-items-end">
                                 <div class="col">
                                    <button style="height:100px" class="btn btn-primary"> 
                                       E
                                    </button>
                                 </div>
                              </div>
                           </div>
                        </div>
                  </div>
               </div>
               

               <div class="col-12" align="right">
                   <button onclick="enviar()" style="width:100px" class="btn btn-primary">Enviar</button>
                   <button onclick="window.history.back()"  style="width:100px" class="btn btn-danger">Atras</button>
               </div>

            </fieldset>

   </div>

   <script>
            function enviar(){
                  swal({
                        title: 'Se realizo correctamente',
                        text: 'Se registro la nota crediticia',
                        animation: false,
                        customClass: 'animated tada'
                        });

                  }
            </script>
</body>
</html>
