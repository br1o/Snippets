<!doctype html>
<head>
	<meta charset="utf-8">
	<title>Démonstration de 940.CSS Version Fluide basée sur Blueprint</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/940-fluid.css">
	<style>
		body {
			font-family: sans-serif;
			font-size: 100%;
			line-height: 1.5;
		}
		img { 
			float: left; 
		}
	</style>
</head>
<body>
	<div class="container showgrid">
		<h1>Page de démonstration</h1>
		<h2>Cette démonstration de 940.CSS Version Fluide est basée sur l'exemple proposé par Blueprint.</h2>
		<div class="span-8 first">
			<h3>Here's a box</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
		</div>
		<div class="span-8">
			<h3>And another box</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat laboris nisi ut aliquip.</p>
		</div>
		<div class="span-8">
			<h3>This box is aligned with the sidebar</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
		</div>
		<hr>
		<div class="span-15 prepend-1 first">
			<p><img src="img/test.jpg" class="pull-1" alt="test">Lorem ipsum dolor sit amet, <em>consectetuer adipiscing elit</em>. Nunc congue ipsum vestibulum libero. Aenean vitae justo. Nam eget tellus. Etiam convallis, est eu lobortis mattis, lectus tellus tempus felis, a ultricies erat ipsum at metus.</p>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. <a href="#">Morbi et risus</a>. Aliquam nisl. Nulla facilisi. Cras accumsan vestibulum ante. Vestibulum sed tortor. Praesent <span class="caps">SMALL CAPS</span> tempus fringilla elit. Ut elit diam, sagittis in, nonummy in, gravida non, nunc. Ut orci. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Nam egestas, orci eu imperdiet malesuada, nisl purus fringilla odio, quis commodo est orci vitae justo. Aliquam placerat odio tincidunt nulla. Cras in libero. Aenean rutrum, magna non tristique posuere, erat odio eleifend nisl, non convallis est tortor blandit ligula. Nulla id augue.</p>
			<p>Nullam mattis, odio ut tempus facilisis, metus nisl facilisis metus, auctor consectetuer felis ligula nec mauris. Vestibulum odio erat, fermentum at, commodo vitae, ultrices et, urna. Mauris vulputate, mi pulvinar sagittis condimentum, sem nulla aliquam velit, sed imperdiet mi purus eu magna. Nulla varius metus ut eros. Aenean aliquet magna eget orci. Class aptent taciti sociosqu ad litora.</p>
			<p>Vivamus euismod. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse vel nibh ut turpis dictum sagittis. Aliquam vel velit a elit auctor sollicitudin. Nam vel dui vel neque lacinia pretium. Quisque nunc erat, venenatis id, volutpat ut, scelerisque sed, diam. Mauris ante. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec mattis. Morbi dignissim sollicitudin libero. Nulla lorem.</p>
			<blockquote>
				<p>Integer cursus ornare mauris. Praesent nisl arcu, imperdiet eu, ornare id, scelerisque ut, nunc. Praesent sagittis erat sed velit tempus imperdiet. Ut tristique, ante in interdum hendrerit, erat enim faucibus felis, quis rutrum mauris lorem quis sem. Vestibulum ligula nisi, mattis nec, posuere et, blandit eu, ligula. Nam suscipit placerat odio. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Pellentesque tortor libero, venenatis vitae, rhoncus eu, placerat ut, mi. Nulla nulla.</p>
			</blockquote>
			<p>Maecenas vel metus quis magna pharetra fermentum. <em>Integer sit amet tortor</em>. Maecenas porttitor, pede sed gravida auctor, nulla augue aliquet elit, at pretium urna orci ut metus. Aliquam in dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed aliquam, tellus id ornare posuere, quam nunc accumsan turpis, at convallis tellus orci et nisl. Phasellus congue neque a lorem.</p>
			<div class="span-16 first">
				<h3>This is a nested column</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
			</div>
			<div class="span-third">
				<h3>This is another nested column</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
			</div>
		</div>
		<div class="span-8">
			<h3>A Simple Sidebar</h3>
			<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Cras ornare mattis nunc. Mauris venenatis, pede sed aliquet vehicula, lectus tellus pulvinar neque, non cursus sem nisi vel augue.</p>
			<p>Mauris a lectus. Aliquam erat volutpat. Phasellus ultrices mi a sapien. Nunc rutrum egestas lorem. Duis ac sem sagittis elit tincidunt gravida. Mauris a lectus. Aliquam erat volutpat. Phasellus ultrices mi a sapien. Nunc rutrum egestas lorem. Duis ac sem sagittis elit tincidunt gravida.</p>
			<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Cras ornare mattis nunc. Mauris venenatis, pede sed aliquet vehicula, lectus tellus pulvinar neque, non cursus sem nisi vel augue.</p>
			<h5>Incremental leading</h5>
			<p>Vestibulum ante ipsum primis in faucibus orci luctus vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Cras ornare mattis nunc. Mauris venenatis, pede sed aliquet vehicula, lectus tellus pulvinar neque, non cursus sem nisi vel augue. sed aliquet vehicula, lectus tellus.</p>
			<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Cras ornare mattis nunc. Mauris venenatis, pede sed aliquet vehicula, lectus tellus pulvinar neque, non cursus sem nisi vel augue. sed aliquet vehicula, lectus tellus pulvinar neque, non cursus sem nisi vel augue. ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Cras ornare mattis nunc. Mauris venenatis, pede sed aliquet vehicula, lectus tellus pulvinar neque, non cursus sem nisi vel augue. sed aliquet vehicula, lectus tellus pulvinar neque, non cursus sem nisi vel augue.</p>
		</div>
		<h2 class="span-24">You may pick and choose amongst these and many more features, so be bold.</h2>
		<p class="span-24"><a href="http://validator.w3.org/check?uri=referer">HTML5</a></p>
	</div> <!--! end of #container -->
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
</body>
</html>