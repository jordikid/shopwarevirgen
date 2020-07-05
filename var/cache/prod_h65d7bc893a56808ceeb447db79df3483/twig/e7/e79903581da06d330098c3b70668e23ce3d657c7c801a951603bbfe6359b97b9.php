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

/* @Storefront/storefront/layout/header/search.html.twig */
class __TwigTemplate_ab8bdde190e0411c5281ba0e5f87e2ea608dc947b4cea4b680312c82c208e742 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_header_search' => [$this, 'block_layout_header_search'],
            'layout_header_search_input_group' => [$this, 'block_layout_header_search_input_group'],
            'layout_header_search_input' => [$this, 'block_layout_header_search_input'],
            'layout_header_search_button' => [$this, 'block_layout_header_search_button'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('layout_header_search', $context, $blocks);
    }

    public function block_layout_header_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"collapse\"
         id=\"searchCollapse\">
        <div class=\"header-search\">
            <form action=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.search.page");
        echo "\"
                  method=\"get\"
                  data-search-form=\"true\"
                  data-url=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.search.suggest");
        echo "?search=\"
                  class=\"header-search-form\">
                ";
        // line 10
        $this->displayBlock('layout_header_search_input_group', $context, $blocks);
        // line 38
        echo "            </form>
        </div>
    </div>
";
    }

    // line 10
    public function block_layout_header_search_input_group($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "                    <div class=\"input-group\">
                        ";
        // line 12
        $this->displayBlock('layout_header_search_input', $context, $blocks);
        // line 24
        echo "
                        ";
        // line 25
        $this->displayBlock('layout_header_search_button', $context, $blocks);
        // line 36
        echo "                    </div>
                ";
    }

    // line 12
    public function block_layout_header_search_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "                            <input type=\"search\"
                                   name=\"search\"
                                   class=\"form-control header-search-input\"
                                   autocomplete=\"off\"
                                   autocapitalize=\"off\"
                                   placeholder=\"";
        // line 18
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.searchPlaceholder")), "html", null, true);
        echo "\"
                                   aria-label=\"";
        // line 19
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.searchPlaceholder")), "html", null, true);
        echo "\"
                                   maxlength=\"30\"
                                   value=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "searchTerm", [], "any", false, false, false, 21), "html", null, true);
        echo "\"
                            >
                        ";
    }

    // line 25
    public function block_layout_header_search_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "                            <div class=\"input-group-append\">
                                <button type=\"submit\"
                                        class=\"btn header-search-btn\"
                                        aria-label=\"";
        // line 29
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.searchButton")), "html", null, true);
        echo "\">
                                    <span class=\"header-search-icon\">
                                        ";
        // line 31
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/header/search.html.twig", 31);
        })())->display(twig_array_merge($context, ["name" => "search"]));
        // line 32
        echo "                                    </span>
                                </button>
                            </div>
                        ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/header/search.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  141 => 32,  133 => 31,  128 => 29,  123 => 26,  119 => 25,  112 => 21,  107 => 19,  103 => 18,  96 => 13,  92 => 12,  87 => 36,  85 => 25,  82 => 24,  80 => 12,  77 => 11,  73 => 10,  66 => 38,  64 => 10,  59 => 8,  53 => 5,  48 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/header/search.html.twig", "/opt/bitnami/apps/shopware/htdocs/vendor/shopware/storefront/Resources/views/storefront/layout/header/search.html.twig");
    }
}
