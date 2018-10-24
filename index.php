<?php

$errores = '';
$enviado = '';

if (isset($_POST['form-inicio'])) {
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$telefono = $_POST['telefono'];
	$mensaje = $_POST['mensaje'];
	$paquete = $_POST['paquete'];


	//Validación de nombre del formulario inicio 
	if (!empty($nombre)) {
		$nombre = trim($nombre);
		$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
	}elseif (empty($nombre)) {
		$errores .= '<p>* Por favor ingrese un nombre</p>';
	}
	//validacion de correo del fomulario inicio
	if (!empty($correo)) {
		$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
		if (!filter_var($correo, FILTER_SANITIZE_EMAIL)) {
			$errores .= '<p>* Correo invalido</p>';
		}
	}elseif (empty($correo)) {
		$errores .= '<p>* Por favor ingrese un correo</p>';
	}
	//validacion de numero telefonico
	if (empty($telefono)) {
		$errores .= '<p>*Ingresa un numero valido';
	}
	//validacion de paquete del formulario
	if (empty($paquete)) {
		$errores .= '<p>*Elige el viaje de interes';

	} 

	//validacion de mensaje en fomulario inicio
	if(!empty($mensaje)){
		$mensaje = htmlspecialchars($mensaje);
		$mensaje = trim($mensaje);
		$mensaje = stripslashes($mensaje);

	}elseif (empty($mensaje)) {
		$errores .= '<p>* Por favor escribe tu mensaje</p>';
	}

	if (empty($errores)) {

		$texto=       
		"<html> 
            <head></head>
            <body>
                  <h1>Formulario de Contacto</h1> 
                  <p><b>De: </b>$nombre</p> 
                  <p><b>Correo: </b>$correo</p> 
                  <p><b>Mensaje: </b> $mensaje</p> 
            </body>
      </html>";
      $cabeceras = "MIME-Version: 1.0" . "\r\n";
      $cabeceras .= "Content-type:text/html;charset=UTF-8" . "\r\n";
      $para = 'paquetes@viajonline.com.mx';
      $titulo = 'Formulario de contacto(inicio)';
	  $enviado = 'true';
	  mail($para,$titulo,$texto,$cabeceras);
	}

}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta name="description" content="Tomate unas vacaciones y viaja con Viajonline. Porque viajar es disfrutar">
	<meta name="author" content="Viajonline"/>
	<meta http-equiv="cache-control" content="no-cache"/>	
	<meta name="robots" content="noodp">
	<meta property="og:locale" content="es_ES"/>
	<meta proporty="og:type" content="website" />
	<meta property="og:title" content="Viajonline" />
	<meta property="og:description" content="Tomate unas vacaciones y viaja con Viajonline. Porque viajar es disfrutar" />
	<meta property="og:url" content="https://viajonline.com.mx/" />
	<meta property="og:site_name" content="Viajonline">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/fonts/style.css">
	<link rel="stylesheet" href="css/RD.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Rubik:700" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700" rel="stylesheet">
	<link rel="shortcut icon" href="img/icon.png">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Viajonline</title>
</head>
<body>
<section class="width100 content-head">
	<div class="width100 head">
    <a href="#inicio"><div class="logo Desk">
	    <div class="planet">
	         <img src="img/viajonline.jpg" alt="">
	    </div>
	            <div class="LogoText">
	                <img src="img/viajonline-2.jpg" alt="">
	    </div>
	        </div></a>
    <div class="main">
    	<div class="width100 skew"></div>
	        <div class="topnav" id="myTopnav">
                <nav class="width100">

                    <a href="#inicio " class="active RD">
                     	<div class="logo">
	                        <div class="planet">
	                            <img src="img/viajonline.jpg" alt="">
	                        </div>
                            <div class="LogoText">
                                <img src="img/viajonline-2.jpg" alt="">
	                        </div>
                        </div>
                    </a>
	                 <a href="#inicio"><span class="icon-macys"></span>Inicio</a>
	                 <a href="#viajes"><span class="icon-minutemailer"></span>Destinos</a>
	                 <a href="#map"><span class="icon-pinboard"></span>Visitanos</a>
	                 <a href="#contacto"><span class="icon-messenger"></span>Contáctanos</a>
	                 <a href="javascript:void(0);" class="icon" onclick="myFunction()">
	                 <i class="fa fa-bars"></i></a>
	        
                </nav>
	        </div>
    </div>
   </div>

