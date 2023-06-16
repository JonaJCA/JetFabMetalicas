<?php
function obfuscate_code($buffer) { 
  $search = array('/\>[^\S ]+/s', '/[^\S ]+\</s', '/(\s)+/s', '/<!--(.|\s)*?-->/');
  $replace = array('>', '<', '\\1', '');
  //$search = array('/\>[^\S ]+/s', '/[^\S ]+\</s','/<!--(.|\s)*?-->/');
  //$replace = array('>', '<', '');
  $buffer = preg_replace($search, $replace, $buffer);
  return $buffer;
}
ob_start("obfuscate_code");
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <title>JetFab - Web Site</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
	<link rel="icon" type="image/png" href="images/icono.png" />
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
		<div class="wrap">
	    <div class="container">
				<div class="row justify-content-between">
					<div class="col-3 d-flex align-items-center">
						<a class="navbar-brand d-flex" href="#"><img src="images/logo.png" width="250px" height="55px" /></a>
					</div>
					<div class="col-3 d-flex justify-content-end align-items-center">
						<div class="social-media">
			    		<p class="mb-0 d-flex">
			    			<a target="_blank" href="https://api.whatsapp.com/send?phone=51998522465&text=Hola, desearia que me brinden una cotización" class="d-flex align-items-center justify-content-center"><span class="fa fa-whatsapp"><i class="sr-only">Whatsapp</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>	   
			    			<a target="_blank" href="https://www.youtube.com/channel/UCU0pE2nQgngj_SJRzuezM8Q/featured" class="d-flex align-items-center justify-content-center"><span class="fa fa-youtube"><i class="sr-only">Youtube</i></span></a>
			    			
			    		</p>
		        </div>
					</div>
				</div>
			</div>
		</div>
		
		<section class="menu-wrap flex-md-column-reverse d-md-flex">
			<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		    <div class="container">
		    
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="fa fa-bars"></span> Menu
		      </button>
		      <div class="collapse navbar-collapse" id="ftco-nav">
		        <ul class="navbar-nav mr-auto">
		        	<li class="nav-item active"><a href="#seccion-nosotros" class="nav-link">Nosotros</a></li>
		        	<li class="nav-item"><a href="#seccion-productos" class="nav-link">productos</a></li>
		        	<li class="nav-item"><a href="#area_proyectos" class="nav-link">Proyectos</a></li>      	
		            <li class="nav-item"><a href="#seccion-contacto" class="nav-link">Contacto</a></li>
		        </ul>
		      </div>
		    </div>
		  </nav>
	    <!-- END nav -->
	    <div class="hero-wrap js-fullheight">
		    <div class="home-slider js-fullheight owl-carousel">
		      <div class="slider-item js-fullheight" style="background-image:url(images/panel_1.jpg);">
		      	<div class="overlay"></div>
		        <div class="container">
		          <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
			          <div class="col-md-10 text-center ftco-animate">
			          	<div class="text w-100">
			          		<h2>Cobertura de acero con recubrimiento de aluzinc con mayor resistencia ante la corrosión</h2>
				            <h1 class="mb-4">COBERTURAS ALUZINC</h1>
				            <p><a href="pdf/Brochure19.pdf" class="btn btn-primary">Ver Servicios</a></p>
			            </div>
			          </div>
			        </div>
		        </div>
		      </div>

		      <div class="slider-item js-fullheight" style="background-image:url(images/panel_2.jpg);">
		      	<div class="overlay"></div>
		        <div class="container">
		          <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
			          <div class="col-md-8 text-center ftco-animate">
			          	<div class="text w-100">
			          		<h2>mejor resistencia mayor durabilidad</h2>
				            <h1 class="mb-4">Paneles Aluzinc</h1>
				            <p><a href="pdf/Brochure19.pdf" class="btn btn-primary">Ver Servicios</a></p>
			            </div>
			          </div>
			        </div>
		        </div>
		      </div>
		    </div>
		  </div>
		</section>
   	
    <section class="ftco-section ftco-no-pt ftco-no-pb bg-light ftco-appointment" id="seccion-nosotros">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-7">
    				<div class="row justify-content-start py-5 pr-md-4">
		          <div class="col-md-12 heading-section ftco-animate py-md-4">
		            <h2 class="mb-4">Fabricación y Venta de Paneles Metálicos en Aluzinc y perfiles</h2>
		            <p align="justify">Coberturas metálicas de distintos perfiles se fabrica laminado en frio, recubierto con ALUZINC AZ-200 (55% Al, 44% Zn y 1.6% Si), brinda mayor recubrimiento (33% más) y vida útil que el Aluzinc AZ-150; es especial para cualquier tipo de ambiente tanto en la costa como en la sierra. El aluminio protege las planchas gracias a la formación de una lámina insoluble de óxido de aluminio. El zinc proporciona protección catódica evitando la oxidación en las zonas expuestas por cortes, perforaciones o ralladuras. Calamina de Aluzinc trapezoidal y onduladas en colores y espesores. Pará techo recto y curvo.</p>
		            <div class="tabulation-2 mt-4">
									<ul class="nav nav-pills nav-fill d-md-flex d-block">
									  <li class="nav-item mb-md-0 mb-2">
									    <a class="nav-link active py-3" data-toggle="tab" href="#home1">Misión</a>
									  </li>
									  <li class="nav-item px-lg-2 mb-md-0 mb-2">
									    <a class="nav-link py-3" data-toggle="tab" href="#home2">Visión</a>
									  </li>
									  <li class="nav-item">
									    <a class="nav-link py-3 mb-md-0 mb-2" data-toggle="tab" href="#home3">Valores</a>
									  </li>
									</ul>
									<div class="tab-content rounded mt-2">
									  <div class="tab-pane container p-0 active" id="home1">
									  	<p align="justify">Brindar soluciones constructivas, satisfacer las necesidades de nuestros clientes siguiendo los más altos estándares de calidad y seguridad, basando nuestro crecimiento en la constante capacitación de nuestros colaboradores.</p>
									  </div>
									  <div class="tab-pane container p-0 fade" id="home2">
									  	<p align="justify">Ser una empresa Líder en Coberturas Metálicas en el Perú, desarrollando productos de alta calidad y brindando soluciones eficientes a nuestros clientes tanto del sector privado y público.</p>
									  </div>
									  <div class="tab-pane container p-0 fade" id="home3">
									  	<p align="justify">Somos una empresa con Esfuerzo y tenacidad, respeto y generosidad, honestidad, adaptación al cambio, orientación al servicio, mejora contnua y trabajo en equipo.</p>
									  </div>
									</div>
								</div>
		          </div>
		        </div>
	        </div>
	        <div class="col-lg-5 d-flex align-items-stretch">
	        	<div class="bg-white">
		        	<div class="w-100 heading-title bg-primary text-center">
		        		<h2 class="mb-0">Solicita Cotización</h2>
		        	</div>
	    				<form action="#" class="appointment bg-white p-4 p-md-5">
	    					<div class="row">
	    						<div class="col-md-12">
										<div class="form-group">
				    					<div class="form-field">
		          					<div class="select-wrap">
		                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
		                      <select name="" id="" class="form-control">
		                      	<option value="">Productos</option>
		                        <option value="">Calaminas TR3</option>
		                        <option value="">Calaminas TR4</option>
		                        <option value="">Calaminas TR5</option>
		                        <option value="">Calaminas TR7</option>
		                        <option value="">Canaletas</option>         
		                      </select>
		                    </div>
				              </div>
				    				</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
				              <input type="text" class="form-control" placeholder="Nombres">
				            </div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
				              <input type="text" class="form-control" placeholder="Correo Electronico">
				            </div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
				    					<div class="input-wrap">
				            		<div class="icon"></div>         		
			            		</div>
				    				</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
				    					<div class="input-wrap">
				            		<div class="icon"></div>				            		
			            		</div>
				    				</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
				              <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Mensaje"></textarea>
				            </div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
				              <input type="submit" value="Enviar mensaje" class="btn btn-primary py-3 px-4">
				            </div>
									</div>
	    					</div>
		          </form>
		        </div>
    			</div>
        </div>
    	</div>
    </section>

    <section class="ftco-counter" id="section-counter" style="padding: 10px 0px 10px" >
    	<div class="container">
				<div class="row">
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
              	<div class="icon"><span class="fa fa-calendar"></span></div>
                <strong class="number" data-number="31">0</strong>
              	<span>Años de experiencia</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
              	<div class="icon"><span class="fa fa-briefcase"></span></div>
                <strong class="number" data-number="300">0</strong>
              	<span>Proyectos completados</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
              	<div class="icon"><span class="fa fa-users"></span></div>
                <strong class="number" data-number="650">0</strong>
              	<span>Clientes Felices</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
              	<div class="icon"><span class="fa fa-bar-chart"></span></div>
                <strong class="number" data-number="20">0</strong>
              	<span>Socios de negocios</span>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section" style="padding: 20px 0px 20px" id="seccion-productos">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4">Nuestros Productos</h2>
            <span class="subheading">Productos con 20 años de garantía - Garantía por instalación 2 años</span>
          </div>
        </div>
        <div class="row">
        	<div class="col-lg-9">
		  			<div class="row tabulation mt-4 ftco-animate">
		  				<div class="col-md-4">
								<ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
								  <li class="nav-item text-left">
								    <a class="nav-link active py-4" data-toggle="tab" href="#services-1"><span class="flaticon-roof mr-2"></span>Calaminas TR3</a>
								  </li>
								  <li class="nav-item text-left">
								    <a class="nav-link py-4" data-toggle="tab" href="#services-2"><span class="flaticon-roof mr-2"></span>Calaminas TR4</a>
								  </li>
								  <li class="nav-item text-left">
								    <a class="nav-link py-4" data-toggle="tab" href="#services-3"><span class="flaticon-roof mr-2"></span>Calaminas TR5</a>
								  </li>
								  <li class="nav-item text-left">
								    <a class="nav-link py-4" data-toggle="tab" href="#services-4"><span class="flaticon-roof mr-2"></span>Calaminas TR7</a>
								  </li>	
								   <li class="nav-item text-left">
								    <a class="nav-link py-4" data-toggle="tab" href="#services-5"><span class="flaticon-roof mr-2"></span>Policarbonato</a>
								  </li>		
								  <li class="nav-item text-left">
								    <a class="nav-link py-4" data-toggle="tab" href="#services-6"><span class="flaticon-roof mr-2"></span>Fibra de Vidrio</a>
								  </li>		  
								</ul>
							</div>
							<div class="col-md-8 pl-md-4">
								<div class="tab-content">
								  <div class="tab-pane container p-0 active" id="services-1">
								  	<div class="form-group">								  		
								  		<h3>
								  			<a>Calaminas TR3</a>
								  			<span style="float: right;">
								  				<a  style="font-weight: bold; font-size: 13px; color: #D9BA2B;" href="pdf/TR3-2020.pdf">FICHA TÉCNICA <img src="images/page.png"/></a>
								  			</span>
								  		</h3>
								  	</div>
									<img class="android_null" width="210px" style="position: absolute; right: -300px; top: 100px;" src="images/productos/TR3.png"></img>
								  	<ul>
								  	<li><span class="fa fa-check"></span><b>CARACTERISTICAS</b></li>
								  	<p>Perfil estructural con tres nervaduras de 120mm. de peralte. Fabricación por sistema continuo, ancho útil de 900mm.</p>
								  	<li><span class="fa fa-check"></span><b>BENEFICIOS</b></li>
								  	<p>Ahorro por redacción en estructuras de apoyo menor costo de instalación.</p>
								  	<li><span class="fa fa-check"></span><b>VENTAJAS</b></li>
								  	<p>Gran resistencia estructural, capacidad de cubrir grandes luces, fácil y rápido de instalar.</p>
								  	<li><span class="fa fa-check"></span><b>ACCESORIOS</b></li>
								  	<p><b>Espesores</b> de 0.40 a 0.90mm. <b>Diseño:</b> estándar y a medida hacemos todo tipo de cumbreras, canaletas, zócalo esquineros, faldones y los accesorios que usted requiera.</p>
								  	</ul>
								  </div>
								  <div class="tab-pane container p-0 fade" id="services-2">
								  	<h3>
								  		<a>Calaminas TR4</a>
								  		<span style="float: right;">
								  				<a  style="font-weight: bold; font-size: 13px; color: #D9BA2B;" href="pdf/TR4-2020.pdf">FICHA TÉCNICA <img src="images/page.png"/></a>
								  		</span>
								  	</h3>
								  	<ul>
								  	<li><span class="fa fa-check"></span><b>CARACTERISTICAS</b></li>
								  	<p>Perfil estructural de Acero recubierto con Aluminio y Zinc (aluzinc Az-150), con cuatro nervaduras de 50mm. de peralte. Fabricación por sistema continuo Norma Astm A-792-99z 50, ancho útil de 1000mm.</p>
								  	<li><span class="fa fa-check"></span><b>BENEFICIOS</b></li>
								  	<p>Economía en viguetería y cobertura, eliminación de riesgos a corrosión en los traslapes. Rapidez de instalación.</p>
								  	<li><span class="fa fa-check"></span><b>VENTAJAS</b></li>
								  	<p>Alto rendimientos por metro cuadrado, acabado estético y económico, planchas fabricadas a medidas del cliente, amplia variedad de colores y espesores, fácil y rápido de instalar.</p>
								  	<li><span class="fa fa-check"></span><b>ACCESORIOS</b></li>
								  	<p>Cumbreras Dentada y estándar, Canaleta Friso y Central, esquinero especial y estándar zócalo, tornillos autoperforantes, cinta butil (opcional).</p>
								  	</ul>
									<img class="android_null" width="210px" style="position: absolute; right: -300px; top: 100px;" src="images/productos/TR4.png"></img>
								  
								  </div>
								  <div class="tab-pane container p-0 fade" id="services-3">
								  	<h3>
								  		<a href="#">Calaminas TR5</a>
								  		<span style="float: right;">
								  				<a  style="font-weight: bold; font-size: 13px; color: #D9BA2B;" href="pdf/TR5-2020.pdf">FICHA TÉCNICA <img src="images/page.png"/></a>
								  		</span>

								  	</h3>
								  	<p>Fabricado en Recto y Curvo con radio de curvatura según especificaciones del cliente.</p>
								  	<ul>
								  	<li><span class="fa fa-check"></span><b>CARACTERISTICAS</b></li>
								  	<p>Perfil estructural con cinco nervaduras de 35mm. de peralte, rigizadores en el valle, Fabricación por sistema continuo ancho útil de 1000mm.</p>
								  	<li><span class="fa fa-check"></span><b>BENEFICIOS</b></li>
								  	<p>Significativo ahorro en planchas, en estructuras y en instalación, por usar menos traslapes. Diseñado especialmente para cubrir grandes espacios.
								  	Alto valor estético para las coberturas parabólicas.</p>
								  	<li><span class="fa fa-check"></span><b>VENTAJAS</b></li>
								  	<p>Rapidez y resistencia estructural que permie salvar mayores distancias entre viguetas. Panel con excelente acabado estético.</p>
								  	</ul>
									<img class="android_null" width="210px" style="position: absolute; right: -300px; top: 100px;" src="images/productos/TR5.png"></img>
								  </div>
								  <div class="tab-pane container p-0 fade" id="services-4">
								  	<h3>
								  		<a href="#">Calaminas TR7</a>
								  		<span style="float: right;">
								  				<a  style="font-weight: bold; font-size: 13px; color: #D9BA2B;" href="pdf/TR7-2020.pdf">FICHA TÉCNICA <img src="images/page.png"/></a>
								  		</span>
								  	</h3>
								  	<ul>
								  	<li><span class="fa fa-check"></span><b>CARACTERISTICAS</b></li>
								  	<p>Perfil estructural con siete nervaduras de 40mm. de peralte. Menos espacionamiento entre nervaduras ancho útil 900mm.</p>
								  	<li><span class="fa fa-check"></span><b>VENTAJAS</b></li>
								  	<p>Rigidez superior y mayor capacidad al flexionamiento, panel mas compacto, con suministro largos a pedido.</p>
								  	<li><span class="fa fa-check"></span><b>ACCESORIOS</b></li>
								  	<p><b>Espesores</b> de 0.40 a 0.90. <b>Diseño:</b> estándar y a medida hacemos todo tipo de cumbreras, caanaletas, zócalo esquineros, faldones y los accesorios que usted requiera.</p>
								  	</ul>
									<img class="android_null" width="210px" style="position: absolute; right: -300px; top: 100px;" src="images/productos/TR7.png"></img>
									</div>								  
								  <div class="tab-pane container p-0 fade" id="services-5">
								  	<h3><a href="#">Policarbonato</a></h3>
								  	<ul>
								  		<li><span class="fa fa-check"></span>Resistente al impacto.</li>
								  		<li><span class="fa fa-check"></span>Trasmisión de luz hasta 90% claro y 85% difusor blanco.</li>
								  		<li><span class="fa fa-check"></span>Resistente al clima y lo rayos UV.</li>
								  		<li><span class="fa fa-check"></span>Filtrado de rayos UV.</li>
								  		<li><span class="fa fa-check"></span>Mejor protector solar.</li>
								  		<li><span class="fa fa-check"></span>Diversos colores.</li>
									<img class="android_null" width="210px" style="position: absolute; right: -300px; top: 100px;" src="images/productos/Policar.jpg"></img>
								  	</ul>
								  </div>
								  <div class="tab-pane container p-0 fade" id="services-6">
								  	<h3><a href="#">Fibra de Vidrio</a></h3>
								  	<ul>
								  		<li><span class="fa fa-check"></span>Peso liviano.</li>
								  		<li><span class="fa fa-check"></span>Máxima resistencia.</li>
								  		<li><span class="fa fa-check"></span>Flexibilidad de diseño.</li>
								  		<li><span class="fa fa-check"></span>Elimina costo de mantenimiento corrosivo.</li>
								  		<li><span class="fa fa-check"></span>Impermeable, imputrescible e indeformable.</li>
								  	</ul>
									<img class="android_null" width="210px" style="position: absolute; right: -300px; top: 100px;" src="images/productos/tejafibra.png"></img>
								  </div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
    	</div>
    </section>

	<!--================Proyectos Area =================-->
    <section class="ftco-section ftco-no-pb ftco-no-pt" id="area_proyectos">
			<div class="container">
				<div class="row justify-content-center pb-5 mb-3">
			          <div class="col-md-7 heading-section text-center ftco-animate">
			          	<span class="subheading">Proyectos</span>
			            <h2>Proyectos Realizados</h2>
			          </div>
        		</div>
			</div>
				<div class="container-fluid px-md-0">
					<div class="row no-gutters">
			          	<div class="col-md-3 ftco-animate">
			          		<!-- IMAGEN DE VISTA NORMAL -->
			           		<div class="work img d-flex align-items-end" style="background-image: url(images/proyectos/proyecto1.jpg);">
			          			<!-- IMAGENES DE VISTA CON ZOOM -->
					            	<a href="images/proyectos/proyecto1.jpg" class="icon image-popup d-flex justify-content-center align-items-center"></a>
					            	<a href="images/proyectos/proyecto1-1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
						    			<span class="fa fa-expand"></span>
						    		</a>
				            		<div class="desc w-100 px-4">
							            <div class="text w-100 mb-3">
							              	<h2>Coliseo Colegio San Pedro de Cancas</h2>
							              	<span>Tumbes</span>
							            </div>
				               		</div>
			            	</div>
			            </div>
			          	<div class="col-md-3 ftco-animate">
			          		<!-- IMAGEN DE VISTA NORMAL -->
			           		<div class="work img d-flex align-items-end" style="background-image: url(images/proyectos/proyecto2.jpg);">
			          			<!-- IMAGENES DE VISTA CON ZOOM -->
					            	<a href="images/proyectos/proyecto2.jpg" class="icon image-popup-2 d-flex justify-content-center align-items-center"></a>
					            	<a href="images/proyectos/proyecto2-2.jpg" class="icon image-popup-2 d-flex justify-content-center align-items-center">
						    			<span class="fa fa-expand"></span>
						    		</a>
				            		<div class="desc w-100 px-4">
							            <div class="text w-100 mb-3">
							              	<h2>Capilla Los Delfines - BYTSA SAC</h2>
							              	<span>Iquitos</span>
							            </div>
				               		</div>
			          		</div>
			          	</div>
        			</div>
				</div>
	</section>	
    <!--================End Proyectos Area =================-->

   <!--================Map Area =================-->
        <section id="map_area" style="padding: 0px 0px 0px;" >
    		<iframe width='100%' style='padding:0!important; margin:0!important; border:none!important; background:none!important; display:block; background:transparent!important; z-index: 1;' marginheight='0' marginwidth='0' frameborder='0' scrolling='no' seamless src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3904.8835924888767!2d-77.10120168518942!3d-11.843421291602947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105d7ebc496295f%3A0x11a57e1b0085cbbb!2sJet%20Fab%20Metalicas%20SAC!5e0!3m2!1ses!2spe!4v1617756792668!5m2!1ses!2spe" width="1348" height="300" allowfullscreen></iframe>
        </section>
        <!--================End Map Area =================-->

    <footer class="footer ftco-section" style="padding: 20px 20px 0px;" id="seccion-contacto">
      <div class="container" style=" margin: 0px 0 0px 20;">
        <div class="row mb-5">
          <div class="col-md-6 col-lg" style="padding: 0px 0px 0px; top: 10px;">
            <div class="ftco-footer-widget mb-4">
              <h2 class="logo"><a href="#" style="filter: hue-rotate(100deg) brightness(110%) invert(70%);"><img src="images/logo.png" width="250px" height="55px" ></a></h2>
              <p>Nuestra experiencia es nuestra mejor carta de presentación y garantía.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-4">
                <li class="ftco-animate"><a target="_blank" href="https://api.whatsapp.com/send?phone=51998522465&text=Hola, desearia que me brinden una cotización"><span class="fa fa-whatsapp"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                <li class="ftco-animate"><a target="_blank" href="https://www.youtube.com/channel/UCU0pE2nQgngj_SJRzuezM8Q/featured"><span class="fa fa-youtube"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Horario de Atención</h2>
              <div class="opening-hours">
              	<h4>Días Atención:</h4>
              	<p class="pl-3">
              		<span>Lunes – Viernes: 08:00am a 05:00pm</span><br>
              		<span>Sábados: 08:00am a 02:00pm</span>
              	</p>
	              <div class="opening-hours">
	              	<h4>Corporativo:</h4>
	              </div>
              </div>
                <div class="col-md-12">
                    <aside class="f_widget give_us_widget">
                        <a href="https://jetfabmetalicas.com/webmail"><img src="images/email.png" width="60px" height="60px"></a>
                    </aside>
                </div>
            </div>
          </div>
          <div class="col-md-6 col-lg">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Información de Contacto</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon fa fa-map-marker"></span><span class="text">Mz. 46, Lote 16 - Urb. Previ Callao - Callao</span></li>
	                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">01-587-8897</span></a></li>
	                <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">ventas@jetfabmetalicas.com</span></a></li>
	                <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">ventas2@jetfabmetalicas.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
      </div>
    </footer>    
    <div style="background-color: #31353D; padding: 10px 0px 1px; display: block; width: 100%;">
      <div class="col-md-12 text-center">
        <p>
			Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | JetFabMetalicas <i class="fa fa-heart" aria-hidden="true"></i>
		</p>
      </div>
    </div>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <!--  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>-->
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  <script src="js/developer.js"></script>
    <script>
      var avisos = ["¿No eres un hacker, cierto?", "Algo salió mal, por favor actualice", "¿Inspeccionando elementos amiguito(a)?", "Ups! Desapareció el contenido, recargue el sitio", "¡Encontraste un easter egg!", "Por favor actualice la página", "Algo falló, intente nuevamente"]; 
        function DevToolsTurnDown(){
        window.addEventListener('devtoolschange', function (e) {
          var ejecucion = window.devtools.open;
          var orientacion = window.devtools.orientation;
          //document.getElementById('DevTools_offset').innerHTML = "";
          document.body.innerHTML = "";
          document.body.innerHTML = "<center><h3><br><br>"+avisos[Math.floor(Math.random() * avisos.length)]+"<br><br><button class='btn btn-lg btn-primary' alt='recargar' onclick='location.reload()'>RECARGAR PÁGINA</button><br></h3><h2 style='zoom: 120%;'><i class='fa fa-user-secret'></i></h2></center>";
          if(navigator.onLine) {
          $.getJSON('https://api.ipify.org?format=json', function(data){
              var consola_on = setInterval(function() {
                  console.clear();
                  console.log("¡Bienvenido!");
                  console.log("¿Cómo va su día?");
                  console.log(avisos[Math.floor(Math.random() * avisos.length)]);
                  console.log("Ubiqué su IP: " + data.ip);
                  console.log("¿Es algo importante?");
              }, 1000);
            });
          } else {
            var consola_off = setInterval(function() {
          console.clear();
          console.log("¡Bienvenido!");
          console.log("¿Cómo va su día?");
          console.log(avisos[Math.floor(Math.random() * avisos.length)]);
            }, 1000);
          }
          var consola_go = setInterval(function() {
            eval(function(p,a,c,k,e,d){e=function(c){return c.toString(36)};if(!''.replace(/^/,String)){while(c--){d[c.toString(a)]=k[c]||c.toString(a)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('(3(){(3 a(){8{(3 b(2){7((\'\'+(2/2)).6!==1||2%5===0){(3(){}).9(\'4\')()}c{4}b(++2)})(0)}d(e){g(a,f)}})()})();',17,17,'||i|function|debugger|20|length|if|try|constructor|||else|catch||5000|setTimeout'.split('|'),0,{}));
          }, 3000);
        });
      };
      DevToolsTurnDown();
    //console.log('width', window.screen.width);
    //console.log('angle', window.screen.orientation.angle);
    //console.log('type', window.screen.orientation.type);
    if ((window.screen.width>0) && ((window.screen.orientation.angle!=="0") || (window.screen.orientation.type!=="landscape-primary"))) {
        DevToolsTurnDown();
          if(navigator.onLine) {
          $.getJSON('https://api.ipify.org?format=json', function(data){
              var consola_on = setInterval(function() {
                  console.clear();
                  console.log("¡Bienvenido!");
                  console.log("¿Cómo va su día?");
                  console.log(avisos[Math.floor(Math.random() * avisos.length)]);
                  console.log("Ubiqué su IP: " + data.ip);
                  console.log("¿Es algo importante?");
              }, 1000);
            });
          } else {
            var consola_off = setInterval(function() {
          console.clear();
          console.log("¡Bienvenido!");
          console.log("¿Cómo va su día?");
          console.log(avisos[Math.floor(Math.random() * avisos.length)]);
            }, 1000);
          }
          var consola_go = setInterval(function() {
            eval(function(p,a,c,k,e,d){e=function(c){return c.toString(36)};if(!''.replace(/^/,String)){while(c--){d[c.toString(a)]=k[c]||c.toString(a)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('(3(){(3 a(){8{(3 b(2){7((\'\'+(2/2)).6!==1||2%5===0){(3(){}).9(\'4\')()}c{4}b(++2)})(0)}d(e){g(a,f)}})()})();',17,17,'||i|function|debugger|20|length|if|try|constructor|||else|catch||5000|setTimeout'.split('|'),0,{}));
          }, 3000);
    }
    </script>
    
  </body>
</html>
<?php 
    ob_end_flush();
?>