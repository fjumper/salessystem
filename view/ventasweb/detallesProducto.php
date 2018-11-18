<?php

    require '../../php/ventasweb/get.php';

    $Id = $_GET['id'];
    
    $get = new get();
    $result = $get->getProductosId($Id);

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <?php include '../../include/head.php'; ?>
    <title>Detalles Producto</title>
</head>

<body>
    <?php include '../../include/ventasweb/header.php'; ?>

    <section class="container d-flex flex-wrap justify-content-around mt-5 mb-5">
        <?php while ($row = $result->fetch_assoc()) { ?>
            <div class="img mt-3 align-self-center">
                <img class="card-img-top card-widht" src="<?php echo $row['Imagen']; ?>">
            </div>
            <div class="card card-widht mt-3">
                <div class="card-body text-center">
                    <h6 class="card-title font-weight-bold linkNomre">
                        <?php echo $row['Producto']; ?>
                    </h6>
                    <p class="card-text">
                        <p class="font-weight-bold text-left">Descripción:</p>
                        <p class="text-justify"><?php echo $row['Descripcion']; ?></p>
                        <p class="font-weight-bold text-left">Peso:</p>
                        <p class="text-center"><?php echo $row['Peso']/1000 .' Kg'; ?></p>
                        <p class="font-weight-bold text-left">Precio:</p>
                        <p class="text-center"><?php echo 'S/. ' . number_format($row['PrecioVenta'],2); ?></p>
                    </p>
                </div>
                <div class="card-footer d-flex justify-content-around">
                    <button type="button" class="btn btn-outline-primary btnAgregar" id="<?php echo $row['IdProductoOferta']; ?>"><i class="fas fa-cart-plus"></i></button>
                    <button type="button" class="btn btn-outline-warning btnFavorito"><i class="far fa-star icoFavorito"></i></button>
                </div>
            </div>
        <?php }?>
    </section>

    <?php include '../../include/ventasweb/footer.php'; ?>
    <?php include '../../include/script.php'; ?>
</body>

</html>