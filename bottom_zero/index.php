<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript">
function addElt() {
	var strEltId = document.getElementById("liste1");
	var strEndList = document.createElement("UL");
	for ( i = 0; i < 1; i++ ) {
		var strLine = document.createElement("LI");
		var strText = document.createTextNode("Je suis une nouvelle ligne");
		strLine.appendChild(strText);
		strEndList.appendChild(strLine);
	}
	strEltId.appendChild(strEndList);
}
function remElt() {
	var liste=document.getElementsByTagName("ul")[0].firstChild;
	rem = document.getElementsByTagName("ul")[0].removeChild(liste);
}
</script>
<style type="text/css">
body {
	margin: 0;
	padding: 0;
	text-align: center;
	font: 76%/140% Arial, Helvetica, sans-serif;
}
#container {
     position: absolute;
     left: 50%; 
     top: 50%;
     width: 30em;
     height: 30em;
	 margin: -15em 0 0 -15em;
     border: 1px solid #000;
	 text-align: left;
	 background-color: #990;
 }
* {
	margin: 0;
	padding: 0;
}
#menuBas {
	position: absolute;
	bottom: 0;
	width: 100%;
	height: 50%;
	background-color: #900;
	overflow: hidden;
}
#footer {
	position: relative;
	margin: 0 auto;
	bottom: -17em;
	text-align: center;
}
.liste {
	position: absolute;
	bottom: 0;
}
.listeLeft {
	left: 0;
}
.listeRight {
	right: 0;
	text-align: right;
}
.liste li {
	padding: 1ex;
}
ul {
	list-style-type: none;
}
h1 {
	font-size: 2.4em;
	padding: 1ex;
	line-height: 2ex;
	margin-bottom: -1ex;
}
h3 {
	font-size: 1.2em;
	margin-top: 1ex;
	padding: 1ex;
	text-align: center;
}
p {
	padding: 2ex;
	line-height: 3.5ex;
}
</style>
<title>Bloc centré dans la fenêtre du navigateur</title>
<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-29489833-1']);
	  _gaq.push(['_setDomainName', '4design.tl']);
	  _gaq.push(['_trackPageview']);
	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
</head>
<body>
<div id="container">
	<h1>Bloc en taille relative positionné en absolu centré dans la fenêtre du navigateur</h1>
	<p><a href="#" onclick="addElt('liste1');">Ajouter</a> <a href="#" onclick="remElt();">supprimer</a> un élément dans la liste de gauche</p>
	<div id="menuBas">
		<ul id="liste1" class="liste listeLeft"></ul>
		<h3>Exemple de listes alignées à droite et à gauche en position <em>absolute</em></h3>
		<ul class="liste listeRight">
			<li>Item 1</li>
			<li>Item 2</li>
			<li>Item 3</li>
			<li>Item 4</li>
		</ul>
	</div>
	<p id="footer">
		<a href="http://css4design.com/">Accueil css4design</a> | <a href="http://css4design.com/le-bottom-a-zero-bloc-centre">Retour vers l'article</a>
	</p>
</div>
</body>
</html>
