<form method="post">
	<table>
		<tr>
		<td><a href="hilo.php">input Data</a></td>
		<td></td>
	</td></td>


		<td><input type="text" name="nim" placeholder="NIM">
		<input type="submit" name="submit" value="cari">

</form>


		<?php
		if(isset($_POST['submit'])){
			$nim =$_POST['nim'];
			include 'conn.php';
			$query= mysqli_query($con,"SELECT* from sindi");
			$no=1;
			print_r($data['nim']);
			print_r($data['nama']);
			$no++;

			echo "<table>
			echo Data Mahasiswa
			<tr>
			<td>Nama</td>
			<td>Nim</td>
			<td>Aksi</td>
			</tr>
			<tr>
			foreach ($query as $data){

			}	



			</tr>";
}
		?>

