<?php
        echo "<script>document.getElementById('wysylka').style.display = 'block'</script>";
        echo "<form method='POST'>";
        echo "<h2>Aby dokończyć zamówienia proszę podać dane do wysyłki</h2>";
        echo "<label>Imię</label><input type='test' name='imie'/>";
        echo "<label>Nazwisko</label><input type='text' name='nazwisko'/>";
        echo "<label>Adres:</label><input type='text' name='adres'/>";
        echo "<select name='swysylki'><option value='Paczkomat'>Paczkomat</option><option value='kurier'>Kurier</option></select>";
        echo "<input type='submit' value='Wyślij'></input>";
        if(isset($_POST['imie']) || isset($_POST['nazwisko']) || isset($_POST['adres']))
        {
        echo '<script>alert("Dziękujemy za zakupy w naszym sklepie!<br>Kupione produkty zostaną wysłane po wykonaniu płatności!")</script>';
        }
        ?>