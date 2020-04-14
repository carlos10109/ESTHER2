<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script>$( document ).ready(function(){
    $('.carousel').carousel({
      interval: 2000
    })
    });
    </script>
</head>
<body>
    
<header>
<div id="encabezado">
    <div id="menu">
      
      <ul>
        <li><a href="index.php" title="Home">Home</a></li>
        <li><a href="login.php" title="Login">Login</a></li>
        <li><a href="registro.php" title="Registro" >Registro</a></li>
        <li><a href="categorias.php" title="categoria">Categorias</a></li>
        <li><a href="pedidos.php" title="pedidos">Pedidos</a></li>
        <li><a href="nosotros.php" title="Nosotros">Nosotros</a></li>
        
      </ul>
    </div>
    </div>

</header>


<article>
    <br>
    <br>
<div class="atras" >
      <div id="frente">

        <center><h2>Envíos gratis a partir de $999.00</h2> </center>
  <br>
  <center> <h3>ELIGE TU ESTILO...</h3> </center>
   <br>
   <br>

   <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1" ></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2" ></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/man.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Caballeros</h5>
        <p>Quién dijo que el estilo sólo es para mujeres</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/maletas.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>MALETAS</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/c1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>damas</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<br>
<br>
  <H3>GALERÍA</H3>


<table>
    <tr>
        <td></td>
        <td> </td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td><img src="img/car5.jpg" alt="" width="550 px" height="450px"></td>
        <td><img src="img/car8.jpg" alt="" width="530 px" height="430px"></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>Colores disponibles:</td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>Comprar <img src="comprar." alt=""></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>

</table>

<section id="three" class="wrapper style1">
					<div class="container">
						<header class="major special">
							<h2>Nuestras Bolsas</h2>
						</header>
						<div>
							<table>
							<tr>
								<th>ID</th>
								<th>NOMBRE</th>
								<th>DESCRIPCION</th>
								<th>TIPO</th>
								<th>PRECIO</th>
								<th>EXISTENCIA</th>
								<th>IMAGEN</th>
							</tr>
							<?PHP
								include_once 'conexion.php';
								$mysqlConexion=new mysqli($servidorBd,$usuarioBd,$claveBd,$nombreBd);
								$consulta="Select * from bolsas";
								$resultado=$mysqlConexion->query($consulta);
								while($registro=$resultado->fetch_assoc())
								{
									?>
									<tr>
										<td><?PHP echo $registro["Id"];?></td>
										 <td><?PHP echo $registro["Nombre"];?></td>
										 <td><?PHP echo $registro["Descripcion"];?></td>
										 <td><?PHP echo $registro["Tipo"];?></td>
										 <td><?PHP echo $registro["Precio"];?></td>
										 <td><?PHP echo $registro["Existencia"];?></td>
										 <td><a href=""><img src="images/Comprar.png" alt=""> </a></td>
									</tr>
									<?PHP
								}
								
							?>
							</table>
						</div>
					</div>
				</section>





















      </div>
    </div>
    
</article>

<footer>
<div class="piePagina">
    
 
<div>
  <a href="#"><span>Facebook</span></a> <br>
  <a href="#"><span>Twitter</span></a>  <br>
  <a href="#"><span>Instagram</span></a> <br>
 
</div>




     </div>
</footer>

</body>
</html>