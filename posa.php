<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reg";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, name, password FROM players";
$result = mysqli_query($conn, $sql);
$na=$_POST["name"];
$pa=$_POST["password"];
$sory="u";
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $nid= $row["id"];
        $naa= $row["name"];
        $paa=$row["password"];
        if($na==$naa && $pa==$paa){
            $cookie_name = "cid";
            $cookie_value = $nid;
            $sory="f";
            
        }

    }
    if($sory=="f"){
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
            echo "login sucessfuly";
            header("Location: start.php");

    }else{
        header("Location: sorry.php");
    }
} else {
    echo "0 results";
}

mysqli_close($conn);


?>