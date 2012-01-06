<h2><?php echo $groupName; ?></h2>
<div style="float: left; margin-right: 2px; width: 50%;">
<?php
$flags = $res_clients['flags_admin'];
$selected = $group['Admin'];
$type = 'Admin';
include('plugins/serverconfiguration/editors/clients/flags.php');
?>
</div>
<div style="width: 50%;">
<?php
$flags = $res_clients['flags_immunity'];
$selected = $group['Immunity'];
$type = 'Immunity';
include('plugins/serverconfiguration/editors/clients/flags.php');
?>
</div>
<input type="hidden" name="saveType" value="group" />
<input type="hidden" name="groupName" value="<?php echo $_GET['group']; ?>" />
<input type="submit" value="Save" />