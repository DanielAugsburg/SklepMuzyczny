<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styleInstrumenty.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>Trąbki</title>
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
        <h1> Trąbki</h1>
    <div class="towar">
    <img src="img/trabka1.png"></img>
        <li>J.MICHAEL TR-380</li>
            <ul class="ul2">
            <li><b>cena:</b> 1299.00zł</li>
            <li><b>model:</b> studencki</li>
            <li><b>strój:</b> B</li>
        </ul>
        <form method="post">
            <input type="submit" name="trabka1" value="Dodaj do koszyka" class="btn" />
        </form>
        </div>
        <div class="towar">
        <img src="img/trabka2.png"></img>
        <li>J. MICHAEL TR-300SA</li>
            </li><ul class="ul2">
            <li><b>cena:</b> 1199.00zł</li>
            <li><b>model:</b> -</li>
            <li><b>strój:</b> B</li>
        </ul>
        <form method="post">
            <input type="submit" name="trabka2" value="Dodaj do koszyka" class="btn" />
        </form>
        </div>
        <div class="towar">
        <img src="img/trabka3.png"></img>
        <li>J. MICHAEL TR-500S</li>
            <ul class="ul2">
            <li><b>cena:</b> 1799.00zł</li>
            <li><b>model:</b> -</li>
            <li><b>strój:</b> B</li>
        </ul>
        <form method="post">
            <input type="submit" name="trabka3" value="Dodaj do koszyka" class="btn" />
        </form>
        </div>
        
        <div class="towar">
        <img src="img/trabka4.png"></img>
        <li>J.MICHAEL TR-200A</li>
            <ul class="ul2">
            <li><b>cena:</b> 999.00zł</li>
            <li><b>model:</b> uczniowski</li>
            <li><b>strój:</b> B</li>
        </ul>
        <form method="post">
            <input type="submit" name="trabka4" value="Dodaj do koszyka" class="btn" />
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
     if(array_key_exists('trabka4', $_POST)) {
        trabka4();
    }
    function trabka4()
    {
        $connect = mysqli_connect('localhost','root','','projektbaza');
        $nazwa='J.MICHAEL TR-200A';
        $sql=mysqli_query($connect,"SELECT Nazwa FROM koszyk WHERE nazwa = '$nazwa'");
        if(mysqli_num_rows($sql)!=0)
        {
            echo '<script>alert("Podany przedmiot juz istnieje")</script>';
        }
        else
        {
            $ask="INSERT INTO `koszyk` (`ID`,`Nazwa`,`Cena`,`Ilosc`,`Zdjecie`) VALUES (NULL, 'J.MICHAEL TR-200A',999.00,1,'trabka4.png')";
            $wynik=mysqli_query($connect,$ask);
            echo '<script>alert("Dodano do Koszyka")</script>';
        }
        mysqli_close($connect);
    }
    ?>
    <?php 
    if(array_key_exists('trabka3', $_POST)) {
        trabka3();
    }
    function trabka3()
    {
        $connect = mysqli_connect('localhost','root','','projektbaza');
        $nazwa='J. MICHAEL TR-500S';
        $sql=mysqli_query($connect,"SELECT Nazwa FROM koszyk WHERE nazwa = '$nazwa'");
        if(mysqli_num_rows($sql)!=0)
        {
            echo '<script>alert("Podany przedmiot juz istnieje")</script>';
        }
        else
        {
            $ask="INSERT INTO `koszyk` (`ID`,`Nazwa`,`Cena`,`Ilosc`,`Zdjecie`) VALUES (NULL, 'J. MICHAEL TR-500S',1799.00,1,'trabka3.png')";
            $wynik=mysqli_query($connect,$ask);
            echo '<script>alert("Dodano do Koszyka")</script>';
        }
        mysqli_close($connect);
    }
    ?>
    <?php
     if(array_key_exists('trabka2', $_POST)) {
        trabka2();
    }
    function trabka2()
    {
        $connect = mysqli_connect('localhost','root','','projektbaza');
        $nazwa='J. MICHAEL TR-300SA';
        $sql=mysqli_query($connect,"SELECT Nazwa FROM koszyk WHERE nazwa = '$nazwa'");
        if(mysqli_num_rows($sql)!=0)
        {
            echo '<script>alert("Podany przedmiot juz istnieje")</script>';
        }
        else
        {
            $ask="INSERT INTO `koszyk` (`ID`,`Nazwa`,`Cena`,`Ilosc`,`Zdjecie`) VALUES (NULL, 'J. MICHAEL TR-300SA',1199.00,1,'trabka2.png')";
            $wynik=mysqli_query($connect,$ask);
            echo '<script>alert("Dodano do Koszyka")</script>';
        }
        mysqli_close($connect);
    }
    ?>
    <?php
     if(array_key_exists('trabka1', $_POST)) {
        trabka1();
    }
    function trabka1()
    {
        $connect = mysqli_connect('localhost','root','','projektbaza');
        $nazwa='J.MICHAEL TR-380';
        $sql=mysqli_query($connect,"SELECT Nazwa FROM koszyk WHERE nazwa = '$nazwa'");
        if(mysqli_num_rows($sql)!=0)
        {
            echo '<script>alert("Podany przedmiot juz istnieje")</script>';
        }
        else
        {
            $ask="INSERT INTO `koszyk` (`ID`,`Nazwa`,`Cena`,`Ilosc`,`Zdjecie`) VALUES (NULL, 'J.MICHAEL TR-380',1299.00,1,'trabka1.png')";
            $wynik=mysqli_query($connect,$ask);
            echo '<script>alert("Dodano do Koszyka")</script>';
        }
        mysqli_close($connect);
    }
    ?>