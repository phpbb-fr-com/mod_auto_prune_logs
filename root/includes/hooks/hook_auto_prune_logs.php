<?php
//
//	file: includes/hooks/hook_apl.php
//	author: phpbb-fr mod team
//	author: ernadoo
//	begin: 02/01/2013
//	version: 1.0.0 - 02/01/2013
//	licence: http://opensource.org/licenses/gpl-license.php GNU Public License
//

// ignore
if (!defined('IN_PHPBB'))
{
	exit;
}

// define function
function apl()
{
	global $config, $db;

	$prune_log_next_time = $prune_log_day = 0;

	if (!empty($config['prune_log_next_time']))
	{
		$prune_log_next_time = (int) $config['prune_log_next_time'];
	}

	if (!empty($config['prune_log_day']))
	{
		$prune_log_day = (int) $config['prune_log_day'];
	}

	$now = time();

	if ($now > $prune_log_next_time)
	{
		if (!empty($config['prune_admin_log_day']))
		{
			$sql = 'DELETE FROM ' . LOG_TABLE . '
				WHERE log_type = 0
					AND log_time < ' . ($now - (int) $config['prune_admin_log_day'] * 86400);
			$db->sql_query($sql);
		}

		if (!empty($config['prune_mod_log_day']))
		{
			$sql = 'DELETE FROM ' . LOG_TABLE . '
				WHERE log_type = 1
					AND log_time < ' . ($now - (int) $config['prune_mod_log_day'] * 86400);
			$db->sql_query($sql);
		}

		if (!empty($config['prune_log_next_time']))
		{
			set_config('prune_log_next_time', ($now + (int) $prune_log_day * 86400), 1);
		}
	}
}

// start hook
$phpbb_hook->register('phpbb_user_session_handler', 'apl');