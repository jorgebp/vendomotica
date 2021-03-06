<!DOCTYPE html>
<html lang="en">
<head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="js/javascript.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba</title>
</head>
<body>
    <header style="background: #0000ff;">
        <div >
            <p style="color: #fff;">+56 9 8227 1625</p>
        </div>
    </header>

    <div>
        <div>

        </div>
        <!--Div Menu-->
        <div>
                <nav class="navbar navbar-default" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-left">
                                <img src="img/logo.jpg" alt="">
                            </ul>
                            <ul class="nav navbar-nav navbar-center">
                                  <li><a href="index.php">HOME</a></li>
                                  <li><a href="servicios.php">SERVICIOS</a></li>
                                  <li><a href="productos.php">PRODUCTOS</a></li>
                                  <li><a href="galeria.php">GALERIA</a></li>
                                  <li><a href="contacto.php">CONTACTO</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                
                            </ul>
                        </div>
                    </nav>
        </div>
    </div>
            <div>
                <section class="awSlider">
                    <div  class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target=".carousel" data-slide-to="0" class="active"></li>
                        <li data-target=".carousel" data-slide-to="1"></li>
                        <li data-target=".carousel" data-slide-to="2"></li>
                        <li data-target=".carousel" data-slide-to="3"></li>
                      </ol>
                  
                      <!-- Wrapper for slides -->
                      <div class="carousel-inner" role="listbox">
                        <div class="item active">
                          <img src="img/maquina1.jpg">
                          <div class="carousel-caption">CESFAM APOQUINDO</div>
                        </div>
                        <div class="item">
                          <img src="img/maquina1.jpg">
                          <div class="carousel-caption">PLAYTAM</div>
                        </div>
                        <div class="item">
                          <img src="img/maquina1.jpg">
                          <div class="carousel-caption">CESFAM LAS CONDES</div>
                        </div>
                        <div class="item">
                          <img src="img/maquina1.jpg">
                          <div class="carousel-caption">ROYAL ÁMERICA</div>
                        </div>
                      </div>
                  
                      <!-- Controls -->
                      <a class="left carousel-control" href=".carousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Geri</span>
                      </a>
                      <a class="right carousel-control" href=".carousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">İleri</span>
                      </a>
                    </div>
                  </section>
            </div>
            <!-- Fin Controls -->
            <section class="container">
		<div class="row">
		<h3 class="center-align">CONTACTO</h3>
			<article class="col s6 offset-s3">
				<form method="POST" action="metodos/envio_form.php">
					<div class="input-field">
						<i class="material-icons prefix">perm_identity</i>
						<label for="nombre">Nombre</label>
						<input type="text" name="nombre" required>
					</div>

					<div class="input-field">
						<i class="material-icons prefix">person_pin</i>
						<label for="apellido">Apellido</label>
						<input type="text" name="apellido" required>
					</div>
					
					<div class="input-field">
						<i class="material-icons prefix">email</i>
						<label for="email">Email</label>
						<input type="email" name="email" required>
					</div>

          <div class="input-field">
          <i class="material-icons prefix">report</i>
						<label for="motivo">Motivo</label>
            <input type="text" name="motivo" required>
          </div> 

					<div class="input-field">
						<i class="material-icons prefix">mode_edit</i>
						<label for="mensaje">Mensaje</label>
						<textarea name="mensaje" id="" rows="10" class="materialize-textarea"  length="160" required></textarea>
					</div>
					
					<p class="center-align">
						<button class="waves-effect waves-light btn" type="submit"><i class="material-icons right">send</i>Enviar</button>
					</p>

				</form>

			</article>
		</div>
	</section>


	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>

  <br />
<br />
<br />
            <div>
                    <nav class="navbar navbar-default color colorfondo" role="navigation">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        
                                    <span class="icon-bar"><img src="" alt=""></span>
                                    <span class="icon-bar"><img src="" alt=""></span>
                                    <span class="icon-bar"><img src="" alt=""></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-left">
                                        <li><a href="index.php">HOME</a></li>
                                        <li><a href="servicios.php">SERVICIOS</a></li>
                                        <li><a href="productos.php">PRODUCTOS</a></li>
                                        <li><a href="galeria.php">GALERIA</a></li>
                                        <li><a href="contacto.php">CONTACTO</a></li>
                                </ul>
                                <ul class="nav navbar-nav navbar-center" >
                                        <li><a href="https://www.facebook.com" target="_blank"><img src="img/facebook.png" alt=""></a></li>
                                        <li><a href="https://www.instagram.com" target="_blank"><img src="img/instagram.png" alt=""></a></li>
                                        <li><a href="https://web.whatsapp.com/🌐/es" target="_blank"><img src="img/whatsapp.png" alt=""></a></li>
                                </ul>
                                
                                <ul class="nav navbar-nav navbar-right">
                                        <p style="color: #fff;">Ubicación: Alonso de Córdoba 1950 Of 804, Las Condes</p>
                                </ul>
                            </div>
                    </nav>
            </div>
        </div>

        <footer>
            
        </footer>
</body>
</html>