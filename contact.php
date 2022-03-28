<?php $page = "Contactos Tiendas Industriales"; ?> 
<?php include_once 'includes/header.php' ?>;
<?php include_once 'includes/menu.php' ?>;

<div class="ct-couponsSection ct-priceSection" data-height="600">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 ct-u-marginBoth50">
                <div class="headerSection">
                    <h2 class="big-blackHeader">Contacto Oficina Principal</h2>
                </div>
                    <!-- Formulario de contactos -->
                    <form role="form" class="formulario" action="enviando.php" method="post">
                            <h1>Formulario de contacto</h1>
                            <div class="formulario-cubridor">
                        <div class="required-field-block form-group">
                            <input type="text" placeholder="Nombre" name="nombre" class="form-control">
                            <div class="required-icon">
                                <div class="text">*</div>
                            </div>
                        </div>
                        <div class="required-field-block form-group">
                            <input type="text" placeholder="Email" name="email" class="form-control">
                            <div class="required-icon">
                                <div class="text">*</div>
                            </div>
                        </div>        
                        <div class="required-field-block form-group">
                            <input type="text" placeholder="Teléfono" name="Teléfono" class="form-control">
                            <div class="required-icon">
                                <div class="text">*</div>
                            </div>
                        </div>
                        <div class="required-field-block form-group">
                            <textarea rows="3" class="form-control area-largo" placeholder="Mensaje" name="mensaje"></textarea>
                            <div class="required-icon">
                                <div class="text">*</div>
                            </div>
                        </div>
                            <button class="btn btn-primary">Enviar</button>
                        </div>        
                    </form>
            </div>

            <div class="col-lg-4 ct-u-buttonRightSection hidden-md hidden-sm hidden-xs">
                <div class=" ct-color-box--right-bottom">
                    <div class="widget ct-u-marginTop50 widget-narrow widget-short-message">
                        <ul>
                            <li>
                                <h4 class="ct-message-title">
                                    HORARIO DE ATENCIÓN 
                                </h4>

                                <div class="open-days">
                                    LUNES A VIERNES:
                                </div>
                                <div class="open-hours">
                                    7:45AM — 5:30PM
                                </div>
                                <div class="open-days">
                                    SÁBADO:
                                </div>
                                <div class="open-hours">
                                    8:00AM — 12:15PM
                                </div>
                                <div class="open-days">
                                    DOMINGO:
                                </div>
                                <div class="open-hours">
                                    CERRADO
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Include footer -->
<div>
    <?php include_once 'includes/footer.php' ?>;
</div>