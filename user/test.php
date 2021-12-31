<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
<div id="topSpace"></div>
    <link rel="stylesheet" href="styles.css">
<center><div class="wrapper">
    
         
    <link rel="stylesheet" href="styles.css">
<div class="wrapper">
<h2>VOTE</h2>
    <form action="insert.php" method="post">
    <div class="form-group">
    <label> Name </label>
        <input type="text"  name="name" required >
        
        <label> Phone </label><br>
        <input type="text" name="phone"  required >
       
        </div>
   </div>
     <div class="wrapper">
<table >
    <tr>
    <th>Candidate id</th>
    <th>Name</th>
    <th>Party name</th>
    <th>Party symbol</th>

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

$sql = "SELECT candidate_id,name,party_name,party_symbol FROM candidate";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
$cand=$row["candidate_id"];
    echo '
    
  </tr>
    <td>'.$row["candidate_id"].'</td>
    <td>'.$row["name"].'</td>
    <td>'.$row["party_name"].'</td>
    <td>'.$row["party_symbol"].'</td>
    <td><button  class ="button" type="submit" value="Submit" name="vote">Vote</button></td>
  </tr>';
  }
}
?>
</table></div></div>
</center>

</form>
</body>

</html>