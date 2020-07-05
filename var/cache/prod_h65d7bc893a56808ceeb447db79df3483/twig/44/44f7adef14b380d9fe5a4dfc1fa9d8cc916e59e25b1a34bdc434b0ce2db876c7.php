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

/* @Storefront/storefront/layout/navigation/offcanvas/navigation.html.twig */
class __TwigTemplate_5765f2d82a90d15867d1c6e4d4e5ec4b1b9bcf2a4d42077f21a2bd6444602196 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'utilities_offcanvas_content' => [$this, 'block_utilities_offcanvas_content'],
            'layout_navigation_offcanvas_navigation_actions' => [$this, 'block_layout_navigation_offcanvas_navigation_actions'],
            'layout_navigation_offcanvas_navigation_action_language' => [$this, 'block_layout_navigation_offcanvas_navigation_action_language'],
            'layout_navigation_offcanvas_navigation_action_currency' => [$this, 'block_layout_navigation_offcanvas_navigation_action_currency'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/utilities/offcanvas.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Storefront/storefront/utilities/offcanvas.html.twig", "@Storefront/storefront/layout/navigation/offcanvas/navigation.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_utilities_offcanvas_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->displayBlock('layout_navigation_offcanvas_navigation_actions', $context, $blocks);
        // line 15
        echo "
    ";
        // line 16
        $this->loadTemplate("@Storefront/storefront/layout/navigation/offcanvas/categories.html.twig", "@Storefront/storefront/layout/navigation/offcanvas/navigation.html.twig", 16)->display(twig_array_merge($context, ["navigation" => ($context["navigation"] ?? null)]));
    }

    // line 4
    public function block_layout_navigation_offcanvas_navigation_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "        <nav class=\"nav navigation-offcanvas-actions\">
            ";
        // line 6
        $this->displayBlock('layout_navigation_offcanvas_navigation_action_language', $context, $blocks);
        // line 9
        echo "
            ";
        // line 10
        $this->displayBlock('layout_navigation_offcanvas_navigation_action_currency', $context, $blocks);
        // line 13
        echo "        </nav>
    ";
    }

    // line 6
    public function block_layout_navigation_offcanvas_navigation_action_language($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "                ";
        $this->loadTemplate("@Storefront/storefront/layout/header/actions/language-widget.html.twig", "@Storefront/storefront/layout/navigation/offcanvas/navigation.html.twig", 7)->display(twig_array_merge($context, ["position" => "offcanvas"]));
        // line 8
        echo "            ";
    }

    // line 10
    public function block_layout_navigation_offcanvas_navigation_action_currency($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "                ";
        $this->loadTemplate("@Storefront/storefront/layout/header/actions/currency-widget.html.twig", "@Storefront/storefront/layout/navigation/offcanvas/navigation.html.twig", 11)->display(twig_array_merge($context, ["position" => "offcanvas"]));
        // line 12
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/navigation/offcanvas/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 12,  97 => 11,  93 => 10,  89 => 8,  86 => 7,  82 => 6,  77 => 13,  75 => 10,  72 => 9,  70 => 6,  67 => 5,  63 => 4,  59 => 16,  56 => 15,  53 => 4,  49 => 3,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/navigation/offcanvas/navigation.html.twig", "/opt/bitnami/apps/shopware/htdocs/vendor/shopware/storefront/Resources/views/storefront/layout/navigation/offcanvas/navigation.html.twig");
    }
}
