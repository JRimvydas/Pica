<?php

$form = [
    'attr' => [
        'action' => 'form.php',
        'method' => 'POST',
        'class' => 'form',
    ],
    'fields' => [
        'Kokios spalvos merginos plaukai?' => [
            'type' => 'select',
            'class' => 'selection-color',
            'options' => [
                'color-1' => 'Blondines',
                'color-2' => 'Briunetes',
                'color-3' => 'Satenes',
            ]
        ],
        'Krutines dydis?' => [
            'type' => 'select',
            'class' => 'selection-size',
            'options' => [
                'size-1' => 'Small',
                'size-2' => 'Medium',
                'size-3' => 'Large',
                'size-4' => 'Extra large',
            ]
        ],
        'Kuria pasirinktum?' => [
            'type' => 'select',
            'class' => 'selection-type',
            'options' => [
                'type-1' => 'Grazi',
                'type-2' => 'Seksuali',
                'type-3' => 'Protinga',
            ]
        ],
    ],
    'buttons' => [
        'make' => [
            'title' => 'Padaryti Pica',
            'class' => 'make-button',
        ]
    ]
];

/**
 * Generating attributes from an array
 *
 * @param array $form
 * @return string
 */
function html_attr(array $form): string
{
    $line = '';
    foreach ($form as $key => $item) {
        $line .= "$key=\"$item\" ";
    }
    return $line;
}

/**
 * Generating select tags attributes.
 *
 * @param string $field_id index in an array $form['fields'].
 * @param array $field
 * @return string
 */
function select_attr($field_id, array $field): string
{
    $attr = [
        'name' => $field_id,
        'type' => $field['type']
    ];

    return html_attr($attr);
}

/**
 * Generating option value attribute.
 *
 * @param string $option_id index in an array $field['options'].
 * @return string
 */
function option_attr(string $option_id): string
{
    $attr = [
        'value' => $option_id
    ];

    return html_attr($attr);
}

/**
 * Generating button tag attributes.
 *
 * @param string $button_id  in an array $form ['buttons'].
 * @param array $button
 * @return string
 */
function button_attr($button_id, array $button): string
{
    $attr = [
        'value' => $button_id,
        'name' => 'action',
        'title' => $button['title'],
        'class' => $button['class']
    ];

    return html_attr($attr);
}

var_dump($_POST);

?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    </head>
    <body>
        <main>
            <h1 class>PASIGAMINK PZDPICA PATS!</h1>
            <form <?php print html_attr($form['attr'] ?? []) ?>>
                <?php foreach ($form['fields'] ?? [] as $field_id => $field) : ?>
                    <label><?php print $field_id ?>
                        <select <?php print select_attr($field_id, $field) ?>>
                            <?php foreach ($field['options'] ?? [] as $option_id => $option) : ?>
                                <option <?php print option_attr($option_id); ?>><?php print $option ?></option>
                            <?php endforeach; ?>
                        </select>
                    </label>
                <?php endforeach; ?>
                <?php foreach ($form['buttons'] ?? [] as $button_id => $button) : ?>
                <button <?php print button_attr($button_id, $button); ?>><?php print $button['title']; ?></button>
                <?php endforeach; ?>
            </form>
        </main>
    </body>
</html>
