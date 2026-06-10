<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Method GET</title>
</head>
<body>
    <form action="" method="GET">
        <input type="text" name="nama">
        <input type="number" name="umur">
        <input type="submit" name="submit" value="submit">
    </form>

    <?php
        if ($_GET) {
            echo "nama:" . $_GET["nama"];
            echo "<br/>";
            echo "umur:" . $_GET["umur"];
        }
    ?>
</body>
</html>