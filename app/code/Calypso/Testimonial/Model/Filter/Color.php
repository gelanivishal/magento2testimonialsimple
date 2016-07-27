<?php

namespace Calypso\Testimonial\Model\Filter;
use Magento\Framework\Data\OptionSourceInterface;
class Color implements OptionSourceInterface{
    public function toOptionArray()
    {
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $eavModel = $objectManager->create('\Magento\Eav\Model\Config');
        $attribute = $eavModel->getAttribute('catalog_product', 'color');
        $options = $attribute->getSource()->getAllOptions();
        $res = [];
        foreach ($options as $value) {
            $res[] = ['value' => $value['value'], 'label' => $value['label']];
        }
        return $res;
    }
}