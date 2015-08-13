<?php
/**
 * Created by PhpStorm.
 * User: talha
 * Date: 09.08.2015
 * Time: 11:50
 */




 $bilgiler=array(
     array("talha","sahin",20),
     array("omer","yazir",23)
 );

$bilgiler=array(
     array("ad"=>"talha",
         "soyad"=>"sahin",
         "yas"=>20),
     array("ad"=>"omer",
         "soyad"=>"yazir",
         "yas"=>20),

 );


print_r($bilgiler);
echo "<hr/>";

$encode=json_encode($bilgiler);
echo $encode;
var_dump(json_decode($encode));
echo "<hr/>";
var_dump(json_decode($bilgiler,true)); //json tekrardan array'e çevirir.

/*
var_dump($bilgiler);
echo "<br/>";

echo $bilgiler[0]['ad'];
*/


/*
echo '<pre>';
var_dump($bilgiler);
echo '</pre>';
*/