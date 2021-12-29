
<!DOCTYPE html>
<html lang="en">
<div id="topSpace"></div>
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
   
    <link rel="stylesheet" href="styles.css">
<div class="wrapper">
<h2>VOTER LOGIN</h2>
    <form name ="f1" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="form-group">
    <label> Name </label>
        <input type="text"  name="name" required >
        
        <label> Phone </label><br>
        <input type="text" name="phone"  required >
        <div class="form-group">
                
                <button type="submit" class="button">Log-in</button>
               
            </div>
        </div>
        </form>
    </div> 

</div>
</head>
</html>


