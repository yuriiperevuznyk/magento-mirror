<?php
class News_IndexController extends Mage_Core_Controller_Front_Action
{

    public function indexAction()
    {

        $posts = Mage::getModel('news/news')->getCollection();
        foreach ($posts as $blogpost) {
            echo '<h3>' . $blogpost->getId() . '</h3>';
            echo $blogpost->getTitle();
            echo nl2br($blogpost->getPost());
            echo $blogpost->getTitle();

        }
    }

    public function newsListAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }


}
?>