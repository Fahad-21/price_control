<?php
	session_start();
	include("include/session.php");
		include("config/opencon.php");
	if(isset($_REQUEST['Send'])){
		$First_Name 		= $_REQUEST['textn'];
		$Last_Name 			= $_REQUEST['textn1'];
		$Father_Name 		= $_REQUEST['textn2'];
		$CNIC 				= $_REQUEST['cnic'];
		$DOB 				= $_REQUEST['DOB'];
		$Email 				= $_REQUEST['email'];
		$Password			= $_REQUEST['password'];
		$Address 			= $_REQUEST['address'];
		$City 				= $_REQUEST['city'];
		$Phone 				= $_REQUEST['phone'];
		$Gender 			= $_REQUEST['gender'];
		$zip 				= $_REQUEST['zip'];
	
		$Query = "INSERT INTO registration (First_Name, Last_Name, Father_Name, CNIC,DOB,Email,Password,Address,City,Phone,Gender,zip) VALUES
			('".$_REQUEST['textn']."','".$_REQUEST['textn1']."', '".$_REQUEST['textn2']."',
			'".$_REQUEST['cnic']."', '".$_REQUEST['DOB']."' , '".$_REQUEST['email']."' , '".$_REQUEST['password']."' , '".$_REQUEST['address']."' ,
			 '".$_REQUEST['city']."' , '".$_REQUEST['phone']."' , '".$_REQUEST['gender']."' , '".$_REQUEST['zip']."')";
			 // echo $Query;die();
		mysql_query($Query);
		
		$to = $_REQUEST['email'];
		$subject = "Conformation email";
		$message = "your Email is ".$Email."
			Password is ".$Password." 
			This is your Admin registration details.";
			mail($to, $subject, $message);
		
		header("location: registration.php?success");
	}
		
		?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="Style1/Style1.css" />
<title>Automated Price Control</title>
<script language="javascript">
	function verify(){
		if(document.contact_form.textn.value == ""){
			alert("Please enter the first name");
			document.contact_form.textn.focus();
			return false;
		}
		if(document.contact_form.textn1.value == ""){
			alert("Please enter the last name");
			document.contact_form.textn1.focus();
			return false;
		}
		if(document.contact_form.textn2.value == ""){
			alert("Please enter the father name");
			document.contact_form.textn2.focus();
			return false;
		}
		if(document.contact_form.cnic.value == ""){
			alert("Please enter the cnic#");
			document.contact_form.cnic.focus();
			return false;
		}
		if(document.contact_form.DOB.value == ""){
			alert("Please enter the DOB");
			document.contact_form.DOB.focus();
			return false;
		}

		if(document.contact_form.email.value == ""){
			alert("Please enter the email");
			document.contact_form.email.focus();
			return false;
		}
	    if(document.contact_form.password.value == ""){
			alert("Please enter the password");
			document.contact_form.password.focus();
			return false;
		}

		if(document.contact_form.address.value == ""){
			alert("Please enter the address");
			document.contact_form.address.focus();
			return false;
		}
		if(document.contact_form.city.value == ""){
			alert("Please enter the city");
			document.contact_form.city.focus();
			return false;
		}

		if(document.contact_form.phone.value == ""){
			alert("Please enter the phone");
			document.contact_form.phone.focus();
			return false;
		}
		if(document.contact_form.gender.value == ""){
			alert("Please enter the gender");
			return false;
		}		
		if(document.contact_form.zip.value == ""){
			alert("Please enter the zip code");
			document.contact_form.zip.focus();
			return false;
		}
	}

</script>
<link rel="icon" type="image/png" href="image/images/gvt_03.jpg">
<style>
ul.a {list-style-type: circle;}
</style>
</head>

<body>
<div>
<a href="cms_edit_info.php" style="text-decoration:line-through"> <h1 style="background-color:#0a2540;height:150px;margin-top:-1px;color:#fff;padding-top:20px;padding-left:50px">Welcome to Admin Panel</h1></a>
<?php	
	
		
			if($_SESSION['TYPE'] !=""){
			?>
				<a href="include/admin_signout.php?signout" class="sign">Sign Out</a>

			<?php } ?>
