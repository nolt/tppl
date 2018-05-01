<?php
/**
 * @package TinyPortal
 * @version 1.1
 * @author IchBin - http://www.tinyportal.net
 * @founder Bloc
 * @license MPL 2.0
 *
 * The contents of this file are subject to the Mozilla Public License Version 2.0
 * (the "License"); you may not use this package except in compliance with
 * the License. You may obtain a copy of the License at
 * http://www.mozilla.org/MPL/
 *
 * Copyright (C) 2015 - The TinyPortal Team
 *
 */

//  SVN Rev67
global $scripturl;

$txt['tp-authorID'] = 'Autor';
$txt['tp-created'] = 'Stworzony';
$txt['tp-dladmin'] = 'Administracja';
$txt['tp-dldownloads'] = 'Download';
$txt['tp-dlexterror'] = 'Obecnie możesz wysłać tylko pliki z takim rozszerzeniem';
$txt['tp-dlexterror2'] = 'Twój plik to';
$txt['tp-dlftp'] = 'FTP';
$txt['tp-dlheader1'] = 'Download';
$txt['tp-dlheader2'] = 'Możesz tutaj tworzyć kategorie, edytować je wg. zezwoleń oraz dawać do nich pliki. Znajduje się tutaj obraz FTP gdzie możesz przypisać nie wysłane pliki do kategorii. Pliki które wymagają zatwierdzenia znajdują się również tutaj, możesz je tutaj zatwierdzić lub odrzucić(skasować).';
$txt['tp-dlheader3'] = 'Zarządzanie kategoriami oraz zawartością modułu Menedżer plików';
$txt['tp-dlmaxerror'] = 'Maksymalny rozmiar wysyłanego pliku to';
$txt['tp-dlmaxerror2'] = 'Rozmiar twojego pliku to';
$txt['tp-dlsubmissions'] = 'potwierdzenia';
$txt['tp-dltabs1'] = 'Opcje';
$txt['tp-dltabs2'] = 'Dodaj kategorię';
$txt['tp-dltabs3'] = 'Prześlij';
$txt['tp-dltabs4'] = 'Admin';
$txt['tp-dluploadfailure']='Wysyłanie nie zakończone. Powodem może być zbyt długie wysyłanie lub wielkość pliku jaka może być przesłana na serwer.<br /><br />Skonsultuj się z Administratorem swojego serwera w celu otrzymania więcej informacji. ';
$txt['tp-dluploadnotallowed'] = 'Przepraszamy, wysyłanie plików jest aktualnie zabronione.';
$txt['tp-downloads'] = 'Download';
$txt['tp-id'] = 'ID';
$txt['tp-last_access'] = 'Ostatnio pobrany';
$txt['tp-mainpage'] = 'Główna';
$txt['tp-name']='Nazwa:';
$txt['tp-needtoregister'] = 'Musisz być zalogowanym aby wejść do tej sekcji.';
$txt['tp-notallowed'] = 'Brak dostępu do tej sekcji.';
$txt['tp-notfound'] = 'Nie znaleziono przedmiotu/sekcji.';
$txt['tp-sortby'] = 'Sortowanie wg.';
$txt['tp-useredit'] = 'Edytuj plik';

