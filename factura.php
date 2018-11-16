<!DOCTYPE html>
<html lang="es">
      <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
            integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <link rel="stylesheet" href="css/factura.css">
            <title>Factura</title>
         </head>
<body>
      <br>
   <div class="cont container">
      <div class="row">
         <div class="col-6">
            <fieldset class="row form-group">
                  <legend class="col-sm-5">Datos de la empresa</legend>
                  <div class="col-12">
                        <div>
                           <h4>NOMBRE DE LA EMPRESA</h4> 
                           <span>Direccion: Av Castilla</span> <br>
                           <span>Telefono: 000000</span>
                           </div>
                  </div>

               </fieldset>
         </div>
         <div class="col-2 align-self-center" style="padding-top: 15px;height: 115px">
         <img width="151px" style="display: table-cell; vertical-align:middle" height="83px" src="https://cde.publimetro.e3.pe/ima/0/0/1/3/9/139300.jpg" alt="">
         </div>
         <div class="col-4" align="center">
               <fieldset class="row form-group">
                     <legend class="col-sm-6">Numero de RUC</legend>
                     <div class="col-12">
                           <div>
                              <span>RUC: 10432954019</span> <br>
                              <span>FACTURA</span> <br>
                              <span>02-235534345</span>
                              </div>
                     </div>
   
                  </fieldset>
         </div>
      </div>
      <div class="row">
         <div class="col-12">
               <fieldset class="row form-group">
                     <legend class="col-sm-2">Datos del cliente</legend>
                     <div class="col-12">
                           <div class="form-group row">
                                 <label for="example-text-input" class="col-2 col-form-label">RUC:</label>
                                 <div class="col-3">
                                   <input class="form-control" type="text" value="13464532" id="example-text-input">
                                 </div>

                                 <label for="example-text-input" class="col-2 col-form-label">Razon Social:</label>
                                 <div class="col-5">
                                   <input class="form-control" type="text" value="Razon social" id="example-text-input">
                                 </div>
                             
                                   
                                  </div>
                              <div class="form-group row">
                                 <label for="example-text-input" class="col-2 col-form-label">Direccion:</label>
                                 <div class="col-6">
                                    <input class="form-control" type="text" value="Jr manzanos" id="example-text-input">
                                 </div>
                                 </div>
                              <div class="form-group row">
                                    <label for="example-text-input" class="col-2 col-form-label">Lugar de entrega:</label>
                                    <div class="col-3">
                                       <input class="form-control" type="text" value="Jr manzanos" id="example-text-input">
                                    </div>
                                    <label for="example-text-input" class="col-2 col-form-label">Fecha:</label>
                                    <div class="col-3">
                                       <input class="form-control" type="text" value="10-10-2010" id="example-text-input">
                                    </div>
   
                                    </div>
                     </div>
   
                  </fieldset>
                  <br>
         </div>
      </div>
      <div class="row justify-content-center" align="center">
         <div class="col-md-10 col-md-offset-2">
               <table class="table">
                     <thead class="thead-dark">
                       <tr>
                         <th scope="col">Codigo</th>
                         <th scope="col">Nombre</th>
                         <th scope="col">Cantidad</th>
                         <th scope="col">Precio</th>
                         <th scope="col">Importe</th>
                       </tr>
                     </thead>
                     <tbody>
                       <tr>
                         <th scope="row">123456</th>
                         <td>Zapato</td>
                         <td>2</td>
                         <td>S/. 100.00</td>
                         <td>S/. 200.00</td>
                       </tr>
                       <tr>
                           <th scope="row">2357432</th>
                           <td>Guitarra</td>
                           <td>1</td>
                           <td>S/. 80.00</td>
                           <td>S/. 80.00</td>
                         </tr>
                        <tr>
                           <th scope="row">523674</th>
                           <td>Televisor</td>
                           <td>2</td>
                     
                           <td>S/. 300.00</td>
                           <td>S/. 600.00</td>
                           </tr>
                        <tr>
                           <th scope="row">123456</th>
                           <td>Zapato</td>
                           <td>3</td>
                           <td>S/. 100.00</td>
                           <td>S/. 300.00</td>
                        </tr>
                     
                     </tbody>
                   </table>
         </div>
      </div>
      <div class="row justify-content-end">
         <div class="col-7">
         <div class="form-group row">
               <label for="example-text-input" class="col-3 col-form-label">Monto de envio:</label>
               <div class="col-3">
                  <input class="form-control" type="text" value="0.00" id="example-text-input">
               </div>
               <label for="example-text-input" class="col-3 col-form-label">Sub Total: S./</label>
               <div class="col-3">
                  <input class="form-control" type="text" value="1500.00" id="example-text-input">
               </div>
               </div>
               <div class="form-group row justify-content-end">
                     <label for="example-text-input" class="col-3 col-form-label">IGV: S/.</label>
                     <div class="col-3">
                        <input class="form-control" type="text" value="124.00" id="example-text-input">
                     </div>
               </div>
               <div class="form-group row justify-content-end">
                     <label for="example-text-input" class="col-3 col-form-label">Total: S/.</label>
                     <div class="col-3">
                        <input class="form-control" type="text" value="1750.00" id="example-text-input">
                     </div>
               </div>
         </div>
      </div>

      <div class="row justify-content-center" align="center">
         <div class="col-6">
               <button style="width:100px" class="btn btn-danger">Cancelar</button>
               <button style="width:100px" class="btn btn-primary">Imprimir</button>
         </div>
      </div>

   </div>
</body>
</html>