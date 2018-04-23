<?php
namespace Training\Test\Plugin\Catalog\Model;

use Magento\Catalog\Model\Product as Subject;

class ProductPlugin
{
    /**
     * To modify product price.
     * 
     * @param  Subject $subject
     * @param  float   $result
     * @return float
     */
    public function afterGetPrice(Subject $subject, $result)
    {
        return $result + 2;
    }
}
