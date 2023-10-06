<?php
header('Access-Control-Allow-Origin:*');
header('Content-type: application/json');

//hubungkan ke database
include "koneksi.php";
//hubungkan ke fungsi.php
include "fungsi.php";
//inisialisasi array untuk menyimpan data berita
$data =  array();

$id = 0;
if(isset($_GET['id'] && cekId($_GET['id'])){
    $id = $_GET['id'];
    //Query untuk mengambil data berita berdasarkan ID
    $sql = "SELECT * FROM berita WHERE id=$id";
    //Eksekusi Query
    $result = mysqli_query($conn, $sql);

    // cek apakah data ditemukan

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $data = $row;
    }else{
        //jika data tidak ditemukan , kirim resoin JSON dgn pesan error
        $data['error'] = 'Data tidak ditemukan';
    }   
}
else{
    $data['error'] = 'Invalid ID';
}


?>
