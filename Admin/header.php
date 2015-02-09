<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>Admin Panel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="admin panel">
	<meta name="author" content="developer">

	<!-- The styles -->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<link id="bs-css" href="css/bootstrap-cerulean.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/charisma-app.css" rel="stylesheet">
	<link href="css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='css/fullcalendar.css' rel='stylesheet'>
	<link href='css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='css/chosen.css' rel='stylesheet'>
	<link href='css/uniform.default.css' rel='stylesheet'>
	<link href='css/colorbox.css' rel='stylesheet'>
	<link href='css/jquery.cleditor.css' rel='stylesheet'>
	<link href='css/jquery.noty.css' rel='stylesheet'>
	<link href='css/noty_theme_default.css' rel='stylesheet'>
	<link href='css/elfinder.min.css' rel='stylesheet'>
	<link href='css/elfinder.theme.css' rel='stylesheet'>
	<link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='css/opa-icons.css' rel='stylesheet'>
	<link href='css/uploadify.css' rel='stylesheet'>

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<link rel="shortcut icon" href="img/favicon.ico">
		
</head>

<body>
	<?php if(!isset($no_visible_elements) || !$no_visible_elements)	{ ?>
	<!-- topbar starts -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"> <img alt="Admin Panel" src="img/logo20.png" /> <span>Admin</span></a>
				
				<!-- theme selector starts -->
<!--				<div class="btn-group pull-right theme-container" >-->
<!--					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">-->
<!--						<i class="icon-tint"></i><span class="hidden-phone"> Change Theme / Skin</span>-->
<!--						<span class="caret"></span>-->
<!--					</a>-->
<!--					<ul class="dropdown-menu" id="themes">-->
<!--						<li><a data-value="classic" href="#"><i class="icon-blank"></i> Classic</a></li>-->
<!--						<li><a data-value="cerulean" href="#"><i class="icon-blank"></i> Cerulean</a></li>-->
<!--						<li><a data-value="cyborg" href="#"><i class="icon-blank"></i> Cyborg</a></li>-->
<!--						<li><a data-value="redy" href="#"><i class="icon-blank"></i> Redy</a></li>-->
<!--						<li><a data-value="journal" href="#"><i class="icon-blank"></i> Journal</a></li>-->
<!--						<li><a data-value="simplex" href="#"><i class="icon-blank"></i> Simplex</a></li>-->
<!--						<li><a data-value="slate" href="#"><i class="icon-blank"></i> Slate</a></li>-->
<!--						<li><a data-value="spacelab" href="#"><i class="icon-blank"></i> Spacelab</a></li>-->
<!--						<li><a data-value="united" href="#"><i class="icon-blank"></i> United</a></li>-->
<!--					</ul>-->
<!--				</div>-->
				<!-- theme selector ends -->
				
				<!-- user dropdown starts -->
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-user"></i><span class="hidden-phone"> admin</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">Profile</a></li>
						<li class="divider"></li>
						<li><a href="logout.php">Logout</a></li>
					</ul>
				</div>
				<!-- user dropdown ends -->
				
<!--				<div class="top-nav nav-collapse">-->
<!--					<ul class="nav">-->
<!--						<li><a href="#">Visit Site</a></li>-->
<!--						<li>-->
<!--							<form class="navbar-search pull-left">-->
<!--								<input placeholder="Search" class="search-query span2" name="query" type="text">-->
<!--							</form>-->
<!--						</li>-->
<!--					</ul>-->
<!--				</div>--><!--/.nav-collapse -->
			</div>
		</div>
	</div>
	<!-- topbar ends -->
	<?php } ?>
	<div class="container-fluid">
		<div class="row-fluid">
		<?php if(!isset($no_visible_elements) || !$no_visible_elements) { ?>
		
			<!-- left menu starts -->
			<div class="span2 main-menu-span">
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li class="nav-header hidden-tablet">Main</li>
						<li><a class="ajax-link" href="rt.php"><i class="icon-home"></i><span class="hidden-tablet" > Add Tweet</span></a></li>
 						<li><a class="ajax-link" href="deleterts.php"><i class="icon-align-justify"></i><span class="hidden-tablet"> Deleted Rts</span></a></li>
						<li><a class="ajax-link" href="rtcleaner.php"><i class="icon-align-justify"></i><span class="hidden-tablet"> Tokens</span></a></li>
                        <li><a class="ajax-link" href="tweet.php"><i class="icon-align-justify"></i><span class="hidden-tablet"> Tweets</span></a></li>
<!--                        <li><a class="ajax-link" href="adminalbum.php"><i class="icon-align-justify"></i><span class="hidden-tablet"> Create New Album</span></a></li>-->
<!--                        <li><a class="ajax-link" href="albums.php"><i class="icon-align-justify"></i><span class="hidden-tablet"> Albums</span></a></li>-->
<!--                        <li><a class="ajax-link" href="articles.php"><i class="icon-align-justify"></i><span class="hidden-tablet">Create New Article</span></a></li>-->
<!--                        <li><a class="ajax-link" href="admingallery.php"><i class="icon-align-justify"></i><span class="hidden-tablet">Upload Photos in Gallery</span></a></li>-->
<!--                        <li><a class="ajax-link" href="galleryphotos.php"><i class="icon-align-justify"></i><span class="hidden-tablet">Uploaded Gallery Photos</span></a></li>-->
<!--                        <li><a class="ajax-link" href="adminnews.php"><i class="icon-align-justify"></i><span class="hidden-tablet"> Upload News</span></a></li>-->
<!--                        <li><a class="ajax-link" href="news.php"><i class="icon-align-justify"></i><span class="hidden-tablet">Uploaded News</span></a></li>-->
<!--                        <li><a class="ajax-link" href="adminspecialnews.php"><i class="icon-align-justify"></i><span class="hidden-tablet">Upload Special News</span></a></li>-->
<!--                        <li><a class="ajax-link" href="specialnews.php"><i class="icon-align-justify"></i><span class="hidden-tablet">Uploaded Special News</span></a></li>-->
<!--                        <li><a class="ajax-link" href="newevent.php"><i class="icon-align-justify"></i><span class="hidden-tablet">Upload Event Details</span></a></li>-->
<!--                        <li><a class="ajax-link" href="events.php"><i class="icon-align-justify"></i><span class="hidden-tablet">Uploaded Events</span></a></li>-->
<!--                        <li><a class="ajax-link" href="upcomingmovie.php"><i class="icon-align-justify"></i><span class="hidden-tablet">Upload Movie Details</span></a></li>-->
<!--                        <li><a class="ajax-link" href="movies.php"><i class="icon-align-justify"></i><span class="hidden-tablet">Uploaded Movie</span></a></li>-->
<!--                        <li><a class="ajax-link" href="adminpagemeta.php"><i class="icon-align-justify"></i><span class="hidden-tablet">Upload New page</span></a></li>-->
<!--                        <li><a class="ajax-link" href="pages.php"><i class="icon-align-justify"></i><span class="hidden-tablet">Uploaded Page</span></a></li>-->
                        <li><a href="logout.php"><i class="icon-lock"></i><span class="hidden-tablet"> Logout</span></a></li>
					</ul>
<!--					<label id="for-is-ajax" class="hidden-tablet" for="is-ajax"><input id="is-ajax" type="checkbox"> Ajax on menu</label>-->
				</div><!--/.well -->
			</div><!--/span-->
			<!-- left menu ends -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<div id="content" class="span10">
			<!-- content starts -->
			<?php } ?>
