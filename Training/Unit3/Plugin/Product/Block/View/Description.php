<?php
namespace Training\Unit3\Plugin\Product\Block\View;

use Magento\Catalog\Block\Product\View\Description as Subject;

class Description
{
    public function beforeToHtml(Subject $subject)
    {
        $subject->setTemplate('Training_Unit3::description.phtml');
        $subject->getProduct()->setDescription('Test description!!!');
    }
}
