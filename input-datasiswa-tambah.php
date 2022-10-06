<h1>Tambah Data</h1>
<form action="input-datasiswa-tambah.php" method="POST">
    <label for="nis">Nomor Induk Siswa : </label>
    <input type="number" name="nis" placeholder="EX. 123456789" /><br>

    <label for="nama">Nama Lengkap :</label>
    <input type="text" name="nama" placeholder="Ex . David Lutphi" /><br>


    <label for="tanggal_lahir">Kelas :</label>
    <input type="text" name="kelas" /><br>


    <label for="nilai">Kehadiran :</label>
    <input type="number" name="kehadiran" placeholder="Ex . 80.56 " /><br>

    <label for="nilai">Tugas :</label>
    <input type="number" name="tugas" placeholder="Ex . 80.56 " /><br>
    
    <label for="nilai">UTS :</label>
    <input type="number" name="uts" placeholder="Ex . 80.56 " /><br>
    
    <label for="nilai">UAS :</label>
    <input type="number" name="uas" placeholder="Ex . 80.56 " /><br>

    <input type="submit" name="simpan" value="Simpan Data" />
    <input type="reset" name="reset" value="Reset Input" />
    <a href="input-data-siswa.php">Kembali</a>
</form>
<?php
if(isset($_POST["simpan"]))
{
//deklarasi Variabel
 $nis = $_POST["nis"];
 $nama_lengkap = $_POST["nama"];
 $kelas = $_POST["kelas"];
 $kehadiran = $_POST["kehadiran"];
 $tugas = $_POST["tugas"];
 $uts = $_POST["uts"];
 $uas = $_POST["uas"];
 //CREATE -Menambahkan Data ke Database
 $query = "
 INSERT INTO siswa_nilai VALUES 
 ('$nis','$nama_lengkap','$kelas','$kehadiran','$tugas','$uts','$uas');";

 include ('./input-datasiswa-config.php');
 $insert = mysqli_query($mysqli, $query);

 if ($insert)
 {
    echo"
    <script>
         alert('Data berhasil ditabahkan');
         window.location='input-data-siswa.php';
    </script>";
 }
}
?>