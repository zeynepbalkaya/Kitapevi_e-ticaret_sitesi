<?php
$servername = "localhost";
$username = "zeynep";
$password = "123456";
$dbname = "sutlackitap";

$baglanti = new mysqli("host", "username", "password", "dbname");

if ($connect -> connect_error) {
    die ("Bağlantı hatası oluştu.");
}
echo "Bağlantı kuruldu. Sütlaç Kitapevine Hoş Geldiniz!</br> Web Teknolojileri dersi Final Ödevi";
?>