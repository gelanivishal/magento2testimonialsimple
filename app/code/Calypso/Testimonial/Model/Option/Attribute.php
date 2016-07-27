<?php
namespace Calypso\Testimonial\Model\Option;

class Attribute {
    public function getOptionsArray($attributeCode){
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $eavModel = $objectManager->create('\Magento\Eav\Model\Config');
        $attribute = $eavModel->getAttribute('catalog_product', $attributeCode);
        $options = $attribute->getSource()->getAllOptions();
        $optionsArray = array();
        if(count($options)){
            foreach($options as $key=>$value){
                if($value['value'] != ''){
                    $optionsArray[$value['value']] = $value['label'];
                }
            }
        }
        return $optionsArray;
    }
}