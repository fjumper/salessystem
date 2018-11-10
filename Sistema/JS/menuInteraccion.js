$(document).ready(main);
var contador =1;

function main() {
    $('#icono_menu').click(function () {
        if (contador == 1) {
            $('#div_navegacion').removeClass('div_navegacionO').animate();
            $('#div_navegacion').addClass('div_navegacionD').animate();
            $('#div_cuerpo').removeClass('div_cuerpoR').animate();
            $('#div_cuerpo').addClass('div_cuerpoA').animate();
            contador = 0;
        }
        else {
            $('#div_navegacion').removeClass('div_navegacionD').animate();
            $('#div_navegacion').addClass('div_navegacionO').animate();
            $('#div_cuerpo').removeClass('div_cuerpoA').animate();
            $('#div_cuerpo').addClass('div_cuerpoR').animate();
            contador = 1;
        }
    });
}