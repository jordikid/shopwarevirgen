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

/* @Storefront/administration/index.html.twig */
class __TwigTemplate_da1e7d23a5184edd5f2cbb4667a770f95fa7ba2acea1d7b0e6f8df7dfed45701 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'administration_stylesheets' => [$this, 'block_administration_stylesheets'],
            'administration_scripts' => [$this, 'block_administration_scripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Administration/administration/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Administration/administration/index.html.twig", "@Storefront/administration/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_administration_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->displayParentBlock("administration_stylesheets", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/storefront/administration/css/storefront.css"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "U"), "html", null, true);
        echo "\" />
";
    }

    // line 9
    public function block_administration_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        $this->displayParentBlock("administration_scripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/storefront/administration/js/storefront.js"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "U"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@Storefront/administration/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 12,  69 => 10,  65 => 9,  57 => 6,  51 => 4,  47 => 3,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/administration/index.html.twig", "/opt/bitnami/apps/shopware/htdocs/vendor/shopware/storefront/Resources/views/administration/index.html.twig");
    }
}
