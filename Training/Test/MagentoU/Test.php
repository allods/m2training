<?php
namespace Training\Test\MagentoU;

use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Catalog\Model\ProductFactory;
use Magento\Checkout\Model\Session;
use Training\Test\Api\Data\ProductRepositoryInterface as Unit1ProductRepository;

class Test
{
    /** @var ProductRepositoryInterface */
    protected $productRepository;

    /** @var ProductFactory */
    protected $productFactory;

    /** @var Session */
    protected $session;

    /** @var Unit1ProductRepository */
    protected $unit1ProductRepository;

    /** @var bool */
    protected $justAParameter;

    /** @var array */
    protected $data;

    /**
     * @param ProductRepositoryInterface $productRepository
     * @param ProductFactory             $productFactory
     * @param Session                    $session
     * @param Unit1ProductRepository     $unit1ProductRepository
     * @param boolean                    $justAParameter
     * @param array                      $data
     */
    function __construct(
        ProductRepositoryInterface $productRepository,
        ProductFactory $productFactory,
        Session $session,
        Unit1ProductRepository $unit1ProductRepository,
        $justAParameter = false,
        array $data
    ) {
        $this->productRepository = $productRepository;
        $this->productFactory = $productFactory;
        $this->session = $session;
        $this->unit1ProductRepository = $unit1ProductRepository;
        $this->justAParameter = $justAParameter;
        $this->data = $data;
    }

    public function log()
    {
        echo '<pre>';
        var_dump(
            get_class($this->unit1ProductRepository),
            $this->justAParameter,
            $this->data
        );
        echo '</pre>';
    }
}
