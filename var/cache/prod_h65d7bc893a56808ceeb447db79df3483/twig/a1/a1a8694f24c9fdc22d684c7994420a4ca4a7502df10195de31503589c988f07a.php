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

/* @Storefront/storefront/component/product/listing.html.twig */
class __TwigTemplate_6c4e8ba44abee71bf6e8bdd9ac5280b93b6313e03d362021e717d081db555af4 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'element_product_listing_wrapper_content' => [$this, 'block_element_product_listing_wrapper_content'],
            'element_product_listing_pagination_nav_actions' => [$this, 'block_element_product_listing_pagination_nav_actions'],
            'element_product_listing_pagination_nav_top' => [$this, 'block_element_product_listing_pagination_nav_top'],
            'element_product_listing_sorting' => [$this, 'block_element_product_listing_sorting'],
            'element_product_listing_row' => [$this, 'block_element_product_listing_row'],
            'element_product_listing_col' => [$this, 'block_element_product_listing_col'],
            'element_product_listing_box' => [$this, 'block_element_product_listing_box'],
            'element_product_listing_col_empty' => [$this, 'block_element_product_listing_col_empty'],
            'element_product_listing_col_empty_alert' => [$this, 'block_element_product_listing_col_empty_alert'],
            'element_product_listing_pagination_nav_bottom' => [$this, 'block_element_product_listing_pagination_nav_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["currentPage"] = twig_round(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["searchResult"] ?? null), "criteria", [], "any", false, false, false, 1), "offset", [], "any", false, false, false, 1) + 1) / twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["searchResult"] ?? null), "criteria", [], "any", false, false, false, 1), "limit", [], "any", false, false, false, 1)), 0, "ceil");
        // line 2
        $context["paginationConfig"] = json_encode(["page" => ($context["currentPage"] ?? null)]);
        // line 3
        echo "
<div class=\"cms-element-product-listing-wrapper\"
     data-listing-pagination=\"true\"
     data-listing-pagination-options='";
        // line 6
        echo twig_escape_filter($this->env, ($context["paginationConfig"] ?? null), "html", null, true);
        echo "'
     data-listing=\"true\"
     data-listing-options='{
                 \"sidebar\": \"";
        // line 9
        echo twig_escape_filter($this->env, ($context["sidebar"] ?? null), "html", null, true);
        echo "\",
                 \"params\": ";
        // line 10
        echo twig_escape_filter($this->env, json_encode(($context["params"] ?? null)), "html", null, true);
        echo ",
                 \"dataUrl\": \"";
        // line 11
        echo twig_escape_filter($this->env, ($context["dataUrl"] ?? null), "html", null, true);
        echo "\",
                 \"filterUrl\": \"";
        // line 12
        echo twig_escape_filter($this->env, ($context["filterUrl"] ?? null), "html", null, true);
        echo "\",
                 \"snippets\": {
                    \"resetAllButtonText\": \"";
        // line 14
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterPanelResetAll"));
        echo "\"
                 }
             }'>

    ";
        // line 18
        $this->displayBlock('element_product_listing_wrapper_content', $context, $blocks);
        // line 81
        echo "</div>
