CREATE TABLE `estados_compra` (
    `IdEstadoCompra` int(11) NOT NULL AUTO_INCREMENT,
    `EstadoCompra` varchar(50),
    PRIMARY KEY(IdEstadoCompra)
) ENGINE=InnoDB;

CREATE TABLE `estados_pedido_compra` (
    `IdEstadoPedidoCompra` int(11) NOT NULL AUTO_INCREMENT,
    `EstadoPedidoCompra` varchar(50),
    PRIMARY KEY(IdEstadoPedidoCompra)
) ENGINE=InnoDB;

CREATE TABLE `estados_cuota` (
    `IdEstadoCuota` int(11) NOT NULL AUTO_INCREMENT,
    `EstadosCuota` varchar(50),
    PRIMARY KEY(IdEstadoCuota)
) ENGINE=InnoDB;

CREATE TABLE `estados_entrega` (
    `IdEstadoEntrega` int(11) NOT NULL AUTO_INCREMENT,
    `EstadoEntrega` varchar(50),
    PRIMARY KEY(IdEstadoEntrega)
) ENGINE=InnoDB;

CREATE TABLE `estados_remision` (
    `IdEstadoRemision` int(11) NOT NULL AUTO_INCREMENT,
    `EstadoRemision` varchar(50),
    PRIMARY KEY(IdEstadoRemision)
) ENGINE=InnoDB;

CREATE TABLE `estados_venta` (
    `IdEstadoVenta` int(11) NOT NULL AUTO_INCREMENT,
    `EstadoVenta` varchar(50),
    PRIMARY KEY(IdEstadoVenta)
) ENGINE=InnoDB;

CREATE TABLE `estados_traslado` (
    `IdEstadoTraslado` int(11) NOT NULL,
    `EstadoTraslado` varchar(50),
    PRIMARY KEY(IdEstadoTraslado)
) ENGINE=InnoDB;

CREATE TABLE `tipos_cargo` (
    `IdTipoCargo` int(11) NOT NULL AUTO_INCREMENT,
    `TipoCargo` varchar(50),
    PRIMARY KEY(IdTipoCargo)
) ENGINE=InnoDB;

CREATE TABLE `tipos_compra` (
    `IdTipoCompra` int(11) NOT NULL AUTO_INCREMENT,
    `TipoCompra` varchar(50),
    PRIMARY KEY(IdTipoCompra)
) ENGINE=InnoDB;

CREATE TABLE `tipos_guia` (
    `IdTipoGuia` int(11) NOT NULL AUTO_INCREMENT,
    `TipoGuia` varchar(50),
    PRIMARY KEY(IdTipoGuia)
) ENGINE=InnoDB;

CREATE TABLE `tipos_merma` (
    `IdTipoMerma` int(11) NOT NULL AUTO_INCREMENT,
    `TipoMerma` varchar(50),
    PRIMARY KEY(IdTipoMerma)
) ENGINE=InnoDB;

CREATE TABLE `tipos_pago` (
    `IdTipoPago` int(11) NOT NULL AUTO_INCREMENT,
    `TipoPago` varchar(50),
    PRIMARY KEY(IdTipoPago)
) ENGINE=InnoDB;

CREATE TABLE `tipos_entrega` (
    `IdTipoEntrega` int(11) NOT NULL AUTO_INCREMENT,
    `TipoEntrega` varchar(50),
    PRIMARY KEY(IdTipoEntrega)
) ENGINE=InnoDB;

CREATE TABLE `departamentos` (
    `IdDepartamento` int(11) NOT NULL AUTO_INCREMENT,
    `Departamento` varchar(50),
    PRIMARY KEY(IdDepartamento)
) ENGINE=InnoDB;

