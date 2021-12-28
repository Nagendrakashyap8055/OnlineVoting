<?php
session_start();
$link = mysqli_connect("localhost", "root", "","voting");
$name=$fname=$gender=$address=$city=$dob=$mobile=$voter_id=$partyname=$partysymbol=$email="";
$sql = "SELECT Slno FROM  WHERE Voter_id = ?";
if($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($stmt = mysqli_prepare($link, $sql)) {
        $name = trim($_REQUEST["name"]);
        $dob = trim($_REQUEST["Dob"]);
        $fname = trim($_REQUEST["fname"]);
        $voter_id = trim($_REQUEST["voter_id"]);
      $gender = trim($_REQUEST["gender"]);
        $address = trim($_REQUEST["address"]);
        $city = trim($_REQUEST["city"]);
        $mobile = trim($_REQUEST["mobile"]);
        $partyname = trim($_REQUEST["party_name"]);
        $partysymbol = trim($_REQUEST["party_symbol"]);
        $email = trim($_REQUEST["email"]);
        $sql = "INSERT INTO candidate (candidate_id,name,dob,gender,party_name,party_symbol,phone) VALUES ($cand_id,$name,$dob,$gender,$partyname,$partysymbol,$phone)";

        if (mysqli_stmt_execute($stmt)) {

            header("location: home.php");
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" href="styles.css">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div id="topSpace"></div>
<div class="wrapper">
<h2>Enter your details</h2>
<form>
    <div class="form-group">
    <label>Candidate Id </label>
        <input type="text" placeholder="Cand" name="cand_id" required >
        <label>Name</label>
        <input type="text" name="mobile" required >
        <label>Voter id</label><br>
        <input type="text" name="Voter_id"  required>
        
        <label>Party Name</label><br>
        <input type="text" name="party_name"  required>
        <label>Party Symbol</label><br>
        <input type="text" name="party_symbol"  required>
        <label>Email Id</label>
        <input type="text" name="email" required >
        
        <label>Father name</label>
        <input type="text" name="fname"  required>

        <label>Address</label>
        <input type="text" name="address" required >
        <label>City</label>
        <input type="text" name="city" required >
        <label>Date Of Birth</label><br>
        <input type="date" name="Dob"  required><br>
        <button type="submit" class="button">Submit</button>
        </div>
        </form>
    </div> 

<style>
.container1 {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.container1 input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}
.container1:hover input ~ .checkmark {
  background-color: #ccc;
}
.container1 input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}
.container1:hover input ~ .checkmark {
  background-color: #ccc;
}
.container1 input:checked ~ .checkmark {
  background-color: #2196F3;
}
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}
.container1 input:checked ~ .checkmark:after {
  display: block;
}
.container1 .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}
</style>

</html>