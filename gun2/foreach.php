<meta charset="utf-8"/>
<?php
/**
 * Created by PhpStorm.
 * User: talha
 * Date: 09.08.2015
 * Time: 12:23
 */




$a=['1.eleman','2.eleman','3.eleman'];

/*
for($i=0;$i<count($a);$i++){

    echo $a[$i]."<br/>";
}
*/
$bilgiler=array(
    array("ad"=>"talha",
        "soyad"=>"sahin",
        "yas"=>20),
    array("ad"=>"omer",
        "soyad"=>"yazir",
        "yas"=>20),

);

foreach ($a as $v) {

    echo $v."<br/>";

}

echo "<br/>";

foreach ($a as $k=>$v) {

    echo "Dizinin $k. elamanı $v dir"."<br/>";
}
echo "<br/>";


foreach ($bilgiler as $k=>$v) {

    foreach ($v as $kk=>$vv) {

        echo "$vv <br/>";
     }
     echo "<hr/>";
}
