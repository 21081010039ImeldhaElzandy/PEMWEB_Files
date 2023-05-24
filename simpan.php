<?php
    if ($_POST) {
        $buku = $_POST['kode_buku']
            . "-" . $_POST['judul'] 
            . "-" . $_POST['pengarang']
            . "-" . $_POST['penerbit']
            . "-" . $_POST['tahun_terbit']
            . "-" . $_FILES['file']['name'] .
            "\n";

        //menyimpan ke file
        $file_name = "buku.txt";
        $target_dir = "gambar/";
        $target_file = $target_dir . basename($_FILES['file']['name']);
        move_uploaded_file($_FILES['file']['tmp_name'], $target_file);

        if (file_put_contents($file_name, $buku, FILE_APPEND) > 0) {
            echo "berhasil";
        } else {
            echo "gagal";
        }

        echo '<br><br><li><a href="create.php">Create Data</a>';
        echo '<br><li><a href="baca.php">Katalog Buku</a>';
    }
?>