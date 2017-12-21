<?php


class News_Block_Adminhtml_News_Items_Grid extends Mage_Adminhtml_Block_Widget_Grid
{

    public function __construct()
    {
        parent::__construct();

        // Set a unique id for our grid
        $this->setId('id');

        // Default sort by column
        $this->setDefaultSort('id');
    }


    protected function _prepareCollection()
    {
        // Instantiate the collection of data to be display on the grid
        $collection = Mage::getModel('news/news')->getCollection();
        $this->setCollection($collection);
        parent::_prepareCollection();
        return $this;
    }


    // Set every column to be displayed on the grid
    protected function _prepareColumns()
    {

        $this->addColumn('id', array(
            'header' => Mage::helper('news')->__('Id'),
            'sortable' => true,
            'width' => '60',
            'index' => 'id'
        ));

        $this->addColumn('title', array(
            'header' => Mage::helper('news')->__('Title'),
            'sortable' => true,
            'width' => '60',
            'index' => 'title',
            'type'  => 'varchar'
        ));

        $this->addColumn('content', array(
            'header' => Mage::helper('news')->__('Content'),
            'sortable' => true,
            'width' => '60',
            'index' => 'content',
            'type'  => 'varchar'
        ));

        $this->addColumn('image', array(
            'header' => Mage::helper('news')->__('Image'),
            'sortable' => true,
            'width' => '60',
            'index' => 'image',
            'type'  => 'varchar'
        ));


        return parent::_prepareColumns();
    }

    public function getRowUrl($row)
    {
        // This is where our row data will link to
        return $this->getUrl('*/*/edit', array('id' => $row->getId()));
    }

}