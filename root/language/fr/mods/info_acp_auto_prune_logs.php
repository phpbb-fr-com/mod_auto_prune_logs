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
	'AUTO_PRUNE_ADMIN_LOG'			=> 'Ancienneté maximale des entrées du journal d’administration',
	'AUTO_PRUNE_ADMIN_LOG_EXPLAIN'	=> 'Toutes les actions répertoriés dans le journal d’administration datant d’avant cette valeur seront supprimées. Laissez 0 pour désactiver cette tâche',
	'AUTO_PRUNE_MOD_LOG'			=> 'Ancienneté maximale des entrées du journal de modération',
	'AUTO_PRUNE_MOD_LOG_EXPLAIN'	=> 'Toutes les actions répertoriés dans le journal de modération datant d’avant cette valeur seront supprimées. Laissez 0 pour désactiver cette tâche',
	'AUTO_PRUNE_LOG_DAYS'			=> 'Intervalle entre chaque vérification',
));

/*
* UMIL
*/
$lang = array_merge($lang, array(
	'INSTALL_AUTO_PRUNE_LOGS'			=> 'Installer le MOD « Délestage automatique des journaux »',
	'INSTALL_AUTO_PRUNE_LOGS_CONFIRM'	=> 'Êtes-vous prêt à installer le MOD « Délestage automatique des journaux » ?',

	'AUTO_PRUNE_LOGS'					=> 'Délestage automatique des journaux',
	'AUTO_PRUNE_LOGS_EXPLAIN'			=> 'UMIL effectuera automatiquement, dans la base de données, tous les changements nécessaires pour le MOD « Délestage automatique des journaux ».',

	'UNINSTALL_AUTO_PRUNE_LOGS'			=> 'Désinstaller le MOD « Délestage automatique des journaux »',
	'UNINSTALL_AUTO_PRUNE_LOGS_CONFIRM'	=> 'Êtes-vous prêt à désinstaller le MOD « Délestage automatique des journaux » ? Tous les réglages et données sauvegardées par ce MOD seront supprimés !',

	'UPDATE_AUTO_PRUNE_LOGS'			=> 'Mettre à jour le MOD « Délestage automatique des journaux »',
	'UPDATE_AUTO_PRUNE_LOGS_CONFIRM'	=> 'Êtes-vous prêt à mettre à jour le MOD « Délestage automatique des journaux » ?',

	'APL_CHECK_CONFIG_INSTALL'			=> 'Vérification et mise à jour des paramètres du MOD',
	'APL_CHECK_CONFIG_UNINSTALL'		=> 'Suppression des paramètres du MOD',
));
?>