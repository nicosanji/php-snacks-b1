<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso
numero più di una volta -->

<?php
// array vuoto da riempire con i numeri
$myArray = [];
// numeri da generare
$totNum = 15;

// ciclo while sull'array finchè non arriva a 15
while (count($myArray) <= $totNum) {
  // genera numero random (intero) tra 1 e 100
  $randomNum  = rand(0, 99);
  // se non è già presente aggiungilo all'array
  if (!in_array($randomNum, $myArray)) {
    $myArray[] = $randomNum;
  }
}
?>

<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack-3</title>
</head>

<body>
  <main>
    <h4>Genera 15 numeri casuali ( i numeri non devono ripetersi )</h4>
    <ol>
      <?php
      // innesto nella <ul> i 15 numeri random dentro un <li>
      for ($i = 1; $i < count($myArray); $i++) {
        echo "<li>=====> $myArray[$i]</li>";
      }
      ?>
    </ol>
  </main>
</body>

</html>