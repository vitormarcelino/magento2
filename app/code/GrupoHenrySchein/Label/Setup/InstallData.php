<?php

namespace GrupoHenrySchein\Label\Setup;

use Magento\Eav\Setup\EavSetup;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
	 /**
     * {@inheritdoc}
     */

	 
    private $eavSetupFactory;

	 /**
     * Constructor
     *
     * @param \Magento\Eav\Setup\EavSetupFactory $eavSetupFactory
     */
	public function __construct(EavSetupFactory $eavSetupFactory)
	{
		$this->eavSetupFactory = $eavSetupFactory;
	}
	
	public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
	{
		/** @var EavSetup $eavSetup */

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		
		$eavSetup->removeAttribute(\Magento\Catalog\Model\Product::ENTITY,'label');

		
		/**
        * Add attributes to the eav/attribute
        */
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'label_enable',
			[
				'group' => 'Label',
				'type' => 'int',
				'backend' => '',
				'frontend' => '',
				'label' => 'Ativar Label',
				'input' => 'boolean',
				'class' => '',
				'source' =>'Magento\Catalog\Model\Product\Attribute\Source\Boolean',
				'global' => 1,
				'visible' => true,
				'required' => false,
				'user_defined' => true,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'sort_order' => 1,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'label_value',
			[
                'group' => 'Label',
                'type' => 'text',
                'backend' => '',
                'frontend' => '',
                'label' => 'Label do Produto',
                'note' => 'Label para ser exibido junto ao produto no catálogo.',
                'input' => 'text',
                'class' => '',
                'source' => '',
                'global' => 1,
                'visible' => true,
                'required' => false,
                'user_defined' => true,
                'default' => '',
                'searchable' => false,
                'filterable' => false,
                'comparable' => false,
                'sort_order' => 2,
                'visible_on_front' => true,
                'used_in_product_listing' => true,
                'unique' => false,
                'apply_to' => ''
            ]
		);
}
}