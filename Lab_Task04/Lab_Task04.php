<?php

$name="";
$err_name=" ";
$uname="";
$err_uname=" ";
$pass="";
$cpass="";
$err_cpass="";
$err_pass="";
$bio="";
$err_bio="";
$gender="";
$err_gender="";
$email="";
$err_email="";
$about_us="";
$err_aboutus="";
$pcode="";

$address="";
$err_address="";
$pnumber="";
$err_pnumber="";
$street="";
$err_street="";
$city="";
$err_city="";
$state="";
$err_state="";
$zip="";
$err_zip="";
$day="";
$month="";
$year="";






if($_SERVER["REQUEST_METHOD"]=="POST"){
   //if(isset($_POST["submit"])){
    
	 if(empty($_POST["name"])){
		$err_name="Name Required";
		}
		
		elseif(htmlspecialchars($_POST["name"]))
		 {
			 $err_name="HTML KeyWords Used";
		 }
		else{
			 $name=$_POST["name"];
		}
       
	   	if(empty($_POST["uname"]))
		{
			
		    $err_uname="Username Required";
		}
		elseif(htmlspecialchars($_POST["uname"]))
		 {
			 $err_uname="HTML KeyWords Used";
		 }
		elseif(strlen($_POST["uname"])<6)
		 {
			 $err_uname="Username must be 6 charachters long";
		 }
		 elseif(strpos($_POST["uname"]," "))
		 {
			 $err_uname="Username should not contain white space";
		 }
		else
		 {
			 $uname=$_POST["uname"];
		 }
			
		  
		  if(empty($_POST["pass"]))
		 {
			 $err_pass="[Password Required]";
		 }
		 elseif(strlen($_POST["pass"])<=8)
		 {
			 $err_pass="Password should 8 contain character";
		 } 
		 elseif(!preg_match("#[0-9]+#",$pass)) 
		 {
          $err_pass = "Your Password Must Contain At Least 1 Number!";
		 }
		 elseif(!preg_match("#[A-Z]+#",$pass)) 
		 {
			 
           $err_pass = "Your Password Must Contain At Least 1 Capital Letter!";
        }
		elseif(!preg_match("#[a-z]+#",$pass)) 
		{
           $err_pass = "Your Password Must Contain At Least 1 Lowercase Letter!";
		}
    
		 
		 elseif(strpos($_POST["pass"]," "))
		 {
			 $err_pass="[Password should not contain white space]";
		 }
	
		 else
		 {
			$pass=$_POST["pass"];
		 }
		 
		 if(empty($_POST["cpass"]))
		 {
			 $err_cpass="[ Confirm Password Required]";
		 }
		 elseif($cpass ==$pass)
		 {
			 $pass = $_POST["cpass"];
		 }
		 else{
			  $err_cpass = "Password does not match.";
		 }
		 
		   if(empty($_POST["email"]))
		 {
			 $err_email="  [ Email Required]";
		 }
		   
		 elseif(!strpos($_POST["email"],"@") )
			 {
				 $err_email=["Valid Email needed"];
			 }
		 else{
				 
				$email = $_POST["email"]; 
			}
			 
			 
		if(empty($_POST["code"]))
		{
			$err_pnumber = "Code Required";
		}
		elseif(!is_numeric($pcode))
		{
			
			$pcode = $_POST["code"];
		}
		else
		{
			$err_pnumber= "MUST CONTAIN ONLY NUMERIC VALUES!!";
			
		}
		
		  if(empty($_POST["phone"]))
		{
			$err_pnumber = "Number Required";
		}
		elseif(!is_numeric($pnumber))
		{
			
			  $pnumber = $_POST["phone"];
		}
		else
		{ 
	           $err_pnumber = "MUST CONTAIN ONLY NUMERIC VALUES!!";
	            
	         
			
		}
		if(empty($_POST["s_add"]))
		{
			$err_street = "Street Required";
		}
		else
		{
			$street = $_POST["s_add"];
		}
		if(empty($_POST["city"]))
		{
			$err_city = "City Required";
		}
		else
		{
			$city = $_POST["city"];
		}
		if(empty($_POST["state"]))
		{
			$err_state = "State Required";
		}
		else
		{
			$state = $_POST["state"];
		}
		if(empty($_POST["zip"]))
		{
			$err_zip = "Zip/Postal Code Required";
		}
		else
		{
			$zip = $_POST["zip"];
		}
		
		 
	    if(!isset($_POST["gender"])){
		   $err_gender="     [Please select a gender]";
	   }
	     else {
	        $gender=$_POST["gender"];
	      }

		   if (!isset($_POST["about_us"])){
		     $err_aboutus=" [At least one option must be selected]";
	     }
	    elseif(count($_POST["about_us"])<1)
		 {
			 $err_aboutus=" [At least one option must be selected]";
		 }
	    else{
	       $about_us=$_POST["about_us"];
	    }
		
		if(empty($_POST["bio"])){
		$err_bio=" [Bio Required]";
	    }
	   else{
		   echo htmlspecialchars($bio=$_POST["bio"]);
	     }
		
		 
   
   
        echo "Name: ". $_POST["name"]."<br>";
		echo "User Name: ". $_POST["uname"]."<br>";
		echo "Password: ".   $_POST["pass"]."<br>";
		echo "Confirmed Password: ". $_POST["cpass"]."<br>";
		echo "Email: ". $_POST["email"]."<br>";
        echo "Number: ". $_POST["phone"]."<br>";
		echo "Post Code: ". $_POST["zip"]."<br>";
		
		echo "Address: ". $_POST["street"].  $_POST["city"].  $_POST["state"].  $_POST["zip"]. "<br>";
		echo "Gender: ". $gender."<br>";
		echo "Date of Birth: ". $day,  $month, $year."<br>";
		echo "Bio: ". $_POST["bio"]."<br>";
		
		 
		$var = $about_us;
		echo "Where did you hear about us?: ";
		if (is_array($var)) {
			for($i=0; $i<count($var); $i++)
			{
				echo $var[$i]. ", ";
			}
		}else{
			echo $var;
		}
		  
   

}

