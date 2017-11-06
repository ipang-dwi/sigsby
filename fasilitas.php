<center>
<h2>Fasilitas yang ada di sekitar lokasi :</h2>
<table class="table table-hover">
<?php
	@$id = $_GET['id'];
	@$opsi = $_GET['opsi'];
	
	include('configdb.php');
	
	//fetch table rows from mysql db
	if($opsi=='wisata'){
	$sql = 'select fw.id_wisata, fw.id_fasilitas, kf.kategori_fasilitas as kategori, fa.fasilitas, fa.alamat
			from fasilitas_wisata as fw
			inner join fasilitas as fa
			on fw.id_fasilitas = fa.id_fasilitas
			inner join kategori_fasilitas as kf
			on fa.id_kategori = kf.id_kategori
			where fw.id_wisata = '.$id.'';
	}
	if($opsi=='event'){
	$sql = 'select fe.id_event, fe.id_fasilitas, kf.kategori_fasilitas as kategori, fa.fasilitas, fa.alamat
			from fasilitas_event as fe
			inner join fasilitas as fa
			on fe.id_fasilitas = fa.id_fasilitas
			inner join kategori_fasilitas as kf
			on fa.id_kategori = kf.id_kategori
			where fe.id_event = '.$id.'';
	}
	@$result = mysqli_query($connection, $sql) or die("Disable direct access, please give a right input " . mysqli_error($connection));

	//create an array
	$emparray[] = array();
	$i=1;
	while($row =mysqli_fetch_assoc($result))
	{
		$data = $row;
?>

							<tr><td></td><td></td><td></td></tr>
							<tr><td><b>Fasilitas <?php echo $i++;?></b></td><td></td><td><b><?php echo $data['fasilitas'];?></b></td></tr>
							<tr><td><b>Kategori</b></td><td>:</td><td><?php echo $data['kategori'];?></td></tr>
							<tr><td><b>Alamat</b></td><td>:</td><td><?php echo $data['alamat'];?></td></tr>
							<tr><td></td><td></td><td></td></tr>
						
<?php } ?>
						</table>