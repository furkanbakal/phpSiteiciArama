<?php
try {
    $VeriTabaniBaglantisi   =   new PDO("mysql:host=localhost;dbname=kayit;charset=UTF8", "root", "");
} catch (PDOException $Hata) {
    echo "Bağlantı hatası<br />" . $Hata->getMessage();
    die();
}

function filtre($Deger){
    $Bir    =   trim($Deger);
    $Iki    =   strip_tags($Bir);
    $Uc     =   htmlspecialchars($Iki);
    return $Uc;
}

$IpAdresi           =   $_SERVER['REMOTE_ADDR'];
$timeStamps         =   time();
$OyKullanmaSiniri   =   86480;
$ZamaniGeriVer      =   $timeStamps- $OyKullanmaSiniri; 

//Yukarıdaki kodlar ile kullanıcının günde 1 kere ankete katılıp oy kullanabilmesi sağlanmıştır.
?>