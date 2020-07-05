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

/* @Storefront/storefront/element/cms-element-product-listing.html.twig */
class __TwigTemplate_1d99d52f8afe5ea9da368228cd97fec37e440aa33e6626e13b86d172d937aece extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'element_product_listing' => [$this, 'block_element_product_listing'],
            'element_product_listing_wrapper' => [$this, 'block_element_product_listing_wrapper'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('element_product_listing', $context, $blocks);
    }

    public function block_element_product_listing($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        // line 3
        echo "    ";
        $context["searchResult"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "data", [], "any", false, false, false, 3), "listing", [], "any", false, false, false, 3);
        // line 4
        echo "    ";
        $context["listingColumns"] = "col-sm-6 col-lg-4 col-xl-3";
        // line 5
        echo "
    ";
        // line 6
        if ((($context["section"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["section"] ?? null), "type", [], "any", false, false, false, 6) == "sidebar"))) {
            // line 7
            echo "        ";
            $context["listingColumns"] = "col-sm-6 col-lg-6 col-xl-4";
            // line 8
            echo "    ";
        }
        // line 9
        echo "
    ";
        // line 10
        $context["slot"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cmsPage", [], "any", false, false, false, 10), "firstElementOfType", [0 => "product-listing"], "method", false, false, false, 10);
        // line 11
        echo "
    ";
        // line 12
        $context["filterUrl"] = null;
        // line 13
        echo "    ";
        $context["dataUrl"] = null;
        // line 14
        echo "
    ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["searchResult"] ?? null), "currentFilters", [], "any", false, false, false, 15), "navigationId", [], "any", false, false, false, 15)) {
            // line 16
            echo "        ";
            $context["filterUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("frontend.cms.navigation.filter", ["navigationId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["searchResult"] ?? null), "currentFilters", [], "any", false, false, false, 16), "navigationId", [], "any", false, false, false, 16)]);
            // line 17
            echo "        ";
            $context["dataUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("frontend.cms.navigation.page", ["navigationId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["searchResult"] ?? null), "currentFilters", [], "any", false, false, false, 17), "navigationId", [], "any", false, false, false, 17)]);
            // line 18
            echo "    ";
        }
        // line 19
        echo "
    ";
        // line 20
        $context["sidebar"] = (($context["sectionType"] ?? null) == "sidebar");
        // line 21
        echo "    ";
        $context["params"] = ["slots" => twig_get_attribute($this->env, $this->source, ($context["slot"] ?? null), "id", [], "any", false, false, false, 21), "no-aggregations" => 1];
        // line 22
        echo "
    ";
        // line 23
        $this->displayBlock('element_product_listing_wrapper', $context, $blocks);
    }

    public function block_element_product_listing_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "        ";
        $this->loadTemplate("@Storefront/storefront/component/product/listing.html.twig", "@Storefront/storefront/element/cms-element-product-listing.html.twig", 24)->display(twig_array_merge($context, ["searchResult" =>         // line 25
($context["searchResult"] ?? null), "dataUrl" =>         // line 26
($context["dataUrl"] ?? null), "filterUrl" =>         // line 27
($context["filterUrl"] ?? null), "params" =>         // line 28
($context["params"] ?? null), "sidebar" =>         // line 29
($context["sidebar"] ?? null), "boxLayout" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 30
($context["element"] ?? null), "translated", [], "any", false, false, false, 30), "config", [], "any", false, false, false, 30), "boxLayout", [], "any", false, false, false, 30), "value", [], "any", false, false, false, 30), "displayMode" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 31
($context["element"] ?? null), "translated", [], "any", false, false, false, 31), "config", [], "any", false, false, false, 31), "displayMode", [], "any", false, false, false, 31), "value", [], "any", false, false, false, 31), "listingColumns" =>         // line 32
($context["listingColumns"] ?? null)]));
        // line 34
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/element/cms-element-product-listing.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  121 => 34,  119 => 32,  118 => 31,  117 => 30,  116 => 29,  115 => 28,  114 => 27,  113 => 26,  112 => 25,  110 => 24,  103 => 23,  100 => 22,  97 => 21,  95 => 20,  92 => 19,  89 => 18,  86 => 17,  83 => 16,  81 => 15,  78 => 14,  75 => 13,  73 => 12,  70 => 11,  68 => 10,  65 => 9,  62 => 8,  59 => 7,  57 => 6,  54 => 5,  51 => 4,  48 => 3,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/element/cms-element-product-listing.html.twig", "/opt/bitnami/apps/shopware/htdocs/vendor/shopware/storefront/Resources/views/storefront/element/cms-element-product-listing.html.twig");
    }
}
