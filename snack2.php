<!-- Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato:
DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare
ogni data con i relativi post. -->

<?php
$posts = [
  // [0]
  '01/01/2019' => [
    [
      'title' => '1° POST',
      'author' => 'Giovannino',
      'text' => 'Testo del 1° post del 01/01/2019'
    ],
    [
      'title' => '2° POST',
      'author' => 'Mariella',
      'text' => 'Testo del 2° post del 01/01/2019'
    ],
  ],
  // [1]
  '01/01/2020' => [
    [
      'title' => '1° POST',
      'author' => 'Giovannino',
      'text' => 'Testo del 1° post del 01/01/2020'
    ]
  ],
  // [2]
  '01/01/2021' => [
    [
      'title' => '1° POST',
      'author' => 'Giovannino',
      'text' => 'Testo del 1° post del 01/01/2021'
    ],
    [
      'title' => '2° POST',
      'author' => 'Mariella',
      'text' => 'Testo del 2° post del 01/01/2021'
    ],
    [
      'title' => '3° POST',
      'author' => 'Giuseppetto',
      'text' => 'Testo del 3° post del 01/01/2021'
    ]
  ],
];
// estraggo le chiavi dell'array associativo
$myKeys = array_keys($posts);

// ciclo for sulle chiavi estratte dall'array
for ($i = 0; $i < count($myKeys); $i++) {

  $postTitle = $myKeys[$i];
  echo "<hr><h2>{$postTitle}</h2>";

  for ($j = 0; $j < count($posts[$postTitle]); $j++) {
    $singlePost = $posts[$postTitle][$j];

    echo "<div>
            <h4>{$singlePost["title"]}</h4>
            <h4>{$singlePost["author"]}</h4>
            <p>{$singlePost["text"]}</p>
          </div>";
  };
};
?>