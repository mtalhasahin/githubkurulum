<meta charset="utf-8"/>
<?php
/**
 * Created by PhpStorm.
 * User: talha
 * Date: 09.08.2015
 * Time: 16:39
 */
//echo time();

$haftaonce=1439138629-(15*24*60*60);

var_dump(getdate($haftaonce));
$user="admin";
$pass="12345";

if(isset($_GET['islem'])){

    unset($_COOKIE['kullanici']);
    setcookie('kullanici','',time()-3600);
}


if(isset($_POST['ad']) && isset($_POST['sifre'])){

       if(empty($_POST['ad']) || empty($_POST['sifre'])){
           echo "Kullanıcı adı ve şifre yanlış";
       }
       else{
           if($_POST['ad']==$user && $_POST['sifre']==$pass ){
               setcookie('kullanici',$_POST['ad']);

           }else{
               echo "Kullanıcı veya şifre yanlış";
           }
       }

}


if(isset($_COOKIE['kullanici'])){


    echo "Hoşgeldiniz: ".$_COOKIE["kullanici"];
    echo '<a href="?islem=cikisyap">Çıkış Yap</a>';
}
else {
    ?>
    <form action="cookie2.php" method="post">

        <input type="text" name="ad"><input type="password" name="sifre"><input type="submit" value="Gönder">


    </form>

    <?php
}
?>






