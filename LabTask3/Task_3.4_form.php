<!DOCTYPE html>  
<html>  
<body>   
<div class="container" style="width:400px;">  
<form action="Task_3.4_store.php" method="post" enctype="multipart/form-data">                      

<?php   
  if(isset($error))  
  {  
    echo $error;  
  }  
?>  

<fieldset>
    <legend> <b><h3> REGISTRATION </h3></b>
	</legend>  
    <label for="name"> Name &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : </label>  
    <input type="text" name="name" class="form-control"> <br>  
	<span class="underline"> _____________________________________________ </span> <br><br>	
	<label for="email"> E-mail &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : </label>
	<input type="text" name="email" class="form-control"> <br>
	<span class="underline"> _____________________________________________ </span> <br><br>	
	<label for="un"> User Name &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : </label>
	<input type="text" name="un" class="form-control"> <br>
	<span class="underline"> _____________________________________________ </span> <br><br>	
	<label for="pass"> Password &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : </label>
	<input type="password" name="pass" class="form-control"> <br>
	<span class="underline"> _____________________________________________ </span> <br><br>	
	<label for="Cpass"> Confirm Password &nbsp : </label>
	<input type="password" name="Cpass" class="form-control"> <br>
	<span class="underline"> _____________________________________________ </span> <br><br>	
	<fieldset>
	<legend> Gender </legend>
	   <input type="radio" name="gender" value="male"> Male                 
	   <input type="radio" name="gender" value="female"> Female
	   <input type="radio" name="gender" value="other"> Other
	</fieldset>
    <span class="underline"> _____________________________________________ </span> <br><br>	
	<fieldset>
	<legend> Date of Birth </legend>
	   <input type="date" name="dob"><br>
    </fieldset> 
	<span class="underline"> _____________________________________________ </span> <br><br>	
	<input type="submit" name="submit" value="Submit">
    <input type="reset" name="reset" value="Reset">	
	<br> <br> 
</fieldset>	
	
<?php 
  if(isset($message))  
  {  
    echo $message;  
  }  
?>  

</form>  
</div>  
</body>  
</html>  