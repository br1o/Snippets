<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="description" content="Pour obtenir un effet d'opacit&eacute; sur un &eacute;l&eacute;ment, il existe le format d'image PNG 24 bits qui accepte jusqu'&agrave; 256 niveaux de transparence. Malheureusement Internet Explorer 6 ne prend pas en charge cette int&eacute;ressante caract&eacute;ristique..." />
<meta name="keywords" content="css,xhtml,html,webdesign,opacit&eacute;,transparance,effet,png,internet explorer,motif,trame,tramage,tramer,gif," />
<title>Opacité CSS effet de trame avec GIF ou PNG</title>
<script type="text/javascript">
function popup(l,h,url) {
	hauteur=Math.round((screen.availHeight-h)/2);
	largeur=Math.round((screen.availWidth-l)/2);
	window.open(url, "video", "toolbar=0,location=0,directories=0,status=0, scrollbars=0,resizable=0,menubar=0,top="+hauteur+",left="+largeur+",width="+l+",height="+h);
}
</script>
<style type="text/css">
body {
	font: 80%/140% Trebuchet, Tahoma, sans-serif;
	color: #000;
	background-color: #000;
}
#container {
	width: 80%;
	margin: 3em auto;
}
* {
	margin: 0;
	padding: 0;
}
#transByColor {
	margin: 0 10em;
	width: 589px;
	height: 396px;
	margin-bottom: 2em;
	background: transparent url(images/fleur.jpg) no-repeat;
}
.transByGrid {
	margin: 0 10em;
	width: 589px;
	height: 396px;
	margin-bottom: 2em;
	background: transparent url(images/fleur.jpg) no-repeat;
}
#transByImage {
	margin: 0 10em;
	width: 589px;
	height: 396px;
	margin-bottom: 2em;
	background-color: #FF0099;
}
#transByColor p, #transByImage p, .transByGrid p {
	width: 100%;
	height: 42px;
	padding: 1px 0;
	line-height: 42px;
	text-align: center;
}	
#transByColor p {
	background-color: #FF0099;
}
.transByGrid p {
	/*background: transparent url(images/grid_8.gif);*/
}
h1 {
	font-size: 1.8em;
	color: #F41091;
	padding: 0.5em 0 0.5em 0;
	margin-bottom: 1.5em;
	border-bottom: 1px solid #FFDA5B;
}
h2 {
	font-size: 1.4em;
	color: #FF6F14;
	padding; 0.5em;
	margin-bottom: 0.75em;
}
h3 {
	font-size: 1.2em;
	color: #FFDA5B;
	padding; 0.5em;
	margin-bottom: 1.5em;
}
h4 {
	font-size: 1em;
	color: #FFF;
	padding; 0.5em;
	margin-bottom: 1.5em;
}

/* Gestion de l'opacit� selon les propri�t�s prises en charge par les navigateurs :
1 - pour Internet Explorer
2 - pour Mozilla
3 - pour les navigateurs respectant les CSS3 
4 - pour Konqueror*/
.trans10 {
    filter:alpha(opacity=10);  
    -moz-opacity:0.1;
    opacity: 0.1;
	-khtml-opacity: 0.1;
}
.trans20 {
    filter:alpha(opacity=20);  
    -moz-opacity:0.2;
    opacity: 0.2;
	-khtml-opacity: 0.2;
}
.trans30 {
    filter:alpha(opacity=30);  
    -moz-opacity:0.3;
    opacity: 0.3;
	-khtml-opacity: 0.3;
}
.trans40 {
    filter:alpha(opacity=40);  
    -moz-opacity:0.4;
    opacity: 0.4;
	-khtml-opacity: 0.4;
}
.trans50 {
    filter:alpha(opacity=50);  
    -moz-opacity:0.5;
    opacity: 0.5;
	-khtml-opacity: 0.5;
}
.trans60 {
    filter:alpha(opacity=60);  
    -moz-opacity:0.6;
    opacity: 0.6;
	-khtml-opacity: 0.6;
}
.trans70 {
    filter:alpha(opacity=70);  
    -moz-opacity:0.7;
    opacity: 0.7;
	-khtml-opacity: 0.7;
}
.trans80 {
    filter:alpha(opacity=80);  
    -moz-opacity:0.8;
    opacity: 0.8;
	-khtml-opacity: 0.8;
}
.trans90 {
    filter:alpha(opacity=90);  
    -moz-opacity:0.9;
    opacity: 0.9;
	-khtml-opacity: 0.9;
}

