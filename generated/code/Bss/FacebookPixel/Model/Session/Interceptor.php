<?php
namespace Bss\FacebookPixel\Model\Session;

/**
 * Interceptor class for @see \Bss\FacebookPixel\Model\Session
 */
class Interceptor extends \Bss\FacebookPixel\Model\Session implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Request\Http $request, \Magento\Framework\Session\SidResolverInterface $sidResolver, \Magento\Framework\Session\Config\ConfigInterface $sessionConfig, \Magento\Framework\Session\SaveHandlerInterface $saveHandler, \Magento\Framework\Session\ValidatorInterface $validator, \Magento\Framework\Session\StorageInterface $storage, \Magento\Framework\Stdlib\CookieManagerInterface $cookieManager, \Magento\Framework\Stdlib\Cookie\CookieMetadataFactory $cookieMetadataFactory, \Magento\Framework\App\State $appState, ?\Magento\Framework\Session\SessionStartChecker $sessionStartChecker = null)
    {
        $this->___init();
        parent::__construct($request, $sidResolver, $sessionConfig, $saveHandler, $validator, $storage, $cookieManager, $cookieMetadataFactory, $appState, $sessionStartChecker);
    }

    /**
     * {@inheritdoc}
     */
    public function setAddToCart($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAddToCart');
        if (!$pluginInfo) {
            return parent::setAddToCart($data);
        } else {
            return $this->___callPlugins('setAddToCart', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAddToCart()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAddToCart');
        if (!$pluginInfo) {
            return parent::getAddToCart();
        } else {
            return $this->___callPlugins('getAddToCart', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function hasAddToCart()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasAddToCart');
        if (!$pluginInfo) {
            return parent::hasAddToCart();
        } else {
            return $this->___callPlugins('hasAddToCart', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setAddToWishlist($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAddToWishlist');
        if (!$pluginInfo) {
            return parent::setAddToWishlist($data);
        } else {
            return $this->___callPlugins('setAddToWishlist', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAddToWishlist()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAddToWishlist');
        if (!$pluginInfo) {
            return parent::getAddToWishlist();
        } else {
            return $this->___callPlugins('getAddToWishlist', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function hasAddToWishlist()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasAddToWishlist');
        if (!$pluginInfo) {
            return parent::hasAddToWishlist();
        } else {
            return $this->___callPlugins('hasAddToWishlist', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setAddSubscribe($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAddSubscribe');
        if (!$pluginInfo) {
            return parent::setAddSubscribe($data);
        } else {
            return $this->___callPlugins('setAddSubscribe', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAddSubscribe()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAddSubscribe');
        if (!$pluginInfo) {
            return parent::getAddSubscribe();
        } else {
            return $this->___callPlugins('getAddSubscribe', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function hasAddSubscribe()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasAddSubscribe');
        if (!$pluginInfo) {
            return parent::hasAddSubscribe();
        } else {
            return $this->___callPlugins('hasAddSubscribe', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function hasInitiateCheckout()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasInitiateCheckout');
        if (!$pluginInfo) {
            return parent::hasInitiateCheckout();
        } else {
            return $this->___callPlugins('hasInitiateCheckout', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setInitiateCheckout($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setInitiateCheckout');
        if (!$pluginInfo) {
            return parent::setInitiateCheckout($data);
        } else {
            return $this->___callPlugins('setInitiateCheckout', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getInitiateCheckout()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getInitiateCheckout');
        if (!$pluginInfo) {
            return parent::getInitiateCheckout();
        } else {
            return $this->___callPlugins('getInitiateCheckout', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function hasSearch()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasSearch');
        if (!$pluginInfo) {
            return parent::hasSearch();
        } else {
            return $this->___callPlugins('hasSearch', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setSearch($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setSearch');
        if (!$pluginInfo) {
            return parent::setSearch($data);
        } else {
            return $this->___callPlugins('setSearch', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSearch()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSearch');
        if (!$pluginInfo) {
            return parent::getSearch();
        } else {
            return $this->___callPlugins('getSearch', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function hasRegister()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasRegister');
        if (!$pluginInfo) {
            return parent::hasRegister();
        } else {
            return $this->___callPlugins('hasRegister', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setRegister($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setRegister');
        if (!$pluginInfo) {
            return parent::setRegister($data);
        } else {
            return $this->___callPlugins('setRegister', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getRegister()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRegister');
        if (!$pluginInfo) {
            return parent::getRegister();
        } else {
            return $this->___callPlugins('getRegister', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setActionPage($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setActionPage');
        if (!$pluginInfo) {
            return parent::setActionPage($data);
        } else {
            return $this->___callPlugins('setActionPage', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getActionPage()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getActionPage');
        if (!$pluginInfo) {
            return parent::getActionPage();
        } else {
            return $this->___callPlugins('getActionPage', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function hasActionPage()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasActionPage');
        if (!$pluginInfo) {
            return parent::hasActionPage();
        } else {
            return $this->___callPlugins('hasActionPage', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function writeClose()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'writeClose');
        if (!$pluginInfo) {
            return parent::writeClose();
        } else {
            return $this->___callPlugins('writeClose', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function __call($method, $args)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '__call');
        if (!$pluginInfo) {
            return parent::__call($method, $args);
        } else {
            return $this->___callPlugins('__call', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function start()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'start');
        if (!$pluginInfo) {
            return parent::start();
        } else {
            return $this->___callPlugins('start', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isSessionExists()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isSessionExists');
        if (!$pluginInfo) {
            return parent::isSessionExists();
        } else {
            return $this->___callPlugins('isSessionExists', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getData($key = '', $clear = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getData');
        if (!$pluginInfo) {
            return parent::getData($key, $clear);
        } else {
            return $this->___callPlugins('getData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSessionId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSessionId');
        if (!$pluginInfo) {
            return parent::getSessionId();
        } else {
            return $this->___callPlugins('getSessionId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getName');
        if (!$pluginInfo) {
            return parent::getName();
        } else {
            return $this->___callPlugins('getName', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setName($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setName');
        if (!$pluginInfo) {
            return parent::setName($name);
        } else {
            return $this->___callPlugins('setName', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function destroy(?array $options = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'destroy');
        if (!$pluginInfo) {
            return parent::destroy($options);
        } else {
            return $this->___callPlugins('destroy', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function clearStorage()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'clearStorage');
        if (!$pluginInfo) {
            return parent::clearStorage();
        } else {
            return $this->___callPlugins('clearStorage', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCookieDomain()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCookieDomain');
        if (!$pluginInfo) {
            return parent::getCookieDomain();
        } else {
            return $this->___callPlugins('getCookieDomain', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCookiePath()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCookiePath');
        if (!$pluginInfo) {
            return parent::getCookiePath();
        } else {
            return $this->___callPlugins('getCookiePath', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCookieLifetime()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCookieLifetime');
        if (!$pluginInfo) {
            return parent::getCookieLifetime();
        } else {
            return $this->___callPlugins('getCookieLifetime', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setSessionId($sessionId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setSessionId');
        if (!$pluginInfo) {
            return parent::setSessionId($sessionId);
        } else {
            return $this->___callPlugins('setSessionId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSessionIdForHost($urlHost)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSessionIdForHost');
        if (!$pluginInfo) {
            return parent::getSessionIdForHost($urlHost);
        } else {
            return $this->___callPlugins('getSessionIdForHost', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isValidForHost($host)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isValidForHost');
        if (!$pluginInfo) {
            return parent::isValidForHost($host);
        } else {
            return $this->___callPlugins('isValidForHost', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isValidForPath($path)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isValidForPath');
        if (!$pluginInfo) {
            return parent::isValidForPath($path);
        } else {
            return $this->___callPlugins('isValidForPath', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function regenerateId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'regenerateId');
        if (!$pluginInfo) {
            return parent::regenerateId();
        } else {
            return $this->___callPlugins('regenerateId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function expireSessionCookie()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'expireSessionCookie');
        if (!$pluginInfo) {
            return parent::expireSessionCookie();
        } else {
            return $this->___callPlugins('expireSessionCookie', func_get_args(), $pluginInfo);
        }
    }
}
