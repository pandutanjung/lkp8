<?php
    include("config.php");  
    if (isset($_POST['edit'])) {
        // unggah data dari form edit
        $id = $_POST['id']; 
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jk = $_POST['jenis_kelamin'];
        $sekolah = $_POST['sekolah_asal'];

        // buat query
        $query = pg_query("UPDATE calonsiswa
        SET
        nama='$nama',
        alamat='$alamat',
        jenis_kelamin='$jk',
        sekolah='$sekolah'
        WHERE id=$id");
        

        // apakah query simpan berhasil
        if ($query==TRUE) {
            header('Location: daftarsiswa.php?status_edit=sukses');
        } else {
		    header('Location: daftarsiswa.php?status_edit=gagal');
        }
    } else {
        die("akses dilarang");
    }
?>