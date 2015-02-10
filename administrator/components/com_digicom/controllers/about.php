<?php
/**
* @package			DigiCom Joomla Extension
 * @author			themexpert.com
 * @version			$Revision: 341 $
 * @lastmodified	$LastChangedDate: 2013-10-10 14:28:28 +0200 (Thu, 10 Oct 2013) $
 * @copyright		Copyright (C) 2013 themexpert.com. All rights reserved.
* @license			GNU/GPLv3
*/

defined ('_JEXEC') or die ("Go away.");

jimport ('joomla.application.component.controller');

class DigiComAdminControllerAbout extends DigiComAdminController {

	var $_model = null;

	function __construct(){
		parent::__construct();
		require_once( JPATH_COMPONENT.DS.'helpers'.DS.'helper.php' );
		$this->registerTask ("", "showAbout");
	}

	function showAbout(){
		$view = $this->getView("About", "html");
		$view->display();
	}

	function vimeo(){
   		JRequest::setVar( 'view', 'About' );
		JRequest::setVar( 'layout', 'vimeo'  );
		$view = $this->getView("About", "html");
		$view->setLayout("vimeo");
		$view->vimeo();
		die();
	}
};

?>