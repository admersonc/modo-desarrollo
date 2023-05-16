<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<?php

		session_start();

		$servidor = Ruta::ctrRutaServidor();

		$plantilla = ControladorPlantilla::ctrEstiloPlantilla();

		echo '<link rel="icon" href="'.$servidor.$plantilla["icono"].'">';

		/*=============================================
		MANTENER LA RUTA FIJA DEL PROYECTO
		=============================================*/
		
		$url = Ruta::ctrRuta();

		/*=============================================
		MARCADO DE CABECERA
		=============================================*/

		$rutas = array();

		if(isset($_GET["ruta"])){

			$rutas = explode("/", $_GET["ruta"]);

			$ruta = $rutas[0];

		}else{

			$ruta = "inicio";

		}

		$cabeceras = ControladorPlantilla::ctrTraerCabeceras($ruta);

		if(is_array($cabeceras)){
				
			if(!$cabeceras["ruta"]){

				$ruta = "inicio";

				$cabeceras = ControladorPlantilla::ctrTraerCabeceras($ruta);

			}

		}


	?>

	<!--=====================================
	Marcado HTML5
	======================================-->

	<meta name="title" content="<?php if(is_array($cabeceras)){echo $cabeceras['titulo'];}?>">

	<meta name="description" content="<?php if(is_array($cabeceras)){echo $cabeceras['descripcion'];}?>">

	<meta name="keyword" content="<?php if(is_array($cabeceras)){echo $cabeceras['palabrasClaves'];}?>">

	<title><?php if(is_array($cabeceras)){echo $cabeceras['titulo'];}?></title>

	<!--=====================================
	Marcado de Open Graph FACEBOOK
	======================================-->

	<meta property="og:title"   content="<?php if(is_array($cabeceras)){echo $cabeceras['titulo'];}?>">
	<meta property="og:url" content="<?php if(is_array($cabeceras)){echo $url.$cabeceras['ruta'];}?>">
	<meta property="og:description" content="<?php if(is_array($cabeceras)){echo $cabeceras['descripcion'];}?>">
	<meta property="og:image"  content="<?php if(is_array($cabeceras)){echo $cabeceras['portada'];}?>">
	<meta property="og:type"  content="website">	
	<meta property="og:site_name" content="Tu logo">
	<meta property="og:locale" content="es_CO">

	<!--=====================================
	Marcado para DATOS ESTRUCTURADOS GOOGLE
	======================================-->
	
	<meta itemprop="name" content="<?php if(is_array($cabeceras)){echo $cabeceras['titulo'];}?>">
	<meta itemprop="url" content="<?php if(is_array($cabeceras)){echo $url.$cabeceras['ruta'];}?>">
	<meta itemprop="description" content="<?php if(is_array($cabeceras)){echo $cabeceras['descripcion'];}?>">
	<meta itemprop="image" content="<?php if(is_array($cabeceras)){echo $cabeceras['portada'];}?>">

	<!--=====================================
	Marcado de TWITTER
	======================================-->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="<?php if(is_array($cabeceras)){echo $cabeceras['titulo'];}?>">
	<meta name="twitter:url" content="<?php if(is_array($cabeceras)){echo $url.$cabeceras['ruta'];}?>">
	<meta name="twitter:description" content="<?php if(is_array($cabeceras)){echo $cabeceras['descripcion'];}?>">
	<meta name="twitter:image" content="<?php if(is_array($cabeceras)){echo $cabeceras['portada'];}?>">
	<meta name="twitter:site" content="@tu-usuario">


	<!--=====================================
	PLUGINS DE CSS
	======================================-->

	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/bootstrap.min.css">

	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/font-awesome.min.css">

	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/flexslider.css">

	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/sweetalert.css">

	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/dscountdown.css">

	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Ubuntu|Ubuntu+Condensed" rel="stylesheet">

	<!--=====================================
	HOJAS DE ESTILO PERSONALIZADAS
	======================================-->

	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plantilla.css">

	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/cabezote.css">

	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/slide.css">

	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/productos.css">

	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/infoproducto.css">

	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/perfil.css">

	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/carrito-de-compras.css">

	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/ofertas.css">

	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/footer.css">

	 <!-- Style of the plugin -->
     <!--<link rel="stylesheet" href="<?php echo $url; ?>vistas/plugin/components/Font Awesome/css/font-awesome.min.css">
     <link rel="stylesheet" href="<?php echo $url; ?>vistas/plugin/whatsapp-chat-support.css">-->

	 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="<?php echo $url; ?>vistas/plugin/whatsapp-chat.js"></script>
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/plugin/whatsapp-chat.css">

	<!--=====================================
	PLUGINS DE JAVASCRIPT
	======================================-->

	<script src="<?php echo $url; ?>vistas/js/plugins/jquery.min.js"></script>

	<script src="<?php echo $url; ?>vistas/js/plugins/bootstrap.min.js"></script>

	<script src="<?php echo $url; ?>vistas/js/plugins/jquery.easing.js"></script>

	<script src="<?php echo $url; ?>vistas/js/plugins/jquery.scrollUp.js"></script>

	<script src="<?php echo $url; ?>vistas/js/plugins/jquery.flexslider.js"></script>

	<script src="<?php echo $url; ?>vistas/js/plugins/sweetalert.min.js"></script>

	<script src="<?php echo $url; ?>vistas/js/plugins/md5-min.js"></script>

	<script src="<?php echo $url; ?>vistas/js/plugins/dscountdown.min.js"></script>

	<script src="<?php echo $url; ?>vistas/js/plugins/knob.jquery.js"></script>

	<script src="https://apis.google.com/js/platform.js" async defer></script>

	<!--=====================================
	Pixel de Facebook
	======================================-->

	<?php echo $plantilla["pixelFacebook"]; ?>



