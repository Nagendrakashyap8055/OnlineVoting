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

$sql = "SELECT id, username, password FROM voters";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["username"]. " " . $row["password"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div id="topSpace"></div>
    <div class="wrapper">
        <h2>OTP VERIFICATION</h2>
        <p>Please fill in your Phone number for otp verification.</p>
        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control ">
              
            </div>
            <div class="form-group">
                <label>Phone number</label>
                <input type="text" name="phone" class="form-control ">
              
            </div>    
            <div class="form-group">
                <button type="submit" class="button" value="Login">Request otp</button>
            </div>
        </form>
    </div>
</body>
</html>