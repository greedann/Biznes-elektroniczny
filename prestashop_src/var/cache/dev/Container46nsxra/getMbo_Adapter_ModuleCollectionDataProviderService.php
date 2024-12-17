<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mbo.adapter.module_collection_data_provider' shared service.

return $this->services['mbo.adapter.module_collection_data_provider'] = new \PrestaShop\Module\Mbo\ModuleCollectionDataProvider(${($_ = isset($this->services['prestashop.core.admin.data_provider.module_interface']) ? $this->services['prestashop.core.admin.data_provider.module_interface'] : $this->getPrestashop_Core_Admin_DataProvider_ModuleInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.admin.module.repository']) ? $this->services['prestashop.core.admin.module.repository'] : $this->getPrestashop_Core_Admin_Module_RepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.presenter.module']) ? $this->services['prestashop.adapter.presenter.module'] : $this->load('getPrestashop_Adapter_Presenter_ModuleService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.admin.tab.repository']) ? $this->services['prestashop.core.admin.tab.repository'] : $this->load('getPrestashop_Core_Admin_Tab_RepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'});
