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
        var IdUsuario = $('#usuario').text();
        var IdProducto = $(this).siblings('.btnAgregar').attr('id');
        if ($.isNumeric(IdUsuario)) {
            if ($(this).children('i').hasClass('far fa-star')) {
                $(this).children('i').removeClass('far fa-star');
                $(this).children('i').addClass('fas fa-star');

                $.ajax({
                    type: "POST",
                    url: "../../php/ventasweb/deseos/insDeseos.php",
                    data: {
                        IdUsuario: IdUsuario,
                        IdProducto: IdProducto
                    },
                    success: function (response) {
                        if (response == 1)
                            alertify.success('Bien. Se agrego a productos deseados');
                    }
                });
            } else {
                $(this).children('i').removeClass('fas fa-star');
                $(this).children('i').addClass('far fa-star');

                $.ajax({
                    type: "POST",
                    url: "../../php/ventasweb/deseos/eliDeseos.php",
                    data: {
                        IdUsuario: IdUsuario,
                        IdProducto: IdProducto
                    },
                    success: function (response) {
                        if (response == 1)
                            alertify.warning('Bien. Se elimino de productos deseados');
                    }
                });
            }
        } else {
            alertify.error('Error. Debe iniciar sesión');
        }
    });

    // Fin

    // Eliminar Favorito

    $('.btnFavoritoEli').click(function () {
        var IdUsuario = $('#usuario').text();
        var IdProducto = $(this).siblings('.btnAgregar').attr('id');

        $.ajax({
            type: "POST",
            url: "../../php/ventasweb/deseos/eliDeseos.php",
            data: {
                IdUsuario: IdUsuario,
                IdProducto: IdProducto
            },
            success: function (response) {
                if (response == 1)
                    location.reload();
            }
        });
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
            url: "../../php/ventasweb/carrito/eliminarProdCar.php",
            data: {
                Id: Id
            },
            success: function (response) {
                location.reload();
            }
        });
    });

    // Fin

    // Cambiar la Cantidad
    $('.Cantidad').change(function (e) {
        e.preventDefault();
        var Cantidad = $(this).val();
        if (Cantidad == null) {
            Cantidad = 0;
        }
        var Id = $(this).attr('data-id');
        var Precio = $(this).attr('data-precio');
        $.ajax({
            type: "POST",
            url: "../../php/ventasweb/carrito/modificarDatCar.php",
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

    // function stock (){
    //     $('.Cantidad').each(function(){
    //         var Id = $(this).attr('data-id');
    //         $.ajax({
    //             type: "POST",
    //             url: "../../php/ventasweb/getStock.php",
    //             data: {
    //                 Id: Id
    //             },
    //             success: function (response) {
    //                 alert(response);
    //             }
    //         });
    //     });
    // };

    // setInterval(stock, 5000);

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
            $.post("../../php/ventasweb/getProvincias.php", {
                    IdDepartamento: IdDepartamento
                },
                function (data) {
                    $('#Provincia').html(data);
                });
        });
    });

    $('#Provincia').change(function (e) {
        e.preventDefault();
        $("#Provincia").each(function () {
            IdProvincia = $(this).val();
            $.post("../../php/ventasweb/getDistritos.php", {
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
            data: {
                UserName: $('#UserName').val(),
                UserPass: $('#UserPass').val()
            },
            success: function (response) {
                if (response == 0) {
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
            data: {
                Session: 'Session'
            },
            success: function (response) {
                location.href = 'index.php';
            }
        });
    });

    // Fin

    // Validación solo números

    $('.number').on('input', function () {
        this.value = this.value.replace(/[^0-9]/g,'');
    });
    // Fin

    // Rellenar SubCategoria
    $('#Categoria').change(function (e) { 
        e.preventDefault();
        IdCategoria = $(this).val();
        $('#SubCategoria').find('option').remove().end().append('<option value="0">Seleccione</option>');
        $('#Categoria').each(function () {
            $.post("../../php/ventasweb/getSubCategoria.php", {
                IdCategoria: IdCategoria
            },
            function (data) {
                $('#SubCategoria').html(data);
            });
        });
    });
    // Fin
}

$(function () {
    inicio();
});