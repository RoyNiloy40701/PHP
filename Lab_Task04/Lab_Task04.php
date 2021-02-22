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
$phone="";
$err_phone="";
$address="";
$err_address="";
$code="";
$err_code="";




if($_SERVER["REQUEST_METHOD"]=="POST"){
   //if(isset($_POST["submit"])){
    
	 if(empty($_POST["name"])){
		$err_name="Name Required";
		}
		else{
			echo htmlspecialchars( $name=$_POST["name"]);
		}
       
	   	if(empty($_POST["uname"])){
		$err_uname="Username Required";
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
			 echo htmlspecialchars($uname=$_POST["uname"]);
		 }
			if(empty($_POST["phone"])){
				$err_phone="Phone Required";
			}
			elseif(is_numeric($POST["phone"])){
				$err_phone="Only Numeric Number ";
			}else{
			   echo htmlspecialchars($phone=$_POST["phone"]);
			}
		  
		  if(empty($_POST["pass"]))
		 {
			 $err_pass="[Password Required]";
		 }
		 elseif(strlen($_POST["pass"])<8)
		 {
			 $err_pass="Password should 8 contain character";
		 } 
		
		 
		 
		 else
		 {
			 $pass=$_POST["pass"];
		 }
		
		
		
		 
   

}

?>

<html>
   <head></head>
       <Body>
           <fieldset>
                <legend>Club Member Registration</legend>
               <form action="" method="post">
			   <table>
			        <tr>
                    <td><span>Name</span></td>
					<td>:<input type="text" name="name" value="<?php echo $name;?>" placeholder = "Name " >
					<span><?php echo $err_name;?></span></td>
				</tr>
				<tr>
					<td><span >Username</span></td>
					<td>:<input type="text" name="uname" value="<?php echo $uname;?>" placeholder = "Username " >
					<span><?php echo $err_uname;?></span></td>
				</tr>
				
				
				<tr>
					<td><span>Password</span></td>
					<td>:<input type="text" name="pass" value="<?php echo $pass;?>" placeholder = "Password " >
					<span><?php echo $err_pass;?></span></td>
				</tr>
				
				<tr>
					<td><span> Confirm Password</span></td>
					<td>:<input type="text" name="cpass" value="<?php echo $cpass;?>" placeholder = " Confirm Password " >
					<span><?php echo $err_cpass;?></span></td>
				</tr>
				
				<tr>
					<td><span>Email</span></td>
					<td>:<input type="text" name="email"  value ="<?php echo $email;?>"
					<span><?php echo $err_email;?></span></td>
				</tr>
				  <tr>
				     <td><span>Phone</span></td>
					  <td>:<input type ="text"  name="phone" value="<?php echo $phone; ?>" placeholder="Code">  -  <input type ="text"  name="phone" value="<?php echo $phone; ?>" placeholder="Number">
					  
					   <span><?php echo $err_phone;?></span></td>
					</tr>
					
					<tr>
				     <td><span>Address</span></td>
					  <td>:<input type ="text"  name="address" value="<?php echo $address; ?>" placeholder= "Street Address">
				       <span><?php echo $err_address;?></span></td>
					   </tr>
					   
					   <tr>
				     <td><span> </span></td>
					  <td><input type ="text"  name="address" value="<?php echo $address; ?>" placeholder= "City">  -  <input type ="text"  name="address" value="<?php echo $address; ?>" placeholder= "State">
				       <span><?php echo $err_address;?></span></td>
					   </tr>
					   
					   
					    <tr>
				     <td><span> </span></td>
					  <td><input type ="address"  name="address" value="<?php echo $address; ?>" placeholder= "Postal/ Zip Code">
					   
				       <span><?php echo $err_address;?></span></td>
					   </tr>
					  
					  
					  
				
				<tr>
				<td><span>Gender</span></td>
					<td>:<input type="radio" name="gender" value="Male"><span>Male</span>
					    <input type="radio" name="gender" value="Female"><span>Female</span>
						<span><?php echo $err_gender;?></span></td>
				</tr>	
				<tr>
					<td><span>Where did you hear about us?:</span></td>
					<td><input type="checkbox" name="about_us[]" value="A Friend or Colleague"><span>A Friend or Colleague</span>
					   <br> <input type="checkbox" name="about_us[]" value="Google"><span>Google</span></br>
						 <input type="checkbox" name="about_us[]" value="Blog Post"><span>Blog Post</span>
						<br><input type="checkbox" name="about_us[]" value="News Article"><span>News Article</span></br>
						<span><?php echo $err_aboutus;?></span></td>
						
				</tr>
				
				
					   <tr>
	 				<td><span> Bio</span></td>
					 <td>:<textarea name="bio" value="<?php echo $bio;?>"></textarea>
					 <span><?php echo $err_bio;?></span></td>
				     </tr>
				
				
				
				</table>
				<br>
			<input type="submit" name="submit" value="submit">
				
				
				
				
				
				
				
				
				
				
      </form>
   </fieldset>
  
   