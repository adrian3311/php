<?php echo "Tu bude registracny script"
//Todo: skontrolovat d su vsetky policka zadane
//Todo: skontrolovat a je heslo rovnake
//Todo: skontrolovat biele znaky (white spaces, trim, sql-injection)
//Todo: Pokusit sa pridat do databazy

// initializing variables
$email    = "";
$psw =  ""; 
$psw_repeat =  ""; 
$errors = array(); 

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $psw = mysqli_real_escape_string($db, $_POST['password_1']);
  $psw_repeat = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($psw)) { array_push($errors, "Password is required"); }
  if ($psw != $psw_repeat) {
	array_push($errors, "The two passwords do not match");
  }

  // connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'registration');

  // first check the database to make sure 
  // a user does not already exist with the same password and/or email
  $user_check_query = "SELECT * FROM users WHERE password='$psw' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['password'] === $psw) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$psw = md5($psw);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (email, password) 
  			  VALUES('$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}

?>