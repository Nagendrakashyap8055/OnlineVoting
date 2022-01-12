<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
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
    $name=$phone="";


    // Taking all 5 values from the form data(input)
    $name = $_REQUEST['name'];
    $phone= $_REQUEST['phone'];
      

    // Performing insert query execution
    // here our table name is college
    $sql = "INSERT INTO voters (name,phone) VALUES ('$name',$phone)";

    if(mysqli_query($conn, $sql)){
        echo "<h3>data stored in a database successfully."
            . " Please browse your localhost php my admin"
            . " to view the updated data</h3>";

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