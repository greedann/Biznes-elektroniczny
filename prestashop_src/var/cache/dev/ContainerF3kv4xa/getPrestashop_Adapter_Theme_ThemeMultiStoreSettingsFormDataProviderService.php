<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.theme.theme_multi_store_settings_form_data_provider' shared service.

return $this->services['prestashop.adapter.theme.theme_multi_store_settings_form_data_provider'] = new \PrestaShop\PrestaShop\Adapter\Theme\ThemeMultiStoreSettingsFormDataProvider(${($_ = isset($this->services['prestashop.adapter.multistore_feature']) ? $this->services['prestashop.adapter.multistore_feature'] : $this->getPrestashop_Adapter_MultistoreFeatureService()) && false ?: '_'}->isUsed(), ${($_ = isset($this->services['prestashop.adapter.shop.context']) ? $this->services['prestashop.adapter.shop.context'] : ($this->services['prestashop.adapter.shop.context'] = new \PrestaShop\PrestaShop\Adapter\Shop\Context())) && false ?: '_'}->isSingleShopContext());
