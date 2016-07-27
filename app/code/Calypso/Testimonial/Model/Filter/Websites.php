<?php

namespace Calypso\Testimonial\Model\Filter;
use Magento\Framework\Data\OptionSourceInterface;
class Websites implements OptionSourceInterface{
    public function toOptionArray(){
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $storeManager = $objectManager->create('\Magento\Store\Model\System\Store');
        $websiteCollection = $storeManager->getWebsiteValuesForForm();
        $res = [];
        if(count($websiteCollection)){
            foreach($websiteCollection as $key=>$value){
                $res[] = ['value' => $value['value'], 'label' => $value['label']];
            }
        }
        return $res;
    }
}