</head>

<body>

<?php

/*=============================================
CABEZOTE
=============================================*/

include "modulos/cabezote.php";

/*=============================================
CONTENIDO DINÁMICO
=============================================*/

$rutas = array();
$ruta = null;
$infoProducto = null;

if(isset($_GET["ruta"])){

	$rutas = explode("/", $_GET["ruta"]);

	$item = "ruta";
	$valor =  $rutas[0];

	/*=============================================
	URL'S AMIGABLES DE CATEGORÍAS
	=============================================*/

	$rutaCategorias = ControladorProductos::ctrMostrarCategorias($item, $valor);

	if(is_array($rutaCategorias)){

		if($rutas[0] == $rutaCategorias["ruta"]){

			$ruta = $rutas[0];

		}

	}

	/*=============================================
	URL'S AMIGABLES DE SUBCATEGORÍAS
	=============================================*/

	$rutaSubCategorias = ControladorProductos::ctrMostrarSubCategorias($item, $valor);

	foreach ($rutaSubCategorias as $key => $value) {
		
		if($rutas[0] == $value["ruta"]){

			$ruta = $rutas[0];

		}

	}

	/*=============================================
	URL'S AMIGABLES DE PRODUCTOS
	=============================================*/

	$rutaProductos = ControladorProductos::ctrMostrarInfoProducto($item, $valor);

	if(is_array($rutaProductos)){
	
		if($rutas[0] == $rutaProductos["ruta"]){

			$infoProducto = $rutas[0];

		}

	}

	/*=============================================
	LISTA BLANCA DE URL'S AMIGABLES
	=============================================*/

	if($ruta != null || $rutas[0] == "articulos-gratis" || $rutas[0] == "lo-mas-vendido" || $rutas[0] == "lo-mas-visto"){

		include "modulos/productos.php";

	}else if($infoProducto != null){

		include "modulos/infoproducto.php";

	}else if($rutas[0] == "buscador" || $rutas[0] == "verificar" || $rutas[0] == "salir" || $rutas[0] == "perfil" || $rutas[0] == "carrito-de-compras" || $rutas[0] == "error" || $rutas[0] == "finalizar-compra" || $rutas[0] == "curso" || $rutas[0] == "ofertas"){

		include "modulos/".$rutas[0].".php";

	}else if($rutas[0] == "inicio"){

		include "modulos/slide.php";

		include "modulos/destacados.php";

	}else{

		include "modulos/error404.php";

	}

}else{

	include "modulos/slide.php";

	include "modulos/destacados.php";

	include "modulos/visitas.php";

}


include "modulos/footer.php";

?>


<input type="hidden" value="<?php echo $url; ?>" id="rutaOculta">
<!--=====================================
JAVASCRIPT PERSONALIZADO
======================================-->

