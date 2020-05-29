<form <?php print html_attr($form['attr'] ?? []); ?>>
    <?php foreach ($form['fields'] ?? [] as $field_id => $field): ?>
        <select <?php print select_attr($field_id, $field); ?>>
            <!--Option tag generation -->
            <?php foreach ($field['options'] ?? [] as $option_id => $option_title): ?>
                <option <?php print option_attr($option_id, $field); ?>>
                    <?php print $option_title; ?>
                </option>
            <?php endforeach; ?>
            <!--Option tag generation end-->

        </select>
    <?php endforeach; ?>
    <!--Button generation start-->
    <?php foreach ($form['buttons'] ?? [] as $button_id => $button): ?>
        <button <?php print button_attr($button_id, $button) ?>>
            <?php print $button['title']; ?>
        </button>
    <?php endforeach; ?>
    <!--Button generation end-->
</form>
