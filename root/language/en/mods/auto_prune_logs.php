<?php
/**
*
* auto_prune_logs.php [English]
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
* UMIL
*/
$lang = array_merge($lang, array(
	'INSTALL_AUTO_PRUNE_LOGS'			=> 'Install Auto Prune Logs',
	'INSTALL_DONATION_MOD_CONFIRM'		=> 'Are you ready to install the Donation Mod?',
	'INSTALL_DONATION_MOD_WELCOME'		=> 'Major changes since version 1.0.3',
	'INSTALL_DONATION_MOD_WELCOME_NOTE'	=> 'The language keys used by “Donation pages” were migrated in the database.
											<br />If you use this feature, backup your language files before to update the MOD to this new release.
											<br /><br />A new permission has been added.
											<br />Do not forget to set up this new permission in <strong>ACP >> Permissions >> Global permissions >> User permissions</strong>
											<br />To allow guests to make a donation, check the box “Select anonymous user”',

	'DONATION_MOD'						=> 'Donation Mod',
	'DONATION_MOD_EXPLAIN'				=> 'Install Donation Mod database changes with UMIL auto method.',

	'UNINSTALL_DONATION_MOD'			=> 'Uninstall Donation Mod',
	'UNINSTALL_DONATION_MOD_CONFIRM'	=> 'Are you ready to uninstall the Donation Mod? All settings and data saved by this mod will be removed!',

	'UPDATE_DONATION_MOD'				=> 'Update Donation Mod',
	'UPDATE_DONATION_MOD_CONFIRM'		=> 'Are you ready to update the Donation Mod?',

	'UNUSED_LANG_FILES_TRUE'			=> 'Removal of unused language files.',
	'UNUSED_LANG_FILES_FALSE'			=> 'The removal of unused files is not necessary.',
));
?>