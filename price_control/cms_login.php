<?php

	session_start();
				
	include("config/opencon.php");
	if(isset($_REQUEST['send'])){

		$Query = "SELECT * FROM registration WHERE email = '".$_REQUEST['email']."' AND password = '".$_REQUEST['password']."'";
		//echo $Query; die;
		$rstRow = mysql_query($Query);
		$rows = mysql_num_rows($rstRow);
				if($rows >=1){
			$objRow = mysql_fetch_object($rstRow);
			$_SESSION['ID'] = $objRow->id;
			$_SESSION['TYPE'] = "ADMIN";

			header("location: cms_edit_info.php");
		}else{
			header("location: cms_login.php?error");
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="Style/style7.css" />
<link rel="icon" type="image/png" href="image/images/gvt_03.jpg">
<title>Admin_Login</title>
<script language="javascript">
	function verify(){
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
	}
</script>

</head>
<body>

<div style="float:left; width:100%;">
<div style="background-color:#0a2540;color:#fff;padding-left:50px ;margin-top:-50px;height:300px;font-size:30px;line-height:160px;font-family:Andalus" ><h1>ADMIN PANEL</h1></div>
		 		<div>
			<?php
			if($_SESSION['ID'] == ""){
				?>

				
				<form name="contact_form" method="post" action="">
		  <table style="margin-left:550px; margin-top:-190px; float:left;padding-left:40px;padding-top:10px;" width="450" height="130px" bgcolor="#990000" class="bg">
		    <?php
				if(isset($_REQUEST['error'])){
			?>
			<tr>
				<td align="center" style="color:#F00" colspan="3">Invalid Email or Password</td>
			</tr> 
			<?php } ?>
			
			<div class="clr"></div>

			<tr>
				<td class="bg">Email</td>
				<td></td>
				<td class="bg"><input type="email" name="email" placeholder="Email .." /></td>
			</tr>
            <tr>
				<td class="bg">Password</td>
				<td></td>
				<td class="bg"><input type="password" name="password" placeholder="Password .." /></td>
			</tr>
             <tr >
				<td colspan="3" align="center"><input type="submit" name="send" value="Sign In" onclick="return verify();" class="button"/></td>
			</tr>
            </table>
					<?php  } ?>

		</form>
		</div>
			</table>
			</div>
		</div>
<?php
				if($_SESSION['TYPE'] !=""){
			?>
				<a href="include/admin_signout.php?signout" style="color:#F00;text-decoration:none;font-size:18px;font-weight:bold;margin-left:980px;margin-top:10px;">Sign Out</a>

			<?php } ?>
</body>
</html>
