<?php

namespace SportsWear\Blog\Model\ResourceModel\Post;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    public function _construct()
    {
        $this->_init('SportsWear\Blog\Model\Post', 'SportsWear\Blog\ResourceModel\Post');
    }
}
