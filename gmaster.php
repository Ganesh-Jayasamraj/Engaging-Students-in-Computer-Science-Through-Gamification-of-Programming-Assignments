<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/12.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Game Master</title>
</head>
<body>

<h1 style="text-align: center; color: white;">Game Master</h1>


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
    <form class="login-form" action="pgm.php" method="post" enctype="multipart/form-data">
      <input type="text" name="id" placeholder="id"/>
      <input type="number" name="level" placeholder="1-100"/>
      <input type="number" name="point" placeholder="1-100"/>
      <button type="submit" name="na" value="insert">update</button>
      <button type="submit" name="na" value="delete">delete</button>
      <p class="message">Level create? <a href="question.html">press here</a></p>
    </form>
  </div>
</div>
</body>
</html>