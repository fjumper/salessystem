$(document).ready(main);
var contador =1;

function main() {
    $('#menuIMG').click(function () {
        if (contador == 1) {
            $('#menu').removeClass('menu1').animate();
            $('#menu').addClass('menu2').animate();
            contador = 0;
        }
        else {
            $('#menu').removeClass('menu2').animate();
            $('#menu').addClass('menu1').animate();
            contador = 1;
        }
    });
}