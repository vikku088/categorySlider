<?php
/**
 * Copyright © 2015 Widget . All rights reserved.
 */
namespace Widget\CategorySlider\Helper;
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{

	/**
     * @param \Magento\Framework\App\Helper\Context $context
     */
	protected $_category;
	protected $_registry;
	/**
	 * @var \Magento\Framework\App\Config\ScopeConfigInterface
	 */
 	protected $scopeConfig;

	protected $topMenu;
	protected $_categoryFactory;

	protected $mainTitle;
	protected $tagLine;

   /**
	* @param \Magento\Framework\App\Helper\Context $context
	* @param array $data
	*/
   	public function __construct(
	\Magento\Framework\App\Helper\Context $context,
	   \Magento\Framework\Registry $registry,
	   \Magento\Catalog\Model\Category $category,
	   \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
   ) {
	   $this->_registry = $registry;
	   $this->_category = $category;
	   $this->scopeConfig = $scopeConfig;
	   parent::__construct($context);
   }
	public function getCurrentCategory(){
		return $this->_registry->registry('current_category');
	} 
	public function getCategoryCollection($id){
		return $this->_category->load($id);
	}
   	public function getconfigVal($data) {
		$storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
		return $this->scopeConfig->getValue($data, $storeScope);
	}
}