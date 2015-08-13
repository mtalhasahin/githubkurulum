<?php


function tablo($index)
{
    $tablo =  "<td></td>";
    ?>
    <table border=3 cellpadding=30>
        <?php
        for ($i = 0; $i < 8; $i++) {

            if ($i == ($index - 1)) {
                echo '<td>A</td>';
            }else{
            echo $tablo;
            }
        }
        ?>


    </table>
    <?php
}
?>

<?php
echo "<br />";
echo ' <a href = "?islem=solaKaydirma" />Sola kaydir</a>';
echo "<br /> <br />";
echo ' <a href = "?islem=sagaKaydirma" />Saga Kaydir</a>';
echo "<br /> <br />";
$sagislem = 0;
$solislem = 0;

if($_GET["islem"] == ""){
    $index = 5;
    echo tablo($index);
    if(!isset($_COOKIE["index"])){
        setcookie("index" , $index);
    }
}else {

    if ($_GET["islem"] == "solaKaydirma") {
        $solislem = $_COOKIE["index"] - 1;

        if ($solislem <= 0) {
            $solislem = 8;
            echo tablo($solislem);
        } else {
            echo tablo($solislem);
        }
        setcookie("index" , $solislem);
        //$index = $solislem;
    } else if ($_GET["islem"] == "sagaKaydirma") {
        $sagislem = $_COOKIE["index"] + 1;
        if($sagislem == 10){
            echo tablo(9);
        }else if ($sagislem > 8) {
            $sagislem = 1;
            echo tablo($sagislem);
        } else {
            echo tablo($sagislem);
        }
        setcookie("index" , $sagislem);
        // $index = $sagislem;

    }
}
?>
