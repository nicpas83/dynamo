<?php ?>
<!-- Header -->
<header id="header" class="header-wrapper home-parallax home-fade dark-bg">
    <div class="color-overlay"></div>
    <div class="header-wrapper-inner">
        <div class="container">

            <div class="intro">
                <img src="img/logo-blanco.png" alt="logo" style="margin-bottom: 25px;" />

                <h1 style="font-weight: bold;"><?php echo $contenidos[0]['Contenido']['contenido']; ?></h1>
                <p><?php echo $contenidos[1]['Contenido']['contenido']; ?></p>
                <a href="#nosotros" class="btn btn-default-o onPageNav">Conocenos!</a>
            </div><!-- /.intro -->

        </div><!-- /.container -->

        <div class="arrow-down">
            <a href="#nosotros" class="onPageNav">
                <i class="ion-ios-arrow-down"></i>
            </a>
        </div><!-- /.arrow-down -->

    </div><!-- /.header-wrapper-inner -->
</header>
<!-- /Header -->
<!-- About Us -->
<section id="nosotros" class="section about-us">
    <div class="container">

        <!---->
        <header class="section-heading">
            <h2><?php echo $contenidos[2]['Contenido']['contenido']; ?></h2>
            <br />
            <span><?php echo $contenidos[3]['Contenido']['contenido']; ?></span>
        </header><!-- section-heading -->
        <!---->
        <div class="row">
            <div class="col-sm-12">
                <!-- about-left -->
                <div class="about-content" style="text-align: center;">
                    <p><?php echo $contenidos[4]['Contenido']['contenido']; ?></p>
                    <p><?php echo $contenidos[5]['Contenido']['contenido']; ?></p>
                </div>
            </div><!-- col-sm-4 -->
        </div><!-- row -->

        <div class="section-content">
            <div class="row">
                <div class="col-sm-12">
                    <!-- about-center -->
                    <figure class="about-content center">
                        <img class="img-responsive center-block" src="img/home-principal.jpg" alt="principal">
                    </figure>
                </div><!-- col-sm-4 -->
            </div><!-- row -->
        </div><!-- section-content -->
    </div><!-- container -->
</section>
<!-- /About Us -->


<!-- Portfolio -->
<section id="fotos" class="section portfolio">
    <div class="container">

        <!---->
        <header class="section-heading">
            <h2><?php echo $contenidos[6]['Contenido']['contenido']; ?></h2>
            <span><?php echo $contenidos[7]['Contenido']['contenido']; ?></span>
        </header>
        <!---->

        <div class="section-content">
            <div class="main_content">
                <div class="isotop-filter" id="filters">
                    <button type="button" class="btn btn-isotop is-checked" data-filter="*">Todos</button>
                    <button type="button" class="btn btn-isotop" data-filter=".modulares">Modulares</button>
                    <button type="button" class="btn btn-isotop" data-filter=".cajoneras">Cajoneras</button>
                    <button type="button" class="btn btn-isotop" data-filter=".escritorios">Escritorios</button>
                    <button type="button" class="btn btn-isotop" data-filter=".estanterias">Estanterias</button>
                </div>
            </div>  <!-- main_content -->
        </div>
    </div>

    <div class="portfolio-grid">
        <ul id="da-thumbs" class="da-thumbs isotope">
            <li data-category="modulares" class="modulares">
                <a>
                    <img src="img/portfolio/modular_1.jpg" alt="" />
                </a>
            </li>

            <li data-category="cajoneras" class="cajoneras">
                <a>
                    <img src="img/portfolio/cajonera_1.jpg" alt="" />
                </a>
            </li>

            <li data-category="escritorios" class="escritorios">
                <a>
                    <img src="img/portfolio/escritorio_2.jpg" alt="" />
                </a>
            </li>

            <li data-category="modulares" class="modulares">
                <a>
                    <img src="img/portfolio/modular_2.jpg" alt="" />
                </a>
            </li>

            <li data-category="estanterias" class="estanterias">
                <a>
                    <img src="img/portfolio/estanteria_2.jpg" alt="" />
                </a>
            </li>

            <li data-category="modulares" class="modulares">
                <a>
                    <img src="img/portfolio/modular_3.jpg" alt="" />
                </a>
            </li>

            <li data-category="cajoneras" class="cajoneras">
                <a>
                    <img src="img/portfolio/cajonera_2.jpg" alt="" />
                </a>
            </li>

            <li data-category="estanterias" class="estanterias">
                <a>
                    <img src="img/portfolio/estanteria_1.jpg" alt="" />
                </a>
            </li>

            <li data-category="cajoneras" class="cajoneras">
                <a>
                    <img src="img/portfolio/cajonera_3.jpg" alt="" />
                </a>
            </li>

            <li data-category="escritorios" class="escritorios">
                <a>
                    <img src="img/portfolio/escritorio_1.jpg" alt="" />
                </a>
            </li>

            <li data-category="escritorios" class="escritorios">
                <a>
                    <img src="img/portfolio/escritorio_3.jpg" alt="" />
                </a>
            </li>

            <li data-category="estanterias" class="estanterias">
                <a>
                    <img src="img/portfolio/estanteria_3.jpg" alt="" />
                </a>
            </li>

        </ul>
    </div><!--/portfolio-grid-->
