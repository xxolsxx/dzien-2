<?php
class Samochod 
{
 public $marka;
 public $waga;
 public $dataPrzegladu;
 public $kolor;
 public $tablica;
 public $punktyKarne;

public function __construct($marka, $waga, $ddataPrzegladu, $kolor, $tablica)
 {
  $this->marka=$marka;
  $this->waga=$waga;
  $this->dataPrzegladu=$dataPrzegladu;
  $this->kolor=$kolor;
  $this->tablica=$tablica;
  $this->punktyKarne=0;
 }
public function dodajPunkty($punkty)
 {
  $this->punktyKarne+=$punkty;
 }
public function pokazInformacje()
 {
  echo "Marka: ".$this->marka."\n";
  echo "Waga: ".$this->waga."\n";
  echo "Data przeglądu: ".$this->dataPrzegladu."\n";
  echo "Kolor: ".$this->kolor."\n";
  echo "Tablica rejestracyjna: ".$this->tablica."\n";
  echo "Punkty karne: ".$this->punktyKarne."\n";
  }
}

$vw=new Samochod("VW", 1400, "2026-05-10", "czarny", "Cb12345");
$bmw=new Samochod ("BMW", 1600, "2026-08-15", "biały", "CB54321");
$mercedes=new Samochod("Mercedes", 1800, "2026-11-20", "srebrny", "CB67890");

$vw->dodajPunkty(5);
$bmw->dodajPunkty(3);
$mercedes->dodajPunkty(2);

echo"SAMOCHÓD VW\n";
$vw->pokazInformacje();
echo "SAMOCHÓD BMW\n";
$bmw->pokazInformacje();
echo "SAMOCHÓD MERCEDES\n";
$mercedes->pokazInformacje();
