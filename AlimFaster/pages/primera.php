<?php
	session_start();
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Refresh" content="300"> <!--Se refrescara la pagina cada 300 segundos es decir 5 minutos-->
<meta name="application-name" content="Reserva de mesas,pedidos de menus personalizados  y pagos via online para restaurantes gourmet">
<meta name="author" content="Claudia Torres, clao91torrestorres@gmail.com" /> 
<meta name="copyright" content="AlimFaster"> <!--Nombre de la compa�ia-->
<meta name="organization" content="AlimFaster S.A." /> <!--Nombre de la Organizacion-->
<meta name="language" content="es-ES" /> <!--Lenguaje de la pagina web espa�ol-->
<meta name="classification" content="Reservas">
<meta name="description" content="Reserva de espacio en un restaurante de gourmet asociado" /> <!--Descripcion de la pagina web-->
<meta name="generator" content="Bloc de notas,gedit"> <!--Cual es la herramienta que se utiliza para editar, crear la pagina web-->
<meta name="keywords" content="reserva de restaurantes gourmet,  reserva de pedido y pago online de restaurantes gourmet, reserva de un espacio en restaurantes gourmet" /> <!--Palabras claves para que los navegadores puedan identificar y rankear nuestra pagina web-->
<meta name="robots" content="index,follow"> <!--etiqueta que sirve para que los bucadores puedan recorrer tu pagina web-->
<link href="../css/styleRestaurant.css" rel="stylesheet" type="text/css">
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
<title>Eleccion de restaurante Online - Restaurant</title>
</head>
<body >
<!--Esto es para estilos responsive manueales -->
<!--<div class="prueba">Probando</div>
<div class="prueba">Probando</div>
<div class="prueba">Probando</div>
<div class="prueba alfa omega">Probando</div>
-->
<!-- boostrap -->
<div class="jumbotron">
<div class="bannerSuperior">

	<!-- Logo Y Texto Banner  -->
<div class="jumbotron">
<div class="banImgText">
				 <div class="col-md-8">
				<img src="../img/logotipo.png" title="Restaurante1"  height="100" width="240" alt="px">
				</div>
				<div class="col-md-4">
				<h1>Restaurant</h1>
				</div>
</div>
				</div>
				
<!-- Botones  -->
<div class="jumbotron">
<div class="botones">

				<a href="administracion_pagina.php"><button type="button" class="botonHomeNextBack"><img src="../img/home.png" height="40" width="40" alt="px"></button></a>
				
				<a href="../index.php"><button type="button" class="botonHomeNextBack"><img src="../img/back.png" height="40" width="40" alt="px"></button></a>
</div>
</div>

</div>
</div>
<div class="fondoPantalla" style='width: 100%'>
<div class="table-responsive">     
<table class="table">
    <tbody>
      <tr>
            <td>
				<a href="segunda.php">
		<button type="button" class="bordeBoton"><img src="../img/logoR1.jpg" title="Restaurante2"  height="150" width="150" alt="px">

<div vocab="http://schema.org/" typeof="Restaurant">
      <span property="name" content="Cocolon"></span>
      <div property="aggregateRating" typeof="AggregateRating">
        <span property="ratingValue" content="4"></span> 
        <span property="reviewCount" content="250"></span>
      </div>
      <span property="telephone" content="(04) 257-1051"></span>
      <!--<a property="url" href="http://www.cocolon.com.ec/"</a>-->
      <meta property="openingHours" content="Mo-Sa 11:00-14:30">
      <meta property="openingHours" content="Mo-Th 17:00-21:30">
      <meta property="openingHours" content="Fr-Sa 17:00-22:00">
      <span property="servesCuisine" content="Tipica ecuatoriana">
      </span>
      <span property="priceRange" content="$20 - $80"></span>
    </div>

		</button>
		</a>
            </td>
            <td>
				<a href="segunda.php">
                <button type="button" class="bordeBoton"><img src="../img/logoR2.jpg" title="Restaurante2"  height="150" width="150" alt="px">


		</button>
		</a>
            </td>
            <td>
				<a href="segunda.php">
                 <button type="button" class="bordeBoton"><img src="../img/logoR3.jpg" title="Restaurante3"  height="150" width="150" alt="px">


