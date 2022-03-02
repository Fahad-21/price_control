<?php
	session_start();
	include("include/session.php");
	include("config/opencon.php");
	$Query = "SELECT * FROM main WHERE mid = ".$_REQUEST['id'];

		$rstRow = mysql_query($Query);
		$objRow = mysql_fetch_object($rstRow);
	
	if(isset($_REQUEST['Send'])){
		$Query2 = "UPDATE main SET

		price 			= '".$_REQUEST['textn']." ',
		date			= '".$_REQUEST['textn1']." '
		
			WHERE mid 	= ".$_REQUEST['id']; 
	//echo $Query2; die;
		mysql_query($Query2);
				
		header("location: fruit_edit.php?ID=".$_REQUEST['id']."&success");
//		echo $name."-<br>".$email."-<br>".$address."-<br>".$phone."-<br>".$zip;
	//	exit;
	}
		?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="Style/style3.css" />
<title>APC</title>
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
				<div style="color:#fff;background-color:#900;height:524px;width:230px;float:left" class="att" >
		<ul class="a" style="margin-top:-0px">
		 	</br></br><li><a href="registration.php" >Registration</a></br></br></li>
			<li><a href="admin_detail.php" >Admin detail</a></br></br></li>
			<li><a href="add_page.php">Add page</a></br></br></li>
			<li><a href="show_page.php">View page</a></br></br>	</li>		
			<li><a href="heading.php">Heading</a></br></br></li>
			<li><a href="update_heading.php">Update Heading</a></br></br></li>
			<li><a href="detail_veg.php">Detail List of Vegetables</a></br></br></li>
			<li class="current"><a href="Detail_Fruits.php">Detail List of Fruits</a></br></br></li>
			<li><a href="city.php">Add City</a></br></br></li>
			<li><a href="feed_view.php">View Feedback</a></br></br></li>
		</ul>
			</div>

			<div style="width:5px;height:524px;background-color:#FFF;float:left"></div>
				<div style="float:left;">
		<form name="contact_form" method="post" action="">
		  <table border="0" style="margin:20px 0 0 135px;" width="300">
		  	<?php
				if(isset($_REQUEST['success'])){
				?>
				<tr>
					<td colspan="3" style="color:#F00;font-size:18px;font-weight:bold">Your Request has been successfully Saved.</td>
				</tr>
				<?php	
				}

			?>
		  	<tr>
				<td class="bg">Price</td>
				<td width="10"></td>
				<td class="bg" ><input type="text" name="textn" placeholder="First Name.." 	value="<?=$objRow->	price;?>" /></td>
				<input type="hidden" name="ID" value="<?=$_REQUEST['id'];?>" />

			</tr>
            <tr>
				<td class="bg">DATE</td>
				<td></td>
				<td class="bg"><input type="text" name="textn1" placeholder="Last Name .." 	value="<?=$objRow->date;?>" /></td>
			</tr>
			
			
            <tr >
				<td colspan="3" align="center"><input type="submit" name="Send" value="Save" onclick="return verify();" class="button"/></td>
			</tr>
		</table>
		</form>
		</div>



</div>
</body>

</html>
