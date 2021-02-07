<?php
namespace GrupoHenrySchein\Label\Block\Product;

use Magento\Framework\Registry;
use Magento\Framework\View\Element\Template;

class Label extends Template
{
    private $product;

    public function __construct(Template\Context $context, Registry $registry, array $data = []) {
        parent::__construct($context, $data);
        $this->product = $registry->registry('product');
    }

    public function checkCurrentProductLabelEnable() {
        return (bool)$this->product->getLabelEnable();
    }

    public function getCurrentProductLabel() {
        return $this->product->getLabelValue();
    }
}