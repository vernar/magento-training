<?php
/**
 * File: Test.php.
 * User: dmitry
 * Date: 21.09.2019
 */

namespace Unit1\Test\MagentoU;

use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Catalog\Model\ProductFactory;
use Magento\Checkout\Model\Session;

class Test
{
    protected $justAParameter;

    protected $data;

    protected $unitProductRepository;

    public function __construct(
        ProductRepositoryInterface $productRepository,
        ProductFactory $productFactory,
        Session $session,
        \Unit1\Test\Api\ProductRepositoryInterface $unit1ProductRepository,
        $justAParameter = false,
        array $data = []
    ) {
        $this->justAParameter = $justAParameter;
        $this->data = $data;
        $this->unitProductRepository = $unit1ProductRepository;
    }
}
