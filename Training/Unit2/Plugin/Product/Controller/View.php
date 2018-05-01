<?php
namespace Training\Unit2\Plugin\Product\Controller;

use Magento\Catalog\Controller\Product\View as Subject;

class View
{
    public function beforeExecute(Subject $subject)
    {
        // echo "BEFORE<BR>"; exit;
    }

    public function aroundExecute(Subject $subject, callable $proceed)
    {
        echo "ONE"; exit;
    }

    public function afterExecute(Subject $subject, $result)
    {
        // echo "AFTER"; exit;
    }
}