<script src="<?php echo $url; ?>vistas/js/cabezote.js"></script>
<script src="<?php echo $url; ?>vistas/js/plantilla.js"></script>
<script src="<?php echo $url; ?>vistas/js/slide.js"></script>
<script src="<?php echo $url; ?>vistas/js/buscador.js"></script>
<script src="<?php echo $url; ?>vistas/js/infoproducto.js"></script>
<script src="<?php echo $url; ?>vistas/js/usuarios.js"></script>
<script src="<?php echo $url; ?>vistas/js/registroFacebook.js"></script>
<script src="<?php echo $url; ?>vistas/js/carrito-de-compras.js"></script>
<script src="<?php echo $url; ?>vistas/js/visitas.js"></script>

<!-- Button Whatsapp Structure -->
		<div id="example"></div>


	
	






<!--=====================================
https://developers.facebook.com/
======================================-->

<?php echo $plantilla["apiFacebook"]; ?>

<script>

  /*=============================================
	COMPARTIR EN FACEBOOK
	https://developers.facebook.com/docs/      
	=============================================*/
	
	$(".btnFacebook").click(function(){

		FB.ui({

			method: 'share',
			display: 'popup',
			href: '<?php  echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];  ?>',
		}, function(response){});

	})

	/*=============================================
	COMPARTIR EN GOOGLE
	https://developers.google.com/+/web/share/     
	=============================================*/

	$(".btnGoogle").click(function(){

		window.open(

			'https://plus.google.com/share?url=<?php  echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];  ?>',
			'',
			'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=400'
		);

		return false;

	})

</script>

	<!--=====================================
	GOOGLE ANALYTICS
	======================================-->

	<?php echo $plantilla["googleAnalytics"]; ?>



</body>


<script type="text/javascript">
    whatsappchat.multipleUser(
  {
    selector: '#example',
    users: [
      {
        name:'Lucero Leguia',
        phone: '+51926439010',
        designation: 'Venta General',
        image : 'https://scontent.flim2-2.fna.fbcdn.net/v/t39.30808-6/316672408_1760399264342747_2594975326420067942_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeFp0ejPrdpEF0WGFATX_zaUSgREll3tLHlKBESWXe0seWwMxAwTcRN2_3l35aGNaW4Q2jmuBT-JUARTQRfza43r&_nc_ohc=aSyYZo7ZjN8AX_-b-8b&_nc_ht=scontent.flim2-2.fna&oh=00_AfDordhVYD_VlmjgCOiAJpWR5eOrbzM0Y6xKlqWh_dviyw&oe=646855AA'
      },
      {
        name:'Lucy Leguia',
        phone: '',
        designation: 'Venta general',
        image: 'https://scontent.flim2-2.fna.fbcdn.net/v/t39.30808-6/257452540_1560599580959287_8617288422140639946_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=174925&_nc_eui2=AeH2vYRsh0l_a2clXVpolbtmE_EGcitXDwcT8QZyK1cPB9afERdGXTkSqazMcTnyGU3mG8iNwuzd-M4BiJgN3bU1&_nc_ohc=FC2juRiqt88AX8UlLYj&_nc_ht=scontent.flim2-2.fna&oh=00_AfA4vlBL7T0jafzl9tQPblmMAje1_FhxhArqQgvn65jDvw&oe=64677BDA'

      },
      {
        name:'Admer Cardenas',
        phone: '+51955416242',
		designation: 'Venta General',
		image: 'https://scontent.flim2-1.fna.fbcdn.net/v/t39.30808-6/323769895_1382541632549911_5470720905667252308_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=174925&_nc_eui2=AeFo2NvmTKz8juF-3nqQ2oj7GA0W6e07dXMYDRbp7Tt1c6L4iOz7VxEjeqKE-aZbqcach85JLboAzrl2RuEsZpSJ&_nc_ohc=Bh7DO7ysqm4AX8v7xqp&_nc_ht=scontent.flim2-1.fna&oh=00_AfB2Ck_R9jCGXY0rzpr4KChpKYrLW8udZ71ZNOxCRqnkvg&oe=64686A29'
    
      },
    ],
    headerMessage: 'No dude en hacer cualquier pregunta en <strong>WhatsApp</strong>',
    chatBoxMessage: 'El equipo responde en un minuto.',
    color: '#25D366',
  }
);
</script>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-1VDDWMRSTH');
</script>
</html>