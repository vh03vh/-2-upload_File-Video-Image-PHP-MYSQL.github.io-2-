<div class="col-md-12">
	<?php
		require 'conn.php';
		$query = mysqli_query($conn, "SELECT * FROM `image` ORDER BY RAND() LIMIT 4") or die(mysqli_error());
		while($fetch = mysqli_fetch_array($query)){
	?>
		<img src="<?php echo $fetch['location']?>" style="margin:10px; float:left;" height="150" width="150"/>
	<?php
		}
	?>
</div>