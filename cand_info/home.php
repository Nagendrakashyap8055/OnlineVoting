<html>
<div id="topSpace"></div>

<link rel="stylesheet" href="styles.css">
<div class="wrapper">
<h2>CANDIDATE INFORMATION</h2>
</div>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "voting";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT candidate_id, name FROM candidate";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["candidate_id"]. " - Name: " . $row["name"].  "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
