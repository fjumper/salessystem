function registro(){
   var dni = $("#dni").val();
   var nombres = $("#nombres").val();
   var apellidoP = $("#apellidoP").val();
   var apellidoM = $("#apellidoM").val();
   var direccion = $("#direccion").val();
   var celular = $("#celular").val();
   var fnacimiento = $("#f-nacimiento").val();
   var foto = $("#foto").val();
   var sexo = $("#sexo").val();
   var cargo = $("#cargo").val();
   var email = $("#email").val();
   var user = $("#user").val();
   var pass = $("#password").val();

   var img_nombre = foto.split("\\");

   agregar_usuario(dni,nombres,apellidoP,apellidoM,sexo,fnacimiento,
      cargo,celular,direccion,img_nombre[2],email,user,pass);



}


function agregar_usuario(dni,nombre,apellP,
   apellM,genero,fnacimiento,
   tipocargo,celular,direccion,foto
   ,email,username,userpass){

      datos = {
         "dni":dni,
         "nombre":nombre,
         "apeP":apellP,
         "apeM":apellM,
         "fkGener":genero,
         "fnac":fnacimiento,
         "tipoCargo":tipocargo,
         "celular":celular,
         "direccion":direccion,
         "foto":foto,
         "email":email,
         "user":username,
         "password":userpass
      }

      $.ajax({
         data: datos,
         type: "POST",
         dataType: "json",
         url: "php/registro_empleado.php",
      })
      .done(function(data) {
         var obj = JSON.parse(JSON.stringify(data));
         console.log(obj);
         if(obj.estado == "1"){
            swal(
               '¡Registro correcto!',
               'Si desea puede agregar otro usuario.',    
             );
         }
         else if(obj.estado == "2"){
            swal(
               '¡Usuario ya registrado!',
               'Puede intentar usar otro usuario',    
             );
         }
      })
      .fail(function( jqXHR, textStatus, errorThrown ) {
         if ( console && console.log ) {
               console.log( "La solicitud a fallado: " +  errorThrown);
         }
      });

}

function registrar(){
   swal({
         title: '¿Estas seguro?',
         text: "Esto se registrara en el sistema",
         type: 'warning',
         showCancelButton: true,
         confirmButtonColor: '#3085d6',
         cancelButtonColor: '#d33',
         confirmButtonText: 'Si, registrar!'
         }).then((result) => {
               if (result.value) {
                  try {
                        registro();
                  } catch (error) {
                        swal(
                              '¡Usuario ya registrado!',
                              'Puede intentar usar otro usuario',    
                            ); 
                  }
               }
               else{}
         })
         
   }

function readURL(input) {

   if (input.files && input.files[0]) {
      var reader = new FileReader();
   
      reader.onload = function(e) {
         $('#foto_muestra').attr('src', e.target.result);
      }
   
      reader.readAsDataURL(input.files[0]);
   }
   }
    
   $("#foto").change(function() {
      readURL(this);
   });