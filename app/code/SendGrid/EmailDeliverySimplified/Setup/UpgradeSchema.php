<?php

namespace SendGrid\EmailDeliverySimplified\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

/**
 * @codeCoverageIgnore
 */
class UpgradeSchema implements UpgradeSchemaInterface
{
  /**
   * @var \Psr\Log\LoggerInterface
   */
    protected $_logger;

  /**
   * @param   LoggerInterface   $loggerInterface
   */
    public function __construct(\Psr\Log\LoggerInterface $loggerInterface)
    {
        $this->_logger = $loggerInterface;
    }

  /**
   * {@inheritdoc}
   * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
   */
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $this->_logger->debug('[SendGrid] Upgrade script is running.');

        $setup->startSetup();

        // Get module table
        $tableName = $setup->getTable('sendgrid_settings');

        // Check if the table already exists
        if (! $setup->getConnection()->isTableExists($tableName)) {
            $this->_logger->debug('[SendGrid] Upgrade script: sendgrid_settings table does not exist. Creating...');

            $table = $setup->getConnection()->newTable(
                $setup->getTable('sendgrid_settings')
            )->addColumn(
                'id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['identity' => true, 'nullable' => false, 'primary' => true],
                'Setting ID'
            )->addColumn(
                'key',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                ['nullable' => false],
                'Setting Key'
            )->addColumn(
                'value',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                '2M',
                ['nullable' => false],
                'Setting Value'
            )->setComment(
                'SendGrid Settings Table'
            );
  
            $setup->getConnection()->createTable($table);
        }

        $setup->endSetup();

        $this->_logger->debug('[SendGrid] Upgrade script is done.');
    }
}
