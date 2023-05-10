<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/11.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>player details</title>
</head>
<body>

<h1 style="text-align: center; color: white;">Player Detail</h1>


<div class="dropdown">
  <button class="dropbtn">Menu</button>
  <div class="dropdown-content">
    <a href="adminpanel.html">Levels</a>
    <a href="bosslevel.html">boss level</a>
    <a href="pointc.html">point</a>
    <a href="question.html">question setup</a>
    <a href="task.html">Task</a>
    <a href="infod.html">Info board</a>
    <a href="playerd.php">players details</a>
    <a href="gmaster.php">Game Master</a>
    <a href="index.html">log out</a>
  </div>
</div>

<div class="login-page">
  <div class="form">
    <table>
      <tr>
        <th>Id</th>
        <th>User Name</th>
        <th>Level</th>
        <th>point</th>
        <th>email</th>
        <th>glink</th>
        <th>image</th>
      </tr>

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

      $sql = "SELECT * FROM players";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $nimage= $row["image"];
              $nem= $row["email"];
              $nan= $row["name"];
              $nid= $row["id"];
              $nl= $row["level"];
              $ngl= $row["glink"];
              $npo= $row["points"]; 
      ?>
       

      <tr>
        <td><?php echo $nid; ?></td>
        <td><?php echo $nan; ?></td>
        <td><?php echo $nl; ?></td>
        <td><?php echo $npo; ?></td>
        <td><?php echo $nem; ?></td>
        <td><?php echo $ngl; ?></td>
        <td><a href="<?php echo $nimage; ?>">click<a></td>
      </tr>
              <?php
      }
}
?>
    </table>
  </div>
</div>



</body>
</html>