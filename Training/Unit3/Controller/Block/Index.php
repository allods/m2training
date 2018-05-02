<?php
namespace Training\Unit3\Controller\Block;

use Magento\Framework\App\Action\Action;

class Index extends Action
{
    public function execute()
    {
        $layout = $this->_view->getLayout();
        $block = $layout->createBlock('Training\Unit3\Block\Test');

        $this->getResponse()->appendBody($block->toHtml());
    }
}
