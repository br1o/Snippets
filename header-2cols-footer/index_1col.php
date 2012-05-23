<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-15" />
<meta name="description" content="Ce soir, dans le menu design css, un exemple de mise en pages classique. Je voulais qu'en supprimant deux lignes dans la feuille de style, nous passions de deux � une colonne. Et cel� sans que rien d'autre ne change." />
<meta name="keywords" content="css,xhtml,html,webdesign,mise en pages,feuille de style,colonne,colonnes,pourcentage" />
<title>Mise en page CSS d'un design contenant un header, 1 colonne et un footer</title>
<style type="text/css">
<!--
/*//////////////////////\\\\\\\\\\\\\\\\\\\\\
 CSStyled by br1o
 copytop, june 2006
\\\\\\\\\\\\\\\\\\\\\\\\////////////////////*/

body {
/*Les marges externes et internes sont mises � zero */
	margin: 0;
	padding: 0;
	
/* Une famille de police, une taille, une hauteur de ligne et une couleur est d�finie pour tous le document. */
	font: 0.75em/1.5em Verdana, Arial, Helvetica, sans-serif;
	color: #333333;
	
/* Le document est centr� afin de pallier la non prise en charge d'IE 5.5 de la d�claration margin: 0 auto; plus bas*/
	text-align: center;
}
body * {
/* Les marges externes et internes sont mises � zero pour l'ensemble des 
balises contenues dans le document gr�ce au s�lecteur universel 
Ces deux propri�t�s seront ensuite appliqu�es au cas par cas si besoin.*/
	margin: 0;
	padding: 0;
}
#container {
/* le container fixe principalement les propri�t�s de largeur et de centrage dans la page
A noter que tous le contenu est � nouveau align�, mais � gauche cette fois-ci*/
	width: 75%;
	margin: 0 auto;
	text-align: left;
	background-color: #CCFF00;
	border: 1px solid #99CCCC;
}
#header {
	height: 100px;
	background-color: #99CCCC;
}
#content {
	background-color:#99CC66;
}
#footer {
	height: 30px;
	background-color: #99CCCC;
	
/* Cette d�claration nous assure que le footer se trouvera bien en bas de la page.*/
	clear: both;
}
h1 {
	text-align: center;
	/*La hauteur de ligne du titre est identique � la hauteur du header afin de le centrer verticalement*/
	line-height: 100px;
}
h3 {
	/*La hauteur de ligne du pied de page est identique � la hauteur du footer afin de le centrer verticalement*/
	line-height: 30px;
	text-align: right;
	margin: 0 3em 0 0;
}
.cols {
/* Ces deux d�clarations permettent d'obtenir une �l�gant effet de colonnage pour le texte.
La suppression des commentaires affiche l'ensemble du texte dans deux colonnes, tout simplement */
	/*width: 48%;
	float: left;*/
}
.cols p, .cols h1 {
	padding: 1em;
}
.intro {
	font-style: italic;
	font-size: 1.4em;
	line-height: 1.4em;	
}
.plainText {
	text-align: justify;
	line-height: 1.75em;
}
-->
</style>
</head>
<body>
<div id="container">
	<div id="header"><h1>Design CSS : 1 en-t�te, 1 colonne, 1 pied de page</h1></div>
	<div id="content">
		<div class="cols intro">
			<p>
				"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, 
				eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo."
			</p>
		</div>
		<div class="cols plainText">
			<p>
				"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, 
				eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam 
				voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione 
				voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci 
				velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
				Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea 
				commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae 
				consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
			</p>
		</div>
	</div>
	<div id="footer"><h3><a title="Design CSS avec en-tête, 2 colonnes, 1 pied de page (fixe ou liquide)" href="http://css4design.com/design-css-1-en-tete-2-colonnes-1-pied-de-page-fixe-ou-liquide">Retour vers l'article</a> | <a href="http://css4design.com" title="Intégration xhtml et css :: webdesign :: ergonomie :: référencement ">Retour vers l'accueil de css 4 design</a></div>
	</div>
<?php include ('../stats.inc.php'); ?>
</body>
</html>
