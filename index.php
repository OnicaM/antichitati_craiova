<?php require_once 'php/config.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
	<script src="//code.jquery.com/jquery-2.2.2.min.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<!--=============================================-->
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,600,500,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,300italic,400italic'rel='stylesheet' type='text/css'>
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<!--=============================================-->
        <link href="slick/slick.css" rel="stylesheet" type="text/css"/>
        <link href="slick/slick-theme.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/global_js.js" type="text/javascript"></script>
	<script src="js/js.js" type="text/javascript"></script>
        <title>Brocante Craiova</title>
    </head>
    <body style="background-color: #FFF5D1; font-family: georgia;">
        <div class="wrapper">
            <div class="top-bar">
                 
            </div>
                <div class="left">
                    <ul class="nav nav-pills nav-stacked navj">
                        <li><a href="index.php" class="logo"><h1><i>Antichitati <br>Brocante Craiova</i></h1></a></li>
                        <li class="selected"><a href="index.php">Home</a></li>
                        <li><a href="pages/despre-noi.php">Despre noi</a></li>
                        <li><a href="pages/idei-cadouri.php">Idei Cadouri</a></li>
                        <li><a href="pages/cadouri-sezon.php">Cadouri Sezon</a></li>
                        <li class="categorii">Categorii</li>
                        <li><a href="pages/mobila.php">Mobila</a></li>
                        <li><a href="pages/tablouri.php">Tablouri</a></li>
                        <li><a href="pages/goblenuri.php">Goblenuri</a></li>
                        <li><a href="pages/statuete.php">Statuete</a></li>
                        <li><a href="pages/masti-sculptate-lemn.php">Masti sculptate lemn</a></li>
                        <li><a href="pages/obiecte-portelan.php">Obiecte portelan</a></li>
                        <li><a href="pages/obiecte-decorative.php">Obiecte decorative</a></li>
                        <li><a href="pages/contact.php">Contact</a></li>
                        <li style="padding:10px;">
                            <form method="post" class="form-inline" action="pages/search.php">
                                <div class="form-group">
                                <input type="text" name="search" class="form-control" placeholder="Cauta...">
                                  <input type="submit" name="search-p" value="Cauta" class="btn btn-default">
                                </div>
                            </form>
                        </li>
                   </ul>
                    
                </div><!--end col-->
            <div class=" navbar-inverse nav-mob ">
                <div class="container-content clearfix">
                    <a href="index.php" class="logo"><h3 style="text-align: center;">Antichitati <br> Brocante Craiova</h3></a>
                    <i class="fa fa-bars" aria-hidden="true" id="button"></i>
                </div>
                <ul class="ul-toggle navj">
                       <li style="padding:10px;">
                           <form method="post" class="form-inline" action="pages/search.php">
                                <div class="form-group">
                                <input type="text" name="search" class="form-control" placeholder="Cauta...">
                                <input type="submit" name="search-p" value="Cauta" class="btn btn-default">
                               
                                </div>
                            </form>
                        </li>
                        <li class="selected"><a href="index.php">Home</a></li>
                        <li><a href="pages/despre-noi.php">Despre noi</a></li>
                        <li><a href="pages/idei-cadouri.php">Idei Cadouri</a></li>
                        <li><a href="pages/cadouri-sezon.php">Cadouri Sezon</a></li>
                        <li class="categorii">Categorii</li>
                        <li><a href="pages/mobila.php">Mobila</a></li>
                        <li><a href="pages/tablouri.php">Tablouri</a></li>
                        <li><a href="pages/goblenuri.php">Goblenuri</a></li>
                        <li><a href="pages/statuete.php">Statuete</a></li>
                        <li><a href="pages/masti-sculptate-lemn.php">Masti sculptate lemn</a></li>
                        <li><a href="pages/obiecte-portelan.php">Obiecte portelan</a></li>
                        <li><a href="pages/obiecte-decorative.php">Obiecte decorative</a></li>
                        <li><a href="pages/obiecte-decorative.php">Contact</a></li>
                        
                   </ul>
                    
            </div><!--end navbar inverse-->
            
            <div class="home-col clearfix">

            </div><!--end cearfix-->
            </div><!--end home-col-->
            
            <div class="home-content">
                <div class="container-content" style="padding-bottom: 60px;">
                <div class="intro">
                    <h2>Fiecare obiect are o poveste unica, poate inca nestiuta.</h2>
                    <img src="images/separator.png" style="margin-top: 20px; ">
                </div><!--end intro-->
                
                <div class="clearfix">
                    <div class="left-box col-xs-12 col-sm-5" >
                        <h3>DESPRE NOI</h3>
                        <p>
                            Totul a inceput in Franta acum 20 de ani...pasiunea pentru arta ne-a purtat prin nenumarate
                            locuri  fascinante din care am colectionat numeroase  obiecte deosebite si unice 
                            de-a lungul timpului.
                        </p>
                        <img src="images/clock_resize.jpg" class="center-block" style="width: 80%;">
                    </div><!--end leftbox-->
                    
                    <div class="right-box col-xs-12 col-sm-7">
                        <div class="bg-slide">
                            <h3>NOUTATI</h3>
                        <div class="slide-news">
                            <?php
                                    $sql = "SELECT * FROM `produse` ORDER BY `id` DESC LIMIT 5 ";
                                    $result = mysqli_query($conn, $sql);
            
                                    if(mysqli_num_rows($result) > 0){
                                        //output data of each row
                                        while($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <div class="clearfix item-news">
                                    <img src="uploads/<?php echo $row['imagine']; ?>">
                                    <p><?php echo $row['descriere']; ?></p>
                                </div>
                                <?php
                                        }
                                    }else {
                                        echo "Momentan nu este niciun produs nou";
                                    }
                                ?>
                        </div><!--end slide-news-->
                        </div>
                        <a href="pages/noutati.php">Vezi toate noutatile aici!</a>
                    </div><!--end right-box-->
                </div><!--end clearfix-->
                
                
                </div><!--end container-fluid-->
                <div class="image-section clearfix">
                    <div class="container-content">
                        <h1 style=" margin-bottom: 50px;">Cum ne puteti gasi?</h1>
                        <div class="col-md-2 col-sm-3">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="col-md-4 col-sm-3">
                            <h3>Adresa:</h3>
                            <p><b>Str.Calea Bucuresti<br> Nr.34 A8 b.parter <br>(Zona Rotonda pe gang)</b></p>
                        </div>
                        <div class="col-md-2 col-sm-3">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                        </div>
                        <div class="col-md-4 col-sm-3">
                        <h3>Program:</h3>
                        <p><b>Luni-Sambata <br>10:00 - 13:00 <br> 17:00 - 20:00</b></p>
                        <p><b>Duminica <br>Inchis</b></p>
                        </div>
                    </div>
                </div><!--end images-section-->
            </div><!--end home-content-->
            <div class="home-content">
            <div class="contact-us clearfix">
                <div class="col-sm-6 col-sm-push-3">
                    <div class="contact-box ">
                        <h1>0766457451</h1>
                        <a href="pages/contact.php" class="btn btn-warning btn-lg">Contactati-ne aici!</a>
                        <a href="https://www.facebook.com/Brocante-Craiova-684762934994853/?fref=ts" target="_blank">
                            <i class="fa fa-facebook-square" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div><!--end contact-us-->
            </div>
        </div><!--end wrapper-->
        <footer>
            <div class="container-fluid">
                <p>Brocante Craiova 2016</p>
                <p style="font-size: 13px;">Website dezvoltat de <a href="mailto:mac.oana92@yahoo.ro?subject=The%20subject%20of%20the%20mail">OanaM</a></p>
            </div>
        </footer>
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="slick/slick.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function(){
              $('.slide-news').slick({
                  autoplay:true,
                autoplaySpeed:1000,
                arrows:true,
                vertical:true,
                slidesToShow: 4
              });
            });
       </script>
    </body>
</html>
