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
		
		header("location: price.php?success");
	}
		
?>
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Price - Automated Price Control</title>
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
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="responsive.css" />
	<!--[if IE 7]>
		<link rel="stylesheet" type="text/css" href="css/ie7.css" />
	<![endif]-->
</head>
<body>
	<div id="page">
		<div id="header">
			<div>
			<a href="index.php" style="text-decoration:none"><div style="color:#3e3524;font-size:36px;font-family:'Agency FB';"> <div style="color:#164773;"> Automated</div> Price Control</div></a>

<!--				<a href="index.html"><img src="images/logo.gif" alt="Logo" /></a>
-->			</div>
			<ul>
				<li><a href="index.php"><span>Home</span></a></li>
				<li><a href="tips.php"><span>Healthful Tips &amp; Useful Links</span></a></li>
				<li class="current"><a href="goods.php"><span>Goods view Platform</span></a></li>
				<li><a href="graph.php"><span>Graphically Speaking</span></a></li>
								<li><a href="slogans.php"><span>Shout Slogans</span></a></li>

				<li><a href="about.php"><span>About</span></a></li>
				<li><a href="contact.php"><span>Contact</span></a></li>
			</ul>
		</div>
		<div class="body">
			<div id="blog">
				<div class="article">
					<h2>Price Of Goods</h2>
					<span><marquee scrollamount="4px" behavior="alternate" class="c" >Select Good which you want to view</marquee></span>
					<fieldset style="height:auto" class="abc1">
	
						<legend >Selecting Goods</legend>
	<a href="fruit.php" style="margin-left:110px;font-size:22px;color:#039;text-decoration:none;font-family:Jokerman">Fruits</a>
	<a href="vegetable.php" style="margin-left:80px;font-size:22px;color:#039;text-decoration:none;font-family:Jokerman">Vegetables</a>
						</fieldset>
					<fieldset style="height:auto" class="abc1">
	
						<legend >Fruits</legend>
	<table cellpadding="0" cellspacing="0" border="0">
		<?php
		$Index = 0;
		$Query = "SELECT * FROM fruits ";
		$rstRow = mysql_query($Query);
		while($objRow = mysql_fetch_object($rstRow)){
			$Index++;
			
	?>
	<tr>
		
		<td style="padding-top:7px;float:left;text-decoration:none"><a style="text-decoration:none;margin-left:100px;color:#006" href="fruit_list.php?fid=<?php echo $objRow->fid;?>"><?php echo $objRow-> name;?></a></td>
	</tr>
	<?php } ?>
			</table>			
					</fieldset>
