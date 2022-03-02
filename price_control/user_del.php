<?php

			

	session_start();
	include("config/opencon.php");
	include("include/session.php");
	if(isset($_REQUEST['del'])){
		$Query = "DELETE FROM registration 
			WHERE id=".$_REQUEST['id'];
	//echo $Query;die;
	mysql_query($Query);		
header("location: user_del.php?ID=".$_REQUEST['id']."&success");
?>
<? }?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="Style/style3.css" />
<title>Automated Price Control</title>
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
<div style="float:left; width:100%;background-color:#999;height:524px;margin-top:-15px;float:left+right">
				<div style="color:#fff;background-color:#900;height:524px;width:230px;float:left" class="att" id="header" >
<ul class="a" style="margin-top:-0px">
		 	</br></br><li>	<a href="registration.php" >Registration</a></br></br></li>
			<li class="current"><a href="admin_detail.php" >Admin detail</a></br></br></li>
			<li><a href="add_page.php">Add page</a></br></br></li>
			<li><a href="show_page.php">View page</a></br></br>	</li>		
			<li><a href="add_images.php">Upload images</a></br></br></li>
		   <li>	<a href="heading.php">Heading</a></br></br></li>
			<li><a href="update_heading.php">Update Heading</a></br></br></li>
			<li><a href="add_notification.php">Notification</a></br></br></li>
			<li><a href="update_notification.php">Update Notification</a></br></br></li>
			<li><a href="feed_view.php">View Feedback</a></br></br></li>
		</ul>
		</div>
		<div style="width:5px;height:524px;background-color:#FFF;float:left"></div>
		
		
		
		<div style="float:left;">

<?php
		$Query = "SELECT * FROM registration WHERE id = ".$_REQUEST['id'];
		//echo $Query; die;
		$rstRow = mysql_query($Query);
		$objRow = mysql_fetch_object($rstRow);
		?> 
		<table>
		  <?php
				if(isset($_REQUEST['success'])){
				?>
				<tr>
					<td colspan="3" style="color:#F00;padding:20px 0 0 160px;font-size:18px;font-weight:bold">User has been successfully Deleted.</td>
				</tr>
				<?php	
				}

			?>
</table>
		 <div>
		  <table border="0" cellpadding="0" cellspacing="0"  style="margin:45px 0 0 0px; margin-left:100px; background-color:#006" width="400" >
		

		  	<tr>
				<td class="bg22">Your First Name</td>
				<td width="250" style="color:#FFF;padding:5px 5px;"><?php echo $objRow->First_Name;?></td>
			</tr>
            <tr>
				<td class="bg22">Your Last Name</td>
				<td style="color:#FFF;padding:5px 5px;"><?php echo $objRow->Last_Name;?></td>
			</tr>
			<tr>
				<td class="bg22">Father Name</td>
				<td style="color:#FFF;padding:5px 5px;"><?php echo $objRow->Father_Name;?></td>
			</tr>
			<tr>
				<td class="bg22">CNIC#</td>
				<td style="color:#FFF;padding:5px 5px;"><?php echo $objRow->CNIC;?></td>
			</tr>
			<tr>
				<td class="bg22">DOB</td>
				<td style="color:#FFF;padding:5px 5px;"><?php echo $objRow->DOB;?></td>
			</tr>
			<tr>
				<td class="bg22">Your Email Address</td>
				<td style="color:#FFF;padding:5px 5px;"><?php echo $objRow->Email;?></td>
			</tr>
			<tr>
				<td class="bg22">Permanant Address</td>
				<td style="color:#FFF;padding:5px 5px;"><?php echo $objRow->Address;?></td>
			</tr>
			<tr>
				<td class="bg22">City</td>
				<td style="color:#FFF;padding:5px 5px;"><?php echo $objRow->City;?></td>
			</tr>
			<tr>
				<td class="bg22">Personal Phone No</td>
				<td style="color:#FFF;padding:5px 5px;"><?php echo $objRow->Phone;?></td>
			</tr>
			<tr>
				<td class="bg22">Gender</td>
				<td style="color:#FFF;padding:5px 5px;"><?php echo $objRow->Gender;?></td>
			</tr>
			<tr>
				<td class="bg22">ZipCode</td>
				<td style="color:#FFF;padding:5px 5px;"><?php echo $objRow->Zip;?></td>
			</tr> 
			       
		</table>
	
	</div>
	<form name="contact_form" method="post" action="">
	<table>
	<tr>
		<td>  <input type="submit" name="del" value="Delete User" class="button12" /></td>
	</tr>
</table>
</form>
	
	</div>
	
</div>

	
</div>
</body>

</html>
