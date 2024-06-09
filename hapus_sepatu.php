<?php

require_once 'Sepatu.php';

$sepatu = new Sepatu;
$kode_sepatu = $_GET['kode_sepatu'];

if ($sepatu->deleteSepatu($kode_sepatu)){
    echo "<script>
            alert('data berhasil dihapus');
            document.location.href = 'index.php';
      </script>";
}else{
  echo "  <script>
            alert('data gagal dihapus');
            document.location.href = 'index.php';
            </script>";
}


?>