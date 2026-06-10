<?php
    function hari ($namahari) {
        $hari = array("minggu", "senin", "selasa", "rabu", "kamis", "jumat", "sabtu");
        echo "<select name= 'namahari'>";
        for ($i = 0; $i < 7; $i++) {
            echo "<option value='$hari[$i]'>$hari[$i]</option>";
        }
        echo "</select>";
        echo "hari lahir anda: ";
    }
    hari("namahari");

    function bulan ($namabulan) {
        $bulan = array("januari", "februari", "maret", "april", "mei", "juni", "juli", "agustus", "september", "oktober", "november", "desember");
        echo "<select name= 'namabulan'>";
        for ($i = 0; $i < 12; $i++) {
            echo "<option value='$bulan[$i]'>$bulan[$i]</option>";
        }
        echo "</select>";
        echo "bulan lahir anda: ";
    }
    bulan("namabulan");
?>