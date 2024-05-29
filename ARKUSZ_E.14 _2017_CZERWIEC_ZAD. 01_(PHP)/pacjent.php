<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="przychodnia.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Przychodnia</title>
</head>
<body>
    <div id="baner">
        <h1>PRAKTYKA LEKARZA RODZINNEGO</h1>
    </div>
    <div id="lewy">
        <h3>LISTA PACJENTÓW</h3>
        <?php
        $server = "localhost";
        $user = "root";
        $pass = "";
        $db = "przychodnia";

        $conn = mysqli_connect($server, $user, $pass, $db);

        $sql = "SELECT id, imie, nazwisko FROM pacjenci;";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                

                echo "". $row["id"] ." ". $row["imie"] ." ". $row["nazwisko"] ."<br>
                ";
            }
        }


        mysqli_close($conn);        
        ?>
        <br><br>
        <form action="pacjent.php" method="post">
            Podaj id:<br>
            <input type="number" name="id">
            <input type="submit" value="Pokaż dane" name="submit">
        </form>
        <h3>LEKARZE</h3>
        <ul>
            <li>pn - śr</li>
        </ul>
        <ol>
            <li>Anna Kwiatkowska</li>
            <li>Jan Kowalewski</li>
        </ol>
        <ul>
            <li>czw - pt</li>
        </ul>
        <ol>
            <li>Krzysztof Nowak</li>
        </ol>
    </div>
    <div id="prawy">
        <h2>INFORMACJE SZCZEGÓŁOWE O PACJENCIE</h2>
        <?php
        $id = $_POST["id"];
        $submit = $_POST["submit"];

        $server = "localhost";
        $user = "root";
        $pass = "";
        $db = "przychodnia";

        $conn = mysqli_connect($server, $user, $pass, $db);

        $sql = "SELECT imie, nazwisko, choroby_przewlekle, uczulenia FROM pacjenci WHERE id = $id;";

        $result = mysqli_query($conn, $sql);
         
        if (mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                
                echo "<p>Imię i nazwisko: ". $row["imie"] ."". $row["nazwisko"] ."</p>";
                echo "<p>Choroby przewlekłe: ". $row["choroby_przewlekle"] ."</p>";
                echo "<p>Uczulenia: ". $row["uczulenia"] ."</p>";
            }
        }

        mysqli_close($conn);  
        ?>
    </div>
    <div id="stopka">
        <p>utworzone przez: Amelia R</p>
        <a href="kwerendy.txt">Pobierz plik z kwerendami</a>
    </div>
</body>
</html>