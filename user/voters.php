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

$sql = "SELECT slno, name, phone FROM voters";
$result = $conn->query($sql);
$myusername = mysqli_real_escape_string($dbname,$_POST['name']);
$mypassword = mysqli_real_escape_string($dbname,$_POST['phone']); 

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  
          if($row["name"]==$name){
              // Password is correct, so start a new session
              session_start();
              
              // Store data in session variables
              $_SESSION["loggedin"] = true;
              $_SESSION["id"] = $id;
              $_SESSION["username"] = $username;                            
              
              // Redirect user to welcome page
              header("location: adm_welcome.php");
          } else{
              // Password is not valid, display a generic error message
              $login_err = "Invalid password.";
          }
      }
  } 
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<div id="topSpace"></div>
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
   
    <link rel="stylesheet" href="styles.css">
<div class="wrapper">
<h2>VOTER LOGIN</h2>
    <form name ="f1" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="form-group">
    <label> Name </label>
        <input type="text"  name="name" required value="<?php echo $name; ?>">
        
        <label> Phone </label><br>
        <input type="text" name="phone"  required value="<?php echo $phone; ?>">
        <div class="form-group">
                
                <button type="submit" class="button">Log-in</button>
               
            </div>
        </div>
        </form>
    </div> 

</div>
<script>
 var id=document.f1.name.value;  
 var ps=document.f1.phone.value;  

</script>

</head>
</html>