</div>
<div style="float:left; width:100%;background-color:#999;height:524px;margin-top:-15px">
				<div style="color:#fff;background-color:#900;height:524px;width:230px;float:left" class="att" id="header" >
					<div style="float:left"><a href="cms_edit_info.php" style="text-decoration:none;background-color:#0a2540;height:50;width:230px">Menu</a></div>
					<ul class="a"  style="margin-top:-0px">
						 	
							
							</br></br>
							</br></br><li class="current"><a href="registration.php" >Registration</a></br></br></li>
			<li><a href="admin_detail.php" >Admin detail</a></br></br></li>
			<li><a href="add_page.php">Add page</a></br></br></li>
			<li><a href="show_page.php">View page</a></br></br>	</li>		
			<li><a href="heading.php">Heading</a></br></br></li>
			<li><a href="update_heading.php">Update Heading</a></br></br></li>
			<li><a href="detail_veg.php">Detail List of Vegetables</a></br></br></li>
			<li><a href="Detail_Fruits.php">Detail List of Fruits</a></br></br></li>
			<li><a href="city.php">Add City</a></br></br></li>
			<li><a href="feed_view.php">View Feedback</a></br></br></li>
					</ul>
				</div>
				<div style="width:5px;height:524px;background-color:#FFF;float:left"></div>
				
				 <div >
		 
		<div >
		<form name="contact_form" method="post" action="">
			 <table border="0" style="margin:30px 0 0 200px;" width="400">
				<?php
				if(isset($_REQUEST['success'])){
				?>
				<tr>
					<td colspan="3" style="color:#F00; float:left; margin-left:62px; width:500px;font-size:18px;font-weight:bold">Your information has been successfully Saved.</td>
				</tr>
				<?php	
				}
			?>
		
			</table>
		  <table border="0" style="margin:20px 0 0 270px;" width="300">
		  		

		  	<tr>
				<td class="bg">First Name</td>
				<td width="10"></td>
				<td class="bg" ><input type="text" name="textn" placeholder="First Name.." /></td>
			</tr>
            <tr>
				<td class="bg">Last Name</td>
				<td></td>
				<td class="bg"><input type="text" name="textn1" placeholder="Last Name .." /></td>
			</tr>
			<tr>
				<td class="bg">Father Name</td>
				<td></td>
				<td class="bg"><input type="text" name="textn2" placeholder="Father Name .." /></td>
			</tr>
			<tr>
				<td class="bg">CNIC#</td>
				<td></td>
				<td class="bg"><input type="text" name="cnic" placeholder="CNIC.." /></td>
			</tr>
			<tr>
				<td class="bg">DOB</td>
				<td></td>
				<td class="bg"><input type="text" name="DOB" placeholder="DOB.." /></td>
			</tr>

			<tr>
				<td class="bg">Email Address</td>
				<td></td>
				<td class="bg"><input type="email" name="email" placeholder="Email.." /></td>
			</tr>
			<tr>
				<td class="bg">Password</td>
				<td></td>
				<td class="bg"><input type="password" name="password" placeholder="Password.." /></td>
			</tr>

			<tr>
				<td class="bg">Permanant Address</td>
				<td></td>
				<td class="bg"><input type="text" name="address" placeholder="Address.." /></td>
			</tr>
			<tr>
				<td class="bg">City</td>
				<td></td>
				<td class="bg"><input type="text" name="city" placeholder="City.." /></td>
			</tr>

			<tr>
				<td class="bg">Personal Phone No</td>
				<td></td>
				<td class="bg"><input type="text" name="phone" placeholder="Phone.." /></td>
			</tr>
			<tr>
				<td class="bg">Gender</td>
				<td></td>
				<td class="bg">Male <input type="radio" name="gender" value="male" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Female <input type="radio" name="gender" value="female" /></td>
			</tr>
			<tr>
				<td class="bg">ZipCode</td>
				<td></td>
				<td class="bg"><input type="text" name="zip" placeholder="ZipCode .." /></td>
			</tr>         
            <tr >
				<td colspan="3" align="center"><input type="submit" name="Send" value="Submit" onClick="return verify();" class="button"/></td>
			</tr>
		</table>
		</form>
				</div>
					</div>

				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				

</div>
</body>

</html>