// TPdlmanager template
//  SVN Rev67
$txt['tp-adminonly'] = 'Brak dostępu.';
$txt['tp-dlhaverated'] = 'Oceniałeś już ten plik.';
$txt['tp-dlmakeitem2'] = 'Przypisany plik do:';
$txt['tp-dlnotapprovedyet'] = 'Plik jeszcze nie zatwierdzony.';
$txt['tp-dlnoupload'] = 'Nic nie wysyłaj, utwórz tylko pusty plik.';
$txt['tp-dlstatscats'] = 'największe kategorie';
$txt['tp-dlstatsdls'] = 'najczęściej pobierane pliki';
$txt['tp-dlstatssize'] = 'największy rozmiar pliku';
$txt['tp-dlstatsviews'] = 'najwięcej wyświetlane pliki';
$txt['tp-dlupload'] = 'Prześlij';
$txt['tp-dluploadattach'] = 'Załączyć do obecnego pliku?';
$txt['tp-dluploadfile'] = 'Plik do wysłania:';
$txt['tp-dluploadpic'] = 'dodatkowy obrazek:';
$txt['tp-dluploadtext'] = 'Opis (wolno używać HTML)';
$txt['tp-downloadsection'] = 'Sekcja Download';
$txt['tp-downloadsection2'] = 'Repozytorium plików';
$txt['tp-itemdownloads'] = 'Download';
$txt['tp-itemlastdownload'] = ' Ostatnio pobrany';
$txt['tp-maxuploadsize'] = 'Maksymalny rozmiar pliku do wysłania';
$txt['tp-ratedownload'] = 'Oceń plik';
$txt['tp-recentuploads'] = 'Nowe pliki:';
$txt['tp-recentuploads2'] = 'Ostatnio dodany plik:';
$txt['tp-search'] = 'Szukaj';
$txt['tp-stats'] = 'Statystyki';
$txt['tp-warnsubmission'] = ' Wszystkie pliki wymagają zatwierdzenia przez Administratora.';
$txt['tp-searcharea-descr'] = 'Not Defined Yet 2';
$txt['tp-searcharea-name'] = 'Przeszukaj tytuły';
$txt['tp-dosubmit'] = 'Zapisz';
$txt['tp-dlvisualoptions'] = 'Opcje wizualne:';
$txt['tp-dlsearch'] = 'Szukaj w Downloads';
$txt['tp-dlsearchresults'] = 'Wynik wyszukiwania działu Download';

// TPdlmanagerAdmin template
//  SVN Rev67
$txt['tp-adminftp_newfiles'] = 'Pliki dodane pomyślnie. Sprawdź kategorię do której zostały dodane.';
$txt['tp-approveno'] = 'Nie, ale zezwolenie na wysyłanie będzie także wymagane';
$txt['tp-approveyes'] = 'Tak, prócz grupy użytkowników która może zarządzać plikami (dział download).';
$txt['tp-assigncatparent'] = 'Kategoria źródłowa/kategoria główna:';
$txt['tp-assignftp'] = 'Używając różnych kategorii do każdego z plików, możesz przypisać pliki indywidualnie. Jeśli wysyłasz kilka plików, możesz przypisać je do jednej kategorii za jednym kliknięciem.
Jeśli napiszesz coś w polu_nowej_kategorii, zostanie używa owa opcaja. Opcja tworzy także specjalny katalog dla tych plików.';
$txt['tp-centerbar'] = 'Pokaż panel górny';
$txt['tp-chooseicon'] = '- wybierz ikonę -';
$txt['tp-confirm'] = 'Czy jesteś pewien?';
$txt['tp-confirmdelete'] = 'Jesteś pewien że chcesz skasować?';
$txt['tp-dlaccess'] = 'Dozwolone grupy użytkowników';
$txt['tp-dlallowedsize'] = 'Maksymalny rozmiar pliku do wysłania';
$txt['tp-dlallowedtypes'] = 'Dozwolone rozszerzenia plików';
$txt['tp-dlapprove'] = 'Zatwierdzić?';
$txt['tp-dlattachloose'] = 'Odłączyć plik?';
$txt['tp-dldelete'] = 'Skasować?';
$txt['tp-dledit'] = 'Edytuj/Skasuj';
$txt['tp-dlfile'] = 'Nazwa pliku / Autor';
$txt['tp-dlfilename']='Nazwa pliku:';
$txt['tp-dlfiles'] = 'pliki';
$txt['tp-dlfilesize'] = 'Rozmiar pliku';
$txt['tp-dlicon'] = 'Ikona';
$txt['tp-dlmakeitem'] = 'Przypisz to';
$txt['tp-dlmorefiles'] = 'Pobierz dodatkowe pliki:';
$txt['tp-dlmorefiles2'] = 'Załącz do innego pliku:';
$txt['tp-dlmustapprove'] = 'Wszystkie pliki wysłane muszą być zatwierdzone? ';
$txt['tp-dlname'] = 'Nazwa';
$txt['tp-dlparent'] = 'Kategoria źródłowa';
$txt['tp-dlshowlatest'] = 'Wyświetl "najnowsze pliki" na stronie głównej Menedżera Plików:';
$txt['tp-dlsubmitted'] = 'Zatwierdź';
$txt['tp-dluploadcategory'] = 'Kategoria:';
$txt['tp-dluploadicon'] = 'Ikona:';
$txt['tp-dluploadtitle'] = 'Tytuł: ';
$txt['tp-dluseformat'] = 'Pokaż rozmiar pliku w formacie:';
$txt['tp-dlviews'] = 'Wyświetleń/Pobrań';
$txt['tp-download'] = 'Pobierz';
$txt['tp-ftpstrays'] = 'Pliki te nie są przypisane w tabeli dl_manager:';
$txt['tp-leftbar'] = 'Pokaż lewy panel';
$txt['tp-newcatassign'] = 'Nowa kategoria:';
$txt['tp-nocategory'] = '- brak kategorii -';
$txt['tp-noneicon'] = 'Brak ikony';
$txt['tp-onlyftpstrays'] = 'Pokazuje tylko pliki niemające wpisu w dl_manager:';
$txt['tp-rightbar'] = 'Pokaż prawy panel';
$txt['tp-sayno'] = 'Nie';
$txt['tp-uploadnewfileexisting'] = 'Prześlij nowy plik <br /><span class="smalltext"> (obecny zostanie zastąpiony!)</span>';
$txt['tp-uploadnewpic'] = 'Prześlij nowy obrazek<br /><span class="smalltext">(obecny zostanie zastąpiony!)</span>';
$txt['tp-uploadnewpicexisting']='Obecny zrzut ekranu/obrazek';
$txt['tp-shortname'] = 'Tytuł zapytania:';

