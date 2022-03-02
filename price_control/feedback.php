<?php
/*	for($I = 0; $I <=1000; $I++ ){
		echo $I."<br>";
	}
	exit;*/
	include("config/opencon.php");
	if(isset($_REQUEST['Submit'])){
		$Name 				= $_REQUEST['textn'];
		$Email 				= $_REQUEST['email'];
		$Subject			= $_REQUEST['subject'];
		$Message 			= $_REQUEST['message'];
		
		$Query = "INSERT INTO feedback (Name, Email, Subject, Message) VALUES
			('".$_REQUEST['textn']."','".$_REQUEST['email']."', '".$_REQUEST['subject']."','".$_REQUEST['message']."')";
		mysql_query($Query);
		
		header("location: feedback.php?success");
	}
		
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="Style/Style8.css" />
<title>Online Election System</title>
<script language="javascript">
	function verify(){
		if(document.contact_form.textn.value == ""){
			alert("Please enter your name");
			document.contact_form.textn.focus();
			return false;
		}
		if(document.contact_form.email.value == ""){
			alert("Please enter email address");
			document.contact_form.email.focus();
			return false;
		}
		if(document.contact_form.subject.value == ""){
			alert("Please enter the subject");
			document.contact_form.subject.focus();
			return false;
		}
		if(document.contact_form.message.value == ""){
			alert("Please enter your message");
			document.contact_form.message.focus();
			return false;
			}
		}
</script>

</head>
<body>

<div style="float:left; width:100%;">
	<?php include("include/header.php");?> 
	<?php 
			$Query = "SELECT * FROM heading WHERE name = 'home' ";
			$rstRow= mysql_query($Query);
			$objRow =mysql_fetch_object($rstRow);
			?>
     		 <?php echo $objRow->description;?>		
		<div style="background:url(images/fb.png) no-repeat; width:400px; height:300px; margin-left:80px;margin-top:34px;float:left "  ></div>

		 				 <div style="float:left">
		<div  style="float:left; margin-top:10px;">
		<form name="contact_form" method="post" action="">
			<div>
			<table border="0" style="margin:50px 0 0 200px;float:left" width="325">
				<?php
				if(isset($_REQUEST['success'])){
				?>
				<tr>
					<td colspan="3" style="color:#F00; float:left; width:325px;">Your Feedback has been successfully Submit.</td>
				</tr>
				<?php	
				}
			?>
		
			</table>
			</div>
		  <table border="0" style="margin:120px 0 0 200px;" width="300">
		  			<tr>
				<td class="bg">Name</td>
				<td width="10"></td>
				<td class="bg" ><input type="text" name="textn" placeholder="Name.." /></td>
			</tr>
			<tr>
				<td class="bg">Email</td>
				<td></td>
				<td class="bg"><input type="email" name="email" placeholder="Email .." /></td>
			</tr>
			<tr>
				<td class="bg">Subject</td>
				<td></td>
				<td class="bg"><input type="text" name="subject" placeholder="Subject .." /></td>
			</tr>
			<tr>
				<td>Message</td>
				<td></td>
				<td><textarea rows="8" cols="20" name="message" placeholder="Message..." style="background:#03C;color:#FFF;padding:0 20px;border-radius:2px;"></textarea></td>
		</tr>
			 <tr >
				<td colspan="3" ><input type="submit" name="Submit" value="Submit" onclick="return verify();" class="button"/></td>
			</tr>

		 </table>
		</form>
		</div>
         </div>
		 

	<?php include("include/footer.php");?> 
</div>

</body>
</html>
