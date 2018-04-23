<?php
namespace Training\Test\Plugin\Theme\Block\Html;

use Magento\Theme\Block\Html\Breadcrumbs as Subject;

class BreadcrumbsPlugin
{
    /**
     * To modify breadcrumb label before it will be added.
     * 
     * @param  Subject $Subject
     * @param  string  $crumbName
     * @param  array   $crumbInfo
     * @return array
     */
    public function beforeAddCrumb(Subject $Subject, $crumbName, $crumbInfo)
    {
        $crumbInfo['label'] = __($crumbInfo['label'] . '(!)');
        
        return [$crumbName, $crumbInfo];
    }
}
