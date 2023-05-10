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

			$sql = "SELECT * FROM dailyt WHERE uid=$nam";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
			    // output data of each row
			    while($row = mysqli_fetch_assoc($result)) {
			        $ni= $row["status"];
			        if($ni=="f"){
			        	header("Location: sorry.php");
			        	exit(); // <-- terminates the current script
			        }
	    }
}
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/7.css">
	<title>daily task</title>
	<script language="JavaScript" type="text/javascript"> 
		var t = setTimeout("document.myform.submit();",900*1000); //15 seconds measured in miliseconds
	</script>
</head>
<body >
	<h1 style="text-align:center;color: white;">DAILY TASK</h1>
	<div class="login-page">
	  <div class="form">
	    <form name="myform" class="login-form" action="pdailyt.php" method="post">
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

			$sql = "SELECT * FROM task";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
			    // output data of each row
			    while($row = mysqli_fetch_assoc($result)) {
			        $nimage= $row["image"];
			        $nans= $row["answer"];
			        $nan= $row["name"];
			        $nid= $row["id"];
			        $npo= $row["points"]; 
			?>
	      <?php echo "<img src='$nimage' style='width:690px;height: 200px; padding-top: 20px'>"; ?>
	      <?php echo "<input type='text' name='$nid' placeholder='a,b,c,d(point $npo)' required style='font-size: 25px'>"; ?>
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

