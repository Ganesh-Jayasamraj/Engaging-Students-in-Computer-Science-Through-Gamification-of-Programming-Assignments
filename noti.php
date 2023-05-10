<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/9.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>notification</title>
</head>
<body>

<h1 style="text-align: center; color: white;">Notification</h1>

<div class="login-page">
  <div class="form">
    <form class="login-form" action="adpa.php" method="post" enctype="multipart/form-data">
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

      $sql = "SELECT * FROM info";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $nans= $row["answer"];
              $nan= $row["link"];
      ?>
       

      <button type="submit" ><a href="<?php echo $nan ; ?>" style="text-decoration: none; color: white;" ><?php echo $nans ; ?></a></button>
              <?php
      }
}
?>
      <p class="message">go to <a href="start.php"> profile</a></p>
    </form>
  </div>
</div>
</body>
</html>