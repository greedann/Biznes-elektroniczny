<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.form.identifiable_object.data_handler.catalog_price_rule_form_data_handler' shared service.

return $this->services['prestashop.core.form.identifiable_object.data_handler.catalog_price_rule_form_data_handler'] = new \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler\CatalogPriceRuleFormDataHandler(${($_ = isset($this->services['prestashop.core.command_bus']) ? $this->services['prestashop.core.command_bus'] : $this->load('getPrestashop_Core_CommandBusService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.multistore_feature']) ? $this->services['prestashop.adapter.multistore_feature'] : $this->getPrestashop_Adapter_MultistoreFeatureService()) && false ?: '_'}->isUsed(), ${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'}->getContext()->shop->id);