CREATE TABLE `provincias` (
    `IdProvincia` int(11) NOT NULL AUTO_INCREMENT,
    `Provincia` varchar(50),
    `FkDepartamento` int(11),
    PRIMARY KEY(IdProvincia),
    INDEX FkDepartamento(FkDepartamento),
    FOREIGN KEY(FkDepartamento) REFERENCES departamentos(IdDepartamento) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `distritos` (
    `IdDistrito` int(11) NOT NULL AUTO_INCREMENT,
    `Distrito` varchar(50),
    `FkProvincia` int(11),
    PRIMARY KEY(IdDistrito),
    INDEX FkProvincia(FkProvincia),
    FOREIGN KEY(FkProvincia) REFERENCES provincias(IdProvincia) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `ubigeos` (
    `IdUbigeo` int(11) NOT NULL AUTO_INCREMENT,
    `FkDepartamento` int(11),
    `FkProvincia` int(11),
    `FkDistrito` int(11),
    PRIMARY KEY(IdUbigeo),
    INDEX FkDepartamento(FkDepartamento),
    INDEX FkProvincia(FkProvincia),
    INDEX FkDistrito(FkDistrito),
    FOREIGN KEY(FkDepartamento) REFERENCES departamentos(IdDepartamento) ON DELETE CASCADE,
    FOREIGN KEY(FkProvincia) REFERENCES provincias(IdProvincia) ON DELETE CASCADE,
    FOREIGN KEY(FkDistrito) REFERENCES distritos(IdDistrito) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `generos` (
    `IdGenero` int(11) NOT NULL AUTO_INCREMENT,
    `Genero` varchar(9),
    PRIMARY KEY(IdGenero)
) ENGINE=InnoDB;

CREATE TABLE `coordenadas` (
    `IdCoordenada` int(11) NOT NULL AUTO_INCREMENT,
    `Latitud` varchar(50),
    `Longitud` varchar(50),
    PRIMARY KEY(IdCoordenada)
) ENGINE=InnoDB;

CREATE TABLE `categorias` (
    `IdCategoria` int(11) NOT NULL AUTO_INCREMENT,
    `Categoria` varchar(50),
    `Descripcion` text,
    PRIMARY KEY(IdCategoria)
) ENGINE=InnoDB;

CREATE TABLE `sub_categorias` (
    `IdSubCategoria` int(11) NOT NULL AUTO_INCREMENT,
    `SubCategoria` varchar(50),
    `FkCategoria` int(11),
    `Descripcion` text,
    PRIMARY KEY(IdSubCategoria),
    INDEX FkCategoria(FkCategoria),
    FOREIGN KEY(FkCategoria) REFERENCES categorias(IdCategoria) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `cierres_caja` (
    `IdCierreCaja` int(11) NOT NULL AUTO_INCREMENT,
    `HoraInicio` time,
    `HoraFin` time,
    `FechaHoraCierre` date,
    PRIMARY KEY(IdCierreCaja)
) ENGINE=InnoDB;

CREATE TABLE `cajas` (
    `IdCaja` int(11) NOT NULL AUTO_INCREMENT,
    `Operativo` varchar(100),
    `FkCierreCaja` int(11),
    PRIMARY KEY(IdCaja),
    INDEX FkCierreCaja (FkCierreCaja),
    FOREIGN KEY(FkCierreCaja) REFERENCES cierres_caja(IdCierreCaja) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `precios_venta` (
    `IdPrecioVenta` int(11) NOT NULL AUTO_INCREMENT,
    `NombreOferta` varchar(100),
    `FechaHoraInicio` datetime,
    `FechaHoraFin` datetime,
    `PrecioVenta` decimal(10,0),
    `CanjeBonus` int(11),
    PRIMARY KEY(IdPrecioVenta)
) ENGINE=InnoDB;

CREATE TABLE `usuarios` (
  `IdUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(40),
  `UserName` varchar(20),
  `UserPass` varchar(20),
  PRIMARY KEY(IdUsuario)
) ENGINE=InnoDB;

CREATE TABLE `social_login` (
    `IdSocialLogin` int(11) NOT NULL AUTO_INCREMENT,
    `FkUsuario` int(11),
    `IdSocial` varchar(100),
    `Servicio` varchar(50),
    PRIMARY KEY(IdSocialLogin),
    INDEX FkUsuario(FkUsuario),
    FOREIGN KEY(FkUsuario) REFERENCES usuarios(IdUsuario) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `empleados` (
    `IdEmpleado` varchar(11) NOT NULL,
    `FkUsuario` int(11),
    `Nombre` varchar(40),
    `ApellidoP` varchar(40),
    `ApellidoM` varchar(40),
    `FkGenero` int(11),
    `FechaNacimiento` date,
    `FkTipoCargo` int(11),
    `Celular` int(9),
    `Direccion` varchar(40),
    `Fotografia` varchar(100) COMMENT 'Ruta: /Img/Empleados/imagen.jpg',
    `FkCaja` int(11),
    PRIMARY KEY(IdEmpleado),
    INDEX FkUsuario(FkUsuario),
    INDEX FkGenero(FkGenero),
    INDEX FkTipoCargo(FkTipoCargo),
    INDEX FkCaja(FkCaja),
    FOREIGN KEY(FkUsuario) REFERENCES usuarios(IdUsuario) ON DELETE CASCADE,
    FOREIGN KEY(FkGenero) REFERENCES generos(IdGenero) ON DELETE CASCADE,
    FOREIGN KEY(FkTipoCargo) REFERENCES tipos_cargo(IdTipoCargo) ON DELETE CASCADE,
    FOREIGN KEY(FkCaja) REFERENCES cajas(IdCaja) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `auditorias` (
    `IdAuditoria` int(11) NOT NULL AUTO_INCREMENT,
    `FkEmpleado` varchar(11),
    `FechaHora` datetime,
    `Descripccion` varchar(500),
    `Modulo` varchar(15),
    PRIMARY KEY(IdAuditoria),
    INDEX FkEmpleado(FkEmpleado),
    FOREIGN KEY(FkEmpleado) REFERENCES empleados(IdEmpleado) ON DELETE CASCADE
)ENGINE=InnoDB;

CREATE TABLE `clientes` (
    `IdCliente` varchar(11) NOT NULL,
    `FkUsuario` int(11),
    `Nombre` varchar(40),
    `ApellidoP` varchar(40),
    `ApellidoM` varchar(40),
    `FkGenero` int(11),
    `FechaNacimiento` date,
    `RazonSocial` varchar(200),
    `FkUbigeo` int(11),
    `Direccion` varchar(100),
    `FkCoordenada` int(11),
    PRIMARY KEY(IdCliente),
    INDEX FkUsuario(FkUsuario),
    INDEX FkGenero(FkGenero),
    INDEX FkUbigeo(FkUbigeo),
    INDEX FkCoordenada(FkCoordenada),
    FOREIGN KEY(FkUsuario) REFERENCES usuarios(IdUsuario) ON DELETE CASCADE,
    FOREIGN KEY(FkGenero) REFERENCES generos(IdGenero) ON DELETE CASCADE,
    FOREIGN KEY(FkUbigeo) REFERENCES ubigeos(IdUbigeo) ON DELETE CASCADE,
    FOREIGN KEY(FkCoordenada) REFERENCES coordenadas(IdCoordenada) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `bonos` (
    `IdBonos` int(11) NOT NULL AUTO_INCREMENT,
    `FkCliente` varchar(11),
    `Cantidad` int(11),
    PRIMARY KEY(IdBonos)
) ENGINE=InnoDB;

CREATE TABLE `tiendas` (
    `IdTienda` int(11) NOT NULL AUTO_INCREMENT,
    `NombreTienda` varchar(40),
    `FkUbigeo` int(11),
    `Direccion` varchar(40),
    `FkCoordenada` int(11),
    PRIMARY KEY(IdTienda),
    INDEX FkUbigeo(FkUbigeo),
    INDEX FkCoordenada(FkCoordenada),
    FOREIGN KEY(FkUbigeo) REFERENCES ubigeos(IdUbigeo) ON DELETE CASCADE,
    FOREIGN KEY(FkCoordenada) REFERENCES coordenadas(IdCoordenada) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `productos` (
    `IdProducto` int(11) NOT NULL AUTO_INCREMENT,
    `CodBarras` varchar(13),
    `Producto` varchar(100),
    `CodigoLote` varchar(10),
    `FkSubCategoria` int(11),
    `Descripcion` varchar(100),
    `PrecioCompra` decimal(10,0),
    `Volumen` varchar(20) COMMENT 'Largo:cm Ancho:cm alto:cm',
    `Peso` varchar(20) COMMENT 'Peso:g',
    `Imagen` varchar(100) COMMENT 'Ruta: /Img/Productos/imagen.jpg',
    `Cantidad` int(11),
    `Perecible` bit COMMENT  '0 ó 1',
    PRIMARY KEY(IdProducto),
    INDEX FkSubCategoria(FkSubCategoria),
    FOREIGN KEY(FkSubCategoria) REFERENCES sub_categorias(IdSubCategoria) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `productos_venta` (
    `IdProductoVenta` int(11) NOT NULL AUTO_INCREMENT,
    `FkProducto` int(11),
    `FkTienda` int(11),
    `FkPrecioVenta` int(11),
    `Prioridad` int(11),
    `BonosProducto` int(11),
    `StockTienda` int(11),
    `StockMinimo` int(11),
    PRIMARY KEY(IdProductoVenta),
    INDEX FkProducto (FkProducto),
    INDEX FkTienda(FkTienda),
    INDEX FkPrecioVenta (FkPrecioVenta),
    FOREIGN KEY(FkProducto) REFERENCES productos(IdProducto) ON DELETE CASCADE,
    FOREIGN KEY(FkTienda) REFERENCES tiendas(IdTienda) ON DELETE CASCADE,
    FOREIGN KEY(FkPrecioVenta) REFERENCES precios_venta(IdPrecioVenta) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `canjes_bono` (
    `IdCanjeBono` int(11) NOT NULL AUTO_INCREMENT,
    `FkCliente` varchar(11),
    `FkProductoVenta` int(11),
    `FechaCanje` int(11),
    `HoraCanje` time,
    PRIMARY KEY(IdCanjeBono),
    INDEX FkCliente(FkCliente),
    FOREIGN KEY(FkCliente) REFERENCES clientes(IdCliente) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `proveedores` (
    `IdProveedor` varchar(11) NOT NULL,
    `RazonSocial` varchar(200) ,
    `Categoria` varchar(40),
    `Celular` int(9),
    `Email` varchar(40),
    `Direccion` varchar(40),
    `FkUbigeo` int(9),
    PRIMARY KEY(IdProveedor),
    INDEX FkUbigeo(FkUbigeo),
    FOREIGN KEY(FkUbigeo) REFERENCES ubigeos(IdUbigeo) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `cuentas_banco` (
    `IdCuentaBanco` int(11) NOT NULL AUTO_INCREMENT,
    `FkProveedor` varchar(11),
    `NumeroCuenta` varchar(20),
    `NombreBanco` varchar(40),
    PRIMARY KEY(IdCuentaBanco),
    INDEX FkProveedor(FkProveedor),
    FOREIGN KEY(FkProveedor) REFERENCES proveedores(IdProveedor) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `pedidos_compra` (
    `IdPedidoCompra` int(11) NOT NULL AUTO_INCREMENT,
    `FkProducto` int(11),
    `FkProveedor` varchar(11),
    `Cantidad` int(11),
    `FechaHoraVencimiento` datetime,
    `FechaHoraPedido` datetime,
    `FkEstadoPedidoCompra` int(11),
    `PrecioCompra` decimal(10,0),
    `FkTiendaDestino` int(11),
    `Observacion` varchar(250),
    PRIMARY KEY(IdPedidoCompra),
    INDEX FkProducto(FkProducto),
    INDEX FkProveedor(FkProveedor),
    INDEX FkEstadoPedidoCompra(FkEstadoPedidoCompra),
    INDEX FkTiendaDestino(FkTiendaDestino),
    FOREIGN KEY(FkProducto) REFERENCES productos(IdProducto) ON DELETE CASCADE,
    FOREIGN KEY(FkProveedor) REFERENCES proveedores(IdProveedor) ON DELETE CASCADE,
    FOREIGN KEY(FkEstadoPedidoCompra) REFERENCES estados_pedido_compra(IdEstadoPedidoCompra) ON DELETE CASCADE,
    FOREIGN KEY(FkTiendaDestino) REFERENCES tiendas(IdTienda) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `consolidados_pedido` (
    `IdConsolidadoPedido` int(11) NOT NULL AUTO_INCREMENT,
    `FkPedidoCompra` int(11),
    `Cantidad` int(11),
    `FechaHoraPedido` datetime,
    PRIMARY KEY(IdConsolidadoPedido),
    INDEX FkPedidoCompra(FkPedidoCompra),
    FOREIGN KEY(FkPedidoCompra) REFERENCES pedidos_compra(IdPedidoCompra) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `cuotas` (
    `IdCuota` int(11) NOT NULL AUTO_INCREMENT,
    `MontoCuota` decimal(10,0),
    `Cantidad` int(11),
    `FechaHoraPago` datetime,
    `FkEstadoCuota` int(11),
    PRIMARY KEY(IdCuota),
    INDEX FkEstadoCuota(FkEstadoCuota),
    FOREIGN KEY(FkEstadoCuota) REFERENCES estados_cuota(IdEstadoCuota) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `consolidado_pedido` (
    `IdConsolidadoPedido` int(11) NOT NULL AUTO_INCREMENT,
    `FkPedidoCompra` int(11),
    `Cantidad` int(11),
    `FechaHoraPedido` datetime,
    PRIMARY KEY(IdConsolidadoPedido),
    INDEX FkPedidoCompra(FkPedidoCompra),
    FOREIGN KEY(FkPedidoCompra) REFERENCES pedidos_compra(IdPedidoCompra) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `compras` (
    `IdCompras` int(11) NOT NULL AUTO_INCREMENT,
    `FkConsolidadoPedido` int(11),
    `FkTipoCompra` int(11),
    `FkEmpleado` varchar(11),
    `FkProveedor` varchar(11),
    `FechaHoraCompra` datetime,
    `NumeroComprobante` int(11),
    `FkCuota` int(11),
    `FkEstadoCompra` int(11),
    PRIMARY KEY(IdCompras),
    INDEX FkConsolidadoPedido(FkConsolidadoPedido),
    INDEX FkTipoCompra(FkTipoCompra),
    INDEX FkEmpleado(FkEmpleado),
    INDEX FkProveedor(FkProveedor),
    INDEX FkCuota(FkCuota),
    INDEX FkEstadoCompra(FkEstadoCompra),
    FOREIGN KEY(FkConsolidadoPedido) REFERENCES consolidados_pedido(IdConsolidadoPedido) ON DELETE CASCADE,
    FOREIGN KEY(FkTipoCompra) REFERENCES tipos_compra(IdTipoCompra) ON DELETE CASCADE,
    FOREIGN KEY(FkEmpleado) REFERENCES empleados(IdEmpleado) ON DELETE CASCADE,
    FOREIGN KEY(FkProveedor) REFERENCES proveedores(IdProveedor) ON DELETE CASCADE,
    FOREIGN KEY(FkCuota) REFERENCES cuotas(IdCuota) ON DELETE CASCADE,
    FOREIGN KEY(FkEstadoCompra) REFERENCES estados_compra(IdEstadoCompra) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `guia_remision` (
    `IdGuiaRemision` int(11) NOT NULL AUTO_INCREMENT,
    `FkEstadoRemision` int(11),
    `FkTiendaSalida` int(11),
    `FkTiendaDestino` int(11),
    `FkTipoGuia` int(11),
    `FechaHoraInicioTraslado` datetime,
    `FechaHoraFinTraslado` datetime,
    `FkAuditoria` int(11),
    PRIMARY KEY(IdGuiaRemision),
    INDEX FkEstadoRemision(FkEstadoRemision),
    INDEX FkTiendaSalida(FkTiendaSalida),
    INDEX FkTiendaDestino(FkTiendaDestino),
    INDEX FkTipoGuia(FkTipoGuia),
    INDEX FkAuditoria(FkAuditoria),
    FOREIGN KEY(FkEstadoRemision) REFERENCES estados_remision(IdEstadoRemision) ON DELETE CASCADE,
    FOREIGN KEY(FkTiendaSalida) REFERENCES tiendas(IdTienda) ON DELETE CASCADE,
    FOREIGN KEY(FkTiendaDestino) REFERENCES tiendas(IdTienda) ON DELETE CASCADE,
    FOREIGN KEY(FkTipoGuia) REFERENCES tipos_guia(IdTipoGuia) ON DELETE CASCADE,
    FOREIGN KEY(FkAuditoria) REFERENCES auditorias(IdAuditoria) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `detalles_traslado` (
    `IdDetalleTraslado` int(11) NOT NULL AUTO_INCREMENT,
    `FkProductoVenta` int(11),
    `FkGuiaRemision` int(9),
    `Cantidad` int(11),
    `Serial` int(11),
    PRIMARY KEY(IdDetalleTraslado),
    INDEX FkProductoVenta(FkProductoVenta),
    INDEX FkGuiaRemision(FkGuiaRemision),
    FOREIGN KEY(FkProductoVenta) REFERENCES productos_venta(IdProductoVenta) ON DELETE CASCADE
    FOREIGN KEY(FkGuiaRemision) REFERENCES guia_remision(IdGuiaRemision) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `merma_desmedro` (
    `IdMermaDesmedro` int(11) NOT NULL AUTO_INCREMENT,
    `FkTipoMerma` int(11),
    `FkProductoVenta` int(11),
    `Cantidad` int(11),
    `RazonMerma` int(11),
    `FkEmpleado` varchar(11),
    `FechaHoraDeteccion` datetime,
    `FechaHoraRegistro` datetime,
    `Accion` varchar(100),
    `FkAuditoria` int(11),
    PRIMARY KEY(IdMermaDesmedro),
    INDEX FkTipoMerma(FkTipoMerma),
    INDEX FkProductoVenta(FkProductoVenta),
    INDEX FkEmpleado(FkEmpleado),
    INDEX FkAuditoria(FkAuditoria),
    FOREIGN KEY(FkTipoMerma) REFERENCES tipos_merma(IdTipoMerma) ON DELETE CASCADE,
    FOREIGN KEY(FkProductoVenta) REFERENCES productos_venta(IdProductoVenta) ON DELETE CASCADE,
    FOREIGN KEY(FkEmpleado) REFERENCES empleados(IdEmpleado) ON DELETE CASCADE,
    FOREIGN KEY(FkAuditoria) REFERENCES auditorias(IdAuditoria) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `entregas` (
    `IdEntrega` int(11) NOT NULL AUTO_INCREMENT,
    `FkCliente` varchar(11),
    `FkTipoEntrega` int(11),
    `FechaHoraEntrega` datetime,
    `FkEmpleadoEntrega` varchar(11),
    `FkEstadoEntrega` int(11),
    `Observaciones` text,
    `CodigoEntrega` varchar(20),
    `FkUbigeo` int(11),
    `Direccion` varchar(200),
    `FkCoordenada` int(11),
    PRIMARY KEY(IdEntrega),
    INDEX FkCliente(FkCliente),
    INDEX FkTipoEntrega(FkTipoEntrega),
    INDEX FkEmpleadoEntrega(FkEmpleadoEntrega),
    INDEX FkEstadoEntrega(FkEstadoEntrega),
    INDEX FkUbigeo(FkUbigeo),
    INDEX FkCoordenada(FkCoordenada),
    FOREIGN KEY(FkCliente) REFERENCES clientes(IdCliente) ON DELETE CASCADE,
    FOREIGN KEY(FkTipoEntrega) REFERENCES tipos_entrega(IdTipoEntrega) ON DELETE CASCADE,
    FOREIGN KEY(FkEmpleadoEntrega) REFERENCES empleados(IdEmpleado) ON DELETE CASCADE,
    FOREIGN KEY(FkEstadoEntrega) REFERENCES estados_entrega(IdEstadoEntrega) ON DELETE CASCADE,
    FOREIGN KEY(FkUbigeo) REFERENCES ubigeos(IdUbigeo) ON DELETE CASCADE,
    FOREIGN KEY(FkCoordenada) REFERENCES coordenadas(IdCoordenada) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `marcas_tarjeta` (
    `IdMarcaTarjeta` int(11) NOT NULL AUTO_INCREMENT,
    `MarcaTarjeta` varchar(50),
    PRIMARY KEY(IdMarcaTarjeta)
) ENGINE=InnoDB;

CREATE TABLE `tarjetas` (
    `IdTarjeta` int(11) NOT NULL AUTO_INCREMENT,
    `Numero` varchar(16),
    `FkMarcaTarjeta` int(11),
    `FechaCaducidad` varchar(5) COMMENT 'Mes/Año',
    `CVC` int(4),
    PRIMARY KEY(IdTarjeta),
    INDEX FkMarcaTarjeta(FkMarcaTarjeta),
    FOREIGN KEY(FkMarcaTarjeta) REFERENCES marcas_tarjeta(IdMarcaTarjeta) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `ventas` (
    `IdVenta` int(11) NOT NULL AUTO_INCREMENT,
    `FechaHoraVenta` datetime,
    `FkTipoPago` int(11),
    `FkTarjeta` int(11),
    `FkCliente` varchar(11),
    `FkEmpleado` varchar(11),
    `FkEstadoVenta` int(11),
    `FkEntrega` int(11),
    `CostoAdicional` decimal(10,0),
    PRIMARY KEY(IdVenta),
    INDEX FkTipoPago(FkTipoPago),
    INDEX FkTarjeta(FkTarjeta),
    INDEX FkCliente(FkCliente),
    INDEX FkEmpleado(FkEmpleado),
    INDEX FkEstadoVenta(FkEstadoVenta),
    INDEX FkEntrega(FkEntrega),
    FOREIGN KEY(FkTipoPago) REFERENCES tipos_pago(IdTipoPago) ON DELETE CASCADE,
    FOREIGN KEY(FkTarjeta) REFERENCES tarjetas(IdTarjeta) ON DELETE CASCADE,
    FOREIGN KEY(FkCliente) REFERENCES clientes(IdCliente) ON DELETE CASCADE,
    FOREIGN KEY(FkEmpleado) REFERENCES empleados(IdEmpleado) ON DELETE CASCADE,
    FOREIGN KEY(FkEstadoVenta) REFERENCES estados_venta(IdEstadoVenta) ON DELETE CASCADE,
    FOREIGN KEY(FkEntrega) REFERENCES entregas(IdEntrega) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `detalles_venta` (
    `IdDetalleVenta` int(11) NOT NULL AUTO_INCREMENT,
    `FkVenta` int(11),
    `FkProductoVenta` int(11),
    `Cantidad` int(11),
    PRIMARY KEY(IdDetalleVenta),
    INDEX FkVenta(FkVenta),
    INDEX FkProductoVenta(FkProductoVenta),
    FOREIGN KEY(FkVenta) REFERENCES ventas(IdVenta) ON DELETE CASCADE,
    FOREIGN KEY(FkProductoVenta) REFERENCES productos_venta(IdProductoVenta) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `listas_deseo` (
    `IdListaDeseo` int(11) NOT NULL AUTO_INCREMENT,
    `FkCliente` varchar(11),
    `FkProductoVenta` int(11),
    `FechaRegistro` date,
    PRIMARY KEY(IdListaDeseo),
    INDEX FkCliente(FkCliente),
    INDEX FkProductoVenta(FkProductoVenta),
    FOREIGN KEY(FkCliente) REFERENCES clientes(IdCliente) ON DELETE CASCADE,
    FOREIGN KEY(FkProductoVenta) REFERENCES productos_venta(IdProductoVenta) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `promociones` (
    `IdPromocion` int(11) NOT NULL AUTO_INCREMENT,
    `FkProductoVenta` int(11),
    `FechaHoraInicio` datetime,
    `FechaHoraFin` datetime,
    `StockTotal` int(11),
    `StockFinal` int(11),
    PRIMARY KEY(IdPromocion),
    INDEX FkProductoVenta(FkProductoVenta),
    FOREIGN KEY(FkProductoVenta) REFERENCES productos_venta(IdProductoVenta) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `promociones_cliente` (
    `IdPromocionCliente` int(11) NOT NULL AUTO_INCREMENT,
    `FkCliente` varchar(11),
    `FkPromocion` int(11),
    PRIMARY KEY(IdPromocionCliente),
    INDEX FkCliente(FkCliente),
    INDEX FkPromocion(FkPromocion),
    FOREIGN KEY(FkCliente) REFERENCES clientes(IdCliente) ON DELETE CASCADE,
    FOREIGN KEY(FkPromocion) REFERENCES promociones(IdPromocion) ON DELETE CASCADE
) ENGINE=InnoDB;