<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styl4.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	<title>Sklep Grajmy Razem</title>
</head>
<body>
	<header>
		<div id="Rejestr">
            <?php
            session_start();
            if($_SESSION['ile']==NULL)
            {
            $_SESSION['ile']=0;
            $_SESSION['nick']='nic';
            echo "<a href='login.html'><ion-icon class='Rejestr' name='log-in-outline' size='large'></ion-icon></a>";
            echo "<a href='rejestracja.html'><ion-icon class='Rejestr' name='person-add-outline' size='large'></ion-icon></a>";
            }
            else
            {
            $czy=$_SESSION['ile'];
            $nic=$_SESSION['nick'];
            if($czy==1)
            {
                echo '<a href="logout.php"><ion-icon class="Rejestr" name="log-out-outline" size="large"></ion-icon></a>';
                if($_SESSION['nick']=="mateusz" || $_SESSION['nick']=="daniel")
                {
                    echo '<a href="pytaniaklient.php"><ion-chip class="chip"><ion-icon id="icon" name="people-outline"></ion-icon><ion-label id="lable">'.$nic.'</ion-label><ion-icon name="close"></ion-icon></ion-chip></a>';
                }
                else
                {
                echo '<ion-chip class="chip"><ion-icon id="icon" name="people-outline"></ion-icon><ion-label id="lable">'.$nic.'</ion-label><ion-icon name="close"></ion-icon></ion-chip>';
            }
        }
            else
            if($czy==0)
            {               
                echo "<button class='Rejestr'><a href='login.html'>Login</a></button>";
                echo "<button class='Rejestr'><a href='rejestracja.html'>Register</a></button>";
            }
        }
        
            ?>
            <ion-icon class="koszykbtn" name="cart-outline" size="large" onclick="location.href='koszyk.php'"></ion-icon>
        <h2>Sklep Grajmy Razem</h2>
	</header>
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
		<ul id="aktualnosci">
            <li id="1"><a href="javascript:tresc1()">Gitara klasyczna czy gitara akustyczna?</a></li>
            <li id="2"><a href="javascript:tresc2()">Jak nastroić ukulele?</a></li>
            <li id="3"><a href="javascript:tresc3()">Czyszczenie sprzętu</a></li>
            <li id="4"><a href="javascript:tresc4()">Jaka perkusja na początek? część 1</a></li>
            <li id="5"><a href="javascript:tresc5()">Jaka perkusja na początek? część 2</a></li>
        </ul>
        <div id="zdjencie">
        <div class="mySlides fade">
  <img src="img/sklep1.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="img/sklep2.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="img/sklep3.jpg" style="width:100%">
</div>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
        </div>
        
<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000);
}
</script>
        <div id="tresc_akt">
        <h2>Gitara klasyczna czy gitara akustyczna?</h2>
        Jaką gitarę wybrać na początek? Gitara klasyczna, akustyczna czy elektryczna? Jakie są różnice między tymi gitarami? <br>
        Jak dobrać gitarę do swoich potrzeb? W treści porównujemy dwa modele:
<ul>
<li>gitara klasyczna Vibe VC139C,</li>
<li>gitara akustyczna Vibe VA741C.</li>
</ul>
<h2>Twardość strun</h2>
Zacznijmy od porównania twardości strun. Gitary klasyczne mają miękkie, nylonowe struny. <br>
Z kolei gitary akustyczne mają twardsze, metalowe struny. <br>
Warto zaznaczyć tutaj, że w przypadku tak twardych strun osoby początkujące mogą odczuwać po ćwiczeniach lekki ból palców.<br>
<h2>Brzmienie gitary</h2>
Jakie są różnice w brzmieniu w gitarze akustycznej i gitarze klasycznej? Gitary klasyczne słyną z „cieplejszego”, bardziej stłumionego dźwięku. <br>
Akustyczna gitara ma bardziej donośne, mocniejsze i głębsze brzmienie.<br>
<h2>Pudło rezonansowe</h2>
Kolejnym elementem, jaki należy wziąć pod uwagę przy wyborze gitary są pudła rezonansowe. <br>
Klasyczne gitary mają większe „wcięcie”, z kolei wcięcie w gitarach akustycznych jest zdecydowanie mniejsze. <br>
Dzięki temu pudła te są głośniejsze, a dźwięk bardziej donośny.<br>
<h2>Grubość gryfu</h2>
Gitary klasyczne mają często szerszy gryf przy siodełku. <br>
Dzięki temu mamy mnóstwo miejsca na naukę odpowiedniego układania palców, a to szczególnie ważne dla początkujących. <br>
Gitara akustyczna ma zwykle mniej szeroki gryf. Jakie zalety ma takie rozwiązanie? <br>
Kiedy ręka przyzwyczai się do poruszania się po gryfie, palce układają się bliżej siebie i gra może okazać się zdecydowanie bardziej wygodna.
        </div>
        <ion-icon id="strzalka1" name="chevron-back-outline" size="large" onclick="backopinia()"></ion-icon>
        <div id="opinie">
            <h2>Opinie</h2>
            <div id="opinie_tresc">
                <b>uzytkownik: <i>Tomasz</i></b>
                <hr></hr>
                Serdecznie polecam sklep, podejście do klienta profesjonalne i cierpliwe. Naprawdę jestem zadowolony z obsługi i zakupu.  Szczerze polecam.
            </div>     
        </div>
        <ion-icon id="strzalka2" name="chevron-forward-outline" size="large" onclick="nextopinia()"></ion-icon>
	</main>
	<footer>
		Strona stworzona przez Mateusza Wyrzykowskiego i Daniela Augsburga
	</footer>
