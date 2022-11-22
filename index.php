<?php 
// 1.  buat  koneksi dengn mysql 
$con = mysqli_connect("localhost", "root", "", "seal_fakultas");

//2 check coneksi 
 if (mysqli_connect_errno()) {
    echo "failed to connect to  MYQL : ".mysqli_connect_error();
    exit();
 }else{
    echo "koneksi berhasil";
    # code...
 }

 //3 buat qery baca semua data tabel 
 $sql ="SELECT * FROM mahasiswa";

 //4 tampilkan data cek apkaha query dijalankan 

 $result = mysqli_query($con, $sql);
$mahasiswa = [];
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<br>". $row['nama'];
        $mahasiswa[]= $row;
    }
    mysqli_free_result($result);
}
// 5 tutup koneksi 
mysqli_close($con);


 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Data Mahasiswa</title>
 </head>
 <body>
   <h1>Data Mahasiswa</h1>
   <table border="1" style="width: 100%;">
   <tr>
      <th>NIM</th>
      <th>Nama</th>
      <th>Action </th>
     
   </tr>
   <?php  foreach ($mahasiswa as $value):  ?>
   <tr>
      <td><?= $value['nim'] ?></td>
      <td><?= $value['nama'] ?></td>
      <td>
         <a href="update.php?id=<? $row ['id'] ?> ">Edit</a>
         <a href=".php?id=<? $row ['id'] ?> ">Deleted</a>
      </td>
   </tr>
   <?php  endforeach; ?>
   

</table>
 </body>
 </html>