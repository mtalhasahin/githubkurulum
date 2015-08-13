<meta charset="UTF-8"/>

<?php
/**
 * Created by PhpStorm.
 * User: talha
 * Date: 09.08.2015
 * Time: 15:05
 */


if(isset($_POST['ad'])){

    setcookie('kullanici',$_POST['ad']);
}

if(isset($_COOKIE['kullanici'])){
    echo "Hoşgeldiniz Sayın: ".$_POST['ad'];
    ?>


<?php
}
else{
    ?>
<form action="" method="post">
    <input type="text" name="ad"/>
    <input type="submit" value="Gönder"/>
</form>
<?php
}



// setcookie('deneme','denemecookie');

//echo $_COOKIE['deneme'];
?>