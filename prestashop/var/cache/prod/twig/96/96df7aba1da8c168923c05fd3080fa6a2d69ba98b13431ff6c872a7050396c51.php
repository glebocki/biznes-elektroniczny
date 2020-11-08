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

/* @PrestaShop/Admin/Improve/International/Tax/Blocks/tax_options.html.twig */
class __TwigTemplate_ef12707885718503f1d799592733ac789a87da82e9cc1f910c5dd7b271a70460 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'tax_options_rest' => [$this, 'block_tax_options_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 26
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Improve/International/Tax/Blocks/tax_options.html.twig", 26);
        // line 27
        echo "
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["taxOptionsForm"] ?? null), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_taxes_save_options")]);
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tax options", [], "Admin.International.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-block row\">
    <div class=\"card-text\">
      <div class=\"form-group row\">
        <label class=\"form-control-label\" for=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["taxOptionsForm"] ?? null), "options", []), "enable_tax", []), "vars", []), "id", []), "html", null, true);
        echo "\">
          ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable tax", [], "Admin.International.Feature"), "html", null, true);
        echo "
        </label>
        <div class=\"col-sm\">
          ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["taxOptionsForm"] ?? null), "options", []), "enable_tax", []), 'widget', ["attr" => ["class" => "js-enable-tax"]]);
        echo "
            <small class=\"form-text\">
              ";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select whether or not to include tax on purchases.", [], "Admin.International.Help"), "html", null, true);
        echo "
            </small>
        </div>
      </div>
      <div class=\"form-group row\">
        <label class=\"form-control-label\" for=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["taxOptionsForm"] ?? null), "options", []), "display_tax_in_cart", []), "vars", []), "id", []), "html", null, true);
        echo "\">
          ";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Display tax in the shopping cart", [], "Admin.International.Feature"), "html", null, true);
        echo "
        </label>
        <div class=\"col-sm\">
          ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["taxOptionsForm"] ?? null), "options", []), "display_tax_in_cart", []), 'widget', ["attr" => ["class" => "js-display-in-cart"]]);
        echo "
          <small class=\"form-text\">
            ";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select whether or not to display tax on a distinct line in the cart.", [], "Admin.International.Help"), "html", null, true);
        echo "
          </small>
        </div>
      </div>
      <div class=\"form-group row\">
        <label for=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["taxOptionsForm"] ?? null), "options", []), "tax_address_type", []), "vars", []), "id", []), "html", null, true);
        echo "\" class=\"form-control-label\">
          ";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Based on", [], "Admin.International.Feature"), "html", null, true);
        echo "
        </label>
        <div class=\"col-sm\">
          ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["taxOptionsForm"] ?? null), "options", []), "tax_address_type", []), 'widget');
        echo "
        </div>
      </div>
      <div class=\"form-group row\">
        <label class=\"form-control-label\" for=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["taxOptionsForm"] ?? null), "options", []), "use_eco_tax", []), "vars", []), "id", []), "html", null, true);
        echo "\">
          ";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Use ecotax", [], "Admin.International.Feature"), "html", null, true);
        echo "
        </label>
        <div class=\"col-sm\">
          ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["taxOptionsForm"] ?? null), "options", []), "use_eco_tax", []), 'widget');
        echo "
          ";
        // line 71
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["taxOptionsForm"] ?? null), "options", []), "use_eco_tax", []), "vars", []), "value", []) != 0)) {
            // line 72
            echo "            <small class=\"form-text\">
              ";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("If you disable the ecotax, the ecotax for all your products will be set to 0.", [], "Admin.International.Help"), "html", null, true);
            echo "
            </small>
          ";
        }
        // line 76
        echo "        </div>
      </div>
      ";
        // line 78
        if ($this->getAttribute($this->getAttribute(($context["taxOptionsForm"] ?? null), "options", [], "any", false, true), "eco_tax_rule_group", [], "any", true, true)) {
            // line 79
            echo "        ";
            echo $context["ps"]->getform_group_row($this->getAttribute($this->getAttribute(($context["taxOptionsForm"] ?? null), "options", []), "eco_tax_rule_group", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ecotax", [], "Admin.International.Feature"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Define the ecotax (e.g. French ecotax: 19.6%).", [], "Admin.International.Help")]);
            // line 82
            echo "
      ";
        }
        // line 84
        echo "
      ";
        // line 85
        $this->displayBlock('tax_options_rest', $context, $blocks);
        // line 88
        echo "    </div>
  </div>
  <div class=\"card-footer\">
    <div class=\"d-flex justify-content-end\">
      <button class=\"btn btn-primary\">
        ";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
      </button>
    </div>
  </div>
</div>
";
        // line 98
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["taxOptionsForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 85
    public function block_tax_options_rest($context, array $blocks = [])
    {
        // line 86
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["taxOptionsForm"] ?? null), 'rest');
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/International/Tax/Blocks/tax_options.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 86,  180 => 85,  174 => 98,  166 => 93,  159 => 88,  157 => 85,  154 => 84,  150 => 82,  147 => 79,  145 => 78,  141 => 76,  135 => 73,  132 => 72,  130 => 71,  126 => 70,  120 => 67,  116 => 66,  109 => 62,  103 => 59,  99 => 58,  91 => 53,  86 => 51,  80 => 48,  76 => 47,  68 => 42,  63 => 40,  57 => 37,  53 => 36,  45 => 31,  39 => 28,  36 => 27,  34 => 26,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/International/Tax/Blocks/tax_options.html.twig", "/var/www/html/prestashop/src/PrestaShopBundle/Resources/views/Admin/Improve/International/Tax/Blocks/tax_options.html.twig");
    }
}
