<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="description" content="Les menus � onglets sont � la mode depuis d&eacute;j&egrave; quelques temps. Et c'est temps mieux car ils sont bien pratiques. Ils permettent de r&eacute;soudre un des probl&egrave;me fondamentaux des interfaces utilisateur : comment pr&eacute;senter toujours plus d'information sur une page, tout en en facilitant l'acc&egrave;s" />
<meta name="keywords" content="css,xhtml,html,webdesign,menu a onglet,onglet courant,current,feuille de style,javascript" />
<title>Javascript :: CSS :: Avec multiClass, permuter deux classes sur un événement onclick pour faire un menu à onglet</title>
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
	font: 0.75em/1.4em Arial, Helvetica, sans-serif;
}
#container {
	position: relative;
	width: 800px;
	margin: 3em auto;
	text-align: left;
	border: 4px solid #AF9D4C;
	background-color: #AF9D4C;
}
#container * {
	margin: 0;
	padding: 0;
}
#container ul#menu {
	position: relative;
	width: 100%;
	font-weight: bold;
}
#container ul#menu li {
	float: left;
	display: inline;
}
#container ul#menu li a {
	text-align: center;
	display: block;
	width: 200px;
	height: 25px;
	line-height: 25px;
	text-decoration: none;
}
#container ul#menu li a:hover {
	background-color: #EFDC86;
}
#container h1,
#container h2 {
	margin: 0.5em 0 0.5em 0;
	font-size: 1.4em;
}
#container .content {
	padding: 1em 2em;
	margin: -2px 0 0 0;
	_margin: -16px 0 0 0;
	background-color: #E7FFCF;
}
#container hr {
	clear: both;
	visibility: hidden;
}
#container a.current {
	background-color: #E7FFCF;
	color: #000;
}
#container a.ghost  {
	background-color: #AF9D4C;
	color: #000;
}
#container .on {
	display: block;
}
#container .off {
	display: none;
}
-->
</style>
<script type="text/javascript">
<!--
function multiClass(eltId) {
	arrLinkId = new Array('_0','_1','_2','_3');
	intNbLinkElt = new Number(arrLinkId.length);
	arrClassLink = new Array('current','ghost');
	strContent = new String()
	for (i=0; i<intNbLinkElt; i++) {
		strContent = "menu"+arrLinkId[i];
		if ( arrLinkId[i] == eltId ) {
			document.getElementById(arrLinkId[i]).className = arrClassLink[0];
			document.getElementById(strContent).className = 'on content';
		} else {
			document.getElementById(arrLinkId[i]).className = arrClassLink[1];
			document.getElementById(strContent).className = 'off content';
		}
	}	
}
-->
</script>
</head>
<body>
<div id="container">
	<ul id="menu">
		<li class="menu0">
			<a href="#" id="_0" class="current" onclick="multiClass(this.id)" title="menu1">Accueil</a>
		</li>
		<li class="menu1">
			<a href="#" id="_1" class="ghost" onclick="multiClass(this.id)" title="menu1">La fonction multiClass()</a>
		</li>
		<li class="menu2">
			<a href="#" id="_2" class="ghost" onclick="multiClass(this.id)" title="menu2">Analyse du script</a>
		</li>
		<li class="menu3">
			<a href="#" id="_3" class="ghost" onclick="multiClass(this.id)" title="menu3">conclusion</a>
		</li>
	</ul>
	<hr />
	<div id="menu_0" class="on content">
		<h1>Menu � onglet avec javascript et css</h1>
		<p>Les menus � onglets sont � la mode depuis d�j� quelques temps. Et c'est temps mieux car ils sont bien pratiques. Ils permettent de r�soudre un des probl�me fondamentaux des interfaces utilisateur : comment pr�senter toujours plus d'information sur une page, tout en en facilitant l'acc�s. Ou tout au moins sans transformer votre site en usine � gaz dont le parfum ferait fuir vos visiteurs ;)</p>
	</div>
	<div id="menu_1" class="off content">
		<h2>La fonction multiClass()</h2>
		<p>Je vous propose un exemple utilisant un petit script astucieux d�velopp� � trois mains (les deux de Beno�t et ma main gauche ;) qui permet de permuter deux classes en m�me temps sur un �v�nement onclick par exemple, en passant en param�tre l'id du lien sur lequel on clique.</p>
		<pre>
			function multiClass(eltId) {
				arrLinkId = new Array('_0','_1','_2','_3');
				intNbLinkElt = new Number(arrLinkId.length);
				arrClassLink = new Array('current','ghost');
				strContent = new String()
				for (i=0; i&lt;intNbLinkElt; i++) {
					strContent = "menu"+arrLinkId[i];
					if ( arrLinkId[i] == eltId ) {
						document.getElementById(arrLinkId[i]).className = arrClassLink[0];
						document.getElementById(strContent).className = 'on content';
					} else {
						document.getElementById(arrLinkId[i]).className = arrClassLink[1];
						document.getElementById(strContent).className = 'off content';
					}
				}	
			}
		</pre>
	</div>
	
	<div id="menu_2" class="off content">
		<h2>Analyse du script</h2>
		<p>Pour commencer, nous cr�ons le tableau arrLinkId contenant les id des liens sur lesquels doit s'effectuer le changement. Nous comptons ensuite le nombre d'�l�ments de cet array gr�ce � la m�thode length.

Puis nous avons un deuxi�me tableau qui contient les classes pour l'onglet current (celui sur lequel nous venons de cliquer) et qui mettra les autres onglets dans un �tat fant�matique (ghost).

Nous d�clarons ensuite la variable strContent qui contiendra, pour chaque it�ration de la boucle for, l'id du lien pr�c�d� de la cha�ne "menu" pour obtenir "menu_1" que l'on retrouve comme id de la div � afficher ou masquer. </p>
	</div>
	
	<div id="menu_3" class="off content">
		<h2>conclusion</h2>
		<p>La suite du script fait en sorte que si nous cliquons sur le lien dont l'id est "_1", la div identifi�e par "menu_1" passe de la classe on � la classe off, tandis que le lien passe de la classe ghost � current. Les autres div faisant le chemin inverse.

Il ne vous reste plus qu'� d�finir les classes par d�faut au chargement de la page current ou ghost et pour les div (on ou off) and the cat is in the bag! </p>
		<p>
		PS : Ce script est assez souple pour avoir d'autres applications. Partagez donc le fruit de votre imagination ;)
		</p>
	</div>

<p><a href="http://css4design.com/menu-a-onglet-avec-javascript-et-css" title="Menu à onglet avec javascript et css">Retour vers Menu à onglet avec javascript et css.</a> | <a href="http://css4design.com" title="Intégration xhtml et css :: webdesign :: ergonomie :: référencement ">Retour vers l'accueil de css 4 design</a></p>
</div>
<?php include ('../stats.inc.php'); ?>
</body>
</html>
