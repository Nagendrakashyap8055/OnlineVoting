<html>
<head>
<link rel="stylesheet" href="sweetalert2.min.css">
</head>
<div id="topSpace"></div>

<link rel="stylesheet" href="styles.css">   
<div class="wrapper">
    <center>
<?php
  //include("test.php");
$conn = mysqli_connect("localhost", "root", "", "voting"); 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}
$name=$phone=$cand="";
// Taking all 5 values from the form data(input)
$name = $_REQUEST['name'];
$phone = $_REQUEST['phone'];
$vote = $_REQUEST['vote'];

// Performing insert query execution
// here our table name is college
$sql = "INSERT INTO votes(name,phone,candidate_id) VALUES ('$name',$phone,'$vote')";
$sql2="SELECT * FROM voters WHERE phone =$phone";
$result = $conn->query($sql2);
if(strlen($phone)==10){


if($result->num_rows > 0){ 
    if(mysqli_query($conn, $sql)){
        
        echo "<h3>Data stored in a database successfully.</h3>";
        
        echo ("\n$name\n $phone\n$vote  ");
    } else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }
}
else{

echo "<h2>Voter not Registered \nPlease contact admin</h2>";
}
}
else{
    //echo "<script>alert('Invalid Phone number');</script>";
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Invalid Phone Number');
    window.location.href='test.php';
    </script>");
}
// Close connection
mysqli_close($conn);
?>
</div>
</center>