<?php class ThemeOptions_ExtraConfig_Model_Latestlimit
{
    public function toOptionArray()
    {
        return array(
            array('value'=>'10', 'label'=>Mage::helper('ExtraConfig')->__('10')),
            array('value'=>'15', 'label'=>Mage::helper('ExtraConfig')->__('15')), 
            array('value'=>'20', 'label'=>Mage::helper('ExtraConfig')->__('20')),
            array('value'=>'25', 'label'=>Mage::helper('ExtraConfig')->__('25')),
            array('value'=>'30', 'label'=>Mage::helper('ExtraConfig')->__('30')),
            array('value'=>'35', 'label'=>Mage::helper('ExtraConfig')->__('35')),
            array('value'=>'40', 'label'=>Mage::helper('ExtraConfig')->__('40')),
            array('value'=>'45', 'label'=>Mage::helper('ExtraConfig')->__('45')),
            array('value'=>'50', 'label'=>Mage::helper('ExtraConfig')->__('50'))
        );
    }

}?>