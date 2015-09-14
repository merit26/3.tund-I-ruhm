<h3>Menüü</h3>
<?php echo $page_file_name; ?>
<ul>
	<?php
	//ükskõik mis lehe puhul näitab linki, home lehe puhul nime	
		if($page_file_name != "home.php") { ?>
			
	      <li><a href="home.php>Avaleht</a></li>
		<?php } else { ?>	
		  <li>Avaleht</li>
		<?php } ?>
		
	<li><a href="login.php"">Logi sisse</a></li>
	
	<?php
	//ükskõik mis lehe puhul näitab linki, home lehe puhul nime	
		if($page_file_name != "login.php") { ?>
			
	      <li><a href="login.php>Logi sisse</a></li>
		<?php } else { ?>	
		  <li>Logi sisse</li>
		<?php } ?>
		
	<li><a href="login.php"">Logi sisse</a></li>
</ul>