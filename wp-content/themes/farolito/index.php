<?php get_header(); ?>


<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>

<!--
<h1><?php the_title(); ?></h1>
<p><?php the_content(); ?></p>
-->

		<section class="inicio-sesion">
			<div class="overlay">
				<div id="login">
					<h1 class="clr-celeste weight-700 pt20 pb30 text-center">Ingresa a tu cuenta
					<a href="#" id="close">&#215;</a></h1>
					<form class="form-group weight-300 ">
						<input class="form-control mb20" id="username" name="username" type="textbox" placeholder="Usuario" required>
						<input class="form-control mb20" id="password" name="password" type="password" placeholder="Contraseña" required>
						<button class="btn-login btn" name="submit" id="submit" type="submit">INGRESAR</button>
					</form>
					<div class="question size-15">
						<a class="help-block" href="#">¿Olvidaste tu contraseña?</a>
						<a class="help-block" href="#">¿No estás registrado?, crea tu cuenta aquí.</a>
					</div>
					
				</div>
			</div>
		</section>

		<div class="menu-scroll">
			<a href="index.html"><img class="ml20 p15" src="<?php bloginfo('template_directory');?>/iconos/logo-farolito-114x40.png"></a>
			<nav>
				<a class="hidden-xs" data-scroll="" href="sobrenosotros.html">Sobre nosotros</a>|
       	<a class="hidden-xs" data-scroll="" href="#oportunidades">Oportunidades</a> 
       	<a class="hidden-xs btn btn-es" data-scroll="" href="#">
        		ES <span class="glyphicon glyphicon-menu-down"></span>
        	</a>
       	<a class="hidden-xs btn btn-ingresa" dats-scroll="" href="#">INGRESAR</a>
			</nav>
		</div>

		<header class="text-center">
			<div class=" hidden-lg navbar-default navbar-fixed-top">
				<a class="btn btn-menu-create hidden-lg" href="#">CREA TU PERFIL</a>
				<nav class="navbar">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>						
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li><a href="home.html">Home</a></li>
							<li><a href="sobrenosotros">Nosotros</a></li>
							<li><a href="#ingreso">Ingresa tu cuenta</a></li>
							<li><a href="#ingreso">Crear cuenta</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="#contacto">Contáctanos</a></li>
						</ul>
					</div>
				</nav>
			</div>
			<div class="menu hidden-xs">
				
				<nav>
					<a class="hidden-xs" data-scroll="" href="sobrenosotros.html">Sobre nosotros</a>|
        			<a class="hidden-xs" data-scroll="" href="#oportunidades">Oportunidades</a> 
        			<a class="hidden-xs btn btn-es" data-scroll="" href="#">
        				ES <span class="glyphicon glyphicon-menu-down"></span>
        			</a>
        			<a class="hidden-xs btn btn-ingresa" dats-scroll="" href="#">INGRESAR</a>
				</nav>
				
				<!--
				<?php 
					$defaults = array(
						'container' => false,
						'theme_location' => 'main-menu',
						'menu_class' => 'menu',
						'page_item' => ''
					);
					wp_nav_menu ($defaults);
				?>
				-->
			</div>
			<div class="row">
				<div class="col-sm-6"></div>
				<div class="col-sm-6">
					<div class="cont-info text-center">
						<img class="hidden-xs" src="<?php bloginfo('template_directory');?>/iconos/iconos-20.png">
						<img class="hidden-lg"src="<?php bloginfo('template_directory');?>/iconos/logo-farolito-114x40.png">
						<h3 class="weight-400">Identificamos al mejor talento y maximizamos su potencial.</h3>
						<h4 class="weight-300">Con una evaluación rigurosa,<span class="hidden-xs">tanto de postulantes como de puestos laborales,</span> identificamos la sinergia óptima entre trabajador y empresa, aumentando la productividad, la permanencia y la felicidad <br>de los trabajadores.</h4>
						<a class="btn btn-create hidden-xs" href="#">CREA TU PERFIL</a>
						<img class="hidden-lg imagen-header" src="<?php bloginfo('template_directory');?>/iconos/image-header.jpg">
					</div>
				</div>
			</div>
			<a id="#arrow" class="text-center" href="#metodologia">
				<img class="arrow text-center hidden-xs"src="<?php bloginfo('template_directory');?>/iconos/iconos-15.png">
			</a>
		</header>

		<section id="metodologia" class="text-center">
			
			<div class="container">
				<h1 class="clr-celeste title-section weight-700">Nuestra metodología</h1>
				<h2 class="frase hidden-xs">
					<img class="comilla-inicial" src="<?php bloginfo('template_directory');?>/iconos/iconos-17.png">
					<span class="clr-tomate weight-400">Nuestro examen es 3 veces más fuerte</span><br><span class="weight-300">que el proceso interno aplicado por nuestros propios clientes.</span>
					<img class="comilla-final" src="<?php bloginfo('template_directory');?>/iconos/iconos-18.png">
				</h2>
				<div class="row">
					<div class="col-md-3">
						<div class="line1 hidden-xs"></div>
					</div>
					<div class="col-md-6">
						<div class="hidden-xs circle-externo weight-300 text-center">
							<div class="circle-interno">
								<div class="text-externo">
									<span class="size-24 text-white">
										Obtenemos el perfil <br> 
										profesional del postulante <br>	
										mediante un análisis completo <br> 
										que identifica el mejor talento <br> 
										para cualquier puesto. <br><br>
										Nos basamos en 3 pilares:
									</span>
								</div>
								<div class="text-interno hidden">
									<span class="size-24 text-black">
										"El corazón de<br> 
										nuestra metodología es<br> 
										nuestro propio examen"
									</span>
									<img src="<?php bloginfo('template_directory');?>/iconos/iconos-19.png">
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="line2 hidden-xs"></div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 line3 hidden-xs"></div>
					<div class="col-md-6"></div>
				</div>
				<div class="row">
					<div class="col-md-4 metod1">
						<h2 class="clr-tomate weight-700">Evaluación de competencias</h2>
						<h3 class="weight-300">Selección de talento que<br class="hidden-lg"> cuenta con las comptencias claves <br class="hidden-xs">para el puesto.</h3>
					</div>
					<div class="separador hidden-lg"></div>
					<div class="col-md-4 metod2">
						<h2 class="clr-tomate weight-700">Análisis continuo</h2>
						<h3 class="weight-300">Actualización continua del perfil óptimo para cada puesto, que permita incorporar cambios a la economía laboral u<br class="hidden-lg"> operaciones internas que impacten<br class="hidden-xs"> el día al día.</h3>
					</div>
					<div class="separador hidden-lg"></div>
					<div class="col-md-4 metod3">
						<h2 class="clr-tomate weight-700">Evaluación de preferencias</h2>
						<h3 class="weight-300">Selección de talento que permanecerá más tiempo por tener preferencias de trabajo lineadas con el puesto.</h3>
					</div>
				</div>
				<div class="row">
					<a class="btn btn-more bgd-celeste hidden-xs" href="#">VER MÁS</a>
				</div>
				<a id="#arrow" class="text-center" href="#estudiantes">
					<img class="arrow text-center hidden-xs" src="<?php bloginfo('template_directory');?>/iconos/iconos-15.png">
				</a>
			</div>
		</section>

		<section id="estudiantes" class="text-center">
			<div class="container">
				<h1 class="text-white title-section weight-700">Farolito para estudiantes</h1>
				<h2 class="text-white size-28 weight-300 mb70 hidden-xs">Alcanza tu potencial profesional con Farolito</h2>
				<div class="row">
					<!--Items-->
					<div class="items text-white col-md-6 br-r-dashed-white">
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-2">
								<img src="<?php bloginfo('template_directory');?>/iconos/numeros-39.png">
							</div>
							<div class="col-md-7 text-white br-b-dashed-white">
								<h2 class="mb20 text-left weight-300">Crea tu perfil</h2>
							</div>
							<h4 class="weight-300 size-20 hidden-lg">Ingresa tus datos en nuestra página y forma parte de nuestra comunidad.</h4>
							<img class="absolute icon1" src="<?php bloginfo('template_directory');?>/iconos/iconos-09.png">
						</div>

						<div class="row pt150">
							<div class="col-md-3"></div>
							<div class="col-md-2">
								<img src="<?php bloginfo('template_directory');?>/iconos/numeros-37.png">
							</div>
							<div class="col-md-7 text-white br-b-dashed-white">
								<h2 class="mb20 text-left weight-300">Postula a oportunidades laborales</h2>
							</div>
							<h4 class="weight-300 size-20 hidden-lg">Conoce en minutos si cumples con los requisitos para el puesto. Le enviamos un correo con las oportunidades para que cumplas con los requisitos.</h4>
							<img class="absolute icon2" src="<?php bloginfo('template_directory');?>/iconos/iconos-10.png">
						</div>
						<div class="row pt150 mb120 mt40">
							<div class="col-md-3"></div>
							<div class="col-md-2">
								<img src="<?php bloginfo('template_directory');?>/iconos/numeros-38.png">
							</div>
							<div class="col-md-7 text-white br-b-dashed-white">
								<h2 class="mb20 text-left weight-300">Mejora tu perfil profesional</h2>
							</div>

							<img class="absolute icon3" src="<?php bloginfo('template_directory');?>/iconos/iconos-11.png">
							<h4 class="weight-300 size-20 hidden-lg">Participa en uno de nuestros cursos de Career Coaching y aprende maneras de superar desafíos y salir adelante en el ambiente laboral.</h4>
						</div>
					</div>
					<!--Descrp-->
					<div class="items-descrip hidden-xs col-md-6">
						<div class="col-lg-2 hidden-xs"></div>
						<div class="col-lg-10 col-xs-12 text-white text-left">
							<div class="row descrip1">
								<h4 class="mt20 weight-300 size-20 pr130">Ingresa tus datos en nuestra página y forma parte de nuestra comunidad.</h4>
							</div>
							<div class="row descrip2">
								<h4 class="pt150 weight-300 size-20 pr130">Conoce en minutos si cumples con los requisitos para el puesto. Le enviamos un correo con las oportunidades para que cumplas con los requisitos.</h4>
							</div>
							<div class="row">
								<h4 class="pt150 pb70 mt40 weight-300 size-20 pr130">Participa en uno de nuestros cursos de Career Coaching y aprende maneras de superar desafíos y salir adelante en el ambiente laboral.</h4>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<a class="btn btn-oportunidades bgd-celeste hidden-xs" href="#oportunidades">MÁS OPORTUNIDADES</a>
				</div>
				<a id="#arrow" class="text-center" href="#empresas">
					<img class="arrow text-center hidden-xs"src="<?php bloginfo('template_directory');?>/iconos/iconos-15.png">
				</a>
			</div>
		</section>

		<section id="empresas" class="text-center">
			<div class="container">
				<h1 class="clr-tomate title-section weight-700">Farolito para empresas</h1>
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6 ">
						<h2 class="text-grey br-b-dashed-tomate pb20 size-28 weight-700 mt40 ">Contrata al mejor talento</h2>
						<h2 class="text-grey weight-300 size-20 hidden-xs">Somos el proveedor estratégico para bajar la rotación y subir la productividad de los trabajadores.</h2>
					</div>
					<div class="col-md-3"></div>
				</div>
				
				<div class="row mt70">
					<div class="col-md-4 col-xs-12">
						<img src="<?php bloginfo('template_directory');?>/iconos/iconos-03.png">
						<h2 class="text-grey size-28 weight-400 mb10">Evaluar postulantes</h2>
						<h4 class="weight-300 size-20 text-grey mt20">El Examen Farolito identifica a las personas que no solamente harán bien el trabajo, sino que permanecerán más tiempo en él.<br>
						<span class="clr-celeste">Ver más información</span></h4>
					</div>
					<div class="col-md-4 col-xs-12">
						<img src="<?php bloginfo('template_directory');?>/iconos/iconos-04.png">
						<h2 class="text-grey size-28 weight-400">Diagnóstico de la rotación</h2>
						<h4 class="weight-300 size-20 text-grey mt20">Revisión de datos manejados por su empresa para identificar a los contribuidores escondidos de la rotación.</h4>
					</div>
					<div class="col-md-4 col-xs-12">
						<img src="<?php bloginfo('template_directory');?>/iconos/iconos-05.png">
						<h2 class="text-grey size-28 weight-400">Coaching laboral</h2>
						<h4 class="weight-300 size-20 text-grey mt20">Asesoría dirigida a nuevos trabajadores durante el proceso de inserción.</h4>
					</div>
				</div>
				<div class="row mt70">
					<a class="btn btn-contacto bgd-tomate" href="#contacto">CONTÁCTANOS</a>
				</div>
				<a id="#arrow" class="text-center" href="#centros">
					<img class="arrow text-center hidden-xs"src="<?php bloginfo('template_directory');?>/iconos/iconos-15.png">
				</a>
			</div>
		</section>

		<section id="centros" class="bgd-green text-white text-center">
			<div class="container">
				<h1 class="text-white title-section weight-700">Farolito para Centros Educativos</h1>
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6 ">
						<h2 class="text-yellow br-b-dashed-white pb20 size-28 weight-700 mt40 ">Desarrolla el mejor talento</h2>
						<h2 class="text-white weight-300 size-20 hidden-xs">Somos la evaluadora que asegura que cada alumno egrese siendo el mejor profesional que requiere el mercado laboral.</h2>
					</div>
					<div class="col-md-3"></div>
				</div>
				
				<div class="row mt70">
					<div class="col-md-4 col-xs-12">
						<img src="<?php bloginfo('template_directory');?>/iconos/iconos-06.png">
						<h2 class="text-white size-28 weight-400 mb10">Filtro de Postulación</h2>
						<h4 class="weight-300 size-20 mt20">Identificamos a los postulantes con el perfil profesional de alumnos más exitosos, por carrera.</h4>
					</div>
					<div class="col-md-4 col-xs-12">
						<img src="<?php bloginfo('template_directory');?>/iconos/iconos-07.png">
						<h2 class=" size-28 weight-400">Asesoría integral</h2>
						<h4 class="weight-300 size-20 mt20">Las características psicométricas de alumnos más exitosos varía por carrera y tipo de trabajo. Nosotros recomendamos prácticas y carreras en que el alumno tendrá más éxito.</h4>
					</div>
					<div class="col-md-4 col-xs-12">
						<img src="<?php bloginfo('template_directory');?>/iconos/iconos-08.png">
						<h2 class=" size-28 weight-400">Control de calidad</h2>
						<h4 class="weight-300 size-20 mt20">Asegurar que cada sucursal y cada profesor brinden la misma calidad de formación, evaluando a todos los alumnos con el mismo examen.</h4>
					</div>
				</div>
				<div class="row mt70">
					<a class="btn btn-contacto bgd-green" href="#contacto">CONTÁCTANOS</a>
				</div>
				<a id="#arrow" class="text-center" href="#oportunidades">
					<img class="arrow text-center hidden-xs"src="<?php bloginfo('template_directory');?>/iconos/iconos-15.png">
				</a>
			</div>
		</section>

		<section id="oportunidades" class=" hidden-xs text-center">
			<div class="container">
				<h1 class="text-grey title-section weight-700 mt10">Lista de oportunidades</h1>
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="row br-b-dashed-grey mt40 text-grey text-left">
								<h4 class="clr-celeste size-20 underline">Asesor de Servicio</h4>
								<span class="weight-300 text-grey size-17">Empresa: Consectetuer adipiscing<br>
								Cuidad: Lima<br>
								Salario: s/.0 000.00<br>
								Horario: 8:00 am - 6:00 pm<br>
								</span>
								<div class="text-right clr-tomate pb20">
									<a href="#" class="btn btn-more pl20 pr20 clr-tomate">VER MÁS</a>
								</div>
						</div>
						<div class="row br-b-dashed-grey mt20 text-grey text-left">
								<h4 class="clr-celeste size-20 underline">Practicante de estadística</h4>
								<span class="weight-300 text-grey size-17">Empresa: Consectetuer adipiscing<br>
								Cuidad: Lima<br>
								Salario: s/.0 000.00<br>
								Horario: 8:00 am - 6:00 pm<br>
								</span>
								<div class="text-right clr-tomate pb20">
									<a href="#" class="btn btn-more pl20 pr20 clr-tomate">VER MÁS</a>
								</div>
						</div>
						<div class="row br-b-dashed-grey mt20 text-grey text-left">
								<h4 class="clr-celeste size-20 underline">Supervisor de Seguridad</h4>
								<span class="weight-300 text-grey size-17">Empresa: Consectetuer adipiscing<br>
								Cuidad: Lima<br>
								Salario: s/.0 000.00<br>
								Horario: 8:00 am - 6:00 pm<br>
								</span>
								<div class="text-right clr-tomate pb20">
									<a href="#" class="btn btn-more pl20 pr20 clr-tomate">VER MÁS</a>
								</div>
						</div>

					</div>
					<div class="col-md-2"></div>
				</div>
				<div class="row">
					<a class="btn btn-see bgd-grey mt40 mb70" href="#">VER TODOS</a>
				</div>
				<a id="#arrow" class="text-center" href="#blog">
					<img class="arrow text-center hidden-xs"src="<?php bloginfo('template_directory');?>/iconos/iconos-15.png">
				</a>
			</div>
		</section>

		
		



		<section id="blog" class="text-center">
			<div class="container">
				<h1 class="text-grey title-section weight-700 pb40">Blog Farolito</h1>
				<div class="row pt40 text-left">
				<?php $query = new WP_Query('showposts=5'); ?>
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
					<div class="col-md-4 col-xs-12">
						<div class="item-blog text-grey">
							<a class="text-grey" href="blog.html">
									<img class="absolute" src=" <?php the_post_thumbnail(); ?>">
									
									<h4 class="weight-300"> <?php the_content(); ?> </h4>
							</a>
						</div>
					</div>
				<?php endwhile ?>
				<?php wp_reset_query(); ?>
				</div>
				<div class="row">
					<a class="btn btn-blog bgd-celeste mt40 mb70" href="#blog">VER TODOS</a>
				</div>
				<a id="#arrow" class="text-center" href="#contacto">
					<img class="arrow text-center hidden-xs"src="<?php bloginfo('template_directory');?>/iconos/iconos-15.png">
				</a>
			</div>
		</section>

		<section id="contacto">
			<div class="container">
				<h1 class="text-grey text-center title-section weight-700 pb40">¿Tienes alguna consulta?</h1>
				<div class="row">
					<div class="col-md-3 hidden-xs"></div>
					<div class="col-md-6 col-xs-12">
						<div class="form-group pl60 pr60">
							<input type="text" class="form-control mb10 " placeholder="Nombre">
							<input type="email" class="form-control" placeholder="Correo">
							<textarea class="form-control h4 mt-21" placeholder="Escribe tu mensaje aquí"></textarea>
							<div class="btn-envio text-right">
								<a class="btn bgd-grey mt10 mb20" href="#">ENVIAR</a>
							</div>
							<h4 class="text-grey weight-400">O llámanos al +51 32660564</h4>
						</div>
					</div>
					<div class="col-md-3 hidden-xs"></div>
				</div>
			</div>
		</section>

		<footer class="bgd-grey-grey text-left">
			<div class="container">
				<div class="row">
					<div class="col-md-4  picture-redes">
						<img class="ml5" src="<?php bloginfo('template_directory');?>/iconos/iconos-12.png">
						<img class="ml5" src="<?php bloginfo('template_directory');?>/iconos/iconos-13.png">
						<img class="ml5" src="<?php bloginfo('template_directory');?>/iconos/iconos-14.png">
					</div>
					<div class="col-md-8  derechos ">
						<span class="text-white">todos los derechos reservados</span>
					</div>
				</div>
			</div>
		</footer>



<?php endwhile; ?>
<?php endif; ?>




<?php get_footer(); ?>