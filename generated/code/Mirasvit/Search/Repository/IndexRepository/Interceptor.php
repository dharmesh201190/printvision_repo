<?php
namespace Mirasvit\Search\Repository\IndexRepository;

/**
 * Interceptor class for @see \Mirasvit\Search\Repository\IndexRepository
 */
class Interceptor extends \Mirasvit\Search\Repository\IndexRepository implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\EntityManager\EntityManager $entityManager, \Mirasvit\Search\Api\Data\IndexInterfaceFactory $indexFactory, \Mirasvit\Search\Model\ResourceModel\Index\CollectionFactory $indexCollectionFactory, \Magento\Framework\ObjectManagerInterface $objectManager, $indices = [])
    {
        $this->___init();
        parent::__construct($entityManager, $indexFactory, $indexCollectionFactory, $objectManager, $indices);
    }

    /**
     * {@inheritdoc}
     */
    public function getCollection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCollection');
        if (!$pluginInfo) {
            return parent::getCollection();
        } else {
            return $this->___callPlugins('getCollection', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function create()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'create');
        if (!$pluginInfo) {
            return parent::create();
        } else {
            return $this->___callPlugins('create', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function get($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'get');
        if (!$pluginInfo) {
            return parent::get($id);
        } else {
            return $this->___callPlugins('get', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function delete(\Mirasvit\Search\Api\Data\IndexInterface $index)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'delete');
        if (!$pluginInfo) {
            return parent::delete($index);
        } else {
            return $this->___callPlugins('delete', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Mirasvit\Search\Api\Data\IndexInterface $index)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        if (!$pluginInfo) {
            return parent::save($index);
        } else {
            return $this->___callPlugins('save', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getInstance($index)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getInstance');
        if (!$pluginInfo) {
            return parent::getInstance($index);
        } else {
            return $this->___callPlugins('getInstance', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getList()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getList');
        if (!$pluginInfo) {
            return parent::getList();
        } else {
            return $this->___callPlugins('getList', func_get_args(), $pluginInfo);
        }
    }
}