<div vocab="http://schema.org/" typeof="Restaurant">
      <span property="name" content="Puerto Moro"></span>
      <div property="aggregateRating" typeof="AggregateRating">
        <span property="ratingValue" content="4"></span> 
        <span property="reviewCount" content="250"></span>
      </div>
      <div property="address" typeof="PostalAddress">
        <span property="streetAddress" content="Circunvalaci�n 320 y Diagonal esquina - C.C. Las Terrazas. - C.C. Mall del Sol - Centro"></span>
        <span property="addressLocality" content="-Urdesa - V�a a Samborond�n - Rio centro - C.C. R�o Centro Ceibos planta alta. - C.C. Mall del Sol - Cordoba 703 y Junin"></span>
        <span property="addressRegion" content="Guayaquil"></span> 
      </div>
      <span property="telephone" content="2884630 - 6007111"></span>
      <!--<a property="url" href="http://www.puertomoro.com/"></a>-->
      <meta property="openingHours" content="Mo-Sa 11:00-14:30">
      <meta property="openingHours" content="Mo-Th 17:00-21:30">
      <meta property="openingHours" content="Fr-Sa 17:00-22:00">
      <span property="servesCuisine" content="Restaurante de Carnes y Mariscos al Carb�n">
      </span>
      <span property="priceRange" content="$20 - $80"></span>
    </div>

		</button>
		</a>
            </td>
            <td>
				<a href="segunda.php">
                <button type="button" class="bordeBoton"><img src="../img/logoR4.jpg" title="Restaurante4"  height="150" width="150" alt="px">

<div vocab="http://schema.org/" typeof="Restaurant">
      <span property="name" content="Parrillada Punta del Este"></span>
      <div property="aggregateRating" typeof="AggregateRating">
        <span property="ratingValue" content="4"></span> 
        <span property="reviewCount" content="250"></span>
      </div>
      <div property="address" typeof="PostalAddress">
        <span property="streetAddress" content="calle primera #512 entre avenida sexta y 25 de Julio"></span>
        <span property="addressLocality" content="Cdla. 9 de octubre"></span>
        <span property="addressRegion" content="Guayaquil"></span> 
      </div>
      <span property="telephone" content="(04) 249-9032"></span>
      <!--<a property="url" href="http://www.parrilladapuntadeleste.ec/"></a>-->
      <meta property="openingHours" content="Mo-Sa 11:00-14:30">
      <meta property="openingHours" content="Mo-Th 17:00-21:30">
      <meta property="openingHours" content="Fr-Sa 17:00-22:00">
      <span property="servesCuisine" content="Su especialista en comidas al carb�n">
      </span>
      <span property="priceRange" content="$20 - $80"></span>
    </div>

		</button>
		</a>
            </td>
          </tr>
		   <tr>
            <td>
				<a href="segunda.php">
                <button type="button" class="bordeBoton"><img src="../img/logoR5.jpg" title="Restaurante5"  height="150" width="150" alt="px">

<div vocab="http://schema.org/" typeof="Restaurant">
      <span property="name" content="Parrillada del �ato"></span>
      <div property="aggregateRating" typeof="AggregateRating">
        <span property="ratingValue" content="4"></span> 
        <span property="reviewCount" content="250"></span>
      </div>
      <div property="address" typeof="PostalAddress">
        <span property="streetAddress" content="V�ctor Emilio Estrada #1219 y Laureles"></span>
        <span property="addressLocality" content="Urdesa central"></span>
        <span property="addressRegion" content="Guayaquil"></span> 
      </div>
      <span property="telephone" content=" (04)-238-7098"></span>
      <!--<a property="url" href="http://www.parrilladelnato.com/index.php/es/"></a>-->
      <meta property="openingHours" content="Mo-Sa 11:00-14:30">
      <meta property="openingHours" content="Mo-Th 17:00-21:30">
      <meta property="openingHours" content="Fr-Sa 17:00-22:00">
      <span property="servesCuisine" content="Sirviendo desde 1980">
      </span>
      <span property="priceRange" content="$20 - $80"></span>
    </div>

		</button>
		</a>
            </td>
            <td>
				<a href="segunda.php">
                <button type="button" class="bordeBoton"><img src="../img/logoR6.png" title="Restaurante6"  height="150" width="150" alt="px">

