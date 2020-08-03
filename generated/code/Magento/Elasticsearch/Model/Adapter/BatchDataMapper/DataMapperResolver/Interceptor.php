<?php
namespace Magento\Elasticsearch\Model\Adapter\BatchDataMapper\DataMapperResolver;

/**
 * Interceptor class for @see \Magento\Elasticsearch\Model\Adapter\BatchDataMapper\DataMapperResolver
 */
class Interceptor extends \Magento\Elasticsearch\Model\Adapter\BatchDataMapper\DataMapperResolver implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Elasticsearch\Model\Adapter\BatchDataMapper\DataMapperFactory $dataMapperFactory)
    {
        $this->___init();
        parent::__construct($dataMapperFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function map(array $documentData, $storeId, array $context = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'map');
        if (!$pluginInfo) {
            return parent::map($documentData, $storeId, $context);
        } else {
            return $this->___callPlugins('map', func_get_args(), $pluginInfo);
        }
    }
}
