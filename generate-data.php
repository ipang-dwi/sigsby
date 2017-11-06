<?php 
	include('configdb.php');
	//============================================================= all map data =======================
	//fetch table rows from mysql db
	$sql = "SELECT id_wisata, lat, lng, kategori AS category, wisata, keterangan, fasilitas, alamat, pic 
			FROM wisata AS w INNER JOIN kategori_wisata AS kw 
			ON w.id_kategori = kw.id_kategori 
			ORDER BY id_wisata";
	$result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));
	//create an array
	$emparray[] = array();
	while($row =mysqli_fetch_assoc($result)){
		$emparray[] = $row;
	}
	//write to json file
	$fp = fopen('data/data-semua.json', 'w');
	fwrite($fp, json_encode($emparray));
	fclose($fp);
	//============================================================= event map data =====================
	$sql = "SELECT id_event, lat, lng, event, keterangan, fasilitas, alamat, pic 
			FROM event
			ORDER BY id_event";
	$result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));
	//create an array
	$emparray1[] = array();
	while($row =mysqli_fetch_assoc($result)){
		$emparray1[] = $row;
	}
	//write to json file
	$fp = fopen('data/data-event.json', 'w');
	fwrite($fp, json_encode($emparray1));
	fclose($fp);
	//========================================================= wisata kuliner map data ================
	$sql = "SELECT id_wisata, kategori AS category, lat, lng, wisata, keterangan, fasilitas, alamat, pic 
			FROM wisata AS w INNER JOIN kategori_wisata AS kw 
			ON w.id_kategori = kw.id_kategori
			WHERE kw.id_kategori = 3
			ORDER BY id_wisata";
	$result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));
	//create an array
	$emparray2[] = array();
	while($row =mysqli_fetch_assoc($result)){
		$emparray2[] = $row;
	}
	//write to json file
	$fp = fopen('data/data-wisata-kuliner.json', 'w');
	fwrite($fp, json_encode($emparray2));
	fclose($fp);
	//========================================================== wisata religi map data ================
	$sql = "SELECT id_wisata, kategori AS category, lat, lng, wisata, keterangan, fasilitas, alamat, pic 
			FROM wisata AS w INNER JOIN kategori_wisata AS kw 
			ON w.id_kategori = kw.id_kategori
			WHERE kw.id_kategori = 4
			ORDER BY id_wisata";
	$result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));
	//create an array
	$emparray3[] = array();
	while($row =mysqli_fetch_assoc($result)){
		$emparray3[] = $row;
	}
	//write to json file
	$fp = fopen('data/data-wisata-religi.json', 'w');
	fwrite($fp, json_encode($emparray3));
	fclose($fp);
	//============================================================ wisata alam map data ================
	$sql = "SELECT id_wisata, kategori AS category, lat, lng, wisata, keterangan, fasilitas, alamat, pic 
			FROM wisata AS w INNER JOIN kategori_wisata AS kw 
			ON w.id_kategori = kw.id_kategori
			WHERE kw.id_kategori = 5
			ORDER BY id_wisata";
	$result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));
	//create an array
	$emparray4[] = array();
	while($row =mysqli_fetch_assoc($result)){
		$emparray4[] = $row;
	}
	//write to json file
	$fp = fopen('data/data-wisata-alam.json', 'w');
	fwrite($fp, json_encode($emparray4));
	fclose($fp);
	//========================================================== wisata sejarah map data ===============
	$sql = "SELECT id_wisata, kategori AS category, lat, lng, wisata, keterangan, fasilitas, alamat, pic 
			FROM wisata AS w INNER JOIN kategori_wisata AS kw 
			ON w.id_kategori = kw.id_kategori
			WHERE kw.id_kategori = 6
			ORDER BY id_wisata";
	$result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));
	//create an array
	$emparray5[] = array();
	while($row =mysqli_fetch_assoc($result)){
		$emparray5[] = $row;
	}
	//write to json file
	$fp = fopen('data/data-wisata-sejarah.json', 'w');
	fwrite($fp, json_encode($emparray5));
	fclose($fp);
	//=========================================================== wisata buatan map data ===============
	$sql = "SELECT id_wisata, kategori AS category, lat, lng, wisata, keterangan, fasilitas, alamat, pic 
			FROM wisata AS w INNER JOIN kategori_wisata AS kw 
			ON w.id_kategori = kw.id_kategori
			WHERE kw.id_kategori = 7
			ORDER BY id_wisata";
	$result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));
	//create an array
	$emparray6[] = array();
	while($row =mysqli_fetch_assoc($result)){
		$emparray6[] = $row;
	}
	//write to json file
	$fp = fopen('data/data-wisata-buatan.json', 'w');
	fwrite($fp, json_encode($emparray6));
	fclose($fp);
	//=========================================================== wisata buatan map data ===============
	/*$sql = "SELECT id_wisata, kategori AS category, lat, lng, wisata, keterangan, alamat, pic 
			FROM wisata AS w INNER JOIN kategori_wisata AS kw 
			ON w.id_kategori = kw.id_kategori
			WHERE kw.id_kategori = 8
			ORDER BY id_wisata";
	$result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));
	//create an array
	$emparray7[] = array();
	while($row =mysqli_fetch_assoc($result)){
		$emparray7[] = $row;
	}
	//write to json file
	$fp = fopen('data/data-fasilitas.json', 'w');
	fwrite($fp, json_encode($emparray7));
	fclose($fp);*/
	//==================================================================================================
?>