<?php
            $connect=mysqli_connect('localhost','root','','projektbaza');
            $sql=mysqli_query($connect,"SELECT ID, Nazwa FROM koszyk");
            while($wiersz=mysqli_fetch_assoc($sql))
            {
                $nazwa=$wiersz["Nazwa"];
                $id=$wiersz["ID"];
                $zapytanie="DELETE FROM koszyk WHERE ID='$id'";
                if (mysqli_query($connect, $zapytanie)) 
                {
                    header("Refresh: 0.1; url=koszyk.php");
                }
            }
            mysqli_close($connect);
        ?>