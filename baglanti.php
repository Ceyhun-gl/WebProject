<?php
  try{
    $db=new PDO("mysql:host=localhost; dbname=sporkulubu; charset=utf8", "root" ,'' );
    //echo "Veritabani baglantisi basarili";
  }
  catch(Excepiton $e){
    echo $e->getMessage();
  }
?>