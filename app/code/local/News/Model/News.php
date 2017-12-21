<?php
class News_Model_News extends Mage_Core_Model_Abstract
{
     protected function _construct()
     {
       // parent::_construct();
         $this->_init('news/news');
     }
}

?>