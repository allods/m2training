<?php
namespace Training\Unit2\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;
use Psr\Log\LoggerInterface;

class LogPageOutput implements ObserverInterface
{
    /** @var null|\Psr\Log\LoggerInterface */
    protected $_logger = null;

    /**
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger) {
        $this->_logger = $logger;
    }

    /**
     * @param \Magento\Framework\Event\Observer $observer
     * @return void
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     */
    public function execute(Observer $observer)
    {
        $response = $observer->getEvent()->getData('response');
        $body = $response->getBody();
        $this->_logger->addError('--------\n\n\n BODY \n\n\n ' . $body);
    }
}
