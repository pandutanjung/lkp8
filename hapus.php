<?php
include("config.php");
if (isset($_GET['id'])) {
    // ambil id dari query string
    $id = $_GET['id'];

    // buat query hapus
    $query = ("DELETE FROM calonsiswa WHERE id=$id");
    $result = pg_query($db, $query);

    // apakah query hapus berhasil?
    if ($result) {
        header('Location: daftarsiswa.php');
    } else {
        die("gagal menghapus....");
    }
} else {
    die("akses dilarang...");
}
?>