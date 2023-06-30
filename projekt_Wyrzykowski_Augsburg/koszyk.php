<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styleKoszyk.css">
    <title>Koszyk</title>   
</head>
<body>
    
<div class="przyciski">
		<button class="button" onclick="location.href='onas.html';">O NAS</button>
		<button class="button" onclick="location.href='glowna.php';">Aktualności</button>
        <div class="przycisk_rozwijany">
		    <button class="button">Instrumenty</button>
            <div class="lista">
                <button class="button" onclick="location.href='trabki.php';">Trabki</b></button>
                <button class="button" onclick="location.href='gitary.php';">Gitary</button>
                <button class="button" onclick="location.href='sluchawki.php';">Sluchawki</button>
                <button class="button" onclick="location.href='mikrofony.php';">Mikrofony</button>
                <button class="button" onclick="location.href='pianino.php';">Pianina</button>
            </div>
        </div>
		<button class="button" onclick="location.href='Kontakt.html';">Kontakt</button>
    </div>
    <table>
    <form method="post">
    <?php
        $connect = mysqli_connect('localhost','root','','projektbaza');
        $sql=mysqli_query($connect,"SELECT Nazwa, Cena, zdjecie FROM koszyk");
        $suma=0;
        $ile=1;
        while($wiersz=mysqli_fetch_assoc($sql))
        {
            $nazwa=$wiersz["Nazwa"];
            $cena=$wiersz["Cena"];
            $zdjecie=$wiersz["zdjecie"];
            
            echo '<tr><td><img id="test" src="img/'.$zdjecie.'"</img></td>';
            echo '<td>'.$nazwa.'</b></td>';
			echo '<td><input type="number" name="il" min="0" max="5"';
            if(isset($_POST['il'])){
                $ile=$_POST['il'];
                $cena=intval($cena*$ile);
              }
              echo 'placeholder="'.$ile.'" required/>'.'</td>';
              echo '<td><b>'.$cena.'.00zł</td>'.'</tr></b>';
            $suma=$suma+$cena;
            
        }
        echo "<tr><td></td><td></td><td><input type='submit' id='btnpolicz' value='Policz'/></form></td><td><b>SUMA: ".$suma.".00zł</b></td></tr>";
        echo "</table>";
        mysqli_close($connect);
        ?>
        <div id="wysylka" style="display: none;"> 
    <form method='POST'>
        <h2>Aby dokończyć zamówienia proszę podać dane do wysyłki</h2>
        <input type='test' name='imie' placeholder='Imię'/><br>
        <input type='text' name='nazwisko' placeholder='Nazwisko'/><br>
        <input type='text' name='adres' placeholder='Adres'/><br>
        <select name='swysylki'><option value='Paczkomat'>Paczkomat</option><option value='kurier'>Kurier</option></select> 
        <input type='submit' id="btnwysylka" name='wysylanie' value='Wyślij'></input>
    </form>
    <?php
    if(array_key_exists('wysylanie', $_POST)) {
        wysylanie();
    }
    function wysylanie()
    {
        if(isset($_POST['imie']) || isset($_POST['nazwisko']) || isset($_POST['adres']))
        {
        echo '<script>alert("Dziękujemy za zakupy w naszym sklepie!';
        echo '\nKupione produkty zostaną wysłane po wykonaniu płatności!")</script>';
        $connect=mysqli_connect('localhost','root','','projektbaza');
            $sql=mysqli_query($connect,"SELECT ID, Nazwa FROM koszyk");
            while($wiersz=mysqli_fetch_assoc($sql))
            {
                $nazwa=$wiersz["Nazwa"];
                $id=$wiersz["ID"];
                $zapytanie="DELETE FROM koszyk WHERE ID='$id'";
                if (mysqli_query($connect, $zapytanie)) 
                {
                    header("Refresh: 0.5; url=glowna.php");
                }
            }
            mysqli_close($connect);
        }
    }
        ?>
    </div>
    <button id="zamow" onclick="wysylaniee()">Zamów</button>
    <form method="POST" action="wyczysckoszyk.php">
        <input  type="submit" id="btnczysc" value="Wyczyść"></input>
    </form>
    <main>
</main>
</body>
</html>
<script>
function wysylaniee()
{
    document.getElementById('wysylka').style.display = 'block'
}
</script>