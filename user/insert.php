<?php
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


// Performing insert query execution
// here our table name is college
$sql = "INSERT INTO votes(name,phone,candidate_id) VALUES ('$name',$phone,'Cand001')";

if(mysqli_query($conn, $sql)){
    echo "<h3>Data stored in a database successfully.</h3>";

    echo nl2br("\n$name\n $phone\n$cand ");
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>