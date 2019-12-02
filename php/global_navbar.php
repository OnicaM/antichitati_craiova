<?php
require_once 'config.php';
require_once 'functions.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="../css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>
	<script src="//code.jquery.com/jquery-2.2.2.min.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<!--=============================================-->
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,600,500,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,300italic,400italic'rel='stylesheet' type='text/css'>
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<!--=============================================-->
        <link href="../slick/slick.css" rel="stylesheet" type="text/css"/>
        <link href="../slick/slick-theme.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        
        <!--=====================Fancybox========================-->
        <link href="../fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
        <script src="../fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
        <link href="../fancybox/helpers/jquery.fancybox-buttons.css" rel="stylesheet" type="text/css"/>
        <script src="../fancybox/helpers/jquery.fancybox-buttons.js" type="text/javascript"></script>
        <script src="../fancybox/helpers/jquery.fancybox-media.js" type="text/javascript"></script>
        <link href="../fancybox/helpers/jquery.fancybox-thumbs.css" rel="stylesheet" type="text/css"/>
        <script src="../fancybox/helpers/jquery.fancybox-thumbs.js" type="text/javascript"></script>
        <!--======================Fancybox=======================-->
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../js/global_js.js" type="text/javascript"></script>
        <title>Antichitati - Brocante Craiova</title>
    </head>
    <body style="background-color: #FFF5D1; font-family: georgia;">
        <div class="wrapper">
                <div class="left">
                    <ul class="nav nav-pills nav-stacked navj">
                        <li><a href="../index.php" class="logo"><h1><i>Antichitati <br>Brocante Craiova</i></h1></a></li>
                        <li class="selected"><a href="../index.php">Home</a></li>
                        <li><a href="../pages/despre-noi.php">Despre noi</a></li>
                        <li><a href="../pages/idei-cadouri.php">Idei Cadouri</a></li>
                        <li><a href="../pages/cadouri-sezon.php">Cadouri Sezon</a></li>
                        <li class="categorii">Categorii</li>
                        <li><a href="../pages/mobila.php">Mobila</a></li>
                        <li><a href="../pages/tablouri.php">Tablouri</a></li>
                        <li><a href="../pages/goblenuri.php">Goblenuri</a></li>
                        <li><a href="../pages/statuete.php">Statuete</a></li>
                        <li><a href="../pages/masti-sculptate-lemn.php">Masti sculptate lemn</a></li>
                        <li><a href="../pages/obiecte-portelan.php">Obiecte portelan</a></li>
                        <li><a href="../pages/obiecte-decorative.php">Obiecte decorative</a></li>
                        <li><a href="../pages/contact.php">Contact</a></li>
                        <li style="padding:10px;">
                           <form method="post" class="form-inline" action="../pages/search.php">
                                <div class="form-group">
                                <input type="text" name="search" class="form-control" placeholder="Cauta...">
                                  <input type="submit" name="search-p" value="Cauta" class="btn btn-default">
                                </div>
                            </form>
                        </li>
                   </ul>
                </div><!--end left-->
                 <div class=" navbar-inverse nav-mob ">
                <div class="container-content clearfix">
                    <a href="../index.php" class="logo"><h3 style="text-align: center;">Antichitati <br> Brocante Craiova</h3></a>
                    <i class="fa fa-bars" aria-hidden="true" id="button"></i>
                </div>
                <ul class="ul-toggle navj">
                       <li style="padding:10px;">
                            <form method="post" class="form-inline" action="../pages/search.php">
                                <div class="form-group">
                                <input type="text" name="search" class="form-control" placeholder="Cauta...">
                                  <input type="submit" name="search-p" value="Cauta" class="btn btn-default">
                                </div>
                            </form>
                        </li>
                        <li class="selected"><a href="../index.php">Home</a></li>
                        <li><a href="../pages/despre-noi.php">Despre noi</a></li>
                        <li><a href="../pages/idei-cadouri.php">Idei Cadouri</a></li>
                        <li><a href="../pages/cadouri-sezon.php">Cadouri Sezon</a></li>
                        <li class="categorii">Categorii</li>
                        <li><a href="../pages/mobila.php">Mobila</a></li>
                        <li><a href="../pages/tablouri.php">Tablouri</a></li>
                        <li><a href="../pages/goblenuri.php">Goblenuri</a></li>
                        <li><a href="../pages/statuete.php">Statuete</a></li>
                        <li><a href="../pages/masti-sculptate-lemn.php">Masti sculptate lemn</a></li>
                        <li><a href="../pages/obiecte-portelan.php">Obiecte portelan</a></li>
                        <li><a href="../pages/obiecte-decorative.php">Obiecte decorative</a></li>
                        <li><a href="../pages/contact.php">Contact</a></li>
                        
                   </ul>
                    
            </div><!--end navbar inverse-->

