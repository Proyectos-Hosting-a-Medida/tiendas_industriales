<!-- Include Encabezado -->
<?php $page = "Americana de Correas y Mangueras"; ?> 
<?php include_once 'includes/header.php' ?>;

<body class="cssAnimate">

    <?php include_once 'includes/menu.php' ?>;

    <div class="ct-careersSection ct-u-marginTop40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ct-mainContent">
                    <div class="ct-jobDescription">

                       <!-- <h1 class="big-blackHeader">Discorreas Mangueras y Empaques S.A.</h1>-->
                        <img src="assets/images/content/logo-americana.png" alt="brakes" class=" align-center-logo ct-u-paddingBoth40">

                        <p class="subtitle">Ofrece soluciones integrales para la industria, contamos con personal calificado
                        que lo asesora en calidad y uso adecuado de cada uno de nuestros productos. Tenemos todo en correas,
                        mangueras, acoples, accesorios y mucho más. Desde 1983 atendemos la industria a nivel nacional.</p>
                    </div>

            <!-- Sucursal Calle 15-->
            <div class="ct-mapSection ct-u-backgroundLightBlack" data-height="568" id="ct-mapSection">
                <div class="container-fluid">
                    <div class="row">
                    <div class="col-lg-5 col-md-12 col-sm-12 ct-contact">
                            <div class="widget ct-widget-contact ct-widget-contact--map">
                                <h3 class="ct-widget-header text-uppercase ct-fw-400">Americana Calle 15</h3>
                                <h6 class="address">Dirección principal</h6>
                                <h4>Calle 15 # 25 - 84 Bogotá </h4>
                                <h6 class="phone">PBX</h6>
                                <a href="tel:6013605140"><h4> +57 601 360 51 40</h4></a>
                                <h6 class="phone">Celular</h6>
                                <a href="tel:3164681387"><h4> +57 316 468 13 87</h4></a>
                                <!-- <h6 class="phone">email</h6> -->
                                <!-- <a href="mailto:calle15@americanadecorreas.com"><h5>calle15@americanadecorreas.com</h5></a> -->
                                <h6>Horario de Atención</h6>
                                <h4>Lunes a vienes:<br>
                                8:00am — 5:00pm</h4>
                                <h4>Sábado:<br> 8:00am — 12:00pm</h4>
                                <h4>Domingo: Cerrado</h4>
                                <a href="https://wa.me/573164681387/?text=tu%20Hola!" class="btn btn-white ct-u-marginTop20" target="_blank">
                                    <img src="assets/images/logo-wa.png" width="50" height="50"> WhatsApp
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-7 col-md-12 col-sm-12" style="padding:25px;">
                            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1406.0443925329234!2d-74.08933247988925!3d4.612969435845125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9971f6d23499%3A0x303dac0b5ae35f4c!2sCl.+15+%2325-84%2C+Bogot%C3%A1!5e0!3m2!1ses-419!2sco!4v1514988170290" width="100%" height="550" frameborder="0" style="border:0; padding-top: 10px" allowfullscreen></iframe> -->
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248.5559214611217!2d-74.08819332768496!3d4.612854274706651!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9971e4e86817%3A0x2e70bc69f9fd861c!2sAMERICANA%20DE%20CORREAS%20Y%20MANGUERAS!5e0!3m2!1ses!2sco!4v1645129911766!5m2!1ses!2sco" width="100%" height="550" style="border:0; padding-top: 10px" allowfullscreen></iframe>
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

                                <input type="hidden"  name="email_destino" value= "calle15@americanadecorreas.com">

                            </form>
                        </div> 
                    </div>
                </div>
            </div>
        <br>
            <!-- Fin Calle 15 -->
        </div>       
    </div>
</div>
</div>
    <a href="#MainHeader" class="ct-js-btnScrollUp ct-btnScrollUp"><i class="fa fa-angle-up text-center"></i></a>
</div>
        <!-- Include footer -->
        <?php include_once 'includes/footer.php' ?>;
    </div>





