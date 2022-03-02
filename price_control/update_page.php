<?php
	session_start();
	include("include/session.php");
	include("config/opencon.php");
	$Query="SELECT * FROM add_page Where id=".$_REQUEST['id'];
	//echo $Query; die;
	$rstRow= mysql_query($Query);
	$objRow =mysql_fetch_object($rstRow);
	if(isset($_REQUEST['send'])){
		
		$Query1 = "UPDATE add_page SET 
		name='".$_REQUEST['name']."',
		description='".$_REQUEST['desc']."'
		WHERE id=".$_REQUEST['id'];
				//echo $Query1; die;
		$rstRow = mysql_query($Query1);
			header("location: update_page.php?id=".$_REQUEST['id']."&success");
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
			<li class="current"><a href="show_page.php">View page</a></br></br>	</li>		
			<li><a href="heading.php">Heading</a></br></br></li>
			<li><a href="update_heading.php">Update Heading</a></br></br></li>
			<li><a href="detail_veg.php">Detail List of Vegetables</a></br></br></li>
			<li><a href="Detail_Fruits.php">Detail List of Fruits</a></br></br></li>
			<li><a href="city.php">Add City</a></br></br></li>
			<li><a href="feed_view.php">View Feedback</a></br></br></li>
		</ul>
			</div>

			<div style="width:5px;height:524px;background-color:#FFF;float:left"></div>
<div style="float:left">
<form name="contact_form" method="post" action="">
		  <table style="margin:20px 0 0 480px;" width="450">
		  	<?php
				if(isset($_REQUEST['success'])){
				?>
				<tr>
					<td colspan="3" style="color:#F00; float:left; margin-left:62px; width:425px;font-size:18px;font-weight:bold">Your Page has been successfully Saved.</td>
				</tr>
				<?php	
				}
			?>
		
			
			<div class="clr"></div>
			<tr>
				<td class="bg21">Page Name</td>
				<td></td>
				<td class="bg21"><input type="text" name="name" placeholder="Page name.." value="<?= $objRow->name;?>"/></td>
			</tr>
            <tr>
				
				<td></td>
				<td class="bg21"><textarea rows="10" cols="60" name="desc" placeholder="Page description.." style="margin-left:-364px;background-color:#006;color:#FFF" ><?=$objRow->description;?> </textarea></td>
			</tr>
             <tr >
				<td colspan="3" ><input type="submit" name="send" value="Submit" onClick="return verify();" class="button" style="margin-left:-60px;float:left"/></td>
			</tr>
            </table>
					

		</form>
</div>


</div>
</body>

</html>
