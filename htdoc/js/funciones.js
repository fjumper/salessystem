// -----funciones de registro usuario-------
$(function () {
    TipoUsuario();
});

$('#TipoUsuario').change(function (e) {
    e.preventDefault();
    TipoUsuario();
});

function TipoUsuario() {
    var TipoUsuario = $("#TipoUsuario option:selected").val();
    if (TipoUsuario == 1) {
        $('#lId').text('DNI');
        $('#Id').attr('placeholder', 'DNI');
        $("#gRazonSocial").css("display", "none");
    } else {
        $('#lId').text('RUC');
        $('#Id').attr('placeholder', 'RUC');
        $("#gRazonSocial").css("display", "block");
    }
};

$('#Registrar').click(function (e) {
    e.preventDefault();
    var parametros = {
        "Id": $('#Id').val(),
        "RazonSocial": $('#RazonSocial').val()
    };
    $.ajax({
        type: "POST",
        url: "php/postUsuario.php",
        data: parametros,
        success: function (response) {
            alertify.success('Ok');
        },
        error: function (response) {
            alertify.error('Cancel');
        }
    });

});
// ------ Fin --------

//  ------ Eventos del boton productos deseados ------
$('#btnprod1').click(function () {
    if ($('#prod1').hasClass('far fa-star')) {
        $('#prod1').removeClass('far fa-star');
        $('#prod1').addClass('fas fa-star');
    } else {
        $('#prod1').removeClass('fas fa-star');
        $('#prod1').addClass('far fa-star');
    }
});
// ------ Fin -----------

// ----------- Carrito --------------
$(function () {
    for (let i = 1; i < 40; i++) {
        $('.cantidad').append($('<option>', {
            value: i,
            text: i
        }));
    }
});
// ----------- Fin--------------

// ----------- Ubigeo --------
$(function () {
    $('#Departamento').change(function (e) {
        e.preventDefault();
        $("#Departamento").each(function () {
            IdDepartamento = $(this).val();

            $('#Distrito').find('option').remove().end().append('<option value="0">Seleccione</option>');
            $.post("php/getProvincias.php", {
                IdDepartamento: IdDepartamento
            }, function (data) {
                $("#Provincia").html(data);
            });
        });
    });
});

$(function () {
    $('#Provincia').change(function (e) {
        e.preventDefault();
        $("#Provincia").each(function () {
            IdProvincia = $(this).val();
            $.post("php/getDistritos.php", {
                IdProvincia: IdProvincia
            }, function (data) {
                $("#Distrito").html(data);
            });
        });
    });
});
// ----------- Fin ------------