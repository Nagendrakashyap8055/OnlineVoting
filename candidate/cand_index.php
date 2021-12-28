<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>


    <link rel="stylesheet" href="styles.css">
    <div id="topSpace"></div>
    <div class="wrapper">
    <form action="cand_register.php" method="post">

        <h2>Candidate Registration</h2>
        <p>
            <label for="name" class="attri">Name</label>
            <input type="text" name="name" id="name">
        </p>





        <p>
            <label for="fname" class="attri">Father Name</label>
            <input type="text" name="fname" id="fname">
        </p>
        <label>Date Of Birth</label><br>
        <input type="date" name="Dob"  required><br>
        <p>
            <label for="candidate_id"class="attri">Candidate id</label>
            <input type="text" name="candidate_id" id="candidate_id">
        </p>



        <p>
            <label for="Gender"class="attri">Gender:</label>
            <input type="text" name="gender" id="Gender">
        </p>





        <p>
            <label for="Address"class="attri">Address</label>
            <input type="text" name="address" id="Address">
        </p>
        <p>
            <label for="city"class="attri">City</label>
            <input type="text" name="city" id="city">
        </p>

        <p>
            <label for="emailAddress"class="attri">Email Address:</label>
            <input type="text" name="email" id="emailAddress">
        </p>
        <p>
            <label for="mobile"class="attri">Mobile</label>
            <input type="text" name="mobile" id="mobile">
        </p>
        <p>
            <label for="voter_id"class="attri">Voter id</label>
            <input type="text" name="voter_id" id="voter_id">
        </p>

        <p>
            <label for="partyname"class="attri">Party name</label>
            <input type="text" name="partyname" id="partyname">
        </p>
        <p>
            <label for="partysymbol"class="attri">Party symbol</label>
            <input type="text" name="partysymbol" id="partysymbol">
        </p>


<!---->
<?php
//        $from = new DateTime('1970-02-01');
//        $to   = new DateTime('today');
//        echo $from->diff($to)->y;?>
        <button type="submit" class="button" value="Submit">Submit</button>
    </form>
    </div>

</body>

</html>