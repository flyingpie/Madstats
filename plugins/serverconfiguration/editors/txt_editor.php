<?php
if(isset($_GET['save'])):

$data = str_replace('\\"', '"', $_POST['config_data']);

$dm->setContents($config, $data);

else:

$text = $dm->getContents($config);
?>

<div class="txt_editor">
<div style="margin: 3px;"><?php echo $config; ?></div>
<textarea name="config_data"><?php echo $text; ?></textarea>
<div style="text-align: right;"><input type="submit" value="Save" /></div>
</div>

<?php endif; ?>