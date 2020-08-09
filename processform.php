
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
  
  
  ?>"  
  <?php
 session_start();
  ini_set('display_error',1);
  ini_set('display_startup_error',1);
   error_reporting(E_ALL);
 $firstnameErr = $secondnameErr = $emailErr = $date_of_birthErr = $favorite_colorErr = $genderErr = $departmentErr = $passwordErr = "";
 $firstname = $secondname = $email = $date_of_birth = $favorite_color = $gender  = $department = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
     if (empty($_POST["firstname"])) {
    header("location:index.php");
    $firstnameErr = " First Name is required";
  } else {
    $firstname = test_input($_POST["firstname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
        header("location:index.php");
        $firstnameErr = "Only letters and white space allowed";
    }
       echo "First Name : " .$firstname . "<br>";
    } 
     echo "First Name : " . $firstname . "<br>";
 
     if (empty($_POST["secondname"])) {
    header("location:index.php");
    $secondnameErr = "Second Name is required";
  } else {
    $secondname = test_input($_POST["secondname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$secondname)) {
        header("location:index.php");
        $secondnameErr = "Only letters and white space allowed";
    }
  
    } 
     echo "Second Name : " . $secondname . "<br>";
  
     if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    header("location:index.php");
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
        header("location:index.php");
        $emailErr = "You Entered An Invalid Email Format"; 
    }
  }
  echo "Email : " . $email . "<br>";
  
  if (empty($_POST["date_of_birth"])) {
    header("location:index.php");
    $date_of_birthErr = "Date of Birth is required";
  } else {
    $date_of_birth = test_input($_POST["date_of_birth"]);
    if(date("o-m-d") <= $date_of_birth ){
        header("location:index.php");
        $date_of_birthErr ="invalid date of birth";
    }
  }
  echo "Date of Birth : " . $date_of_birth . "<br>";

  if (empty($_POST["favorite_color"])) {
    header("location:index.php");
    $favorite_colorErr = "Favorite color is required";
  } else {
    $favorite_color = test_input($_POST["favorite_color"]);
  }
  echo "Favorite color : " . $favorite_color . "<br>";
 
}

if (empty($_POST["gender"])) {
    header("location:index.php");
    $genderErr = "Gender is required";
} else {
  $gender = test_input($_POST["gender"]);
}
echo "Gender : " . $gender . "<br>";

if (isset($_POST["department"]) && $_POST["department"] == '0') {
    header("location:index.php");
    echo "Please select a department". "<br>";
} else {
  $department = test_input($_POST["department"]);
}
echo "Department : " . $department . "<br>";

if(!empty($_POST["password"]) && ($_POST["password"])) {
    $password = test_input($_POST["password"]);
    
    if (strlen($_POST["password"]) <= '15') {
        $passwordErr = "Your Password Must Contain At Least 15 Characters!";
        header("location:index.php");
    }
    elseif(!preg_match("#[0-9]+#",$password)) {
        $passwordErr = "Your Password Must Contain At Least 1 Number!";
        header("location:index.php");
    }
    elseif(!preg_match("#[A-Z]+#",$password)) {
        $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
        header("location:index.php");
    }
    elseif(!preg_match("#[^\w]+#",$password)) {
        $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
        header("location:index.php");
    }
    elseif(!preg_match("#[a-z]+#",$password)) {
        $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
        header("location:index.php");
    }
}
 else {
     $passwordErr = "Please enter password ";
     header("location:index.php");
    }
    
 echo "Password : " ;
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

 ?>
 