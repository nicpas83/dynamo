<?php ?>
<!-- Header -->
<header id="header" class="header-wrapper home-parallax home-fade dark-bg">
    <div class="color-overlay"></div>
    <div class="header-wrapper-inner">
        <div class="container">

            <div class="intro">
                <img src="img/logo-blanco.png" alt="logo" style="margin-bottom: 25px;" />

                <h1 style="font-weight: bold;"><?php debug($landing); die;//echo $landing[0]['Contenido']['contenido']; ?></h1>
                <p>asesoramiento, diseño y fabricación</p>
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
            <h2>¿Cómo trabajamos?</h2>
            <br />
            <span>Te escuchamos, tomamos las medidas y hacemos realidad el mueble que soñas!</span>
        </header><!-- section-heading -->
        <!---->
        <div class="row">
            <div class="col-sm-12">
                <!-- about-left -->
                <div class="about-content" style="text-align: center;">
                    <p>Hacemos de tu hogar, un lugar al que siempre quieras volver...</p>
                    <p>Si necesitas asesoramiento no dudes en consultar, tu pregunta no molesta, nos encanta! </p>
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
            <h2>Ultimos Proyectos</h2>
            <span>¡clientes felices!</span>
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
            <h2>¿Cómo comprar en Dynamo?</h2>
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
                    <h4>Contanos tu idea</h4>
                    <p>Contamos con un equipo de diseñadores especializados para entender tu necesidad
                        y crear el mueble ideal para ese espacio que tanto te cuesta resolver.</p>
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
                    <h4>Diseño &amp; Desarrollo</h4>
                    <p>Vamos personalmente a tomar las medidas de tu espacio y te asesoramos para que 
                        el mueble sea funcional y se adapte perfecto al ambiente.</p>

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
                    <h4>Producción &amp; Entrega</h4>
                    <p>Una vez acordado el diseño mediante planos y croquis te enviamos el presupuesto. Y con una seña 
                        del 50% avanzamos a la etapa de producción. La entrega será en un plazo de 30 a 40 días, y la 
                        misma es realizada por personal de nuestra confianza para garantizar el cuidado especial de tu mueble.</p>

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
            <h2> Esperamos tu contacto</h2>
            <span>¡Muchas Gracias!</span>
        </header>
        <!---->

        <div class="section-content">
            <div class="row col-md-12">
                <div >
                    <h5 style="text-align: center;">Respondemos a la brevedad!</h5>
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

