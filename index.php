<?php
require_once 'Sepatu.php'; 


$hasil = new Sepatu;
$sepatu = $hasil->readSepatu();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
  <h2>Responsive Table</h2>
<div class="table-wrapper">
       <a href="tambah_sepatu.php" class="btn btn-primary  mb-3">Tambah Sepatu</a>
    <table class="fl-table">
        <thead>
        <tr>
          <th class="text-center">Kode Sepatu</th>
                <th class="text-center">Merk Sepatu</th>
                <th class="text-center">Warna</th>
                <th class="text-center">Jenis </th>
                <th class="text-center">Bahan</th>
                <th class="text-center">Deskripsi</th>
                <th class="text-center">Tanggal Launching</th>
                <th class="text-center">Actions</th>
        </tr>
        </thead>
        <tbody>
      <?php foreach($sepatu as $row):?>
             <tr>
               <td class="text-center" ><?=$row['kode_sepatu']?></td>
               <td ><?=$row['merk_sepatu']?></td>
               <td ><?=$row['warna_sepatu']?></td>
               <td ><?=$row['jenis_sepatu']?></td>
               <td ><?=$row['bahan_sepatu']?></td>
               <td ><?=$row['deskripsi_sepatu']?></td>
               <td ><?=$row['tanggal_launching_sepatu']?></td>
                <td>
                <a  href="edit_sepatu.php?kode_sepatu=<?=$row['kode_sepatu'];?>" class="btn btn-secondary btn-sm ">Edit</a>
                <a href="hapus_sepatu.php?kode_sepatu=<?=$row['kode_sepatu'];?>" class="btn btn-danger btn-sm " onclick="return confirm('yakin?');">Delete</a>
                </td>
               </tr>
               <?php endforeach; ?>
        <tbody>
    </table>
</div>
</body>
</html>