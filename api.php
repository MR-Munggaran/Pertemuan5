<?php
header('Access-Control-Allow-Origin:*');
header('Content-type: application/json');

//hubungkan ke database
include "connect.php";
//hubungkan ke fungsi.php
include "fungsi.php";
//inisialisasi array untuk menyimpan data berita
$data =  array();

//jika ada yang menulis //http://localhost/Pertemuan5/api.php?id=1
if(isset($_GET['id']) && cekId($_GET['id'])){
    $id = $_GET['id'];
    //Query untuk mengambil data berita berdasarkan ID
    $sql = "SELECT * FROM berita WHERE id=$id";
    //Eksekusi Query
    $result = mysqli_query($conn, $sql);

    // cek apakah data ditemukan

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $data = $row;
    }
    //jika ada yang menulis //http://localhost/Pertemuan5/api.php?id=Selain-angka
    else{
        //jika data tidak ditemukan , kirim resoin JSON dgn pesan error
        $data['error'] = 'Data tidak ditemukan';
    }   
}
else{
    //jika ID invalid atau id tidak diberikan
    $data['error'] = 'Invalid ID';
}
// tampilkan data dalam format JSON
echo json_encode($data);
// tutup koneksi database
mysqli_close($conn);
?>
