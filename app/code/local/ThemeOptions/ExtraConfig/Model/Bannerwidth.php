<?php class ThemeOptions_ExtraConfig_Model_Bannerwidth
{
    public function toOptionArray()
    {
        return array(
            array('value'=>'template', 'label'=>Mage::helper('ExtraConfig')->__('Template Width')),
            array('value'=>'full', 'label'=>Mage::helper('ExtraConfig')->__('Full Width'))
        );
    }

}?>