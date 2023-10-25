<?php 
    include("config.php");  
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = pg_query("SELECT * FROM calonsiswa WHERE id=$id");
        $data = pg_fetch_array($query); 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
</head>
<body>
    <header>
        <h3>Formulir Edit Data Pendaftar</h3>
    </header>

    <form action="prosesedit.php" method="post">
        <fieldset>
            <input type="hidden" name="id" value="<?=$id;?>">
            <p>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" placeholder="nama lengkap" value="<?=$data['nama'];?>"/>
            </p>
            <p>
                <label for="alamat">Alamat: </label>
                <textarea name="alamat"><?=$data['alamat'];?></textarea>
            </p>    
            <p>
                <label for="jenis_kelamin">Jenis Kelamin: </label>
                <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?=$data['jenis_kelamin']=='laki-laki' ? 'checked':'';?> > Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" value="perempuan" <?=$data['jenis_kelamin']=='perempuan' ? 'checked':'';?>> Perempuan</label>
            </p>
            <p>
                <label for="sekolah_asal">Sekolah Asal: </label>
                <input type="text" name="sekolah_asal" placeholder="nama sekolah" value="<?=$data['sekolah_asal'];?>"/>
            </p>
            <p>
                <input type="submit" value="Edit" name="edit" />
            </p>
        </fieldset>
    </form>
</body>
</html>