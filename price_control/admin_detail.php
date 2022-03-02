<?php
	session_start();
	include("include/session.php");
	include("config/opencon.php");
		?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="jquery-1.4.4.min.js" type="text/javascript"></script>
    <script src="smartpaginator.js" type="text/javascript"></script>
    <link href="smartpaginator.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
        $(document).ready(function () {
            $('#green-contents').css('display', 'none');
            $('#black-contents').css('display', 'none');
            $('ul li').click(function () {
                $('#red-contents').css('display', 'none');
                $('#green-contents').css('display', 'none');
                $('#black-contents').css('display', 'none');
                if ($(this).attr('id') == '1') $('#red-contents').css('display', '');
                if ($(this).attr('id') == '2') $('#green-contents').css('display', '');
                if ($(this).attr('id') == '3') $('#black-contents').css('display', '');
            });

            $('#green').smartpaginator({ totalrecords: 10, recordsperpage: 5, datacontainer: 'mt', dataelement: 'tr', initval: 0, next: 'Next', prev: 'Prev', first: 'First', last: 'Last', theme: 'green' });
			 });
    </script>
    <style type="text/css">
        body
        {
            padding: 20px;
        }
        #wrapper
        {
            margin: auto;
            width: 800px;
        }
        .contents
        {
            width: 91%; /*height: 150px;*/
            margin: 0;
        }
        .contents > p
        {
            padding: 8px;
        }
        .table
        {
            width: 100%;
            border-right: solid 1px #5f9000;
        }
        .table th, .table td
        {
            width: 16%;
            height: 20px;
            padding: 4px;
            text-align: left;
        }
        .table th
        {
            border-left: solid 0px #009;
        }
        .table td
        {
            border-left: solid 1px #5f9000;
            border-bottom: solid 1px #5f9000;
        }
        .header
        {
            background-color: #930;
            color: White;
        }
        #divs
        {
            margin: 0;
            height: 200px;
            font: verdana;
            font-size: 14px;
            background-color: White;
        }
        #divs > div
        {
            width: 98%;
            padding: 8px;
        }
        #divs > div p
        {
            width: 95%;
            padding: 8px;
        }
        ul.tab
        {
            list-style:disc ;
            margin: 0;
            padding: 0;
        }
        ul.tab li
        {
            display: inline;
            padding: 0;
            color: #009;
            cursor: crosshair;
        }
        #container
        {
            width: 100%;
            border: solid 1px red;
        }
    </style>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<div style="float:left; width:100%;background-color:#999;height:524px;margin-top:-15px">
					<div style="color:#fff;background-color:#900;height:524px;width:230px;float:left" class="att" id="header" >
			<ul class="a" style="margin-top:-0px">
		 	</br></br><li><a href="registration.php" >Registration</a></br></br></li>
			<li class="current"><a href="admin_detail.php" >Admin detail</a></br></br></li>
			<li><a href="add_page.php">Add page</a></br></br></li>
			<li><a href="show_page.php">View page</a></br></br>	</li>		
			<li><a href="heading.php">Heading</a></br></br></li>
			<li><a href="update_heading.php">Update Heading</a></br></br></li>
			<li><a href="detail_veg.php">Detail List of Vegetables</a></br></br></li>
			<li><a href="Detail_Fruits.php">Detail List of Fruits</a></br></br></li>
			<li><a href="city.php">Add City</a></br></br></li>
			<li><a href="feed_view.php">View Feedback</a></br></br></li>
			</ul>
				</div>
				<div style="width:5px;height:524px;background-color:#FFF;float:left"></div>
	
				
				
				
				<div style="float:left; margin-top:20px; ">
	
		 <table cellpadding="0" cellspacing="0" border="1" width="980px" id="mt" style="margin-left:20px">
	<tr style="color:#fff;background-color:#036">
		<th height="40"><strong>ID</strong></th>
<!--		<td><strong>Id</strong></td> 
-->		<th><strong>F_Name</strong></th>
		<th><strong>L_Name</strong></th>
		<!--<th><strong>Father_Name</strong></th>-->
		<th><strong>CNIC </strong></th>
		<th><strong>DOB</strong></th>
		<th><strong>Email</strong></th>
<!--		<th><strong>Password</strong></th>
-->		<th><strong>Address</strong></th>
		<th><strong>City</strong></th>
		<th><strong>Phone</strong></th>
		<th><strong>Gender</strong></th>
		<th><strong>zip</strong></th>
<!--		<th>Edit</th>
-->		<th>Delete</th>
	</tr>
	<?php
		$Index = 0;
		$Query = "SELECT * FROM registration ";
		$rstRow = mysql_query($Query);
		while($objRow = mysql_fetch_object($rstRow)){
			$Index++;
			
	?>
	<tr>
		<td align="center"><?=$Index;?></td>
		<?php /*?><td><?php echo $objRow->id;?></td><?php */?>
		<td style="text-align:center"><?php echo $objRow->First_Name;?></td>
		<td style="text-align:center"><?php echo $objRow->Last_Name;?></td>
		<?php /*?><td><?php echo $objRow->Father_Name;?></td><?php */?>
		<td style="text-align:center"><?php echo $objRow->CNIC;?></td>
		<td style="text-align:center"><?php echo $objRow->DOB;?></td>
		<td style="text-align:center"><?php echo $objRow->Email;?></td>
<?php /*?>		<td><?php echo $objRow->Password;?></td>
<?php */?>		<td style="text-align:center"><?php echo $objRow->Address;?></td>
		<td style="text-align:center"><?php echo $objRow->City;?></td>
		<td style="text-align:center"><?php echo $objRow->Phone;?></td>
		<td style="text-align:center"><?php echo $objRow->Gender;?></td>
		<td style="text-align:center"><?php echo $objRow->Zip;?></td>
		
<?php /*?>		<td align="center"><a href="edit.php?id=<?php echo $objRow->id;?>"><img src="images/edit.gif" title="Click here to edit details" /></a></td>
<?php */?>		<td align="center"><a href="user_del.php?id=<?php echo $objRow->id;?>">Delete</a></td>
	</tr>
	<?php } ?>
</table>
</div>
 <div id="green" style="float:left">
           
        </div>

</div>
</body>

</html>
