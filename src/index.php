<?php

$domain = "https://nurio.me/";
$web = isset($_GET['web']) ? $_GET['web'] : "main";

$title = "Home";
if($web == "mylines")$title = "My Lines";
if($web == "projects")$title = "Projects";
if($web == "aboutme")$title = "About Me";
if($web == "blog/blog")$title = "Blog";
if($web == "blog-list")$title = "Blog";
if($web == "contact")$title = "Contact";
if($web == "contact-send")$title = "Thank you";

$twitter['title'] = $title;
$twitter['description'] = "Nurio's personal website/portfolio.";
$twitter['banner'] = "https://i.imgur.com/sZoa4Ka.png";

#bodycontent
ob_start();
$include_return = include('pages/'.$web.'.php');
$pageSource = ob_get_contents();
ob_end_clean();

?>
<!DOCTYPE html>
<html>
	<head>

		<!-- General meta section -->
		<title><?php echo $title; ?> | xXNurioXx</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="xXNurioXx">
		<link rel="icon" href="<?php echo $domain; ?>assets/img/favicon.png">

		<!-- Twitter meta section -->
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:site" content="@nuriofernandez">
		<meta name="twitter:title" content="<?php echo $twitter['title']; ?>">
		<meta name="twitter:description" content="<?php echo $twitter['description']; ?>">
		<meta name="twitter:image" content="<?php echo $twitter['banner']; ?>">


		<!-- CSS section -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link href="<?php echo $domain; ?>assets/css/main.css" rel="stylesheet">

	</head>
	<body>
		<div class="web-body">

			<!-- BLOCK : NAVBAR -->
			<div class="blog-masthead">
				<div class="container">
					<nav class="nav blog-nav">
						<a class="nav-link<?php if($web == 'main')echo ' active'; ?>" href="<?php echo $domain; ?>">HOME</a>
						<a class="nav-link<?php if($web == 'projects')echo ' active'; ?>" href="<?php echo $domain; ?>projects">PROJECTS</a>
						<a class="nav-link<?php if($web == 'aboutme')echo ' active'; ?>" href="<?php echo $domain; ?>aboutme">ABOUT ME</a>
						<a class="nav-link<?php if($web == 'contact')echo ' active'; ?>" href="<?php echo $domain; ?>contact">CONTACT</a>
					</nav>
				</div>
			</div>

			<!-- BLOCK : SITE CONTENT -->
			<div id="content">
				<!-- START OF '<?php echo $title; ?>' SITE CONTENT -->
				<?php echo str_replace("\n", "\n\t\t\t\t", $pageSource) . "\n"; ?>
				<!-- END OF SITE CONTENT -->
			</div>

			<!-- BLOCK : FOOTER -->
			<footer class="blog-footer">
				<div class="container">
					<i>Starting from zero is the strength of innovation.</i>
					<div class="footer-link-area">
					
						<a alt="Twitter Profile" class="footer-link" href="https://twitter.com/nuriofernandez" target="_blank">
							<i class="fab fa-twitter" data-fa-transform="shrink-4" data-fa-mask="fas fa-square"></i>
						</a>
						
						<a alt="Instagram Profile" class="footer-link" href="https://www.instagram.com/nuriofernandez/" target="_blank">
							<i class="fab fa-instagram" data-fa-transform="shrink-4" data-fa-mask="fas fa-square"></i>
						</a>

						<a alt="Linkedin Profile" class="footer-link" href="https://www.linkedin.com/in/nurio-fernandez-muniz" target="_blank">
							<i class="fab fa-linkedin" data-fa-transform="shrink-4" data-fa-mask="fas fa-square"></i>
						</a>

						<a alt="Github Profile" class="footer-link" href="https://github.com/xxnurioxx" target="_blank">
							<i class="fab fa-github" data-fa-transform="shrink-4" data-fa-mask="fas fa-square"></i>
						</a>

						<a alt="MyAnimeList Profile" class="footer-link" href="http://myanimelist.net/profile/xXNurioXx" target="_blank">
							<img class="img-footer-link" src="<?php echo $domain; ?>assets/img/dot.png" width="43.75px" height="43.75px"/>
						</a>

						<a alt="Youtube Channel" class="footer-link" href="https://www.youtube.com/channel/UCc5aie-j2C4iAcOQgkSHLEQ" target="_blank">
							<i class="fab fa-youtube" data-fa-transform="shrink-4" data-fa-mask="fas fa-square"></i>
						</a>

						<a alt="Steam Profile" class="footer-link" href="https://steamcommunity.com/id/xxnurioxx" target="_blank">
							<i class="fab fa-steam" data-fa-transform="shrink-4" data-fa-mask="fas fa-square"></i>
						</a>
						
					</div>
				</div>
			</footer>
			
		</div>

		<!-- ============================== JAVASCRIPT SECTION ============================== -->
		<!--   Placing JavaScript files at the botom of the page will do pages load faster.   -->
		<!-- ================================================================================ -->

	    <!-- Bootstrap core JavaScript -->
	   	<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
	    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	    <script src="https://maxcdn.bootstrapcdn.com/js/ie10-viewport-bug-workaround.js"></script>

		<!-- CUSTOM SITE JS -->
	    <script async type="text/javascript" src="<?php echo $domain; ?>assets/js/dango.js"></script>
	    <script async type="text/javascript" src="<?php echo $domain; ?>assets/js/post-load-optimizer.js"></script>
	    <script async type="text/javascript" src="<?php echo $domain; ?>assets/js/dynamic-page.js"></script>
		
		<!-- Google Analitys Include !-->
		<script async src="https://www.google-analytics.com/analytics.js"></script><script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-89267571-1', 'auto');
			ga('send', 'pageview');
		</script>

	</body>
</html>
