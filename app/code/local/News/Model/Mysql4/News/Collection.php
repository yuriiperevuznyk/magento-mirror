<?php
class News_Model_Mysql4_News_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract {
    protected function _construct()
    {
        $this->_init('news/news');
    }
}
?>