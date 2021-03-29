<?php 
    function jum_vokal($kalimat)
    {
    $a = substr_count($kalimat, 'a');
    $i = substr_count($kalimat, 'i');
    $u = substr_count($kalimat, 'u');
    $e = substr_count($kalimat, 'e');
    $o = substr_count($kalimat, 'o');

    $count = ($a+$i+$u+$e+$o);

    return $count;
}

function jum_konsonan($kalimat)
{
    $jumlah = strlen($kalimat);
    $a = substr_count($kalimat, 'a');
    $i = substr_count($kalimat, 'i');
    $u = substr_count($kalimat, 'u');
    $e = substr_count($kalimat, 'e');
    $o = substr_count($kalimat, 'o');

    $count = $jumlah - ($a+$i+$u+$e+$o);

    return $count;
}

$nama = ["Jorgi","Rimember","M.Ade Shofy"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>nama</th>
            <th>jumlah kata</th>
            <th>jumlah huruf</th>
            <th>kebalikan</th>
            <th>jumlah vokal</th>
            <th>jumlah konsonan</th>
        </tr>
        <?php 
            foreach ($nama as $n) {
            $kalimat = strtolower($n);
            $kalimatTanpaSpasi = str_replace(' ', '', strtolower($n));
            $jumlahhuruf = strlen(str_replace(' ','',$n));
        ?>
            <tr>
                <td>
                    <?php echo $n ;?>
                </td>
                <td>
                    <?php echo str_word_count($n);?>
                </td>
                <td>
                    <?php echo $jumlahhuruf;?>
                </td>
                <td>
                    <?php echo strrev($n);?>
                </td>
                <td>
                    <?php echo jum_vokal($kalimatTanpaSpasi);?>
                </td>
                <td>
                    <?php echo jum_konsonan($kalimatTanpaSpasi);?>
                </td>
            </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>