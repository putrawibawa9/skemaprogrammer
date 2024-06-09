<?php 
    require_once 'Sepatu.php';

if(isset($_POST['submit'])){
    $add = new Sepatu;

    $result =$add->addSepatu($_POST);
    
    //check the progress
    if ($result){
        echo "
            <script>
            alert('data berhasil ditambah');
            document.location.href = 'index.php';
            </script>
        ";
    }else{
        echo " <script>
        alert('data gagal ditambah');
        document.location.href = 'index.php';
        </script>
    ";

    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
      body {
        background-color: brown;
      }
    </style>
</head>
<body>

   <div class="container">
  <div class="row">
    <div class="col-12 p-3 bg-white">
        <h3>Tambah Sepatu</h3>


        <form method="post" enctype="multipart/form-data">

        <div class="mb-3">
                <label class="form-label">Merk Sepatu</label>
                <input type="text" name="merk_sepatu" class="form-control">
            </div>
            
            <div class="mb-3">
        <select class="form-select" name="warna_sepatu" required>
        <option value="" disabled selected hidden>Pilih Warna</option>
                <option value="Hitam">Hitam</option>
                <option value="Putih">Putih</option>
                <option value="Abu">Abu</option>
                <option value="Coklat">Coklat</option>
                <option value="Merah">Merah</option>
        </select>
    </div>
            <div class="mb-3">
        <select class="form-select" name="jenis_sepatu" required>
        <option value="" disabled selected hidden>Pilih Jenis Sepatu</option>
                <option value="Sepatu Pria">Sepatu Pria</option>
                <option value="Sepatu Wanita">Sepatu Wanita</option>
                <option value="Sepatu Anak">Sepatu Anak</option>
        </select>
    </div>
    
            <div class="mb-3">
                <label class="form-label">Bahan</label>
                <input type="text" name="bahan_sepatu" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <input type="text" name="deskripsi_sepatu" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label"> Tanggal Launching</label>
                <input type="date" name="tanggal_launching_sepatu" class="form-control">
            </div>
            
            <a href="index.php" class="btn btn-success" >Kembali</a>
            <button type="submit" class="btn btn-primary" name="submit" >Simpan</button>
        </form>
    </div>
  </div>
</div>


<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>