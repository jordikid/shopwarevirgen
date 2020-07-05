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

/* @Storefront/storefront/page/error/error-404.html.twig */
class __TwigTemplate_67fa934d29ebd452017b44100492331288450da7fb2efa4ac5a8931ef5057eb7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'base_content' => [$this, 'block_base_content'],
            'not_found_error_content' => [$this, 'block_not_found_error_content'],
            'not_found_error_return' => [$this, 'block_not_found_error_return'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/page/error/_page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Storefront/storefront/page/error/_page.html.twig", "@Storefront/storefront/page/error/error-404.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_base_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <main class=\"content-main\">
        ";
        // line 5
        $this->displayBlock('not_found_error_content', $context, $blocks);
        // line 24
        echo "    </main>
";
    }

    // line 5
    public function block_not_found_error_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "            <div class=\"container mt-5\">
                <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/storefront/assets/illustration/404_error.svg"), "html", null, true);
        echo "\"
                     alt=\"";
        // line 8
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.404ErrorPageHeader")), "html", null, true);
        echo "\"
                     class=\"rounded mx-auto d-block w-75\"/>

                <h1 class=\"mt-5 text-center\">";
        // line 11
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.404ErrorPageHeader"));
        echo "</h1>
                <p class=\"text-center w-60-l\">";
        // line 12
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.404ErrorDescription"));
        echo "</p>

                ";
        // line 14
        $this->displayBlock('not_found_error_return', $context, $blocks);
        // line 22
        echo "            </div>
        ";
    }

    // line 14
    public function block_not_found_error_return($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "                    <div class=\"text-center\">
                        <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.home.page");
        echo "\"
                           class=\"btn btn-primary justify-center\">
                            ";
        // line 18
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.404ErrorReturn"));
        echo "
                        </a>
                    </div>
                ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/error/error-404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 18,  102 => 16,  99 => 15,  95 => 14,  90 => 22,  88 => 14,  83 => 12,  79 => 11,  73 => 8,  69 => 7,  66 => 6,  62 => 5,  57 => 24,  55 => 5,  52 => 4,  48 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/error/error-404.html.twig", "/opt/bitnami/apps/shopware/htdocs/vendor/shopware/storefront/Resources/views/storefront/page/error/error-404.html.twig");
    }
}
