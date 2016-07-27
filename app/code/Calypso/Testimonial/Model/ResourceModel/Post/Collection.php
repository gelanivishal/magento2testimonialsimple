<?php
namespace Calypso\Testimonial\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'id';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Calypso\Testimonial\Model\Post', 'Calypso\Testimonial\Model\ResourceModel\Post');
    }

}
