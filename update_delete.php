<?php 
    require_once('data.php');
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
        <p>Update / Delete</p>
        </div>
    </header>
    <main>
        <div class="box">
            <h1>Makanan</h1>
        <table cellpadding="10" cellspacing="10">
        <?php $i=0;?>
            <?php foreach($makanan as $row): ?>
                <?php $i++;?>
                <table cellpadding="10" cellspacing="10">
            <tr>
                <td><a href="update_makanan.php?id=<?= $row["id"]; ?>" name="update">Update</a>
                <a href="act_delete_makanan.php?id=<?= $row["id"];?>" name="delete">Delete</a></td>
                <td><?= $i;?></td>
                <td><?= $row['nama_makanan'];?></td>
                <td><?= $row['qty'];?></td>
                <td><?= $row['harga'];?></td>
                <td><img src="img\<?= $row['gambar'];?>" width="60px" height="60px"></td>
                <td><?= $row['deskripsi'];?></td>
            </tr>
        </table>
        <?php endforeach; ?>
    </div>

    <div class="box">
        <h1>Minuman</h1>
    <table cellpadding="10" cellspacing="10">
        <?php $i=0;?>
            <?php foreach($minuman as $row): ?>
                <?php $i++;?>
        <table cellpadding="10" cellspacing="10">
            
            <tr>
                <td><a href="update_minuman.php?id=<?= $row["id"]; ?>">Update</a> 
                <a href="act_delete_minuman.php?id=<?= $row['id']; ?>">Delete</a></td>
                <td><?= $i;?></td>
                <td><?= $row['nama_minuman'];?></td>
                <td><?= $row['qty'];?></td>
                <td><?= $row['harga'];?></td>
                <td><img src="img\<?= $row['gambar'];?>" width="60px" height="60px"></td>
                <td><?= $row['deskripsi'];?></td>
            </tr>
        </table>
        <?php endforeach; ?>
    </div>
    </form>

    </main>
    <aside>
        <div class="box">
            <nav>
                <ul>
                    <li><a href="Menu.php">Menu</a></li>
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