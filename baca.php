<?php
    echo "<h3>KATALOG BUKU</h3>";
    echo '<li><a href="create.php">Create Data</a>';

    $file_name = "buku.txt";
    $read = file($file_name);

    echo "<table border='1' >
        <tr align='center'>
            <td>Kode Buku</td>
            <td>Judul Buku</td>
            <td>Pengarang</td>
            <td>Penerbit</td>
            <td>Tahun Terbit</td>
            <td>Cover Buku</td>
            <td></td>
        </tr>";

    foreach ($read as $buku) {
        $data_buku = explode("-", $buku); //arr
        echo "<tr align='center'>";
        echo "<td>$data_buku[0]</td>";
        echo "<td>$data_buku[1]</td>";
        echo "<td>$data_buku[2]</td>";
        echo "<td>$data_buku[3]</td>";
        echo "<td>$data_buku[4]</td>";
        echo "<td><img src='gambar/". $data_buku[5] . "' width='100' height='100'></td>";
        echo "<td>
        <a href='update.php?kode_buku=" . $data_buku[0] . "'>Update</a> <br>
        <a href='delete.php?kode_buku=" . $data_buku[0] . "'>Delete</a>
        </td>";
        echo "</tr>";
    }
    echo "</table>";
?>