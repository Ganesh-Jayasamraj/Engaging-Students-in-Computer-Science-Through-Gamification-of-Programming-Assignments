<?php
function sta(){
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
	        $nid= $row["id"];
	        $pans=$row["answer"];
	        $pn=$_POST["$nid"];
	        $po=$row["points"];
	        //echo $nid . $pans . $pn . "<br>";
	        if($pn==$pans){
	            poin("$po");
	            //header("Location: adminpanel.html");
	        }
	    }
	} else {
	    echo "<h1>0 results</h1>";
	}

	mysqli_close($conn);

}

function poin($tpoint){
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
	$nam=$_COOKIE["cid"];
	$sql = "SELECT points FROM players WHERE id=$nam";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	        $np= (int)$row["points"];
	        $tp=(int)$np+(int)$tpoint;
	        poi($tp);
	    }
	} else {
	    echo "0 results";
	}

	mysqli_close($conn);

}

function poi($tpoin){
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
  $nam=$_COOKIE["cid"];
  $sql = "UPDATE players SET points='$tpoin' WHERE id='$nam'";
  if (mysqli_query($conn, $sql)) {
    echo "$tpoin successfully added";
  } else {
    echo "Error creating table: " . mysqli_error($conn);
  }
  cu();

  mysqli_close($conn);
}

function cu(){
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
  $nam=$_COOKIE["cid"];
  $sql = "UPDATE dailyt SET status='f' WHERE uid='$nam'";
  if (mysqli_query($conn, $sql)) {
    echo "tpoin successfully added";
  } else {
    echo "Error creating table: " . mysqli_error($conn);
  }

  mysqli_close($conn);
  header("Location: start.php");

}

sta();
?>