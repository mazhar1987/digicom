<?php
/**
* @package			DigiCom Joomla Extension
 * @author			themexpert.com
 * @version			$Revision: 341 $
 * @lastmodified	$LastChangedDate: 2013-10-10 14:28:28 +0200 (Thu, 10 Oct 2013) $
 * @copyright		Copyright (C) 2013 themexpert.com. All rights reserved.
* @license			GNU/GPLv3
*/

	// add to product fields for store Images "prodimages"
	$this->addField('#__digicom_products', 'prodimages', 'text', false, '');

	// default image for product
	$this->addField('#__digicom_products', 'defprodimage', 'varchar(500)', false, '');

	@mkdir( JPATH_ROOT . DS . 'images' . DS . 'stories' . DS . 'digicom' . DS . 'categories' );
	@mkdir( JPATH_ROOT . DS . 'images' . DS . 'stories' . DS . 'digicom' . DS . 'categories' . DS . 'thumb' );

	@mkdir( JPATH_ROOT . DS . 'images' . DS . 'stories' . DS . 'digicom' . DS . 'products'  );
	@mkdir( JPATH_ROOT . DS . 'images' . DS . 'stories' . DS . 'digicom' . DS . 'products' . DS . 'thumb' );

?>