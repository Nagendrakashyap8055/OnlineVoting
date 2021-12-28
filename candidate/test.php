
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
    $link = mysqli_connect("localhost", "root", "", "voting");
$name=$fname=$gender=$address=$city=$dob=$mobile=$voter_id=$partyname=$partysymbol=$email="";


    // Taking all 5 values from the form data(input)
    $name = $_REQUEST['name'];
    $dob = $_REQUEST['dob'];
    $fname = $_REQUEST['fname'];
    $voter_id = $_REQUEST['voter_id'];
    $address= $_REQUEST['address'];
    $city= $_REQUEST['address'];
    $mobile= $_REQUEST['mobile'];
    $partyname= $_REQUEST['partyname'];
    $partysymbol= $_REQUEST['partysymbol'];
    $email= $_REQUEST['email'];


    // Performing insert query execution
    // here our table name is college
    $sql = "INSERT INTO candidate   (Cname,Fname,Address,City,Mobile,Partyname,Partsymbol,Voterid,DateOfBirth,Email) VALUES ('$name','$fname','$address','$city','$mobile','$partyname','$partysymbol','$voter_id','$dob','$email')";

    if(mysqli_query($link, $sql)){
        echo "<h3>data stored in a database successfully."
            . " Please browse your localhost php my admin"
            . " to view the updated data</h3>";

        echo nl2br("\n$name\n $fname\n$partyname\n$city "
            . "\n$dob\n$voter_id\n$mobile\n$partysymbol\n $address\n $email");
    } else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($link);
    }

    // Close connection
    mysqli_close($link);
    ?>

</center>
</body>

</html>

