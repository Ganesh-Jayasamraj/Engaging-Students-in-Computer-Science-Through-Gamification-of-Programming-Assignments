<?php
$nam=$_COOKIE["cid"];
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

$sql = "SELECT * FROM players WHERE id=$nam";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $naa= $row["name"];
        $paa=$row["level"];
        $nemail= $row["email"];
        $nglink= $row["glink"];
        $nimage= $row["image"];
        $npoint= $row["points"];
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/5.css">
	<title>start page</title>
</head>
<body>
	<div class="prof">
		<a href="picedit.html"><?php echo "<img src='$nimage'>"; ?><a>
		<br>
		<h1><?php echo $naa. " level" .$paa." ". $npoint; ?></h1><h4><?php echo $nemail; ?></h4><h4><?php echo $nglink; ?></h4>
		<button><a href="world.php" style="text-decoration:none;"><b style="color: white;">start</b><a></button>
		<button><a href="home.php" style="text-decoration:none;"><b style="color: white;">leader board</b></a></button>
		<button><a href="dailytask.php"style="text-decoration:none;"><b style="color: white;">Daily Task</b><a></button>
		<button><a href="noti.php"style="text-decoration:none;"><b style="color: white;">notification</b><a></button>
		<button><a href="index.html"style="text-decoration:none;"><b style="color: white;">log out</b><a></button>

		
	</div>

</body>
</html>