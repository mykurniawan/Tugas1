<?php
$dosisVksn = 1;

if ($dosisVksn > 3) {
    echo "Boleh Naik Kereta Api";
} elseif ($dosisVksn < 2) {
    echo "Silahkan Suntik Vaksin Dosis Ke 2";
} else {
    echo "Tidak Boleh Naik Kereta Api";
}
