<?php $partialDir = dirname(__FILE__) .'\_partial'; ?>
<?php $srcDir = dirname(__FILE__) .'\src'; ?>
<?php $configDir = dirname(__FILE__) .'\config'; ?>

<!doctype html>
<html lang="pl">

<?php require $partialDir."\head.php"; ?>
<body>

<header>
    <h1>Witaj użytkowniku na tej stronie dodasz nowe rachunki do bazy danych</h1>
    <?php require $partialDir."\menu.php"; ?>

</header>
<article>
    <div class=WordSection1>

        <h1><span class=SpellE>Aplikacja</span> <span class=SpellE>Twoje</span> <span
                class=SpellE>rachunki</span></h1>

        <h2><span lang=PL style='mso-ansi-language:PL'>Opis</span></h2>

        <p class=MsoNormal style='text-indent:36.0pt'><span lang=PL style='mso-ansi-language:
PL'><span style='mso-spacerun:yes'> </span>Aplikacja służy do przechowania
historii rachunków/wydatków z możliwością statystyk w</span></p>

        <p class=MsoNormal style='text-indent:36.0pt'><span lang=PL style='mso-ansi-language:
PL'>tym poszczególnych produktów na każdym rachunku.</span></p>

        <h2><span lang=PL style='mso-ansi-language:PL'>Story <span class=SpellE>telling</span>
Aplikacji</span></h2>

        <p class=MsoNormal><span lang=PL style='mso-ansi-language:PL'>Mieszkasz z
znajomym, któremu czasem ty coś kupić albo on tobie i często dzielicie rachunki
?</span></p>

        <p class=MsoNormal><span lang=PL style='mso-ansi-language:PL'><span
                    style='mso-spacerun:yes'> </span>czy może kupuje rzeczy do mieszkania?</span></p>

        <p class=MsoNormal><span lang=PL style='mso-ansi-language:PL'>Czy dzielisz
rachunki prąd gaz czynsz każdego miesiąca kwota jest inna, masz dosyć?</span></p>

        <p class=MsoNormal><span lang=PL style='mso-ansi-language:PL'>To idealna
aplikacja dla Ciebie wpisuje rachunki i produkty które były do podziału a
aplikacja od razu wyświetli ile ty jesteś winien lub i ile tobie jest winna
druga osoba.</span></p>

        <h2><span lang=PL style='mso-ansi-language:PL'>Zastosowanie:</span></h2>

        <p class=MsoListParagraphCxSpFirst style='text-indent:-18.0pt;mso-list:l1 level1 lfo2'><![if !supportLists]><span
                lang=PL style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;
mso-ansi-language:PL'><span style='mso-list:Ignore'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=PL style='mso-ansi-language:PL'>Historia
własnych rachunków i statystyki wydatków z po każdym miesiącu</span></p>

        <p class=MsoListParagraphCxSpLast style='text-indent:-18.0pt;mso-list:l1 level1 lfo2'><![if !supportLists]><span
                lang=PL style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;
mso-ansi-language:PL'><span style='mso-list:Ignore'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=PL style='mso-ansi-language:PL'>Historia
rachunków swoich i współlokatora oraz dział płatności.</span></p>

        <h2><span lang=PL style='mso-ansi-language:PL'>Założenia wstępne</span></h2>

        <p class=MsoListParagraphCxSpFirst style='text-indent:-18.0pt;mso-list:l0 level1 lfo1'><![if !supportLists]><span
                lang=PL style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;
mso-ansi-language:PL'><span style='mso-list:Ignore'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=PL style='mso-ansi-language:PL'>Funkcjonalności
</span></p>

        <p class=MsoListParagraphCxSpMiddle style='margin-left:72.0pt;mso-add-space:
auto;text-indent:-18.0pt;mso-list:l0 level2 lfo1'><![if !supportLists]><span
                lang=PL style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;
mso-ansi-language:PL'><span style='mso-list:Ignore'>a.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=PL style='mso-ansi-language:PL'>Prezentacja</span></p>

        <p class=MsoListParagraphCxSpMiddle style='margin-left:108.0pt;mso-add-space:
auto;text-indent:-108.0pt;mso-text-indent-alt:-9.0pt;mso-list:l0 level3 lfo1'><![if !supportLists]><span
                lang=PL style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;
mso-ansi-language:PL'><span style='mso-list:Ignore'><span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>i.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
                lang=PL style='mso-ansi-language:PL'>Przed zalogowaniem widnieje wersja demo
aplikacji, na której można przetestować czy aplikacja jest dla nas</span></p>

        <p class=MsoListParagraphCxSpMiddle style='margin-left:72.0pt;mso-add-space:
