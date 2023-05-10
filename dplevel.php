<?php
$ln=$_COOKIE['lvn'];
?>



<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/7.css">
	<script language="JavaScript" type="text/javascript"> 
		var t = setTimeout("document.myform.submit();",900*1000); //15 minutes measured in miliseconds
	</script>
	<title><?php echo $ln; ?></title>
</head>
<body >
	<h1 style="text-align:center;color: white;"><?php echo $ln; ?></h1>
	<div class="login-page">
	  <div class="form">
	    <form name="myform" class="login-form" action="ts.php" method="post">
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

			$sql = "SELECT * FROM $ln WHERE name='q'";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
			    // output data of each row
			    while($row = mysqli_fetch_assoc($result)) {
			        $nimage= $row["image"];
			        $nans= $row["answer"];
			        $nan= $row["name"];
			        $nid= $row["id"]; 
			?>
	      <?php echo "<img src='$nimage' style='width:690px;height: 200px; padding-top: 20px'>"; ?>
	      <?php echo "<input type='text' name='$nid' placeholder='a,b,c,d' required style='font-size: 25px'>"; ?>
	      <?php
	    }
}
?>
	      <button type="submit" value="Submit" id="su">submit</button>
	      
	    </form>
	  </div>
	</div>
</body>
</html>

