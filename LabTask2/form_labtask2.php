<!DOCTYPE html>
<html>
<body>

<?php
   $nam = $eml = $dob = $gen = $deg = $bgr = "";
   $nameEr = $emailEr = $dobEr = $genderEr = $degreeEr = $bloodEr = "";
   
   if($_SERVER["REQUEST_METHOD"] == "POST") 
   {
       $nam = test_input($_POST["name"]);
	   $eml = test_input($_POST["email"]); 
	   $dob = test_input($_POST["dob"]);
	   $gen = test_input($_POST["gender"]);
       $deg = test_input($_POST["degree"]);
	   $bgr = test_input($_POST["bloodgroup"]);   
	   
	if(empty($nam))
	{
		$nameEr = "[!] Please fill out your name.";
	}
	else {if(str_word_count($name)<2)
		  {
	       $nameEr = "Contains at least two words. Please re-enter your name. ";
	       $nam = "";
	      }
	      else {if(!preg_match("/^[a-zA-Z-]*$/", $nam))
	      {
		   $nameEr =" Can contain a-z, A-Z, period, dash only. 
		              Please re-enter your name.";
		   $nam = "";
	      } 
	     }
	    }
	if(empty($eml))
	{
		$emailEr = "[!] Please fill out your email.";
	}
	else {if(!preg_match("/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,4})$/", $eml))
	      {
		   $emailEr = "Invalid Email. Please re-enter your email.";
		   $eml = "";
	      }
	    }
	if(empty($dob))
	{
		$dobEr = "Please select your date of birth.";
	}
	else {if($dob< 1953-01-01 && $dob> 1998-12-31)
	      {
           $dobEr = "Please re-enter your date of birth."; 
		  }
	    }
	if(empty($gen))
	{
	    $genderEr = "Please select your gender.";
	}
	if(count($deg)<2)
	{ 
        $degreeEr = "Please select at least two of them.";
 	}
 	if(empty($bgr))
	{
		$bloodEr = "Please select your blood group.";
	}
   } 
   
  function test_input($data) 
  {
	 $data = trim($data);
	 $data = stripslashes($data);
	 $data = htmlspecialchars($data);
	 return $data;
  }  
?>

<form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
 <fieldset>
  <legend>
   <b>NAME</b>
   <label style="color:#FF0000">*</label>
  </legend> 
  <br>
  <label for="name"></label>
  <input type="text" id="name" name="name" value="<?php echo $nam;?>">
  <span><?php echo $nameEr?></span>
  <br><br>
 </fieldset>  
 <br>
 <fieldset>
  <legend>
   <b>EMAIL</b>
   <label style="color:#FF0000">*</label>
  </legend>
  <br>
  <label for="email"></label>
  <input type="text" id="email" name="email" value="<?php echo $eml;?>">
  <span><?php echo $emailEr?></span>
  <br><br>
 </fieldset>
 <br>
 <fieldset>
  <legend>
   <b>DATE OF BIRTH</b>
   <label style="color:#FF0000">*</label>
  </legend>
  <br>
  <label for="dob"></label>
  <input type="date" id="dob" name="dob" value="<?php echo $dob;?>">
  <span><?php echo $dobEr?></span>
  <br><br>
 </fieldset>
 <br>
 <fieldset>
  <legend>
   <b>GENDER</b>
   <label style="color:#FF0000">*</label>
  </legend>
  <br>
  <label for="gender"></label>
  <input type="radio" name="gender" <?php if(isset($gen) && $gen=="male") echo "checked";?> value="male"> Male
  <input type="radio" name="gender" <?php if(isset($gen) && $gen=="female") echo "checked";?> value="female"> Female
  <input type="radio" name="gender" <?php if(isset($gen) && $gen=="other") echo "checked";?> value="other"> Other
  <span><?php echo $genderEr?></span>
  <br><br>
 </fieldset>
 <br>
 <fieldset>
  <legend>
   <b>DEGREE</b>
   <label style="color:#FF0000">*</label>
  </legend>
  <br>
  <label for="degree"></label>
  <input type="checkbox" name="degree" <?php if(isset($deg) && $deg=="ssc") echo "checked";?> value="ssc"> SSC
  <input type="checkbox" name="degree" <?php if(isset($deg) && $deg=="hsc") echo "checked";?> value="hsc"> HSC
  <input type="checkbox" name="degree" <?php if(isset($deg) && $deg=="bsc") echo "checked";?> value="bsc"> BSc
  <input type="checkbox" name="degree" <?php if(isset($deg) && $deg=="msc") echo "checked";?> value="msc"> MSc
  <span><?php echo $degreeEr?></span>
  <br><br>
 </fieldset>
 <br>
 <fieldset>
  <legend>
   <b>BLOOD GROUP</b>
   <label style="color:#FF0000">*</label>
  </legend>
  <br>    
  <label for="bloodgroup"></label>
  <select name="dropdown" name="bloodgroup" <?php if(isset($bgr)) echo "checked";?>> 
               <option selected disabled></option>
               <option>A+</option>
			   <option>A-</option>
			   <option>B+</option>
			   <option>B-</option>
			   <option>AB+</option>
			   <option>AB-</option>
			   <option>O+</option>
			   <option>O-</option>
  </select>
  <span><?php echo $bloodEr?></span>
  <br><br>
  <input type="submit" value="Submit" style="float:right"> 
 </fieldset>
</form> <br>

<?php
 if(isset($_POST['submit'])) 
 {  
    echo "<h3><b> Your Input : </b></h3>";
	echo "<br>";
	echo $nam;  
	echo "<br>";
	echo $eml;
	echo "<br>";
	echo $dob;
	echo "<br>";
	echo $gen;
	echo "<br>";
	foreach ($deg as $key => $value) 
	  {echo $value . " ";} 
	echo "<br>";
	echo $bgr;
	echo "<br>";
 }
?>

</body>
</html>
