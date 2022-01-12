<!DOCTYPE html>
<html lang="en">


<body>
<div id="topSpace"></div>
    <link rel="stylesheet" href="styles.css">
    <form action="del_vot.php" method="post">
<div class="wrapper">
    <div class="form-group">
    <h2>REMOVE VOTER</h2>
        <label>Name</label>
        <input type="text" name="name" required >
        <label>Phone Number</label>
        <input type="text" name="phone" required >
        <button  type="submit" class="button" value="Submit">Delete</button>
    </form>
    <center>
  <div class="wrapper">
<table id="customers">
    <tr>
    <th>Name</th>
    <th>Phone</th>

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

$sql = "SELECT * FROM voters";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo '
    
  </tr>
        <td>'.$row["name"].'</td>
        <td>'.$row["phone"].'</td>
       
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
</div>

</body>

</html>