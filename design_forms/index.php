<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Design de formulaire HTML avec CSS</title>
    <meta name="description" content="Les formulaires sont souvent présentés à l'aide des tableaux. Nous allons voir une technique qui nous permettra d'obtenir de beaux formulaires avec CSS" />
    <meta name="keywords" content="css,xhtml,html,webdesign,formulaire,label,input" />
    <style type="text/css">
      <!--
      /*//////////////////////\\\\\\\\\\\\\\\\\\\\\ 
      CSStyled by br1o copytop, juillet 2006
      \\\\\\\\\\\\\\\\\\\\\\\\////////////////////*/
      
      /* Layout globals */
      body {	
        margin: 2em 0 0 0;	
        padding: 0;	
        text-align: center;	
        font: 0.75em/1.2em Verdana, Arial, Helvetica, sans-serif;	
        color: #666;
      }
      body * { /* préférez un reset plus sélectif (reset css dans Google ;) */	
        margin: 0;	
        padding: 0;
      }
      #full {	
        position: relative;	
        width: 65%;	
        margin: 0 auto;	
        text-align: left;
      }
      
      /* formz */
      fieldset {	
        margin-bottom: 1em;	
        border: 0;	
        width: auto;	
        margin: 0.5em;	
        background-color:#97AF12;
      }
      fieldset p {	
        padding: 0 0 0.75em 0.5em !important;	
        padding: 0 0 0.35em 0.5em;	
        clear: both;
      }
      legend {	
        margin: 0 0 0.5em 0;	
        padding: 0.3em;	
        font: bold 0.9em Verdana, Arial, Helvetica, sans-serif;	
        color: #FFD100;	
        background-color:#97AF12 !important;	
        background-color: none;
      }
      label.text {	
        display: block;	
        float: left;	
        width: 40%;	
        text-align: right; /* n'hésitez pas pas à aligner à gauche, c'est pas mal aussi */	
        margin: 0 1em 0 0;	
        padding: 0.1em;	
        border-bottom: 1px solid #ABBF3B;
      }
      .radioCheck {	
        margin: 0 1em 0 0.25em;	
      }
      input.text,textarea {	
        width: 40%;	
        background-color: #FFD100;	
        border: 0;	
        margin-right: 0.25em;
      }
      .envoy {	
        margin: 1em 0;	
        text-align: left;
      }
      .envoy label {	
        border: 0;
      }
      hr {	
        visibility: hidden;	
        clear: both;
      }
      span.note {	
        font-size: 0.75em;
      }
      span.warning {	
        font-weight: bold;	
        font-size: 1.3em;	
        color: #fff;
      }
      .nobr {	
        white-space: nowrap;
      }
      a {	
        text-decoration: none;	
        color: #666666;
      }
      -->
    </style>
  </head>
  <body>	
    <div id="full">		
      <form enctype="multipart/form-data" id="fpersonne" action="">			
        <fieldset id="coordonnee">				
          <legend>Coordonnées
          </legend>				
          <p>					
            <label class="text">Civilités
            </label>					
            <input class="radio" type="radio" id="civM" name="civ" />
            <label class="radioCheck" for="civM">M.
            </label>					
            <input class="radio" type="radio" id="civMme" name="civ" />
            <label class="radioCheck" for="civMme">Mme
            </label>					
            <input class="radio" type="radio" id="civMlle" name="civ" />
            <label class="radioCheck" for="civMlle">Mlle
            </label>
            <span class="warning">*
            </span>				
          </p>				
          <p>					
            <label class="text" for="nom">Pseudo
            </label>
            <input class="text" id="nom" name="nom" type="text" />
            <span class="warning">*
            </span>				
          </p>				
          <p>					
            <label class="text" for="prenom">Email
            </label>
            <input class="text" id="prenom" name="prenom" type="text" />
            <span class="warning">*
            </span>				
          </p>				
          <p>					
            <label class="text" for="pwd">Mot de passe
            </label>
            <input class="text" id="pwd" name="pwd" type="password" />
            <span class="note">6 car. min.
            </span>
            <span class="warning">*
            </span>				
          </p>				
          <hr />			
        </fieldset>			
        <fieldset id="connaitre">				
          <legend>Quel domaine connaissez-vous le mieux ?
          </legend>					
          <p>						
            <label class="text">Vos centres d'intérêts
            </label>						
            <input type="radio" id="hobby1" name="hobby" />
            <label class="radioCheck" for="hobby1">xhtml
            </label>						
            <input type="radio" id="hobby2" name="hobby" />
            <label class="radioCheck" for="hobby2">css
            </label>						
            <input type="radio" id="hobby3" name="hobby" />
            <label class="radioCheck" for="hobby3">javascript
            </label>					
          </p>					
          <p>						
            <label class="text" for="browser">Quel navigateur internet utilisez-vous le plus ?
            </label>						
            <select name="browser" id="browser" class="text">							
              <option selected="selected">Firefox
              </option>							
              <option>Opera
              </option>							
              <option>Safari
              </option>							
              <option>Camino
              </option>							
              <option>Internet Explorer
              </option>						
            </select>						
          </p>					
          <p>						
            <label class="text" for="accomp">Comment êtes-vous arrivé ici
            </label>						
            <span class="nobr">
              <input type="checkbox" id="css4design" name="css4design" />
              <label class="radioCheck" for="css4design">
                <a href="http://www.css4design.com">www.css4design.com</a>
              </label>
            </span>						
            <span class="nobr">
              <input type="checkbox" id="blogdesbois" name="blogdesbois" />
              <label class="radioCheck" for="blogdesbois">
              </label>
              <a href="http://www.br1o.com">www.br1o.com</a>
            </span>						
            <span class="nobr">
              <input type="checkbox" id="br1o" name="br1o" />
              <label class="radioCheck" for="br1o">
                <a href="http://blogdesbois.free.fr">blogdesbois.free.fr</a>
              </label>
            </span>					
          </p>					
          <p>						
            <label class="text" for="photo">Photo
            </label>
            <input type="file" class="text" name="photo" id="photo" />					
          </p>					
          <p>						
            <label class="text" for="observation">Observations
            </label>
<textarea rows="" cols="" class="text" id="observation" name="observation"></textarea>					
          </p>				
          <hr />			
        </fieldset>			
        <p class="envoy">				
          <label class="text">&nbsp;
          </label>
          <input id="validSearch" type="submit" value="Envoyer" /> 
          <input type="reset" value="Effacer" />			
        </p>		
      </form>	
      <p>
        <a href="http://css4design.com/design-de-formulaire-html-avec-css">Retour vers Design de formulaire HTML avec CSS</a> | 
        <a href="http://css4design.com" title="Intégration xhtml et css :: webdesign :: ergonomie :: référencement">Retour vers l'accueil de css4design</a>
      </p>	
    </div>
    <?php include ('../stats.inc.php'); ?>
  </body>
</html>