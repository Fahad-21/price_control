<?php 
include("config/opencon.php");

	
			
	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="themes/5/js-image-slider.css" rel="stylesheet" type="text/css" />
<script src="themes/5/js-image-slider.js" type="text/javascript"> </script>
<link rel="stylesheet" type="text/css" href="Style/style.css"  />
<title>Automated Price Control</title>
<link rel="icon" type="image/png" href="image/images/gvt_03.jpg">
</head>
<body>
<div style="float:left; width:100%;float:left">
			<div style="width:1000px;background-color:#0a2540;height:80px;float:left">

<!--	<div style="background-image:url(Images/images/logo_02.jpg); width:1000px;height:75px;float:left">
-->			<div style="width:5px;height:70px;margin-left:130px;margin-top:5px;float:left"><img src="image/images/gvt_03.jpg" /></div>

			<marquee behavior="alternate"><marquee width="180">	<a href="index.php" style="text-decoration:none"><div style="color:#3e3524;font-size:36px;font-family:'Agency FB';"> <div style="color:#164773;"> Automated</div> Price Control</div></a></marquee></marquee>
<!--		<div style="background:url(Images/images/org_02.jpg) no-repeat;width:27px;height:27px;float:left;margin-left:400px;margin-top:23px"></div>
-->	</div>
	<div class="main_body">
		<div style="width:716px; float:left;margin-top:5px">
		<div class="menu" style="background:#0d6590">
			<a href="index.php">HOME</a>
			<a href="selective.php">PRICE OF GOODS</a>
			<a href="prices.php">RECENT SOLUTIONS</a>
			<a href="index.php">OUR PROJECTS</a>
			<a href="index.php">LEADERSHIP</a>
			<a href="index.php">OUR CONTACTS</a>
		</div>
		<div class="clr"></div>
		<div style="height:282px;">
			<div id="sliderFrame">
        	<div id="ribbon"></div>
        	<div id="slider">
        	<img src="image/images-(4).png" />
        	<img src="image/imags-(3).png" /> 
        	<img src="image/strawberries.png" />
        	<img src="image/images).png" />
        	<img src="image/imgs.png" />
        	<img src="image/images-(6).png" />   
                   </div>
        	<div style="display: none;">
            
        </div>   
    </div>
		</div>
		<div style="background-color:#ebeff3;padding-top:27px;height:517px;margin-top:7px">
				 <table cellpadding="0" cellspacing="0" border="1" width="716px" id="mt" >
	<tr style="color:#000">
		<th><strong>Sr.No</strong></th>
<!--		<td><strong>Id</strong></td> 
-->		<th><strong>Name</strong></th>
		<th><strong>Unit</strong></th>
		<th><strong>Price</strong></th>
		<!--<th><strong>City </strong></th>-->
		<!--<th><strong>DOB</strong></th>
		<th><strong>Email</strong></th>
		<th><strong>Password</strong></th>
		<th><strong>Address</strong></th>
		<th><strong>City</strong></th>
		<th><strong>Phone</strong></th>
		<th><strong>Gender</strong></th>
		<th><strong>Constituency</strong></th>
		<th><strong>District</strong></th>
		<th><strong>Division</strong></th>
		<th><strong>zip</strong></th>
		<th>Edit</th>
		<th>Delete</th>-->
	</tr>
	<?php
	//echo $_REQUEST['date'];
		$Query = "SELECT * FROM apple  WHERE date =' " .$_REQUEST['date']."'" ;
		$rstRow = mysql_query($Query);
		//echo $Query; die();
		$objRow = mysql_fetch_object($rstRow);
		
		$Query1 = "SELECT * FROM mango  WHERE date =' " .$_REQUEST['date']."'" ;
		$rstRow1 = mysql_query($Query1);
		//echo $Query1; die();
		$objRow1 = mysql_fetch_object($rstRow1);
		//echo $objRow; die();
		
	?>
	
	<tr>
		<td align="center"><?php echo $objRow->id;?></td>
		<td><?php echo $objRow->unit;?></td>
		<td><?php echo $objRow->price;?></td>
		<?php /*?><td><?php echo $objRow->city;?></td><?php */?>
		
	</tr>
	<tr>
		<td align="center"><?php echo $objRow->id;?></td>
		<td><?php echo $objRow1->unit;?></td>
		<td><?php echo $objRow1->price;?></td>
		<?php /*?><td><?php echo $objRow1->city;?></td><?php */?>
		
	</tr>
	
