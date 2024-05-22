<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="weterynarz.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weterynarz</title>
</head>
<body>
    <div id="baner">
        <h1>GABINET WETERYNARYJNY</h1>
    </div>
    <div id="lewy">
        <h2>PSY</h2>
        <?php

        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "weterynarz";

        $conn = mysqli_connect($host, $user, $pass, $db);

        if(!$conn){
            echo mysqli_connect_error($conn);
        }

        $sql = "SELECT id, imie, wlasciciel FROM zwierzeta WHERE rodzaj = 1";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0){

            for($i=0;$i<mysqli_num_rows($result);$i++){
                $row = mysqli_fetch_assoc($result);

                echo "". $row['id'] . " " . $row['imie'] . " " . $row['wlasciciel'] ."<br>
                <form action='' method='post'>
                ";
            }
        }


        mysqli_close($conn);

        ?>
        <h2>KOTY</h2>
        <?php
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "weterynarz";

        $conn = mysqli_connect($host, $user, $pass, $db);

        if(!$conn){
            echo mysqli_connect_error($conn);
        }

        $sql = "SELECT id, imie, wlasciciel FROM zwierzeta WHERE rodzaj = 2";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0){

            for($i=0;$i<mysqli_num_rows($result);$i++){
                $row = mysqli_fetch_assoc($result);

                echo "". $row['id'] . " " . $row['imie'] . " " . $row['wlasciciel'] ."<br>
                
                <form action='' method='post'>
                ";
            }
        }


        mysqli_close($conn);
        ?>
    </div>
    <div id="srodkowy">
        <h2>SZCZEGÓŁOWA INFORMACJA O ZWIERZĘTACH</h2>
        <?php
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "weterynarz";

        $conn = mysqli_connect($host, $user, $pass, $db);

        if(!$conn){
            echo mysqli_connect_error($conn);
        }

        $sql = "SELECT imie, telefon, szczepienie, opis FROM zwierzeta";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0){

            for($i=0;$i<mysqli_num_rows($result);$i++){
                $row = mysqli_fetch_assoc($result);

                echo "Pacjent: ". $row['imie'] . "<br> Telefon właściciela: " . $row['telefon'] . " ostatnie szczepienie: " . $row['szczepienie'] . " informacje: " . $row['opis'] ."<hr>
                
                <form action='' method='post'>
                </br>";
            }
        }


        mysqli_close($conn);
        ?>
    </div>
    <div id="prawy">
        <h2>WETERYNARZ</h2>
        <a href="logo.jpg"><img src="logo-mini.jpg"></a>
        <p>Krzysztof Nowakowski, lekarz weterynarii</p>
        <h2>GODZINY PRZYJĘĆ</h2>
        <table>
            <tr>
                <th>Poniedziałek</th>
                <th>15:00 - 19:00</th>
            </tr>
            <tr>
                <th>Wtorek</th>
                <th>15:00 - 19:00</th>
            </tr>
        </table>
    </div>
</body>
</html>