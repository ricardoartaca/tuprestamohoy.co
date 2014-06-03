<?
require_once("libs/class.phpmailer.php");
  if ($_POST['action'] == "register")
     {
        $mail = new PHPMailer();
	    //$mail->Host("http://curso.cesarcancino.com");
	    //***************************************
	    //configuramos la información del correo o email
	    $mail->From = utf8_decode($_POST["nombre"]);
	    $mail->FromName = utf8_decode($_POST["nombre"]);
	    $mail->Subject = "Contacto Web.";
	    $mail->AddAddress("prestaproyectos@hotmail.com");
	    $mail->AddAddress("julianprestamos@gmail.com");
	     // $mail->AddAddress("yvallejo@tecnotaxia.com");  

	    //configuramos el cuerpo del mensaje
		  $ocupacion=$_POST["ocupacion"];
		  $nombre=$_POST["nombre"];
		  $email=$_POST["email"];
		  $celular=$_POST["celular"];
		  $cantidad=$_POST["cantidad"];
		  
	   
	   $body = "Solicitud de credito<br><br>";
	   $body.= "Ocupacion: $ocupacion<br><br> ";
	   $body.= "Nombre: $nombre<br><br> ";
	   $body.= "email: $email<br><br> ";
	   $body.= "celular: $celular<br><br> ";
	   $body.= "cantidad: $cantidad<br><br> ";
	  
   
	   $mail->Body = $body;
	   $mail->AltBody = "Formulario Contacto";
	   $mail->Send();
	   echo "<script>
		     alert('Hemos recibido su solicitud, pronto nos comunicaremos con usted.');
		     location.href='gracias.php';
		     </script>"; 

		    exit;
   }
?>
<!doctype html>
<html lang="es">
<head>
	<title>PréstamosParaLibreInversión.co</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1" />
	<meta name="description" content="Prestamos Para Libre Inversión tiene como misión brindarte apoyo y soluciones financieras para tu vida, préstamos de dinero rapido, fácil y efectivo para tus proyectos, te damos cualquier clase de crédito, credito facil e inmediato, credito para vivienda, carro, para pagar deudas,creditos y prestamos para libre inversión en bogota, medellin y cali, otorgamos préstamos inmediatos sin codeudor o fiador, sin papeleo, ni trámites complicados.

	Somos Una empresa comprometida con el financiamiento de tus necesidades, dinero rapido en tus manos y a una tasa muy baja en el mercado, del 0,3% fija mensual." />
	<meta name="author" content="Ricardo Rojas">
	<link rel="stylesheet" href="foundation/css/foundation.css" />
	<link rel="stylesheet" href="css/estilos.css">
	 <link rel="author" href="humans.txt" />
    <script src="foundation/js/vendor/modernizr.js"></script>
    <script src="js/prefixfree.js"></script>
