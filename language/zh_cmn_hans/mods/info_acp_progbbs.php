<?php
//
//	file: language/en/mods/info_acp_progbbs.php
//	author: 肖彤
//	begin: 03/12/2015
//	version: 0.0.1 - 03/12/2015
//	licence: http://opensource.org/licenses/gpl-license.php GNU Public License
//

// ignore
if ( !defined('IN_PHPBB') )
{
	exit;
}

// init lang ary, if it doesn't !
if ( empty($lang) || !is_array($lang) )
{
	$lang = array();
}

// administration
$lang = array_merge($lang, array(
	'ALLOW_BAIDU_SHARE'					=> '开启百度分享',
	'ALLOW_BAIDU_SHARE_EXPLAIN'	=> '如果选择这个选项为“是”，百度分享将会出现在首页，查看版面，查看帖子等页面的顶部，如果选择“否”，则不会显示百度分享',
	'NOAVATAR_NOAPPROVE'				=> '开启无头像禁止发帖',
	'NOAVATAR_NOAPPROVE_EXPLAIN'=> '如果选择这个选项为“是”，则仅设置了头像的注册用户可以发帖，而没有设置头像用户无法发帖，哪怕是交由版主审阅都不行。这样设置是为了防止机器人发垃圾帖，如果选择“否”，则按正常的流程，交由版主审阅或直接发帖',
));
?>