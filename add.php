
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
        <p>Tambah Data</p>
        </div>
    </header>
    <main>
        <div class="box">
        
    <form action="act_add.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
        <td>Nama Menu:</td>
        <tr>
            <tr>
				<td><input type="text" placeholder="Masukkan Nama" name="nama"></td>
            </tr>
        <tr>
            <td><input type="radio" name="makanan">Makanan</input>
                <input type="radio" name="minuman">Minuman</input>
            </td>
        </tr>
        <tr>
        <td>Qty :</td>
        </tr>
            <tr>
                <td><input type="number"  placeholder="Masukkan Qty" name="qty"></td>
            </tr>
        <tr>
        <td>Harga :</td>
        </tr>
             <tr>   
                <td><input type="number"  placeholder="Masukkan Harga" name="harga"></td>
            </tr>
        <tr>
            <td>Deskripsi :</td>
        </tr>
			<tr>
                <td><textarea placeholder="Masukkan Deskripsi" name="deskripsi"></textarea></td>
            </tr>
        <tr>
        <td>Gambar :</td>
        </tr>
        <tr>
		   <td><input type="file" name="gambar" required="required"></td>
        </tr> 
        <tr><td><p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p></td></tr>
              
        <tr>
            <td><input type="submit" name="" value="Simpan"></td>
        </tr>
        
        </table>
    </form>

        

    </div>
    </main>
    <aside>
        <div class="box">
            <nav>
                <ul>
                    <li>Home</li>
                    <li><a href="Menu.php">Menu</a></li>
                    <li><a href="update_delete.php">Update / Delete</a></li>
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