<div class="container">
<h1>Tambah Data</h1>
<form action="input-datadiri-tambah.php" method="POST">
    <label for="nis">Nomor Induk Siswa : </label>
    <input class ="form-control" type="number" name="nis" placeholder="EX. 123456789" /><br>

    <label for="nama">Nama Lengkap :</label>
    <input class="form-control" type="text" name="nama" placeholder="Ex . David Lutphi" /><br>


    <label for="tanggal_lahir">Tanggal Lahir :</label>
    <input class="form-control" type="date" name="tanggal_lahir" /><br>


    <label for="nilai">Nilai :</label>
    <input class="form-control" type="number" name="nilai" placeholder="Ex . 80.56 " /><br>

    <input class="btn btn-sm btn-success" type="submit" name="simpan" value="Simpan Data" />
    <a class="btn btn-sm btn-secondary" href="input-datadiri.php">Kembali</a>
</form>
<?php
include('./input-config.php');
if ($_SESSION["login" ] != TRUE)
{
    header('location:login.php');
}
if($_SESSION["role"] != "admin")
{
    echo "
    <script>
    alert('Akses tidak diberikan, Kamu Bukan admin')
    window.location='input-datadiri.php'
    </script>";
}
if(isset($_POST["simpan"]))
{
//deklarasi Variabel
 $nis = $_POST["nis"];
 $nama = $_POST["nama"];
 $tanggal_lahir = $_POST["tanggal_lahir"];
 $nilai = $_POST["nilai"];
 //CREATE -Menambahkan Data ke Database
 $query = "
 INSERT INTO datadiri VALUES 
 ('$nis','$nama','$tanggal_lahir','$nilai');";


 if ($insert)
 {
    echo"
    <script>
         alert('Data berhasil ditabahkan');
         window.location='input-datadiri.php';
    </script>";
 }
}
?>