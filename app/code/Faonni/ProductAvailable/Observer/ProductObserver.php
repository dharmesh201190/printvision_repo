<?php
/**
 * Copyright © 2011-2018 Karliuka Vitalii(karliuka.vitalii@gmail.com)
 * 
 * See COPYING.txt for license details.
 */
namespace Faonni\ProductAvailable\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Faonni\ProductAvailable\Helper\Data as ProductAvailableHelper;

/**
 * Product Observer
 */
class ProductObserver implements ObserverInterface
{
    /**
     * ProductAvailable Helper
     *
     * @var \Faonni\ProductAvailable\Helper\Data
     */
    protected $_helper; 
	
    /**
     * Initialize Observer
     *
     * @param ProductAvailableHelper $helper
     */
    public function __construct(
		ProductAvailableHelper $helper
    ) {
		$this->_helper = $helper;
    }
	
    /**
     * Handler For Load Product Event
     *
     * @param Observer $observer
     * @return void
     */
    public function execute(Observer $observer)
    {
		if (!$this->_helper->isAvailablePrice()) {
			$product = $observer->getEvent()->getProduct();
			$product->setCanShowPrice(false);
		}
    }
} 