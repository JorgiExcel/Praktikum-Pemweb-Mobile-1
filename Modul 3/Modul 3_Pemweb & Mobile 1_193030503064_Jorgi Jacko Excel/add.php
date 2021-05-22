<html>
<head>
	<title>Add Info Karyawan</title>
</head>
 
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr> 
				<td>TTL</td>
				<td><input type="text" name="TTL"></td>
			</tr>
			<tr> 
				<td>alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
            <tr> 
				<td>jenis_kelamin</td>
				<td><input type="text" name="jenis_kelamin"></td>
			</tr>
            <tr> 
				<td>no_telpon</td>
				<td><input type="text" name="no_telpon"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$nama = $_POST['nama'];
		$TTL = $_POST['TTL'];
		$alamat = $_POST['alamat'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
		$no_telpon = $_POST['no_telpon'];
        
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO info_karyawan(nama,TTL,alamat,jenis_kelamin,no_telpon) VALUES('$nama','$TTL','$alamat', '$jenis_kelamin', '$no_telpon')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>