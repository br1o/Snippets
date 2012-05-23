<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="description" content="Pour r&eacute;aliser cet effet double-fond, nous avons donc besoin du motif bgFullContainer.gif, qui ne se r&eacute;p&egrave;tera qu'en x dans une div ayant une largeur de 100% et une hauteur &eacute;gale &agrave; celle de l'image. Notre deuxi&egrave;me motif bgFullBody.gif se r&eacute;p&egrave;tera en x et en y en arri&egrave;re-plan de la balise body." />
<meta name="keywords" content="css,xhtml,html,webdesign,opacit&eacute;,transparance,effet,png,internet explorer,motif,trame,tramage,tramer,gif,raccord,raccorder" />
<title>Background CSS avec motifs double-fond...</title>
<style type="text/css">
<!--
/*//////////////////////\\\\\\\\\\\\\\\\\\\\\
 CSStyled by br1o
 copytop, juillet 2006
\\\\\\\\\\\\\\\\\\\\\\\\////////////////////*/

body {
	margin: 0;
	padding: 0;
	text-align: center;
	font: 76%/160% Trebuchet, "Times New Roman", serif;
	background: url(images/bgFullBody.gif);
}
#fullContainer {
	height: 600px;
	background: url(images/bgFullContainer.gif) 6px 0 repeat-x;
}
#container {
	position: relative;
	width: 752px;
	margin: 0 auto;
	top: 22px;
	text-align: left;
}
* {
	margin: 0;
	padding: 0;
}
#topTitle {
	width: 752px;
	height: 24px;
	background: url(images/topTrans.gif) no-repeat;
}
#bgTitle {
	width: 752px;
	background-color: #91382D;
}
#content {
	padding: 1.5em;
}
p {
	font-family: Georgia, "Times New Roman", Times, serif;
	color: #ECE9D8;
	text-align: justify;
	margin: 1em 2em;
	padding: 5px 25px;
	background: url(images/guillemets.gif) -5px -5px no-repeat;
}
h1 {
	font-size: 2em;
	padding-bottom: 15px;
	text-align: center;
	color: #FCC94A;
}
h2 {
	font-size: 1.5em;
	padding-bottom: 10px;
	text-align: center;
	color: #FCC94A;
}
.trans70 {
	filter: alpha(opacity=70);  
	-moz-opacity: 0.7;
	opacity: 0.7;
	-khtml-opacity: 0.7;
}
a {
	font-weight: bold;
	text-decoration: none;
}
a:link {
	color: #CAB3A5;
}
a:visited {
	color: #CAB3A5;
}
a:hover {
	color: #DB9D41;
}
a:active {
	color: #FFF;
}
-->
</style>
<title>Background CSS avec motifs double-fond</title>
</head>
<body>
<div id="fullContainer">
	<div id="container" class="trans70">
		<div id="topTitle" class="trans70"></div>
		<div id="bgTitle" class="trans70">
			<h1>Background CSS avec motifs double-fond...</h1>
		</div>
		<div id="content">
			<h2>... et effet d'opacit� multiple sur le texte et les images</h2>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
				sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
				Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi 
				ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit 
				in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
				Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
				deserunt mollit anim id est laborum.
			</p>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
				sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
				Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi 
				ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit 
				in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
				Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
				deserunt mollit anim id est laborum.
			</p>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
				sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
				Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi 
				ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit 
				in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
				Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
				deserunt mollit anim id est laborum.
			</p>
			<p>
				<a title="Background CSS avec motifs double-fond..." href="http://css4design.com/background-css-avec-motifs-double-fond">Retour vers Background CSS avec motifs double-fond...</a> | <a href="http://css4design.com" title="Intégration xhtml et css :: webdesign :: ergonomie :: référencement ">Retour vers css 4 design</a>
			</p>
		</div>
	</div>
</div>
<?php include ('../stats.inc.php'); ?>

</body>
</html>