</section>
<section class="content-body" id="inicio">
	<div class="width100 banner">
        <div class="width100 content-banner">
        	<div class="space"></div>
	       <div class="inf-box">
			   <div class="width90 flex text-inf">
			   	    <span class="icon-safari"></span>
			   	    <p>Sucursal Plaza crystal, Local 19 C</p>
			   	    <p>Coatzacoalcos Veracruz</p>
			   </div>
			   <a href="#" class="reservation">!Haz tu reserva¡</a>
			   <a href="tel:+529211630438"><span class="icon-whatsapp"></span><span>01 921 163 0438</span></a>
			   <div class="width90 flex social">
				    <p>Siguenos en</p>
				    <div class="redes">
				    	<a href="https://www.instagram.com/viajonline/?fbclid=IwAR3fwIBChwd2go8k7YA1Fvg_PvpgaQTiVAWW-lNIx7msG7WqT9enLB2-JjY" target="_blank"><span class="icon-instagram1"></span></a>
				    	<a href="https://www.facebook.com/ViajonlineAgenciaDeViajes/" target="_blank"><span class="icon-facebook1"></span></a>
				    	<a href="https://twitter.com/AVViajOnline?fbclid=IwAR05J70HNErfI0pwhdZQXzGbimG__PrVt9qlPTF5vSq92dcEYd7CHJxzAkA" target="_blank"><span class="icon-twitter1"></span></a>
				    </div>
			   </div>
	        </div>
	        <div class="message">
		       <h2>Disfruta de una</h2>
		       <h2>nueva experiencia</h2>
		       <h3 class="message-h3">Viaja con nosotros y descubre</h3>
		       <h3>nuevos lugares</h3>
		       <a href="#destinos">Destinos<span class="icon-shrink2"></span></a>
	       </div>
         </div>
		<img src="img/traveling.jpg" alt="">
	</div>
