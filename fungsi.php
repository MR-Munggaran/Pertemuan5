<?php
function potongArtikel($artikel,$wordLimit,$idartikel) {
    //pisahkan setiap kata lalu masukkan ke dalam array
    $kata = explode(" ",$artikel);

    //gabung kemabli kata kata berdasarkan wordLimit
    $hasil = implode(" ", array_slice($kata,0,$wordLimit));

    if (count($kata) > $wordLimit) {
        $hasil .= "<br> <a href='artikel.php?id='".$idartikel.">Read More</a>";
    }
    return $hasil;
}

function hanyaAngka($input){
    $filterInput = preg_replace('/[^0-9]/', '', $input);
    return $filterInput;
}

function CekId($input){
    if (ctype_digit($input)){
        return true;
    }
    else{
        return false;
    }
}
?>