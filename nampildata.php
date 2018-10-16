
<?php
include 'hilo.php';
$sql = mysqli_query($con,"SELECT * FROM sindi");
?>
<form action="" method="POST">
	<table border="1" cellpadding="0" cellpadding="0">
		<tr>
			<th>nim</th>
			<th>nama</th>
			
			
						</tr>
						<?php

						if(mysqli_num_rows($sql)>0){
							$no=1;
							while ($data =mysqli_fetch_array($sql)) {
							?>
							<table border="2" >
							<tr>
								<td><?php echo $no ?></td>
								<td><?php echo $data["nim"];?> </td>
								<td><?php echo $data["nama"];?> </td>
							
								<td>
								</tr>
							</table>
								<?php $no++; } ?>
							<?php } ?>

						
						


</form>

