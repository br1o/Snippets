<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-15" />
<meta name="description" content="Difficile de choisir entre un design fixe, &eacute;lastique ou liquide pour ses mises en pages CSS. Surtout si l'on se pr�ocuppe des standards web et des bonnes mani�res pour un web qui prenne du sens et perde du poids ! bon, ne nous emballons pas et entrons dans le vif du sujet en pr�cisant rapidement de quoi il s'agit " />
<meta name="keywords" content="css,xhtml,html,webdesign,fixe,&eacute;lastique,liquide,extensible en largeur" />
<title>Design CSS : fixe, élastique ou liquide ?</title>
<style type="text/css">
<!--
/*//////////////////////\\\\\\\\\\\\\\\\\\\\\
 CSStyled by br1o
 copytop, juin 2006
\\\\\\\\\\\\\\\\\\\\\\\\////////////////////*/

/* Layout globals */

body {
	margin: 2em 0 0 0;
	padding: 0;
	text-align: center;
	font: 0.75em/1.2em Verdana, Arial, Helvetica, sans-serif;
	color: #666;
}
body * {
	margin: 0;
	padding: 0;
}
#full {
	position: relative;
	width: 60%;
	margin: 0 auto;
	text-align: left;
}

/* Layout frame */

#topRight, #bottomRight {
	float: right;
}
#topRight {
	background: transparent url(pix/top_right.gif) no-repeat;
}
#bottomRight {
	background: transparent url(pix/bottom_right.gif) no-repeat;
}
#topLeft, #topRight, #bottomLeft, #bottomRight {
	width: 32px;
	height: 32px;
}
#topLeft {
	background: transparent url(pix/top_left.gif) no-repeat;
}
#bottomLeft {
	background: transparent url(pix/bottom_left.gif) no-repeat;
}
#sideLeft {
	background: transparent url(pix/side_left.gif) top left repeat-y;
}
#sideRight {
	background: transparent url(pix/side_right.gif) top right repeat-y;
}
.sideTop, .sideBottom {
	width: auto;
	height: 32px;
}
#sideTop {
	background: transparent url(pix/side_top.gif) repeat-x;
}
#sideBottom {
	background: transparent url(pix/side_bottom.gif) repeat-x;
}

/* layout content */

.content {
	padding: 1em 3em;
}
.content p {
	margin-bottom: 0.5em;
	line-height: 1.3em
}
h1 {
	font-size: 1.5em;
	margin: 0 0 1em 0;
	color: #FFD100;
	letter-spacing: -0.05em;
}
hr {
	clear: both;
	visibility: hidden;
	height: 0.1em;
	border: 0;
}
ul {
	margin: 0 0 0 3em;
	list-style-type: square;
}
ul li {
	margin: 0 0 0.5em 0;
}
a {
	text-decoration: none;
	color: #B19200;
}
a:hover {
	text-decoration: underline;
}
-->
</style>
</head>
<body>
<div id="full">
	<div id="sideTop">
		<div id="topRight"></div><div id="topLeft"></div>
	</div>
	<div id="sideRight">
		<div id="sideLeft" class="content">
		<!-- CONTENT START HERE -->
			<h1>
				<a href="http://www.css4design.com/blog/index.php/2006/06/13/6-design-css-fixe-elastique-ou-liquide" title="Votre mise en pages CSS : fixe, �lastique ou liquide" alt="Votre mise en pages CSS : fixe, �lastique ou liquide">Votre mise en pages CSS : fixe, �lastique ou liquide ?</a>
			</h1>
			<p>
				"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
			</p>
			<ul>
				<li>
				  "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				</li>
				<li>
				  "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				</li>
				<li>
				</li>
			</ul>
			<p>
				"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
			</p>
			<p>
				<a title="Design CSS : fixe, élastique ou liquide ?" href="http://css4design.com/design-css-fixe-elastique-ou-liquide">&lt;--Retour vers l'article</a> | <a href="http://css4design.com" title="Intégration xhtml et css :: webdesign :: ergonomie :: référencement ">Retour vers l'accueil de css4design</a>
			</p>
		  <!-- CONTENT ENDS HERE -->
		</div>
	</div>
	<div id="sideBottom">
		<div id="bottomRight"></div><div id="bottomLeft"></div>
	</div>
</div>
<?php include ('../stats.inc.php'); ?>
</body>
</html>