/* Image de fond � opacifier. 
Chaque image est positionn�e de mani�re � reconstituer l'image d'origine */
#image1 {
	background: transparent url(images/fleur.jpg) 0 0 no-repeat;
}
#image2 {
	background: transparent url(images/fleur.jpg) 0 -42px no-repeat;
}
#image3 {
	background: transparent url(images/fleur.jpg) 0 -84px no-repeat;
}
#image4 {
	background: transparent url(images/fleur.jpg) 0 -126px no-repeat;
}
#image5 {
	background: transparent url(images/fleur.jpg) 0 -168px no-repeat;
}
#image6 {
	background: transparent url(images/fleur.jpg) 0 -210px no-repeat;
}
#image7 {
	background: transparent url(images/fleur.jpg) 0 -262px no-repeat;
}
#image8 {
	background: transparent url(images/fleur.jpg) 0 -304px no-repeat;
}
#image9 {
	background: transparent url(images/fleur.jpg) 0 -346px no-repeat;
}


/* Image de fond � opacifier. 
un motif semi-transparent est appliqu� en background de chaque paragraphe */

/* Motif vert */
#grid1 {
	background: transparent url(images/grid_1.gif);
}
#grid2 {
	background: transparent url(images/grid_1.gif);
}
#grid3 {
	background: transparent url(images/grid_2.gif);
}
#grid4 {
	background: transparent url(images/grid_2.gif);
}
#grid5 {
	background: transparent url(images/grid_3.gif);
}
#grid6 {
	background: transparent url(images/grid_3.gif);
}
#grid7 {
	background: transparent url(images/grid_4.gif);
}
#grid8 {
	background: transparent url(images/grid_4.gif);
}
#grid9 {
	background: transparent url(images/grid_5.gif);
}

/* Motif blanc */
#grid1B {
	background: transparent url(images/grid_1B.gif);
}
#grid2B {
	background: transparent url(images/grid_1B.gif);
}
#grid3B {
	background: transparent url(images/grid_2B.gif);
}
#grid4B {
	background: transparent url(images/grid_2B.gif);
}
#grid5B {
	background: transparent url(images/grid_3B.gif);
}
#grid6B {
	background: transparent url(images/grid_3B.gif);
}
#grid7B {
	background: transparent url(images/grid_4B.gif);
}
#grid8B {
	background: transparent url(images/grid_4B.gif);
}
#grid9B {
	background: transparent url(images/grid_5B.gif);
}


/* Motif noir */
#grid1N {
	background: transparent url(images/grid_1N.gif);
}
#grid2N {
	background: transparent url(images/grid_1N.gif);
}
#grid3N {
	background: transparent url(images/grid_2N.gif);
}
#grid4N {
	background: transparent url(images/grid_2N.gif);
}
#grid5N {
	background: transparent url(images/grid_3N.gif);
}
#grid6N {
	background: transparent url(images/grid_3N.gif);
}
#grid7N {
	background: transparent url(images/grid_4N.gif);
}
#grid8N {
	background: transparent url(images/grid_4N.gif);
}
#grid9N {
	background: transparent url(images/grid_5N.gif);
}
</style>
<title>Opacité et effet de transparence avec CSS et GIF ou PNG transparent</title>
</head>

