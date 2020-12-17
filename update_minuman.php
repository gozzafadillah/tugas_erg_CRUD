<?php
require 'data.php';
    $id = $_GET["id"];
    
    $minuman = query("SELECT * FROM t_minuman WHERE id = $id")[0];

    
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
        <p>Update</p>
        </div>
    </header>
    <main>
        <div class="box">
        <form action="act_update_minuman.php" method="post">
            <table>
                <tr><th>
                    Masukan data
                </th></tr>
                </th></tr>
                <tr><td></td><td><input type="hidden" name="id" value="<?= $minuman["id"]; ?>"></td></tr>
                <tr><td>
                <tr><td>
                        Nama :
                    </td>
                    <td>
                    <input type="text" name="nama" value="<?=$minuman["nama_minuman"];?>">
                </td></tr>
                <tr><td>
                        Qty :
                    </td>
                    <td>
                    <input type="number" name="qty" value="<?=$minuman["qty"];?>">
                </td></tr>
                <tr><td>
                        Harga :
                    </td>
                    <td>
                    <input type="number" name="harga" value="<?=$minuman["harga"];?>">
                </td></tr>
                <tr><td>
                        Gambar :
                    </td>
                    <td>
                    <input type="text" value="<?= $minuman["gambar"];?>">
                </td></tr>
                <tr><td>
                        Deskripsi :
                    </td>
                    <td>
                    <textarea name="deskripsi" cols="30" rows="10"><?=$minuman["deskripsi"];?></textarea>
                </td></tr>
                <tr><td></td><td><button type="submit" name="submit">Update data</button></td></tr>
            </table>
        </form>
    </div>
    </main>
    <aside>
        <div class="box">
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="Menu.php">Menu</a></li>
                   
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