<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    include 'header.php';
    include 'content.php';
    include 'footer.php';

function afiseaza_pagina($paginaSelectata) {
  switch ($paginaSelectata) {
    case "agnita_1":
        echo "agnita_1.php";
        // include 'agnita_1.php'
        break;
    case "agnita_2":
        echo "agnita_2.php";
        break;
    case "agnita_3":
        echo "agnita_3.php";
        break;
}
}

$paginaSelectata = 'agnita_1';
afiseaza_pagina($paginaSelectata);

  ?>
</body>
</html>
