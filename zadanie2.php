<?php
echo"KALKULATOR OBJĘTOŚCI BRYŁ GEOMETRYCZNYCH\n";
echo "Wybierz figurę: \n";
echo "1. Sześcian \n";
echo "2. Prostopadłościan \n";
echo "3. Walec \n";
echo "Podaj numer figury: ";

$wybór = (int) trim(fgets(STDIN));
switch ($wybór){
 case 1:
  echo"Podaj długość krawędzi sześcianu: ";
  $a=(float) trim(fgets(STDIN));
  if ($a>0){
   $objetosc=$a*$a*$a;
   echo "Objętość sześcianu wynosi: ".$objetosc."\n";
  } else {
   echo "Błąd! Długość krawędzi musi być większa od zera.\n";
  }
break;
 case 2:
  echo"Podaj długość: ";
  $a=(float) trim(fgets(STDIN));
  echo"Podaj szerokość: ";
  $b=(float) trim(fgets(STDIN));
  echo"Podaj wysokość: ";
  $c=(float) trim(fgets(STDIN));
  if ($a>0 && $b>0 && $c>0){
   $objetosc=$a*$b*$c;
   echo "Objętość prostopadłościanu wynosi: ".$objetosc."\n";
  } else {
   echo "Błąd! Wszystkie krawędzie muszą być większe od zera.\n";
  }
break;
 case 3:
  echo"Podaj promień walca: ";
  $r=(float) trim(fgets(STDIN)); 
  echo"Podaj wysokość walca: ";
  $h=(float) trim(fgets(STDIN));
  if ($r>0 && $h>0){
   $objetosc=match(true){
    $r>0 && $h>0 => pi()*$r*$r*$h,
    default => 0
   };
   echo "Objętość walca wynosi: ".round($objetosc, 2)."\n";
  } else {
   echo "Błąd! Promień i wysokość muszą być większe od zera.\n";
  }
break;
 default:
  echo "Nie ma takiej opcji!\n";
break;
}
