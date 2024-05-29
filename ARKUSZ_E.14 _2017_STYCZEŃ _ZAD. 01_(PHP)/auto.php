<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="auto.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komis Samochodowy</title>
</head>
<body>
    <div id="baner">
        <h1>SAMOCHODY</h1>
    </div>
    <div id="lewy">
        <h2>Wykaz samochodów</h2>
        <ul>
            <?php
            $s = "localhost";
            $u = "root";
            $p = "";
            $d = "Komis";

            $conn = mysqli_connect($s, $u, $p, $d);

            $sql = "SELECT id, marka, model FROM samochody;";

            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "<li>". $row["id"] ." ";
                    echo " ". $row["marka"] ." ";
                    echo " ". $row["model"] ."</li>";
                }
            }

            mysqli_close($conn);
            ?>
        </ul>
        <h2>Zamówienia</h2>
        <ul>
            <?php
            $s = "localhost";
            $u = "root";
            $p = "";
            $d = "Komis";

            $conn = mysqli_connect($s, $u, $p, $d);

            $sql = "SELECT id, klient FROM zamowienia;";

            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    echo "<li>". $row["id"] ." ";
                    echo " ". $row["klient"] ."</li>";
                }
            }
            ?>
        </ul>
    </div>
    <div id="prawy">
        <h2>Pełne dane: Fiat</h2>
        <?php
        $s = "localhost";
        $u = "root";
        $p = "";
        $d = "Komis";

        $conn = mysqli_connect($s, $u, $p, $d);

        $sql = "SELECT * FROM `samochody` WHERE marka = 'fiat';";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                echo "". $row["id"] ." /";
                echo "". $row["marka"] ." /";
                echo "". $row["model"] ." /";
                echo "". $row["rocznik"] ." /";
                echo "". $row["kolor"] ." /";
                echo "". $row["stan"] ."<br>";
            }
        }
        ?>
    </div>
    <div id="stopka">
        <table>
            <tr>
                <td><a href="kwerendy.txt">Kwerendy</a></td>
                <td>Autor: Amelia R</td>
                <td><img src="auto.png" alt="komis samochodowy"></td>
            </tr>
        </table>
    </div>
</body>
</html>