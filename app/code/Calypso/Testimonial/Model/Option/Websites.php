<?php
namespace Calypso\Testimonial\Model\Option;

class Websites {
    public function getOptionsArray(){
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $storeManager = $objectManager->create('\Magento\Store\Model\System\Store');
        $websiteCollection = $storeManager->getWebsiteValuesForForm();
        $optionsArray = array();
        if(count($websiteCollection)){
            foreach($websiteCollection as $key=>$value){
                if($value['value'] != ''){
                    $optionsArray[$value['value']] = $value['label'];
                }
            }
        }
        return $optionsArray;
    }
}