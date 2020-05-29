<?php

require 'bootloader.php';

$form = [
    'attr' => [
        'action' => 'about.php',
        'method' => 'POST',
        'class' => 'r_form',
    ],
    'fields' => [
        'question' => [
            'label' => 'Klausimas:',
            'type' => 'select',
            'options' => [
                'pirmas' => 'Koks urodas kepa picas ?',
                'antras' => 'Kodėl kurjeris užpuolė mano šunį ?',
                'trecias' => 'Ar galit pristatyti picą su šypsena ? ?',
            ],
        ],
    ],
    'answer' => [
        'Belekokia',
        'Nes šuo norėjo atimti picą ! ! !',
        'Be abejo',
    ],
    'buttons' => [
        'save' => [
            'title' => 'Show',
            'extra' => [
                'attr' => [
                    'class' => 'button',
                ]
            ]
        ],
    ],
];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<main>
    <section>
        <?php include 'core/templates/form_about.php' ?>

        <?php if ($_POST['question'] == 'pirmas'): ?>
            <h1><?php print $form['answer'][0] ?></h1>
            <div class="answer1"></div>
        <?php elseif ($_POST['question'] == 'antras'): ?>
            <h1><?php print $form['answer'][1] ?></h1>
            <div class="answer2"></div>
        <?php elseif ($_POST['question'] == 'trecias'): ?>

            <h1><?php print $form['answer'][2] ?></h1>
            <div class="answer3"></div>
        <?php endif; ?>
    </section>
</main>
</body>
</html>
