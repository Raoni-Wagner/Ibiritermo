 <?php
### verificador de paginas
$__pagina = $_GET["pag"];
$__subpagina = $_GET["subpag"];
switch($__pagina)
{
	case "inicio":
		$pagina = "home.php";
	break;
	case "home-port":
		$pagina = "home-port.php";
		$__titulo .= "Home";
	break;
	case "qualidade-port":
		$pagina = "qualidade-port.php";
		$__titulo = "qualidade de vida";
	break;
	case "acao-port":
		$pagina = "acao-port.php";
		$__titulo = "Ações Sociais";
	break;
	case "tecer-port":
		$pagina = "tecer-port.php";
		$__titulo = "Tecer para Crescer";
	break;
	case "adav-port":
		$pagina = "adav-port.php";
		$__titulo = "ADAV";
	break;
	case "aquarela-port":
		$pagina = "aquarela-port.php";
		$__titulo = "Salão Aquarela";
	break;
	case "responsa-port":
		$pagina = "responsa-port.php";
		$__titulo = "RESPONSABILIDADE SOCIAL";
	break;
	case "home-ing":
		$pagina = "home-ing.php";
		$__titulo .= "Home";
	break;
	case "qualidade-ing":
		$pagina = "qualidade-ing.php";
		$__titulo = "qualidade de vida";
	break;
	case "acao-ing":
		$pagina = "acao-ing.php";
		$__titulo = "Ações Sociais";
	break;
	case "tecer-ing":
		$pagina = "tecer-ing.php";
		$__titulo = "Tecer para Crescer";
	break;
	case "adav-ing":
		$pagina = "adav-ing.php";
		$__titulo = "ADAV";
	break;
	case "aquarela-ing":
		$pagina = "aquarela-ing.php";
		$__titulo = "Salão Aquarela";
	break;
	case "responsa-ing":
		$pagina = "responsa-ing.php";
		$__titulo = "RESPONSABILIDADE SOCIAL";
	break;
	default:
		$pagina = "home.php";
		$__pagina = "home";
	break;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IBIRITERMO</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/style2.css" rel="stylesheet" type="text/css" />
<link href="scripts/shadowbox/shadowbox.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/interface.js"></script>
<script type="text/javascript" src="scripts/shadowbox/shadowbox.js"></script>
<script type="text/javascript">
	Shadowbox.init({
		language: 'pt',
		player: ['img', 'html', 'swf'],
	});
</script>
</head>

<body>
<div class="master" style="height: 799px;">
<div class="container">
 <div class="corpo" align="center">
    <?php
		require_once($pagina);
	?>
 </div><!--end .corpo-->
 
</div><!--end .container-->
</div>

</body>
</html>