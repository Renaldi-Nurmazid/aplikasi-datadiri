<form action="input-siswa.php" method="POST">
    <h1>INPUT DATA SISWA</h1>
    <label for="nis">Nomor Induk Siswa : </label>
    <input type="number" name="nis" placeholder="EX. 123456789"/><br>

    <label for="nama">Nama Lengkap :</label>
    <input type="text" name="nama" placeholder="Ex . David Lutphi"/><br>

    <label for="jk">Jenis Kelamin :</label>
    <input type="radio" name="jk" value="L"> Laki-Laki 
    <input type="radio" name="jk" value="P"> Perempuan <br>

    <label for="kelas">Kelas</label>
    <select name="kelas">
        <option >10 RPL 1</option>
        <option >10 RPL 2</option>
        <option >11 RPL 1</option>
        <option >11 RPL 2</option>
        <option >12 RPL 1</option>
        <option >12 RPL 2</option>
</select><br>

<label for="tanggal_lahir">Tanggal Lahir :</label>
<input type="date" name="tanggal_lahir" /><br>

<label for="alamat">Alamat :</label>
<textarea name="alamat" placeholder="Ex . Jl Arief Rahman "></textarea><br>

<label for="nilai">Nilai :</label>
<input type="number" name="nilai" placeholder="Ex . 80.56 "/><br>

<input type="submit" name="simpan" value="Simpan Data"/>
<input type="reset" name="reset" value="Reset Input"/>
</form>

<?php
   if(isset($_POST["simpan"]))
   {
    echo "<hr>";

    //deklarasi Variabel
    $nis = $_POST["nis"];
    $namalengkap = $_POST["nama"];
    $jeniskelamin = $_POST["jk"];
    $kelas = $_POST["kelas"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $alamat = $_POST["alamat"];
    $nilai = $_POST["nilai"];

    //Tampil Data Variabel
    echo "
    Hasil Inputan Sebagai Berikut: <br>
    Nomor Induk Siswa : $nis <br>
    Nama Lengkap : $namalengkap <br>
    Jenis Kelamin : $jeniskelamin <br>
    Kelas : $kelas <br>
    Tanggal Lahir : $tanggal_lahir <br>
    Alamat : $alamat <br>
    Nilai : $nilai <br>
    ";
   }
