<?php
    include 'data.php';
    $nama = $_POST['nama'];
    $qty = $_POST['qty'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];

     
    $rand = rand();
    $ekstensi =  array('png','jpg','jpeg','gif');
    $filename = $_FILES['gambar']['name'];
    $ukuran = $_FILES['gambar']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
     
    if(!in_array($ext,$ekstensi) ) {
        header("location:Menu.php?alert=gagal_ekstensi");
    }else{
        if($ukuran < 1044070){		
            $xx = $rand.'_'.$filename;
            move_uploaded_file($_FILES['gambar']['tmp_name'], 'img/'.$rand.'_'.$filename);
            
            if ($_POST['makanan']){
                mysqli_query($conn, query("INSERT INTO t_makanan VALUES('','$nama','$qty','$harga','$xx','$deskripsi')"));

            } else if ($_POST['minuman']){
                mysqli_query($conn, query("INSERT INTO t_minuman VALUES('','$nama','$qty','$harga','$xx','$deskripsi')"));
            } else{
                header("location:Menu.php?alert=gagal");
            }
            
            header("location:Menu.php?alert=berhasil");
        }else{
            header("location:Menu.php?alert=gagak_ukuran");
        }
    }
?>