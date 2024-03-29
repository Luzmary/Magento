<?php

class Peerforest_Revolutionslider_Block_Adminhtml_Revolutionslider_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
  protected function _prepareForm()
  {
      $form = new Varien_Data_Form();
      $this->setForm($form);
      $fieldset = $form->addFieldset('revolutionslider_form', array('legend'=>Mage::helper('revolutionslider')->__('General information')));
     
      $fieldset->addField('title', 'text', array(
          'label'     => Mage::helper('revolutionslider')->__('Title'),
          'class'     => 'required-entry',
          'required'  => true,
          'name'      => 'title',
      ));
			
			if (!Mage::app()->isSingleStoreMode()) {
				$fieldset->addField('store_id', 'multiselect', array(
							'name'      => 'stores[]',
							'label'     => Mage::helper('cms')->__('Store View'),
							'title'     => Mage::helper('cms')->__('Store View'),
							'required'  => true,
							'values'    => Mage::getSingleton('adminhtml/system_store')->getStoreValuesForForm(false, true),
					));
			}
			else {
				$fieldset->addField('store_id', 'hidden', array(
						'name'      => 'stores[]',
						'value'     => Mage::app()->getStore(true)->getId()
				));
			}

      $fieldset->addField('filename', 'image', array(
          'label'     => Mage::helper('revolutionslider')->__('Image File'),
          'required'  => false,
          'name'      => 'filename',
	  ));
			
	  
	  
      $fieldset->addField('status', 'select', array(
          'label'     => Mage::helper('revolutionslider')->__('Status'),
          'name'      => 'status',
          'values'    => array(
              array(
                  'value'     => 1,
                  'label'     => Mage::helper('revolutionslider')->__('Enabled'),
              ),

              array(
                  'value'     => 2,
                  'label'     => Mage::helper('revolutionslider')->__('Disabled'),
              ),
          ),
      ));
      
      $fieldset->addField('data_transition', 'select', array(
          'label'     => Mage::helper('revolutionslider')->__('Data Transition'),
	  'required'  => false,
          'name'      => 'data_transition',
          'values'    => array(
              array(
                  'value'     => 'boxslide',
                  'label'     => Mage::helper('revolutionslider')->__('boxslide'),
              ),

              array(
                  'value'     => 'boxfade',
                  'label'     => Mage::helper('revolutionslider')->__('boxfade'),
              ),
	      array(
                  'value'     => 'slotzoom-horizontal',
                  'label'     => Mage::helper('revolutionslider')->__('slotzoom-horizontal'),
              ),

              array(
                  'value'     => 'slotzoom-vertical',
                  'label'     => Mage::helper('revolutionslider')->__('slotzoom-vertical'),
              ),
	      array(
                  'value'     => 'slotslide-horizontal',
                  'label'     => Mage::helper('revolutionslider')->__('slotslide-horizontal'),
              ),

              array(
                  'value'     => 'slotslide-vertical',
                  'label'     => Mage::helper('revolutionslider')->__('slotslide-vertical'),
              ),
	      array(
                  'value'     => 'slotfade-horizontal',
                  'label'     => Mage::helper('revolutionslider')->__('slotfade-horizontal'),
              ),

              array(
                  'value'     => 'slotfade-vertical',
                  'label'     => Mage::helper('revolutionslider')->__('slotfade-vertical'),
              ),
	      array(
                  'value'     => 'curtain-1',
                  'label'     => Mage::helper('revolutionslider')->__('curtain-1'),
              ),
	      array(
                  'value'     => 'curtain-2',
                  'label'     => Mage::helper('revolutionslider')->__('curtain-2'),
              ),
	      array(
                  'value'     => 'curtain-3',
                  'label'     => Mage::helper('revolutionslider')->__('curtain-3'),
              ),
	      array(
                  'value'     => 'slideleft',
                  'label'     => Mage::helper('revolutionslider')->__('slideleft'),
              ),
	      array(
                  'value'     => 'slideright',
                  'label'     => Mage::helper('revolutionslider')->__('slideright'),
              ),
	      array(
                  'value'     => 'slideup',
                  'label'     => Mage::helper('revolutionslider')->__('slideup'),
              ),
	      array(
                  'value'     => 'slidedown',
                  'label'     => Mage::helper('revolutionslider')->__('slidedown'),
              ),
	      array(
                  'value'     => 'slidehorizontal',
                  'label'     => Mage::helper('revolutionslider')->__('slidehorizontal'),
              ),
	      array(
                  'value'     => 'slidevertical',
                  'label'     => Mage::helper('revolutionslider')->__('slidevertical'),
              ),
	      array(
                  'value'     => 'fade',
                  'label'     => Mage::helper('revolutionslider')->__('fade'),
              ),
	      array(
                  'value'     => 'random',
                  'label'     => Mage::helper('revolutionslider')->__('random'),
              ),
	      
	      array(
                  'value'     => 'papercut',
                  'label'     => Mage::helper('revolutionslider')->__('papercut'),
              ),
	      array(
                  'value'     => 'flyin',
                  'label'     => Mage::helper('revolutionslider')->__('flyin'),
              ),
	      array(
                  'value'     => 'turnoff',
                  'label'     => Mage::helper('revolutionslider')->__('turnoff'),
              ),
	      array(
                  'value'     => 'cube',
                  'label'     => Mage::helper('revolutionslider')->__('cube'),
              ),
	      array(
                  'value'     => '3dcurtain-vertical',
                  'label'     => Mage::helper('revolutionslider')->__('3dcurtain-vertical'),
              ),
	      array(
                  'value'     => '3dcurtain-horizontal',
                  'label'     => Mage::helper('revolutionslider')->__('3dcurtain-horizontal'),
              ),
	      array(
                  'value'     => 'premium-random',
                  'label'     => Mage::helper('revolutionslider')->__('premium-random'),
              ),
          ),
      ));
      
      $fieldset->addField('data_slotamount', 'text', array(
          'label'     => Mage::helper('revolutionslider')->__('Data Slotamount'),
          'required'  => false,
          'name'      => 'data_slotamount',
      ));
      
      $fieldset->addField('data_masterspeed', 'text', array(
          'label'     => Mage::helper('revolutionslider')->__('Data Masterspeed'),
          'required'  => false,
          'name'      => 'data_masterspeed',
      ));
      
      $fieldset->addField('data_delay', 'text', array(
          'label'     => Mage::helper('revolutionslider')->__('Data Delay'),
          'required'  => false,
          'name'      => 'data_delay',
      ));
      
      
      
	 $fieldset->addField('sorting_order', 'text', array(
          'label'     => Mage::helper('revolutionslider')->__('Sorting Order'),
          'required'  => false,
		  'style'     => 'width:50px;',
          'name'      => 'sorting_order',
      ));				
			$fieldset->addField('weblink', 'text', array(
          'label'     => Mage::helper('revolutionslider')->__('Web Url'),
          'required'  => false,
          'name'      => 'weblink',
      ));
			
      $fieldset->addField('text', 'editor', array(
          'name'      => 'text',
          'label'     => Mage::helper('revolutionslider')->__('Content'),
          'title'     => Mage::helper('revolutionslider')->__('Content'),
          'style'     => 'width:280px; height:100px;',
          'wysiwyg'   => false,
          'required'  => false,
      ));
			
     
      if ( Mage::getSingleton('adminhtml/session')->getBannerSliderData() )
      {
          $data = Mage::getSingleton('adminhtml/session')->getBannerSliderData();
          Mage::getSingleton('adminhtml/session')->setBannerSliderData(null);
      } elseif ( Mage::registry('revolutionslider_data') ) {
          $data = Mage::registry('revolutionslider_data')->getData();
      }
	  $data['store_id'] = explode(',',$data['stores']);
	  $form->setValues($data);
	  
      return parent::_prepareForm();
  }
}