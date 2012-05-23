<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-15" />
<title>Mise en page CSS d'un design contenant un header, 2 colonnes et un footer</title>
<style type="text/css">

/*//////////////////////\\\\\\\\\\\\\\\\\\\\\
 CSStyled by br1o
 copytop, june 2006
\\\\\\\\\\\\\\\\\\\\\\\\////////////////////*/

body {
/*Les marges externes et internes sont mises à zero */
	margin: 0;
	padding: 0;
	
/* Une famille de police, une taille, une hauteur de ligne et une couleur est définie pour tous le document. */
	font: 0.75em/1.5em Verdana, Arial, Helvetica, sans-serif;
	color: #333333;
	
/* Le document est centré afin de pallier la non prise en charge d'IE 5.5 de la déclaration margin: 0 auto; plus bas*/
	text-align: center;
}
body * {
/* Les marges externes et internes sont mises à zero pour l'ensemble des 
balises contenues dans le document grâce au sélecteur universel 
Ces deux propriétés seront ensuite appliquées au cas par cas si besoin.*/
	margin: 0;
	padding: 0;
}
#container {
/* le container fixe principalement les propriétés de largeur et de centrage dans la page
A noter que tous le contenu est à nouveau aligné, mais à gauche cette fois-ci*/
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
	
/* Cette déclaration nous assure que le footer se trouvera bien en bas de la page.*/
	clear: both;
}
h1 {
	text-align: center;
	/*La hauteur de ligne du titre est identique à la hauteur du header afin de le centrer verticalement*/
	line-height: 100px;
}
h3 {
	/*La hauteur de ligne du pied de page est identique à la hauteur du footer afin de le centrer verticalement*/
	line-height: 30px;
	text-align: right;
	margin: 0 3em 0 0;
}
.cols {
/* Ces deux déclarations permettent d'obtenir une élégant effet de colonnage pour le texte.
La suppression de ces deux lignes affiche l'ensemble du texte dans une colonnne unique, tout simplement */
	width: 48%;
	float: left;
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
	<div id="header"><h1><a href="http://www.br1o.com/blog/?p=23" title="Design CSS : 1 en-tête, 2 colonnes, 1 pied de page">Design CSS : 1 en-tête, 2 colonnes, 1 pied de page</a></h1></div>
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
	<div id="footer"><h3><a href="http://www.br1o.com/blog/" title="Retour sur la page d'accueil de br1o.com">Retour sur la page d'accueil de br1o.com</a></h3></div>
</div>
</body>
</html>
