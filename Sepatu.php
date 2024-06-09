<?php
require_once "connect.php";
class Sepatu extends Connect{
    
    public function readSepatu(){
        $conn = $this->getConnection();
        $query = "SELECT * FROM sepatu";  
        $result = $conn->query($query);
        $dosen = $result->fetchAll();
        return $dosen;
        }

        public function viewEachSepatu($kode_sepatu){
            $conn = $this->getConnection();
            $query = "SELECT * FROM sepatu WHERE kode_sepatu= $kode_sepatu";
            $result = $conn->query($query);
            $kategori = $result->fetch();
            return $kategori;
        }


    public function addSepatu($data){
        $conn = $this->getConnection();
        $merk_sepatu = $data['merk_sepatu'];
        $warna_sepatu = $data['warna_sepatu'];
        $jenis_sepatu = $data['jenis_sepatu'];
        $bahan_sepatu = $data['bahan_sepatu'];
        $deskripsi_sepatu = $data['deskripsi_sepatu'];
        $tanggal_launching_sepatu = $data['tanggal_launching_sepatu'];
    


        $query = "INSERT INTO sepatu(`merk_sepatu`, `warna_sepatu`, `jenis_sepatu`, `bahan_sepatu`, `deskripsi_sepatu`, `tanggal_launching_sepatu`) VALUES 
        (?,?,?,?,?,?)";
    
        $stmt = $conn->prepare($query);
    
        $stmt->bindParam(1,$merk_sepatu);
        $stmt->bindParam(2,$warna_sepatu);
        $stmt->bindParam(3,$jenis_sepatu);
        $stmt->bindParam(4,$bahan_sepatu);
        $stmt->bindParam(5,$deskripsi_sepatu);
        $stmt->bindParam(6,$tanggal_launching_sepatu);
        $stmt->execute();
        return true;
    }


    public function editSepatu($data){
        var_dump($data);
        $conn = $this->getConnection();
        $kode_sepatu = $data['kode_sepatu'];
        $merk_sepatu = $data['merk_sepatu'];
        $warna_sepatu = $data['warna_sepatu'];
        $jenis_sepatu = $data['jenis_sepatu'];
        $bahan_sepatu = $data['bahan_sepatu'];
        $deskripsi_sepatu = $data['deskripsi_sepatu'];
        $tanggal_launching_sepatu = $data['tanggal_launching_sepatu'];

        $query = "UPDATE sepatu SET
        merk_sepatu = ?,
        warna_sepatu = ?,
        jenis_sepatu = ?,
        bahan_sepatu = ?,
        deskripsi_sepatu = ?,
        tanggal_launching_sepatu = ?
        WHERE kode_sepatu = ?
        ";
             $stmt = $conn->prepare($query);
             $stmt->bindParam(1,$merk_sepatu);
             $stmt->bindParam(2,$warna_sepatu);
             $stmt->bindParam(3,$jenis_sepatu);
             $stmt->bindParam(4,$bahan_sepatu);
             $stmt->bindParam(5,$deskripsi_sepatu);
             $stmt->bindParam(6,$tanggal_launching_sepatu);
             $stmt->bindParam(7,$kode_sepatu);
                $stmt->execute();
                return true;
    }




    public function deleteSepatu($kode_sepatu){
        $conn = $this->getConnection();
        $query = "DELETE FROM sepatu WHERE kode_sepatu = $kode_sepatu";
        $result = $conn->exec($query);
        return $result;
}



}
?>