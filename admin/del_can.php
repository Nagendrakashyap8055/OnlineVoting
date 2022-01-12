<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>
<div id="topSpace"></div>
<link rel="stylesheet" href="styles.css">
<body><div class="wrapper">
<center>
    <?php

    $conn = mysqli_connect("localhost", "root", "", "voting");

    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }



    // Taking all 5 values from the form data(input)
    $cand = $_REQUEST['candidate_id'];
      

    // Performing insert query execution
    // here our table name is college
    $sql = "delete from candidate where candidate_id='$cand';";

    if(mysqli_query($conn, $sql)){
        echo "<h3>data deleted from database successfully.<h3>";

        echo nl2br("$name\n  $phone");
    } else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
    ?>
    <div><a href="adm_welcome.php"><button type="submit" class="button">Back</button></a></div>
</center>
</div>
</body>

</html>
<?php