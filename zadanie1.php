<?php
echo"Podaj rok urodzenia:";
$rok=trim(fgets(STDIN));

$wiek=date("Y")-(int)$rok;

echo"Masz ".$wiek." lat.\n";

echo"Podaj imię: ";
$imie=trim(fgets(STDIN));
echo"Podaj nazwisko: ";
$nazwisko=trim(fgets(STDIN));

echo"Potencjalny numer PESEL: nie został wygenerowany, ponieważ brakuje pełnej daty urodzenia i 
innych danych.\n";

$plik=fopen("zadanie1.txt","w");
fwrite($plik, "Imię :".$imie."\n");
fwrite($plik, "Nazwisko: ".$nazwisko."\n");
fwrite($plik, "Rok urodzenia: ".$rok."\n");
fwrite($plik, "Wiek: " .$wiek."\n");
fwrite($plik, "PESEL: nie wygenerowano\n");

fclose($plik);

echo "Informacje zapisano do pliku zadanie1.txt\n";
