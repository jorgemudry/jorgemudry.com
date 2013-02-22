<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Programador PHP / MySQL y XHTML/CSS</title>
    <meta name="description" content="Me dedico al desarrollo de aplicaciones web con PHP y MySQL y la maquetacion de los mismos en XHTML/CSS con implementacion de Javascript"  />
    <meta name="keywords" content="php, mysql, jquery, wordpress, xhtml, css, codeigniter, desarrollo web"  />
    <meta property="fb:admins" content="1001381108" />
    <link href="css/reset.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/styles.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
<div id="content">
	<h1>Jorge Mudry</h1>
    <h4>Bienvenido!</h4>
    <p>Soy <strong>Jorge Mudry</strong>, un desarrollador web de <?php echo (date("md", date("U", mktime(0, 0, 0, 08, 20, 1978))) > date("md") ? ((date("Y")-1978)-1):(date("Y")-1978)); ?> años que vive en <a href="http://goo.gl/maps/ZMwx" class="blank">Córdoba, Argentina</a>.</p>
    <p>Algunas de mis habilidades son: <strong>php</strong>, <strong>mysql</strong>, <strong>xhtml</strong>, <strong>css</strong>, <strong>javascript</strong>, <strong>codeigniter</strong> y <strong>wordpress</strong>.</p>
    <p>Podes saber un poco mas de mi siguiéndome en Twitter (@<a href="http://twitter.com/#!/jorgemudry" class="blank">JorgeMudry</a>) o visitando mi <a href="http://ar.linkedin.com/in/jorgemudry" class="blank">perfil en LikedIn</a>.</p>
    <p>Actualmente trabajo para <a href="http://www.olapic.com/" class="blank">Olapic</a>, una startup con sede en Nueva York que brinda a empresas y marcas una manera de recoger las fotos de sus fans para su uso en sus propios sitios web.</p>
    <p>Tambien hago desarrollos como freelance.</p>
    <p>Si crees que necesitas algo de lo que yo hago, no dudes en escribirme!</p>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript">
$(function(){
	$('a.blank').click(function(){
		window.open(this.href);
		return false;
	});
});
</script>
<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-5941280-2']);
	_gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
</script>
</body>
</html>
