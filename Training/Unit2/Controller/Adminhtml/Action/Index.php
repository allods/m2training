<?php
namespace Training\Unit2\Controller\Adminhtml\Action;

use Magento\Backend\App\Action;

class Index extends Action
{
    public function execute()
    {
        // $this->getResponse()->appendBody("HELLO WORLD");

        return $this->_redirect('catalog/category/edit/id/2');
    }

    /**
     * Check Permission.
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        $secret = $this->getRequest()->getParam('secret');
        
        return isset($secret) && (int)$secret == 1;
    }
}
