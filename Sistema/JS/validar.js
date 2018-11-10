function validaNumericos(event) {
    if((event.charCode >= 48 && event.charCode <= 57)|| event.charCode==46){
        return true;
    }
    return false;        
}
function validateMail(idMail)
{
    object=document.getElementById(idMail);
    valueForm=object.value;

    var patron=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
    if(valueForm.search(patron)==0)
    {
        object.style.color="#000";
        return;
    }
    object.style.color="#f00";
}