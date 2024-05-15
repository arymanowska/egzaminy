<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "filmy";

$conn = mysqli_connect($host, $user, $pass, $db);

if(!$conn){
    echo mysqli_connect_error($conn);
}

$gatunki_id= $_POST["gatunki"];
$tytul= $_POST["tytul"];
$rok= $_POST["rok"];
$ocena= $_POST["ocena"];



$sql = "INSERT INTO `filmy`(`gatunki_id`,  `tytul`, `rok`, `ocena`) VALUES ('$gatunki_id','$tytul','$rok','$ocena')";

mysqli_query($conn, $sql);

echo "Film $tytul został dodany do bazy";

mysqli_close($conn);
?>