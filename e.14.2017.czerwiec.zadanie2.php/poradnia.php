<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="poradnia.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poradnia</title>
</head>
<body>
    <div id="baner">
        <h1>PORADNIA SPECJALISTYCZNA</h1>
    </div>
    <div id="lewy">
        <h3>LEKARZE SPECJALIŚCI</h3>
        <table>
            <tr>
                <td colspan="2">Poniedziałek</td>
            </tr>
            <tr>
                <td>Anna Kowalska</td>
                <td>otolaryngolog</td>
            </tr>
            <tr>
                <td colspan="2">Wtorek</td>
            </tr>
            <tr>
                <td>Jan Nowak</td>
                <td>kardiolog</td>
            </tr>
        </table>
        <h3>LISTA PACJENTÓW</h3>
        <?php
        $server = "localhost";
        $user = "root";
        $pass = "";
        $db = "poradnia";

        $conn = mysqli_connect($server, $user, $pass, $db);

        if(!$conn){
            mysqli_connect_error($conn);
        }

        $sql = "SELECT id, imie, nazwisko, choroba FROM pacjenci;";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                

                echo "". $row["id"] ." ". $row["imie"] ." ". $row["nazwisko"] ." ". $row["choroba"] ."<br>
                ";
            }
        }

        mysqli_close($conn);
        ?>
        <br></br>
        <form method="POST" action="pacjent.php">
            <label>Podaj id:</label><br>
            <input type="number" name="id"><br>
            <input type="submit" value="Pokaż szczegóły">
        </form>
    </div>
    <div id="prawy">
        <h2>KARTA PACJENTA</h2>
        <p>Nie wybrano pacjenta</p>
    </div>
    <div id="stopka">
        <p>utworzone przez: amela</p>
        <a href="kwerendy.txt">Kwerendy do pobrania</a>
    </div>
</body>
</html>