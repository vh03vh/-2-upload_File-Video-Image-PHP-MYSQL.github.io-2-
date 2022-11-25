<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['submit'])){
		if($_FILES['upload']['name'] != "") {
			$file = $_FILES['upload'];
			
			$file_name = $file['name'];
			$file_temp = $file['tmp_name'];
			$name = explode('.', $file_name);
			$path = "files/".$file_name;
			
			$conn->query("INSERT INTO `file` VALUES('', '$name[0]', '$path')") or die(mysqli_error());
			
			move_uploaded_file($file_temp, $path);
			header("location:index1.php");
			
		}else{
			echo "<script>alert('Required Field!')</script>";
			echo "<script>window.location='index1.php'</script>";
		}
	}
?>