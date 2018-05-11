<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['felogin']['beforeRedirect'][$_EXTKEY] = 'EXT:loginredirect/Classes/Hooks/Redirect.php:Redirect->chnageUrl';