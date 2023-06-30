<?php
    $imie=$_POST['im'];
    $email=$_POST['em'];
    $text=$_POST['txtarea'];
    $connect=mysqli_connect('localhost','root','','projektbaza');
    $sql="INSERT INTO `kontakt` (`ID`, `Imie`, `email`,`tresc`) VALUES (NULL, '$imie', '$email', '$text')";
    if (isset($imie) || isset($email) || isset($text))
    {
        header("Refresh: 0.5; url=kontakt.html", TRUE, 301); 
        mysqli_query($connect, $sql);
        echo '<script>alert("Wysłano Zapytanie!")</script>';
        exit();
    }
    else{
        header("Refresh: 0.5; url=kontakt.html", TRUE, 301); 
        echo '<script>alert("Wpisz poprawnie dane")</script>';
        exit();
    }
    mysqli_close($connect);
?>