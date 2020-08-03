<?php
namespace Magento\Search\Model\SearchEngine;

/**
 * Interceptor class for @see \Magento\Search\Model\SearchEngine
 */
class Interceptor extends \Magento\Search\Model\SearchEngine implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Search\Model\AdapterFactory $adapterFactory)
    {
        $this->___init();
        parent::__construct($adapterFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function search(\Magento\Framework\Search\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'search');
        if (!$pluginInfo) {
            return parent::search($request);
        } else {
            return $this->___callPlugins('search', func_get_args(), $pluginInfo);
        }
    }
}
