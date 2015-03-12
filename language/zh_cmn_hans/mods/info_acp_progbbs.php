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
));
?>