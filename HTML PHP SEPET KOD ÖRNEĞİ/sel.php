<?php
$istenilens=$_POST["istenilens"];
$keys=$_POST["keys"];
$baglan=mysqli_connect("localhost","root","","internet");
$ekle="insert into siparis (istenilen,iskey) values ('".$istenilens."','".$keys."')";
if ($baglan->query($ekle) === TRUE) 
{
    echo "Siparişiniz Onaylandı.Tahmini Bekleme süreniz 45dk...";
} 
else 
{
   echo "Hata: " . $ekle. "<br>" . $baglan->error;
}

?><br><br><br><br><br><br>
<form>
    <center>
    <input type="button" onclick="window.location.href = 'index.html'" value="ANASAYFA" class="button">
    </center>
</form>
<style>
  .button {

display: inline-block;

padding: 15px 25px;

font-size: 24px;

cursor: pointer;

text-align: center;

text-decoration: none;

outline: none;

color: #fff;

background-color:#f4511e;

border: none;

border-radius: 15px;

box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {

background-color: #3e8e41;

box-shadow: 0 5px #666;

transform: translateY(4px);
}
</style>
