
<html>
<div id="topSpace"></div>

<link rel="stylesheet" href="styles.css">
<div class="wrapper">
<h2>Results INFORMATION</h2>
<center>
  <div class="wrapper">
<table id="customers">
    <tr>
        
    <th>Name&nbsp&nbsp&nbsp&nbsp</th>
    
    <th>Phone </th>
    <th>Candidate id</th>

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

$sql = "SELECT *  FROM votes ;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo '
    
  </tr>
        
        <td>'.$row["name"].'</td>
        <td>'.$row["phone"].'</td>
        <td>'.$row["candidate_id"].'</td>       
      </tr>';
      
  }
  //echo'<button type="submit" class="button" >'."Vote for".$row["candidate_id"]. '</button>';
} 
else {
  echo "0 results";
}
$conn->close();
?>
</table></div>
</center>

<div class="wrapper">
<center>
  <h2>Number Of Votes</h2>
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

$sql = "SELECT count(*) as no_of_votes FROM votes;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo ''.$row["no_of_votes"].'';
      //SELECT * FROM vw_result where count=(SELECT max(count) FROM vw_result);
  }
} 
else {
  echo "0 results";
}
$conn->close();
?>
</center>
</div>
</div>