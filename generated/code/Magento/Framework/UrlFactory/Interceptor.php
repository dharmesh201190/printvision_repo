<?php
namespace Magento\Framework\UrlFactory;

/**
 * Interceptor class for @see \Magento\Framework\UrlFactory
 */
class Interceptor extends \Magento\Framework\UrlFactory implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = 'Magento\\Framework\\UrlInterface')
    {
        $this->___init();
        parent::__construct($objectManager, $instanceName);
    }

    /**
     * {@inheritdoc}
     */
    public function create(array $data = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'create');
        if (!$pluginInfo) {
            return parent::create($data);
        } else {
            return $this->___callPlugins('create', func_get_args(), $pluginInfo);
        }
    }
}
