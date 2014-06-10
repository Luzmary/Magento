<?php class ThemeOptions_ExtraConfig_Model_Banner
{
    public function toOptionArray()
    {
        return array(
            array('value'=>'1', 'label'=>Mage::helper('ExtraConfig')->__('BX Slider')),
            array('value'=>'2', 'label'=>Mage::helper('ExtraConfig')->__('Revolution Slider')),
            array('value'=>'3', 'label'=>Mage::helper('ExtraConfig')->__('Not Display'))
        );
    }

}?>