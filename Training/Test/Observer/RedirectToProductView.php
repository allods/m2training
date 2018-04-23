<?php
namespace Training\Test\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;
use Magento\Framework\App\Response\RedirectInterface;
use Magento\Framework\App\ActionFlag;

class RedirectToProductView implements ObserverInterface
{
    /** @var \Magento\Framework\App\Response\RedirectInterface */
    protected $redirect;

    /** @var \Magento\Framework\App\ActionFlag */
    protected $actionFlag;

    /**
     * @param RedirectInterface $redirect
     * @param ActionFlag        $actionFlag
     */
    public function __construct(
        RedirectInterface $redirect,
        ActionFlag $actionFlag
    ) {
        $this->redirect = $redirect;
        $this->actionFlag = $actionFlag;
    }

    /**
     * @param \Magento\Framework\Event\Observer $observer
     * @return void
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     */
    public function execute(Observer $observer)
    {
        $request = $observer->getEvent()->getData('request');
        if ($request->getModuleName() != 'catalog' || $request->getControllerName() != 'product') {
            $controller = $observer->getControllerAction();
            $this->actionFlag->set('', \Magento\Framework\App\Action\Action::FLAG_NO_DISPATCH, true);
            $this->redirect->redirect($controller->getResponse(), 'catalog/product/view/id/1');
        }
    }
}
