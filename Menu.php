<?php
    require 'data.php';
    $minuman = query("SELECT * FROM t_minuman");
    $makanan = query("SELECT * FROM t_makanan");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe & Resto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="content">
    
    <header>
        <div class="judul">
        <p>Menu</p>
        </div>
    </header>
    <main>
        <div class="box">
            <div class="menu">    
        <h1>Makanan</h1>
        <center>
        <table>
        <?php foreach ($makanan as $row): ?>
        <tr>
            <th><h3><?php echo $row["nama_makanan"]; ?></h3></th>
        </tr>
        <tr>
        <td><img src="img\<?= $row["gambar"];?>"></td>
        </tr>
        <tr>
            <td>Rp<?php echo $row["harga"]; ?> (termasuk pajak)</td>
        </tr>
        <tr>
            <td>Qty:<?= $row["qty"]?></td>
        </tr>
        <tr><td><br></td></tr>
        <tr><td><?= $row["deskripsi"]?></td></tr>
        <tr><td><br></td></tr>
        <?php endforeach; ?>
        </table>
        </center>
        
        </div>
    </div>

    <div class="box">
            <div class="menu">
    <h1>Minuman</h1>
        <center>
            
        <table>
        <?php foreach ($minuman as $row): ?>    
        <tr>
            <th><h3><?php echo $row["nama_minuman"]; ?></h3></th>
        </tr>
        <tr>
        <td><img src="img\<?= $row["gambar"];?>"></td>
        </tr>
        <tr>
            <td>Rp<?php echo $row["harga"]; ?> (termasuk pajak)</td>
        </tr>
        <tr>
            <td>Qty:<?= $row["qty"]?></td>
        </tr>
        <tr><td><br></td></tr>
        <tr><td><?= $row["deskripsi"]?></td></tr>
        <tr><td><br></td></tr>
        <?php endforeach; ?>
        </table>
        </center>
        </div>
    </div>
    </main>
    <aside>
        <div class="box">
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="update_delete.php">Update / Delete</a></li>
                    <li><a href="add.php">Tambah Data</a></li>
                </ul>
            </nav>
        
    </div>
    </aside>
    <footer>
        <div class="box">
        <p>Cafe & Rest &#169 2020, by Aziz</p>
    </div>
    </footer>
</div>
</body>
</html>