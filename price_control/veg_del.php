<?php

			

	session_start();
	include("config/opencon.php");
	include("include/session.php");
	if(isset($_REQUEST['del'])){
		$Query = "DELETE FROM main1 
			WHERE m1id=".$_REQUEST['id'];
	//echo $Query;die;
	mysql_query($Query);		
header("location: veg_del.php?ID=".$_REQUEST['id']."&success");
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
		 </br></br><li><a href="registration.php" >Registration</a></br></br></li>
			<li><a href="admin_detail.php" >Admin detail</a></br></br></li>
			<li><a href="add_page.php">Add page</a></br></br></li>
			<li><a href="show_page.php">View page</a></br></br>	</li>		
			<li><a href="heading.php">Heading</a></br></br></li>
			<li><a href="update_heading.php">Update Heading</a></br></br></li>
			<li class="current"><a href="detail_veg.php">Detail List of Vegetables</a></br></br></li>
			<li><a href="Detail_Fruits.php">Detail List of Fruits</a></br></br></li>
			<li><a href="city.php">Add City</a></br></br></li>
			<li><a href="feed_view.php">View Feedback</a></br></br></li>
		</ul>
		</div>
		<div style="width:5px;height:524px;background-color:#FFF;float:left"></div>
		
		
		
		<div style="float:left;">

<?php
		$Query = "SELECT * FROM main1 INNER JOIN vegetables ON main1.vid= vegetables.vid WHERE m1id = ".$_REQUEST['id'];
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
				<td class="bg22">NAME</td>
				<td width="250" style="color:#FFF;padding:5px 5px;"><?php echo $objRow->name;?></td>
			</tr>
            <tr>
				<td class="bg22">PRICE</td>
				<td style="color:#FFF;padding:5px 5px;"><?php echo $objRow->price;?></td>
			</tr>
			<tr>
				<td class="bg22">DATE</td>
				<td style="color:#FFF;padding:5px 5px;"><?php echo $objRow->date;?></td>
			</tr>
			<tr>
				<td class="bg22">CITY_ID</td>
				<td style="color:#FFF;padding:5px 5px;"><?php echo $objRow->cid;?></td>
			</tr>
			
			       
		</table>
	
	</div>
	<form name="contact_form" method="post" action="">
	<table>
	<tr>
		<td>  <input type="submit" name="del" value="Delete" class="button12" /></td>
	</tr>
</table>
</form>
	
	</div>
	
</div>

	
</div>
</body>

</html>
