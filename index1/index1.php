<?php session_start();
include('../test.php')?>
<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html style="" class=" js no-touch"><!--<![endif]--><head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>RT Cleaner by Twoolbox - Delete all your Retweets instantly!</title>
    <meta name="description" content="RT Cleaner by Twoolbox lets you delete all your Retweets instantly.">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="plugins.css">
    <link rel="stylesheet" href="main.css">
    <link id="theme-link" rel="stylesheet" href="leaf.css">
    <link rel="stylesheet" href="themes.css">
    <script src="analytics.js" async=""></script><script src="modernizr-respond.js"></script>
    <link rel="stylesheet" href="twoolbox.css">
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-59813103-1', 'auto');
        ga('send', 'pageview');
    </script>
    <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>
<body class="header-fixed-top">
<div id="page-container" class="full-width">      <header class="navbar navbar-inverse navbar-fixed-top">
        <div class="row">
            <div class="col-sm-4 hidden-xs">
                <ul class="navbar-nav-custom pull-left">
                    <li class="visible-md visible-lg">
                        <a href="javascript:void(0)" id="toggle-side-content">
<!--                            <i class="fa fa-bars"></i>-->
                            <img src="img/menu.JPG">
                        </a>
                    </li>
                    <li class="divider-vertical"></li>
                </ul>
            </div>
            <div class="col-sm-4 col-xs-12 text-center">
                <a href="http://twoolbox.com/?hl=en" class="navbar-brand">
<!--                    <i class="gi gi-settings"></i>-->
                   <i><img src="img/logo1.JPG">
                    Twoolbox</i>
                </a>
                <div id="loading" class="display-none"><i class="fa fa-spinner fa-spin"></i></div>
            </div>
            <div id="header-nav-section" class="col-sm-4 col-xs-12 clearfix">
                <ul class="navbar-nav-custom pull-right">
                    <li class="divider-vertical"></li>
                    <li class="dropdown dropdown-notifications">
                        <a id="lang-switcher" href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                            <img src="en.png" alt="English">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="lang-current">
                                <a href="http://rtcleaner.com/?hl=en">
                                    <img src="en.png" alt="English" class="flag-option pull-right">
                                    English                    </a>
                            </li>
                            <li>
                                <a href="http://rtcleaner.com/?hl=fr">
                                    <img src="fr.png" alt="French" class="flag-option pull-right">
                                    French                    </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav-custom pull-left visible-xs visible-sm" id="mobile-nav">
                    <li>
                        <a href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-main-collapse">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                    <li class="divider-vertical"></li>
                </ul>
            </div>
        </div>
    </header><aside id="page-sidebar" class="collapse navbar-collapse navbar-main-collapse sticky">
        <div style="position: relative; overflow: hidden; width: auto; height: 591px;" class="slimScrollDiv"><div style="height: 591px; overflow: hidden; width: auto;" class="side-scrollable">
                <div class="sidebar-tabs-con">
                    <div class="tab-content">
                        <div class="tab-pane active" id="side-tab-menu">
                            <nav id="primary-nav">
                                <ul>
                              <!--      <li>
                                        <a href="http://twoolbox.com/?hl=en"><i class="gi gi-home"></i>Home</a>
                                    </li>
                                    <li>
                                        <a href="http://deletealltweets.com/?hl=en"><i class="gi gi-delete"></i>Delete All Tweets</a>
                                    </li>
                                    <li>
                                        <a href="http://deletefollowing.com/?hl=en"><i class="gi gi-user_remove"></i>Delete Following</a>
                                    </li>
                                    <li>
                                        <a href="http://favcleaner.com/?hl=en"><i class="gi gi-star"></i>Fav Cleaner</a>
                                    </li>-->
                                    <li>
                                        <a href="http://rtcleaner.com/?hl=en" class=" active"><img src="img/rtcleaner.JPG">RT Cleaner</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div><div style="background: none repeat scroll 0% 0% rgb(255, 255, 255); width: 3px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 591px;" class="slimScrollBar"></div><div style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: none repeat scroll 0% 0% rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;" class="slimScrollRail"></div></div>
    </aside><div id="pre-page-content">
        <h1>
