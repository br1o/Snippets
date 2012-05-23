<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="description" content="Comment r&eacute;aliser un pied de page toujours en bas de la page avec CSS et Javascript" />
<meta name="keywords" content="css,xhtml,html,webdesign,pied de page,footer,dom,feuille de style,javascript" />
<title>Pied de page toujours en bas avec Javascript et CSS</title>
<script type="text/javascript">
<!--
function getWindowHeight() {
	var windowHeight = 0;
	if (typeof(window.innerHeight) == 'number') {
		windowHeight = window.innerHeight;
	}
	else {
		if (document.documentElement && document.documentElement.clientHeight) {
			windowHeight = document.documentElement.clientHeight;
		}
		else {
			if (document.body && document.body.clientHeight) {
				windowHeight = document.body.clientHeight;
			}
		}
	}
	return windowHeight;
}
function setFooter() {
	if (document.getElementById) {
		var windowHeight = getWindowHeight();
		if (windowHeight > 0) {
			var contentHeight = document.getElementById('content').offsetHeight;
			var footerElement = document.getElementById('footer');
			var footerHeight  = footerElement.offsetHeight;
			if (windowHeight - (contentHeight + footerHeight) >= 0) {
				footerElement.style.position = 'relative';
				footerElement.style.top = (windowHeight - (contentHeight + footerHeight)) + 'px';
			}
			else {
				footerElement.style.position = 'static';
			}
		}
	}
}
window.onload = function() {
	setFooter();
}
window.onresize = function() {
	setFooter();
}
//-->
</script>
<style type="text/css">
<!--
html, body {
	margin: 0;
	padding: 0;
	height: 100%; /* N�cessaire si on veut que la couleur de #page se poursuive jusqu'au footer*/
	font: 90%/200% verdana, arial, helvetica, sans-serif;
}
* {
	margin: 0;
	padding: 0;
}
#page {
	width: 750px;
	margin: 0 auto;
	background-color:#FFFF99;
	border: 1px solid #000;
	min-height: 100% /* N�cessaire si on veut que la couleur de #page se poursuive jusqu'au footer*/
}
#top {
	height: 85px;
	background-color: #ffb200;
}
#footer {
	position: relative;  /* N�cessaire pour Safari */
	height: 25px;
	padding: 1em;
	background-color: #ffb200;
}
h1,h2, h3, h4, h5, h6, p  {
	padding: 0.5em;
}
h1 {
	font-size: 2em;
	line-height: 1.3em;
}
samp {
	font-size: 1.25em;
}
-->
</style>
<!--[if IE]>
<style type="text/css">
	#page {height: 100%;}/* N�cessaire si on veut que la couleur de #page se poursuive jusqu'au footer*/
	</style>
<![endif]-->
<title>Pied de page toujours en bas avec DOM, Javascript et CSS</title>
</head>
<body>
<div id="page">
	<div id="content">
	<div id="top">
		<h1>Pied de page toujours en bas avec DOM, Javascript et CSS ?</h1>
	</div>
		<h2>
			C'est possible !		
		</h2>
		<p>
			Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Etiam erat. Donec aliquam tortor eget purus. Fusce auctor consectetuer libero. Aenean a nisi. In purus sem, ornare vitae, consectetuer eu, consectetuer et, lectus.
		</p>
		<p>
			Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Etiam erat. Donec aliquam tortor eget purus. Fusce auctor consectetuer libero. Aenean a nisi. In purus sem, ornare vitae, consectetuer eu, consectetuer et, lectus. Donec nulla. Curabitur cursus, nibh ac malesuada fermentum, nunc lorem posuere nunc, sit amet egestas ipsum tellus eget neque. Proin mattis faucibus turpis. Nunc eget orci. Integer sit amet nulla vitae orci tempus adipiscing. Phasellus rutrum, mi vitae rhoncus vulputate, risus metus accumsan eros, quis venenatis erat nulla at nunc. Aenean fringilla sapien porttitor lacus auctor molestie. Cras dolor lacus, auctor sed, adipiscing et, hendrerit vel, sem. Nulla ut pede ac lorem eleifend pharetra. Morbi eros. Ut et tortor. Etiam lorem purus, pretium non, interdum eget, fermentum ac, sem. Sed porta. Mauris non odio ut ligula pellentesque dignissim.
		</p>
	</div>
	<div id="footer">
	
		<p>
		<a title="Pied de page toujours en bas avec Javascript et CSS" href="http://www.css4design.com/blog/index.php/2006/07/21/29-pied-de-page-toujours-en-bas-avec-dom-javascript-et-css">Retour vers le billet</a> | <a href="http://www.css4design.com" title="Int�gration xhtml et css :: webdesign :: ergonomie :: r�f�rencement ">Retour vers l'accueil de css4design</a></p>
		
	</div>
</div>
<?php include ('../stats.inc.php'); ?>
</body>
</html>
