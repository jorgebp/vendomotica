<!DOCTYPE html>
<html lang="en">
<head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="js/javascript.js"></script>
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
                      <!-- Fin Indicators -->
                      <!-- Wrapper for slides -->
                      <div class="carousel-inner" role="listbox">
                        <div class="item active">
                          <img src="http://www.adobewordpress.com/wp-content/uploads/2014/02/wallpaper-thumb-941.jpg">
                          <div class="carousel-caption">Görsel #1</div>
                        </div>
                        <div class="item">
                          <img src="http://www.adobewordpress.com/wp-content/uploads/2014/02/wallpaper-thumb-101.jpg">
                          <div class="carousel-caption">Görsel #2</div>
                        </div>
                        <div class="item">
                          <img src="http://www.adobewordpress.com/wp-content/uploads/2014/02/wallpaper-thumb-1051.jpg">
                          <div class="carousel-caption">Görsel #3</div>
                        </div>
                        <div class="item">
                          <img src="http://www.adobewordpress.com/wp-content/uploads/2013/07/wallpaper-thumb-74.jpg">
                          <div class="carousel-caption">Görsel #4</div>
                        </div>
                      </div>
                      <!-- Fin Wrapper for slides -->
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
            <div class="container">
        <div class="col-lg-9 col-lg-offset-3">
            <form action="insertarUsu.php" class="formReg-container" method="post">
                <h1>Crear Cuenta</h1>                
                <input type="text" placeholder="Nombre" name="nombre" required>                
                <input type="text" placeholder="Apellido" name="apellido" required>
                <input type="mail" placeholder="Email" name="email" required>                
                <input type="password" placeholder="Clave" name="psw" required>    
                <input type="hidden" name="rol" value="3">
                <button type="submit" class="btn">Registrar</button>        
            </form>    
        </div>
    </div>

<br>
<br>
<br>
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
                                    <img src="img/facebook.png" alt="">
                                    <img src="img/instagram.png" alt="">
                                    <img src="img/whatsapp.png" alt="">
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