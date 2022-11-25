<?php
	require_once 'conn.php';
	if(ISSET($_POST['upload'])){
		$image_name = $_FILES['image']['name'];
		$image_temp = $_FILES['image']['tmp_name'];
		$exp = explode(".", $image_name);
		$end = end($exp);
		$name = time().".".$end;
		$path = "upload/".$name;
		$allowed_ext = array("gif", "jpg", "jpeg", "png");
		if(in_array($end, $allowed_ext)){
			if(move_uploaded_file($image_temp, $path)){
				mysqli_query($conn, "INSERT INTO `image` VALUE('', '$name', '$path')") or die(mysqli_error());	
				echo "<script>alert('Image saved!')</script>";
echo "<script>window.location='index.php'</script>";			}
		}else{
			echo "<script>alert('Image only')</script>";
		}
	}
?>