<!DOCTYPE html>
<html>
<body>
<?php
$nameErr = $passErr = "";
$n = $p = "";

if(isset ($_POST['Submit'])){
	$n = $_POST['name'];
	$p = $_POST['pass'];
	if(empty($n)){
		$nameErr = "Please Enter Your Name";
	}
	else{
		if(strlen($n)<2){
	     		$nameErr = "User Name should contains at least two characters";
	     }
	    else{
	     	if(!preg_match("/^[a-zA-Z0-9_]+([a-zA-Z0-9_]*[.-]?[a-zA-Z0-9_]*)*[a-zA-Z0-9_]+$/", $n)){
		$nameErr =" . User Name can contain alpha numeric characters, period, dash or underscore only. Please renter user name.";
	     	}
	     }
	}
	if(empty($p)){
		$passErr = "Please Enter Password";
	}
	
	else{
		if(!preg_match(	"/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/", $p)){
		$passErr =" Minimum eight characters, at least one letter, one number and one special character";
	     }
	}

}
	?>
<div class="container" style="width:600px;">  
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
 <fieldset>
  <legend>
   <b><h3> LOGIN </h3></b>
  </legend> 
    <label for="name"> User Name : </label>
	<input type="text" id="name" name="name">
    <span style="color: #FF0000">*<?php echo $nameErr?></span>
    <br> <br>
    <label for="pass"> Password : </label>
	<input type="text" id="pass" name="pass">
    <span style="color: #FF0000">*<?php echo $passErr?></span> <br>
    <span class="underline"> _______________________________________________________________ </span>
	<br> <br>
    <input type="checkbox" name="remember"> Remember Me
    <br> <br>
	<input type="submit" name="submit" value="Submit"> &nbsp
    <span> Forgot <a href="Task_3.2.php">Password?</a> </span>
	<br> <br>
 </fieldset>
</form>
</div>

<?php
   echo "<br>";
   echo $n; 
   echo "<br>" ;
   echo $p;
?>
</body>
</html>