</section>
<section class="travel" id="destinos">
	<div class="width90 flex main-light-travel">
		<h2 class="width100"><span class="icon-travel-case"></span>Viajes</h2>
		
			<div class="width100 flex main-three">
				<a href="#san-cristobal" class="blue"><div class="width100 text-alone">San cristobal y Lagos de montebello</div></a>
				<a href="#vuelo-globo" class="red"><div class="width100 text-alone">Vuelo en globo y Salto en paracaidas</div></a>
				<a href="#guadalajara" class="green"><div class="width100 text-alone">Guadalajara</div></a>
				<a href="#pueblos-magicos" class="blue"><div class="width100 text-alone">Pueblos magicos</br>(Puebla)</div></a>
			</div>

	</div>
	<div class="width90 flex postcard-travel">
		<div class="margin" id="viajes"></div>
		<div class="travel 1" id="san-cristobal">
			<div class="travel-img">
				<img src="img/cristobal-montebello.jpg" alt="">
			</div>
			<div class="travel-inf">
				<h3 class="width100">San cristobal de las casas y Lagos de montebello</h3>
				<div class="width90 flex inf">
					<p>Salida:</p>
					<p><span class="icon-date-add"> 27/10/18</span><span class="icon-time"> 5:00 am</span></p>
				</div>
			    <div class="width90 flex inf">
					<p>Duración:</p>
					<p><span class="icon-brightness-up"> 2 Dias</span><span class="icon-moon"> 1 Noche</span></p>
				</div>
				<div class="width90 flex inf">
					<div>
						<p>Costo de</p>
						<p>reservación:</p>
					</div>
					<p>500 MX$ por persona</p>
				</div>
				<div class="width90 flex button-itinerario">
					<div class="space-iti"></div>
					<a href="#contacto"><div class="width100 text-alone">
						Más información<span class="icon-shrink2"></span>
					</div></a>
				</div>
				<div class="width90 flex pay">
					<p class="width100">Costo: 1599 MX$</p>
				</div>
			</div>
			
		</div>
		<div class="travel 2" id="vuelo-globo">
			<div class="travel-img">
				<img src="img/paracaidas-globo.jpg" alt="">
			</div>
			<div class="travel-inf">
				<h3 class="width100">Vuelo en globo y Salto en paracaidas</h3>
				<div class="width90 flex inf">
					<p>Salida:</p>
					<p><span class="icon-date-add"> 09/11/18</span><span class="icon-time"> 5:00 am</span></p>
				</div>
			    <div class="width90 flex inf">
					<p>Duración:</p>
					<p><span class="icon-brightness-up"> 2 Dias</span><span class="icon-moon"> 1 Noche</span></p>
				</div>
				<div class="width90 flex inf">
					<div>
						<p>Costo de</p>
						<p>reservación:</p>
					</div>
					<p>500 MX$ por persona</p>
				</div>
				<div class="width90 flex button-itinerario">
					<div class="space-iti"></div>
					<a href="#contacto"><div class="width100 text-alone">
						Más información<span class="icon-shrink2"></span>
					</div></a>
				</div>
				<div class="width90 flex pay">
					<p class="width100">Costo: 3299 MX$</p>
				</div>
			</div>
		</div>
		<div class="travel 3" id="guadalajara">
			<div class="travel-img">
				<img src="img/guadalajara-card.jpg" alt="">
			</div>
			<div class="width100 travel-inf">
				<h3 class="width100"><div class="width100 title-card">Guadalajara</div></h3>
				<div class="width90 flex inf">
					<p>Salida:</p>
					<p><span class="icon-date-add"> 16/11/18</span><span class="icon-time"> 19:00 pm</span></p>
				</div>
			    <div class="width90 flex inf">
					<p>Duración:</p>
					<p><span class="icon-brightness-up"> 3 Dias</span><span class="icon-moon"> 2 Noches</span></p>
				</div>
				<div class="width90 flex inf">
					<div>
						<p>Costo de</p>
						<p>reservación:</p>
					</div>
					<p>500 MX$ por persona</p>
				</div>
				<div class="width90 flex button-itinerario">
					<div class="space-iti"></div>
					<a href="#contacto"><div class="width100 text-alone">
						Más información<span class="icon-shrink2"></span>
					</div></a>
				</div>
				<div class="width90 flex pay">
					<p class="width100">Costo: 2999 MX$</p>
				</div>
			</div>

		</div>
		<div class="travel 1" id="pueblos-magicos">
				<div class="travel-img">
					<img src="img/pueblos-magicos.jpg" alt="">
				</div>
				<div class="width100 travel-inf">
					<h3 class="width100"><div class="width100 title-card">Pueblos magicos (Puebla)</div></h3>
					<div class="width90 flex inf">
						<p>Salida:</p>
						<p><span class="icon-date-add"> 01/11/18</span><span class="icon-time"> 23:00 pm</span></p>
					</div>
				    <div class="width90 flex inf">
						<p>Duración:</p>
						<p><span class="icon-brightness-up"> 3 Dias</span><span class="icon-moon"> 2 Noches</span></p>
					</div>
					<div class="width90 flex inf">
						<div>
							<p>Costo de</p>
							<p>reservación:</p>
						</div>
						<p>500 MX$ por persona</p>
					</div>
					<div class="width90 flex button-itinerario">
						<div class="space-iti"></div>
						<a href="#contacto"><div class="width100 text-alone">
							Más información<span class="icon-shrink2"></span>
						</div></a>
					</div>
					<div class="width90 flex pay">
						<p class="width100">Costo: 2399 MX$</p>
					</div>
				</div>
			</div> 
	</div>
	
