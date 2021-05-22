<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$nama = $_POST['nama'];
	$TTL = $_POST['TTL'];
	$alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
	$no_telpon = $_POST['no_telpon'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE info_karyawan SET nama='$nama',TTL='$TTL',alamat='$alamat', jenis_kelamin='$jenis_kelamin',no_telpon='$no_telpon' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM info_karyawan WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$nama = $user_data['nama'];
	$TTL = $user_data['TTL'];
	$alamat = $user_data['alamat'];
	$jenis_kelamin = $user_data['jenis_kelamin'];
	$no_telpon = $user_data['no_telpon'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
</head>
 
<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>nama</td>
				<td><input type="text" name="nama" value=<?php echo $nama;?>></td>
			</tr>
			<tr> 
				<td>TTL</td>
				<td><input type="text" name="TTL" value=<?php echo $TTL;?>></td>
			</tr>
			<tr> 
				<td>alamat</td>
				<td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
			</tr>
			<tr> 
				<td>jenis_kelamin</td>
				<td><input type="text" name="jenis_kelamin" value=<?php echo $jenis_kelamin;?>></td>
			</tr>
			<tr> 
				<td>no_telpon</td>
				<td><input type="text" name="no_telpon" value=<?php echo $no_telpon;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>