<?php


include 'Class/Person.php';
include 'Class/Docent.php';
$haonan = new Person("Haonan", 21, "M");
$pinda = new Person("Pinda", 24, "V");
$tom = new Person("Tom", 20, "M");
$marianne = new Person("Marianne", 25, "V");

echo "<br>" . "\n De gevens van Haonan zijn " . $haonan->getLeeftijd() . " " .   $haonan->getGeslacht() . "<br>";
echo "\n De gevens van Pinda zijn " . $pinda->getLeeftijd() . " " .   $pinda->getGeslacht() . "<br>";
echo "\n De gevens van Tom zijn " . $tom->getLeeftijd() . " " .   $tom->getGeslacht() . "<br>";
$marianne->setLeeftijd(26);
echo "\n De gevens van Marianne zijn " . $marianne->getLeeftijd() . " " .   $marianne->getGeslacht() . "<br>";

$haonan->getGegevens();
$tom->getGegevens();

$docent1=new Docent("Anton", 67, "PHP");
echo $docent1->getInfo();
?>