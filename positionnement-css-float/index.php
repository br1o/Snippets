<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Design css avec la propriétés float et clear</title>
<style type="text/css">
html, body {
	margin: 0;
	padding: 0;
	text-align: center;
	font: bold 1.2em/150% Arial, Helvetica, sans-serif;
	color: #B6CF40;
}
#container {
	position: relative;
	width: 750px;
	/*width: 900px;*/ /* Enlevez les commentaires autour de width: 900px; puis réaffichez cette page dans IE6 et FF et observez le footer dans FF */
	margin: 0 auto;
	text-align: left;
	border: 2px solid #333;
}
#header {
    height: 120px;
    width: inherit;
	background-color: #065C00;
}
#sidebar {
	width: 200px;
	float: left;
	background-color:#10C100;
}
#main {
	float: right;
    width: 550px;
	background-color: #FF4FB1;
}
#footer {
	/*clear: both;*/ /* Puis enlevez les commentaires autour de clear: both; puis réaffichez cette page dans IE6 et FF et observez le footer dans FF. Enfin remettez tout en ordre de départ, et ajoutez du texte dans la sidebar. Que se passe-t-il ? Que faut-il faire ? */
    width: 750px;
	background-color: #9E0050;
}
#back {
	padding: 1em;
	text-align: center;
	font-weight: normal;
	font-size: 60%;
	margin-top: -1em;
}

</style>
</head>

<body>
<div id="container">
	<div id="header">header</div>
	<div id="sidebar">sidebar</div>
	<div id="main">main</div>
	<div id="footer">footer</div>
</div>
<p id="back"><a href="http://css4design.com/">Accueil css 4 design</a> | <a href="http://css4design.com/quelques-notes-sur-xhtml-et-css-au-fil-de-l-eau">Retour vers Quelques notes sur XHTML et CSS, au fil de l'eau...</a>
	</p>	
<?php include ('../stats.inc.php'); ?>
</body>

</html>
