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

/* @PrestaShop/Admin/Improve/International/Geolocation/index.html.twig */
class __TwigTemplate_207ff5f7877cd29b1070484b1283148d8b3e696b2952e63211ea1164f71b3137 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 26
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/International/Geolocation/index.html.twig", 26);
        $this->blocks = [
            'content' => [$this, 'block_content'],
            'geolocation_form_rest' => [$this, 'block_geolocation_form_rest'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 29
        list($context["geolocationByIpAddressForm"], $context["geolocationIpAddressWhitelistForm"], $context["geolocationOptionsForm"]) =         [$this->getAttribute(($context["geolocationForm"] ?? null), "geolocation_by_id_address", []), $this->getAttribute(($context["geolocationForm"] ?? null), "geolocation_ip_address_whitelist", []), $this->getAttribute(($context["geolocationForm"] ?? null), "geolocation_options", [])];
        // line 26
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 31
    public function block_content($context, array $blocks = [])
    {
        // line 32
        echo "  ";
        if ( !($context["geolocationDatabaseAvailable"] ?? null)) {
            // line 33
            echo "    <div class=\"row\">
      <div class=\"col\">
        <div class=\"alert alert-warning\" role=\"alert\">
          <span class=\"alert-text\">
            ";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("In order to use Geolocation, please download [1]this file[/1] and extract it (using Winrar or Gzip) into the /app/Resources/geoip/ directory.", ["[1]" => "<a href=\"http://geolite.maxmind.com/download/geoip/database/GeoLite2-City.mmdb.gz\" target=\"_blank\">", "[/1]" => "<a/>"], "Admin.International.Feature");
            echo "
          </span>
        </div>
      </div>
    </div>
  ";
        }
        // line 43
        echo "
  ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["geolocationForm"] ?? null), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_geolocation_save_options")]);
        echo "
    <div class=\"row justify-content-center\">
      <div class=\"col-xl-10\">
        ";
        // line 47
        $this->loadTemplate("@PrestaShop/Admin/Improve/International/Geolocation/Blocks/geolocation_by_ip_address.html.twig", "@PrestaShop/Admin/Improve/International/Geolocation/index.html.twig", 47)->display($context);
        // line 48
        echo "      </div>

      <div class=\"col-xl-10\">
        ";
        // line 51
        $this->loadTemplate("@PrestaShop/Admin/Improve/International/Geolocation/Blocks/geolocation_options.html.twig", "@PrestaShop/Admin/Improve/International/Geolocation/index.html.twig", 51)->display($context);
        // line 52
        echo "      </div>

      <div class=\"col-xl-10\">
        ";
        // line 55
        $this->loadTemplate("@PrestaShop/Admin/Improve/International/Geolocation/Blocks/geolocation_ip_address_whitelist.html.twig", "@PrestaShop/Admin/Improve/International/Geolocation/index.html.twig", 55)->display($context);
        // line 56
        echo "      </div>
    </div>

    ";
        // line 59
        $this->displayBlock('geolocation_form_rest', $context, $blocks);
        // line 62
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["geolocationForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 59
    public function block_geolocation_form_rest($context, array $blocks = [])
    {
        // line 60
        echo "      ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["geolocationForm"] ?? null), 'rest');
        echo "
    ";
    }

    // line 65
    public function block_javascripts($context, array $blocks = [])
    {
        // line 66
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/geolocation.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/International/Geolocation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 68,  117 => 66,  114 => 65,  107 => 60,  104 => 59,  97 => 62,  95 => 59,  90 => 56,  88 => 55,  83 => 52,  81 => 51,  76 => 48,  74 => 47,  68 => 44,  65 => 43,  56 => 37,  50 => 33,  47 => 32,  44 => 31,  40 => 26,  38 => 29,  22 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/International/Geolocation/index.html.twig", "/var/www/html/prestashop/src/PrestaShopBundle/Resources/views/Admin/Improve/International/Geolocation/index.html.twig");
    }
}
