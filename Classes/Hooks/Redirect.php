<?php
namespace PITS\Loginredirect\Hooks;
/**
 * Class Redirect
 */
class Redirect
{
	public function chnageUrl(&$params,&$ref)
	{
		$config = unserialize( $GLOBALS['GLOBALS']['TYPO3_CONF_VARS']['EXT']['extConf']['loginredirect']);
		$user = $GLOBALS['TSFE']->fe_user->user;
	    if($user){
	      TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($ref->conf['redirectPageLogin']);
	      $params['redirectUrl'] = $ref->pi_getPageLink((int)$ref->conf['redirectPageLogin'],'',array('login' => 1));
	    }
	}
}