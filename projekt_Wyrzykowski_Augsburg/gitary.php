<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styleInstrumenty.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>Gitary</title>
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
        <h1>Gitary
        </h1>
    <div class="towar">
    <img src="img/gitara1.png"></img>
        <li>EKO S-300 BLK GITARA ELEKTRYCZNA</li>
            <ul class="ul2">
            <li><b>cena:</b> 839.00zł</li>
            <li><b>Korpus:</b> Lipa</li>
            <li><b>Gryf:</b> Klons</li>
        </ul>
        <form method="post">
            <input type="submit" name="gitara1" value="Dodaj do koszyka" class="btn" />
        </form>
        </div>
        <div class="towar">
        <img src="img/gitara2.png"></img>
        <li>BE JOE GC-102 GITARA KLASYCZNA 1/4 Z POKROWCEM</li>
            </li><ul class="ul2">
            <li><b>cena:</b> 319.00zł</li>
            <li><b>Kształt:</b> 1/4 gitara klasyczna</li>
            <li><b>Tył i boki:</b> Lipa</li>
        </ul>
        <form method="post">
            <input type="submit" name="gitara2" value="Dodaj do koszyka" class="btn" />
        </form>
        </div>
        <div class="towar">
        <img src="img/gitara3.png"></img>
        <li>TAKAMINE GB72CE-BSB</li>
            <ul class="ul2">
            <li><b>cena:</b> 2999.00zł</li>
            <li><b>Gryf:</b> Mahoń</li>
            <li><b>Płyta</b> wierzchnia: Lity Świerk</li>
        </ul>
        <form method="post">
            <input type="submit" name="gitara3" value="Dodaj do koszyka" class="btn" />
        </form>
        </div>
        
        <div class="towar">
        <img src="img/gitara4.png"></img>
        <li>BE JOE FZU-110 WH CONCERT UKULELE KONCERTOWE</li>
            <ul class="ul2">
            <li><b>cena:</b> 319.00zł</li>
            <li><b>Rozmiar:</b> Concert</li>
            <li><b>Tył i boki:</b> Sapeli</li>
        </ul>
        <form method="post">
            <input type="submit" name="gitara4" value="Dodaj do koszyka" class="btn" />
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
     if(array_key_exists('gitara4', $_POST)) {
        gitary4();
    }
    function gitary4()
    {
        $connect = mysqli_connect('localhost','root','','projektbaza');
        $nazwa='BE JOE FZU-110 WH CONCERT UKULELE KONCERTOWE';
        $sql=mysqli_query($connect,"SELECT Nazwa FROM koszyk WHERE nazwa = '$nazwa'");
        if(mysqli_num_rows($sql)!=0)
        {
            echo '<script>alert("Podany przedmiot juz istnieje")</script>';
        }
        else
        {
            $ask="INSERT INTO `koszyk` (`ID`,`Nazwa`,`Cena`,`Ilosc`,`Zdjecie`) VALUES (NULL, 'BE JOE FZU-110 WH CONCERT UKULELE KONCERTOWE',319.00,1,'gitara4.png')";
            $wynik=mysqli_query($connect,$ask);
            echo '<script>alert("Dodano do Koszyka")</script>';
        }
        mysqli_close($connect);
    }
    ?>
    <?php 
    if(array_key_exists('gitara3', $_POST)) {
        gitary3();
    }
    function gitary3()
    {
        $connect = mysqli_connect('localhost','root','','projektbaza');
        $nazwa='TAKAMINE GB72CE-BSB';
        $sql=mysqli_query($connect,"SELECT Nazwa FROM koszyk WHERE nazwa = '$nazwa'");
        if(mysqli_num_rows($sql)!=0)
        {
            echo '<script>alert("Podany przedmiot juz istnieje")</script>';
        }
        else
        {
            $ask="INSERT INTO `koszyk` (`ID`,`Nazwa`,`Cena`,`Ilosc`,`Zdjecie`) VALUES (NULL, 'TAKAMINE GB72CE-BSB',2999.00,1,'gitara3.png')";
            $wynik=mysqli_query($connect,$ask);
            echo '<script>alert("Dodano do Koszyka")</script>';
        }
        mysqli_close($connect);
    }
    ?>
    <?php
     if(array_key_exists('gitara2', $_POST)) {
        gitary2();
    }
    function gitary2()
    {
        $connect = mysqli_connect('localhost','root','','projektbaza');
        $nazwa='BE JOE GC-102 GITARA KLASYCZNA 1/4 Z POKROWCEM';
        $sql=mysqli_query($connect,"SELECT Nazwa FROM koszyk WHERE nazwa = '$nazwa'");
        if(mysqli_num_rows($sql)!=0)
        {
            echo '<script>alert("Podany przedmiot juz istnieje")</script>';
        }
        else
        {
            $ask="INSERT INTO `koszyk` (`ID`,`Nazwa`,`Cena`,`Ilosc`,`Zdjecie`) VALUES (NULL, 'BE JOE GC-102 GITARA KLASYCZNA 1/4 Z POKROWCEM',319.00,1,'gitara2.png')";
            $wynik=mysqli_query($connect,$ask);
            echo '<script>alert("Dodano do Koszyka")</script>';
        }
        mysqli_close($connect);
    }
    ?>
    <?php
     if(array_key_exists('gitara1', $_POST)) {
        gitary1();
    }
    function gitary1()
    {
        $connect = mysqli_connect('localhost','root','','projektbaza');
        $nazwa='EKO S-300 BLK GITARA ELEKTRYCZNA';
        $sql=mysqli_query($connect,"SELECT Nazwa FROM koszyk WHERE nazwa = '$nazwa'");
        if(mysqli_num_rows($sql)!=0)
        {
            echo '<script>alert("Podany przedmiot juz istnieje")</script>';
        }
        else
        {
            $ask="INSERT INTO `koszyk` (`ID`,`Nazwa`,`Cena`,`Ilosc`,`Zdjecie`) VALUES (NULL, 'EKO S-300 BLK GITARA ELEKTRYCZNA',839.00,1,'gitara1.png')";
            $wynik=mysqli_query($connect,$ask);
            echo '<script>alert("Dodano do Koszyka")</script>';
        }
        mysqli_close($connect);
    }
    ?>