<!--            <i class="gi gi-retweet themed-color"></i>-->
            <i><img src="img/updnarrow.JPG"></i>
            RT Cleaner <small>by Twoolbox</small><br>
            <small>
                Delete all your Retweets instantly!  	</small>
        </h1>
    </div>
    <div style="min-height: 410px;" id="page-content">
        <ul class="breadcrumb breadcrumb-top">
            <li>
                <a href="http://twoolbox.com/?hl=en"><img src="img/home.JPG"></i></a>
            </li>
            <li><a href="http://rtcleaner.com/?hl=en">RT Cleaner</a></li>
        </ul>
        <div class="block block-themed">
            <div class="block-title">
                <h2>
                    <img src="img/question.JPG"></i>
                    How RT Cleaner <small>by Twoolbox</small> works			</h2>
            </div>
            <div class="block-content">
                <div class="block-section">
                    <strong>RT Cleaner</strong> lets you delete all your Retweets instantly. Not only, it will <strong>undo all your existing Rewteets</strong> but it will also <strong>delete all your future Retweets after 10 minutes</strong> of life. It helps you keeping a clean account. 		  </div>
                <div class="block-section">
                    RT Cleaner is <strong>fully free and automatized</strong>, you just need to sign in with Twitter by clicking this button:		  </div>
                <div class="block-section">
                    <a href="../redirect.php?hl=en" class="btn btn-lg btn-info"><img src="img/twtimg.JPG" ></i> Sign in with Twitter</a>
                </div>
            </div>
        </div>
        <div class="block block-themed">
            <div class="block-title">
                <h2>
                    <img src="img/eye.JPG"></i>
                    Discover our other tools			</h2>
            </div>
        </div>
        <div class="block block-tiles block-tiles-animated clearfix top-and-bottom">
            <a href="http://deletealltweets.com/?hl=en" class="tile tile-width-2x tile-themed themed-background-amethyst">

      <span class="tile-info tile-info-top">
        <span class="pull-left">Delete All Tweets</span>

      </span><br>
                <img src="img/remv.JPG">
      <span class="tile-info tile-info-double">
<!--        <span class="pull-right"><strong>2M+</strong><br>Tweets Deleted</span>-->
          <span class="pull-right"><strong><?php echo $_SESSION['delete'] ?></strong><br>Tweets Deleted</span>
      </span>
            </a>
            <a href="http://deletefollowing.com/?hl=en" class="tile tile-width-2x tile-themed themed-background-cherry">

      <span class="tile-info tile-info-top">
        <span class="pull-left">Delete Following</span>
      </span><br>
                <img src="img/man1.JPG">
      <span class="tile-info tile-info-double">
        <span class="pull-right"><strong>15M+</strong><br>Users Unfollowed</span>
      </span>
            </a>
            <a href="http://favcleaner.com/?hl=en" class="tile tile-width-2x tile-themed themed-background-sun">

      <span class="tile-info tile-info-top">
        <span class="pull-left">Fav Cleaner</span>
      </span><br>
                <img src="img/star.JPG">
      <span class="tile-info tile-info-double">
        <span class="pull-right"><strong>1M+</strong><br>Favorites Undone</span>
      </span>
            </a>
            <a style="display: none;" href="http://rtcleaner.com/?hl=en" class="tile tile-width-2x tile-themed themed-background-leaf">
                <i class="gi gi-retweet"></i>
      <span class="tile-info tile-info-top">
        <span class="pull-left">RT Cleaner</span>
      </span>
      <span class="tile-info tile-info-double">
        <span class="pull-right"><strong>150M+</strong><br>RT Undone</span>
      </span>
            </a>
        </div>
        <div class="block block-themed themed-default">
            <div class="block-title">
                <h2>
                    <img src="img/toolimg.JPG"></i>
                    Twoolbox			</h2>
            </div>
            <div class="block-content">
                <div class="block-section">
                    RT Cleaner is <strong>part of Twoolbox</strong>, the whole package! 		  </div>
                <div class="block-section">
                    <a href="http://twoolbox.com/?hl=en" class="btn btn-lg themed-background-default" style="color: #fff;">
<!--                        <i class="gi-gi-settings"></i>-->
                       <img src="img/tool1.JPG">
                        Twoolbox	      </a>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div>
            © 8/26/2014 - 2/21/2015      <strong><a href="http://twoolbox.com/?hl=en">Twoolbox</a></strong>
        </div>
    </footer>
</div><a style="display: none;" href="#" id="to-top"><i class="fa fa-chevron-up"></i></a>
<!--[if lte IE 8]><script src="js/helpers/excanvas.min.js"></script><![endif]-->
<script src="jquery.js"></script>
<script>!window.jQuery && document.write(decodeURI('%3Cscript src="js/vendor/jquery-1.11.1.min.js"%3E%3C/script%3E'));</script>
<script src="bootstrap.js"></script>
<script src="plugins.js"></script>
<script src="main.js"></script>
</body></html>