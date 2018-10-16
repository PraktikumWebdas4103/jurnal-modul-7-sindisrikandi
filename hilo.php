<form  method="POST" >
	<center>
		<body background="no.jpg">
	<table border="1" bgcolor="#d8f9ff">

			
		
<tr ><td height="30"></td></tr>
<tr>
 <td height="52" colspan="3" bgcolor="#ff6699"><center>INPUT DATA</center>
 </td></tr>
 <tr>
		 	<td height ="20" width="2px" colspan="2" bgcolor="#7FFFD4"> Jenis Kelamin <input type="radio" name="gender" value="male"> Male
  <input type="radio" name="gender" value="female"> Female
  <input type="radio" name="gender" value="other"> Other
</td></tr>
	


			<tr bgcolor="#fcf5b8">
	<td>Nim	:</td>
	<td><input type="text" name="nim" minlength="10" maxlength="10" required=""></td>
		</tr>
		<tr bgcolor="pink">
	<td>Nama	:</td>
	<td><input type="text" name="nama" maxlength="25" required=""></td>
		</tr>
	
		<tr>
			 <td>
		Fakultas</td><td height="52" colspan="3" bgcolor="#ff6699"> <select name="fakultas">
				<option value="FTE">Fakultas Teknik Elektro</option>
				<option value="FIT">Fakultas Ilmu Terapan</option>
				<option value="FEB">Fakultas Ekonomi dan Bisnis</option>
				<option value="FKB">Fakultas Komunikasi dan Bisnis</option>
				<option value="FIK">Fakultas Industri Kreatif</option>
				<option value="FRI">Fakultas Rekayasa Industri</option>
				<option value="IF">Fakultas Informatika</option>
				</select> 
</td>
				<tr>
<td>Prodi</td>
			 <td height="52" colspan="3" bgcolor="#ff6699">
<select name="prodi">
		<option>PILIH PRODI</option>
		<option>Teknik Telekomunikasi </option>
		<option> Komputerisasi Akuntansi</option>
			<option>Manajaemen inormatika</option>
			<option>Perhotelan</option>
			<option>Teknik Komputer</option>
			<option>Manajemen Pemasaran</option>
			<option>Teknik informatika</option>
			<option>Sistem Multimedia</option>
		</select>
		</td>
		<tr>


		<tr>
			<td> Asal </td>
			<td> <input type="text" name="asal"> </td>
		</tr>
		<tr>
			<td> Moto Hidup </td>
		<td>	<input type="textarea" name="moto" ></td>
		<tr bgcolor="#fcf5b8">
	<td><input type="Submit" name="submit" value="Submit"></td>
		</tr>
	</table>
</center>
</form>
<?php
include 'conn.php';

$servername="localhost";
$nim="root";
$nama="";
$db="daftar";

if($con==false){
			die("koneksi gagal".$con->connect_error);

		}

if (isset($_POST['submit'])) {
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$gender =$_POST['gender'];
		$Prodi = $_POST['prodi'];
		$Fakultas = $_POST['fakultas'];
		$asal = $_POST['asal'];
		$moto = $_POST['moto'];
		
		
		$sql="INSERT INTO sindi VALUES ('$nim','$nama','$gender','$Prodi','$Fakultas','$asal','$moto')";

		if(mysqli_query($con,$sql)){
			echo "berhasil";;
		}else{
			echo"GAGAL";
			
		}

	
	}
?>


