<!-- Include Encabezado -->
<?php $page = "Tiendas Industriales | Bogotá Colombia"; ?> 
<?php include_once 'includes/header.php'?>;

<div class="row" style="margin-bottom: 20px;">
    <h3 class="text-center text-uppercase ct-u-paddingBoth20">Información Empresas</h3>
<div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>

<div class="container-fluid">
    <div class="row align-items-center" style="margin-bottom: 20px;">
        <!-- Botones de las marcas -->
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 center-block ">
            <a class="linkopacity" href="https://www.tiendasindustriales.com/discorreas.php">
                <img src="assets/images/content/logo-discorreas.jpg" alt="Logo">
            </a>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12  center-block">
            <a class="linkopacity" href="https://www.tiendasindustriales.com/americana.php">
                <img src="assets/images/content/logo-americana.jpg" alt="Logo">
            </a>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12  center-block">
            <a class="linkopacity" href="https://www.tiendasindustriales.com/correas_ind.php">
                <img src="assets/images/content/logo-correas.jpg" alt="Logo">
            </a>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12  center-block">
            <a class="linkopacity" href="https://www.tiendasindustriales.com/gates.php">
                <img src="assets/images/content/logo-gates.jpg" alt="Logo">
            </a>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12  center-block">
            <a class="linkopacity" href="https://www.tiendasindustriales.com/parker.php">
                <img src="assets/images/content/logo-parker.jpg" alt="Logo">
            </a>
        </div>
        <!-- Fin Botones de las marcas -->
    </div>

        <!-- Menu Principal -->
        <?php include_once 'includes/menu.php' ?>;

        <!-- Slider -->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                    <div class="item active">
                        <!-- Photo Slider images source -->
                        <img src="assets/images/content/background-1.jpg" width="2000px" class="img-responsive">
                    </div>
                    <div class="item">
                        <img src="assets/images/content/background-4.jpg" width="2000px" class="img-responsive">
                    </div>
                    <div class="item">
                        <img src="assets/images/content/background-5.jpg" width="2000px" class="img-responsive">
                    </div>
                    
                    <!-- Arrow Contols -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left">  <i class="fas fa-arrow-left"></i> </span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-left">  <i class="fas fa-arrow-right"></i> </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Include footer -->
<?php include_once 'includes/footer.php' ?>;
