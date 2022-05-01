
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LOGIN</title>
    <script src="login.js"></script>
  <style>
  h3 {
  font-size: 25px;
  }
  i {
  font-size: 18px;
  }
  div {
  display: block;
  margin-bottom: auto;
  margin-left: auto;
  margin-right: auto;
  }
  legend {
	margin-left: 40%;
  }
  </style>
</head>

  <body>
  <?php include '../css/_header.php';?>  
  <br> <br> <br> <br>
  <div class="container" style="width:600px;">  
    <fieldset>
    <legend>
    <b><h3> LOGIN </h3></b>
    </legend> 
      <form  method="POST" action="../controllers/loginCheck.php" onsubmit="validateLogin(this)">
      <label for="username"> User Name : </label>
      <input type="text" id="username" name="username" size="20" 
      value="<?php if(isset($_COOKIE['username'])){echo $_COOKIE['username']; } ?>" >
      <br> <br>
      <label for="password"> Password : </label>
	    <input type="text" id="password" name="password" size="20"
      value="<?php if(isset($_COOKIE['password'])) {echo $_COOKIE['password'];} ?>" >
      <span class="underline"> _____________________________________________________________________ </span>
	    <br> <br>
      <input type="checkbox" name="remember" value=er> Remember Me
      <br> <br>
      <input type="submit" name="submit" value="Login">
      <span><a href="#">Forgot Password?</a></span>
	    <br> <br>
      </form>
    </fieldset>
    <br><br>
    <label> <i>New Here?</i> <u><a class="button" href="./register.php"> Register </a><u> </label>
    </div> <br> 
  <?php include '../css/_footer.php';?>  
  </body>
</html>

