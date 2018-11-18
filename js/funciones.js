function inicio() {
    // Botón Agregar Carrito

    $('.btnAgregar').click(function () {

        if ($(this).children('i').hasClass('fas fa-cart-plus')) {
            $(this).children('i').removeClass('fas fa-cart-plus');
            $(this).children('i').addClass('fas fa-shopping-cart');

            $.ajax({
                type: "POST",
                url: "carrito.php",
                data: {
                    Id: $(this).attr('id')
                },
                success: function (response) {
                    alertify.success('Bien. Se agrego al carrito');
                }
            });

        } else {
            $(this).children('i').removeClass('fas fa-shopping-cart');
            $(this).children('i').addClass('fas fa-cart-plus');
        }
    });

    // Botón Favorito

    $('.btnFavorito').click(function () {

        if ($(this).children('i').hasClass('far fa-star')) {
            $(this).children('i').removeClass('far fa-star');
            $(this).children('i').addClass('fas fa-star');

            $('.btnAgregar').each(function(){
                var id = $(this).attr('id');
                alert(id);
            });

            

            // $.ajax({
            //     type: "POST",
            //     url: "php/listaDeseos.php",
            //     data: {IdUsuario: $('#usuario').text(), IdProducto: $('.btnAgregar').attr('id')},
            //     success: function (response) {
                    
            //     }
            // });
        } else {
            $(this).children('i').removeClass('fas fa-star');
            $(this).children('i').addClass('far fa-star');
        }
    });

    // Fin

    // Eliminar Producto del Carrito
    $('.eliminar').click(function (e) {
        e.preventDefault();
        var Id = $(this).attr('data-id');
        $(this).closest('tr').remove();
        $('#SubTotal').text($('tr').length - 1);
        alertify.success('Producto eliminado del carrito ');

        $.ajax({
            type: "POST",
            url: "php/carrito/eliminarProdCar.php",
            data: {
                Id: Id
            },
            success: function (response) {
                if (response == '0') {
                    location.href = "carrito.php";
                }
            }
        });
    });

    // Fin

    // Cambiar la Cantidad
    $('.Cantidad').change(function (e) {
        e.preventDefault();
        var Cantidad = $(this).val()
        var Id = $(this).attr('data-id');
        var Precio = $(this).attr('data-precio');
        $.ajax({
            type: "POST",
            url: "php/carrito/modificarDatCar.php",
            data: {
                Id: Id,
                Cantidad: Cantidad,
                Precio: Precio
            },
            success: function (response) {
                $('#SubTotal').text('S/. ' + response);
            }
        });
    });

    // Fin

    //Evento al cambiar el tipo de usuario

    TipoUsuario();

    $('#TipoUsuario').change(function (e) {
        e.preventDefault();
        TipoUsuario();
    });

    function TipoUsuario() {
        var TipoUsuario = $("#TipoUsuario option:selected").val();
        if (TipoUsuario == 1) {
            $('#lId').text('DNI');
            $('#IdCliente').attr('placeholder', 'DNI');
            $("#gRazonSocial").css("display", "none");
        } else {
            $('#lId').text('RUC');
            $('#IdCliente').attr('placeholder', 'RUC');
            $("#gRazonSocial").css("display", "block");
        }
    };

    //Fin

    // ----------- Ubigeo --------
    $('#Departamento').change(function (e) { 
        e.preventDefault();
        IdDepartamento = $(this).val();
        $('#Distrito').find('option').remove().end().append('<option value="0">Seleccione</option>');
        $('#Departamento').each(function () {
            $.post("php/getProvincias.php", {IdDepartamento: IdDepartamento},
                function (data) {
                    $('#Provincia').html(data);
                });  
        });
    });

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

    // ----------- Fin ------------

    // Iniciar Sesión

    $('#Login').click(function (e) { 
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "../../php/ventasweb/login.php",
            data: {UserName: $('#UserName').val(), UserPass: $('#UserPass').val()},
            success: function (response) {
                if(response == 0) {
                    alertify.error('Error Datos Incorrectos');
                } else {
                    location.href = 'index.php';
                }
            }
        });
    });

    // Fin

    // Cerrar Sesión

    $('#Cerrar').click(function (e) { 
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "../../php/ventasweb/CerrarSesion.php",
            data: {Session: 'Session'},
            success: function (response) {
                location.href = 'index.php';
            }
        });
    });

    // Fin
}

$(function () {
    inicio();
});