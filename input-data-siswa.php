<?php
     include('./input-datasiswa-config.php');
     echo "<a href='input-datasiswa-tambah.php'>Tambah Data</a>";
     echo "<hr>";
     //Menampilkan data dari database
     $no = 1;

     $tabledata = "";
     $data = mysqli_query($mysqli," SELECT * FROM siswa_nilai");
     while($row = mysqli_fetch_array($data))
     {
        $nilaiakhir=($row["kehadiran"]+$row["tugas"]+$row["uts"]+$row["uas"])/4;
        $tabledata .= "
        <tr>
              <td>".$row["nis"]."</td>
              <td>".$row["nama_lengkap"]."</td>
              <td>".$row["kelas"]."</td>
              <td>".$row["kehadiran"]."</td>
              <td>".$row["tugas"]."</td>
              <td>".$row["uts"]."</td>
              <td>".$row["uas"]."</td>
              <td>".$nilaiakhir."</td>
              <td>
              <a href='input-datasiswa-edit.php?nis=".$row["nis"]."'>Edit</a>
              &nbsp;-&nbsp;
              <a href='input-datasiswa-hapus.php?nis=".$row["nis"]."'
              onclick='return confirm(\"Yakin Hapus ?\");'>Hapus</a>
              </td>
        <tr>      
              ";
              $no++;
     }

     echo "
     <table cellpadding=5 border=1 cellspacing=0>
              <tr>
                   <th>NIS</th>
                   <th>NAMA LENGKAP</th>
                   <th>KELAS</th>
                   <th>KEHADIRAN</th>
                   <th>TUGAS</th>
                   <th>UTS</th>
                   <th>UAS</th>
                   <th>NILAI AKHIR</th>
                   <th>AKSI</th>
               <tr>
               $tabledata
               </table>    
        ";
?>