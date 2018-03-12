<?php 
  include("includes/classes/Account.php");
    include("includes/classes/Constants.php");
  $account = new Account();


  include("includes/handlers/register-handler.php");
  include("includes/handlers/login-handler.php");

  function getInputValue($name) {
    if(isset($_POST[$name])) {
      echo $_POST[$name];
    }
  }
?>


<html>
<head>
  <title>Welcome to Register Page</title>
</head>
<body>
  <div id="inputContainer">
    <!-- LOGIN TO ACCOUNT -->
    <form id="loginForm" action="register.php" method="POST">
      <h2>Login to your account</h2>
      <p>
        <label for="loginUsername">Username</label>
        <input id="loginUsername" name="loginUsername" type="text" placeholder="your name" required>
      </p>
      <p>
        <label for="loginPassword">Password</label>
        <input id="loginPassword" name="loginPassword" type="password" placeholder="your password" required>
      </p>
      <button type="submit" name="loginButton">Log in</button>
    </form>


<!-- CREATE ACCOUNT -->
    <form id="registerForm" action="register.php" method="POST">
      <h2>Create your free account</h2>
      <p>
        <?php echo $account->getError(Constants::$usernameCharacters); ?>
        <label for="registerUsername">Username</label>
        <input id="registerUsername" name="registerUsername" type="text" placeholder="wolfenstein123" value="<?php getInputValue('registerUsername') ?>" required>
      </p>
      <p>
        <?php echo $account->getError(Constants::$firstNameCharacters); ?>
        <label for="firstName">First Name</label>
        <input id="firstName" name="firstName" type="text" placeholder="your first name" value="<?php getInputValue('firstName') ?>" required>
      </p>
      <p>
        <?php echo $account->getError(Constants::$lastNameCharacters); ?>
        <label for="lastName">Last Name</label>
        <input id="lastName" name="lastName" type="text" placeholder="your last name" value="<?php getInputValue('lastName') ?>" required>
      </p>
      <p>
        <?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
        <?php echo $account->getError(Constants::$emailInvlaid); ?>
        <label for="email">Email</label>
        <input id="email" name="email" type="email" placeholder="bob@example.com" value="<?php getInputValue('email') ?>" required>
      </p>
      <p>
        <label for="email2">Confirm Email</label>
        <input id="email2" name="email2" type="email" placeholder="bob@example.com" value="<?php getInputValue('email2') ?>"required>
      </p>
      <p>
        <?php echo $account->getError(Constants::$passwordsDoNotMatch); ?>
        <?php echo $account->getError(Constants::$passwordsNotAlphanumeric); ?>
        <?php echo $account->getError(Constants::$passwordsDoNotMatch); ?>

        <label for="password">Password</label>
        <input id="password" name="password" type="password" placeholder="your password" required>
      </p>
      <p>
        <label for="password2">Confirm Password</label>
        <input id="password2" name="password2" type="password" placeholder="retype your password" required>
      </p>
      <button type="submit" name="registerButton">Create Account!</button>
    </form>
  </div>
</body>
</html>