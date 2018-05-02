<?php
namespace Training\Unit3\Controller\Action;

use Magento\Framework\App\Action\Action;

class Index extends Action
{
    public function execute()
    {
        $block = $this->_view->getLayout()->createBlock('Training\Unit3\Block\Template');
        $block->setTemplate('Training_Unit3::test.phtml');

        $this->getResponse()->appendBody($block->toHtml());
    }
}
