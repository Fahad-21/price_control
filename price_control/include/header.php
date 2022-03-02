	<div class="logo">
    	<div  class="text" style="color:#00F">
      			Online Election System
        </div>
			<div class="logo1"></div>

    </div>
    <div class="clr"></div>
		<div class="menu" style="background:#F00">
			<a href="index.php">Home</a>
			<a href="election.php">Elections</a>
			<a href="political_parties.php">Political Parties</a>
			<a href="about.php">About</a>
			<?php /*?><a href="admin.php">Admin</a>
			<?php
				if($_SESSION['TYPE'] !=""){
			?>
				<a href="include/admin_signout.php?signout">Sign Out</a>

			<?php } ?>
<?php */?>
			<?php
				if($_SESSION['ID'] !=""){
			?>
				
				<a href="signIn.php">Profile</a>
				<a href="include/signout.php?signout">Sign Out</a>
			<?php } ?>
					<a href="contact.php">Contact</a>
		</div>
         <div class="clr"></div>