</head>
<body>
	<header class="row">
      <div class="small-12 medium-6 large-6 columns">
        <figure>
        	<img class="logo" src="img/logo.png" alt="">
        	<span class="slogan azul">PréstamosParaLibre</span><span class="slogan mostaza">Inversión.co</span>
        </figure>
      </div>
      <div class="small-12 medium-6 large-6 columns">
        <img  class="margin_phone" src="img/phone_azul.png" alt="Telefonos">
        <span class="cel">3103241060 - 3207532215 -3204102419</span>
      </div>
    </header>



		<section class="row">
			

			<section class="small-12 medium-12 large-12 columns">
				
				
				<section class="row content">
					<div>
						<ul class="example-orbit" data-orbit data-options="animation_speed:1;">
						  <li>
						    <img src="img/test-5b.jpg" alt="slide 1" />
						    <div class="orbit-caption">
						     
						    </div>
						  </li>
						  <li>
						    <img src="img/test-2(1).jpg" alt="slide 2" />
						    <div class="orbit-caption">
						    
						    </div>
						  </li>
						  <li>
						    <img src="img/test-6(1).jpg" alt="slide 3" />
						    <div class="orbit-caption">
						     
						    </div>
						  </li>
						  <li>
						    <img src="img/test-9(1).jpg" alt="slide 3" />
						    <div class="orbit-caption">
						     
						    </div>
						  </li>
						  <li>
						    <img src="img/test-10(1).jpg" alt="slide 3" />
						    <div class="orbit-caption">
						      
						    </div>
						  </li>
						</ul>
					</div>
					<article class="small-12 medium-12 large-6 columns">
						<div class="content">
							<h3 class="mostaza center mayus">
								Aplicar es gratis
							</h3>
							<h6 class="blanco center">
								Sin trámites molestos, sin codeudores,  
                    			sin hipotecas y pignoraciones
							</h6>
							<br>
							<div class="servicios">
								<li class="espaciado blanco icon_check">Préstamos desde $3'000.000</li>
								<li class="espaciado blanco icon_check">Tasa Fija Interés Mensual  del 0,3%</li>
								<li class="espaciado blanco icon_check">Cuotas Fijas Mensuales Con Aporte a Capital e Interés</li>
								<li class="espaciado blanco icon_check">Satisfacción garantizada</li>
								<li class="espaciado blanco icon_check">Creditos para lo que desees</li>
								<li class="espaciado blanco icon_check">Pague sus deudas Hoy</li>
								<li class="espaciado blanco icon_check">Financiamos tus necesidades</li>
								<li class="espaciado blanco icon_check">Préstamos simples y rápidos</li>
							</div>
						</div>
					
					</article>
					<article class="small-12 medium-12 large-6 columns">
						<div class="">
							<h3 class="mostaza center mayus">
								Solicita tu préstamo,<br> ¡no esperes más!
							</h3>
							<br>
							<form action="" method="POST" class="margin">
								<label class="blanco" for="">Actividad Economica</label>
								<select id="ocupacion" name="ocupacion" class="radius">
									<option value="Empleado">Empleado</option>
									<option value="Pensionado">Pensionado</option>
									<option value="Independiente">Independiente</option>
									<option value="Estudiante">Estudiante</option>
									<option value="Otro">Otro</option>
								</select>
								<input id="nombre" name="nombre" type="text" class="radius" placeholder="Nombre y Apellido" required>
								<input id="email" name="email" type="text" class="radius" placeholder="Email" required>
								<input id="celular" name="celular" type="text" class="radius" placeholder="Celular" required>
								<input id="cantidad" name="cantidad" type="text" class="radius" placeholder="Cantidad a solicitar" required>
								<cite class="gris">-Absoluta confidencialidad</cite>
								
								
							<div>
								<input type="hidden" name="redirect" class="configuration" value="http://gracias.myinstapage.com">
								<input type="hidden" name="action" value="register">
								<button type="submit" class="button expand  mayus" >
									Solicitar Credito
								</button>
							</div>
							</form>
						</div>
					</article>
				</section>
				<section class="row content_mapa">
					<article class="small-12 medium-12 large-6 columns">
						<img src="img/mapa.jpg" alt="">
					</article>
					<article class="small-12 medium-12 large-6 columns">
						<div class="sedes_borde">
							<div class="sedes">
								<div class="row">
									<h3 class="mayus azul center">bogota</h3>
									<li class="espaciado center tel">(1) 4790849</li>
								</div>
								<hr>
								<div class="row">
									<h3 class="mayus azul center">cali</h3>
									<li class="espaciado center tel">(2) 8912429</li>
								</div>
								<hr>
								<div class="row">
									<h3 class="mayus azul center">medellin</h3>
									<li class="espaciado center tel">(4) 6045618</li>
								</div>	
							</div>
							
						</div>
					</article>
				</section>
				<footer class="row footer">
					<div class="large-7 large-centered columns">
						<p class="center text_mob mayus">prestamos para libre inversion © Copyright 2014</p>
						<p class="text_mob mayus center">Colombia</p>
							
						
					</div>
				</footer>
			</section>
		</section>
    

    	
	<script src="foundation/js/vendor/jquery.js"></script>
    <script src="foundation/js/foundation.min.js"></script>
    <script src="foundation/js/foundation/foundation.js"></script>
    <script src="foundation/js/foundation/foundation.orbit.js"></script>
    <script>
      $(document).foundation();
    </script>
    <script type="text/javascript">
		/* <![CDATA[ */
		var google_conversion_id = 971415324;
		var google_custom_params = window.google_tag_params;
		var google_remarketing_only = true;
		/* ]]> */
	</script>
	<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
	</script>
	<noscript>
		<div style="display:inline;">
			<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/971415324/?value=0&amp;guid=ON&amp;script=0"/>
		</div>
	</noscript>
</body>
</html>