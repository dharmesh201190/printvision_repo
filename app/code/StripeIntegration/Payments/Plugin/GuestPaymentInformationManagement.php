<?php

namespace StripeIntegration\Payments\Plugin;

use Magento\Framework\Exception\CouldNotSaveException;

class GuestPaymentInformationManagement
{
    /**
     * @var \Magento\Checkout\Helper\Data
     */
    private $checkoutHelper;

    /**
     * @var \Magento\Quote\Api\GuestCartManagementInterface
     */
    private $cartManagement;

    /**
     * @param \Magento\Checkout\Helper\Data $checkoutHelper
     * @param \Magento\Quote\Api\GuestCartManagementInterface $cartManagement
     */
    public function __construct(
        \Magento\Checkout\Helper\Data $checkoutHelper,
        \Magento\Quote\Api\GuestCartManagementInterface $cartManagement
    ) {

        $this->checkoutHelper = $checkoutHelper;
        $this->cartManagement = $cartManagement;
    }

    /**
     * Set payment information and place order for a specified cart.
     *
     * Override this method to get correct exceptions instead
     * "An error occurred on the server. Please try to place the order again."
     *
     * @param \Magento\Checkout\Model\GuestPaymentInformationManagement $subject
     * @param \Closure $proceed
     * @param string $cartId
     * @param string $email
     * @param \Magento\Quote\Api\Data\PaymentInterface $paymentMethod
     * @param \Magento\Quote\Api\Data\AddressInterface|null $billingAddress
     * @throws \Magento\Framework\Exception\CouldNotSaveException
     * @return int Order ID.
     */
    public function aroundSavePaymentInformationAndPlaceOrder(
        \Magento\Checkout\Model\GuestPaymentInformationManagement $subject,
        \Closure $proceed,
        $cartId,
        $email,
        \Magento\Quote\Api\Data\PaymentInterface $paymentMethod,
        \Magento\Quote\Api\Data\AddressInterface $billingAddress
    ) {
        $subject->savePaymentInformation($cartId, $email, $paymentMethod, $billingAddress);
        try {
            $orderId = $this->cartManagement->placeOrder($cartId);
        } catch (\Exception $e) {
            throw new CouldNotSaveException(
                __($e->getMessage()),
                $e
            );
        }

        return $orderId;
    }
}
