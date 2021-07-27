<?php

namespace SportsWear\Blog\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\UpgradeDataInterface;

class UpgradeData implements UpgradeDataInterface
{
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
       $setup->startSetup();

       if ($context->getVersion() && version_compare($context->getVersion(), '0.1.1') < 0) {
           $tableName = $setup->getTable('sportswear_blog_post');

           $data = [
                  'title'=> 'Post 101',
                  'content'=> 'This is the first content ...',
           ];

           $setup->getConnection()->insert($tableName, $data);
       }

       $setup->endSetup();
    }
}
