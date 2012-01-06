<?php
if(isset($_GET['save'])):

if(isset($_POST['motd_type']) && $_POST['motd_type'] == 'url') {
	$motd = $_POST['motd_url'];
} else {
	$motd = $_POST['motd_message'];
}

$dm->setContents($config, $motd);

else:

$core->registerScript('lib/jquery/jquery.1.4.2.min.js');
$core->registerScript('lib/ckeditor/ckeditor.js');
$core->registerScript('lib/ckeditor/adapters/jquery.js');

$motd = $dm->getContents($config);
if(substr($motd, 0, 4) == 'www.' || substr($motd, 0, 7) == 'http://') $motd_url = $motd;
else $motd_message = $motd;

?>
<h2>Message Of The Day</h2>
<script type="text/javascript">
$(document).ready(function() {
	
	$('#editor').ckeditor({
		height: '400px',
		toolbar: 'Custom'
	});

});
</script>
<input type="radio" name="motd_type" value="message" <?php echo (isset($motd_message)) ? 'checked="checked"' : ''; ?>/>Type a message
<textarea id="editor" name="motd_message"><?php echo $motd_message; ?></textarea>
<input type="radio" name="motd_type" value="url" <?php echo (isset($motd_url)) ? 'checked="checked"' : ''; ?>/>Or provide an url to a website
<input style="width: 100%;" type="text" name="motd_url" value="<?php echo $motd_url; ?>" />
<div style="margin: 5px 0; text-align: right; width: 100%;"><input type="submit" value="Save" /></div>

<?php endif; ?>
