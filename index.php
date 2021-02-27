<?php
require_once('baglan.php');
?>
<!doctype html>
<html lang="tr-Tr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-language" content="tr">
    <meta charset="utf-8">
    <title>Örnekler</title>
</head>

<body>
        <form action="aramasonuc.php" method="post">
            <table width="500" align="center" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td><input type="text" name="kelime" style="width: 100%; height: 30px; padding: 0 20px; margin-bottom: 20px;"></td>
                </tr>
                <tr height="30">
                    <td align="center"><input type="submit" value="Site İçinde Arama Yap" style="padding: 0 100px; height: 30px;"></td>
                </tr>
            </table>
        </form>
</body>
</html>
<?php
$VeriTabaniBaglantisi   =   null;
?>