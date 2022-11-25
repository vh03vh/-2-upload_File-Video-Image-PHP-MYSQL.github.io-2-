<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
	</head>
<body style="background-color: #509ddf;">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php">Upload-Image</a>
			<a class="navbar-brand" href="index.php"></a>
			<a class="navbar-brand" href="index2.php">Upload-Video</a>
			<a class="navbar-brand" href="index1.php">Upload-File</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">PHP - Upload and Download </h3>
		<hr style="border-top:1px dottec #ccc;">
		<form class="form-inline" method="POST" action="uploaded.php" enctype="multipart/form-data">
			<input class="form-control" type="file" name="upload"/>
			<button type="submit" class="btn btn-success form-control" name="submit"><span class="glyphicon glyphicon-upload"></span> Upload</button>
		</form>
		<br /><br />
		<table class="table table-bordered">
			<thead class="alert-warning">
				<tr>
					<th>Name</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody class="alert-success">
				<?php
					require 'conn.php';
					$row = $conn->query("SELECT * FROM `file`") or die(mysqli_error());
					while($fetch = $row->fetch_array()){
				?>
					<tr>
						<?php 
							$name = explode('/', $fetch['file']);
						?>
						<td><?php echo $fetch['name']?></td>
						<td><a href="download.php?file=<?php echo $name[1]?>" class="btn btn-primary"><span class="glyphicon glyphicon-download"></span> Download</a></td>
					</tr>
				<?php
					}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>