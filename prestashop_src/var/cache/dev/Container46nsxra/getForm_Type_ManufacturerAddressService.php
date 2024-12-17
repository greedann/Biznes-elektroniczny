<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.manufacturer_address' shared service.

return $this->services['form.type.manufacturer_address'] = new \PrestaShopBundle\Form\Admin\Sell\Address\ManufacturerAddressType(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'}->getLanguages(), ${($_ = isset($this->services['prestashop.adapter.form.choice_provider.manufacturer_name_by_id']) ? $this->services['prestashop.adapter.form.choice_provider.manufacturer_name_by_id'] : $this->load('getPrestashop_Adapter_Form_ChoiceProvider_ManufacturerNameByIdService.php')) && false ?: '_'}->getChoices(), ${($_ = isset($this->services['prestashop.core.form.choice_provider.country_by_id']) ? $this->services['prestashop.core.form.choice_provider.country_by_id'] : $this->load('getPrestashop_Core_Form_ChoiceProvider_CountryByIdService.php')) && false ?: '_'}->getChoices(), ${($_ = isset($this->services['prestashop.adapter.form.choice_provider.country_state_by_id']) ? $this->services['prestashop.adapter.form.choice_provider.country_state_by_id'] : ($this->services['prestashop.adapter.form.choice_provider.country_state_by_id'] = new \PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider\CountryStateByIdChoiceProvider())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'}->getContext()->country->id, ${($_ = isset($this->services['prestashop.core.form.choice_provider.country_by_id']) ? $this->services['prestashop.core.form.choice_provider.country_by_id'] : $this->load('getPrestashop_Core_Form_ChoiceProvider_CountryByIdService.php')) && false ?: '_'}->getChoicesAttributes(), ${($_ = isset($this->services['prestashop.router']) ? $this->services['prestashop.router'] : $this->load('getPrestashop_RouterService.php')) && false ?: '_'});
