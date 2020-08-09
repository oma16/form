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
<div>
<form action="processform.php" method="post">
<div>
<label for="firstname">First Name:</label>
<input type="text" name="firstname" id=""> <br>
<?php if(isset($firstnameErr)){?>
<p class="error"> <?php echo $firstnameErr;?></p>
<?php }?>
</div>

<div>
<label for="secondname">Second Name:</label>
<input type="text" name="secondname" id=""> <br>
<?php if(isset($secondnameErr)){?>
<p class="error"> <?php echo $secondnameErr;?></p>
<?php }?>
</div>

<div>
<label for="email">Email:</label>
<input type="text" name="email" id=""> <br>

<?php if(isset($emailErr)){?>

<p class="error"> <?php echo $emailErr;?></p>

<?php }?>
</div>

<div>
<label for="date_of_birth">Date Of Birth:</label>
<input type="date" name="date_of_birth" id=""> <br>
<?php if(isset($date_of_birthErr)){?>

<p class="error"><?php echo $date_of_birthErr;?></p>
<?php }?>

</div>

<div>
<label for="favorite_color">Favorite Color:</label>
<input type="color" name="favorite_color" id=""><br>
<?php if(isset($favorite_colorErr)){?>

<p class="error"><?php echo $favorite_colorErr;?></p>
<?php }?>

</div>
<div>
<label for="gender">Gender:</label>
<input type="radio" name="gender" id="">Male
<input type="radio" name="gender" id="">Female
<input type="radio" name="gender" id="">Other <br>
<?php if(isset($genderErr)){?>


<p class="error"> <?php echo $genderErr;?></p>
<?php }?>

</div>

<div>
<label for="department">Department:</label>
<select name="department" id="">
<option value="select"> Please Select</option>
<option value="IT">IT</option>
<option value="HR">HR</option>
<option value="Marketing">Marketing</option>
<option value="Administrative">Administrative</option>

</select> <br>
<?php if(isset($departmentErr)){?>

<p class="error"> <?php echo $departmentErr;?></p>
<?php }?>

</div>



<div>
<label for="password">Password:</label>
<input type="password" name="password" id=""> <br>
<?php if(isset($passwordErr)){?>

<p class="error"> <?php echo $passwordErr;?></p>
<?php }?>

</div>


<div>

<input type="submit" value="Sign Up" name="btn" >

</div>

</form> 
</div>
</body>
</html>

