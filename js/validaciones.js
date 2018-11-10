function verificar_campos(){
    var text=document.forms[0].nombreTienda.value.length;
    if(text==0) {
        document.forms[0].nombreTienda.focus();
        alert("Debes ingresar el nombre de la tienda");
        return false;
    }else{
        document.forms[0].submit();
    }
}