<?php
  session_start(); // Starting Session
  $error ="";

  require_once '../php/config.php';
  $password = isset($_POST['password']) ? $_POST['password']:false;
  $username = isset($_POST['username']) ? $_POST['username']:false;
  $newpassword = md5($password);
if(isset($_POST['login'])){
    
    $select = " SELECT * FROM `admin` WHERE `password`='{$newpassword}' AND `user`='{$username}'  ";
    $ans = mysqli_query($conn, $select);
    
    if( mysqli_num_rows( $ans ) > 0 ){
        //output data of each row
            while($row = mysqli_fetch_assoc($ans)){
                $_SESSION['login_user'] = $row['user'];
                error_reporting(E_ALL);
               header('Location:index.php');
            }
    }else{
        $error = "Parola si userul sunt gresite";
    }
}
//var_dump($_POST);
//var_dump($_SESSION);
?>

<html>
    <head>
        <link href="../css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <title>Antichitati Brocante Craiova</title>
    </head>
    <body>
        <div id="main">
            <div id="login">
                <h2>Login </h2>
                <?php 
                    if(isset($_SESSION['login_user'])){
                        ?>
                <a href="index.php" class="btn btn-info btn-lg">Administreaza site-ul</a>            
                <?php
                    }else{
                ?>
                <form action="" method="post">
                    <div class="form-group">
                        <label>UserName :</label>
                        <input id="name" name="username" placeholder="User" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Password :</label>
                        <input id="password" name="password" placeholder="Parola" type="password" class="form-control">
                    </div>
                    <input name="login" type="submit" value=" Login" class="btn btn-warning btn-lg">
                <span><?php echo $error; ?></span>
                </form>
                    <?php } ?>
            </div>
        </div>
    </body>
</html>
