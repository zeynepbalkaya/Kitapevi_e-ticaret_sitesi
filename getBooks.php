<?php
// Veritabanı bağlantısı yapılacak bilgiler
$servername = "localhost";
$username = "root";
$password = "123aysesa";
$dbname = "booksdb";

// Veritabanına bağlanma
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantı kontrolü
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

// Veritabanından verileri çekme
$sql = "SELECT * FROM books";
$result = $conn->query($sql);

// Verileri bir dizi olarak toplama
$books = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $books[] = $row;
    }
}

// JSON olarak verileri döndürme
header('Content-Type: application/json');
echo json_encode($books);

// Veritabanı bağlantısını kapatma
$conn->close();
?>
