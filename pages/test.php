<?php
require_once '../php/config.php';
session_start();


$categorie = $descriere=$mesaj=$text= "";
$msgErrorsCateg=$msgErrorsDesc=$msgErrorsProd="";    
    $msgErrors = array();
    $target_dir = $target_file ="";
     if( isset($_POST['adaugare']) ){
            $nume_produs = isset($_POST['nume_produs']) ? trim($_POST['nume_produs']):false;      
//            $target_dir = "../uploads/";
//            $imgname = basename($_FILES["fileToUpload"]["name"]);
//            $target_file = $target_dir . $imgname;
//            $uploadOk = 1;
//            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
//            $img='<img src="uploads/Smiley-Face-7.jpg">';
//           // Check if $uploadOk is set to 0 by an error
//              
//                 // Check file size
//                if ($_FILES["fileToUpload"]["size"] > 500000) {
//                    echo "Sorry, your file is too large.";
//                    $uploadOk = 0;
//                } 
//              if($uploadOk==0){
//                   $msgErrors[] =  "Sorry, your file was not uploaded. ";
//              }else{
//                  if( move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
//                       $mesaj .=  "<p style='color:green; padding: 10px; border:1px solid green; background-color:greenyellow;'>Produsul " . $nume_produs. " a fost adaugat.</p> ";
//                  }else{
//                      //$msgErrors[] =  "Sorry , there was an error uploading your file. ";
//                  }
//              }
            $path = "../uploads/";

            $img = $_FILES['fileToUpload']['tmp_name'];
            $dst = $path . $_FILES['fileToUpload']['name'];

            if (($img_info = getimagesize($img)) === FALSE)
              die("Image not found or not an image");

            $width = $img_info[0];
            $height = $img_info[1];

            switch ($img_info[2]) {
              case IMAGETYPE_GIF  : $src = imagecreatefromgif($img);  break;
              case IMAGETYPE_JPEG : $src = imagecreatefromjpeg($img); break;
              case IMAGETYPE_PNG  : $src = imagecreatefrompng($img);  break;
              default : die("Unknown filetype");
            }

            $tmp = imagecreatetruecolor($width, $height);
            imagecopyresampled($tmp, $src, 0, 0, 0, 0, $width, $height, $width, $height);
            imagejpeg($tmp, $dst.".jpg");
              
     
        $categorie = isset($_POST['categorie']) ? trim($_POST['categorie']) : false;
        $descriere = isset($_POST['descriere']) ? trim($_POST['descriere']):false;
        $nume_produs = isset($_POST['nume_produs']) ? trim($_POST['nume_produs']):false;

       
        
        if ( $categorie === 'select' ){
            $msgErrorsCateg = 'Selectati categoria din care face parte produsul';
        }
       
        if(strlen($descriere)==""){
            $msgErrorsDesc='Nu a fost introdus niciun comentariu';
        }
        if(empty($nume_produs)){
            $msgErrorsProd='Trebuie specificat numele produsului';
        }
       
         /*...*/         
         
         if( empty($msgErrorsCateg) && empty($msgErrorsDesc) && empty($msgErrorsProd) ) {

            $sql= "INSERT INTO `produse` (`nume_produs`,`imagine`,`categorie`, `descriere`)
                    VALUES ( '$nume_produs','$name','$categorie','$descriere' )";

                if (mysqli_query($conn, $sql)) {
                    $mesaj .=  "<p style='color:green; padding: 10px; border:1px solid green; background-color:greenyellow;'>New record created successfully </p><br>";                    
                    $categorie = $descriere=$imgname=$nume_produs= ""; 
            } else {
                $mesaj=  "Error: " . $sql . "<br>" . mysqli_error($conn);
            }                     
                         
         } 
                            
     }       
         
            
       if( isset($_GET['id']) && $_GET['id'] != 0){
           $delete = "DELETE FROM `produse` WHERE `id`={$_GET['id']}";
           if(mysqli_query($conn,$delete)){
               $mesaj = "<p style='color:green; padding: 10px; border:1px solid green; background-color:greenyellow;'>Produsul a fost sters cu succes</p>";
           }else{
               echo "Error deleting record : " . mysqli_error($conn);
           }
       }
