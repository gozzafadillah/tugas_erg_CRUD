<?php
    include 'data.php';
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $qty = $_POST['qty'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $query = "UPDATE t_minuman SET nama_minuman = '$nama', qty = $qty,
                                    harga = $harga, deskripsi = '$deskripsi'
                                    WHERE id=$id";
   
     mysqli_query($conn, $query);
     header("Location:update_delete.php");
            
?>