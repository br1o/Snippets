<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="Tutoriel sur la conception et la réalisation d'une page web sans image avec HTML5 et CSS3 et une pincée de Javascript">
    <title>Dégradés, coins arrondis, ombres portées sans image avec CSS3</title>
    <!--[if lt IE 9]>
        <script>// http://remysharp.com/2009/01/07/html5-enabling-script/
            /*@cc_on'abbr article aside audio canvas details figcaption figure footer header hgroup mark menu meter nav output progress section summary time video'.replace(/\w+/g,function(n){document.createElement(n)})@*/
        </script>
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <![endif]-->
    <link rel="icon" type="image/png" href="favicon.png">
    <script src="column.js"></script>
    <script>var divs = new Array('articles','sidebar-1','sidebar-2');</script>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen,projection">
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
<body class="roundies">
    <header id="intro">
        <hgroup id="brand" class="box">
            <h1><a title="Conception dans le navigateur avec HTML5 & CSS3 (amélioration progressive et dégradation gracieuse)" href="http://css4design.com/conception-dans-le-navigateur-avec-html5-css3">← Tuto HTML5/CSS3</a></h1>
            <h2>Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa Cras in mi at felis aliquet congue.</h2>
        </hgroup>
        <div id="menu-top">
            <ul class="box">
               <li><a class="roundies" href="#">Lorem</a></li>
               <li><a class="roundies" href="#">Ipsum</a></li>
               <li><a class="roundies" href="#">Pellentesque</a></li>
            </ul>
        </div>
    </header>
    <div id="container" class="roundies">
        <header id="presentation">
            <p>Cette page web est réalisée en HTML5 et CSS3 sans image avec une dégradation gracieuse dans les navigateurs ne prenant pas en charge les bords arrondis, les ombres portées ou les dégradés.</p>
        </header>
        <div id="articles">
            <article>
                <header>
                    <div class="category-top"><a class="roundies-top" href="/">Aliquam</a></div>
                    <h1 class="roundies-top-right"><a href="/">Vivamus magna senectus et netus</a></h1>
                </header>
                <p><span class="lettrine">P</span>ellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em></p>
                <section>
                    <h1>Consectetur adipiscing</h1>
                    <p>
                        <img class="floatleft" src="iron-man.png" alt="iron man">
                        Pellentesque habitant morbi tristique senectus et netus et <strong>malesuada fames</strong> ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.
                    </p>
                    <h2>Sit amet</h2>
                    <p>
                        Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.
                    </p>
                </section>
                <footer class="roundies">
                    <p>Malesuada fames ac turpis egestas (06/04/2010)</p>
                </footer>
            </article>
        </div>
        <div id="sidebar-1" class="sidebars roundies">
            <nav class="box">
                <h1>Pellentesque</h1>
                <ul>
                    <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                    <li>Aliquam tincidunt mauris eu risus.</li>
                    <li>Vestibulum auctor dapibus neque.</li>
                </ul>
             </nav>
            <section class="box">
                <h1>Malesuada fames</h1>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                <h2>turpis egestas</h2>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
            </section>
        </div>
        <div id="sidebar-2" class="sidebars roundies">
             <aside class="box">
                <h1>Consectetuer adipiscing</h1>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                <h2>Senectus</h2>
                <ul>
                    <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                    <li>Aliquam tincidunt mauris eu risus.</li>
                    <li>Vestibulum auctor dapibus neque.</li>
                </ul>
             </aside>
        </div>
    <footer id="outro-1" class="roundies">
        <div class="box">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque habitant morbi tristique senectus</p>
            <p id="incentive"> Netus et malesuada fames ac turpis egestas. <a href="/">Vestibulum tortor quam</a> eugiat vitae.</p>
            <p id="credits"><a href="http://css4design.com/">Web design</a> par <a href="http://css4design.com/a-propos">Bruno Bichet</a>.</p>
        </div>
    </footer>
</div>
<footer id="outro-2">
    <p class="box">&copy; 2010 &mdash; Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante</p>
</footer>
</body>
</html>