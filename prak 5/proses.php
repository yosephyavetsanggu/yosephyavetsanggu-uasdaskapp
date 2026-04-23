<?php
$host = 'localhost';
$user = 'root'; 
$password = ''; 
$dbname = 'data_identitas'; 
$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['fnama'])) {
    $fnama = $_POST['fnama'];
    $lalamat = $_POST['lalamat'];
    $nohp = $_POST['nohp'];
    $tgllahir = $_POST['tgllahir'];

    $sql = "INSERT INTO identitas (nama, alamat, no_hp, tgl_lahir) VALUES ('$fnama', '$lalamat', '$nohp', '$tgllahir')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<span class='success'>Data berhasil disimpan!</span><br/>";
        echo "Nama : " . $fnama . "<br/>";
        echo "Alamat : " . $lalamat . "<br/>";
        echo "No HP : " . $nohp . "<br/>";
        echo "Tanggal Lahir : " . $tgllahir . "<br/>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>