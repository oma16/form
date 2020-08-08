
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
  </head>
  <body style = "background-color : <?php   
  if(isset($_POST['btn'])){
   $col = $_POST['favorite_color'];
   if(isset($col)) {
       echo $col;
   } else{
       echo "#ffffff";
   } 
  
  }
  
  
  ?>"  >
  <?php
 session_start();
 $firstnameErr = $secondnameErr = $emailErr = $date_of_birthErr = $favorite_colorErr = $genderErr = $departmentErr = $passwordErr = "";
 $firstname = $secondname = $email = $date_of_birth = $favorite_color = $gender  = $department = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["firstname"])) {
    $firstnameErr = "First Name is required";
  } else {
    $firstname = test_input($_POST["firstname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
      $firstnameErr = "Only letters and white space allowed";
    }
  echo $firstname . "<br>";

  if (empty($_POST["secondname"])) {
    $secondnameErr = " Second Name is required";
  } else {
    $secondname = test_input($_POST["secondname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$secondname)) {
      $secondnameErr = "Only letters and white space allowed";
    }
  
    } 
     echo $secondname . "<br>";
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
        $emailErr = "You Entered An Invalid Email Format"; 
    }
  }
  echo $email . "<br>";
  if (empty($_POST["date_of_birth"])) {
    $date_of_birthErr = "Date of Birth is required";
  } else {
    $date_of_birth = test_input($_POST["date_of_birth"]);
    
  }
  echo $date_of_birth . "<br>";

  if (empty($_POST["favorite_color"])) {
    $favorite_colorErr = "Favorite color is required";
  } else {
    $favorite_color = test_input($_POST["favorite_color"]);
  }
  echo $favorite_color . "<br>";
 
}

if (empty($_POST["gender"])) {
  $genderErr = "Gender is required";
} else {
  $gender = test_input($_POST["gender"]);
}
echo $gender . "<br>";

if (isset($_POST["department"]) && $_POST["department"] == '0') {
    echo "Please select a department". "<br>";
} else {
  $department = test_input($_POST["department"]);
}
echo $department . "<br>";

if(!empty($_POST["password"]) && ($_POST["password"])) {
    $password = test_input($_POST["password"]);
    
    if (strlen($_POST["password"]) <= '15') {
        $passwordErr = "Your Password Must Contain At Least 15 Characters!";
    }
    elseif(!preg_match("#[0-9]+#",$password)) {
        $passwordErr = "Your Password Must Contain At Least 1 Number!";
    }
    elseif(!preg_match("#[A-Z]+#",$password)) {
        $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
    }
    elseif(!preg_match("#[^\w]+#",$password)) {
        $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
    }
    elseif(!preg_match("#[a-z]+#",$password)) {
        $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
    }
}
 else {
     $passwordErr = "Please enter password ";
}
echo $password;
}
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

 ?>