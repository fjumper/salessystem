CREATE PROCEDURE `spListarEstadoEntrega`()
BEGIN
SELECT *FROM estados_entrega
END

CREATE PROCEDURE `spListarEmpleados`(
    in `_TipoCargo` VARCHAR(50)
    )
BEGIN
SELECT IdEmpleado, ApellidoP, ApellidoM, Nombre FROM empleados E
INNER JOIN tipos_cargo TC ON emp.FkTipoCargo = tipCar.IdTipoCargo
WHERE
TC.TipoCargo = _TipoCargo
END

CREATE PROCEDURE `spListarEntregas`()
BEGIN
SELECT
NT.IdEntrega, NT.CodigoEntrega, cli.ApellidoP AS 'ApellidoPCli',
cli.Nombre AS 'nombreCli',tipos_entrega.TipoEntrega, cli.DirecciONEntrega,
vent.FechaHoraVenta, NT.FechaHoraEntrega, estados_entrega.EstadoEntrega,
emp.ApellidoP, emp.Nombre, NT.Volumen,
NT.Peso, ubigeos.FkDepartamento, ubigeos.FkProvincia,
ubigeos.FkDistrito, NT.ObservaciONes
FROM entregas AS NT 
INNER JOIN clientes AS cli ON NT.FkCliente = cli.IdCliente 
INNER JOIN tipos_entrega ON NT.FkTipoEntrega = tipos_entrega.IdTipoEntrega 
INNER JOIN empleados AS emp ON NT.FkEmpleadoEntrega = emp.IdEmpleado 
INNER JOIN estados_entrega ON NT.FkEstadoEntrega = estados_entrega.IdEstadoEntrega 
INNER JOIN ubigeos ON NT.FkUbigeo = ubigeos.IdUbigeo
INNER JOIN ventas vent ON NT.IdEntrega = vent.IdVenta
END

CREATE PROCEDURE `spInsClientes`(
    IN `_IdCliente` VARCHAR(11),
    IN `_Nombre` VARCHAR(40),
    IN `_ApellidoP` VARCHAR(40),
    IN `_ApellidoM` VARCHAR(40),
    IN `_FkGenero` INT(11),
    IN `_FechaNacimiento` DATE,
    IN `_RazonSocial` VARCHAR(200),
    IN `_Direccion` VARCHAR(100)
BEGIN
INSERT INTO clientes VALUES(
    _IdCliente,
    (SELECT MAX(IdUsuario) AS IdUsuario FROM usuarios),
    _Nombre,
    _ApellidoP,
    _ApellidoM,
    _FkGenero,
    _FechaNacimiento,
    _RazonSocial,
    (SELECT MAX(IdUbigeo) AS IdUbigeo FROM ubigeos),
    _Direccion,
    (SELECT MAX(IdCoordenada) AS IdCoordenada FROM coordenadas)
)
END

CREATE PROCEDURE `spInsCoordenadas`(
    IN `_Latitud` VARCHAR(20),
    IN `_Longitud` VARCHAR(20))
BEGIN
INSERT INTO coordenadas VALUES(null, _Latitud, _Longitud)
END

CREATE PROCEDURE `spInsUbigeos`(
    IN `_Departamento` INT(11),
    IN `_Provincia` INT(11),
    IN `_Distrito` INT(11))
BEGIN
INSERT INTO ubigeos VALUES(null, _Departamento, _Provincia, _Distrito)
END

CREATE PROCEDURE `spInsUsuarios`(
    IN `_Email` VARCHAR(40),
    IN `_UserName` VARCHAR(20),
    IN `_UserPass` VARCHAR(20))
BEGIN
INSERT INTO usuarios VALUES(null, _Email, _UserName, _UserPass)
END

CREATE PROCEDURE `spListarPedidos`()
BEGIN
SELECT
IdPedidoCompra, pr.Producto, prov.RazonSocial,
Cantidad, FechaVencimiento, FechaPedido,
ep.EstadoPedidoCompra, PrecioCompra, td.NombreTienda,
Observacion
FROM pedidos_compra pc
INNER JOIN productos pr ON pc.FkProducto=pr.idproducto
INNER JOIN proveedores prov ON pc.FkProveedor=prov.IdProveedor
INNER JOIN estados_pedido_compra ep ON pc.FkEstadoPedidoCompra=ep.IdEstadoPedidoCompra
INNER JOIN tiendas td ON pc.FkTiendaDestino=td.IdTienda;
END

CREATE PROCEDURE `spBuscarCategoria`(
    IN `_Categoria` VARCHAR(50))
BEGIN
SELECT *FROM categorias WHERE Categoria like CONCAT('%',_Categoria)
END

CREATE PROCEDURE `spListarEstadosOrdenCompra`()
BEGIN
SELECT IdEstadoCompra id , EstadoCompra co FROM estados_compra
END

CREATE PROCEDURE `spListarEstadosRemision`()
BEGIN
SELECT `IdEstadoRemision` id, `EstadoRemision` re FROM `estados_remision` ORDER BY `EstadoRemision`
END

CREATE PROCEDURE `spListarGuiasTraslados`(IN `es` VARCHAR(5), IN `ti` VARCHAR(5))
BEGIN
SELECT
`IdGuiaRemision` id,`FechaInicioTraslado` inicio,`FechaFinTraslado` fin,
`FkTiendaDestino` tFin, `NombreTienda`nom, `Direccion`dire,
`FkEstadoRemision` esta FROM `guia_remision`g 
INNER JOIN `tiendas` ti
ON ti.`IdTienda`=g.`FkTiendaDestino`
WHERE `FkEstadoRemision` like CONCAT('%', es) and `FkTiendaDestino` like CONCAT('%', ti)
END

CREATE PROCEDURE `spListartiendas`()
BEGIN
SELECT *FROM tiendas
END

CREATE PROCEDURE `splistacaja`()
BEGIN
SELECT *from cajas
END

CREATE PROCEDURE `spListarDepartamentos`()
SELECT *FROM departamentos ORDER by Departamento ASC


CREATE PROCEDURE `spListarProvincias`(
    IN `p_FkDepartamento` INT(11))
SELECT *FROM provincias
WHERE FkDepartamento = p_FkDepartamento ORDER BY Provincia ASC

CREATE PROCEDURE `spListarDistritos`(
    IN `p_FkProvincia` INT(11))
SELECT *FROM distritos
WHERE FkProvincia = P_FkProvincia ORDER BY Distrito ASC


CREATE PROCEDURE `spListarGeneros`()
SELECT *FROM generos


CREATE PROCEDURE `spListarTipoCargo`()
BEGIN
SELECT *FROM tipos_cargo
END

CREATE PROCEDURE `spListarProveedor`()
SELECT *FROM proveedores ORDER BY RazonSocial

-- SP MAESTROS
CREATE PROCEDURE `spListarCategoria`()
SELECT * from categorias

CREATE PROCEDURE `spListarSubcategorias`(
    IN `p_FkCategoria` INT(11))
SELECT * FROM sub_categorias
WHERE FKCategoria = p_FkCategoria ORDER BY SubCategoria ASC

CREATE PROCEDURE `spListarTienda`()
SELECT * FROM tiendas ORDER BY NombreTienda