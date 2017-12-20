<?php
class News_IndexController extends Mage_Core_Controller_Front_Action
{

    public function indexAction()
    {

        $date = Mage::getModel('news/news');

        $collection = $date->getCollection();
        foreach($collection as $date_to){
            print_r($date_to->getData());
            print_r($date_to->getDateTo());
        }


    }
}

?>