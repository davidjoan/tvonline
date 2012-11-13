<?php
header('Access-Control-Allow-Origin: *');
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header("Content-Type:text/xml");
?>
<<?php echo $model; ?>s>
    <?php foreach ($objects as $object): ?>
        <<?php echo $model; ?>>
        <?php foreach ($object as $key => $value): ?>
            <<?php echo $key ?>><?php echo $value ?></<?php echo $key ?>>
        <?php endforeach ?>
        </<?php echo $model; ?>>
<?php endforeach ?>
</<?php echo $model; ?>s>