<?php

if (session_status() == PHP_SESSION_NONE) {session_start();}

function getDateToday()
{
   return date('d.m.Y H:i:s');
}

function baglanti()
{
    $dbname = "";
    $dbusername = "";
    $dbpassword = "";

    try {
        date_default_timezone_set('Europe/Istanbul');
        $baglanti = new PDO('mysql:host=localhost;dbname='.$dbname.'', ''.$dbusername.'', ''.$dbpassword.'');
        $baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $baglanti->exec("SET CHARACTER SET utf8");
        $baglanti->exec("SET NAMES utf8");
        return $baglanti;
    } catch (PDOException $e) {
        die("Veritabanı bağlantı hatası: " . $e->getMessage());
    }
}

?>
