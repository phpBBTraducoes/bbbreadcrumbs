<?php
/**
*
* BBbreadcrumbs
* @copyright (c) 2016 SiteSplat All rights reserved
* @license Proprietary
* Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 1.0.1] (https://github.com/phpBBTraducoes)
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_BREADCRUMBS'				=> 'BBbreadcrumbs',
	'SS_HELPER_NOTY'	            => 'SiteSplat BBcore não existe!<br /> Baixe o <a href="http://sitesplat.com" target="_blank">BBcore</a> e copie a pasta BBcore na sua pasta de extensão de sitesplat.',
	'BREADCRUMBS_NOTICE'	        => '<div class="phpinfo"><p>Não há configurações específicas para esta extensão. O breadrcumb está ativo e agora funcionará automaticamente nas páginas do fórum.</p></div>',
));

