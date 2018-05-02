<?php
namespace Training\Unit3\Block;

use Magento\Framework\View\Element\AbstractBlock;

class Test extends AbstractBlock
{
    public function _tohtml()
    {
        return '<b>Hello world from block!</b>';
    }
}
