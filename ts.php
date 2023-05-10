<?php
$lv=$_COOKIE["lvn"];
function lc(){
	$lv=$_COOKIE["lvn"];
	if($lv=="Level1"){
		$servername = "localhost";
	  $username = "root";
	  $password = "";
	  $dbname = "reg";
	  $lv=$_COOKIE["lvn"];
	  // Create connection
	  $conn = mysqli_connect($servername, $username, $password, $dbname);
	  // Check connection
	  if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	  }
	  $nam=$_COOKIE["cid"];
	  $sql = "UPDATE players SET level=1 WHERE id=$nam";
	  if (mysqli_query($conn, $sql)) {
	    echo "$nam successfully added";
	  } else {
	    echo "Error creating table: " . mysqli_error($conn);
	  }
	  $sql = "UPDATE lvinfo SET $lv='f' WHERE id=$nam";
	  if (mysqli_query($conn, $sql)) {
	    echo "$lv f successfully added";
	  } else {
	    echo "Error creating table: " . mysqli_error($conn);
	  }


	  mysqli_close($conn);
	  header("Location: start.php");

	}
	if($lv=="Level2"){
		$servername = "localhost";
	  $username = "root";
	  $password = "";
	  $dbname = "reg";
	  $lv=$_COOKIE["lvn"];
	  // Create connection
	  $conn = mysqli_connect($servername, $username, $password, $dbname);
	  // Check connection
	  if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	  }
	  $nam=$_COOKIE["cid"];
	  $sql = "UPDATE players SET level=2 WHERE id=$nam";
	  if (mysqli_query($conn, $sql)) {
	    echo "$nam successfully added";
	  } else {
	    echo "Error creating table: " . mysqli_error($conn);
	  }
	  $sql = "UPDATE lvinfo SET $lv='f' WHERE id=$nam";
	  if (mysqli_query($conn, $sql)) {
	    echo "$lv f successfully added";
	  } else {
	    echo "Error creating table: " . mysqli_error($conn);
	  }


	  mysqli_close($conn);
	  header("Location: start.php");

	}
	if($lv=="Level3"){
		$servername = "localhost";
	  $username = "root";
	  $password = "";
	  $dbname = "reg";
	  $lv=$_COOKIE["lvn"];
	  // Create connection
	  $conn = mysqli_connect($servername, $username, $password, $dbname);
	  // Check connection
	  if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	  }
	  $nam=$_COOKIE["cid"];
	  $sql = "UPDATE players SET level=3 WHERE id=$nam";
	  if (mysqli_query($conn, $sql)) {
	    echo "$nam successfully added";
	  } else {
	    echo "Error creating table: " . mysqli_error($conn);
	  }
	  $sql = "UPDATE lvinfo SET $lv='f' WHERE id=$nam";
	  if (mysqli_query($conn, $sql)) {
	    echo "$lv f successfully added";
	  } else {
	    echo "Error creating table: " . mysqli_error($conn);
	  }


	  mysqli_close($conn);
	  header("Location: start.php");

	}
	if($lv=="Level4"){
		$servername = "localhost";
	  $username = "root";
	  $password = "";
	  $dbname = "reg";
	  $lv=$_COOKIE["lvn"];
	  // Create connection
	  $conn = mysqli_connect($servername, $username, $password, $dbname);
	  // Check connection
	  if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	  }
	  $nam=$_COOKIE["cid"];
	  $sql = "UPDATE players SET level=4 WHERE id=$nam";
	  if (mysqli_query($conn, $sql)) {
	    echo "$nam successfully added";
	  } else {
	    echo "Error creating table: " . mysqli_error($conn);
	  }
	  $sql = "UPDATE lvinfo SET $lv='f' WHERE id=$nam";
	  if (mysqli_query($conn, $sql)) {
	    echo "$lv f successfully added";
	  } else {
	    echo "Error creating table: " . mysqli_error($conn);
	  }


	  mysqli_close($conn);
	  header("Location: start.php");

	}
	if($lv=="Level5"){
		$servername = "localhost";
	  $username = "root";
	  $password = "";
	  $dbname = "reg";
	  $lv=$_COOKIE["lvn"];
	  // Create connection
	  $conn = mysqli_connect($servername, $username, $password, $dbname);
	  // Check connection
	  if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	  }
	  $nam=$_COOKIE["cid"];
	  $sql = "UPDATE players SET level=5 WHERE id=$nam";
	  if (mysqli_query($conn, $sql)) {
	    echo "$nam successfully added";
	  } else {
	    echo "Error creating table: " . mysqli_error($conn);
	  }
	  $sql = "UPDATE lvinfo SET $lv='f' WHERE id=$nam";
	  if (mysqli_query($conn, $sql)) {
	    echo "$lv f successfully added";
	  } else {
	    echo "Error creating table: " . mysqli_error($conn);
	  }


	  mysqli_close($conn);
	  header("Location: start.php");

	}
	if($lv=="Level6"){
		$servername = "localhost";
	  $username = "root";
	  $password = "";
	  $dbname = "reg";
	  $lv=$_COOKIE["lvn"];
	  // Create connection
	  $conn = mysqli_connect($servername, $username, $password, $dbname);
	  // Check connection
	  if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	  }
	  $nam=$_COOKIE["cid"];
	  $sql = "UPDATE players SET level=6 WHERE id=$nam";
	  if (mysqli_query($conn, $sql)) {
	    echo "$nam successfully added";
	  } else {
	    echo "Error creating table: " . mysqli_error($conn);
	  }
	  $sql = "UPDATE lvinfo SET $lv='f' WHERE id=$nam";
	  if (mysqli_query($conn, $sql)) {
	    echo "$lv f successfully added";
	  } else {
	    echo "Error creating table: " . mysqli_error($conn);
	  }


	  mysqli_close($conn);
	  header("Location: start.php");

	}

	if($lv=="Level7"){
		$servername = "localhost";
	  $username = "root";
	  $password = "";
	  $dbname = "reg";
	  $lv=$_COOKIE["lvn"];
	  // Create connection
	  $conn = mysqli_connect($servername, $username, $password, $dbname);
	  // Check connection
	  if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	  }
	  $nam=$_COOKIE["cid"];
	  $sql = "UPDATE players SET level=7 WHERE id=$nam";
	  if (mysqli_query($conn, $sql)) {
	    echo "$nam successfully added";
	  } else {
	    echo "Error creating table: " . mysqli_error($conn);
	  }
	  $sql = "UPDATE lvinfo SET $lv='f' WHERE id=$nam";
	  if (mysqli_query($conn, $sql)) {
	    echo "$lv f successfully added";
	  } else {
	    echo "Error creating table: " . mysqli_error($conn);
	  }


	  mysqli_close($conn);
	  header("Location: start.php");

	}
	if($lv=="Level8"){
		$servername = "localhost";
	  $username = "root";
	  $password = "";
	  $dbname = "reg";
	  $lv=$_COOKIE["lvn"];
	  // Create connection
	  $conn = mysqli_connect($servername, $username, $password, $dbname);
	  // Check connection
	  if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	  }
	  $nam=$_COOKIE["cid"];
	  $sql = "UPDATE players SET level=8 WHERE id=$nam";
	  if (mysqli_query($conn, $sql)) {
	    echo "$nam successfully added";
	  } else {
	    echo "Error creating table: " . mysqli_error($conn);
	  }
	  $sql = "UPDATE lvinfo SET $lv='f' WHERE id=$nam";
	  if (mysqli_query($conn, $sql)) {
	    echo "$lv f successfully added";
	  } else {
	    echo "Error creating table: " . mysqli_error($conn);
	  }


	  mysqli_close($conn);
	  header("Location: start.php");

	}
	if($lv=="Level9"){
		$servername = "localhost";
	  $username = "root";
	  $password = "";
	  $dbname = "reg";
	  $lv=$_COOKIE["lvn"];
	  // Create connection
	  $conn = mysqli_connect($servername, $username, $password, $dbname);
	  // Check connection
	  if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	  }
	  $nam=$_COOKIE["cid"];
	  $sql = "UPDATE players SET level=10 WHERE id=$nam";
	  if (mysqli_query($conn, $sql)) {
	    echo "$nam successfully added";
	  } else {
	    echo "Error creating table: " . mysqli_error($conn);
	  }
	  $sql = "UPDATE lvinfo SET $lv='f' WHERE id=$nam";
	  if (mysqli_query($conn, $sql)) {
	    echo "$lv f successfully added";
	  } else {
	    echo "Error creating table: " . mysqli_error($conn);
	  }


	  mysqli_close($conn);
	  header("Location: start.php");

	}
	if($lv=="Level10"){
		$servername = "localhost";
	  $username = "root";
	  $password = "";
	  $dbname = "reg";
	  $lv=$_COOKIE["lvn"];
	  // Create connection
	  $conn = mysqli_connect($servername, $username, $password, $dbname);
	  // Check connection
	  if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	  }
	  $nam=$_COOKIE["cid"];
	  $sql = "UPDATE players SET level=8 WHERE id=$nam";
	  if (mysqli_query($conn, $sql)) {
	    echo "$nam successfully added";
	  } else {
	    echo "Error creating table: " . mysqli_error($conn);
	  }
	  $sql = "UPDATE lvinfo SET $lv='f' WHERE id=$nam";
	  if (mysqli_query($conn, $sql)) {
	    echo "$lv f successfully added";
	  } else {
	    echo "Error creating table: " . mysqli_error($conn);
	  }


	  mysqli_close($conn);
	  header("Location: start.php");

	}
}

