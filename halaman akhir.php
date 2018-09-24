<?php
	echo "Daftar Hobi : "."<br>";
	$hobby = array($_POST['hobi']);

	foreach($_POST['hobi'] as $hobby) {

	echo "-".$hobby."<br>" ;
	}

	echo "<br>"."Upload Foto : ";
	
	$file=$_FILES['dokumen'];
	$nama_file=$file['name'];
	$nama_tmp=$file['tmp_name'];
	$upload_dir= "upload/";
	move_uploaded_file($nama_tmp, $upload_dir.$nama_file);
	

?>
<br><img width = "500" src="upload/<?php echo $nama_file; ?>"><br>

<br><a href="hal.html"><input type="submit" name="Delete" value="DELETE" ></a>

