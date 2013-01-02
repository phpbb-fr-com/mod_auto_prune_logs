<?php
/**
*
* @package Auto Prune Logs
* @author phpBB-fr MODs Team phpbbfr.mods@gmail.com
* @copyright (c) 2012 http://www.phpbb-fr.com
* @author Erwan NADER (ErnadoO) ernadoo@phpbb-services.com
* @copyright (c) 2009 http://www.phpbb-services.com
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @ignore
*/
define('UMIL_AUTO', true);
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);

// start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup();

if (!file_exists($phpbb_root_path . 'umil/umil_auto.' . $phpEx))
{
	trigger_error('Please download the latest UMIL (Unified MOD Install Library) from: <a href="http://www.phpbb.com/mods/umil/">phpBB.com/mods/umil</a>', E_USER_ERROR);
}

// name of the mod
$mod_name = 'AUTO_PRUNE_LOGS';

// name of the config variable
$version_config_name = 'auto_prune_logs_version';

// language file which will be included when installing
$language_file = 'mods/info_acp_auto_prune_logs';

// logo image
//$logo_img = '';

// array of versions and actions within each
$versions = array(
	'1.0.1' => array(
		// remove unused language files
		'custom'	=> 'apl_check_config',

		// Purge cache
		'cache_purge' => '',
	),
);

// Include the UMIF Auto file and everything else will be handled automatically.
include($phpbb_root_path . 'umil/umil_auto.' . $phpEx);

/*
* Function called for version 1.0.1.
* 
* @param string $action The action (install|update|uninstall) will be sent through this.
* @param string $version The version this is being run for will be sent through this.
*/
function apl_check_config($action, $version)
{
	global $umil;

	// current time needed for 'prune_log_next_time'
	$current_time = time();

	$config_ary = array(
		array('prune_log_next_time', $current_time, true),
		array('prune_admin_log_day', 0),
		array('prune_mod_log_day', 0),
		array('prune_log_day', 1),
	);

	// Run this when uninstalling
	if ($action == 'uninstall')
	{
		foreach ($config_ary as $config_vars)
		{
			$umil->config_remove($config_vars[0]);
		}
		unset($config_vars);
	}
	else
	{

		foreach ($config_ary as $config_vars)
		{
			if ($umil->config_exists($config_vars[0]))
			{
				$umil->config_update(array($config_vars));
			}
			else
			{
				$umil->config_add(array($config_vars));
			}
		}
		unset($config_vars);
	}
}
?>