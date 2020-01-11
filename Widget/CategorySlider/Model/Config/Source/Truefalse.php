<?php
namespace Widget\CategorySlider\Model\Config\Source;
 
class Truefalse implements \Magento\Framework\Option\ArrayInterface
{
    const TRUE = true;
    const FALSE = false;
    
    public function toOptionArray()
    {
        return [
                ['value' => self:: TRUE, 'label' => __('Enable')], 
                ['value' => self:: FALSE, 'label' => __('Disable')]
                ];            
    }
}