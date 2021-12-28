<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
<center>
    <?php

    // servername => localhost
    // username => root
    // password => empty
    // database name => voting
    $conn = mysqli_connect("localhost", "root", "", "voting");

    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }

    // Taking all 5 values from the form data(input)
    $name = $_REQUEST['name'];
    $fname = $_REQUEST['fname'];
    $gender = $_REQUEST['gender'];
    $address = $_REQUEST['address'];
    $email = $_REQUEST['email'];
    $voter_id = $_REQUEST['voter_id'];
    $partyname = $_REQUEST['partyname'];
    $partysymbol = $_REQUEST['partysymbol'];
    $candidate_id=$_REQUEST['candidate_id'];
    $mobile=$_REQUEST['mobile'];

    // Performing insert query execution
    // here our table name is college
    # object oriented


    $sql = "INSERT INTO candidate VALUES ('$name','$fname','$gender','$address','$email','$voter_id','$partyname','$partysymbol','$candidate_id','$mobile')";

    if(mysqli_query($conn, $sql)){
        header("location:home.php");
//        echo "<h3>data stored in a database successfully."
//            . " Please browse your localhost php my admin"
//            . " to view the updated data</h3>";
//
//        echo nl2br("\n$name\n $fname\n "
//            . "$gender\n $address\n $email\n$voter_id");
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
