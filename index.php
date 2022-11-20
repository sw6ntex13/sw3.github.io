<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP Rastgele Sayı Üretme-1</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
 
<body>
 
<form action="kullanicigirisi.php" method="post">
<table border="0" bgcolor="#006699" >
  <tr bgcolor="#00FF99">
    <td colspan="2" align="center">Kullanıcı Girişi</td>
    </tr>
  <tr>
    <td>Kullanıcı Adı:</td>
    <td><input name="kadi" type="text" /></td>
  </tr>
  <tr>
    <td>Şifre</td>
    <td><input name="sifre" type="text" /></td>
  </tr>
  
  <tr bgcolor="#00FF99">
    <td>&nbsp;</td>
    <td><input name="gonder" type="submit" value="Giriş Yap" /></td>
  </tr>
</table>
 
</form>
 
 
<?php
 
   $kadi = $_POST['kadi'];
   $sifre = $_POST['sifre'];
 
	if ($kadi=="" or $sifre=="")
	{
		echo "Lütfen Tüm Alanları Doldurun!";	
	}
	else
	{
		if ($kadi=="admin" && $sifre=="12345")
		{
			echo "Başarılı Şekilde Giriş Yaptınız";	
		}
		else
		{
			echo "Hatalı Kullanıcı Adı veya Şifre Girdiniz.";	
		}
	}
?>
 
 
<br />
 
</body>
</html>
