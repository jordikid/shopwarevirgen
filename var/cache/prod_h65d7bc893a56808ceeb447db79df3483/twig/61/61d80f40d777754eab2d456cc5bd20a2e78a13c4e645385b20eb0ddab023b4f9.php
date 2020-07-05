<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Storefront/storefront/element/cms-element-sidebar-filter.html.twig */
class __TwigTemplate_53aef42d13890d121c85fe573eb55a9df9adaaa7366e3be382cc0de9eddeaa3b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'element_sidebar_filter' => [$this, 'block_element_sidebar_filter'],
            'element_product_listing_filter_button' => [$this, 'block_element_product_listing_filter_button'],
            'element_product_listing_filter_button_icon' => [$this, 'block_element_product_listing_filter_button_icon'],
            'element_sidebar_filter_panel' => [$this, 'block_element_sidebar_filter_panel'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('element_sidebar_filter', $context, $blocks);
    }

    public function block_element_sidebar_filter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context["config"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "fieldConfig", [], "any", false, false, false, 2), "elements", [], "any", false, false, false, 2);
        // line 3
        echo "    ";
        $context["slot"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cmsPage", [], "any", false, false, false, 3), "firstElementOfType", [0 => "product-listing"], "method", false, false, false, 3);
        // line 4
        echo "
    <div class=\"cms-element-sidebar-filter\">
        ";
        // line 6
        $this->displayBlock('element_product_listing_filter_button', $context, $blocks);
        // line 19
        echo "
        ";
        // line 20
        $this->displayBlock('element_sidebar_filter_panel', $context, $blocks);
        // line 30
        echo "    </div>
";
    }

    // line 6
    public function block_element_product_listing_filter_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "            <button class=\"btn header-actions-btn filter-panel-wrapper-toggle\"
                    type=\"button\"
                    data-offcanvas-filter=\"true\"
                    aria-haspopup=\"true\"
                    aria-expanded=\"false\"
                    aria-label=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.menuLink"), "html", null, true);
        echo "\">
                ";
        // line 13
        $this->displayBlock('element_product_listing_filter_button_icon', $context, $blocks);
        // line 16
        echo "                ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterTitleText"), "html", null, true);
        echo "
            </button>
        ";
    }

    // line 13
    public function block_element_product_listing_filter_button_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "                    ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-sidebar-filter.html.twig", 14);
        })())->display(twig_array_merge($context, ["name" => "sliders-horizontal"]));
        // line 15
        echo "                ";
    }

    // line 20
    public function block_element_sidebar_filter_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "            <div id=\"filter-panel-wrapper\"
                 class=\"filter-panel-wrapper\"
                 data-offcanvas-filter-content=\"true\">
                ";
        // line 24
        $this->loadTemplate("@Storefront/storefront/component/listing/filter-panel.html.twig", "@Storefront/storefront/element/cms-element-sidebar-filter.html.twig", 24)->display(twig_array_merge($context, ["listing" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 25
($context["slot"] ?? null), "data", [], "any", false, false, false, 25), "listing", [], "any", false, false, false, 25), "sidebar" => (twig_get_attribute($this->env, $this->source,         // line 26
($context["block"] ?? null), "sectionPosition", [], "any", false, false, false, 26) == "sidebar")]));
        // line 28
        echo "            </div>
        ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/element/cms-element-sidebar-filter.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  125 => 28,  123 => 26,  122 => 25,  121 => 24,  116 => 21,  112 => 20,  108 => 15,  99 => 14,  95 => 13,  87 => 16,  85 => 13,  81 => 12,  74 => 7,  70 => 6,  65 => 30,  63 => 20,  60 => 19,  58 => 6,  54 => 4,  51 => 3,  48 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/element/cms-element-sidebar-filter.html.twig", "/opt/bitnami/apps/shopware/htdocs/vendor/shopware/storefront/Resources/views/storefront/element/cms-element-sidebar-filter.html.twig");
    }
}
