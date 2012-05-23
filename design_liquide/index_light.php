<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="description" content="Difficile de choisir entre un design fixe, &eacute;lastique ou liquide pour ses mises en pages CSS. Surtout si l'on se pr�ocuppe des standards web et des bonnes mani�res pour un web qui prenne du sens et perde du poids ! bon, ne nous emballons pas et entrons dans le vif du sujet en pr�cisant rapidement de quoi il s'agit " />
<meta name="keywords" content="css,xhtml,html,webdesign,fixe,&eacute;lastique,liquide,extensible en largeur" />
<title>Design CSS : fixe, &eacute;lastique ou liquide ?</title>
<style type="text/css">
<!--
/*//////////////////////\\\\\\\\\\\\\\\\\\\\\
 CSStyled by br1o
 copytop, june 2006
\\\\\\\\\\\\\\\\\\\\\\\\////////////////////*/

/* Layout global */

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
			<p>
			"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
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
