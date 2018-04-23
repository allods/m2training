<?php
namespace Training\Test\Plugin\Theme\Block\Html;

use Magento\Theme\Block\Html\Footer as Subject;

class FooterPlugin
{
    /**
     * To modify copyright.
     *  
     * @param  Subject $subject
     * @param  string  $result
     * @return string
     */
    public function afterGetCopyright(Subject $subject, $result)
    {
        return __("Customized copyright!");
    }
}
