<?php
$ceu = [
        "Argentina"=> ["Buenos Aires", "Córdoba", "Santa Fé"],
        "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
        "Colombia" => ["Cartagena", "Bogota", "Barranquilla"],
        "Francia" => ["Paris", "Nantes", "Lyon"],
        "Italia" => ["Roma", "Milan", "Venecia"],
        "Alemania" => ["Munich", "Berlin", "Frankfurt"]
];
$ceu2 = [
        "Argentina"=>[
                     "ciudades" =>["Buenos Aires", "Córdoba", "Santa Fé"],
                     "americano"=>true,
                   ],
        "Brasil" => ["ciudades" =>["Brasilia", "Rio de Janeiro", "Sao Pablo"],
                      "americano"=>true,
                    ],
        "Colombia" => ["ciudades"=>["Cartagena", "Bogota", "Barranquilla"],
                      "americano"=>true,
                      ],
        "Francia" => ["ciudades" =>["Paris", "Nantes", "Lyon"],
                      "americano"=>false,
                    ],
        "Italia" => ["ciudades"=>["Roma", "Milan", "Venecia"],
                      "americano"=>false,
                    ],
        "Alemania" => ["ciudades"=>["Munich", "Berlin", "Frankfurt"],
                    "americano"=>false,
                  ],
];


var_dump($ceu2["Argentina"]["ciudades"]);


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Paises y ciudades</h1>
    <?php foreach ($ceu as $pais => $ciudades):?>
      <h2>Las ciudades de <?= $pais ?> son: </h2>
      <ul>
        <?php foreach ($ciudades as $ciudad):?>
          <li><?= $ciudad  ?></li>
        <?php endforeach ?>
      </ul>
    <?php endforeach ?>

    <h1>Paises Americanos</h1>
    <?php foreach ($ceu2 as $pais => $data):?>
      <?php if($data["americano"]):?>
        <h2>Las ciudades de <?= $pais ?> son: </h2>
        <ul>
        <?php foreach ($data["ciudades"] as $ciudad):?>
          <li><?= $ciudad  ?></li>
        <?php endforeach ?>
        </ul>
      <?php endif ?>
    <?php endforeach ?>

  </body>
</html>