</table>
				
					</div>
					</br>
	</div>
	
	<div style="width:270px;float:left;margin-top:5px">
		<div style="background-color:#0d6590;width:274px;float:left;margin-left:10px;height:33px;text-align:center;padding-top:17px;color:#FFF;font-family:Arial, Helvetica, sans-serif;font-size:18px;">LATEST NEWS
		</div>
		<div class="clr"></div>
		<div style="background:url(Images/images/MUAWIN_16.jpg);width:266px;height:263px;margin-left:10px;font-size:10px;float:left;padding:19px 5px 5px 5px;color:#687f96">
						adsi asdsusa lasfsdia laskffifss alsdhssf add asd qwqe wrwe rwer wedw werw werrw eqwe fw wqe wqe r34 r43 rgt retrt rt rterg rtgrty yrtygergt erter t4e</br>
						sddew ewrew ewr ewg yuj etr hrewe erfe  </br>
						rwerr idef wern </br></br>
						dsfer etr ewrtr  we  tuo erre asdsd kui awsrw </br>
						qeee r tu ikui et 8wr   tretr w qe terretry ewr utry  </br>
						sd efr4 ytu tyu dxvd  lu das k wd jyu d yuj wdw rhsadw wewe wqe </br></br>
		
						d wettruj7o  ret p  gf oiul ertytyi yrerey tyed  gyijijt </br>
						dsfer etr ewrtr  we  tuo erre asdsd kui awsrw </br>
						qeee r tu ikui et 8wr   tretr w qe terretry ewr utry wqe qweqw qw </br>
						sd efr4 ytu tyu dxvd  lu das k wd jyu d yuj wdw rh </br></br>
						d wettruj7o  ret p  gf oiul ertytyi yrerey tyed  gyijijt </br>
						sd efr4 ytu tyu dxvd  lu das k wd jyu d yuj wdw rh </br>
		</div>
		<div style="background-color:#0d6590;width:276px;float:left;margin-left:10px;height:33px;text-align:center;padding-top:17px;color:#FFF;font-family:Arial, Helvetica, sans-serif;font-size:18px;">LATEST NEWS
		</div>
		<div class="clr"></div>
		<div style="background:url(Images/images/MUAWIN_16.jpg);width:266px;height:200px;margin-left:10px;font-size:10px;float:left;padding:19px 5px 5px 5px;color:#687f96">
						adsi asdsusa lasfsdia laskffifss alsdhssf add asd qwqe wrwe rwer wedw werw werrw eqwe fw wqe wqe r34 r43 rgt retrt rt rterg rtgrty yrtygergt erter t4e</br>
						sddew ewrew ewr ewg yuj etr hrewe erfe  </br>
						rwerr idef wern </br></br>
						dsfer etr ewrtr  we  tuo erre asdsd kui awsrw </br>
						qeee r tu ikui et 8wr   tretr w qe terretry ewr utry  </br>
						sd efr4 ytu tyu dxvd  lu das k wd jyu d yuj wdw rhsadw wewe wqe </br></br>
		
						d wettruj7o  ret p  gf oiul ertytyi yrerey tyed  gyijijt </br>
						dsfer etr ewrtr  we  tuo erre asdsd kui awsrw </br>
						qeee r tu ikui et 8wr   tretr w qe terretry ewr utry wqe </br>
						
		</div>
		<div style="background-color:#0d6590;width:276px;float:left;margin-top:8px;margin-left:10px;height:35px;text-align:center;padding-top:17px;color:#FFF;font-family:Arial, Helvetica, sans-serif;font-size:18px;">LATEST NEWS
		</div>
		<div class="clr"></div>
		<div style="background:url(Images/images/MUAWIN_16.jpg);width:266px;height:186px;margin-left:10px;font-size:10px;float:left;padding:19px 5px 5px 5px;color:#687f96">
						adsi asdsusa lasfsdia laskffifss alsdhssf add asd qwqe wrwe rwer wedw werw werrw eqwe fw wqe wqe r34 r43 rgt retrt rt rterg rtgrty yrtygergt erter t4e</br>
						sddew ewrew ewr ewg yuj etr hrewe erfe  </br>
						rwerr idef wern </br></br>
						dsfer etr ewrtr  we  tuo erre asdsd kui awsrw </br>
						qeee r tu ikui et 8wr   tretr w qe terretry ewr utry  </br>
						sd efr4 ytu tyu dxvd  lu das k wd jyu d yuj wdw rhsadw wewe wqe </br></br>
		
						d wettruj7o  ret p  gf oiul ertytyi yrerey tyed  gyijijt </br>
						dsfer etr ewrtr  we  tuo erre asdsd kui awsrw </br>
						
						
		</div>
		
	</div>
	
	</div>
	
	<div style="background-color:#0a2540;width:1001px;height:160px;float:left;margin-top:-12px;font-size:11px;font-family:Tahoma, Geneva, sans-serif;color:#f5f7fa;text-align:center;vertical-align:middle;padding-top:40px;">Government of Punjab  | Price Control</div>	




</div>
</body>
</html>
