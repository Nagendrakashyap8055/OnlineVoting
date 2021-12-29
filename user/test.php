<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
<div id="topSpace"></div>
    <link rel="stylesheet" href="styles.css">
<center><div class="wrapper">
    <div class="wrapper">
    <?php

    // servername => localhost
    // username => root
    // password => empty
    // database name => login
    $conn = mysqli_connect("localhost", "root", "", "voting");

    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }

    // Taking all 5 values from the form data(input)
    $name = $_REQUEST['name'];
    $phone = $_REQUEST['phone'];
   

    // Performing insert query execution
    // here our table name is college
    $sql = "INSERT INTO votes(name,phone) VALUES ('$name',$phone)";

    if(mysqli_query($conn, $sql)){
        echo "<h3>Data stored in a database successfully.</h3>";

        echo nl2br("\n$name\n $phone\n ");
    } else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
    ?></div>
     <div class="wrapper">
<table id="customers">
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

$sql = "SELECT * FROM vw_candidate";
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
      </tr>';
  }
  //echo'<button type="submit" class="button" >'."Vote for".$row["candidate_id"]. '</button>';
} 
else {
  echo "0 results";
}
$conn->close();
?>
</table></div></div>
</center>
</body>

</html>
<?php