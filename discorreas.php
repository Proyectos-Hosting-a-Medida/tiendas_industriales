<!-- Include Encabezado -->
<?php include_once 'includes/header.php' ?>;

<body class="cssAnimate">

    <?php include_once 'includes/menu.php' ?>;

    <div class="ct-careersSection ct-u-marginTop40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ct-mainContent">
                    <div class="ct-jobDescription">
                        <img src="assets/images/content/logo-discorreas.png" alt="brakes" class=" align-center-logo ct-u-paddingBoth40">
                        <p class="subtitle">Ofrece soluciones integrales para la industria, contamos con personal calificado
                        que lo asesora en calidad y uso adecuado de cada uno de nuestros productos. Tenemos todo en correas,
                        mangueras, acoples, accesorios y mucho más. Desde 1983 atendemos la industria a nivel nacional.</p>
                    </div>

    <div class="ct-mapSection ct-u-backgroundLightBlack" data-height="568" id="ct-mapSection">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 ct-contact">
                    <div class="widget ct-widget-contact ct-widget-contact--map">
                        <h3 class="ct-widget-header text-uppercase ct-fw-400">Discorreas<br>Mangueras y Empaques</h3>
                        <h6 class="address">Dirección principal</h6>
                        <h4>Calle 13 # 27 - 02 Bogotá </h4>
                        <h6 class="phone">PBX</h6>
                        <a href="tel:6013603604"><h4> +57 601 360 36 04 </h4>
                        <h6 class="phone">Celular</h6>
                        <a href="tel:316 468 12 89"><h4> +57 316 468 12 89 </h4>
                        <h6>Horario de Atención</h6>
                        <h4>Lunes a vienes:<br>
                         8:00am — 5:00pm</h4>
                        <h4>Sábado:<br> 8:00am — 12:00pm</h4>
                        <h4>Domingo: Cerrado</h4>
                        <a href="https://wa.me/573164681289/?text=tu%20Hola!" class="btn btn-white ct-u-marginTop20" target="_blank">
                            <img src="assets/images/logo-wa.png" width="50" height="50"> WhatsApp
                        </a>
                    </div>
                </div>

                <div class="col-lg-7 col-md-12 col-sm-12" style="padding:25px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d295.58469830477077!2d-74.08952977990347!3d4.612306418670587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNMKwMzYnNDQuNCJOIDc0wrAwNScyMS45Ilc!5e0!3m2!1ses!2sco!4v1514431108876" width="100%" height="550" frameborder="0" style="border:0; padding-top: 10px" allowfullscreen></iframe>
                 </div>

                <div class="widget ct-widget-contact">
                    <h3 class="send_text">Envienos un Email</h3>

                    <form action="send.php" method="post" class="send-form-shop">
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input id="nombre" name="nombre" placeholder="Nombre completo" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input id="email" name="email" type="email" placeholder="ejemplo@email.com" required>
                        </div>

                        <div class="form-group">
                            <label for="mensaje">Mensaje:</label>
                            <textarea id="mensaje" name="mensaje" placeholder="Escribe tu mensaje" required></textarea>
                        </div>

                        <input id="submit-send" name="submit" type="submit" value="Enviar Formulario">

                        <input type="hidden"  name="email_destino" value= "servicioalcliente@discorreas.com">

                    </form>
                </div> 
            </div>
        </div>
    </div><br>
</div>
</div></div></div></div>
<a href="#MainHeader" class="ct-js-btnScrollUp ct-btnScrollUp"><i class="fa fa-angle-up text-center"></i></a>

<div>
<!-- Include footer -->
    <?php include_once 'includes/footer.php' ?>;
</div>





