<?php
namespace Training\Render\Block;

use Magento\Framework\View\Element\Html\Link as MagentoLink;
 
class Link extends MagentoLink
{
    /**
     * Render block html.
     * 
     * @return string
     */
    protected function _toHtml()
    {
        if (false != $this->getTemplate()) {
            return parent::_toHtml();
        }

        return '<li><a ' . $this->getLinkAttributes() . ' >' . $this->escapeHtml($this->getLabel()) . '</a></li>';
    }
}
