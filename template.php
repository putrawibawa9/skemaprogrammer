<?php 
    require_once 'header.php';
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
        background-color: #F0CEA8;
      }
    </style>
</head>
<body>
   


<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>