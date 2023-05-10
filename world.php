<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/4.css">
	<title>world levels</title>
</head>
<body>   
<div class="bo">
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

			$sql = "SELECT * FROM level";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
			    // output data of each row
			    while($row = mysqli_fetch_assoc($result)) {
			        $nna= $row["name"];
			        $nc= $row["crtic"];
			        $nd= $row["des"];
			        $nid= $row["id"];
			        $nim= $row["image"]; 
			?> 
<div class="box">
	<?php echo "<a href='pdlevel.php?lvn=$nna'><img src='$nim' class='ibox'></a>"; ?>
	<p><?php echo $nna; ?>  <?php echo $nc; ?></p><br>
	<p style="color:purple;font-size: 15px;"><?php echo $nd; ?></p>
</div>


<?php
	    }
}
?>
</div>
</body>
</html>