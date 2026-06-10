<?php
if (isset($_POST['hitung'])) {

    $tugas = $_POST['tugas'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];

    $akhir = ($tugas * 0.30) + ($uts * 0.30) + ($uas * 0.40);

    if ($akhir >= 85) {
        $huruf = "A";
    } elseif ($akhir >= 70) {
        $huruf = "B";
    } elseif ($akhir >= 55) {
        $huruf = "C";
    } elseif ($akhir >= 40) {
        $huruf = "D";
    } else {
        $huruf = "E";
    }

    echo "<h3>Hasil Penilaian</h3>";
    echo "Nilai Akhir: " . number_format($akhir, 2) . "<br>";
    echo "Nilai Huruf: $huruf <br><br>";
}
?>

<form method="post">
    Nilai Tugas: <input type="number" name="tugas" required><br><br>
    Nilai UTS: <input type="number" name="uts" required><br><br>
    Nilai UAS: <input type="number" name="uas" required><br><br>

    <input type="submit" name="hitung" value="Hitung Nilai">
</form>