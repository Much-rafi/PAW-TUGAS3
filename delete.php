<?php
$konek = mysqli_connect("localhost", "root", "", "rafi");
$id = $_GET["id"];
$dio = mysqli_query($konek,"DELETE FROM rafi_089 where id = $id");
$hasil = mysqli_affected_rows($konek);
if ($hasil > 0) {
        header('Location: tables-data.php');
    echo "<script>
                alert('Selamat data anda berhasil dihapus');
        </script>";
} else {
    echo "<script>
                alert('Mohon maaf, Data anda belum berhasil dihapus');
        </script>";
}
?>