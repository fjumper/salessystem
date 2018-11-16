function cambiar_pass(){
   swal.mixin({
         input: 'password',
         confirmButtonText: 'Next &rarr;',
         showCancelButton: true,
         progressSteps: ['1', '2', '3']
         }).queue([
               {
               title: 'Si desea cambiar su contraseña siga los pasos',
               text: 'Ingrese su contraseña actual'
               },
               {
               
               text: 'Ingrese nueva contraseña'
               },
               {
               
               text: 'Repita la contraseña'
               }
         ]).then((result) => {
               if (result.value) {
                     console.log(result.value);
                     verificar_datos(result.value[0],result.value[1],result.value[2]);
               }
         })
         
   }

function verificar_datos(pass1,pass2,pass3){
   if(pass2 == pass3){
      if(pass1 != pass2)
         cambiar(pass1,pass2);
      else {
         swal({
            title: 'Error!',
            html:
            'No se pudo realizar, contraseña igual a la anterior!',
            confirmButtonText: 'Aceptar'
         })
      }

   }
   else{
      swal({
         title: 'Error!',
         html:
         'Contraseñas no similares.!',
         confirmButtonText: 'Aceptar'
      })
   }

}

function cambiar(pass1,pass2){
   $.ajax({
      data: {'password':pass1,'passwordNueva':pass2},
      type: "POST",
      dataType: "json",
      url: "php/cambiar_pass.php",
   })
   .done(function(data) {
      var obj = JSON.parse(JSON.stringify(data));
      console.log(obj.estado);
      if(obj.estado == "1"){
         swal({
            title: 'Listo!',
            html:
            'Se cambio correctamente!',
            confirmButtonText: 'Aceptar'
         })
      }
      if(obj.estado == "2"){
         swal({
            title: 'Error!',
            html:
            'Contraseñas no similares.!',
            confirmButtonText: 'Aceptar'
         })
      }

   })
   .fail(function( jqXHR, textStatus, errorThrown ) {
      if ( console && console.log ) {
            console.log( "La solicitud a fallado: " +  errorThrown);
      }
   });
}


