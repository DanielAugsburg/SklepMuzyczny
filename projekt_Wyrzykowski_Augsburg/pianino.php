<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styleInstrumenty.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>pianinoy</title>
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
                <button class="button" onclick="location.href='mikrofony.php';">pianinoy</button>
                <button class="button" onclick="location.href='pianino.php';">Pianina</button>
            </div>
        </div>
		<button class="button" onclick="location.href='Kontakt.html';">Kontakt</button>
    </div>
    <main>
    <ul id="ul1">
        <h1>Pianina</h1>
    <div class="towar">
    <img src="img/pianino1.png"></img>
        <li>CASIO AP-470 BK</li>
            <ul class="ul2">
            <li><b>cena:</b> 5899.00zł</li>
            <li><b>Ilość klawiszy:</b> 88</li>
            <li><b>Czułość:</b> 3 poziomy czułości</li>
        </ul>
        <form method="post">
            <input type="submit" name="pianino1" value="Dodaj do koszyka" class="btn" />
        </form>
        </div>
        <div class="towar">
        <img src="img/pianino2.png"></img>
        <li>AMAHA P-125B - PIANINO CYFROWE</li>
            </li><ul class="ul2">
            <li><b>cena:</b> 3199.00zł</li>
            <li><b>Ilość klawiszy:</b> 88</li>
            <li><b>Ilość brzmień:</b> 24</li>
        </ul>
        <form method="post">
            <input type="submit" name="pianino2" value="Dodaj do koszyka" class="btn" />
        </form>
        </div>
        <div class="towar">
        <img src="img/pianino3.png"></img>
        <li>SHURE SM 57 LCE - pianino instrumentalny</li>
            <ul class="ul2">
            <li><b>cena:</b> 1299.00zł</li>
            <li><b>Ilość klawiszy:</b> 61</li>
            <li><b>Czułość:</b> 3 poziomy czułości</li>
        </ul>
        <form method="post">
            <input type="submit" name="pianino3" value="Dodaj do koszyka" class="btn" />
        </form>
        </div>
        
        <div class="towar">
        <img src="img/pianino4.png"></img>
        <li>WELTMEISTER SAPHIR 41/120/IV/11/5 WHITE</li>
            <ul class="ul2">
            <li><b>cena:</b> 14900.00zł</li>
            <li><b>Ilość klawiszy:</b> 41</li>
            <li><b>Czułość:</b> -</li>
        </ul>
        <form method="post">
            <input type="submit" name="pianino4" value="Dodaj do koszyka" class="btn" />
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
     if(array_key_exists('pianino4', $_POST)) {
        pianino4();
    }
    function pianino4()
    {
        $connect = mysqli_connect('localhost','root','','projektbaza');
        $nazwa='WELTMEISTER SAPHIR 41/120/IV/11/5 WHITE';
        $sql=mysqli_query($connect,"SELECT Nazwa FROM koszyk WHERE nazwa = '$nazwa'");
        if(mysqli_num_rows($sql)!=0)
        {
            echo '<script>alert("Podany przedmiot juz istnieje")</script>';
        }
        else
        {
            $ask="INSERT INTO `koszyk` (`ID`,`Nazwa`,`Cena`,`Ilosc`,`Zdjecie`) VALUES (NULL, 'WELTMEISTER SAPHIR 41/120/IV/11/5 WHITE',14900.00,1,'pianino4.png')";
            $wynik=mysqli_query($connect,$ask);
            echo '<script>alert("Dodano do Koszyka")</script>';
        }
        mysqli_close($connect);
    }
    ?>
    <?php 
    if(array_key_exists('pianino3', $_POST)) {
        pianino3();
    }
    function pianino3()
    {
        $connect = mysqli_connect('localhost','root','','projektbaza');
        $nazwa='SHURE SM 57 LCE - pianino instrumentalny';
        $sql=mysqli_query($connect,"SELECT Nazwa FROM koszyk WHERE nazwa = '$nazwa'");
        if(mysqli_num_rows($sql)!=0)
        {
            echo '<script>alert("Podany przedmiot juz istnieje")</script>';
        }
        else
        {
            $ask="INSERT INTO `koszyk` (`ID`,`Nazwa`,`Cena`,`Ilosc`,`Zdjecie`) VALUES (NULL, 'SHURE SM 57 LCE - pianino instrumentalny',1299.00,1,'pianino3.png')";
            $wynik=mysqli_query($connect,$ask);
            echo '<script>alert("Dodano do Koszyka")</script>';
        }
        mysqli_close($connect);
    }
    ?>
    <?php
     if(array_key_exists('pianino2', $_POST)) {
        pianino2();
    }
    function pianino2()
    {
        $connect = mysqli_connect('localhost','root','','projektbaza');
        $nazwa='AMAHA P-125B - PIANINO CYFROWE';
        $sql=mysqli_query($connect,"SELECT Nazwa FROM koszyk WHERE nazwa = '$nazwa'");
        if(mysqli_num_rows($sql)!=0)
        {
            echo '<script>alert("Podany przedmiot juz istnieje")</script>';
        }
        else
        {
            $ask="INSERT INTO `koszyk` (`ID`,`Nazwa`,`Cena`,`Ilosc`,`Zdjecie`) VALUES (NULL, 'AMAHA P-125B - PIANINO CYFROWE',3199.00,1,'pianino2.png')";
            $wynik=mysqli_query($connect,$ask);
            echo '<script>alert("Dodano do Koszyka")</script>';
        }
        mysqli_close($connect);
    }
    ?>
    <?php
     if(array_key_exists('pianino1', $_POST)) {
        pianino1();
    }
    function pianino1()
    {
        $connect = mysqli_connect('localhost','root','','projektbaza');
        $nazwa='CASIO AP-470 BK';
        $sql=mysqli_query($connect,"SELECT Nazwa FROM koszyk WHERE nazwa = '$nazwa'");
        if(mysqli_num_rows($sql)!=0)
        {
            echo '<script>alert("Podany przedmiot juz istnieje")</script>';
        }
        else
        {
            $ask="INSERT INTO `koszyk` (`ID`,`Nazwa`,`Cena`,`Ilosc`,`Zdjecie`) VALUES (NULL, 'CASIO AP-470 BK',5899.00,1,'pianino1.png')";
            $wynik=mysqli_query($connect,$ask);
            echo '<script>alert("Dodano do Koszyka")</script>';
        }
        mysqli_close($connect);
    }
    ?>