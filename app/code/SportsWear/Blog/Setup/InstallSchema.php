<?php

namespace SportsWear\Blog\Setup;

use Magento\Backend\Block\Widget\Tab;
use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $tableName = $setup->getTable('sportswear_blog_post');

        if (!$setup->getConnection()->isTableExists($tableName)) {
            $table = $setup->getConnection()->newTable($tableName)
                ->addColumn('post_id', Table::TYPE_INTEGER, null,
                    ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary'=> true],
                    'ID'
                )
                ->addColumn('title', Table::TYPE_TEXT, null,['nullable' => false], 'Title')
                ->addColumn('content',Table::TYPE_TEXT, null, ['nullable' => false], 'Content')
                ->addColumn('created_at', Table::TYPE_TIMESTAMP, null, ['nullable' => false, 'default'=>Table::TIMESTAMP_INIT], 'Created At')
                ->addColumn('updated_at', Table::TYPE_TIMESTAMP, null, ['nullable' => false, 'default'=>Table::TIMESTAMP_INIT_UPDATE], 'Updated At')
                ->setComment('SportsWear Blog - Posts');
            $setup->getConnection()->createTable($table);
        }

        $setup->endSetup();
    }
}
