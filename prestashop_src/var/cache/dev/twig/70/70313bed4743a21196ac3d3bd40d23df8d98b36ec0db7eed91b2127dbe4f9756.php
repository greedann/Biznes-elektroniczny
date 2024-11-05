<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Configure/AdvancedParameters/FeatureFlag/index.html.twig */
class __TwigTemplate_e9baae837d29079a89f52e17661b71a40bd24295a1ae918af5bc02a12b9d9460 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'feature_flag_form' => [$this, 'block_feature_flag_form'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/FeatureFlag/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/FeatureFlag/index.html.twig"));

        // line 28
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["featureFlagsForm"] ?? $this->getContext($context, "featureFlagsForm")), [0 => "PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig"], true);
        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/FeatureFlag/index.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 30
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 31
        echo "  ";
        if (($context["displayAllShopsContextForced"] ?? $this->getContext($context, "displayAllShopsContextForced"))) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "infotip", [0 => ($context["multistoreForcedContextInfoTip"] ?? $this->getContext($context, "multistoreForcedContextInfoTip")), 1 => true], "method"), "html", null, true);
        }
        // line 32
        echo "  <div class=\"row justify-content-center\">
    ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["featureFlagsForm"] ?? $this->getContext($context, "featureFlagsForm")), 'form_start', ["attr" => ["class" => "form col", "id" => "feature-flag-form"], "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_feature_flags_index")]);
        echo "
    ";
        // line 34
        $this->displayBlock('feature_flag_form', $context, $blocks);
        // line 66
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["featureFlagsForm"] ?? $this->getContext($context, "featureFlagsForm")), 'form_end');
        echo "
  </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 34
    public function block_feature_flag_form($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "feature_flag_form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "feature_flag_form"));

        // line 35
        echo "      <div class=\"card\" id=\"configuration_fieldset_general\">
        <h3 class=\"card-header\">
          <i class=\"material-icons\">settings</i> ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Experimental features", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
        </h3>

        <div class=\"card-block row\">
          <div class=\"card-text\">
            <div class=\"alert medium-alert alert-warning\" role=\"alert\">
              ";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Testing a feature before its official release can be exciting. However, you must be aware of the potential risks of such experiments:", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "
              <ul>
                <li>";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Experimental features are still under development. Enabling them could therefore have unintended consequences and cause data loss.", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</li>
                <li>";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("In any case, you should never experiment in production.", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</li>
              </ul>
            </div>
            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["featureFlagsForm"] ?? $this->getContext($context, "featureFlagsForm")), 'widget');
        echo "
          </div>
        </div>
        ";
        // line 52
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["featureFlagsForm"] ?? $this->getContext($context, "featureFlagsForm")), "vars", []), "data", []))) {
            // line 53
            echo "          <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
              <button type=\"submit\" id=\"submit-btn-feature-flag\" class=\"btn btn-primary\"
                      data-modal-title=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Are you sure you want to enable this experimental feature?", [], "Admin.Advparameters.Notification"), "html", null, true);
            echo "\"
                      data-modal-message=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You are about to enable a feature that is not stable yet. This should only be done in a test environment or in full knowledge of the potential risks.", [], "Admin.Advparameters.Notification"), "html", null, true);
            echo "\"
                      data-modal-apply=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable", [], "Admin.Actions"), "html", null, true);
            echo "\"
                      data-modal-cancel=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
            echo "\"
              >";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
            echo "</button>
            </div>
          </div>
        ";
        }
        // line 64
        echo "      </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 72
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/feature_flag.bundle.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/FeatureFlag/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 74,  187 => 72,  178 => 71,  167 => 64,  160 => 60,  156 => 59,  152 => 58,  148 => 57,  144 => 56,  139 => 53,  137 => 52,  131 => 49,  125 => 46,  121 => 45,  116 => 43,  107 => 37,  103 => 35,  94 => 34,  79 => 66,  77 => 34,  73 => 33,  70 => 32,  65 => 31,  56 => 30,  45 => 25,  43 => 28,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 *#}
{% extends '@PrestaShop/Admin/layout.html.twig' %}
{% trans_default_domain 'Admin.Advparameters.Feature' %}

{% form_theme featureFlagsForm 'PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig' %}

{% block content %}
  {% if displayAllShopsContextForced %}{{ ps.infotip(multistoreForcedContextInfoTip, true) }}{% endif %}
  <div class=\"row justify-content-center\">
    {{ form_start(featureFlagsForm, {attr : {class: 'form col', id:'feature-flag-form'}, action: path('admin_feature_flags_index') }) }}
    {% block feature_flag_form %}
      <div class=\"card\" id=\"configuration_fieldset_general\">
        <h3 class=\"card-header\">
          <i class=\"material-icons\">settings</i> {{ 'Experimental features'|trans }}
        </h3>

        <div class=\"card-block row\">
          <div class=\"card-text\">
            <div class=\"alert medium-alert alert-warning\" role=\"alert\">
              {{ 'Testing a feature before its official release can be exciting. However, you must be aware of the potential risks of such experiments:'|trans({}, 'Admin.Advparameters.Notification') }}
              <ul>
                <li>{{ 'Experimental features are still under development. Enabling them could therefore have unintended consequences and cause data loss.'|trans({}, 'Admin.Advparameters.Notification') }}</li>
                <li>{{ 'In any case, you should never experiment in production.'|trans({}, 'Admin.Advparameters.Notification') }}</li>
              </ul>
            </div>
            {{ form_widget(featureFlagsForm) }}
          </div>
        </div>
        {% if featureFlagsForm.vars.data is not empty %}
          <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
              <button type=\"submit\" id=\"submit-btn-feature-flag\" class=\"btn btn-primary\"
                      data-modal-title=\"{{ 'Are you sure you want to enable this experimental feature?'|trans({}, 'Admin.Advparameters.Notification') }}\"
                      data-modal-message=\"{{ 'You are about to enable a feature that is not stable yet. This should only be done in a test environment or in full knowledge of the potential risks.'|trans({}, 'Admin.Advparameters.Notification') }}\"
                      data-modal-apply=\"{{ 'Enable'|trans({}, 'Admin.Actions') }}\"
                      data-modal-cancel=\"{{ 'Cancel'|trans({}, 'Admin.Actions') }}\"
              >{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
            </div>
          </div>
        {% endif %}
      </div>
    {% endblock %}
    {{ form_end(featureFlagsForm) }}
  </div>

{% endblock %}

{% block javascripts %}
  {{ parent() }}

  <script src=\"{{ asset('themes/new-theme/public/feature_flag.bundle.js') }}\"></script>
{% endblock %}
", "@PrestaShop/Admin/Configure/AdvancedParameters/FeatureFlag/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/FeatureFlag/index.html.twig");
    }
}
