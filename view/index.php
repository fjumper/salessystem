<?php
	session_start();

	if(isset($_SESSION['usuario'])) {
        
    } else {
        $_SESSION['usuario'] = null;
    }

    require '../php/get.php';
	$get = new get();
	$resultV = $get->getSP("spListarProdCatalogo()");
    $resultT = $get->getSP("spListarProdCatalogo()");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    
	<?php require '../include/head.php'; ?>
	<title>Emporio</title>

</head>
<body>

	<?php require '../include/header.php'; ?>
	<?php require '../include/carousel.php'; ?>

	<section>
        <form action="">
            <div class="container">
                <h4 class="text-center font-weight-bold mt-5">LOS MÁS VENDIDOS</h4>
                <hr class="my-4">
                <div class="d-flex justify-content-around flex-wrap">
                    <?php while ($rowV = $resultV->fetch_assoc()) { 
                        if($rowV['Prioridad'] == 2){ ?>
                        <div class="card card-widht mt-3">
                            <img class="card-img-top" src="<?php echo $rowV['Imagen']; ?>" >
                            <div class="card-body text-center">
                                <h6 class="card-title font-weight-bold linkNomre"><a href="./detallesProducto.php?id=<?php echo $rowV['IdProductoOferta']; ?>" ><?php echo $rowV['Producto']; ?></a></h6>
                                <p class="card-text"><?php echo 'S/. ' . number_format($rowV['PrecioVenta'],2); ?></p>
                            </div>
                            <div class="card-footer d-flex justify-content-around">
                                <button type="button" class="btn btn-outline-primary btnAgregar" id="<?php echo $rowV['IdProductoOferta']; ?>"><i class="fas fa-cart-plus"></i></button>
                                <button type="button" class="btn btn-outline-warning btnFavorito"><i class="far fa-star icoFavorito"></i></button>
                            </div>
                        </div>
                    <?php }} $resultV->free_result(); ?>
				</div>
				<h4 class="text-center font-weight-bold mt-5">LO MEJOR EN TECNOLOGÍA</h4>
                <hr class="my-4">
                <div class="d-flex justify-content-around flex-wrap">
                    <?php while ($rowT = $resultT->fetch_assoc()) { 
                        if($rowT['Prioridad'] == 3){ ?>
                        <div class="card card-widht mt-3">
                            <img class="card-img-top" src="<?php echo $rowT['Imagen']; ?>" >
                            <div class="card-body text-center">
                                <h6 class="card-title font-weight-bold linkNomre"><a href="./detallesProducto.php?id=<?php echo $rowT['IdProductoOferta']; ?>" ><?php echo $rowT['Producto']; ?></a></h6>
                                <p class="card-text"><?php echo 'S/. ' . number_format($rowT['PrecioVenta'],2); ?></p>
                            </div>
                            <div class="card-footer d-flex justify-content-around">
                                <button type="button" class="btn btn-outline-primary btnAgregar" id="<?php echo $rowT['IdProductoOferta']; ?>"><i class="fas fa-cart-plus"></i></button>
                                <button type="button" class="btn btn-outline-warning btnFavorito"><i class="far fa-star icoFavorito"></i></button>
                            </div>
                        </div>
                    <?php }} $resultT->free_result(); ?>
                </div>
            </div>
        </form>
    </section>
    <?php require '../include/footer.php'; ?>
    <?php require '../include/script.php'; ?>

</body>
</html>