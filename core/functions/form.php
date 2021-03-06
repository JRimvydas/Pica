<?php

/**
 * get form attributes
 * @param array $attr attributes array
 * @return string of parameters
 */
function html_attr(array $attr): string
{
    $attributes = '';
    foreach ($attr as $key => $value) {
        $attributes .= "$key=\"$value\" ";
    }

    return $attributes;
}

/**
 * Make button attributes
 * @param string $button_id
 * @param array $button
 * @return string button attributes
 */
function button_attr(string $button_id, array $button): string
{
    $button_attrs = [
            'name' => 'action',
            'value' => $button_id,
        ] + ($button['extra']['attr'] ?? []);

//    $button_attrs = [
//        'name' => 'action',
//        'value' => $button_id,
//    ];
//    $button_attrs += $button['extra']['attr'] ?? [];

    return html_attr($button_attrs);
}

/**
 * Select attributes
 * @param string $select_id
 * @param array $select
 * @return string
 */
function select_attr(string $select_id, array $select): string
{
    $attrs = [
        'name' => $select_id,
        'type' => $select['type']
    ];

    return html_attr($attrs);
}

/**
 * Get options attributes
 * @param string $option_id
 * @param array $field
 * @return string
 */
function option_attr(string $option_id, array $field): string
{
    $attrs = [
        'value' => $option_id,
    ];
    if (isset($field['value']) && $field['value'] == $option_id) {
        $attrs['selected'] = true;
    }

    return html_attr($attrs);
}
