<?php
	session_start();
	include("include/session.php");
	include("config/opencon.php");
	if(isset($_REQUEST['send'])){
	
		$Query = "INSERT INTO city (name) VALUES
			('".$_REQUEST['name']."')";
		mysql_query($Query);
			header("location: city.php?success");
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
			<li><a href="Detail_Fruits.php">Detail List of Fruits</a></br></br></li>
			<li class="current"><a href="city.php">Add City</a></br></br></li>
			<li><a href="feed_view.php">View Feedback</a></br></br></li>
		</ul>
			</div>

			<div style="width:5px;height:524px;background-color:#FFF;float:left"></div>
<DIV style="float:left">
				<form name="contact_form" method="post" action="">
		   	<?php
				if(isset($_REQUEST['success'])){
				?>
				
					<div style="color:#F00;float:left; margin-left:62px;font-size:18px;font-weight:bold;width:500px;margin-top:20px">Your Page has been successfully Saved.</div>
				
				<?php	
				}
			?>
		
		  <table style="margin:20px 0 0 100px ;float:left; width:500px">
		
			
			<div class="clr"></div>
			<tr>
				<td class="bg"><b>Add City</b></td>
				<td></td>
				<td class="bg"><input type="text" name="name" placeholder="City name.."/></td>
			</tr>
           
             <tr >
				<td colspan="3"><input type="submit" name="send" value="Submit" onClick="return verify();" class="button1"/></td>
			</tr>
            </table>
					

		</form>
		
		
		</DIV>
		<div style="float:left;margin-left:-400px;margin-top:150px">
		<table cellpadding="0" cellspacing="0" border="0" style="float:left" >
	
		<?php
		$Index = 0;
		$Query = "SELECT * FROM city ";
		$rstRow = mysql_query($Query);
		while($objRow = mysql_fetch_object($rstRow)){
			$Index++;
			
	?>
	
	<tr>
		
		<td style="padding-top:7px"><a style="text-decoration:none;font-size:14px;font-weight:bold;color:#900;float:left" href="date1.php?cid=<?php echo $objRow->cid;?>"> <?php echo $objRow->cid;?></a></td>
		<td style="padding-top:7px"><a style="text-decoration:none;font-size:14px;font-weight:bold;color:#036;float:left" href="date1.php?cid=<?php echo $objRow->cid;?>"> -><?php echo $objRow-> name;?></a></td>

	</tr>
	<?php } ?>
			</table>		
		</div>
		


</div>
</body>

</html>