?>

<html>
   <head></head>
       <Body>
           <fieldset>
                <legend>Club Member Registration</legend>
               <form action=" " method="post">
			   <table>
			        <tr>
					
                    <td><span>Name:</span></td>
					<td><input type="text" name="name" value="<?php echo $name;?>"  >
					<span><?php echo $err_name;?></span></td>
				</tr>
				<tr>
					<td><span >Username:</span></td>
					<td><input type="text" name="uname" value="<?php echo $uname;?>"  >
					<span><?php echo $err_uname;?></span></td>
				</tr>
				
				
				<tr>
					<td><span>Password:</span></td>
					<td><input type="text" name="pass" value="<?php echo $pass;?>"  >
					<span><?php echo $err_pass;?></span></td>
				</tr>
				
				<tr>
					<td><span> Confirm Password</span></td>
					<td>:<input type="text" name="cpass" value="<?php echo $cpass;?>"  >
					<span><?php echo $err_cpass;?></span></td>
				</tr>
				
				<tr>
					<td><span>Email:</span></td>
					<td><input type="text" name="email"  value ="<?php echo $email;?>"
					<span><?php echo $err_email ;?></span></td>
				</tr>
				
				  <tr>
				     <td><span>Phone:</span></td>
					  <td><input type ="text"  name="code" size ="3" value="<?php echo $pcode; ?>" placeholder="Code">  -  <input type ="text"  name="phone" size ="9" value="<?php echo $pnumber; ?>" placeholder="Number">
					  
					   <span><?php echo $err_pnumber;?></span></td>
					   
					</tr>
					
				<tr>
				
					<td><span>Address:</span></td>
					
					<td><input type="text" name="street" placeholder = "Street Address" value = "<?php echo $street;?>"><br>
					<td><span><?php echo $err_street;?></span></td>
				
				<tr>
				    <td> </td>
					<td><input type="text" name="city" size = "6" value = "<?php echo $city;?>" placeholder = "City"> - <input type="text" name="state" size = "6" value = "<?php echo $state;?>" placeholder = "State"><br>
					<td><span><?php echo $err_city;?></span></td>
					<td><span><?php echo $err_state;?></span></td>
				
				<tr>
					<td></td>
					<td><input type="text" name="zip" placeholder = "Postal/Zip Code" value = "<?php echo $zip;?>"><br>
					<td><span><?php echo $err_zip;?></span></td>
					</tr>
					</tr>
					</tr>
					  
					  
				
					  
					<tr>  
					  
				<td><span>Birth Date:</span></td>
				
				<td>
				<select name="day">
					<option disabled selected>Day</option>
					<?php
						for($i=1;$i<=31;$i++)
						{
							echo "<option>$i</option>";
						}
					?>
					</select>
					<select name="month">
					<option disabled selected>Month</option>
					<?php
						$mon= array("January","February","March","April","May","June","July","August","September","October","November","December");
						for($j=0;$j<count($mon);$j++)
						{
							echo "<option>$mon[$j]</option>";
						}
						
					?>
				</select>
				<select name="year">
					<option disabled selected>Year</option>
					<?php
						for($k=1971;$k<=2040;$k++)
						{
							echo "<option>$k</option>";
						}
						
					?>
					
				</select>
				</td>
				</tr>
				
				<tr>
				<td><span>Gender:</span></td>
					<td><input type="radio" name="gender" value="Male"><span>Male</span>
					    <input type="radio" name="gender" value="Female"><span>Female</span>
						<span><?php echo $err_gender;?></span></td>
				</tr>	
				<tr>
					<td><span>Where did you hear about us?</span></td>
					<td><input type="checkbox" name="about_us[]" value="A Friend or Colleague"><span>A Friend or Colleague</span>
					   <br> <input type="checkbox" name="about_us[]" value="Google"><span>Google</span></br>
						 <input type="checkbox" name="about_us[]" value="Blog Post"><span>Blog Post</span>
						<br><input type="checkbox" name="about_us[]" value="News Article"><span>News Article</span></br>
						<span><?php echo $err_aboutus;?></span></td>
						
				</tr>
				
				
					   <tr>
	 				<td><span> Bio:</span></td>
					 <td><textarea name="bio" value="<?php echo $bio;?>"></textarea>
					 <span><?php echo $err_bio;?></span></td>
				     </tr>
				
				
				
				</table>
				<br>
			<input type="submit" name="submit" value="submit">
				
				
				
				
				
				
				
				
				
				
      </form>
   </fieldset>
  
   