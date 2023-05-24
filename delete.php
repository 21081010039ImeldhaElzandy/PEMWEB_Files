<?php
if (isset($_GET['kode_buku'])) {
    $kode_buku = $_GET['kode_buku'];

    $file_name = "buku.txt";
    $posisi_data = file($file_name);

    $delete = false;

    //menghapus data dengan kode buku 
    foreach ($posisi_data as $key => $buku) {
        $data_buku = explode("-", $buku);
        if ($data_buku[0] === $kode_buku) {
            unset($posisi_data[$key]); 

            //menyimpan perubahan
            file_put_contents($file_name, implode("", $posisi_data));
            $delete = true;
            break;
        }
    }

    if ($delete) {
        echo "berhasil.";
    } else {
        echo "gagal.";
    }

    echo '<br><br><li><a href="baca.php">Katalog Buku</a>';
}
?>