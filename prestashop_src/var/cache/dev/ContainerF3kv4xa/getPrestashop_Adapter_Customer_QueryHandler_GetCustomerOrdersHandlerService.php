<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.customer.query_handler.get_customer_orders_handler' shared service.

return $this->services['prestashop.adapter.customer.query_handler.get_customer_orders_handler'] = new \PrestaShop\PrestaShop\Adapter\Customer\QueryHandler\GetCustomerOrdersHandler(${($_ = isset($this->services['prestashop.core.localization.locale.context_locale']) ? $this->services['prestashop.core.localization.locale.context_locale'] : $this->load('getPrestashop_Core_Localization_Locale_ContextLocaleService.php')) && false ?: '_'});
