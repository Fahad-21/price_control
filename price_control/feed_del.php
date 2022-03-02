<?php
				if($_SESSION['TYPE'] !=""){
			?>
				<a href="include/admin_signout.php?signout" style="color:#F00; font-size:22px; text-decoration:none;background:#CCC">Sign Out</a>


			<?php } ?>
<?
	session_start();
	include("config/opencon.php");
	include("include/session.php");
	if(isset($_REQUEST['del'])){
		$Query = "DELETE FROM feedback 
			WHERE id=".$_REQUEST['FeedBack_id'];
	echo $Query;die;
	mysql_query($Query);		
header("location: feed_del.php?ID=".$_REQUEST['FeedBack_id']."&success");
?>
<? }?>
		

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
				<div style="color:#fff;background-color:#900;height:524px;width:230px;float:left" class="att" id="header" >
		<ul class="a" style="margin-top:-0px">
		 	</br></br><li>	<a href="registration.php" >Registration</a></br></br></li>
			<li><a href="admin_detail.php" >Admin detail</a></br></br></li>
			<li><a href="add_page.php">Add page</a></br></br></li>
			<li><a href="show_page.php">View page</a></br></br>	</li>		
			<li><a href="add_images.php">Upload images</a></br></br></li>
		   	<li><a href="heading.php">Heading</a></br></br></li>
			<li><a href="update_heading.php">Update Heading</a></br></br></li>
			<li><a href="add_notification.php">Notification</a></br></br></li>
			<li><a href="update_notification.php">Update Notification</a></br></br></li>
			<li class="current"><a href="feed_view.php">View Feedback</a></br></br></li>
		</ul>
			</div>
			<div style="width:5px;height:524px;background-color:#FFF;float:left"></div>
			
	<?php
		$Query = "SELECT * FROM feedback WHERE FeedBack_id =" .$_REQUEST['id'];
		//echo $Query; die;
		$rstRow = mysql_query($Query);
		$objRow = mysql_fetch_object($rstRow);
		?> 
		<table>
		  <?php
				if(isset($_REQUEST['success'])){
				?>
				<tr>
					<td colspan="3" style="color:#F00;padding:20px 0 0 160px;font-size:18px;font-weight:bold">Feedback has been successfully Deleted.</td>
				</tr>
				<?php	
				}

			?>
</table>
		 <div>
		  <table border="1" cellpadding="0" cellspacing="0" style="margin:9px 0 0 135px; margin-left:100px;float:left;margin-top:30px" width="500" >
		

		  	<tr>
				<td class="hdng">Name</td>
				<td width="250px" style="background-color:#900;color:#FFF;padding:5px 10px"><?php echo $objRow->Name;?></td>
			</tr>
           <tr>
				<td class="hdng">Your Email Address</td>
				<td style="background-color:#900;color:#FFF;padding:5px 10px"><?php echo $objRow->Email;?></td>
			</tr>
			<tr>
				<td class="hdng">Subject</td>
				<td style="background-color:#900;color:#FFF;padding:5px 10px"><?php echo $objRow->Subject;?></td>
			</tr>
			<tr>
				<td class="hdng">Message</td>
				<td style="background-color:#900;color:#FFF;padding:5px 10px"><?php echo $objRow->Message;?></td>
			</tr>  
		</table>
	
	</div>
	
	<form name="contact_form" method="post" action="">
	<table>
	<tr>
		<td style="margin-left:260px;float:left;margin-top:10px">  <input type="submit" name="del" value="Delete" class="button2" /></td>
	</tr>
</table>
	</div>
	
</form>
</div>

</body>
</html>
