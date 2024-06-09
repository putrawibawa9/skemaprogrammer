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
     <style>
      body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f8f9fa;
        }

        h3 {
            text-align: center;
            margin-bottom: 20px;
            color: #343a40;
        }

        .table {
            background-color: #ffffff;
        }

        .table th, .table td {
            vertical-align: middle;
        }

        .table th {
            background-color: #007bff;
            color: #ffffff;
        }

        .table tbody tr:nth-child(odd) {
            background-color: #e9ecef;
        }

        .table tbody tr:nth-child(even) {
            background-color: #ffffff;
        }

        .table tbody tr:hover {
            background-color: #d6d8db;
        }

        .btn-primary {
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-primary:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }

        .btn-secondary {
            background-color: #17a2b8;
            border-color: #17a2b8;
        }

        .btn-secondary:hover {
            background-color: #138496;
            border-color: #117a8b;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }

        .btn-sm {
            margin-right: 5px;
        }

        td, th {
            transition: background-color 0.3s;
        }

        .text-center {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h3>Sepatu</h3>
    <a href="tambah_sepatu.php" class="btn btn-primary  mb-3">Add</a>
       <table class="table table-bordered">
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
             </tbody>
       </table>
</body>
</html>