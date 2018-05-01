<?php
namespace Training\Unit2\Controller;

use Magento\Framework\App\Router\NoRouteHandlerInterface;
use Magento\Framework\App\RequestInterface;

class NoRouteHandler implements NoRouteHandlerInterface
{
    /**
     * Check and process no route request
     *
     * @param \Magento\Framework\App\RequestInterface $request
     * @return bool
     */
    public function process(RequestInterface $request)
    {
        $moduleName = 'cms';
        $controllerName = 'index';
        $actionName = 'index';
        $request->setModuleName($moduleName)
            ->setControllerName($controllerName)
            ->setActionName($actionName);

        return true;
    }
}