<?php
namespace Calypso\Testimonial\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements InstallSchemaInterface
{
    /**
     * Installs DB schema for a module
     *
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;

        $installer->startSetup();

        $table = $installer
            ->getConnection()
            ->newTable($installer->getTable('calypso_testimonial'))
            ->addColumn(
                'id',
                Table::TYPE_SMALLINT,
                null,
                ['identity' => true, 'nullable' => false, 'primary' => true],
                'ID'
            )
            ->addColumn(
                'url_key',
                Table::TYPE_TEXT,
                100,
                ['nullable' => true, 'default' => null]
            )
            ->addColumn(
                'color',
                Table::TYPE_INTEGER,
                10,
                ['nullable' => true, 'default' => null]
            )
            ->addColumn(
                'title',
                Table::TYPE_TEXT,
                255,
                ['nullable' => false],
                'Testimonial Title'
            )
            ->addColumn(
                'content',
                Table::TYPE_TEXT,
                '2M',
                [],
                'Testimonial Content'
            )
            ->addColumn(
                'image',
                Table::TYPE_TEXT,
                '256',
                [],
                'Testimonial Image'
            )
            ->addColumn(
                'message',
                Table::TYPE_TEXT,
                '',
                [],
                'Testimonial Message'
            )
            ->addColumn(
                'is_active',
                Table::TYPE_SMALLINT,
                null,
                ['nullable' => false, 'default' => '1'],
                'Is Testimonial Active?'
            )
            ->addColumn(
                'store_id',
                Table::TYPE_SMALLINT,
                null,
                ['nullable' => false, 'default' => '0'],
                'Store id'
            )
            ->addColumn(
                'website_id',
                Table::TYPE_SMALLINT,
                null,
                ['nullable' => false, 'default' => '0'],
                'Website Id'
            )
            ->addColumn(
                'creation_time',
                Table::TYPE_DATETIME,
                null, ['nullable' => false],
                'Creation Time'
            )
            ->addColumn(
                'update_time',
                Table::TYPE_DATETIME,
                null,
                ['nullable' => false],
                'Update Time'
            )
            ->addColumn(
                'date_from',
                \Magento\Framework\DB\Ddl\Table::TYPE_DATE,
                null,
                ['nullable' => true],
                'Date From'
            )
            ->setComment('Calypso Testimonial');

        $installer->getConnection()->createTable($table);

        $installer->endSetup();
    }

}
