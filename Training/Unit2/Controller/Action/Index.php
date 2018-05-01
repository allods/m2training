<?php
namespace Training\Unit2\Controller\Action;

use Magento\Framework\App\Action\Action;

class Index extends Action
{   
    public function execute() {
        $this->getResponse()->appendBody("HELLO WORLD");
    }
}