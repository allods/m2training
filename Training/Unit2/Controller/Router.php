<?php
namespace Training\Unit2\Controller;

use Magento\Framework\App\RouterInterface;
use Magento\Framework\App\ActionFactory;
use Magento\Framework\App\RequestInterface;

class Router implements RouterInterface
{
    /** @var ActionFactory */
    protected $actionFactory;

    /**
     * @param ActionFactory $actionFactory
     */
    public function __construct(ActionFactory $actionFactory)
    {
        $this->actionFactory = $actionFactory;
    }

    /**
     * @param  RequestInterface $request
     * @return null|Http
     */
    public function match(RequestInterface $request) {
        $info = $request->getPathInfo();
        /** To make it work with every url, remove if condition. */
        if (preg_match("%^/(test)-(.*?)-(.*?)$%", $info, $m)) {
            $request->setPathInfo(sprintf("/%s/%s/%s", $m[1], $m[2], $m[3]));

            return $this->actionFactory->create('Magento\Framework\App\Action\Forward', ['request' => $request]);
        }
        
        return null;
    }
}