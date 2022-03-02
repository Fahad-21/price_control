<?php
session_start();
include("config/opencon.php");
include("include/session.php");

	$Query="SELECT * FROM heading Where id=2";
	//echo $Query; die;
	$rstRow= mysql_query($Query);
	//echo $Query;die();
	$objRow =mysql_fetch_object($rstRow);
	if(isset($_REQUEST['send'])){
		
		$Query1 = "UPDATE heading  SET 
		description='".$_REQUEST['desc']."'
		WHERE id=2";
				//echo $Query1; die;
		$rstRow = mysql_query($Query1);
			header("location: update_heading.php?id=2"."&success");
	}
	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="Style/style3.css" />
<title>APC</title>
<script language="javascript">
	function verify(){
		if(document.contact_form.desc.value == ""){
			alert("Please enter the heading");
			document.contact_form.desc.focus();
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
				<div style="color:#fff;background-color:#900;height:524px;width:230px;float:left;" class="att" id="header" >
		<ul class="a" style="margin-top:-0px">
			</br></br><li><a href="registration.php" >Registration</a></br></br></li>
			<li><a href="admin_detail.php" >Admin detail</a></br></br></li>
			<li><a href="add_page.php">Add page</a></br></br></li>
			<li><a href="show_page.php">View page</a></br></br>	</li>		
			<li><a href="heading.php">Heading</a></br></br></li>
			<li class="current"><a href="update_heading.php">Update Heading</a></br></br></li>
			<li><a href="detail_veg.php">Detail List of Vegetables</a></br></br></li>
			<li><a href="Detail_Fruits.php">Detail List of Fruits</a></br></br></li>
			<li><a href="city.php">Add City</a></br></br></li>
			<li><a href="feed_view.php">View Feedback</a></br></br></li>
			</ul>
		</div>
		<div style="width:5px;height:524px;background-color:#FFF;float:left"></div>
		
		<DIV style="float:left">
				<form name="contact_form" method="post" action="">
		  <table style="margin:20px 0 0 300px; float:left" width="400">
		  	<?php
				if(isset($_REQUEST['success'])){
				?>
				<tr>
					<td colspan="3" style="color:#F00; float:left; margin-left:-200px; width:425px;font-size:18px;font-weight:bold">Your Page has been successfully Saved.</td>
				</tr>
				<?php	
				}
			?>
		
			
			<div class="clr"></div>
			
            <tr>
				<div style="margin-left:160px;margin-top:50px;float:left">Update Heading</div>

				<td class="bg" style="background-color:#900;padding:5px 5px;border-radius:5px;font-size:16px;margin-left:-220px"><textarea rows="10" cols="60" name="desc" placeholder="Description.." ><?=$objRow->description;?> </textarea></td>
			</tr>
             <tr >
				<td colspan="3"><input type="submit" name="send" value="Submit" onClick="return verify();"  class="button11"/></td>
			</tr>
            </table>
					

		</form>
		</DIV>
		

</div>
</body>

</html>
