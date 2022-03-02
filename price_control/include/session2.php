<?php
	$Query = "SELECT * FROM votes WHERE uid=" .$_SESSION['ID'];
		//echo $Query; die;
		$rstRow = mysql_query($Query);
		$rows = mysql_num_rows($rstRow);
				if($rows >=1){
			$objRow = mysql_fetch_object($rstRow);
			$_SESSION['ID'] = $objRow->uid;
			//echo $_SESSION['ID']; die;
			if($_SESSION['ID'] != ""){
		header("location: signIn.php");
	}
				}
?>
