
<!DOCTYPE HTML>
<html>
<head>
<title>Familyvending</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (Plugins JavaScript necesarios) -->
<script src="js/bootstrap.js"></script>
<!-- CSS de customización-->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="shortcut icon" href="images/icono.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Servicio de snack, bebidas frías y calientes a través de máquinas expendedoras" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Círculos -->
<link rel="stylesheet" type="text/css" href="css/common.css" />
<link rel="stylesheet" type="text/css" href="css/style4.css" />
<script type="text/javascript" src="js/modernizr.custom.79639.js"></script>

<script src="js/jquery.min.js"></script>
<!--/animated-css-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<!--CSS menu fjo-->
<style type="text/css">  
<!--   
#menu {  
    position:fixed;  
    font-family:verdana,arial;  
            font-size:11pt;  
            text-align:center;  
            padding: 10px 5px 10px 5px;    /* margen con valores: arriba - derecha - abajo - izquierda */   
            top: 0px;                    /* Distancia hasta el borde superior */  
    left: 0px;            /* Distancia hasta el borde izquierdo */ 
        width:100%;  
        background-color:#FCAF62;   
        z-index: 1;               /* hace que la capa sea opaca  */  
}  

#texto {  
    position:absolute;  
    margin: 20px 5px 10px 5px;    /* margen con valores: arriba - derecha - abajo - izquierda */   
    font-family:verdana,arial;  
    font-size:10pt;  
}  
-->  
</style>  

</head>
<body>
<!-- header -->
	<div class="top-header">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<!-- Menú responsive -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" 
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Menú</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="logo">
					    	<img src="img/maquina.jpg" width="192" height="60" >
                        </div>
					</div>					  
					<!-- Menú principal -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li class="active"><a href="index.php">Inicio</a></li>
							<li><a href="servicios.php">Servicios</a></li>
							<li><a href="productos.php">Productos</a></li>
							<li><a href="galeria.php">Galería</a></li>
							<li><a href="contacto.php">Contacto</a></li>
						</ul>         
					</div><!-- /Cierra menú -->
				</div><!-- /Cierra header -->
			</nav>	
		</div>
	</div>
<script src="js/responsiveslides.min.js"></script>
<script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: false,
      	nav: false,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
	
</script>
	<div class="header-slider">
		<div class="slider">
			<div class="callbacks_container">
			  <ul class="rslides" id="slider">
				<div class="slid banner1">
					<div class="caption">
                    
                    </div>
				</div>
				<div class="slid banner2">
					<div class="caption">
						
					</div>
				</div>
			</ul>
		  </div>
	  </div>
</div>
<!-- services -->
<div id="services" class="services">
	 <div class="container">
			<div class="service-info">
            <br><br>
				<h3>Bienvenido a Familyvending</h3>
				<p>Con 2 años de experiencia en el rubro, proveemos un servicio de snack, bebidas frías y calientes a 
                través de máquinas expendedoras. ¿Necesitas satisfacer la demanda de alimentos en tu empresa o centros de salud? ¡No busques más!</p>
			</div>
			<div class="clearfix"></div>
            <br><hr><br>
            <div class="projects-info">
				<h3>Nuestro Servicio Incluye</h3>
				<ol class="breadcrumb">
				  <li>Reposición periódica</li>
				  <li>Productos de calidad</li>
                  <li>Mantención de Máquinas diarias</li>
				  <li>Entre otros.</li>
				</ol>
			</div>
	 </div>		
</div>

<!-- Círculos -->
	<div class="team">
			<div class="team-bottom">
				<ul class="ch-grid">
					<li>
						<div class="ch-item ch-img-1">				
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-1"></div>
									<div class="ch-info-back">
										<p>Familyvending</p>
										<h3>Máquinas de Calidad</h3>
									</div>	
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item ch-img-2">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-2"></div>
									<div class="ch-info-back">
										<p>Familyvending</p>
										<h3>Satisfacción Garantizada</h3>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item ch-img-3">
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front ch-img-3"></div>
									<div class="ch-info-back">
										<p>Familyvending</p>
										<h3>Precios Accesibles</h3>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
	</div>
<!-- / -->
<br><br>
<div class="testimonial">
		<div class="container">
					<div  id="top" class="callbacks_container">
						<ul class="rslides" id="slider2">
							<li>
								<div class="testimonial-grids">
									<div class="testimonial-left">
										<img src="img/maquina3.jpg" alt="" />
									</div>
									<div class="testimonial-right">
										<h5>¿Necesitas una máquina en Santiago?</h5>
                                        <h5>¡Contáctanos!</h5>
										<p>Llámanos al +56 9 71830802</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</li>
						</ul>
				</div>
		</div>
 </div>

<!-- footer -->
<div class="copywrite">
	 <div class="container">
			 <p>&copy; 2019 Familyvending. Todos los derechos reservados<br>
			 Sitio desarrollado por Jorge Beltrán</p>
	 </div>
</div>
<!---->
<script type="text/javascript">
		$(document).ready(function() {
				/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/
		$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!----> 
<!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="js/bootstrap.js"></script>	  
</body>
</html>