
<?php 

/*
Template Name: Blog Main
*/

?>

<?php get_header(); ?>

		<div class="menu-global weight-300 hidden-xs">
			<a href="index.html"><img src="<?php bloginfo('template_directory');?>/iconos/logo-farolito-114x40.png"></a>
			<nav>
				<a class="hidden-xs" data-scroll="" href="sobrenosotros.html">Sobre nosotros</a>|
       	<a class="hidden-xs" data-scroll="" href="#">Vacantes</a> 
     	 	<a class="hidden-xs btn btn-ingresa" dats-scroll="" href="index.html">SALIR</a>
			</nav>
		</div>
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
		<section id="section-blog">
			<div class="container">
				<div class="row text-grey pb70">
					<div class="col-md-1 hidden-xs"></div>
					<div class="col-md-7 col-xs-12">
						<div class="text-complete">
							
							<p>Publicado el 2013-10-16</p>
							<h1 class="pb10 clr-celeste">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</h1>
							<div class="blogger pb30">
								<img src="<?php bloginfo('template_directory');?>/iconos/iconos-22.png">
								<h3 class="clr-celeste pt10">Lorem ipsum</h3>
								<h4>Consectetuer adipiscing</h4>
							</div>
							<p class="weight-300 size-19 pb10">
							En Farolito, nos esforzamos para que miembros de la Co- <br>
							Munidad Farolito consigan el trabajo de sus sueños. Revis- <br>
							Amos curriculums, damos consejos después de entrevistas  <br>
							Sobre cómo impresionar aún más a la empresa indicada, y  <br>
							A la gente que haya entrado en un puesto a través de Far- <br>
							olito, la llamamos de vez en cuando para ver cómo van y  <br>
							cómo podemos seguir ayudándolos.
							</p>
							<p class="weight-300 size-19">
							En la actualidad, la Comunidad Farolito supera a casi <br>
							3.000 personas ahora. Ahora, es más difícil llegar a todos, <br>
							Y en particular, a personas que aún siguen buscando tra- <br>
							Bajo o que estén trabajando pero sueñan con algo mejor, <br>
							nos encantaría ayudarles a cada uno de ustedes tanto  <br>
							como se pueda.
							</p>
						</div>
						<img class="pt20 pb20" src="<?php bloginfo('template_directory');?>/img/img-01.png">
						<div class="text-complete">
							<p class="weight-300 size-19">
							Por ello, hemos creado un blog especialmente diseñado <br>
							Para ustedes, en el cual encontrarán información sobre <br>
							Temas laborales y cómo superar los retos que se presenta<br>
							Día a día en este mundo laboral tan competitivo. Por ejem- <br>
							Plo, cómo prepararse y presentarse a una entrevista, si <br>
							Tienen preguntas sobre el AFP, o si quieren impresionar a <br>
							su nuevo jefe el primer día de trabajo – estamos aquí.
							</p>
							<p class="weight-300 size-19">
							Espero que les guste la información que se presenta aquí. <br>
							Por favor, escribenos, ponga sus comentarios, visite nues- <br>
							tro sitio en  Facebook y únanse a la Comunidad Farolito. Esta- <br>mos aquí para ayudar.
							<br><br>
							¡Le esperamos! 
							<div class="compartir hidden-xs">
								<a href="http://www.facebook.com/sharer.php?u=http://anamariaap.github.io/AnaMDeveloper/" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"
									>
									<img src="<?php bloginfo('template_directory');?>/iconos/iconos-facebook.png">
									<p class="text-white">Facebook</p>
								</a>
							</div>
							</p>

						</div>
					</div>
					<div class="col-md-3 hidden-xs">
						<h4 class="text-mostaza hidden-xs">Artículo</h4>
						<div class="section-articulo hidden-xs weight-300 p15 size-18">
							<p>Apredizaje</p>
							<p>Avisos</p>
							<p>General</p>
							<p>Tips & Tricks</p>
						</div>

						<h4 class="text-mostaza pt40 pb20 hidden-xs">Últimos Artículos</h4>
						<div class="section-ultimos text-center mt40 pb20 size-18 weight-300">
							<img src="<?php bloginfo('template_directory');?>/iconos/iconos-22.png">
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
						</div>
						<div class="section-ultimos text-center mt40 pb20 size-18 weight-300">
							<img src="<?php bloginfo('template_directory');?>/iconos/iconos-22.png">
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
						</div>
					</div>
					<div class="col-md-1 hidden-xs"></div>
				</div>
			</div>
		</section>
		<footer class="bgd-grey-grey text-left">
			<div class="container">
				<div class="row">
					<div class="col-md-4 picture-redes">
						<img class="ml5" src="<?php bloginfo('template_directory');?>/iconos/iconos-12.png">
						<img class="ml5" src="<?php bloginfo('template_directory');?>/iconos/iconos-13.png">
						<img class="ml5" src="<?php bloginfo('template_directory');?>/iconos/iconos-14.png">
					</div>
					<div class="col-md-8 derechos pt20">
						<span class="text-white">todos los derechos reservados</span>
					</div>
				</div>
			</div>
		</footer>



<?php get_footer(); ?>