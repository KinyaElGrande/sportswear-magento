<?php

namespace SportsWear\Blog\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Post extends AbstractDb
{
    /**
     * Post Abstract Resource constructor.
     */
    public function _construct()
    {
        $this->_init('sportswear_blog_post', 'post_id');
    }
}
