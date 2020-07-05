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

/* @Storefront/storefront/layout/header/actions/service-menu-widget.html.twig */
class __TwigTemplate_0fbba20323c9bce0a75dc54c475fb022597e0cd00c059b7d33f2cb09dd6e2f28 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_header_actions_service_menu_widget' => [$this, 'block_layout_header_actions_service_menu_widget'],
            'layout_header_actions_service_menu_list' => [$this, 'block_layout_header_actions_service_menu_list'],
            'layout_header_actions_service_menu_items' => [$this, 'block_layout_header_actions_service_menu_items'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('layout_header_actions_service_menu_widget', $context, $blocks);
    }

    public function block_layout_header_actions_service_menu_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        if (twig_test_empty(($context["position"] ?? null))) {
            // line 3
            echo "        ";
            $context["position"] = "top-bar";
            // line 4
            echo "    ";
        }
        // line 5
        echo "
    ";
        // line 6
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 6), "serviceMenu", [], "any", false, false, false, 6)) > 0)) {
            // line 7
            echo "        <div class=\"top-bar-nav-item top-bar-menu\">
            ";
            // line 8
            $this->displayBlock('layout_header_actions_service_menu_list', $context, $blocks);
            // line 32
            echo "        </div>
    ";
        }
    }

    // line 8
    public function block_layout_header_actions_service_menu_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "                <div class=\"service-menu dropdown\">
                    <button class=\"btn dropdown-toggle top-bar-nav-btn\"
                            type=\"button\"
                            id=\"serviceMenuDropdown-";
        // line 12
        echo twig_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "\"
                            data-toggle=\"dropdown\"
                            aria-haspopup=\"true\"
                            aria-expanded=\"false\">
                        ";
        // line 16
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/header/actions/service-menu-widget.html.twig", 16);
        })())->display(twig_array_merge($context, ["name" => "help"]));
        // line 17
        echo "                        <span class=\"top-bar-nav-text\">";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.indexLinkService"));
        echo "</span>
                    </button>
                    ";
        // line 19
        $this->displayBlock('layout_header_actions_service_menu_items', $context, $blocks);
        // line 30
        echo "                </div>
            ";
    }

    // line 19
    public function block_layout_header_actions_service_menu_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "                        <div class=\"dropdown-menu dropdown-menu-right\"
                             aria-labelledby=\"serviceMenuDropdown-";
        // line 21
        echo twig_escape_filter($this->env, ($context["position"] ?? null), "html", null, true);
        echo "\">
                            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 22), "serviceMenu", [], "any", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 23
            echo "                                ";
            $context["externalLink"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "translated", [], "any", false, false, false, 23), "externalLink", [], "any", false, false, false, 23);
            // line 24
            echo "                                <a class=\"top-bar-list-item dropdown-item\"
                                   href=\"";
            // line 25
            if (($context["externalLink"] ?? null)) {
                echo twig_escape_filter($this->env, ($context["externalLink"] ?? null), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.navigation.page", ["navigationId" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            }
            echo "\"
                                   title=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "translated", [], "any", false, false, false, 26), "name", [], "any", false, false, false, 26), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "translated", [], "any", false, false, false, 26), "name", [], "any", false, false, false, 26), "html", null, true);
            echo "</a>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                        </div>
                    ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/header/actions/service-menu-widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  148 => 28,  138 => 26,  130 => 25,  127 => 24,  124 => 23,  120 => 22,  116 => 21,  113 => 20,  109 => 19,  104 => 30,  102 => 19,  96 => 17,  88 => 16,  81 => 12,  76 => 9,  72 => 8,  66 => 32,  64 => 8,  61 => 7,  59 => 6,  56 => 5,  53 => 4,  50 => 3,  47 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/header/actions/service-menu-widget.html.twig", "/opt/bitnami/apps/shopware/htdocs/vendor/shopware/storefront/Resources/views/storefront/layout/header/actions/service-menu-widget.html.twig");
    }
}