</body>
</html>
<script>
var op=1;

    function backopinia()
    {
        if(op==1)
            {
                document.getElementById("opinie_tresc").innerHTML="<b>użytkownik: <i>Maciej</i></b><br><hr></hr>Kupiłem tutaj już kilka produktów i jestem bardzo zadowolony zwłaszcza z zakupu słuchawek sprzedawca który mnie obsługiwał był pomocny";
                op=7;
            }
            if(op==2)
            {
                document.getElementById("opinie_tresc").innerHTML="<b>użytkownik: <i>Tomasz</i></b><br><hr></hr>Serdecznie polecam sklep, podejście do klienta profesjonalne i cierpliwe. Naprawdę jestem zadowolony z obsługi i zakupu.  Szczerze polecam.";
            }
            if(op==3)
            {
                document.getElementById("opinie_tresc").innerHTML="<b>użytkownik: <i>Remigiusz</i></b><br><hr></hr>Serdecznie dziękuję za zwlekanie z zamówieniem przez ponad 3 tygodnie. Oszukiwanie na temat terminu wysyłki produktu to najwyraźniej dla tego sklepu już klasyk. Chciałbym nadmienić, że na koniec okazało się, iż produkt, który został przeze mnie zakupiony i ponoć wysłany nie znajduje się w magazynach. Pozdrawiam.";
            }
            if(op==4)
            {
                document.getElementById("opinie_tresc").innerHTML="<b>użytkownik: <i>Karolina</i></b><br><hr></hr>Szczerze polecam! Profesjonalizm, fachowa i miła obsługa. 5+";
            }
            if(op==5)
            {
                document.getElementById("opinie_tresc").innerHTML="<b>użytkownik: <i>Piotr</i></b><br><hr></hr>Bardzo fajne miejsce gdzie ceny są konkurencyjne a sprzedający profesjonalnie doradzi i odpowie na każde pytanie nawet w przypadku taki go męczy bóły jak ja, który zanim wyda choćby złotówkę najpierw musi zadać 20 pytań. Jestem bardzo zadowolony z wizyty w tym miejscu i jak najbardziej polecam szczególnie jeśli ktoś jest laikiem i dopiero zaczyna swoją przygodę z produkcja muzyczną. Pozdrawiam";
            }
            if(op==6)
            {
                document.getElementById("opinie_tresc").innerHTML="<b>użytkownik: <i>Agata</i></b><br><hr></hr>Bardzo miły sprzedawca. Zna się dobrze na każdym sprzęcie, a przedewszystkim daje szczere opinie na temat sprzętu. Pomoże każdemu początkującemu jak i profesjonaliście";
            }
            op--;
    }
    function nextopinia()
    {
            if(op==1)
            {
                document.getElementById("opinie_tresc").innerHTML="<b>użytkownik: <i>Tomasz</i></b><br><hr></hr>Serdecznie polecam sklep, podejście do klienta profesjonalne i cierpliwe. Naprawdę jestem zadowolony z obsługi i zakupu.  Szczerze polecam.";
            }
            if(op==2)
            {
                document.getElementById("opinie_tresc").innerHTML="<b>użytkownik: <i>Remigiusz</i></b><br><hr></hr>Serdecznie dziękuję za zwlekanie z zamówieniem przez ponad 3 tygodnie. Oszukiwanie na temat terminu wysyłki produktu to najwyraźniej dla tego sklepu już klasyk. Chciałbym nadmienić, że na koniec okazało się, iż produkt, który został przeze mnie zakupiony i ponoć wysłany nie znajduje się w magazynach. Pozdrawiam.";
            }
            if(op==3)
            {
                document.getElementById("opinie_tresc").innerHTML="<b>użytkownik: <i>Karolina</i></b><br><hr></hr>Szczerze polecam! Profesjonalizm, fachowa i miła obsługa. 5+";
            }
            if(op==4)
            {
                document.getElementById("opinie_tresc").innerHTML="<b>użytkownik: <i>Piotr</i></b><br><hr></hr>Bardzo fajne miejsce gdzie ceny są konkurencyjne a sprzedający profesjonalnie doradzi i odpowie na każde pytanie nawet w przypadku taki go męczy bóły jak ja, który zanim wyda choćby złotówkę najpierw musi zadać 20 pytań. Jestem bardzo zadowolony z wizyty w tym miejscu i jak najbardziej polecam szczególnie jeśli ktoś jest laikiem i dopiero zaczyna swoją przygodę z produkcja muzyczną. Pozdrawiam";
            }
            if(op==5)
            {
                document.getElementById("opinie_tresc").innerHTML="<b>użytkownik: <i>Agata</i></b><br><hr></hr>Bardzo miły sprzedawca. Zna się dobrze na każdym sprzęcie, a przedewszystkim daje szczere opinie na temat sprzętu. Pomoże każdemu początkującemu jak i profesjonaliście";
            }
            if(op==6)
            {
                op=0;
                document.getElementById("opinie_tresc").innerHTML="<b>użytkownik: <i>Maciej</i></b><br><hr></hr>Kupiłem tutaj już kilka produktów i jestem bardzo zadowolony zwłaszcza z zakupu słuchawek sprzedawca który mnie obsługiwał był pomocny";
            }
            op++;
        }
    function tresc1()
    {
        document.getElementById("tresc_akt").innerHTML="<h2>Gitara klasyczna czy gitara akustyczna?</h2>"+
        "Jaką gitarę wybrać na początek? Gitara klasyczna, akustyczna czy elektryczna? Jakie są różnice między tymi gitarami? <br>"+ 
        "Jak dobrać gitarę do swoich potrzeb? W treści porównujemy dwa modele:"+
        "<ul>"+
        "<li>gitara klasyczna Vibe VC139C,</li>"+
        "<li>gitara akustyczna Vibe VA741C.</li>"+
        "</ul>"+
        "<h2>Twardość strun</h2>"+
        "Zacznijmy od porównania twardości strun. Gitary klasyczne mają miękkie, nylonowe struny. <br>"+
        "Z kolei gitary akustyczne mają twardsze, metalowe struny. <br>"+ 
        "Warto zaznaczyć tutaj, że w przypadku tak twardych strun osoby początkujące mogą odczuwać po ćwiczeniach lekki ból palców.<br>"+
        "<h2>Brzmienie gitary</h2>"+
        "Jakie są różnice w brzmieniu w gitarze akustycznej i gitarze klasycznej? Gitary klasyczne słyną z „cieplejszego”, bardziej stłumionego dźwięku. <br>"+
        "Akustyczna gitara ma bardziej donośne, mocniejsze i głębsze brzmienie.<br>"+
        "<h2>Pudło rezonansowe</h2>"+
        "Kolejnym elementem, jaki należy wziąć pod uwagę przy wyborze gitary są pudła rezonansowe. <br>"+
        "Klasyczne gitary mają większe „wcięcie”, z kolei wcięcie w gitarach akustycznych jest zdecydowanie mniejsze. <br>"+
        "Dzięki temu pudła te są głośniejsze, a dźwięk bardziej donośny.<br>"+
        "<h2>Grubość gryfu</h2>"+
        "Gitary klasyczne mają często szerszy gryf przy siodełku. <br>"+
        "Dzięki temu mamy mnóstwo miejsca na naukę odpowiedniego układania palców, a to szczególnie ważne dla początkujących. <br>"+
        "Gitara akustyczna ma zwykle mniej szeroki gryf. Jakie zalety ma takie rozwiązanie? <br>"+
        "Kiedy ręka przyzwyczai się do poruszania się po gryfie, palce układają się bliżej siebie i gra może okazać się zdecydowanie bardziej wygodna.";
    }
    function tresc2()
    {
        document.getElementById("tresc_akt").innerHTML="<h2>Tuner do ukulele</h2>"+
        "Jak w łatwy sposób nastroić ukulele? Do strojenia ukulele wykorzystaj takie akcesoria do ukulele jak tuner do ukulele."+
        "Tuner to tani (kilkanaście złotych) sprzęt, który pozwala szybko nastroić instrument. I to nie tylko ukulele, ale też gitarę, gitarę basową albo skrzypce. "+
        "Tuner do ukulele ma kilka możliwości strojenia. Jedna z nich to możliwość strojenia chromatycznego."+
        "Struny po nastrojeniu potrzebują czasu, żeby dobrze się naciągnąć. Łatwo będzie zauważyć, że po kilku dniach będą układać się już dobrze, a instrument będzie dobrze stroił. "+
        "Sam proces strojenia instrumentu nie jest trudny."+
        "<h2>Jak nastroić ukulele, które jest całkowicie rozstrojone?</h2>"+
        "Do nastrojenia całkowicie rozstrojonego ukulele potrzebna będzie korbka, którą można szybko i prosto puszczać i naciągać struny." +
        "Kiedy naciągamy struny, struna musi być lekko naciągnięta. Warto użyć wtedy korbki, która błyskawicznie nawinie struny na kołeczek. "+
        "Do strojenia można wykorzystać też kamerton, który wydaje dźwięk A o częstotliwości 440 Hz. To jednak starsze sposoby strojenia ukulele. "+
        "Dziś mamy do dyspozycji elektroniczne stroiki do ukulele przypinane na klips do główki instrumentu. Jak stroić ukulele z pomocą stroika?"+
        "<h2>Strojenie ukulele KROK PO KROKU</h2>"+
        "Strojenie instrumentu z elektronicznym stroikiem jest w gruncie rzeczy dziecinnie proste. Ukulele nastroimy w typowej tonacji C. "+
        "Struny stroimy od najniższej A, dalej E, trzecia C, czwarta G.  Nasz stroik jest ustawiony na strojenie chromatyczne. "+
        "Oznacza to, że dźwięk po dźwięku będzie pokazywał kolejne etapy strojenia."+
        "Jak sprawdzić, czy ukulele jest dobrze nastrojone? Porównujemy dźwięk z pierwszej struny A z dźwiękiem struny E naciśniętą na piątym progu. "+
        "Dalej: druga struna E – piąty próg. Trzecia struna C – czwarty próg. Strunę G sprawdzamy w stosunku do struny C. "+
        "Kiedy na stroiku zapali się zielone światło, struna jest właściwie nastrojona. Zmniejszamy i zwiększamy naprężenie struny na tej samej zasadzie aż dotrzemy do dźwięku wzorcowego. I gotowe.";
    }
    function tresc3()
    {
        document.getElementById("tresc_akt").innerHTML="<h2>Jak wyczyścić ruchomą głowicę?</h2>"+
        "Przed rozpoczęciem czyszczenia zawsze odłączaj urządzenie od źródła prądu. Użycie przełącznika zasilania nie będzie wystarczające do bezpiecznego czyszczenia sprzętu. Koniecznie wypnij przewód z gniazda zasilania głowicy ruchomej. Napięcie czasem gromadzi się w różnych podzespołach w środku obudowy. Zalegający kurz może też czasami zbierać wilgoć z powietrza, a w ten sposób przewodzić prąd i przyczyniać się do zwarcia. To szczególnie istotne w przypadku urządzeń wytwarzających dym – wytwornice dymu lub olejowe fazery. Nie należy ustawiać sprzętu bezpośrednio obok strumienia generowanego przez sprzęt. Podobnie działa to w przypadku wyrzutni konfetti. Wentylatory urządzenia mogą przepuścić fragmenty konfetti, co po pewnym czasie może doprowadzić do zwarcia elektroniki i niszczenia sprzętu."+
        "<h3>Czym wyczyścić wytwornicę dymu?</h3>"+
        "Czy aby uporać się z zanieczyszczeniami, trzeba kupić specjalne płyny czyszczące albo drogi, specjalistyczny preparat? Do czyszczenia wytwornicy dymu czy innego urządzenia można wykorzystać zwykłe sprężone powietrze w kompresorze lub w sprayu. Kurz gromadzi się najszybciej w okolicy wentylatorów i radiatorów, dlatego sprężone powietrze należy skierować na kratkę wentylatorową. Większość zanieczyszczeń wydostanie się na zewnątrz wraz z ruchem powietrza. Warto poświęcić na ten zabieg trochę czasu. Lepiej wykonywać go regularnie, aby dokładnie usunąć nadmiar kurzu i zapewnić sobie dłuższą żywotność sprzętu bez awarii i konieczności naprawy."+
        "<h2>Czyszczenie optyki</h2>"+
        "W przypadku optyki głównym winowajcą zabrudzenia i niszczenia sprzętu są również drobinki kurzu. Z pozoru niegroźny kurz może sprawić, że oświetlenie traci na jasności. Ten element możesz samodzielnie wyczyścić bez obaw o utratę gwarancji od producenta. Tutaj ponownie sprawdzi się sprężone powietrze. Nie używaj wilgotnej szmatki (wilgotna szmatka, nasączona na przykład szybkoschnącym alkoholem, może być wykorzystana jedynie w wypadku szkła zewnętrznego, na którym jest kurz czy tłuste plamy), wacików ani patyczków do uszu. Zaschnięty osad możesz usunąć pędzelkiem ze sztywnym włosiem lub pęsetą. Pędzel wykorzystaj do pozbycia się najbardziej zewnętrznej warstwy brudu, a następnie wykorzystaj do czyszczenia sprężone powietrze."+
        "Regularna konserwacja sprzętu (czy to oświetlenie, wytwornice efektów, zestawy głośnikowe i sprzęt audio, czy wzmacniacze i przedwzmacniacze) przedłużą jego żywotność. Jeżeli Twoje urządzenia są mocno zabrudzone, a Ty nie chcesz podejmować się samodzielnego czyszczenia, skorzystaj z naszego serwisu gwarancyjnego. Nasi eksperci profesjonalnie zajmą się czyszczeniem sprzętu oświetleniowego i urządzeń estradowych. Oferujemy przeglądy polegające na dokładnym czyszczeniu i sprawdzeniu stanu technicznego sprzętu. ";
    }
    function tresc4()
    {
        document.getElementById("tresc_akt").innerHTML="<h2>Perkusja dla dzieci w wieku 3-6 lat.</h2>"+
        "Dla dzieci w tym wieku należy tak dobrać zestaw perkusyjny, aby młody adept mógł wygodnie sięgnąć do wszystkich jego elementów. Perkusja powinna być możliwie jak najmniejsza i niezbyt rozbudowana. W tym wieku najodpowiedniejszy będzie zestaw z małym, 16” bębnem basowym. Taki rozmiar bębna centralnego, daje możliwość niskiego ustawienia tom tomów, które z reguły są montowane na bębnie basowym. Małe rozmiary poszczególnych elementów perkusji pozwolą też ustawić wszystko blisko siebie. Ułatwi to grę najmłodszym, których zasięg nóg i rąk jest jeszcze nieduży."+
        "Do wyboru mamy „gotowe zestawy perkusyjne” zawierające wszystko czego trzeba by zacząć naukę, takie jak Pearl Roadshow Junior, lub zestawy typu „shell set” - czyli najczęściej same bębny bez statywów, talerzy i stołka. Zaletą „gotowych zestawów perkusyjnych” jest to, że w relatywnie niskiej cenie otrzymujemy kompletną perkusję, bez potrzeby dokupowania czegokolwiek, a zaraz po rozstawieniu kompletu młody perkusista może zacząć grę. W takim zestawie znajdują się bębny, talerze, niezbędne statywy oraz stołek."+
        "<h2>Małe „shell sety” są droższe, ale…</h2>"+
        "Po pierwsze sam instrument jest zwykle dużo lepszej jakości jeśli chodzi o brzmienie i wykonanie, a wymienione modele takie jak BreakBeats czy Midtown to nie tylko perkusje dla dzieci, ale przede wszystkim mobilne, klubowe sety dla dorosłych muzyków. Tak więc instrument może zostać z nami na dłużej i tak naprawdę nigdy z niego nie wyrośniemy. Po drugie możemy dobrać talerze i statywy takie jak chcemy, a nie te które proponuje nam producent w zestawie. Te z reguły są jakości „zabawkowej” i warto je w przyszłości wymienić jeśli wybierzemy gotowy zestaw perkusyjny dla najmłodszych. W przypadku shell setów należy pamiętać, o tym że do zestawu musimy jeszcze dokupić stołek, hardware (statywy + stopa) oraz przynajmniej dwuelementowy zestaw talerzy."+
        "Wszystkie wymienione powyżej zestawy zostały wykonane z topoli. To niedrogi materiał o przyzwoitych walorach dźwiękowych i stosunkowo ciepłym brzmieniu, a także niskiej wadze."+
        "Bardzo ważne w tym przedziale wiekowym jest dobranie odpowiedniego stołka dla małych dzieci. Większość oferowanych obecnie stołków jest przystosowana dla osób dorosłych, a te będą zbyt wysokie dla maluchów by sięgały do pedałów bębna basowego i hi-hatu. Stołki dołączane do zestawów dla dzieci są niższe, a ich minimalna wysokość wynosi zwykle mniej niż 40 cm. Najniższym obecnie stołkiem jest ten dołączany do zestawu Pearl Roadshow Junior i można go ustawić na wysokość 33 cm, a po usunięciu śruby blokującej ustawienie wysokości stołek będzie mierzył 30 cm.";
    }
    function tresc5()
    {
        document.getElementById("tresc_akt").innerHTML="<h2>Starsze dzieci w wieku 7-12 lat.</h2>"+
        "Dzieci w tym wieku, w zależności od wzrostu, mogą spokojnie zasiąść za zestawem z bębnem basowym 18” lub nawet 20”. W tym wieku oczekiwania co do jakości dźwięku rosną, a większy bęben basowy oferuje lepsze doznania dźwiękowe ponieważ „produkuje” więcej dołu. Typowa konfiguracja bębnów w tym przedziale to tomy 10” i 12”, floor tom 14”, bęben basowy 18” lub 20” + werbel. W tym przedziale mamy także do wyboru zestawy gotowe jak i shell sety. Te najtańsze jak Mapex Tornado czy Pearl Roadshow to kompletne perkusje wyposażone w hardware, a także talerze, które de facto są najsłabszym elementem. O ile wystarczą one na samym początku do zapoznania się z instrumentem, tak po jakimś czasie należy pomyśleć o wymianie ich na talerze lepszej klasy."+
        "Jeśli nasz budżet pozwala na zakup trochę droższego zestawu warto pomyśleć o takim, w którym nie będzie potrzeby wymiany talerzy w krótkiej perspektywie. Jednym z najbardziej popularnych zestawów tego typu jest model znanego japońskiego producenta Tama Rhythm Mate. Solidny zestaw na początek oferuje nam dobre brzmienie zarówno samych bębnów jak i talerzy firmy Meinl oraz  dobrze wykonany i trwały osprzęt. Zestaw zawiera także podstawowy stołek Tamy (o minimalnej wysokości 38 cm), który spokojnie utrzyma dzieci w tym wieku. Samo wykonanie Rhythm Mate’a też nie budzi wątpliwości i jest na bardzo dobrym poziomie jak na Tamę przystało."+
        "<h2>Młodzież i dorośli.</h2>"+
        "Młodzież i dorośli mogą spróbować swoich sił na pełnowymiarowym zestawie z bębnem basowym 22”, w tzw. konfiguracji „Rock” lub 20” w konfiguracji „Fusion”. Te dwie konfiguracje zwykle różnią się rozmiarem centrali oraz floor toma (Fusion to FT 14”), natomiast tomy 10”,  12” oraz werbel są takie same w obu zestawach. Oba zestawy mają swoje zalety. Jeśli jesteśmy fanami mocniejszego grania to zdecydowanie konfiguracja Rock zapewni nam więcej dołu i energii z bębna basowego i floor toma. Większe rozmiary dostarczają więcej tak zwanego „kopniaka”, co w głośnym graniu będzie zaletą. Konfiguracja Fusion lepiej sprawdzi się w lżejszym graniu, a poza tym zajmie mniej miejsca co w przypadku małych sal ćwiczeniowych będzie istotne. Ze względu na swoje rozmiary, Fusion lepiej zabrzmi w wysokim jazzowym stroju, a w stylistyce pop zapewni ładne, harmonijne współbrzmienie tomów i 14 calowego floor toma."
    }
</script>