<!--				<div style="height:160px"></div>
-->				
				</div>				
					<div class="sidebar">
					
					<span>Recent Post Sahiwal</span>
					<table>
					<?php
	//echo $_REQUEST['date'];
	$Index = 0;
		$Query = "SELECT * FROM main  WHERE cid = '1' AND fid = '2' order by date Desc  Limit 3" ;
		//echo $Query; die();
		$rstRow = mysql_query($Query);
		//echo $Query; die();
		while($objRow = mysql_fetch_object($rstRow)){
			$Index++;
		?>
		

	<tr>
				<td style="padding-top:7px"><a href='list.php?date=<?php echo $objRow-> date;?>&cid=<?php echo $objRow->cid;?>&fid=<?php echo $objRow->fid;?>&vid=<?php echo $objRow1->vid;?>'> <ul><li> <?php echo $objRow->date;?> </li></ul></a></td>

		<?php /*?><td><?php echo $objRow->unit;?></td>
		<td><?php echo $objRow->price;?></td><?php */?>
		<?php /*?><td><?php echo $objRow->city;?></td><?php */?>
		
	</tr>
		<?php } ?>
		
					
					</table>
					
					
					<span>Recent Post Faisalabad</span>
					<table>
					
					<?php
	//echo $_REQUEST['date'];
	$Index = 0;
		$Query2 = "SELECT * FROM main  WHERE cid = '2' AND fid = '2' order by date Desc  Limit 3" ;
		//echo $Query; die();
		$rstRow2 = mysql_query($Query2);
		//echo $Query; die();
		while($objRow2 = mysql_fetch_object($rstRow2)){
			$Index++;
		?>
	
		<tr>
				<td style="padding-top:7px"><a href='list.php?date=<?php echo $objRow2-> date;?>&cid=<?php echo $objRow2->cid;?>&fid=<?php echo $objRow2->fid;?>&vid=<?php echo $objRow3->vid;?>'><ul><li> <?php echo $objRow2->date;?> </li></ul></a></td>

		<?php /*?><td><?php echo $objRow->unit;?></td>
		<td><?php echo $objRow->price;?></td><?php */?>
		<?php /*?><td><?php echo $objRow->city;?></td><?php */?>
		
	</tr>
		<?php } ?>
		
					
					</table>
					
					
					<span>Recent Post Lahore</span>
					<table>
					<?php
	//echo $_REQUEST['date'];
	$Index = 0;
		$Query4 = "SELECT * FROM main  WHERE cid = '3' AND fid = '2' order by date Desc  Limit 3" ;
		//echo $Query; die();
		$rstRow4 = mysql_query($Query4);
		//echo $Query; die();
		while($objRow4 = mysql_fetch_object($rstRow4)){
			$Index++;
		?>
		
	<tr>
				<td style="padding-top:7px"><a href='list.php?date=<?php echo $objRow4-> date;?>&cid=<?php echo $objRow4->cid;?>&fid=<?php echo $objRow4->fid;?>&vid=<?php echo $objRow5->vid;?>'><ul><li> <?php echo $objRow4->date;?> </li></ul></a></td>

		<?php /*?><td><?php echo $objRow->unit;?></td>
		<td><?php echo $objRow->price;?></td><?php */?>
		<?php /*?><td><?php echo $objRow->city;?></td><?php */?>
		
	</tr>
		<?php } ?>
	
					
					</table>
					
					
					
					
					
					<!--<h2>Recent Post</h2>
					<ul>
						<li><a href="index.html">Cras tempor turpis</a></li>
						<li><a href="index.html">Mattis tempor</a></li>
						<li><a href="index.html">Lectus tincidunt</a></li>
						<li><a href="index.html">Pharetra metus</a></li>
						<li><a href="index.html">Donec vitae vehicula</a></li>
					</ul>
					<h2>Archive</h2>
					<ul>
						<li><a href="index.html">Cras tempor turpis</a></li>
						<li><a href="index.html">Mattis tempor</a></li>
						<li><a href="index.html">Lectus tincidunt</a></li>
						<li><a href="index.html">Pharetra metus</a></li>
						<li><a href="index.html">Donec vitae vehicula</a></li>
					</ul>-->
				</div>
			</div>
		</div>
		<div id="footer">
			<ul>
				<li>
					<marquee behavior="alternate" scrollamount="5px" ><h3>Shout Slogans</h3></marquee>
					<div id="magazine">
						<p>Fruits and Vegetables Slogans</p>
						<a href="slogans.php"><img src="images/slogans-280x280.jpg" alt="Image" /></a>
					</div>
				</li>
				<li>
				<marquee behavior="alternate" scrollamount="5px" ><h3>Gallery</h3></marquee>
					<div id="gallery">
						<p>Healthy Organic Source</p>
						<a href="index.php"><img src="images/Health-Insurance-and-the-Health-Care-System.png" alt="Image" /></a>
						<p> Fruits & Vegetables are an important part of a healthy balanced diet.</p>
						<a href="tips.php" class="viewall">View all Photos</a>
					</div>
				</li>
				<li>
				<marquee behavior="alternate" scrollamount="5px" ><h3>FeedBack</h3></marquee>
					<div>
						<form name="contact_form" method="post" action="">
			<table border="0" style="margin:10px 0 0 0px;" width="200">
				<?php
				if(isset($_REQUEST['success'])){
				?>
				<tr>
					<td colspan="3" style="color: #0D4D79; float:left; margin-left:8px; width:200px;margin-top:-8px;font-family:'Agency FB';font-size:14px">Your Feedback has been successfully Submit.</td>
				</tr>
				<?php	
				}
			?>
		
			</table>

		  <table border="0" style="margin:5px 0 0 5px;" width="300">
		  			<tr>
				<td class="bg">Name</td>
				<td width="3"></td>
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
				<td style="padding-left:5px;font-size:12px">Message</td>
				<td></td>
				<td><textarea rows="5" cols="16" name="message" placeholder="Message..." style="background:#d0c5b0;color:#0D4D79;padding:0 5px;border-radius:2px;margin-left:-75px"></textarea></td>

			</tr>
			 <tr >
				<td colspan="3" ><input type="submit" name="Submit" value="Submit" onclick="return verify();" class="button"/></td>
			</tr>

		 </table>
		</form>
					
				
				
					<!--<h3>Suppliers Directory</h3>
					<div>
						<b>Lorem ipsum dolor</b>
						<span>Vivamus placerat eros aligula vulpu</span>
						<p>(+36) 924-068-207</p>
						<b>Molestie Faucibus</b>
						<span>Proin magna velit, mattis portitor</span>
						<p>(+36) 924-068-207</p>
						<b>Vestibulum Matti</b>
						<p>(+36) 924-068-207</p>
						<a href="index.html" class="viewall">View all Suppliers</a>-->
					</div>
				</li>
				<li>
				<marquee behavior="alternate" scrollamount="5px" ><h3>Get In Touch</h3></marquee>
					<div>
						<p>Email:<br />aliimtiaz393@gmails.com<br /><br /></p>
						<p>Address:<br /> COMSATS Institute of Information Technology </br>1.5 KM Off GT Road Sahiwal</p>
						</br>
						<p>Phone:<br />  +92-322-6073772</p>
					</div>
				</li>
			</ul>
			<div>
<!--				<p class="connect">Join us on <a href="http://facebook.com/freewebsitetemplates" target="_blank">Facebook</a> &amp; <a href="http://twitter.com/fwtemplates" target="_blank">Twitter</a></p>
-->				
				<p style="float:left;" class="footnote">Government of Punjab-Price Control</p>
				<p  style="float:left;margin-left:80px" class="footnote" ><a href="slogans.php">Fruits and Vegetables Slogans</a></p>
				<p class="footnote">Copyright &copy;. All right reserved.</p>
			</div>
		</div>
	</div>
</body>
</html>