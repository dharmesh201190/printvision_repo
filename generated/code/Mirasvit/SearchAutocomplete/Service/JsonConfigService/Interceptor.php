<?php
namespace Mirasvit\SearchAutocomplete\Service\JsonConfigService;

/**
 * Interceptor class for @see \Mirasvit\SearchAutocomplete\Service\JsonConfigService
 */
class Interceptor extends \Mirasvit\SearchAutocomplete\Service\JsonConfigService implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Filesystem $fs, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Mirasvit\SearchAutocomplete\Model\Config $config, \Mirasvit\SearchAutocomplete\Api\Repository\IndexRepositoryInterface $indexRepository, \Magento\Search\Helper\Data $searchHelper, \Magento\Search\Model\ResourceModel\Query\CollectionFactory $queryCollectionFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Mirasvit\SearchAutocomplete\Service\JsonAdvancedOptionsService $advancedService, \Magento\Framework\Url $urlBuilder, \Magento\Framework\Message\ManagerInterface $messageManager)
    {
        $this->___init();
        parent::__construct($fs, $scopeConfig, $config, $indexRepository, $searchHelper, $queryCollectionFactory, $storeManager, $advancedService, $urlBuilder, $messageManager);
    }

    /**
     * {@inheritdoc}
     */
    public function ensure($option)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'ensure');
        if (!$pluginInfo) {
            return parent::ensure($option);
        } else {
            return $this->___callPlugins('ensure', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function generate($option)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'generate');
        if (!$pluginInfo) {
            return parent::generate($option);
        } else {
            return $this->___callPlugins('generate', func_get_args(), $pluginInfo);
        }
    }
}
