<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
        <h1>LOGIN</h1>
    <form method="POST">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama"> <br>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"> <br>
        <br>
        <button type="submit">submit</button> 
    </form>

     <?php
        $nama = $_POST['nama'];
        $password = $_POST['password'];

        echo "nama: " . $nama . "<br>";
        echo "password: " . $password . "<br>";
    ?>
</body>
</html>