<?php
    echo "tahun angkatan : <select name='tahun'>";
    for ($tahun = 1999; $tahun <= 2026; $tahun++) {
        echo "<option value='$tahun'>$tahun</option>";
    }
    echo "</select>";

?>