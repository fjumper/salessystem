<?php
	session_start();

    if(isset($_SESSION['usuario'])) {
        
    } else {
        header("Location: index.php?Debe Iniciar Sesion");
    }

    require '../php/get.php';
    $get = new get();
    $IdUsuario = $_SESSION['usuario'][0]['Id'];
	$result = $get->getSP("spListarDeseosCliente('$IdUsuario')");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php require '../include/head.php'; ?>
    <title>Lista de deseos</title>
</head>

<body>

    <?php require '../include/header.php'; ?>

    <div class="container">
        <h4 class="text-center font-weight-bold mt-5">LISTA DE DESEOS</h4>
        <hr class="my-4">
        <div class="d-flex justify-content-around flex-wrap">
            <?php while ($row = $result->fetch_assoc()) { ?>
                <div class="card card-widht mt-3">
                    <img class="card-img-top" src="<?php echo $row['Imagen']; ?>">
                    <div class="card-body text-center">
                        <h6 class="card-title font-weight-bold linkNomre"><a href="./detallesProducto.php?id=<?php echo $row['IdProductoOferta']; ?>">
                                <?php echo $row['Producto']; ?></a></h6>
                        <p class="card-text">
                            <?php echo 'S/. ' . number_format($row['PrecioVenta'],2); ?>
                        </p>
                    </div>
                    <div class="card-footer d-flex justify-content-around">
                        <button type="button" class="btn btn-outline-primary btnAgregar" id="<?php echo $row['IdProductoOferta']; ?>"><i class="fas fa-cart-plus"></i></button>
                        <button type="button" class="btn btn-outline-danger btnFavoritoEli"><i class="fas fa-trash"></i></button>
                    </div>
                </div>
            <?php } $result->free_result(); ?>
        </div>
    </div>

    <?php require '../include/footer.php'; ?>
    <?php require '../include/script.php'; ?>
</body>

</html>