//
//       var_dump($target_dir);
//        var_dump($target_file);
       if(isset($_GET['logout']) && $_GET['logout']=true){
           session_destroy();
        header('Location: login.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
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
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script src="../js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../js/js.js" type="text/javascript"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="../js/global_js.js" type="text/javascript"></script>
        <script>
        $( function() {
          $( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
          $( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
        } );
        </script>
  <style>
  .ui-tabs-vertical { width: 100%; }
  .ui-tabs-vertical .ui-tabs-nav { 
      padding: .2em .1em .2em .2em;
      float: left;
      width: 15%;
  }
  .ui-tabs-vertical .ui-tabs-nav li {
      clear: left; width: 100%;
      border-bottom-width: 1px !important;
      border-right-width: 0 !important;
      margin: 0 -1px .2em 0;
  }
  .ui-tabs-vertical .ui-tabs-nav li a {
      display:block; 
  }
  .ui-tabs-vertical .ui-tabs-nav li.ui-tabs-active {
      padding-bottom: 0; 
      padding-right: .1em;
      border-right-width: 1px; 
  }
  .ui-tabs-vertical .ui-tabs-panel {
      padding: 1em;
      float: right; 
      width: 85%;
      height: 500px;
      overflow-y: scroll;
      
  }
  </style>
        <title>Brocante Craiova</title>
    </head>
    <body style="background:#F9EADC; color:#583D33;">
<?php // if(isset($_SESSION['login_user'])){ ?>
        <?php if (isset($_SESSION['login_user'])){ ?>
        <div class="container-fluid admin">

              <div class="container-fluid">
             
             <div class="row">
                 <div class="col-xs-12 col-sm-5">
                     
                     <h3>Admin</h3>
                     
                     <form method="post" action="index.php"  enctype="multipart/form-data">
                      <div class="form-group">
                             <input type="file" class="form-control" name="fileToUpload" id="fileToUpload" >
                         </div>
                         <div class="form-group">
                             <label for="nume_produs">Nume produs</label>
                             <input type="text" name="nume_produs" placeholder="Numele produsului" class="form-control">
                         </div>
                         <p style="color:red; font-weight: bold;"><?php echo $msgErrorsProd; ?></p>
                        <div class="form-group">
                          <label for="web">Selectati categoria:</label>
                          <select class="form-control" id="gender" name="categorie" >
                            <option <?php echo $categorie =="" ?'selected':false; ?>>select</option>
                            <option value="mobila" <?php echo $categorie =='mobila' ?'selected':false; ?> >Mobila</option>
                            <option value="tablouri" <?php echo $categorie =='tablouri' ?'selected':false; ?>>Tablouri</option>
                            <option value="goblenuri" <?php echo $categorie =='goblenuri' ?'selected':false; ?>>Goblenuri</option>
                            <option value="statuete" <?php echo $categorie =='statuete' ?'selected':false; ?>>Statuete</option>
                            <option value="masti" <?php echo $categorie =='masti' ?'selected':false; ?> >Masti sculptate din lemn</option>
                            <option value="portelan" <?php echo $categorie =='portelan' ?'selected':false; ?>>Obiecte portelan</option>
                            <option value="decorativ" <?php echo $categorie =='decorativ' ?'selected':false; ?> >Obiecte decorative</option>
                            <option value="idei" <?php echo $categorie =='idei' ?'selected':false; ?>>Idei cadouri</option>
                            <option value="c_sezon" <?php echo $categorie =='c_sezon' ?'selected':false; ?>>Cadouri sezon</option>
                          </select>
                        </div>
                         <p style="color:red; font-weight: bold;"><?php echo $msgErrorsCateg; ?></p>
                         
                          <div class="form-group">
                            <label for="descriere">Descriere produs</label>
                            <textarea class="form-control" rows="3" id="coment" name="descriere" ><?php echo $descriere ?></textarea>
                          </div>
                         <p style="color:red; font-weight: bold;"><?php echo $msgErrorsDesc; ?></p>
                         
                         
                         <input type="submit" name="adaugare" value="Incarca produs" class="btn btn-default btn-lg">
                     </form>
                     
                    
                 </div><!--end col-->
                 <div class="col-sm-6">
                     <div style="text-align:right;">
                         <a href="../index.php"class="btn btn-warning btn-sm" target="_blank" style="margin:5px 2px;">Click pentru vizualizarea site-ului</a>
                         <a href='logout.php' class="btn btn-info btn-sm">Logout</a>
                     </div>
                     <div style="margin-top:55px">
                        <?php echo $mesaj; ?>
                     </div>
                 </div>
             </div> <!--end row-->
         
             <div class="row">
                 <div id="tabs">
                    <ul>
                      <li><a href="#tabs-1">Idei Cadouri</a></li>
                      <li><a href="#tabs-2">Cadouri Sezon</a></li>
                      <li><a href="#tabs-3">Mobila</a></li>
                      <li><a href="#tabs-4">Tablouri</a></li>
                      <li><a href="#tabs-5">Goblenuri</a></li>
                      <li><a href="#tabs-6">Statuete</a></li>
                      <li><a href="#tabs-7">Masti sculptate lemn</a></li>
                      <li><a href="#tabs-8">Obiecte portelan</a></li>
                      <li><a href="#tabs-9">Obiecte decorative</a></li>
                    </ul>
                    <div id="tabs-1">
                      <h2>Idei Cadouri</h2> 
                      <?php
                        $sql= "SELECT * FROM `produse` WHERE `categorie`='idei' ORDER BY `id` DESC ";
                        $result=mysqli_query($conn,$sql); 
                        $style= "padding:8px";
                        if($result) {
                            if(mysqli_num_rows($result)>0){
                                //output data of each row
                                echo '<div class="responsive-table"><table border=1 class="table";>
                                          <tr>
                                              <th style="padding:8px";> Imagine </th>
                                              <th style="padding:8px";> Nume produs </th>
                                              <th style="padding:8px";>descriere</th>
                                              <th>Sterge produsul</th>
                                          </tr>
                                          ';
                              while($row=mysqli_fetch_assoc($result)){
                                echo "<tr> "
                                ."</td> <td style='$style'> <img src='../uploads/" .$row["imagine"]."' style='width:100px;'>".
                                "</td> <td style='$style'>" .$row["nume_produs"].
                                "</td> <td style='$style'> ".$row["descriere"].
                                "</td> <td style='$style'><a href='index.php?id=". $row['id']."'> Sterge produsul</a></td></tr>";
//                                 var_dump($row);
                                }
                                echo "</table> </div>";
                                
                            }else{
                                echo "0 results";
                            }
                        } else{
                            echo mysqli_error($conn);
                        }
                       

                    # aici afisam mesajul de eroare, daca avem
                    if( !empty($msgErrors) ) {
                            $text = '<p style="color: red">'. join('<br>', $msgErrors) .'</p>';
                    }
                    if(!empty($mesaj)){
                        $text = "succes ". $mesaj;
                    }
                            ?>
                    </div>
                    <div id="tabs-2">
                      <h2>Cadouri Sezon</h2>
                      <?php
                        $sql= "SELECT * FROM `produse` WHERE `categorie`='c_sezon' ORDER BY `id` DESC ";
                        $result=mysqli_query($conn,$sql); 
                        $style= "padding:8px";
                        if($result) {
                            if(mysqli_num_rows($result)>0){
                                //output data of each row
                                echo '<div class="responsive-table"><table border=1 class="table";>
                                          <tr>
                                              <th style="padding:8px";> Imagine </th>
                                              <th style="padding:8px";> Nume produs </th>
                                              <th style="padding:8px";>descriere</th>
                                              <th>Sterge produsul</th>
                                          </tr>
                                          ';
                              while($row=mysqli_fetch_assoc($result)){
                                echo "<tr> "
                                ."</td> <td style='$style'> <img src='../uploads/" .$row["imagine"]."' style='width:100px;'>".
                                "</td> <td style='$style'>" .$row["nume_produs"].
                                "</td> <td style='$style'> ".$row["descriere"].
                                "</td> <td style='$style'><a href='index.php?id=". $row['id']."'> Sterge produsul</a></td></tr>";
//                                 var_dump($row);
                                }
                                echo "</table> </div>";
                                
                            }else{
                                echo "0 results";
                            }
                        } else{
                            echo mysqli_error($conn);
                        }
                       

                    # aici afisam mesajul de eroare, daca avem
                    if( !empty($msgErrors) ) {
                            $text = '<p style="color: red">'. join('<br>', $msgErrors) .'</p>';
                    }
                    if(!empty($mesaj)){
                        $text = "succes ". $mesaj;
                    }
                            ?>
                    </div>
                    <div id="tabs-3">
                      <h2>Mobila</h2>
                     <?php
                        $sql= "SELECT * FROM `produse` WHERE `categorie`='mobila' ORDER BY `id` DESC ";
                        $result=mysqli_query($conn,$sql); 
                        $style= "padding:8px";
                        if($result) {
                            if(mysqli_num_rows($result)>0){
                                //output data of each row
                                echo '<div class="responsive-table"><table border=1 class="table";>
                                          <tr>
                                              <th style="padding:8px";> Imagine </th>
                                              <th style="padding:8px";> Nume produs </th>
                                              <th style="padding:8px";>descriere</th>
                                              <th>Sterge produsul</th>
                                          </tr>
                                          ';
                              while($row=mysqli_fetch_assoc($result)){
                                echo "<tr> "
                                ."</td> <td style='$style'> <img src='../uploads/" .$row["imagine"]."' style='width:100px;'>".
                                "</td> <td style='$style'>" .$row["nume_produs"].
                                "</td> <td style='$style'> ".$row["descriere"].
                                "</td> <td style='$style'><a href='index.php?id=". $row['id']."'> Sterge</a></td></tr>";
//                                 var_dump($row);
                                }
                                echo "</table> </div>";
                                
                            }else{
                                echo "0 results";
                            }
                        } else{
                            echo mysqli_error($conn);
                        }
                       

                    # aici afisam mesajul de eroare, daca avem
                    if( !empty($msgErrors) ) {
                            $text = '<p style="color: red">'. join('<br>', $msgErrors) .'</p>';
                    }
                    if(!empty($mesaj)){
                        $text = "succes ". $mesaj;
                    }
                   ?>
                    </div>
                    <div id="tabs-4">
                      <h2>Tablouri</h2>
                       <?php
                        $sql= "SELECT * FROM `produse` WHERE `categorie`='tablouri' ORDER BY `id` DESC ";
                        $result=mysqli_query($conn,$sql); 
                        $style= "padding:8px";
                        if($result) {
                            if(mysqli_num_rows($result)>0){
                                //output data of each row
                                echo '<div class="responsive-table"><table border=1 class="table";>
                                          <tr>
                                              <th style="padding:8px";> Imagine </th>
                                              <th style="padding:8px";>Nume produs</th>
                                              <th style="padding:8px";>descriere</th>
                                              <th>Sterge produsul</th>
                                          </tr>
                                          ';
                              while($row=mysqli_fetch_assoc($result)){
                                echo "<tr> "
                                ."</td> <td style='$style'> <img src='../uploads/" .$row["imagine"]."' style='width:100px;'>".
                                "</td> <td style='$style'>" .$row["nume_produs"].
                                "</td> <td style='$style'> ".$row["descriere"].
                                "</td> <td style='$style'><a href='index.php?id=". $row['id']."'> Sterge</a></td></tr>";
//                                 var_dump($row);
                                }
                                echo "</table> </div>";
                                
                            }else{
                                echo "0 results";
                            }
                        } else{
                            echo mysqli_error($conn);
                        }
                       

                    # aici afisam mesajul de eroare, daca avem
                    if( !empty($msgErrors) ) {
                            $text = '<p style="color: red">'. join('<br>', $msgErrors) .'</p>';
                    }
                    if(!empty($mesaj)){
                        $text = "succes ". $mesaj;
                    }
                            ?> 
                    </div>
                    <div id="tabs-5">
                      <h3>Goblenuri</h3>
                      <?php
                        $sql= "SELECT * FROM `produse` WHERE `categorie`='goblenuri' ORDER BY `id` DESC ";
                        $result=mysqli_query($conn,$sql); 
                        $style= "padding:8px";
                        if($result) {
                            if(mysqli_num_rows($result)>0){
                                //output data of each row
                                echo '<div class="responsive-table"><table border=1 class="table";>
                                          <tr>
                                              <th style="padding:8px";> Imagine </th>
                                              <th style="padding:8px";>Nume produs</th>
                                              <th style="padding:8px";>descriere</th>
                                              <th>Sterge produsul</th>
                                          </tr>
                                          ';
                              while($row=mysqli_fetch_assoc($result)){
                                echo "<tr> ".
                                "</td> <td style='$style'> <img src='../uploads/" .$row["imagine"]."' style='width:100px;'>".
                                "</td> <td style='$style'>" .$row["nume_produs"].
                                "</td> <td style='$style'> ".$row["descriere"].
                                "</td> <td style='$style'><a href='index.php?id=". $row['id']."'> Sterge</a></td></tr>";
//                                 var_dump($row);
                                }
                                echo "</table> </div>";
                                
                            }else{
                                echo "0 results";
                            }
                        } else{
                            echo mysqli_error($conn);
                        }
                       

                    # aici afisam mesajul de eroare, daca avem
                    if( !empty($msgErrors) ) {
                            $text = '<p style="color: red">'. join('<br>', $msgErrors) .'</p>';
                    }
                    if(!empty($mesaj)){
                        $text = "succes " . $mesaj;
                    }
                            ?>
                    </div>
                    <div id="tabs-6">
                      <h2>Statuete</h2>
                      <?php
                        $sql= "SELECT * FROM `produse` WHERE `categorie`='statuete' ORDER BY `id` DESC ";
                        $result=mysqli_query($conn,$sql); 
                        $style= "padding:8px";
                        if($result) {
                            if(mysqli_num_rows($result)>0){
                                //output data of each row
                                echo '<div class="responsive-table"><table border=1 class="table";>
                                          <tr>
                                              <th style="padding:8px";> Imagine </th>
                                              <th style="padding:8px";> Nume produs </th>
                                              <th style="padding:8px";>descriere</th>
                                              <th>Sterge produsul</th>
                                          </tr>
                                          ';
                              while($row=mysqli_fetch_assoc($result)){
                                echo "<tr> "
                                ."</td> <td style='$style'> <img src='../uploads/" .$row["imagine"]."' style='width:100px;'>".
                                "</td> <td style='$style'> ".$row["nume_produs"].
                                "</td> <td style='$style'> ".$row["descriere"].
                                "</td> <td style='$style'><a href='index.php?id=". $row['id']."'> Sterge</a></td></tr>";
//                                 var_dump($row);
                                }
                                echo "</table> </div>";
                                
                            }else{
                                echo "0 results";
                            }
                        } else{
                            echo mysqli_error($conn);
                        }
                       

                    # aici afisam mesajul de eroare, daca avem
                    if( !empty($msgErrors) ) {
                            $text = '<p style="color: red">'. join('<br>', $msgErrors) .'</p>';
                    }
                    if(!empty($mesaj)){
                        $text = "succes ". $mesaj;
                    }
                            ?>
                    </div>
                    <div id="tabs-7">
                      <h2>Masti sculptate lemn</h2>
                      <?php
                        $sql= "SELECT * FROM `produse` WHERE `categorie`='masti' ORDER BY `id` DESC ";
                        $result=mysqli_query($conn,$sql); 
                        $style= "padding:8px";
                        if($result) {
                            if(mysqli_num_rows($result)>0){
                                //output data of each row
                                echo '<div class="responsive-table"><table border=1 class="table";>
                                          <tr>
                                              <th style="padding:8px";> Imagine </th>
                                              <th style="padding:8px";> Nume produs </th>
                                              <th style="padding:8px";>descriere</th>
                                              <th>Sterge produsul</th>
                                          </tr>
                                          ';
                              while($row=mysqli_fetch_assoc($result)){
                                echo "<tr> "
                                ."</td> <td style='$style'> <img src='../uploads/" .$row["imagine"]."' style='width:100px;'>".
                                "</td> <td style='$style'> ".$row["nume_produs"].
                                "</td> <td style='$style'> ".$row["descriere"].
                                "</td> <td style='$style'><a href='index.php?id=". $row['id']."'> Sterge</a></td></tr>";
//                                 var_dump($row);
                                }
                                echo "</table> </div>";
                                
                            }else{
                                echo "0 results";
                            }
                        } else{
                            echo mysqli_error($conn);
                        }
                       

                    # aici afisam mesajul de eroare, daca avem
                    if( !empty($msgErrors) ) {
                            $text = '<p style="color: red">'. join('<br>', $msgErrors) .'</p>';
                    }
                    if(!empty($mesaj)){
                        $text = "succes ". $mesaj;
                    }
                            ?>
                    </div>
                    <div id="tabs-8">
                      <h2>Obiecte portelan</h2>
                      <?php
                        $sql= "SELECT * FROM `produse` WHERE `categorie`='portelan' ORDER BY `id` DESC ";
                        $result=mysqli_query($conn,$sql); 
                        $style= "padding:8px";
                        if($result) {
                            if(mysqli_num_rows($result)>0){
                                //output data of each row
                                echo '<div class="responsive-table"><table border=1 class="table";>
                                          <tr>
                                              <th style="padding:8px";> Imagine </th>
                                              <th style="padding:8px";>Nume produs</th>
                                              <th style="padding:8px";>descriere</th>
                                              <th>Sterge produsul</th>
                                          </tr>
                                          ';
                              while($row=mysqli_fetch_assoc($result)){
                                echo "<tr> "
                                ."</td> <td style='$style'> <img src='../uploads/" .$row["imagine"]."' style='width:100px;'>".
                                "</td> <td style='$style'> ".$row["nume_produs"].
                                "</td> <td style='$style'> ".$row["descriere"].
                                "</td> <td style='$style'><a href='index.php?id=". $row['id']."'> Sterge</a></td></tr>";
//                                 var_dump($row);
                                }
                                echo "</table> </div>";
                                
                            }else{
                                echo "0 results";
                            }
                        } else{
                            echo mysqli_error($conn);
                        }
                       

                    # aici afisam mesajul de eroare, daca avem
                    if( !empty($msgErrors) ) {
                            $text = '<p style="color: red">'. join('<br>', $msgErrors) .'</p>';
                    }
                    if(!empty($mesaj)){
                        $text = "succes ". $mesaj;
                    }
                            ?>  
                    </div>
                    <div id="tabs-9">
                      <h2>Obiecte decorative</h2>
                      <?php
                        $sql= "SELECT * FROM `produse` WHERE `categorie`='decorativ' ORDER BY `id` DESC ";
                        $result=mysqli_query($conn,$sql); 
                        $style= "padding:8px";
                        if($result) {
                            if(mysqli_num_rows($result)>0){
                                //output data of each row
                                echo '<div class="responsive-table"><table border=1 class="table";>
                                          <tr>
                                              <th style="padding:8px";> Imagine </th>
                                              <th style="padding:8px";> Nume produs </th>
                                              <th style="padding:8px";>descriere</th>
                                              <th>Sterge produsul</th>
                                          </tr>
                                          ';
                              while($row=mysqli_fetch_assoc($result)){
                                echo "<tr> "
                                ."</td> <td style='$style'> <img src='../uploads/" .$row["imagine"]."' style='width:100px;'>".
                                "</td> <td style='$style'> ".$row["nume_produs"].
                                "</td> <td style='$style'> ".$row["descriere"].
                                "</td> <td style='$style'><a href='index.php?id=". $row['id']."'> Sterge produsul</a></td></tr>";
//                                 var_dump($row);
                                }
                                echo "</table> </div>";
                                
                            }else{
                                echo "0 results";
                            }
                        } else{
                            echo mysqli_error($conn);
                        }
                       

                    # aici afisam mesajul de eroare, daca avem
                    if( !empty($msgErrors) ) {
                            $text = '<p style="color: red">'. join('<br>', $msgErrors) .'</p>';
                    }
                    if(!empty($mesaj)){
                        $text = "succes ". $mesaj;
                    }
                            ?>
                    </div>
                  </div>
             </div><!--end row-->
        </div><!--end container-->

        
        <hr style="color:black; height: 5px;">
            
            
            
            
        </div><!--end container-->
        <?php }else{
            error_reporting(E_ALL);
            header("Location:login.php");
            ?>
        <a href="login.php" class="btn btn-lg btn-info" style="text-align: center; margin-top: 50px;">Logati-va ca administrator aici</a>
        <?php
        } ?>
        <?php 
//            var_dump($_GET) . "<br>";
//}
            ?>
    </body>
</html>