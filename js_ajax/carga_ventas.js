var seleccion;
var productos=[];
jQuery(document).ready(function($){
   mostrarhora();

   $("#dni").focus(function(){
      seleccion = $("#dni");
      //codigo de busqueda
      buscar_cliente($("#dni").val());
   });

   $("#id_producto").focus(function(){
      seleccion = $("#id_producto");
   });


});


function buscar_cliente($dni) {
   $.ajax({
      data: {"dni":$dni},
      type: "POST",
      dataType: "json",
      url: "php/buscar_cliente.php",
   })
   .done(function(data) {
      var obj = JSON.parse(JSON.stringify(data));
      $("#nombre_cliente").val(obj);
      console.log(obj);

   })
   .fail(function( jqXHR, textStatus, errorThrown ) {
      if ( console && console.log ) {
            console.log( "La solicitud a fallado: " +  errorThrown);
      }
   });
  }

function add_number(num){
   var obt = seleccion.val(); 
   obt += num;
   seleccion.val(obt);
   seleccion.focus();
}

function mostrarhora(){ 
   var f=new Date();
   cad=f.getHours()+":"+f.getMinutes()+":"+f.getSeconds(); 
   $("#hora").val(cad);
   setTimeout("mostrarhora()",1000); 
   }

function add_producto(){
      var id_prod = $("#id_producto").val();

      $.ajax({
            data: {"id_producto":id_prod},
            type: "POST",
            dataType: "json",
            url: "php/obtProd.php",
         })
         .done(function(data) {
            var obj = JSON.parse(JSON.stringify(data));

            if(obj =="NO REGISTRADO"){
                  alert("Producto inexistente");
                  
            }
            else{
                  var producto = {"IdProducto":obj.IdProducto,
                  "Producto":obj.Producto,
                  "Cantidad":1,
                  "PrecioCompra":obj.PrecioCompra,
                  "PrecioTotal":obj.PrecioCompra}
                  exist=false;

                  for (let i = 0; i < productos.length; i++) {
                        const item = productos[i];

                        if(producto.IdProducto == item.IdProducto){
                              item.Cantidad +=1;
                              exist=true;
                              break;
                        }
                        else{
                              exist=false;
                        }
                  }
                  
                  if(!exist){
                        productos.push(producto);
                  }

                  document.getElementById("tabla_productos").innerHTML="";
      
                  productos.forEach(item => {
                        $("#tabla_productos").append(
                              "<tr><th scope='row'>"+item.IdProducto+
                              "</td><td>"+item.Producto+
                              "</td><td>"+item.Cantidad+
                              "</td><td>S/."+item.PrecioCompra+
                              "</td><td>S/."+item.PrecioTotal+"</td><tr>");
                  });

            }
            $("#id_producto").val("");

         })
         .fail(function( jqXHR, textStatus, errorThrown ) {
            if ( console && console.log ) {
                  console.log( "La solicitud a fallado: " +  errorThrown);
            }
         });
}
