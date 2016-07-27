<?php

namespace Calypso\Testimonial\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

/**
 * Upgrade the Cms module DB scheme
 */
class UpgradeSchema implements UpgradeSchemaInterface
{
    /**
     * {@inheritdoc}
     */
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        if (version_compare($context->getVersion(), '1.0.1', '<')) {
            $installer = $setup;

            $installer->startSetup();
            /**
             * Create table 'calypso_testimonial_store'
             */
            $table = $installer->getConnection()->newTable(
                $installer->getTable('calypso_testimonial_store')
            )->addColumn(
                'testimonial_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT,
                null,
                ['nullable' => false, 'primary' => true],
                'Testimonial ID'
            )->addColumn(
                'store_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT,
                null,
                ['unsigned' => true, 'nullable' => false, 'primary' => true],
                'Store ID'
            )->addIndex(
                $installer->getIdxName('calypso_testimonial_store', ['store_id']),
                ['store_id']
            )->addForeignKey(
                $installer->getFkName('calypso_testimonial_store', 'testimonial_id', 'cms_block', 'id'),
                'testimonial_id',
                $installer->getTable('calypso_testimonial'),
                'id',
                \Magento\Framework\DB\Ddl\Table::ACTION_CASCADE
            )->addForeignKey(
                $installer->getFkName('calypso_testimonial_store', 'store_id', 'store', 'store_id'),
                'store_id',
                $installer->getTable('store'),
                'store_id',
                \Magento\Framework\DB\Ddl\Table::ACTION_CASCADE
            )->setComment(
                'Testimonial Store Linkage Table'
            );
            $installer->getConnection()->createTable($table);

            $installer->endSetup();
        }
    }
}