$txt['tp-topbar'] = 'Pokaż górny panel';
$txt['tp-bottombar'] = 'Pokaż dolny panel';
$txt['tp-lowerbar'] = 'Pokaż niższy panel';
$txt['tp-showtop'] = 'Pokaż nagłówek';
$txt['tp-categories'] = 'Kategorie';

$txt['tp-dlcreatetopic'] = 'Stworzyć nowy wątek?';
$txt['tp-dlcreatetopic_sticky'] = 'Ustawić jako przyklejony?';
$txt['tp-dlcreatetopic_announce'] = 'Ogłosić?';
$txt['tp-dlchooseboard'] = 'Wybierz forum w którym ma znajdować się wątek';
$txt['tp-dlusescreenshot'] = 'Użyć obrazka zamiast ikony?';
$txt['tp-dlscreenshotsizes'] = 'Powiększ rozmiary obrazka:';
$txt['tp-dlperms'] = 'Zezwolenia';
$txt['tp-dlperms2'] = 'Wybierz i ustaw zezwolenia dla wszystkich grup użytkowników. "Zarządzaj plikami" daje prawa administratora dla wszystkich plików, 
"Wyślij plik" daje prawa na wysyłanie plików, "utówrz wątek" daje prawa do utowrzenia wątku dla pliku który został wysłany.';
$txt['tp-dlcreatetopicboards'] = 'Forum jako Boards to use for support topics';
$txt['tp-mostpopweek'] = 'Najczęściej pobierane w tym tygodniu';
$txt['tp-mostpop'] = 'Najczęściej pobierane pliki';
$txt['tp-dluselatest'] = 'Pokaż najnowsze pliki?';
$txt['tp-dlusefeatured'] = 'Pokaż przedstawione pliki?';
$txt['tp-dlusestats'] = 'Pokaż najczęściej pobierane/najczęściej pobierane w tygodniu?';
$txt['tp-dlintrotext'] = 'Tekst jako tytuł';
$txt['tp-dlusecategorytext'] = 'Pokaż opis kategorii w liście plików?';
$txt['tp-dlfeatured'] = 'Przedstawione pliki';
$txt['tp-dlwysiwyg'] = 'Pokaż edytor tekstu?';

$txt['tp-dlmissingboards'] = 'Nie wybrałeś żadnego działu. Czy chcesz przejść do ekranu <a href="' . $scripturl . '?action=tpmod;dl=adminsettings">ustawień</a>?';

$txt['tp-dlnonint'] = 'Przepraszamy, próbowałeś wprowadzić nie całkowitą wartość!';
$txt['tp-dlfilenotdel'] = 'Nie można skasować aktualnego pliku, wartość została usunięta.';
$txt['tp-dlssnotdel'] = 'Nie można skasować aktalnego zrzutu ekranu, wartość została usunięta.';
$txt['tp-dlnotuploaded'] = 'Plik nie został wysłany.';

?>