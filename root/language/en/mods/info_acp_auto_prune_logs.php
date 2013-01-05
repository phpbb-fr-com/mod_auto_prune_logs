<?php
/**
*
* info_acp_auto_prune_logs.php [French]
*
* @package Auto Prune Logs
* @author phpBB-fr Team mods@phpbb-fr.com
* @copyright (c) 2012 phpBB-fr MOD Team
* @author Erwan NADER (ErnadoO) ernadoo@phpbb-services.com
* @copyright (c) 2009 http://www.phpbb-services.com
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

/*
* Maintenance settings
*/

$lang = array_merge($lang, array(
	'AUTO_PRUNE_ADMIN_LOG'			=> 'Maximum age of the admin log entries',
	'AUTO_PRUNE_ADMIN_LOG_EXPLAIN'	=> 'All actions listed in the admin log prior to this value will be deleted. Set this value to 0 to disable the task.',
	'AUTO_PRUNE_MOD_LOG'			=> 'Maximum age of the moderation log entries',
	'AUTO_PRUNE_MOD_LOG_EXPLAIN'	=> 'All actions listed in the moderation log prior to this value will be deleted. Set this value to 0 to disable the task.',
	'AUTO_PRUNE_LOG_DAYS'			=> 'Interval between each check',
));

/*
* UMIL
*/
$lang = array_merge($lang, array(
	'INSTALL_AUTO_PRUNE_LOGS'			=> 'Install Auto Prune Logs',
	'INSTALL_AUTO_PRUNE_LOGS_CONFIRM'	=> 'Are you ready to install Auto Prune Logs',
                                        
	'AUTO_PRUNE_LOGS'					=> 'Auto Prune Logs',
	'AUTO_PRUNE_LOGS_EXPLAIN'			=> 'Install Auto Prune Logs database changes with UMIL auto method.',

	'UNINSTALL_AUTO_PRUNE_LOGS'			=> 'Uninstall Auto Prune Logs',
	'UNINSTALL_AUTO_PRUNE_LOGS_CONFIRM'	=> 'Are you ready to uninstall Auto Prune Logs? All settings and data saved by this mod will be removed!',

	'UPDATE_AUTO_PRUNE_LOGS'			=> 'Update Auto Prune Logs',
	'UPDATE_AUTO_PRUNE_LOGS_CONFIRM'	=> 'Are you ready to update the Auto Prune Logs?',
));
?>