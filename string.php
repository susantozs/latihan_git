<?php

    // materi strlen / mengetahui panjang string
    $jargon = "tetap santai dan berkualitas";
    echo strlen($jargon);

    // materi strcmp / membandingkan 2 string
    $kalimat1 = "belajar php";
    $kalimat2 = "belajar php";

    $output = strcmp($kalimat1, $kalimat2);

    if($output !== 0){
        echo "<br/>kalimat tidak sama";
    }else{
        echo "<br/>kalimat sama";
    }

    // materi strtoupper / huruf besar
    $statement = "<br>ini bukan marah, cuma caps";
    echo strtoupper($statement);
    // materi strtolower / huruf kecil
    $statement2 = "<br>INI BUKAN MARAH, CUMA CAPS";
    echo strtolower($statement2);

    //materi str_replace / mengganti kata
    $original = "saya belajar php";
    $search = "php";
    $replace = "Pemrograman Web";

    $output2 = str_replace($search, $replace, $original);
    echo "<br><br>".$output2;
?>