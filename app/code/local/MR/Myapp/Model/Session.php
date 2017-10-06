<?php
class MR_Myapp_Model_Session extends Mage_Core_Model_Session_Abstract {

 public function __construct() {
   $namespace = 'myapp';
   $namespace .= '_' . (Mage::app()->getStore()->getWebsite()->getCode());

   $this->init($namespace);
    Mage::dispatchEvent('myapp_session_init', array('myapp_session' => $this));
 }

}