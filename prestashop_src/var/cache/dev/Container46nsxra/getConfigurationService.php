<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\PsAccounts\Adapter\Configuration' shared service.

return $this->services['PrestaShop\\Module\\PsAccounts\\Adapter\\Configuration'] = new \PrestaShop\Module\PsAccounts\Adapter\Configuration(${($_ = isset($this->services['ps_accounts.context']) ? $this->services['ps_accounts.context'] : $this->load('getPsAccounts_ContextService.php')) && false ?: '_'});