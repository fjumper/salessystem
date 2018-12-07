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
                    // setTimeout(location.reload.bind(location), 3000);
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
                    url: "../php/deseos/insDeseos.php",
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
                    url: "../php/deseos/eliDeseos.php",
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
            url: "../php/deseos/eliDeseos.php",
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
        var tr = $(this).closest('tr');
        
        alertify.confirm("¿Esta seguro de eliminar el producto del carrito?",
        function(){
            tr.remove();
            $('#SubTotal').text($('tr').length - 1);

            $.ajax({
                type: "POST",
                url: "../php/carrito/eliminarProdCar.php",
                data: {
                    Id: Id
                },
                success: function (response) {
                    location.reload();
                }
            });
        },
        function(){
            alertify.error('Cancelado');
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
            url: "../php/carrito/modificarDatCar.php",
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
            $.post("../php/getProvincias.php", {
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
            $.post("../php/getDistritos.php", {
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
            url: "../php/login.php",
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
            url: "../php/CerrarSesion.php",
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
            $.post("../php/getSubCategoria.php", {
                IdCategoria: IdCategoria
            },
            function (data) {
                $('#SubCategoria').html(data);
            });
        });
    });
    // Fin

    // Botones de Tarjeta
    var botones = $(".Tarjeta");
    botones.click(function() {
        botones.removeClass('active');
        $(this).addClass('active');
        var id = $(this).attr('id');
        if (id == "Visa" || id == "MasteCard") {
            $('#NumTarjeta').attr({
                "max" : 9999999999999999,
                "min" : 1000000000000000,
                "title" : "Ingrese 16 dígitos"
            });
            $('#CVC').attr({
                "max" : 999,
                "min" : 100,
                "title" : "Ingrese 3 dígitos"
            });
            if (id == "Visa")
                $('#MarcaTarjeta').text("1");
            else
                $('#MarcaTarjeta').text("2");

        } else {
            $('#NumTarjeta').attr({
                "max" : 999999999999999,
                "min" : 100000000000000,
                "title" : "Ingrese 15 dígitos"
            });
            $('#CVC').attr({
                "max" : 9999,
                "min" : 1000,
                "title" : "Ingrese 4 dígitos"
            });
            $('#MarcaTarjeta').text("3");
        }
    });
    // Fin

    $('#cTienda').click(function (e) { 
        e.preventDefault();
        $('#Delivery').addClass('d-none');
        $('#Tienda').removeClass('d-none');
    });

    $('#cDelivery').click(function (e) { 
        e.preventDefault();
        $('#Tienda').addClass('d-none');
        $('#Delivery').removeClass('d-none');
    });

    $('#GuardarCambios').click(function (e) { 
        e.preventDefault();
        var sDireccion = $('#Direccion').val();
        var sDepartamento = $('select[name="Departamento"] option:selected').text();
        var sProvincia = $('select[name="Provincia"] option:selected').text();
        var sDistrito = $('select[name="Distrito"] option:selected').text();

        $('#lblDireccion').html(sDireccion);
        $('#lblDistrito').html(sDistrito);
        $('#lblProvincia').html(sProvincia);
        $('#lblDepartamento').html(sDepartamento);
    });

    $('#PagarCompra').click(function (e) { 
        e.preventDefault();
        if ($('#Tienda').hasClass('d-none')) {
            var TipoEntrega = 2;
        } else{
            var TipoEntrega = 1;
        }
        $.ajax({
            type: "POST",
            url: "../php/insVenta.php",
            data: {
                IdCliente: $('#IdCliente').text(),
                NumTarjeta: $('#NumTarjeta').val(),
                MarcaTarjeta: $('#MarcaTarjeta').text(),
                MM: $('#MM').val(),
                AA: $('#AA').val(),
                CVC: $('#CVC').val(),
                TipoEntrega: TipoEntrega,
                Direccion: $('#lblDireccion').text(),
                Distrito: $('#lblDistrito').text(),
                Provincia: $('#lblProvincia').text(),
                Departamento: $('#lblDepartamento').text()
            },
            success: function (response) {
                if (response == 1) {
                    location.href="recibo.php";
                } else if (response == 0){
                    alertify.alert("No se registro la venta");
                } else {
                    alertify.alert("No se agregaron productos al carrito");
                }
            }
        });
    });
}

$(function () {
    inicio();
});