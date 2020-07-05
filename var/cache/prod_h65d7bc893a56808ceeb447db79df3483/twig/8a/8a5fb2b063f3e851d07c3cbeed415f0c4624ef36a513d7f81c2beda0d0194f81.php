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

/* @Storefront/storefront/page/content/index.html.twig */
class __TwigTemplate_dccff767de300bb4fc118c0f8ddc0d1e8c82080b674712c68541c27d9cdc1331 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'base_main_inner' => [$this, 'block_base_main_inner'],
            'page_content' => [$this, 'block_page_content'],
            'cms_breadcrumb' => [$this, 'block_cms_breadcrumb'],
            'page_content_blocks' => [$this, 'block_page_content_blocks'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Storefront/storefront/base.html.twig", "@Storefront/storefront/page/content/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_base_main_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"container-main\">
        ";
        // line 5
        $this->displayBlock('page_content', $context, $blocks);
        // line 21
        echo "    </div>
";
    }

    // line 5
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "            ";
        // line 7
        echo "            <div class=\"breadcrumb cms-breadcrumb cms-breadcrump container\">
                ";
        // line 8
        $this->displayBlock('cms_breadcrumb', $context, $blocks);
        // line 14
        echo "            </div>
            <div class=\"cms-page\">
                ";
        // line 16
        $this->displayBlock('page_content_blocks', $context, $blocks);
        // line 19
        echo "            </div>
        ";
    }

    // line 8
    public function block_cms_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "                    ";
        $this->loadTemplate("@Storefront/storefront/component/listing/breadcrumb.html.twig", "@Storefront/storefront/page/content/index.html.twig", 9)->display(twig_to_array(["navigationTree" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 10
($context["page"] ?? null), "header", [], "any", false, false, false, 10), "navigation", [], "any", false, false, false, 10), "tree", [], "any", false, false, false, 10), "category" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 11
($context["page"] ?? null), "header", [], "any", false, false, false, 11), "navigation", [], "any", false, false, false, 11), "active", [], "any", false, false, false, 11)]));
        // line 13
        echo "                ";
    }

    // line 16
    public function block_page_content_blocks($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "                    ";
        $this->loadTemplate("@Storefront/storefront/page/content/detail.html.twig", "@Storefront/storefront/page/content/index.html.twig", 17)->display(twig_array_merge($context, ["cmsPage" => twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cmsPage", [], "any", false, false, false, 17)]));
        // line 18
        echo "                ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/content/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 18,  102 => 17,  98 => 16,  94 => 13,  92 => 11,  91 => 10,  89 => 9,  85 => 8,  80 => 19,  78 => 16,  74 => 14,  72 => 8,  69 => 7,  67 => 6,  63 => 5,  58 => 21,  56 => 5,  53 => 4,  49 => 3,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/content/index.html.twig", "/opt/bitnami/apps/shopware/htdocs/vendor/shopware/storefront/Resources/views/storefront/page/content/index.html.twig");
    }
}
