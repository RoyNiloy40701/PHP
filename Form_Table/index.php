<?php
$uname="";
$err_uname=" ";
$pass="";
$err_pass="";
$bio="";
$err_bio="";
$hobbies="";
$err_hobbies="";
$profession="";
$err_profession="";
$gender="";
$err_gender="";


if($_SERVER["REQUEST_METHOD"]=="POST"){
	//if(isset($_POST["submit"])){
		if(empty($_POST["uname"])){
		$err_uname="Username Required";
		}
		elseif(strlen($_POST["uname"])<6)
		 {
			 $err_uname="[Username must be 6 charachters long]";
		 }
		else{
			$uname=$_POST["uname"];
		}
		
		if(empty($_POST["pass"])){
			$err_pass="Password Required";
		}
		else{
			$pass=$_POST["pass"];
		}
	   if(empty($_POST["bio"])){
		$err_bio="Bio Required";
	   }
	   else{
		$bio=$_POST["bio"];
	 }
	
	   if(!isset($_POST["gender"])){
		$err_gender=" Please select a gender";
	 }
	  else {
	  $gender=$_POST["gender"];
	      }
	  if (!isset($_POST["hobbies"])){
		$err_hobbies=" At least one option must be selected";
	  }
	   elseif(count($_POST["hobbies"])<1)
		 {
			 $err_hobbies=" At least one option must be selected";
		 }
	  else{
	    $hobbies=$_POST["hobbies"];
	 }
	   if(!isset($_POST["profession"]))
	   {
			$err_profession="  Please select Profession";
	   }
	 
	   else
	  {
		  $profession=$_POST["profession"];
	  }
	
        		
			
			
			/*if(isset($_POST["submit"])){
			echo "Username: ".$_POST["uname"]."<br>";
			echo "Password: ".$_POST["pass"]."<br>";
			echo "Gender: ".$_POST["gender"]."<br>";
			echo "Profession: ".$_POST["profession"]."<br>";
			echo "Bio: ".$_POST["bio"]."<br>";
            $var=$_POST["hobbies"];
			echo "hobbies: ";
			count($var);
            for($i=0;$i<count($var);$i++)
			{
			echo $var[$i].", ";
			} 
			}*/
		}
?>
		
<html>
	<head></head>
	<body>
		<h1>User Registration</h1>
		<form action="" method="POST">
			<table>
				<tr>
					<td><span >Username</span></td>
					<td>:<input type="text" name="uname" value="<?php echo $uname;?>" placeholder = "Username " >
					<span><?php echo $err_uname;?></span></td>
				</tr>
				<tr>
					<td><span>Password</span></td>
					<td>:<input type="password" name="pass" value="<?php echo $pass;?>" placeholder = "Password " >
					<span><?php echo $err_pass;?></span></td>
				</tr>
				
													
				<tr>
					<td><span><b>Gender</b></span></td>
					<td>:<input type="radio" name="gender" value="Male"><span>Male</span>
					    <input type="radio" name="gender" value="Female"><span>Female</span>
						<span><?php echo $err_gender;?></span></td>
				</tr>					
				<tr>
					<td><span><b>Hobbies</b></span></td>
					<td>:<input type="checkbox" name="hobbies[]" value="Movies"><span>Movies</span>
					    <input type="checkbox" name="hobbies[]" value="Music"><span>Music</span>
						<input type="checkbox" name="hobbies[]" value="Games"><span>Games</span>
						<input type="checkbox" name="hobbies[]" value="Sports"><span>Sports</span>
						<span><?php echo $err_hobbies;?></span></td>
				</tr>
				
				<tr>
					<td><span><b>Profession</b></span></td>
					<td>: 
						<select name="profession">
							<option disabled selected>Choose One</option>
							<option>Teaching</option>
							<option>Service</option>
							<option>Business</option>
							<option>others</option>
						</select>
						<span><?php echo $err_profession;?></span>
					</td>
				</tr>
				<tr>
	 				<td><span><b>Bio</b></span></td>
					 <td>:<textarea name="bio" value="<?php echo $bio;?>"></textarea>
					 <span><?php echo $err_bio;?></span></td>
				</tr>
			</table>
			<br>
			<input type="submit" name="submit" value="submit">
		</form>
	</body>