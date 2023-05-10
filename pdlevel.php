<?php
$ln=$_GET['lvn'];
$cookie_name = "lvn";
$cookie_value = $ln;
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/8.css">
	<title>sign in</title>
	<script type="text/javascript">
	</script>
</head>
<body >
<div class="login-page">
  <div class="form">
    <form class="login-form">
      <button><?php echo $ln; ?></button><br>
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

			$sql = "SELECT * FROM $ln WHERE name='v'";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
			    // output data of each row
			    while($row = mysqli_fetch_assoc($result)) {
			        $nimage= $row["image"];
			        $nans= $row["answer"];
			        $nan= $row["name"];
			        $nid= $row["id"]; 
	    }
}
?>

      <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $nans; ?>?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      <button type="submit"><a style="text-decoration: none;color: white;" href="dplevel.php?lv=<?php echo $ln; ?>">TEST</a></button>
      <p class="message" style="color:black;font-size: 20px;">Next test only give 3 minutes for each question</p>
    </form>
  </div>
</div>
</body>
</html>