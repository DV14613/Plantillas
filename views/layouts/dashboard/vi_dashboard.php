<?php require_once BASE_RELATIVE_VIEWS . 'layouts/common/head.php'; ?>
<!--DASHBOARD/CARPETA ADMINISTRADOR-->

<body>
    <div class="admin-contenedor">
        <?php include BASE_RELATIVE_VIEWS . '/layouts/common/menu_admin.php'; ?>
        <div class="admin-menu">
            <div class="admin-header">
                <div>
                    <h1 class="headline">
                        Sistema Integrado de Gestión
                    </h1>
                    <p class="sub-headline">
                        Inicio
                    </p>
                </div>
            </div>
            <div class="admin-contenido">
                <div class="bienvenido">
                    <div>
                        <p class="text">Bienvenido</p>
                        <h2 class="headline"><?= $nombreUsuario ?></h2>
                    </div>
                </div>

                <div class="row ">
                    <div class="col-12 col-lg-6 my-1">
                        <a href="<?= BASE_URL . 'Dashboard/vistaUno'; ?>">
                            <div class="card rojo">
                                <div class="value"> vista 1</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-lg-6 my-1">
                        <a href="<?= BASE_URL . 'Dashboard/vistaDos'; ?>">
                            <div class="card rojo">
                                <div class="value">Vista 2</div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-6 my-1">
                        <a href="<?= BASE_URL . 'Dashboard/vistaUno'; ?>">
                            <div class="card rojo">
                                <div class="value"> vista 1</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-lg-6 my-1">
                        <a href="<?= BASE_URL . 'Dashboard/vistaDos'; ?>">
                            <div class="card rojo">
                                <div class="value">Vista 2</div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>