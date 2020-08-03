<?php
namespace LR\Rewrite\Controller\Account\LoginPost;

/**
 * Interceptor class for @see \LR\Rewrite\Controller\Account\LoginPost
 */
class Interceptor extends \LR\Rewrite\Controller\Account\LoginPost implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Customer\Model\Session $customerSession, \Magento\Customer\Api\AccountManagementInterface $customerAccountManagement, \Magento\Customer\Model\Url $customerHelperData, \Magento\Framework\Data\Form\FormKey\Validator $formKeyValidator, \Magento\Customer\Model\Account\Redirect $accountRedirect)
    {
        $this->___init();
        parent::__construct($context, $customerSession, $customerAccountManagement, $customerHelperData, $formKeyValidator, $accountRedirect);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        if (!$pluginInfo) {
            return parent::execute();
        } else {
            return $this->___callPlugins('execute', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function createCsrfValidationException(\Magento\Framework\App\RequestInterface $request) : ?\Magento\Framework\App\Request\InvalidRequestException
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'createCsrfValidationException');
        if (!$pluginInfo) {
            return parent::createCsrfValidationException($request);
        } else {
            return $this->___callPlugins('createCsrfValidationException', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function validateForCsrf(\Magento\Framework\App\RequestInterface $request) : ?bool
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validateForCsrf');
        if (!$pluginInfo) {
            return parent::validateForCsrf($request);
        } else {
            return $this->___callPlugins('validateForCsrf', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        if (!$pluginInfo) {
            return parent::dispatch($request);
        } else {
            return $this->___callPlugins('dispatch', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getActionFlag()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getActionFlag');
        if (!$pluginInfo) {
            return parent::getActionFlag();
        } else {
            return $this->___callPlugins('getActionFlag', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getRequest()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRequest');
        if (!$pluginInfo) {
            return parent::getRequest();
        } else {
            return $this->___callPlugins('getRequest', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getResponse()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getResponse');
        if (!$pluginInfo) {
            return parent::getResponse();
        } else {
            return $this->___callPlugins('getResponse', func_get_args(), $pluginInfo);
        }
    }
}
