<?php 
//cek apakah dari tombol submit
If( isset($_POST["submit"]) ) {
	
	$nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $id_jurusan = $_POST['id_jurusan'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tempat_tll = $_POST['tempat_tll'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $con = mysqli_connect("localhost", "root", "", "seal_fakultas");
    $sql = "insert into mahasiswa('nim','nama', 'id_jurusan','jenis_kelamin','tempat_tll', 'tanggal_lahir','alamat') value($nim','$nama', '$id_jurusan','$jenis_kelamin',
    '$tempat_tll', '$tanggal_lahir','$alamat')";

    //2 check coneksi 
 if (mysqli_connect_errno()) {
    echo "failed to connect to  MYQL : ".mysqli_connect_error();
    exit();
 }else{
    echo "koneksi berhasil";
    # code...
 }
    mysqli_close($con);

}






?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambha  Data mahasiswa </title>
</head>
<body>
    <form action="insert.php" method="post">
        NIM :
        <input type="text" name="nim">
        <br>
        Nama :
        <input type="text" name="nama">
        <br>
        ID Jurusan :
        <input type="number" name="id_jurusan">
        <br>
        Jenis Kelamin:
        <input type="text" name="jenis_kelamin">
        <br>
        Tempat Tanggal Lahir:
        <input type="text" name="tempat_tll">
        <br>
        Tanggal Lahir(yyyy-mm-dd):
        <input type="text" name="tanggal_lahir">
        <br>
        Alamat:
        <input type="text" name="alamat">
        <br>
        <br>
        <button type="submit" name="submit"> Tambah Mahasiswa</button>
    </form>
</body>
</html>