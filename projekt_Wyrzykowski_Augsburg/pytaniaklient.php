<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="stylePytania.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>Pytania</title>
</head>
<body>
<ion-icon class="koszykbtn" name="cart-outline" size="large" onclick="location.href='koszyk.php'"></ion-icon>
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
    <main>
    <ul id="ul1">
        <h1>Pytania</h1>
        <?php 
            $connect = mysqli_connect('localhost','root','','projektbaza');
            $ask="SELECT Imie, email, tresc FROM kontakt";
            $result=mysqli_query($connect,$ask);
            while($wiersz=mysqli_fetch_assoc($result))
        {
            $imie=$wiersz['Imie'];
            $email=$wiersz['email'];
            $tresc=$wiersz['tresc'];
            echo "<div class='towar'><li><b class='b'>".$imie."</b> <div class='c'>".$email."</div></li>";
            echo "<hr></hr>";
            echo "<li id='tresc'>".$tresc."</li></div>";
        }
        ?>
        </ul>
    </main>
    <footer>
        Strona stworzona przez Mateusza Wyrzykowskiego i Daniela Augsburga
    </footer>
</body>
</html>