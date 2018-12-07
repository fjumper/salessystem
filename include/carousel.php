<?php 

    $resultO = $get->getSP("spListarProductosOferta()");
    
?>
<section>
    <div class="">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php while ($rowO = $resultO->fetch_assoc()) { ?>
                    <div class="carousel-item active">
                        <a href="detallesProducto.php?id=<?php echo $rowO['IdProductoVenta']; ?>"><img class="d-block w-100" src="..<?php echo $rowO['Imagen']; ?>" alt=""></a>
                    </div>
                <?php } $resultO->free_result(); ?>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </div>
</section>