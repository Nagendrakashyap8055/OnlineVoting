<html>
<div id="topSpace"></div>

<link rel="stylesheet" href="styles.css">



<div class="wrapper">
<h2>WINNER</h2>
<center>
  <div class="wrapper">
<table id="customers">
    <tr>
    <th> Candidate id </th>
    <th> Name</th>
    <th> Party name </th>
    <th> Party symbol </th>
    <th> Number of votes </th>

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

$sql = "SELECT * FROM vw_result where count=(SELECT max(count) FROM vw_result);";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo '
    
  </tr>
        <td>'.$row["candidate_id"].'</td>
        <td>'.$row["name"].'</td>
        <td>'.$row["party_name"].'</td>
        <td>'.$row["party_symbol"].'</td>
        <td>'.$row["count"].'</td>
      </tr>';
      //SELECT * FROM vw_result where count=(SELECT max(count) FROM vw_result);
  }
} 
else {
  echo "0 results";
}
$conn->close();
?>
</table></div>
</center>
</div>





<div class="wrapper">
<h2>Results </h2>
<center>
  <div class="wrapper">
<table id="customers">
    <tr>
    <th> Candidate id </th>
    <th> Name</th>
    <th> Party name </th>
    <th> Party symbol </th>
    <th> Number of votes </th>

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

$sql = "SELECT * from vw_result;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo '
    
  </tr>
        <td>'.$row["candidate_id"].'</td>
        <td>'.$row["name"].'</td>
        <td>'.$row["party_name"].'</td>
        <td>'.$row["party_symbol"].'</td>
        <td>'.$row["count"].'</td>
      </tr>';
      //SELECT * FROM vw_result where count=(SELECT max(count) FROM vw_result);
  }
} 
else {
  echo "0 results";
}
$conn->close();
?>

</table></div>
</center>

</div>