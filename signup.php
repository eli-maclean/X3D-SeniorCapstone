  <main>
    <!--Page Color and Header of the sign up page-->
    <body style="background-color:lightblue;">
      <center>
    <h1>Signup</h1>

    <?php
    //Checking for the error code inside the browser URL we added earlier from signup.inc.php. Then gives a message if one is there.
    //More error codes can be added here.
    if (isset($_GET['error'])){
      if ($_GET['error'] == "emptyfields"){
        echo '<p> Fill in all of the fields </p>';
      }
      else if ($_GET['error'] == "invaliduid"){
        echo '<p> Invalid Username </p>';
      }
    }
    ?>

    <!--Form for the user to insert signup data. -->
    <form action="includes/signup.inc.php" method="post">
      <input type="text" name="uid" placeholder="Username"><br/>
      <input type="text" name="mail" placeholder="E-mail"><br/>
      <input type="password" name="pwd" placeholder="Password"><br/>
      <input type="password" name="pwd-2" placeholder="Repeat Password"><br/>
      <button type="submit" name="signup">Signup</button>
    </form>
  </center>
</main>
