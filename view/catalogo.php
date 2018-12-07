<?php
    session_start();

	if(isset($_SESSION['usuario'])) {
        
    } else {
        $_SESSION['usuario'] = null;
    }

    require '../php/get.php';
	$get = new get();
    
    $resultC = $get->getSP("spListarCategoria()"); 

    if(isset($_POST['Categoria']) && isset($_POST['SubCategoria']) && isset($_POST['pMin']) && isset($_POST['pMax'])){
        $Categoria = $_POST['Categoria'];
        $SubCategoria = $_POST['SubCategoria'];
        $pMin = $_POST['pMin'];
        $pMax = $_POST['pMax'];
        if ($Categoria != 0 && $SubCategoria != 0 && $pMin != null && $pMax != null) {
            $resultPC = $get->getSP("spListarProductoCatSubCatMinMax('$Categoria', '$SubCategoria', '$pMin', '$pMax')");
        } elseif ($Categoria > 0 && $SubCategoria > 0) {
            $resultPC = $get->getSP("spListarProductoCatSubCat('$Categoria', '$SubCategoria')");
        }elseif($Categoria != 0) {
            $resultPC = $get->getSP("spListarProductoCategoria('$Categoria')");
        }else {
            $resultPC = $get->getSP("spListarProdCatalogo()");
        }
    } elseif(isset($_GET['Cat'])) {
        $Cat = $_GET['Cat'];
        $resultPC = $get->getSP("spListarProductoCategoria('$Cat')");
    } elseif(isset($_POST['Producto'])) {
        $Producto = $_POST['Producto'];
        $resultPC = $get->getSP("spListarProductoNombre('$Producto')");
    } else {
        $resultPC = $get->getSP("spListarProdCatalogo()");
    }
?>

<!DOCTYPE html>
<html lang="es">

<head>

    <?php require '../include/head.php'; ?>
    <title>Emporio</title>

</head>

<body>

    <?php require '../include/header.php'; ?>

    <section class="container-fluid">
        <h4 class="text-center font-weight-bold mt-5">CÁTALOGO DE PRODUCTOS</h4>
        <hr class="my-4">
        <div class="form-row mt-5">
            <form name="BuscarProducto" action="catalogo.php" method="POST" class="col-md-3">
                <div class="form-group col-md-8 m-auto">
                    <div class="row">
                        <label>Categoria</label>
                    </div>
                    <div class="row">
                        <select name="Categoria" id="Categoria" class="form-control">
                            <option value="0">Todos</option>
                            <?php while ($rowC = $resultC->fetch_assoc()) { ?>
                                <option value="<?php echo $rowC['IdCategoria']; ?>" > 
                                    <?php echo $rowC['Categoria']; ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group col-md-8 ml-auto mr-auto mt-3">
                    <div class="row">
                        <label>Sub Categoria</label>
                    </div>
                    <div class="row">
                        <select name="SubCategoria" id="SubCategoria" class="form-control">
                            <option value="0">Seleccione</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-md-8 ml-auto mr-auto mt-3">
                    <div class="row">
                        <label>Precio</label>
                    </div>
                    <div class="row">
                        <input type="number" name="pMin" min="0" max="10000" id="pMin" class="form-control col-md-5" placeholder="Min">
                        <p class="col-md-2"></p>
                        <input type="number" name="pMax" min="0" max="10000" id="pMax" class="form-control col-md-5" placeholder="Max">
                    </div>
                </div>
                <div class="form-group col-md-8 ml-auto mr-auto mt-3">
                    <div class="row">
                        <button class="btn btn-outline-primary col-md-5" type="submit"><i class="fas fa-search"></i></button>
                        <p class="col-md-2"></p>
                        <button class="btn btn-outline-primary col-md-5" type="reset"><i class="fas fa-broom"></i></button>
                    </div>
                </div>
            </form>
            <div class="col-md-9">
                <?php if (isset($_POST['Categoria']) || isset($_GET['Cat'])) {?>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><?php
                                if (isset($_POST['Categoria'])) {
                                    $Cat = $_POST['Categoria'];
                                } else {
                                    $Cat = $_GET['Cat'];
                                }
                                $resultCId = $get->getSP("spCategoriaId('$Cat')");
                                while ($rowCId = $resultCId->fetch_assoc()) {
                                    echo $rowCId['Categoria'];
                                }
                            ?></li>
                            <?php if (isset($_POST['SubCategoria'])) { ?>
                                <li class="breadcrumb-item"><?php
                                    $resultSCId = $get->getSP("spSubCategoriaId('$Categoria', '$SubCategoria')");
                                    while ($rowSCId = $resultSCId->fetch_assoc()) {
                                        echo $rowSCId['SubCategoria'];
                                    }
                                ?></li>
                            <?php } ?>
                        </ol>
                    </nav>
                <?php }?>
            <div class="d-flex justify-content-around flex-wrap">
                <?php while ($rowPC = $resultPC->fetch_assoc()) { ?>
                    <div class="card card-widht mt-3">
                        <img class="card-img-top" src="<?php echo $rowPC['Imagen']; ?>">
                        <div class="card-body text-center">
                            <h6 class="card-title font-weight-bold linkNomre"><a href="./detallesProducto.php?id=<?php echo $rowPC['IdProductoOferta']; ?>">
                                    <?php echo $rowPC['Producto']; ?></a></h6>
                            <p class="card-text">
                                <?php echo 'S/. ' . number_format($rowPC['PrecioVenta'],2); ?>
                            </p>
                        </div>
                        <div class="card-footer d-flex justify-content-around">
                            <button type="button" class="btn btn-outline-primary btnAgregar" id="<?php echo $rowPC['IdProductoOferta']; ?>"><i
                                    class="fas fa-cart-plus"></i></button>
                            <button type="button" class="btn btn-outline-warning btnFavorito"><i class="far fa-star icoFavorito"></i></button>
                        </div>
                    </div>
                    <?php } $resultPC->free_result(); ?>
                </div>
            </div>
        </div>
    </section>
    <?php require '../include/footer.php'; ?>
    <?php require '../include/script.php'; ?>
</body>

</html>