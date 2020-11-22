<?php
//isset() checks to see if a variable is in the set. AKA been declared and not is_null
//$_POST Super global variable that collects form data after submitting HTML form. Passes Variables.
if (isset($_POST['signup'])){

  //links database to this page
  require 'dbh.inc.php';

  //require dbcontroller.php;
  //$db_handle = new DBController();

  //Creates variables with user data obtained from the signup.php form.
  $username = $_POST['uid'];
  $email = $_POST['mail'];
  $password = $_POST['pwd'];
  $passwordRepeat = $_POST['pwd-2'];

  //Below is basic error checking methods for when the user is trying to sign up
  //if the username, or email, or password is empty...
  if(empty($username) || empty($email) || empty($password) || empty($passwordRepeat)){
    //Then return user back to the sign in page and carry the inputted username/email back to URL in the browser
    header("Location: ../signup.php?error=emptyfields&uid=".$username."&mail=".$email);
    //exit method stops script from running
    exit();
  }

  //(((This error check currently does not work and I'm not sure why. Left in for future attempts.)))
  //Checking to see if the email is valid. FILTER_VALIDATE_EMAIL does this automatically.
  else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    header("Location: ../signup.php?error=invalidmail&uid=".$username);
    exit();
  }


  //Checks to see if username is valid
  //Checks and only allows characters a-z, A-Z, and 0-9 for the username
  else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
    header("Location: ../signup.php?error=invaliduid&mail=".$email);
    exit();
  }

  //If password isnt the same in both form boxes, error checking.
  else if ($password !== $passwordRepeat){
    header("Location: ../signup.php?error=passwordcheck&uid=".$username."&mail=".$email);
    exit();
  }

  //Checks if the username is already taken
  else {
    // Simple SQL code. The "?" is a placeholder for safety as otherwise the website would be prone to an SQL injection attack
    $sql = "SELECT uidUsers FROM users WHERE uidUsers=?";
    // $conn is from dbh.in.php. This initilizes the statement
    $stmt = mysqli_stmt_init($conn);
    //Checking to see if the sql connection failed - more error checking
    if (!mysqli_stmt_prepare($stmt, $sql)){
      header("Location: ../signup.php?error=sqlerror");
      exit();
    } else {
      //Bounds the parameters to the database and excutes the input into the database
      //"s" means its passing a string.
      mysqli_stmt_bind_param($stmt, "s", $username);
      mysqli_stmt_execute($stmt);
      //Takes result from database and stores it back into the $stmt variable.
      mysqli_stmt_store_result($stmt);
      //Checking how many rows of results were gotten from the database
      $resultCheck = mysqli_stmt_num_rows($stmt);

      //Checking to see if their is one or more of the inputted username already in the database
      //Is the username was already in the database, it returns the user to the sign up page.
      if($resultCheck > 0) {
        header("Location: ../signup.php?error=usertaken&mail=".$email);
        exit();
      }
      //End of user input error checking. Now we take the userinput and pass it into the SQL database
      else {
        $sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES (?, ?, ?)";
        //Checking to see if $sql and $stmt are working together. Again, "?" = placeholders
        //Next couple lines all copied and pasted from earlier. No new comments.
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)){
          header("Location: ../signup.php?error=sqlerror");
          exit();
      }
      else {
        //Essentially hiding password before passing it into the database for security reasons. The password will be hashed in the database.
        //Hashes with the bcrypt algorithm which is apparently the default php hash as of PHP 5.5.0.
        //https://www.php.net/manual/en/function.password-hash.php for info on its use.
        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);


        //Three "s" this time as its 3 string parameters.
        mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
        mysqli_stmt_execute($stmt);
        header("Location: ../feedback.php?success");
        exit();
      }

    }

  }

}
//Closes off the statements & closes connection to database.
mysqli_stmt_close($stmt);
mysli_close($conn);
}
//Sends user back to sign up page incase they somehow got here some other way
else{
  header("Location: ../feedback.php?unsuccessful");
  exit();
}
