<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>

<body>
    <h3>UPDATE KATALOG BUKU</h3>
    <form action="simpanUpdate.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>KODE BUKU</td>
                <td><input type="text" name="kode_buku" required></td>
            </tr>
            <tr>
                <td>JUDUL</td>
                <td><input type="text" name="judul" required></td>
            </tr>
            <tr>
                <td>PENGARANG</td>
                <td><input type="text" name="pengarang" required></td>
            </tr>
            <tr>
                <td>PENERBIT</td>
                <td><input type="text" name="penerbit" required></td>
            </tr>
            <tr>
                <td>TAHUN TERBIT</td>
                <td><input type="text" name="tahun_terbit" required></td>
            </tr>
            <tr>
                <td>COVER BUKU</td>
                <td><input type="file" accept="image/*" name="file" id=file required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="ENTER"></td>
            </tr>
        </table>
    </form>
</body>
</html>