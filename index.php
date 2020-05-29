<?php

$nav = [
    'nav' => [
        'Index' => [
            'link' => 'index.php',
        ],
        'About' => [
            'link' => 'about.php',
        ],
        'Form' => [
            'link' => 'form.php',
        ]
    ]

];

$class = array_keys($nav)[0];


/**
 * generate_matrix function generates a grid
 *
 * @param  int $size
 * @return array
 */
function generate_matrix(int $size): array
{
    $matrix = [];
    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < $size; $j++) {
            $matrix[$i][$j] = rand(0, 1);
        }
    }

    return $matrix;
}

$number = rand(3, 6);
$matrix = generate_matrix($number);

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
    <?php require 'navbar.php'; ?>
    <main>
        <?php foreach ($matrix as $key => $row) : ?>
            <div>
                <?php foreach ($row as $square) : ?>
                    <div class="grid grid-<?php print $number; ?> <?php print $square; ?> pica-<?php print rand(1, 6); ?> "></div>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
        <div class="title">
            <h1>PZ2A PICERIJA</h1>
        </div>
    </main>
</body>

</html>