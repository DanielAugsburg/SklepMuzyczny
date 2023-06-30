<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styleInstrumenty.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>Słuchawki</title>
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
        <h1>Słuchawki</h1>
    <div class="towar">
    <img src="img/sluchawki1.png"></img>
        <li>BE JOE HP-580</li>
            <ul class="ul2">
            <li><b>cena:</b> 189.00zł</li>
            <li><b>Zakres częstotliwości:</b> 10 – 20kHz</li>
            <li><b>Złącze:</b> Złocone, 3,5 mm złącze typu jack</li>
        </ul>
        <form method="post">
            <input type="submit" name="sluchawki1" value="Dodaj do koszyka" class="btn" />
        </form>
        </div>
        <div class="towar">
        <img src="img/sluchawki2.png"></img>
        <li>SHURE SRH 240 A-BK-EFS</li>
            </li><ul class="ul2">
            <li><b>cena:</b> 249.00zł</li>
            <li><b>Zakres częstotliwości:</b> 20 Hz – 20 kHz</li>
            <li><b>Złącze:</b> 5 Mm Stereo Jack</li>
        </ul>
        <form method="post">
            <input type="submit" name="sluchawki2" value="Dodaj do koszyka" class="btn" />
        </form>
        </div>
        <div class="towar">
        <img src="img/sluchawki3.png"></img>
        <li>SHURE SRH-440A-EFS</li>
            <ul class="ul2">
            <li><b>cena:</b> 449.00zł</li>
            <li><b>Zakres częstotliwości:</b> 10 Hz - 22 kHz</li>
            <li><b>Złącze:</b> Pozłacany wtyk mini 3,5 mm</li>
        </ul>
        <form method="post">
            <input type="submit" name="sluchawki3" value="Dodaj do koszyka" class="btn" />
        </form>
        </div>
        
        <div class="towar">
        <img src="img/sluchawki4.png"></img>
        <li>SHURE SRH 840A-EFS</li>
            <ul class="ul2">
            <li><b>cena:</b> 554.00zł</li>
            <li><b>Zakres częstotliwości:</b> 5 Hz - 25 kHz</li>
            <li><b>Złącze:</b> Jack TRS 3.5 mm - prosty</li>
        </ul>
        <form method="post">
            <input type="submit" name="sluchawki4" value="Dodaj do koszyka" class="btn" />
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
     if(array_key_exists('sluchawki4', $_POST)) {
        sluchawki4();
    }
    function sluchawki4()
    {
        $connect = mysqli_connect('localhost','root','','projektbaza');
        $nazwa='SHURE SRH 840A-EFS - SŁUCHAWKI';
        $sql=mysqli_query($connect,"SELECT Nazwa FROM koszyk WHERE nazwa = '$nazwa'");
        if(mysqli_num_rows($sql)!=0)
        {
            echo '<script>alert("Podany przedmiot juz istnieje")</script>';
        }
        else
        {
            $ask="INSERT INTO `koszyk` (`ID`,`Nazwa`,`Cena`,`Ilosc`,`Zdjecie`) VALUES (NULL, 'SHURE SRH 840A-EFS - SŁUCHAWKI',554.00,1,'sluchawki4.png')";
            $wynik=mysqli_query($connect,$ask);
            echo '<script>alert("Dodano do Koszyka")</script>';
        }
        mysqli_close($connect);
    }
    ?>
    <?php 
    if(array_key_exists('sluchawki3', $_POST)) {
        sluchawki3();
    }
    function sluchawki3()
    {
        $connect = mysqli_connect('localhost','root','','projektbaza');
        $nazwa='SHURE SRH-440A-EFS - Słuchawki';
        $sql=mysqli_query($connect,"SELECT Nazwa FROM koszyk WHERE nazwa = '$nazwa'");
        if(mysqli_num_rows($sql)!=0)
        {
            echo '<script>alert("Podany przedmiot juz istnieje")</script>';
        }
        else
        {
            $ask="INSERT INTO `koszyk` (`ID`,`Nazwa`,`Cena`,`Ilosc`,`Zdjecie`) VALUES (NULL, 'SHURE SRH-440A-EFS - Słuchawki',449.00,1,'sluchawki3.png')";
            $wynik=mysqli_query($connect,$ask);
            echo '<script>alert("Dodano do Koszyka")</script>';
        }
        mysqli_close($connect);
    }
    ?>
    <?php
     if(array_key_exists('sluchawki2', $_POST)) {
        sluchawki2();
    }
    function sluchawki2()
    {
        $connect = mysqli_connect('localhost','root','','projektbaza');
        $nazwa='SHURE SRH 240 A-BK-EFS';
        $sql=mysqli_query($connect,"SELECT Nazwa FROM koszyk WHERE nazwa = '$nazwa'");
        if(mysqli_num_rows($sql)!=0)
        {
            echo '<script>alert("Podany przedmiot juz istnieje")</script>';
        }
        else
        {
            $ask="INSERT INTO `koszyk` (`ID`,`Nazwa`,`Cena`,`Ilosc`,`Zdjecie`) VALUES (NULL, 'SHURE SRH 240 A-BK-EFS',249.00,1,'sluchawki2.png')";
            $wynik=mysqli_query($connect,$ask);
            echo '<script>alert("Dodano do Koszyka")</script>';
        }
        mysqli_close($connect);
    }
    ?>
    <?php
     if(array_key_exists('sluchawki1', $_POST)) {
        sluchawki1();
    }
    function sluchawki1()
    {
        $connect = mysqli_connect('localhost','root','','projektbaza');
        $nazwa='BE JOE HP-580 - SŁUCHAWKI';
        $sql=mysqli_query($connect,"SELECT Nazwa FROM koszyk WHERE nazwa = '$nazwa'");
        if(mysqli_num_rows($sql)!=0)
        {
            echo '<script>alert("Podany przedmiot juz istnieje")</script>';
        }
        else
        {
            $ask="INSERT INTO `koszyk` (`ID`,`Nazwa`,`Cena`,`Ilosc`,`Zdjecie`) VALUES (NULL, 'BE JOE HP-580 - SŁUCHAWKI',189.00,1,'sluchawki1.png')";
            $wynik=mysqli_query($connect,$ask);
            echo '<script>alert("Dodano do Koszyka")</script>';
        }
        mysqli_close($connect);
    }
    ?>