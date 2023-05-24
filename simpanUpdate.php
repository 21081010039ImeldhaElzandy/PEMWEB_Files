<?php
if ($_POST) {
    $file_name = "buku.txt";
    $posisi_data = file($file_name);

    $kode_buku = $_POST['kode_buku'];

    foreach ($posisi_data as $key => $buku) {
        $data_buku = explode("-", $buku);
        if ($data_buku[0] === $kode_buku) {

            //mengupdate data
            $data_buku[1] = $_POST['judul'];
            $data_buku[2] = $_POST['pengarang'];
            $data_buku[3] = $_POST['penerbit'];
            $data_buku[4] = $_POST['tahun_terbit'];

            $data_buku[5] = str_replace("\n", "", $data_buku[5]);

            //melihat apakah ada gambar baru
            if ($_FILES['file']['size'] > 0) {
                $target_dir = "gambar/";
                $target_file = $target_dir . basename($_FILES['file']['name']);
                move_uploaded_file($_FILES['file']['tmp_name'], $target_file);
                $data_buku[5] = basename($_FILES['file']['name']);
            }

            //menggabungkan data ke string
            $posisi_data[$key] = implode("-", $data_buku) . "\n";

            //menyimpan perubahan
            file_put_contents($file_name, $posisi_data);
            echo "berhasil.";

            echo '<br><br><li><a href="baca.php">Katalog Buku</a>';
            break;
        }
    }
}
?>