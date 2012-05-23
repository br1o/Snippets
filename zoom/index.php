<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="description" content="Pour r&eacute;aliser un effet de zoom sur une image nous avons besoin de deux versions d'un m&ecirc;me visuel : le premier � 100%, et le deuxi&egrave;me � taille r&eacute;duite. Les &eacute;v&eacute;nements onmouseover et onmouseout pilotent le changement de source de l'image pour obtenir sa permutation." />
<meta name="keywords" content="css,xhtml,html,webdesign,portes coulissantes,feuille de style,position,background,:hover,pseudo-classe" />
<title>Effet de zoom avec CSS grâce en utilisant la pseudo-classe :hover et la technique des portes coulissantes pour les images</title>

<style type="text/css">
body {
	margin: 0;
	padding: 0;
	font: 0.75em/140% Verdana, Arial, Helvetica, sans-serif;
	text-align: center;
	border-top: 25px solid #D1DF29;
	border-bottom: 25px solid #D1DF29;
}
#container {
	position: relative;
	margin: 0 auto;
	width: 50%;
	text-align: left;
}
h1 {
	font-size: 2em;
	line-height: 150%;
	margin: 0 0 1.5em 0;
	color: #C73A26;
}
h2 {
	font-size: 1.5em;
	line-height: 140%;
	color: #838A3C;
}
hr {
	clear: both;
	visibility: hidden;
}
p {
	color: #4F5762;
}
.content {
	margin: 0 0 0 60px;
	border-left: 10px solid #EFF6FF;
	padding: 0 0 0 15px;
}
.vignette a {
	position: absolute;
	display: block;
	width: 40px;
	height: 40px;
	margin: 0 1em 0 0;
	border: 1px solid #cecece;
}
.vignette a:hover {
	position: absolute;
	display: block;
	width: 180px;
	height: 180px;
	margin: 0 1em 0 0;
	border: 1px solid #cecece;
}
.tennis a {
	background: url(/exemples/zoom/pix/tennis_boy.jpg) no-repeat top left;
}
.tennis a:hover {
	background: url(/exemples/zoom/pix/tennis_boy.jpg) no-repeat bottom right;
}
.foot a {
	background: url(/exemples/zoom/pix/foot_boy.jpg) no-repeat top left;
}
.foot a:hover {
	background: url(/exemples/zoom/pix/foot_boy.jpg) no-repeat bottom right;
}

.foot2 a {
	background: url(/exemples/zoom/pix/foot2_boy.jpg) no-repeat top left;
}
.foot2 a:hover {
	background: url(/exemples/zoom/pix/foot2_boy.jpg) no-repeat bottom right;
}

</style>
</head>

<body>
<div id="container">
	<h1>Lorem ipsum dolor sit amet</h1>
	<h2>Lorem ipsum dolor sit amet</h2>
	<div class="article">
		<p class="vignette tennis">
			<a href="#" title="zoom!"></a>
		</p>
		<div class="content">
			<p>
				"Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
				sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
				Ut enim ad minim veniam, 
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
				Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
				Excepteur sint occaecat cupidatat non proident, 
				sunt in culpa qui officia deserunt mollit anim id est laborum." 
			</p>
			<p>
				"Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
				sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
				Ut enim ad minim veniam, 
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
				Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
				Excepteur sint occaecat cupidatat non proident, 
				sunt in culpa qui officia deserunt mollit anim id est laborum." 
			</p>
		</div>
	</div>
	<hr />
	
	<h2>Lorem ipsum dolor sit amet</h2>
	<div class="article">
		<p class="vignette foot">
			<a href="#" title="zoom!"></a>
		</p>
		<div class="content">
			<p>
				"Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
				sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
				Ut enim ad minim veniam, 
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
				Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
				Excepteur sint occaecat cupidatat non proident, 
				sunt in culpa qui officia deserunt mollit anim id est laborum." 
			</p>
			<p>
				"Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
				sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
				Ut enim ad minim veniam, 
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
				Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
				Excepteur sint occaecat cupidatat non proident, 
				sunt in culpa qui officia deserunt mollit anim id est laborum." 
			</p>
		</div>
	</div>
	<hr />
	
	<h2>Lorem ipsum dolor sit amet</h2>
	<div class="article">
		<p class="vignette foot2">
			<a href="#" title="zoom!"></a>
		</p>
		<div class="content">
			<p>
				"Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
				sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
				Ut enim ad minim veniam, 
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
				Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
				Excepteur sint occaecat cupidatat non proident, 
				sunt in culpa qui officia deserunt mollit anim id est laborum." 
			</p>
			<p>
				"Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
				sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
				Ut enim ad minim veniam, 
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
				Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
				Excepteur sint occaecat cupidatat non proident, 
				sunt in culpa qui officia deserunt mollit anim id est laborum." 
			</p>
			<p>
			<a href="http://css4design.com/utiliser-les-portes-coulissantes-pour-realiser-un-effet-de-zoom-au-passage-de-la-souris" title="CSS et portes coulissantes pour un effet de zoom :hover">Retour vers le billet</a> | <a href="http://css4design.com" title="Intégration xhtml et css :: webdesign :: ergonomie :: référencement ">Retour vers l'accueil de css 4 design</a>
			</p>
		</div>
	</div>
	<hr />
</div>
<?php
//include ("../../stats.inc.php");
?> 
</body>
</html>