</section>
<div class="margin-map" id="map"></div>
<section class="map width100">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3791.5234598011793!2d-94.46801528558753!3d18.13978468763188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85e983763f387fa9%3A0x87ca7fabce8b0be6!2sViajonline+Agencia+de+Viajes!5e0!3m2!1ses!2smx!4v1540220913891"  frameborder="0" style="border:0" allowfullscreen></iframe>
</section>

<footer class="width100" id="contacto">
	<div class="form flex">
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
	                <div class="flex">
	                	<div class="form-data">
	                		    <h2 class="width100">Contáctanos</h2>
	                	        <input type="text" placeholder="Nombre:" name="nombre">
	                	        <input type="email" placeholder="Correo:" name="correo">
	                	        <input type="text" placeholder="Telefono:" name="telefono" pattern="[0-9]+">
	                	        <h3 class="width100">Paquete de interes</h3>
	                	        <div class="package">
	                	        	<label for="paquete1">San cristobal de las casas y </br>Lagos de montebello</label>
	                	        	<input type="radio"  class="radiobtn" name="paquete" id="paquete1" value="San cristobal de las casas y Lagos de montebello">
	                	        	<span></span>
	                	        </div>
	                	        <div class="package">
	                	         	<label for="paquete2">Vuelo en globo y Salto en paracaidas</label>
	                	        	<input type="radio" class="radiobtn" name="paquete" value="Vuelo en globo y Salto en paracaidas" id="paquete2">
	                	         	<span></span>
	                	        </div>
	                	        <div class="package">
	                	  	        <label for="paquete3">Guadalajara</label>
	                	  	        <input type="radio" class="radiobtn" name="paquete" value="Guadalajara" id="paquete3">
	                	  	        <span></span>
	                	        </div>
	                	        <div class="package">
	                	        	<label for="paquete4">Pueblos magicos</label>
	                	        	<input type="radio" class="radiobtn" name="paquete" value="Pueblos magicos" id="paquete4">
	                	  	        <span></span>
	                	        </div>
	                	 </div>
	                	<div class="form-message flex">
	                		<textarea name="mensaje" id="" placeholder="Escribe aqui tu mensaje"></textarea>
	                		<div class="button">
	                			<input type="submit" value="Enviar" class="button" name="form-inicio">
	                		</div>
	                		<div class="call width100 flex">
	                			<p>!Comunícate con nosotros¡</p>
	                			<a href="tel:+529211630438"><span class="icon-whatsapp"></span><span>01 921 163 0438</span></a>
	                		</div>
	                		<div class="social-footer width100">	
	                			<a href="https://www.instagram.com/viajonline/?fbclid=IwAR3fwIBChwd2go8k7YA1Fvg_PvpgaQTiVAWW-lNIx7msG7WqT9enLB2-JjY" target="_blank"><span class="icon-instagram1"></span></a>
				    	        <a href="https://www.facebook.com/ViajonlineAgenciaDeViajes/" target="_blank"><span class="icon-facebook1"></span></a>
				    	        <a href="https://twitter.com/AVViajOnline?fbclid=IwAR05J70HNErfI0pwhdZQXzGbimG__PrVt9qlPTF5vSq92dcEYd7CHJxzAkA" target="_blank"><span class="icon-twitter1"></span></a>
				    	        <p>Siguenos en nuestras redes sociales</p>
	                		</div>

				    	        <?php if(!empty($errores)):?>
			     			        <div class="alert error">
			     			   	<?php echo $errores;?>
			     		        	</div>
			     		        <?php elseif(!empty($enviado)):?>
			     			        <div class="alert succes">
			     				        <p>Mensaje enviado</p>
			     			        </div>
			     		        <?php endif?>
	                		
	                	</div>
	                </div>
	        <div class="autor flex">
                <p class="copy">Viajonline &copy; 2018</p>
            </div>
		</form>
	</div>
</footer>

<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
</body>
</html>