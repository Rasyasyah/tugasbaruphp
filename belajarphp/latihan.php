<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar_php</title>
</head>
<body>
    <h2> Daftar Nama </h2>
    <ul>
        <li> Nama Siswa </li>
        <li> Nama Siswa </li>
        <li> Nama Siswa </li>
        <li> Nama Siswa </li>
    </ul>

    <h2> Daftar Nama Siswa</h2>
    <ol>
        <?php
            for ($i=1; $i <= 10000; $i++) 
            {
                echo "<li> Nama Siswa ke-$i</li>";
            }

        ?>

    </ol>
    
</body>
</html>