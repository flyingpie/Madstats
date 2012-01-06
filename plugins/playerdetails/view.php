<?php

$core->registerScript('lib/jquery/jquery.1.4.2.min.js');
$core->registerScript('plugins/playerdetails/row_alternator.js');

?>
<?php echo $core->getStylesheet(array('layout', 'playerdetails')); ?>
<div id="playerdetails-container">
	<div style="min-height: 186px;">

		<img src="<?php echo $steam['avatarFull']; ?>" style="position: absolute;" alt="avatar" />
		<div style="margin-left: 190px;">
		<?php echo $steam['headline']; ?><br /><br />
		<?php echo $steam['realname']; ?><br />
		<?php echo $steam['location']; ?><br /><br />
		<?php echo $steam['summary']; ?>
		</div>
	</div>
	<div>
		<div style="float: left; margin-right: 10px;"><?php include('plugins/playerdetails/blocks/statistics_left.php'); ?></div>
		<div style="float: left;"><?php include('plugins/playerdetails/blocks/hitbox.php'); ?></div>
		<div style="float: left; margin-left: 10px;"><?php include('plugins/playerdetails/blocks/statistics_right.php'); ?></div>
	</div>
	<div style="float: right; width: 290px;"><?php include('plugins/playerdetails/blocks/steam_community.php'); ?></div>
</div>