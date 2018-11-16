function login (){
   var user = $("#usuario").val();
   var password = $("#password").val();
   var caja = $("#caja").val();
   var numero = caja.split(" ");


   var datos = {
      "user":user,
      "password":password,
      "caja": numero[1]
   }

   $.ajax({
      data: datos,
      type: "POST",
      dataType: "json",
      url: "php/inicio_sesion.php",
   })
   .done(function(data) {
      var obj = JSON.parse(JSON.stringify(data));
      console.log(obj);
      if(obj.estado ==1){
         alert("Bienvenido");
         if(obj.contenido.TipoCargo =="asesor")
            document.location.href="menu_asesor.php";
         if(obj.contenido.TipoCargo =="administrador")
            document.location.href="menu_admin.php";
         if(obj.contenido.TipoCargo =="vendedor")
            document.location.href="menu_vendedor.php";
      }

      else if(obj.estado ==2){
         alert(obj.contenido);
         $("#password").val("");
      }
   })
   .fail(function( jqXHR, textStatus, errorThrown ) {
      if ( console && console.log ) {
            console.log( "La solicitud a fallado: " +  textStatus);
      }
   });
}