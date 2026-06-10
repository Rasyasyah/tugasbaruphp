<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Method POST</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="nama">
        <button type="submit">submit</button> 
    </form>

    <?php
        $nama = $_POST['nama'];
        echo $nama;
    ?>
</body>
</html>