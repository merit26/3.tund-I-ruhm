<h3>Men��</h3>
<?php echo $page_file_name; ?>
<ul>
	<?php
	//�ksk�ik mis lehe puhul n�itab linki, home lehe puhul nime	
		if($page_file_name != "home.php") { ?>
			
	      <li><a href="home.php>Avaleht</a></li>
		<?php } else { ?>	
		  <li>Avaleht</li>
		<?php } ?>
		
	<li><a href="login.php"">Logi sisse</a></li>
	
	<?php
	//�ksk�ik mis lehe puhul n�itab linki, home lehe puhul nime	
		if($page_file_name != "login.php") { ?>
			
	      <li><a href="login.php>Logi sisse</a></li>
		<?php } else { ?>	
		  <li>Logi sisse</li>
		<?php } ?>
		
	<li><a href="login.php"">Logi sisse</a></li>
</ul>