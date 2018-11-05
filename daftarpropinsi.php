<?php 

if($_SERVER['REQUEST_METHOD']=="GET"){
	require 'koneksi.php';
	daftarPropinsi($_GET['search']);
}
function daftarPropinsi($search){
	global $koneksi;
	if($koneksi->connect_error){
		die("Koneksi gagal: ".$koneksi->connect_error);
	}
	$sql ="select * from tb_propinsi where nama_propinsi like '%$search%' and dalam_negeri = 1 order by nama_propinsi asc";
	$result = $koneksi->query($sql);

	if($result->num_rows > 0){
		$list = array();
		$key = 0;
		while ($row =  $result->fetch_assoc()) {
			# code...
			$list[$key]['id'] = $row['id'];
			$list[$key]['text'] = $row['nama_propinsi'];
			$key++;
		}
		echo json_encode($list);
	}else{
		echo "hasil kosong";
	}
	$koneksi->close();
}

 ?>