<div vocab="http://schema.org/" typeof="Restaurant">
      <span property="name" content="Chili's"></span>
      <div property="aggregateRating" typeof="AggregateRating">
        <span property="ratingValue" content="4"></span> 
        <span property="reviewCount" content="250"></span>
      </div>
      <div property="address" typeof="PostalAddress">
        <span property="streetAddress" content="Riocentro Los Ceibos, Planta alta."></span>
        <span property="addressLocality" content="Los Ceibos"></span>
        <span property="addressRegion" content="Guayaquil"></span> 
      </div>
      <span property="telephone" content="(04) 283-9972"></span>
      <!--<a property="url" href="http://www.chilis.com.ec/"></a>-->
      <meta property="openingHours" content="Mo-Sa 11:00-14:30">
      <meta property="openingHours" content="Mo-Th 17:00-21:30">
      <meta property="openingHours" content="Fr-Sa 17:00-22:00">
      <span property="priceRange" content="$20 - $80"></span>
    </div>

		</button>
		</a>
            </td>
            <td>
				<a href="segunda.php">
                 <button type="button" class="bordeBoton"><img src="../img/logoR7.png" title="Restaurante7"  height="150" width="150" alt="px">

<div vocab="http://schema.org/" typeof="Restaurant">
      <span property="name" content="Wingers"></span>
      <div property="aggregateRating" typeof="AggregateRating">
        <span property="ratingValue" content="4"></span> 
        <span property="reviewCount" content="250"></span>
      </div>
      <div property="address" typeof="PostalAddress">
        <span property="streetAddress" content="Avenida Las Monjas y Carlos Julio Arosemena, Centro Comercial Aventura Plaza, local 35"></span>
        <span property="addressLocality" content="Norte"></span>
        <span property="addressRegion" content="Guayaquil"></span> 
      </div>
      <span property="telephone" content="0967500100- 042205286 - 046025899 - 045022755"></span>
      <!--<a property="url" href="http://www.wingersrestaurants.com/"></a>-->
      <meta property="openingHours" content="Mo-Sa 11:00-14:30">
      <meta property="openingHours" content="Mo-Th 17:00-21:30">
      <meta property="openingHours" content="Fr-Sa 17:00-22:00">
      <span property="servesCuisine" content="Hamburguesas, Diners americanos, Comida r�pida y Bocadillos">
      </span>
      <span property="priceRange" content="$20 - $80"></span>
    </div>

		</button>
		</a>
            </td>
            <td>
				<a href="segunda.php">
                <button type="button" class="bordeBoton"><img src="../img/logoR8.png" title="Restaurante8"  height="150" width="150" alt="px">

<div vocab="http://schema.org/" typeof="Restaurant">
      <span property="name" content="Sports Planet"></span>
      <div property="aggregateRating" typeof="AggregateRating">
        <span property="ratingValue" content="4"></span> 
        <span property="reviewCount" content="250"></span>
      </div>
      <div property="address" typeof="PostalAddress">
        <span property="streetAddress" content="Av. Francisco de Orellana S/N y Carlos Luis Plaza Da��n"></span>
        <span property="addressLocality" content="Edif. C.C. San Marino"></span>
        <span property="addressRegion" content="Guayaquil"></span> 
      </div>
      <span property="telephone" content="(04) 208-3149"></span>
      <!--<a property="url" href="http://sportsplanet.ws/ubicacion.php"></a>-->
      <meta property="openingHours" content="Mo-Sa 11:00-14:30">
      <meta property="openingHours" content="Mo-Th 17:00-21:30">
      <meta property="openingHours" content="Fr-Sa 17:00-22:00">
      <span property="servesCuisine" content="Hamburguesas, Comida r�pida y Bocadillos">
      </span>
      <span property="priceRange" content="$20 - $80"></span>
    </div>

		</button>
		</a>
            </td>
          </tr>
    </tbody>
  </table>
  </div>
</div>


<div class="footer">
Contactenos: desarrollo@gmail.com.<br/> Ecuador 2015
</div>
</body>
</html>
