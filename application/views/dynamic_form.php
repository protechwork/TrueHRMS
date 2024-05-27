<?php var_dump($fields); ?>
<form action="<?php //echo site_url('dynamic_form_controller/submit'); ?>" method="post">
    <?php foreach ($fields as $field): ?>
        <label for="<?php echo $field['field_name']; ?>">
            <?php echo ucfirst($field['field_name']); ?>
        </label>
        <?php if ($field['field_type'] === 'text'): ?>
            <input type="text" name="<?php echo $field['field_name']; ?>" id="<?php echo $field['field_name']; ?>">
        <?php elseif ($field['field_type'] === 'select' && !empty($field['options'])): ?>
            <?php $options = explode(',', $field['options']); ?>
            <select name="<?php echo $field['field_name']; ?>" id="<?php echo $field['field_name']; ?>">
                <?php foreach ($options as $option): ?>
                    <option value="<?php echo $option; ?>"><?php echo $option; ?></option>
                <?php endforeach; ?>
            </select>
        <?php endif; ?>
        <br>
    <?php endforeach; ?>
    <input type="submit" value="Submit">
</form>