auto;text-indent:-18.0pt;mso-list:l0 level2 lfo1'><![if !supportLists]><span
                lang=PL style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;
mso-ansi-language:PL'><span style='mso-list:Ignore'>b.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=PL style='mso-ansi-language:PL'>bezpieczeństwo</span></p>

        <p class=MsoListParagraphCxSpMiddle style='margin-left:108.0pt;mso-add-space:
auto;text-indent:-108.0pt;mso-text-indent-alt:-9.0pt;mso-list:l0 level3 lfo1'><![if !supportLists]><span
                lang=PL style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;
mso-ansi-language:PL'><span style='mso-list:Ignore'><span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>i.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
                lang=PL style='mso-ansi-language:PL'>Logowanie</span></p>

        <p class=MsoListParagraphCxSpMiddle style='margin-left:72.0pt;mso-add-space:
auto;text-indent:-18.0pt;mso-list:l0 level2 lfo1'><![if !supportLists]><span
                lang=PL style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;
mso-ansi-language:PL'><span style='mso-list:Ignore'>c.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=PL style='mso-ansi-language:PL'>Przechowanie
danych</span></p>

        <p class=MsoListParagraphCxSpMiddle style='margin-left:108.0pt;mso-add-space:
auto;text-indent:-108.0pt;mso-text-indent-alt:-9.0pt;mso-list:l0 level3 lfo1'><![if !supportLists]><span
                lang=PL style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;
mso-ansi-language:PL'><span style='mso-list:Ignore'><span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>i.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
                lang=PL style='mso-ansi-language:PL'>Baza rachunków – wykorzystywana baza MySQL</span></p>

        <p class=MsoListParagraphCxSpMiddle style='margin-left:72.0pt;mso-add-space:
auto;text-indent:-18.0pt;mso-list:l0 level2 lfo1'><![if !supportLists]><span
                lang=PL style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;
mso-ansi-language:PL'><span style='mso-list:Ignore'>d.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=PL style='mso-ansi-language:PL'>Edycja</span></p>

        <p class=MsoListParagraphCxSpMiddle style='margin-left:108.0pt;mso-add-space:
auto;text-indent:-108.0pt;mso-text-indent-alt:-9.0pt;mso-list:l0 level3 lfo1'><![if !supportLists]><span
                lang=PL style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;
mso-ansi-language:PL'><span style='mso-list:Ignore'><span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>i.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
                lang=PL style='mso-ansi-language:PL'>Ogólnie CRUD rachunków</span></p>

        <p class=MsoListParagraphCxSpMiddle style='margin-left:108.0pt;mso-add-space:
auto;text-indent:-108.0pt;mso-text-indent-alt:-9.0pt;mso-list:l0 level3 lfo1'><![if !supportLists]><span
                lang=PL style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;
mso-ansi-language:PL'><span style='mso-list:Ignore'><span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>ii.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
                lang=PL style='mso-ansi-language:PL'>Edytowanie po pozycji rachunków</span></p>

        <p class=MsoListParagraphCxSpMiddle style='margin-left:72.0pt;mso-add-space:
auto;text-indent:-18.0pt;mso-list:l0 level2 lfo1'><![if !supportLists]><span
                lang=PL style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;
mso-ansi-language:PL'><span style='mso-list:Ignore'>e.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=PL style='mso-ansi-language:PL'>Przedstawienie</span></p>

        <p class=MsoListParagraphCxSpMiddle style='margin-left:108.0pt;mso-add-space:
auto;text-indent:-108.0pt;mso-text-indent-alt:-9.0pt;mso-list:l0 level3 lfo1'><![if !supportLists]><span
                lang=PL style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;
mso-ansi-language:PL'><span style='mso-list:Ignore'><span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>i.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
                lang=PL style='mso-ansi-language:PL'>Wypisywanie rachunków</span></p>

        <p class=MsoListParagraphCxSpLast style='margin-left:108.0pt;mso-add-space:
auto;text-indent:-108.0pt;mso-text-indent-alt:-9.0pt;mso-list:l0 level3 lfo1'><![if !supportLists]><span
                lang=PL style='mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;
mso-ansi-language:PL'><span style='mso-list:Ignore'><span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>ii.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
                lang=PL style='mso-ansi-language:PL'>Statystyka z rachunków w czasie przeszłym</span></p>

        <p class=MsoNormal><span lang=PL style='mso-ansi-language:PL'><o:p>&nbsp;</o:p></span></p>

    </div>


</article>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script><script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




</body>
</html>