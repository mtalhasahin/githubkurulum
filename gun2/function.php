<meta charset="utf-8"/>
<?php
/**
 * Created by PhpStorm.
 * User: talha
 * Date: 09.08.2015
 * Time: 14:34
 */



/*array ile döndür*/
function toplacarp($sayi1,$sayi2){
    $toplam=$sayi1+$sayi2;
    $carpim=$sayi1*$sayi2;
    $return=[$toplam,$carpim];
    return $return;

}


print_r(toplacarp(10,20));

echo "<br/>";

function topla($sayi1,$sayi2){
    $toplam=$sayi1+$sayi2;
    $carpim=$sayi1*$sayi2;
    $return=$toplam."-".$carpim;
    return $return;

}

$sonuc=explode("-",topla(4,6));

print_r($sonuc);

