 <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "brocante_db";
//    $username = "antichbu_broc";
//    $password = "TR{TZQT2B1@5";
//    $database = "antichbu_brocante";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password,$database);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $conect = "Connected successfully";
?> 