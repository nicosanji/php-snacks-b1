<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok
stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

// Fintanto che non passo 3 parametri al GET nell'url richiede di inserirli
if (count($_GET) < 3)
  exit("Inserisci nell'URL: ? [name = tuo nome] & [mail = tua mail] & [age = tua età]");

// Parametri da inserire nell'url (http://localhost:8888/php-snacks-b1/snack1.php?name=gigi&mail=gigi.trottola@gmail.com&age=13)
$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];

// Condizioni necessarie per i 3 parametri
// strlen -> controlla che la lunghezza della stringa sia superiore a 3 caratteri
// strpos -> controlla presenza di "@" nella stringa
// intval -> controlla che sia un Number valido
if (strlen($name) > 3 && strpos($mail, "@") && strpos($mail, ".") && intval($age))
  echo ("Accesso riuscito");
else
  echo ("Accesso negato");
