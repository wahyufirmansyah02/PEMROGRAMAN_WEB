<?php
 include 'koneksi.php';

    if (isset($_POST['submit'])){
        if($_POST['submit'] == "submit"){
            
            $nama           = $_POST['nama'];
            $jenis_kelamin  = $_POST['jenis_kelamin'];
            $anggaran       = $_POST['anggaran'];
            $nominal        = $_POST['nominal'];

            $query = "INSERT INTO tb_anggaran VALUES(null, '$nama','$jenis_kelamin','$anggaran','$nominal')";
            $sql = mysqli_query($conn, $query);

            if($sql){
                header("location: uts.php");
            }else{
                echo $query;
            }
        }
    }else if(isset($_POST['edit'])){
        if($_POST['edit'] == "edit"){

            $no             = $_POST['no'];
            $nama           = $_POST['nama'];
            $jenis_kelamin  = $_POST['jenis_kelamin'];
            $anggaran       = $_POST['anggaran'];
            $nominal        = $_POST['nominal'];

            $query = "UPDATE tb_anggaran SET nama='$nama', jenis_kelamin='$jenis_kelamin', anggaran='$anggaran', nominal='$nominal' WHERE no ='$no'";
            $sql = mysqli_query($conn, $query);

            if($sql){
                header("location: uts.php");
            }else{
                echo "edit data gagal";
            }
        
    }}
    if(isset($_GET['hapus'])){
        $no = $_GET['hapus'];
        $no = mysqli_real_escape_string($conn, $no);
        $query = "DELETE FROM tb_anggaran WHERE no = '$no'";
        $sql = mysqli_query($conn, $query);

        if($sql){
            header("location: uts.php");
        }else{
            echo $query;
        }
    }else {
        echo "hapus data gagal";
    }
?>