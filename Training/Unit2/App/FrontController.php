<?php
namespace Training\Unit2\App;

use Magento\Framework\App\FrontController as ParentFrontController;
use Magento\Framework\App\RouterList;
use Magento\Framework\App\Response\Http;
use Magento\Framework\App\RequestInterface;
use Psr\Log\LoggerInterface;

class FrontController extends ParentFrontController
{
    /** @var RouterList */
    protected $routerList;

    /** @var Http */
    protected $response;

    /** @var LoggerInterface */
    protected $logger;

    /**
     * @param RouterList      $routerList
     * @param Http            $response
     * @param LoggerInterface $logger
     */
    public function __construct(
        RouterList $routerList,
        Http $response,
        LoggerInterface $logger
    ) {
        $this->routerList = $routerList;
        $this->response = $response;
        $this->logger = $logger;

        parent::__construct($routerList, $response);
    }

    /**
     * Perform action and generate response
     *
     * @param RequestInterface $request
     * @return ResponseInterface|\Magento\Framework\Controller\ResultInterface
     * @throws \LogicException
     */
    public function dispatch(RequestInterface $request)
    {
        foreach ($this->routerList as $router) {
            $this->logger->addError(get_class($router));
        }

        return parent::dispatch($request);
    }
}