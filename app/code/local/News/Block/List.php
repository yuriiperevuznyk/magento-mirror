<?php
class News_Block_List extends Mage_Core_Block_Template
{

   public function getNewsList()
   {
       $newscollection = Mage::getModel('news/news')->getCollection();
       return $newscollection;
       
   }
      
}