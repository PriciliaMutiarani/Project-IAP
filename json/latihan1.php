<?php

// $mahasiswa = [
//    [
//         "nama"=> "Priiclia",
//         "nim"=> "2217020138",
//         "email"=> "mutiaranipricilia@gmail.com"
//    ],
//     [
//         "nama"=> "icil",
//         "nim"=> "2217020138",
//         "email"=> "mutiaranipricilia@gmail.com"
//    ]
// ];

$dbh = new PDO ('mysql:host=localhost;dbname=phpdasar','root');
$db= $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data= json_encode($mahasiswa);
echo $data;

?>