<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styleInstrumenty.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>Mikrofony</title>
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
        <h1>Mikrofony</h1>
    <div class="towar">
    <img src="img/mikrofon1.png"></img>
        <li>BE JOE MBC-6 mikrofon</li>
            <ul class="ul2">
            <li><b>cena:</b> 339.00zł</li>
            <li><b>Typ:</b> mikrofon dynamiczny</li>
            <li><b>Czułość:</b> -57dB +/- 3dB</li>
        </ul>
        <form method="post">
            <input type="submit" name="mikrofon1" value="Dodaj do koszyka" class="btn" />
        </form>
        </div>
        <div class="towar">
        <img src="img/mikrofon2.png"></img>
        <li>NOVOX NCX cyfrowy pojemnościowy mikrofon</li>
            </li><ul class="ul2">
            <li><b>cena:</b> 449.00zł</li>
            <li><b>Typ:</b> mikrofon pojemnościowy</li>
            <li><b>Czułość:</b> 120dB</li>
        </ul>
        <form method="post">
            <input type="submit" name="mikrofon2" value="Dodaj do koszyka" class="btn" />
        </form>
        </div>
        <div class="towar">
        <img src="img/mikrofon3.png"></img>
        <li>SHURE SM 57 LCE - mikrofon instrumentalny</li>
            <ul class="ul2">
            <li><b>cena:</b> 549.00zł</li>
            <li><b>Typ:</b> mikrofon dynamiczny</li>
            <li><b>Czułość:</b> -56,00 dBV/Pa – 1,60 mV/Pa</li>
        </ul>
        <form method="post">
            <input type="submit" name="mikrofon3" value="Dodaj do koszyka" class="btn" />
        </form>
        </div>
        
        <div class="towar">
        <img src="img/mikrofon4.png"></img>
        <li>NOVOX FREE H1 mikrofon bezprzewodowy</li>
            <ul class="ul2">
            <li><b>cena:</b> 349.00zł</li>
            <li><b>Typ:</b> mikrofon bezprzewodowy</li>
            <li><b>Zasieg działania:</b>50-80 m</li>
        </ul>
        <form method="post">
            <input type="submit" name="mikrofon4" value="Dodaj do koszyka" class="btn" />
        </form>
        </div>
    </ul> 
    </main>
    <footer>
        Strona stworzona przez Mateusza Wyrzykowskiego i Daniela Augsburga
    </footer>
</body>
</html>
<?php
     if(array_key_exists('mikrofon4', $_POST)) {
        trabka4();
    }
    function trabka4()
    {
        $connect = mysqli_connect('localhost','root','','projektbaza');
        $nazwa='NOVOX FREE H1 mikrofon bezprzewodowy';
        $sql=mysqli_query($connect,"SELECT Nazwa FROM koszyk WHERE nazwa = '$nazwa'");
        if(mysqli_num_rows($sql)!=0)
        {
            echo '<script>alert("Podany przedmiot juz istnieje")</script>';
        }
        else
        {
            $ask="INSERT INTO `koszyk` (`ID`,`Nazwa`,`Cena`,`Ilosc`,`Zdjecie`) VALUES (NULL, 'NOVOX FREE H1 mikrofon bezprzewodowy',349.00,1,'mikrofon4.png')";
            $wynik=mysqli_query($connect,$ask);
            echo '<script>alert("Dodano do Koszyka")</script>';
        }
        mysqli_close($connect);
    }
    ?>
    <?php 
    if(array_key_exists('mikrofon3', $_POST)) {
        trabka3();
    }
    function trabka3()
    {
        $connect = mysqli_connect('localhost','root','','projektbaza');
        $nazwa='SHURE SM 57 LCE - mikrofon instrumentalny';
        $sql=mysqli_query($connect,"SELECT Nazwa FROM koszyk WHERE nazwa = '$nazwa'");
        if(mysqli_num_rows($sql)!=0)
        {
            echo '<script>alert("Podany przedmiot juz istnieje")</script>';
        }
        else
        {
            $ask="INSERT INTO `koszyk` (`ID`,`Nazwa`,`Cena`,`Ilosc`,`Zdjecie`) VALUES (NULL, 'SHURE SM 57 LCE - mikrofon instrumentalny',549.00,1,'mikrofon3.png')";
            $wynik=mysqli_query($connect,$ask);
            echo '<script>alert("Dodano do Koszyka")</script>';
        }
        mysqli_close($connect);
    }
    ?>
    <?php
     if(array_key_exists('mikrofon2', $_POST)) {
        trabka2();
    }
    function trabka2()
    {
        $connect = mysqli_connect('localhost','root','','projektbaza');
        $nazwa='NOVOX NCX cyfrowy pojemnościowy mikrofon';
        $sql=mysqli_query($connect,"SELECT Nazwa FROM koszyk WHERE nazwa = '$nazwa'");
        if(mysqli_num_rows($sql)!=0)
        {
            echo '<script>alert("Podany przedmiot juz istnieje")</script>';
        }
        else
        {
            $ask="INSERT INTO `koszyk` (`ID`,`Nazwa`,`Cena`,`Ilosc`,`Zdjecie`) VALUES (NULL, 'NOVOX NCX cyfrowy pojemnościowy mikrofon',449.00,1,'mikrofon2.png')";
            $wynik=mysqli_query($connect,$ask);
            echo '<script>alert("Dodano do Koszyka")</script>';
        }
        mysqli_close($connect);
    }
    ?>
    <?php
     if(array_key_exists('mikrofon1', $_POST)) {
        trabka1();
    }
    function trabka1()
    {
        $connect = mysqli_connect('localhost','root','','projektbaza');
        $nazwa='BE JOE MBC-6 mikrofon';
        $sql=mysqli_query($connect,"SELECT Nazwa FROM koszyk WHERE nazwa = '$nazwa'");
        if(mysqli_num_rows($sql)!=0)
        {
            echo '<script>alert("Podany przedmiot juz istnieje")</script>';
        }
        else
        {
            $ask="INSERT INTO `koszyk` (`ID`,`Nazwa`,`Cena`,`Ilosc`,`Zdjecie`) VALUES (NULL, 'BE JOE MBC-6 mikrofon',339.00,1,'mikrofon1.png')";
            $wynik=mysqli_query($connect,$ask);
            echo '<script>alert("Dodano do Koszyka")</script>';
        }
        mysqli_close($connect);
    }
    ?>