</section>
<!-- /Portfolio -->




<!-- Our Process -->
<section id="comprar" class="section our-process">
    <div class="container">
        <header class="section-heading">
            <h2><?php echo $contenidos[8]['Contenido']['contenido']; ?></h2>
            <!-- <span></span>  -->
        </header>
        <div class="section-content">
            <div class="process">
                <!-- our-process-image -->
                <div class="our-process-image">
                    <span class="ion-ios-lightbulb-outline"></span>
                </div>
                <div class="our-process-text">
                    <!-- our-process-text -->
                    <h4><?php echo $contenidos[9]['Contenido']['contenido']; ?></h4>
                    <p><?php echo $contenidos[10]['Contenido']['contenido']; ?></p>
                </div>

            </div><!-- process -->

            <!-- divider -->
            <div class="divider divider-right hidden-xs">
            </div>

            <div class="process">

                <!-- our-process-image -->
                <div class="our-process-image left">
                    <span class="ion-ios-flask-outline"></span>
                </div>

                <div class="our-process-text right">

                    <!-- our-process-text -->
                    <h4><?php echo $contenidos[11]['Contenido']['contenido']; ?></h4>
                    <p><?php echo $contenidos[12]['Contenido']['contenido']; ?></p>

                </div>
            </div><!-- process -->

            <!-- divider -->
            <div class="divider divider-left hidden-xs">
            </div>

            <div class="process">

                <!-- our-process-image -->
                <div class="our-process-image">
                    <span class="ion-ios-speedometer-outline"></span>
                </div>

                <div class="our-process-text">

                    <!-- our-process-text -->
                    <h4><?php echo $contenidos[13]['Contenido']['contenido']; ?></h4>
                    <p><?php echo $contenidos[14]['Contenido']['contenido']; ?></p>

                </div>
            </div><!-- process -->

        </div><!-- section-content -->
    </div><!-- container -->
</section>
<!-- /Our Process -->



<!-- Contact-us -->
<section id="contacto" class="section contact">
    <div class="container">
        <!---->
        <header class="section-heading">
            <h2> <?php echo $contenidos[15]['Contenido']['contenido']; ?></h2>
            <span><?php echo $contenidos[16]['Contenido']['contenido']; ?></span>
        </header>
        <!---->

        <div class="section-content">
            <div class="row col-md-12">
                <div >
                    <h5 style="text-align: center;"><?php echo $contenidos[17]['Contenido']['contenido']; ?></h5>
                    <form action="assets/contact-form.php" class="contact-form" id="contactForm" method="post" name="contactform" role="form">

                        <div class="form-group">
                            <input class="form-control" id="name" name="name" placeholder="Tu Nombre" type="text" required>
                        </div>

                        <div class="form-group">
                            <input class="form-control" id="email" name="email" placeholder="Email (al cual te responderemos)" type="email" required>
                        </div>
                        
                        <div class="form-group">
                            
                            <select class="form-control" id="tipo" name="tipo">
                                <option>Qué tipo de mueble querés?</option>
                                <option>Modular de Tv</option>
                                <option>Biblioteca</option>
                                <option>Escritorio</option>
                                <option>Mesa</option>
                                <option>Cama</option>
                                <option>Mesa Ratona</option>
                                <option>Vajillero</option>
                                <option>Otro...</option>
                            </select>
                            
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" id="message" name="massage" placeholder="Contanos lo que quieras" rows="5" required></textarea>
                        </div>

                        <div id="contactFormResponse"></div>

                        <button id="cfsubmit" type="submit" class="btn btn-dark btn-block contact-submit">Enviar!</button>

                    </form>
                </div>
                
            </div>
        </div>
    </div>
</section>
<!-- Contact-us -->

