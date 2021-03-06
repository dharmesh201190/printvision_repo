<?php
/**
 * @category  Apptrian
 * @package   Apptrian_Subcategories
 * @author    Apptrian
 * @copyright Copyright (c) 2017 Apptrian (http://www.apptrian.com)
 * @license   http://www.apptrian.com/license Proprietary Software License EULA
 */
 
namespace Apptrian\Subcategories\Model\Config;

use Magento\Framework\Exception\LocalizedException;

class Heading extends \Magento\Framework\App\Config\Value
{
    /**
     * @return $this
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function beforeSave()
    {
        $value = $this->getValue();
        $validator = \Zend_Validate::is(
            $value,
            'Regex',
            ['pattern' => '/^[\p{L}\p{N}_,;:!&#\+\*\$\?\|\'\.\-\ ]*$/iu']
        );
        
        if (!$validator) {
            $message = __(
                'Please correct subcategories heading: "%1".',
                $value
            );
            throw new LocalizedException($message);
        }
        
        return $this;
    }
}