";
    }

    // line 18
    public function block_element_product_listing_wrapper_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "        <div class=\"cms-element-product-listing\">
            ";
        // line 20
        if ((twig_get_attribute($this->env, $this->source, ($context["searchResult"] ?? null), "total", [], "any", false, false, false, 20) > 0)) {
            // line 21
            echo "                ";
            $this->displayBlock('element_product_listing_pagination_nav_actions', $context, $blocks);
            // line 39
            echo "            ";
        }
        // line 40
        echo "
            ";
        // line 41
        $this->displayBlock('element_product_listing_row', $context, $blocks);
        // line 70
        echo "
            ";
        // line 71
        if ((twig_get_attribute($this->env, $this->source, ($context["searchResult"] ?? null), "total", [], "any", false, false, false, 71) > twig_get_attribute($this->env, $this->source, ($context["searchResult"] ?? null), "limit", [], "any", false, false, false, 71))) {
            // line 72
            echo "                ";
            $this->displayBlock('element_product_listing_pagination_nav_bottom', $context, $blocks);
            // line 78
            echo "            ";
        }
        // line 79
        echo "        </div>
    ";
    }

    // line 21
    public function block_element_product_listing_pagination_nav_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "                    <div class=\"cms-element-product-listing-actions row justify-content-between\">
                        <div class=\"col-md-auto\">
                            ";
        // line 24
        $this->displayBlock('element_product_listing_pagination_nav_top', $context, $blocks);
        // line 30
        echo "                        </div>

                        <div class=\"col-md-auto\">
                            ";
        // line 33
        $this->displayBlock('element_product_listing_sorting', $context, $blocks);
        // line 36
        echo "                        </div>
                    </div>
                ";
    }

    // line 24
    public function block_element_product_listing_pagination_nav_top($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "                                ";
        $this->loadTemplate("@Storefront/storefront/component/pagination.html.twig", "@Storefront/storefront/component/product/listing.html.twig", 25)->display(twig_array_merge($context, ["entities" =>         // line 26
($context["searchResult"] ?? null), "criteria" => twig_get_attribute($this->env, $this->source,         // line 27
($context["searchResult"] ?? null), "criteria", [], "any", false, false, false, 27)]));
        // line 29
        echo "                            ";
    }

    // line 33
    public function block_element_product_listing_sorting($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "                                ";
        $this->loadTemplate("@Storefront/storefront/component/sorting.html.twig", "@Storefront/storefront/component/product/listing.html.twig", 34)->display(twig_array_merge($context, ["current" => twig_get_attribute($this->env, $this->source, ($context["searchResult"] ?? null), "sorting", [], "any", false, false, false, 34), "sortings" => twig_get_attribute($this->env, $this->source, ($context["searchResult"] ?? null), "sortings", [], "any", false, false, false, 34)]));
        // line 35
        echo "                            ";
    }

    // line 41
    public function block_element_product_listing_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "                <div class=\"row cms-listing-row js-listing-wrapper\">
                    ";
        // line 43
        if ((twig_get_attribute($this->env, $this->source, ($context["searchResult"] ?? null), "total", [], "any", false, false, false, 43) > 0)) {
            // line 44
            echo "                        ";
            $this->displayBlock('element_product_listing_col', $context, $blocks);
            // line 56
            echo "                    ";
        } else {
            // line 57
            echo "                        ";
            $this->displayBlock('element_product_listing_col_empty', $context, $blocks);
            // line 67
            echo "                    ";
        }
        // line 68
        echo "                </div>
            ";
    }

    // line 44
    public function block_element_product_listing_col($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["searchResult"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 46
            echo "                                <div class=\"cms-listing-col ";
            echo twig_escape_filter($this->env, ($context["listingColumns"] ?? null), "html", null, true);
            echo "\">
                                    ";
            // line 47
            $this->displayBlock('element_product_listing_box', $context, $blocks);
            // line 53
            echo "                                </div>
                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                        ";
    }

    // line 47
    public function block_element_product_listing_box($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "                                        ";
        $this->loadTemplate("@Storefront/storefront/component/product/card/box.html.twig", "@Storefront/storefront/component/product/listing.html.twig", 48)->display(twig_array_merge($context, ["layout" =>         // line 49
($context["boxLayout"] ?? null), "displayMode" =>         // line 50
($context["displayMode"] ?? null)]));
        // line 52
        echo "                                    ";
    }

    // line 57
    public function block_element_product_listing_col_empty($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "                            <div class=\"cms-listing-col col-12\">
                                ";
        // line 59
        $this->displayBlock('element_product_listing_col_empty_alert', $context, $blocks);
        // line 65
        echo "                            </div>
                        ";
    }

    // line 59
    public function block_element_product_listing_col_empty_alert($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "                                    ";
        $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/component/product/listing.html.twig", 60)->display(twig_array_merge($context, ["type" => "info", "content" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.emptyResultMessage"))]));
        // line 64
        echo "                                ";
    }

    // line 72
    public function block_element_product_listing_pagination_nav_bottom($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        echo "                    ";
        $this->loadTemplate("@Storefront/storefront/component/pagination.html.twig", "@Storefront/storefront/component/product/listing.html.twig", 73)->display(twig_array_merge($context, ["entities" =>         // line 74
($context["searchResult"] ?? null), "criteria" => twig_get_attribute($this->env, $this->source,         // line 75
($context["searchResult"] ?? null), "criteria", [], "any", false, false, false, 75)]));
        // line 77
        echo "                ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/product/listing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 77,  295 => 75,  294 => 74,  292 => 73,  288 => 72,  284 => 64,  281 => 60,  277 => 59,  272 => 65,  270 => 59,  267 => 58,  263 => 57,  259 => 52,  257 => 50,  256 => 49,  254 => 48,  250 => 47,  246 => 55,  231 => 53,  229 => 47,  224 => 46,  206 => 45,  202 => 44,  197 => 68,  194 => 67,  191 => 57,  188 => 56,  185 => 44,  183 => 43,  180 => 42,  176 => 41,  172 => 35,  169 => 34,  165 => 33,  161 => 29,  159 => 27,  158 => 26,  156 => 25,  152 => 24,  146 => 36,  144 => 33,  139 => 30,  137 => 24,  133 => 22,  129 => 21,  124 => 79,  121 => 78,  118 => 72,  116 => 71,  113 => 70,  111 => 41,  108 => 40,  105 => 39,  102 => 21,  100 => 20,  97 => 19,  93 => 18,  88 => 81,  86 => 18,  79 => 14,  74 => 12,  70 => 11,  66 => 10,  62 => 9,  56 => 6,  51 => 3,  49 => 2,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/product/listing.html.twig", "/opt/bitnami/apps/shopware/htdocs/vendor/shopware/storefront/Resources/views/storefront/component/product/listing.html.twig");
    }
}