function levlcheck(){
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
	$nd=$_COOKIE["cid"];
	$sql = "SELECT * FROM lvinfo WHERE uid=$nd";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	    		$lv=$_COOKIE["lvn"];
	        $nla= $row["$lv"];
	        //echo $nid . $pans . $pn . "<br>";
	        if($nla=="u"){
	            sta();
	        }else{
	        	header("Location: sorry.php");
	        }

	    }
	} else {
	    echo "<h1>4 results</h1>";
	}

	mysqli_close($conn);


}


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
	$lv=$_COOKIE["lvn"];
	$sql = "SELECT * FROM $lv";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	        $nid= $row["id"];
	        $pans=$row["answer"];
	        $pn=$_POST["$nid"];
	        //echo $nid . $pans . $pn . "<br>";
	        if($pn==$pans){
	            poin();
	            //header("Location: adminpanel.html");
	        }
	    }
	} else {
	    echo "<h1>6 results</h1>";
	    if($lv="Level5"){
	    	lc();
	    }
	    if($lv="Level10"){
	    	lc();
	    }

	}

	mysqli_close($conn);

}

function poin(){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "reg";
	$lv=$_COOKIE["lvn"];
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	$nam=$_COOKIE["lvn"];
	$sql = "SELECT * FROM levelpoint WHERE name='$nam'";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	        $np= (int)$row["lpoint"];
	        $npp= (int)$row["blpoint"];
	    }
	    $tp=(int)$np;
	    pointa($tp);
	} else {
	    echo "0 results";
	}

	mysqli_close($conn);

}



function pointa($tp){
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
	$sql = "SELECT * FROM players WHERE id='$nam'";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	        $np= (int)$row["points"];
	    }
	    $tp=(int)$np+(int)$tp;
	    poi($tp);
	} else {
	    echo "1 results";
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
  lc();

  mysqli_close($conn);
}

levlcheck();

?>