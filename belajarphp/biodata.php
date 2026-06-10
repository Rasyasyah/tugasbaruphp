<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>
<body>
    <h1>LOGIN</h1>
        <form method="POST">
            <label for="nama">Nama:</label>
            <br>
            <input type="text" id="nama" name="nama"> <br>
            <label for="usia">usia:</label>
            <br>
            <input type="number" id="usia" name="usia"> <br>
            <label for="jurusan">Jurusan:</label>
            <br>
            <input type="text" id="jurusan" name="jurusan"> <br>
            <label for="alamat">Alamat:</label>
            <br>
            <input type="text" id="alamat" name="alamat"> <br>
            <button type="submit">submit</button> 
    </form>

    <?php
        $nama = $_POST['nama'];
        $usia = $_POST['usia'];
        $jurusan = $_POST['jurusan'];
        $alamat = $_POST['alamat'];

        echo "nama: " . $nama . "<br>";
        echo "usia: " . $usia . "<br>";
        echo "jurusan: " . $jurusan . "<br>";
        echo "alamat: " . $alamat . "<br>";

    ?>

</body>
</html>