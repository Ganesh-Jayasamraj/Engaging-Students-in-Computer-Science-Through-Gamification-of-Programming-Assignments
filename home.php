<?php


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Leaderboard UI Design</title>
  <link rel="stylesheet" type="text/css" href="css/3.css">
</head>
<body>
<div class="wrapper">
  <div class="wrapper__header">
    <div class="b_logo"><img src="https://images.vexels.com/media/users/3/135313/isolated/lists/9c44517fa04da541c35888362bce2d1b-award-trophy-icon.png" width="40" alt=""/></div>
    <div class="b_caption">
      <p>Student <span>leaderboard</span></p>
    </div>
  </div>
  <div class="wrapper__content">
    <ul>
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

      $sql = "SELECT * FROM players ORDER BY points DESC";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $nimage= $row["image"];
              $nan= $row["name"];
              $nid= $row["level"];
              $npo= $row["points"]; 
      ?>
        
      <li>
        <div class="graphic"><img src="<?php echo $nimage;?>" alt=""/></div>
        <div class="name"><span class="header"><?php echo $nan; ?></span><span class="stat"><?php echo $npo; ?></span><span class="sub">Lv<?php echo $nid; ?></span></div>
      </li>
      <?php
      }
}
?>


    </ul>
  </div>
</div>
</body>
</html>