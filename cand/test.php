<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>
<div id="topSpace"></div>
<link rel="stylesheet" href="styles.css">
<body>
<center>
    <?php

    $conn = mysqli_connect("localhost", "root", "", "voting");

    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }

    // Taking all 5 values from the form data(input)
    $name=$fname=$gender=$address=$city=$dob=$mobile=$voter_id=$partyname=$partysymbol=$email="";


    // Taking all 5 values from the form data(input)
    $name = $_REQUEST['name'];
    $dob = $_REQUEST['dob'];

    $date = date_format(date_create($dob),"Y-m-d H:i:s");
    $cand_id = $_REQUEST['cand_id'];
    $gender=$_REQUEST['gender'];
    $phone= $_REQUEST['phone'];
    $partyname= $_REQUEST['party_name'];
    $partysymbol= $_REQUEST['party_symbol'];
      

    // Performing insert query execution
    // here our table name is college
    $sql = "INSERT INTO candidate (candidate_id,name,dob,gender,party_name,party_symbol,phone) VALUES ('$cand_id','$name','$date','$gender','$partyname','$partysymbol',$phone)";

    if(mysqli_query($conn, $sql)){
        echo "<h3>data stored in a database successfully."
            . " Please browse your localhost php my admin"
            . " to view the updated data</h3>";

        echo nl2br("\n$cand_id\n $name\n "
            . "$gender\n $phone");
    } else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
    ?>
</center>
</body>

</html>
<?php