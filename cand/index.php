

<!DOCTYPE html>
<html lang="en">

<head>
    <title>CANDIDATE REGISTRATION</title>
</head>

<body>
<div id="topSpace"></div>
    <link rel="stylesheet" href="styles.css">
    <form action="test.php" method="post">
<div class="wrapper">
    <div class="form-group">
    <h2>CANDIDATE REGISTRATION</h2>
    <label>Candidate Id </label>
        <input type="text" placeholder="Candidate id must be of the format CAND001" name="cand_id" required >
        <label>Name</label>
        <input type="text" name="name" required >
        <label>Date of Birth</label><br>
        <input type="date" name="dob"  required><BR>
        <label>Gender</label>
        <input type="text" name="gender" required >
        <label>Party Name</label><br>
        <input type="text" name="party_name"  required>
        <label>Party Symbol</label><br>
        <input type="text" name="party_symbol"  required>
        <label>Phone Number</label>
        <input type="text" name="phone" required >
        <button  type="submit" class="button" value="Submit">REGISTER</button>
    </form>
</div>
</body>

</html>