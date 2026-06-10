<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihanFORT</title>
</head>
<body>
    <form action="" method="POST">
        jumlah yang akan di upload  :
        <input type="text" name="jumlah">
        <input type="submit" name="proses" value="Proses">
    </form>

    <?php 
        $jumlah = $_POST['jumlah'];
            for ($i = 1; $i <= $jumlah; $i++) {
                echo "file ke-$i: <input type='file' name='file$i'> <br>";
            }
    ?>
</body>
</html>