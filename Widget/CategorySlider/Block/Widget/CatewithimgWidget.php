<?php
namespace Widget\CategorySlider\Block\Widget;

class CatewithimgWidget extends \Magento\Framework\View\Element\Template implements \Magento\Widget\Block\BlockInterface
{
	protected $_template = 'widget/categorywidget.phtml';

    /**
     * Default value for products count that will be shown
     */
     protected $_categoryHelper;
     protected $categoryFlatConfig;

     protected $topMenu;
     protected $_categoryFactory;

     protected $mainTitle;
     protected $tagLine;

    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magento\Catalog\Helper\Category $categoryHelper
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Catalog\Helper\Category $categoryHelper,
        \Magento\Catalog\Model\Indexer\Category\Flat\State $categoryFlatState,
        \Magento\Catalog\Model\CategoryFactory $categoryFactory,
        \Magento\Theme\Block\Html\Topmenu $topMenu
    ) {
        $this->_categoryHelper = $categoryHelper;
        $this->categoryFlatConfig = $categoryFlatState;
        $this->topMenu = $topMenu;
        $this->_categoryFactory = $categoryFactory;
        parent::__construct($context);
    }
    /**
     * Return categories helper
     */
    public function getCategoryHelper()
    {
        return $this->_categoryHelper;
    }

    public function getCategorymodel($id)
    {
         $_category = $this->_categoryFactory->create();
            $_category->load($id);
            return $_category;
    }
    /**
     * Retrieve current store categories
     *
     * @param bool|string $sorted
     * @param bool $asCollection
     * @param bool $toLoad
     * @return \Magento\Framework\Data\Tree\Node\Collection|\Magento\Catalog\Model\Resource\Category\Collection|array
     */

    /**
     * Retrieve collection of selected categories
    */
   public function getCategoryCollection()
    {
        $rootCat = $this->getData('parentcat');


        $category = $this->_categoryFactory->create();
        $collection = $category
                      ->getCollection()
                      ->addAttributeToSelect('image')
                      ->addIdFilter($rootCat);
        return $collection;
    }

    /**
     * Retrieve Item Margin for Category Slider
    */
    public function getMargin()
    {
        $margin = $this->getData('itemmargin');
        return $margin;
    }
    /**
     * Retrieve Max Items for Category Slider
    */
    public function getMaxItems()
    {
        $maxItmes = $this->getData('maxitems');
        return $maxItmes;
    }

    /**
     * Retrieve Direction Nav for Category Slider
    */
    public function getDirectionNav()
    {
        $directionNav = $this->getData('direction_nav');
        return $directionNav;
    }

    /**
     * Retrieve Min Items for Category Slider
    */
    public function getMinItems()
    {
        $minItmes = $this->getData('minitems');
        return $minItmes;
    }
    /**
     * Retrieve Item Width for Category Slider
    */
    public function getItemWidth(){
        $itemWidth = $this->getData('itemwidth');
        return $itemWidth;
    }
    /**
     * Retrieve Status for Category Slider
    */
    public function getStatus(){
        $status = $this->getData('enable');
        return $status;
    }
    /**
     * Retrieve animationLoop for Category Slider
    */
    public function getAnimationLoop()
    {
        $animationLoop = $this->getData('animationloop');
        return $animationLoop;
    }
    /**
     * Retrieve Control Nav for Category Slider
    */
    public function getControlNav()
    {
        $ControlNav = $this->getData('controlnave');
        return $ControlNav;
    }
    /**
     * Retrieve tag line for widget
    */
    public function getTagLine()
    {
        $tagLine = $this->getData('tagline');
        return $tagLine;
    }
    /**
     * Retrieve main title for widget
    */
    public function getMainTitle()
    {
        $mainTitle = $this->getData('blocktitle');
        return $mainTitle;
    }
}