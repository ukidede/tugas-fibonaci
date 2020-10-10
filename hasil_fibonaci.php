<?php

$angka1 = $_POST['angka1'];
$angka2 = $_POST['angka2'];
$deret = $_POST['deret'];

echo "<br>";
echo "Keterangan :<br>";
echo "angka 1 = $angka1 <br>";
echo "angka 2 = $angka2 <br>";
echo "deret angka = $deret <br><br>";

echo "
    <table border=2>
        <tr align=right>
            <td>i</td>
            <td>x</td>
        </tr>";
$fibonaci = 0;
for ($i = 1; $i <= $deret; $i++) {
    if ($i == 1) {
        echo "
        <tr align=right>
            <td>$i</td>
            <td>$angka1</td>
        </tr>";
    } elseif ($i == 2) {
        echo "
        <tr align=right>
            <td>$i</td>
            <td>$angka2</td>
        </tr>";
    } else {
        $fibonaci = $angka1 + $angka2;
        $angka1 = $angka2;
        $angka2 = $fibonaci;

        echo "
            <tr align=right>
                <td>$i</td>
                <td>$fibonaci</td>
            </tr>";
    }
}

echo "</table>";
