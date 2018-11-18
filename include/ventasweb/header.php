<?php $resultCT = $get->getListarCategoria(); ?>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark info-color-dark"> <!-- bg-dark -->
        <a class="navbar-brand" href="index.php"><img src="../../img/logo/logo.png" style="height: 50px;" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div role="separator" class="dropdown-divider mr-auto"></div>
            <form class="form-inline ml-auto mr-auto">
                <div class="input-group mb-0">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-light dropdown-toggle" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Categorias</button>
                        <div class="dropdown-menu">
                            <?php while ($rowCT = $resultCT->fetch_assoc()) { ?>
                                <a class="dropdown-item" href="catalogo.php?id=<?php echo $rowCT['IdCategoria']; ?>"><?php echo $rowCT['Categoria']; ?></a>
                            <?php } $resultCT->free_result(); ?>
                        </div>
                    </div>
                    <input type="text" class="form-control" placeholder="Hola! qué buscas?">
                    <div class="input-group-append">
                        <button class="btn btn-outline-light" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="carrito.php"><i class="fas fa-shopping-cart"></i> Carrito</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="catalogo.php"><i class="fas fa-tags"></i> Catálogo</a>
                </li>
                <?php 
                    if(isset($_SESSION['usuario'])) {?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown"  aria-expanded="false"><i class="fas fa-user-circle"></i> <span> <?php echo $_SESSION['usuario'][0]['UserName']; ?></span></a>
                            <label class="d-none" id="usuario"><?php echo $_SESSION['usuario'][0]['Id']; ?></label>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="lbtnUsuario">
                                <a class="dropdown-item" href=""><i class="fas fa-user"></i> Mi Perfil</a>
                                <a class="dropdown-item" href="deseos.php"><i class="far fa-star"></i> Lista de deseos</a>
                                <a class="dropdown-item" href="compras.php"><i class="fas fa-clipboard-list"></i> Mis Compras</a>
                                <a class="dropdown-item" href="login.php" id="Cerrar"><i class="fas fa-power-off"></i> Cerrar Sesión</a>
                            </div>
                        </li>
                   <?php } else { ?>
                        <li class="nav-item" id="Inicio">
                            <a class="nav-link" href="login.php">Iniciar Sesión</a>
                        </li>
                   <?php }
                ?>
            </ul>
        </div>
    </nav>
</header>