<body>
<div id="container">
	<h1>Quelques pistes au sujet de l'opacité et des effet de transparence</h1>
	<h2>Premier plan en APLAT de couleur avec une opacité...</h2>
	<h3>...au-dessus d'une photo</h3>
	<div id="transByColor">
		<p class="trans10"><strong>opacit� de 10</strong></p>
		<p class="trans20"><strong>opacit� de 20</strong></p>
		<p class="trans30"><strong>opacit� de 30</strong></p>
		<p class="trans40"><strong>opacit� de 40</strong></p>
		<p class="trans50"><strong>opacit� de 50</strong></p>
		<p class="trans60"><strong>opacit� de 60</strong></p>
		<p class="trans70"><strong>opacit� de 70</strong></p>
		<p class="trans80"><strong>opacit� de 80</strong></p>
		<p class="trans90"><strong>opacit� de 90</strong></p>
	</div>
	
	<h2>Premier plan PHOTO avec une opacité...</h2>
	<h3>...au-dessus d'un aplat de couleur</h3>
	<div id="transByImage">
		<p id="image1" class="trans10"><strong>opacit� de 10</strong></p>
		<p id="image2" class="trans20"><strong>opacit� de 20</strong></p>
		<p id="image3" class="trans30"><strong>opacit� de 30</strong></p>
		<p id="image4" class="trans40"><strong>opacit� de 40</strong></p>
		<p id="image5" class="trans50"><strong>opacit� de 50</strong></p>
		<p id="image6" class="trans60"><strong>opacit� de 60</strong></p>
		<p id="image7" class="trans70"><strong>opacit� de 70</strong></p>
		<p id="image8" class="trans80"><strong>opacit� de 80</strong></p>
		<p id="image9" class="trans90"><strong>opacit� de 90</strong></p>
	</div>
	
	<h2>Premier plan avec MOTIF semi-transparent...</h2>
	<h3>...au-dessus d'une photo</h3>
	<h4>Motif à base de vert clair</h4>
	<div class="transByGrid">
		<p id="grid1"><a href="images/exemple_1.gif" onclick="javascript:popup('215','215','images/exemple_1.gif');return false;" alt="">Voir le motif utilis�</a></p>
		<p id="grid2"></p>
		<p id="grid3"><a href="images/exemple_2.gif" onclick="javascript:popup('215','215','images/exemple_2.gif');return false;" alt="">Voir le motif utilis�</a></p>
		<p id="grid4"></p>
		<p id="grid5"><a href="images/exemple_3.gif" onclick="javascript:popup('215','215','images/exemple_3.gif');return false;" alt="">Voir le motif utilis�</a></p>
		<p id="grid6"></p>
		<p id="grid7"><a href="images/exemple_4.gif" onclick="javascript:popup('215','215','images/exemple_4.gif');return false;" alt="">Voir le motif utilis�</a></p>
		<p id="grid8"></p>
		<p id="grid9"><a href="images/exemple_5.gif" onclick="javascript:popup('215','215','images/exemple_5.gif');return false;" alt="">Voir le motif utilis�</a></p>
	</div>
	<h4>M�me chose avec un motif à base de blanc</h4>
	<div class="transByGrid">
		<p id="grid1B"><strong>Exemple de texte</strong></p>
		<p id="grid2B"></p>
		<p id="grid3B"><strong>Exemple de texte</strong></p>
		<p id="grid4B"></p>
		<p id="grid5B"><strong>Exemple de texte</strong></p>
		<p id="grid6B"></p>
		<p id="grid7B"><strong>Exemple de texte</strong></p>
		<p id="grid8B"></p>
		<p id="grid9B"><strong>Exemple de texte</strong></p>
	</div>
	
	<h4>M�me chose avec un motif à base de gris</h4>
	<div class="transByGrid">
		<p id="grid1N"><strong>Exemple de texte</strong></p>
		<p id="grid2N"></p>
		<p id="grid3N"><strong>Exemple de texte</strong></p>
		<p id="grid4N"></p>
		<p id="grid5N"><strong>Exemple de texte</strong></p>
		<p id="grid6N"></p>
		<p id="grid7N"><strong>Exemple de texte</strong></p>
		<p id="grid8N"></p>
		<p id="grid9N"><strong>Exemple de texte</strong></p>
	</div>
	<a title="Opacité CSS et effet de trame avec GIF/PNG transparent" href="http://www.css4design.com/opacite-avec-css-et-effet-de-trame-avec-un-gif-transparent">Retour vers le billet</a> | <a href="http://css4design.com" title="Intégration xhtml et css :: webdesign :: ergonomie :: r�f�rencement ">Retour vers l'accueil de css 4 design</a>
</div>
<?php include ('../stats.inc.php'); ?>

</body>
</html>
