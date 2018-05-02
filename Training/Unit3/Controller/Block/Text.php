<?php
namespace Training\Unit3\Controller\Block;

use Magento\Framework\App\Action\Action;

class Text extends Action
{
    public function execute()
    {
        $block = $this->_view->getLayout()->createBlock('Magento\Framework\View\Element\Text');
        $block->setText("Hello world from text block !");
        
        $this->getResponse()->appendBody($block->toHtml());
    }
}
