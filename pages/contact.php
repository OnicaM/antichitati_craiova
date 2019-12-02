
<div class="home-content">
    <div class="bg-top">
        <div class="container-content">
            <h2>Contact</h2>
        </div>
    </div>

<?php 
require_once '../php/global_navbar.php';
require '../PHPMailer-master/PHPMailerAutoload.php';
$msg =$eroareM=$eroareN=$eroareMsg="";
$email = isset($_POST['email']) ? $_POST['email'] : false;
$subiect = isset($_POST['subiect']) ? $_POST['subiect'] :false;
$mesaj = isset($_POST['mesaj']) ? $_POST['mesaj'] : false;
$nume = isset($_POST['nume']) ? $_POST['nume'] :false;
if(isset($_POST['send'])){
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false || empty($email)) {
        $eroareM = "{$email} nu este o adresa valida!";
      }
      if(empty($nume)){
          $eroareN = "Numele dumnaevoastra nu a fost specificat.";
      }
      if(empty($mesaj)){
          $eroareMsg = "Mesajul nu a fost specificat";
      }
      if(empty($eroareM) && empty($eroareN) && empty($eroareMsg)){
        $mail = new PHPMailer;

        //$mail->SMTPDebug = 3;                               // Enable verbose debug output

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'antichitatibrocantecraiova@gmail.com';                 // SMTP username
        $mail->Password = 'Antbrocantecraiova2016';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        $mail->setFrom('pwsmarian@yahoo.com', 'Mesaj Brocante Craiova');
        $mail->addAddress('pwsmarian@yahoo.com', 'Oana Macamete');            // Name is optional

        $mail->addReplyTo("$email", "Reply");
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = $_POST['subiect'];
        $mail->Body    = $_POST['mesaj'];
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if(!$mail->send()) {
            $msg = 'Mesajul nu a putut fi trimis. <br>';
           $msg .= 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            $msg = 'Mesajul a fost trimis cu succes!';
        }
      }
}
?>
</div>
<div class="">
    <div class="container-content">
        <div class="clearfix">
            
            <div class="col-sm-6">
               
                <p><b>Telefon:</b> 0766457451</p>
                <p><b>Email:</b> pwsmarian@yahoo.com</p>
                <p><b>Adresa:</b> str.Calea Bucuresti nr.34 A8 b.parter (Zona Rotonda pe gang)</p>
                <p><b>Facebook:</b> 
                    <a href="https://www.facebook.com/Brocante-Craiova-684762934994853/?fref=ts" target="_blank">
                            <i class="fa fa-facebook-square" aria-hidden="true"></i> Brocante Craiova
                    </a>
                </p>
                <p style="color: red; font-weight: bold; margin-top: 10px;">
                    <?php 
                    echo $eroareM ."<br>";
                    echo $eroareN ."<br>";
                    echo $eroareMsg ."<br>";
                    ?>
                </p>
                <div style="margin-top: 30px;">
                 <p style="color: red; font-weight: bold;"><?php echo $msg; ?></p>
                </div>
            </div>
            <div class="col-sm-6">
                <form method="post">
                    <div class="form-group">
                        <label>Nume: <span style="color: red;">*</span></label>
                        <input type="text" name="nume" placeholder="Nume" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>E-mail: <span style="color: red;">*</span></label>
                        <input type="text" name="email" placeholder="E-mail" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Subiect</label>
                        <input type="text" name="subiect" placeholder="Subiect" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Mesaj: <span style="color: red;">*</span></label>
                        <textarea class="form-control" name="mesaj"></textarea>
                    </div>
                    <input type="submit" class="btn btn-warning" value="Trimite" name="send">
                </form>
                
            </div>
        </div>
    </div>
</div>
<?php require_once '../php/global_footer.php'; ?>