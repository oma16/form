<?php
$firstnameErr = $secondnameErr = $emailErr = $date_of_birthErr = $favorite_colorErr = $genderErr = $departmentErr = $passwordErr = "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body style = "background color = <?php   
if(isset($_POST['btn'])){
 $col = $_POST['favorite_color'];
 if(isset($col)) {
     echo $col;
 } else{
     echo "#ffffff";
 } 

}


?>"  >
<h2>Please enter your Details</h2>
<form action="processform.php" method="post">
<div>
<label for="firstname">First Name:</label>
<input type="text" name="firstname" id="">
<span class="error">* <?php echo $firstnameErr;?></span>
</div>

<div>
<label for="secondname">Second Name:</label>
<input type="text" name="secondname" id="">
<span class="error">* <?php echo $secondnameErr;?></span>

</div>

<div>
<label for="email">Email:</label>
<input type="text" name="email" id="">
<span class="error">* <?php echo $emailErr;?></span>
</div>

<div>
<label for="date_of_birth">Date Of Birth:</label>
<input type="date" name="date_of_birth" id="">
<span class="error">* <?php echo $date_of_birthErr;?></span>
</div>

<div>
<label for="favorite_color">Favorite Color:</label>
<input type="color" name="favorite_color" id="">
<span class="error">* <?php echo $favorite_colorErr;?></span>
</div>
<div>
<label for="gender">Gender:</label>
<input type="radio" name="gender" id="">Male
<input type="radio" name="gender" id="">Female
<input type="radio" name="gender" id="">Other
<span class="error">* <?php echo $genderErr;?></span>
</div>

<div>
<label for="department">Department:</label>
<select name="department" id="">
<option value="select"> Please Select</option>
<option value="IT">IT</option>
<option value="HR">HR</option>
<option value="Marketing">Marketing</option>
<option value="Administrative">Administrative</option>

</select>
<span class="error">* <?php echo $departmentErr;?></span>
</div>

<div>
<label for="password">Password</label>
<input type="password" name="password" id="">
<span class="error">* <?php echo $passwordErr;?></span>
</div>


<div>

<input type="submit" value="Sign Up" name="btn" >

</div>

</form> 
</body>
</html>

