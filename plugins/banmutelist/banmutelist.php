<?php

$core->registerScript('lib/jquery/jquery.1.4.2.min.js');

$auth = $core->getAuth();
$dm = $core->loadComponent('DataManager');

if($auth->isLogged()) {
	if(isset($_GET['unban']) && !empty($_GET['unban'])) {
		unBanMute($_GET['unban'], 'banlist.txt', $dm);
	}
	if(isset($_GET['unmute']) && !empty($_GET['unmute'])) {
		unBanMute($_GET['unmute'], 'mutelist.txt', $dm);
	}
}

$banned = array_reverse($dm->getFile('banlist.txt', array('comments' => false, 'split' => 5)));
$muted = array_reverse($dm->getFile('mutelist.txt', array('comments' => false, 'split' => 5)));

$lists = array('Banned' => array('action' => 'unban', 'list' => $banned), 'Muted' => array('action' => 'unmute', 'list' => $muted));

function unBanMute($steam_id, $file, $dm) {
	$list_buffer = $dm->getFile($file);
	$list = array();
	foreach($list_buffer as $line) {
		if(strpos($line, $steam_id) === false) {
			$list[] = $line;
		}
	}
	$dm->setFile($file, $list);
}

?>
<script type="text/javascript">
$(document).ready(function() {

	$('.unban').click(function() {
		return confirm('Are you sure you want to unband this player?');
	});

	$('.unmute').click(function() {
		return confirm('Are you sure you want to unmute this player?');
	});
	
});
</script>
<?php foreach($lists as $title => $params): ?>
<h2><?php echo $title; ?></h2>
<table>
	<tr>
		<th style="width: 160px;">Steam ID</th>
		<th style="width: 160px;">Time</th>
		<th style="width: 200px;">Name</th>
		<th style="width: 200px;">Admin</th>
		<th>Reason</th>
		<?php if($auth->isLogged()) echo '<th style="width: 40px;"></th>'; ?>
	</tr>
	<?php foreach($params['list'] as $line): ?>
	<tr>
		<td><?php echo $line[0]; ?></td>
		<td><?php echo ($line[1] == 0) ? 'Permanent' : date('D-m-Y H:i:s', $line[1]); ?></td>
		<td><?php echo $line[2]; ?></td>
		<td><?php echo $line[3]; ?>
		<td><?php echo $line[4]; ?></td>
		<?php if($auth->isLogged()) echo '<td><a class="' . $params['action'] . '" href="?page=banmutelist&' . $params['action'] .'=' . $line[0] . '">' . $params['action'] . '</a></td>'; ?>
	</tr>
	<?php endforeach; ?>
</table>
<?php endforeach; ?>