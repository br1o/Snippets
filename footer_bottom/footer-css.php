<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css">
/* Dans opera (windows et macosx) et safari, le footer est bien plac� au chargement de la page, mais 
pas lorsqu'on modifie la taille de la fen�tre. D�gration somme toute fort acceptable.
Fonctionne bien dans IE, Firefox sur windows */
html, body {
	margin: 0; 
	padding: 0; 
	height: 100%;
	font: 100%/140% Arial, Helvetica, Geneva, sans-serif;
}
* {
	margin: 0; 
	padding: 0; 
}
#fullContent {
	min-height: 100%;
}
#page {
	position: relative;
	width: 750px;
	margin: 0 auto;
	height: 100%;
	border: 1px dotted #cecece;
}
#top {
	height: 50px;
	border-bottom: 1px dotted #cecece;
}
#fullContent {
	background-color: #fff;
}
#content p {
	padding: 0.25em 1em;
}
h1 {
	line-height: 50px;
	padding: 1em;
	text-align: center;
	border-bottom: 1px dotted #cecece;
}
h2 {
	height: 25px;
	line-height: 25px;
	padding: 1em;
	margin-bottom: 1em;
	text-align: center;
	border-bottom: 1px dotted #cecece;
}
#lastelement {
	margin-top: 1em;
	margin-bottom: 0; 
	padding-bottom: 50px;
}
#footer {
	margin-top: -50px;
	height: 50px;
	width: 100%;		
	border-top: 1px dotted #cecece;
}
#footer p {
	padding: 1em;
	text-align: center;
	line-height: 25px;
}
</style>
<!--[if IE]>
	<style type="text/css">#page, #fullContent {height: 100%;}</style>
<![endif]-->
<title>Pied de page toujours en bas quand le contenu est peu important</title>
</head>
<body>
<div id="page">
	<div id="fullContent">
		<h1 id="top">Lorem ipsum</h1>
		<h2>dolor sit amet</h2>
		<div id="content">
			<p>
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Ut condimentum. 
				Morbi molestie lectus vel diam. Duis luctus quam quis elit. 
				Maecenas ac leo nec lorem aliquet commodo. Phasellus fringilla velit id lacus. 
				Aenean vitae quam in leo convallis blandit. Morbi sem. 
				Morbi odio nisi, vestibulum ac, adipiscing at, cursus sit amet, dolor. 
				Praesent feugiat diam vitae elit. Nulla a erat nec sem iaculis volutpat. 
				Vestibulum et augue. Fusce ac velit. Nam malesuada sapien sed neque.
			</p>
			<p>
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Ut condimentum. 
				Morbi molestie lectus vel diam. Duis luctus quam quis elit. 
				Maecenas ac leo nec lorem aliquet commodo. Phasellus fringilla velit id lacus. 
				Aenean vitae quam in leo convallis blandit. Morbi sem. 
				Morbi odio nisi, vestibulum ac, adipiscing at, cursus sit amet, dolor. 
				Praesent feugiat diam vitae elit. Nulla a erat nec sem iaculis volutpat. 
				Vestibulum et augue. Fusce ac velit. Nam malesuada sapien sed neque.
			</p>
			<p>
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Ut condimentum. 
				Morbi molestie lectus vel diam. Duis luctus quam quis elit. 
				Maecenas ac leo nec lorem aliquet commodo. Phasellus fringilla velit id lacus. 
				Aenean vitae quam in leo convallis blandit. Morbi sem. 
				Morbi odio nisi, vestibulum ac, adipiscing at, cursus sit amet, dolor. 
				Praesent feugiat diam vitae elit. Nulla a erat nec sem iaculis volutpat. 
				Vestibulum et augue. Fusce ac velit. Nam malesuada sapien sed neque.
			</p>
		</div>
		<div id="lastelement"></div>
	</div>
	<div id="footer">
		<p>Pied de page</p>
	</div>
</div>

<?php include ('../stats.inc.php'); ?>

</body>
</html>
