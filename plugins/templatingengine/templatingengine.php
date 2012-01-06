<?php
$template_name = $core->getConfig()->getTemplate();

// Load the template
$template = file_get_contents('templates/' . $template_name . '/index.php');

// Fix paths
$template = str_replace(array('href="', 'src="'), array('href="templates/' . $template_name . '/', 'src="templates/' . $template_name . '/'), $template);

// Add the navigation
$plugins = $core->getPages();
$navigation = "";
$activePluginTitle = ucwords($plugins[$core->getCurrentPlugin()][$core->getCurrentPlugin()]['name']);

foreach($plugins as $plugin => $pages) {
	foreach($pages as $key => $page) {
		if(array_key_exists('menuitem', $page) && !$page['menuitem']) continue;
		if(array_key_exists('file', $page)) $file = $page['file'];
		if($page['admin'] === true && !$core->getAuth()->isLogged()) continue;
		
		$activeClass = (strtolower($page['name']) == strtolower($activePluginTitle)) ? ' button-active' : '';
		$navigation .= '<div class="button' . $activeClass . '"><a href="?page=' . $key . '">' . ucwords($page['name']) . '</a></div>';
	}
}


$template = str_replace('[navigation]', $navigation, $template);

// Add the title
$template = str_replace('[title]', 'MadStats Server Statistics | ' . $activePluginTitle, $template);

// Add the content
ob_start();
include('plugins/' . $core->getActivePage());
$content = ob_get_contents();
ob_end_clean();

$template = str_replace('[content]', $content, $template);
$template = str_replace('[activepage]', $activePluginTitle, $template);

// Add the hooks
$hooks = $core->getHooks();

foreach($hooks as $plugin => $hooks) {
	foreach($hooks as $hook) {
		if(array_key_exists('block', $hook) && array_key_exists('file', $hook)) {
			ob_start();
			include('plugins/' . $plugin . '/' . $hook['file']);
			$content = ob_get_contents();
			ob_end_clean();
			
			$template = str_replace('[' . $hook['block'] . ']', $content, $template);
		}
	}
}

// Add scripts
$scripts = $core->getScripts();
$scriptscontent = "";

foreach($scripts as $file) {
	if(strlen($scriptscontent) > 0) $scriptscontent .= "\r\n";
	$scriptscontent .= '<script type="text/javascript" src="' . $file . '"></script>';
}

$template = str_replace('[scripts]', $scriptscontent, $template);

// Add stylesheets
$stylesheets = $core->getStylesheets();
$stylesheetscontent = "";

foreach($stylesheets as $file) {
	if(strlen($stylesheetscontent) > 0) $stylesheetcontent .= "\r\n";
	$stylesheetscontent .= '<link rel="stylesheet" type="text/css" href="' . $file . '" />';
}

$template = str_replace('[stylesheets]', $stylesheetscontent, $template);

// Print the result
if(!isset($_GET['ajax'])) echo $template;
?>
