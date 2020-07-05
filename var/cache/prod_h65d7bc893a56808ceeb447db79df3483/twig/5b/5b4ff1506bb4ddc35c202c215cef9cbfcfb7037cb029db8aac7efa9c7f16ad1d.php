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

/* @Storefront/storefront/layout/header/top-bar.html.twig */
class __TwigTemplate_f630fbbce62f1b1ef3cb9532c008223172aaab9d2c9e4eb977274096381938dd extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_header_top_bar' => [$this, 'block_layout_header_top_bar'],
            'layout_header_top_bar_language' => [$this, 'block_layout_header_top_bar_language'],
            'layout_header_top_bar_currency' => [$this, 'block_layout_header_top_bar_currency'],
            'layout_header_top_bar_service' => [$this, 'block_layout_header_top_bar_service'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('layout_header_top_bar', $context, $blocks);
    }

    public function block_layout_header_top_bar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"top-bar d-none d-lg-block\">
        <nav class=\"top-bar-nav\">
            ";
        // line 4
        $this->displayBlock('layout_header_top_bar_language', $context, $blocks);
        // line 7
        echo "
            ";
        // line 8
        $this->displayBlock('layout_header_top_bar_currency', $context, $blocks);
        // line 11
        echo "
            ";
        // line 12
        $this->displayBlock('layout_header_top_bar_service', $context, $blocks);
        // line 15
        echo "        </nav>
    </div>
";
    }

    // line 4
    public function block_layout_header_top_bar_language($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "                ";
        $this->loadTemplate("@Storefront/storefront/layout/header/actions/language-widget.html.twig", "@Storefront/storefront/layout/header/top-bar.html.twig", 5)->display($context);
        // line 6
        echo "            ";
    }

    // line 8
    public function block_layout_header_top_bar_currency($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "                ";
        $this->loadTemplate("@Storefront/storefront/layout/header/actions/currency-widget.html.twig", "@Storefront/storefront/layout/header/top-bar.html.twig", 9)->display($context);
        // line 10
        echo "            ";
    }

    // line 12
    public function block_layout_header_top_bar_service($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "                ";
        $this->loadTemplate("@Storefront/storefront/layout/header/actions/service-menu-widget.html.twig", "@Storefront/storefront/layout/header/top-bar.html.twig", 13)->display($context);
        // line 14
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/header/top-bar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  99 => 14,  96 => 13,  92 => 12,  88 => 10,  85 => 9,  81 => 8,  77 => 6,  74 => 5,  70 => 4,  64 => 15,  62 => 12,  59 => 11,  57 => 8,  54 => 7,  52 => 4,  48 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/header/top-bar.html.twig", "/opt/bitnami/apps/shopware/htdocs/vendor/shopware/storefront/Resources/views/storefront/layout/header/top-bar.html.twig");
    }
}
