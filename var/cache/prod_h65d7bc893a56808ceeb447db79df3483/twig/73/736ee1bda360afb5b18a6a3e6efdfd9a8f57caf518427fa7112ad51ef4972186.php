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

/* @Storefront/storefront/component/listing/filter-panel.html.twig */
class __TwigTemplate_b7856d9813d6ab1557cc2a8551ecd03e0b8161f880da51a96665e6de74f24141 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_filter_panel' => [$this, 'block_component_filter_panel'],
            'component_filter_panel_header' => [$this, 'block_component_filter_panel_header'],
            'component_filter_panel_element' => [$this, 'block_component_filter_panel_element'],
            'component_filter_panel_items_container' => [$this, 'block_component_filter_panel_items_container'],
            'component_filter_panel_item_manufacturer' => [$this, 'block_component_filter_panel_item_manufacturer'],
            'component_filter_panel_item_properties' => [$this, 'block_component_filter_panel_item_properties'],
            'component_filter_panel_item_price' => [$this, 'block_component_filter_panel_item_price'],
            'component_filter_panel_item_rating' => [$this, 'block_component_filter_panel_item_rating'],
            'component_filter_panel_item_shipping_free' => [$this, 'block_component_filter_panel_item_shipping_free'],
            'component_filter_panel_active_container' => [$this, 'block_component_filter_panel_active_container'],
            'component_filter_panel_active_container_inner' => [$this, 'block_component_filter_panel_active_container_inner'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_filter_panel', $context, $blocks);
    }

    public function block_component_filter_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        if (( !($context["sidebar"] ?? null) && ($context["block"] ?? null))) {
            // line 3
            echo "        ";
            @trigger_error("Sidebar parameter missing, please provide bool sidebar parameter. @deprecated tag:v6.2.0"." (\"@Storefront/storefront/component/listing/filter-panel.html.twig\" at line 3).", E_USER_DEPRECATED);
            // line 4
            echo "        ";
            $context["sidebar"] = (twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "sectionPosition", [], "any", false, false, false, 4) == "sidebar");
            // line 5
            echo "    ";
        }
        // line 6
        echo "
    ";
        // line 7
        $this->displayBlock('component_filter_panel_header', $context, $blocks);
        // line 16
        echo "
    ";
        // line 18
        echo "    ";
        $this->displayBlock('component_filter_panel_element', $context, $blocks);
    }

    // line 7
    public function block_component_filter_panel_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "        <div class=\"filter-panel-offcanvas-header\">
            <h3 class=\"filter-panel-offcanvas-only\">";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterTitleText"), "html", null, true);
        echo "</h3>

            <div class=\"filter-panel-offcanvas-only filter-panel-offcanvas-close js-offcanvas-close\">
                ";
        // line 12
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/listing/filter-panel.html.twig", 12);
        })())->display(twig_array_merge($context, ["size" => "md", "name" => "x"]));
        // line 13
        echo "            </div>
        </div>
    ";
    }

    // line 18
    public function block_component_filter_panel_element($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "        <div class=\"filter-panel";
        if (($context["sidebar"] ?? null)) {
            echo " is--sidebar";
        }
        echo "\">
            ";
        // line 20
        $this->displayBlock('component_filter_panel_items_container', $context, $blocks);
        // line 92
        echo "
            ";
        // line 93
        $this->displayBlock('component_filter_panel_active_container', $context, $blocks);
        // line 98
        echo "        </div>
     ";
    }

    // line 20
    public function block_component_filter_panel_items_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "                <div class=\"filter-panel-items-container\">

                    ";
        // line 23
        $this->displayBlock('component_filter_panel_item_manufacturer', $context, $blocks);
        // line 35
        echo "
                    ";
        // line 36
        $this->displayBlock('component_filter_panel_item_properties', $context, $blocks);
        // line 53
        echo "
                    ";
        // line 54
        $this->displayBlock('component_filter_panel_item_price', $context, $blocks);
        // line 68
        echo "
                    ";
        // line 69
        $this->displayBlock('component_filter_panel_item_rating', $context, $blocks);
        // line 79
        echo "
                    ";
        // line 80
        $this->displayBlock('component_filter_panel_item_shipping_free', $context, $blocks);
        // line 90
        echo "                </div>
            ";
    }

    // line 23
    public function block_component_filter_panel_item_manufacturer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "                        ";
        // line 25
        echo "                        ";
        $context["manufacturers"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listing"] ?? null), "aggregations", [], "any", false, false, false, 25), "get", [0 => "manufacturer"], "method", false, false, false, 25);
        // line 26
        echo "                        ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["manufacturers"] ?? null), "entities", [], "any", false, false, false, 26))) {
            // line 27
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/component/listing/filter/filter-multi-select.html.twig", "@Storefront/storefront/component/listing/filter-panel.html.twig", 27)->display(twig_array_merge($context, ["elements" => twig_get_attribute($this->env, $this->source,             // line 28
($context["manufacturers"] ?? null), "entities", [], "any", false, false, false, 28), "sidebar" =>             // line 29
($context["sidebar"] ?? null), "name" => "manufacturer", "displayName" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterManufacturerDisplayName"))]));
            // line 33
            echo "                        ";
        }
        // line 34
        echo "                    ";
    }

    // line 36
    public function block_component_filter_panel_item_properties($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "                        ";
        // line 38
        echo "                        ";
        $context["properties"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listing"] ?? null), "aggregations", [], "any", false, false, false, 38), "get", [0 => "properties"], "method", false, false, false, 38);
        // line 39
        echo "
                        ";
        // line 40
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "entities", [], "any", false, false, false, 40))) {
            // line 41
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "entities", [], "any", false, false, false, 41));
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
            foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
                // line 42
                echo "                                ";
                $this->loadTemplate("@Storefront/storefront/component/listing/filter/filter-property-select.html.twig", "@Storefront/storefront/component/listing/filter-panel.html.twig", 42)->display(twig_array_merge($context, ["elements" => twig_get_attribute($this->env, $this->source,                 // line 43
$context["property"], "options", [], "any", false, false, false, 43), "sidebar" =>                 // line 44
($context["sidebar"] ?? null), "name" => "properties", "displayName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 46
$context["property"], "translated", [], "any", false, false, false, 46), "name", [], "any", false, false, false, 46), "displayType" => twig_get_attribute($this->env, $this->source,                 // line 47
$context["property"], "displayType", [], "any", false, false, false, 47), "pluginSelector" => "filter-property-select"]));
                // line 50
                echo "                            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                        ";
        }
        // line 52
        echo "                    ";
    }

    // line 54
    public function block_component_filter_panel_item_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "                        ";
        $context["price"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listing"] ?? null), "aggregations", [], "any", false, false, false, 55), "get", [0 => "price"], "method", false, false, false, 55);
        // line 56
        echo "
                        ";
        // line 57
        if (((twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "min", [], "any", false, false, false, 57) > 0) && (twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "max", [], "any", false, false, false, 57) > 0))) {
            // line 58
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/component/listing/filter/filter-range.html.twig", "@Storefront/storefront/component/listing/filter-panel.html.twig", 58)->display(twig_array_merge($context, ["price" =>             // line 59
($context["price"] ?? null), "sidebar" =>             // line 60
($context["sidebar"] ?? null), "name" => "price", "minKey" => "min-price", "maxKey" => "max-price", "displayName" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterPriceDisplayName"))]));
            // line 66
            echo "                        ";
        }
        // line 67
        echo "                    ";
    }

    // line 69
    public function block_component_filter_panel_item_rating($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        echo "                        ";
        $context["rating"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listing"] ?? null), "aggregations", [], "any", false, false, false, 70), "get", [0 => "rating"], "method", false, false, false, 70);
        // line 71
        echo "
                        ";
        // line 72
        if ( !twig_test_empty(($context["rating"] ?? null))) {
            // line 73
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/component/listing/filter/filter-rating.html.twig", "@Storefront/storefront/component/listing/filter-panel.html.twig", 73)->display(twig_array_merge($context, ["name" => "rating", "displayName" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterRatingDisplayName"))]));
            // line 77
            echo "                        ";
        }
        // line 78
        echo "                    ";
    }

    // line 80
    public function block_component_filter_panel_item_shipping_free($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 81
        echo "                        ";
        $context["shippingFree"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listing"] ?? null), "aggregations", [], "any", false, false, false, 81), "get", [0 => "shipping-free"], "method", false, false, false, 81);
        // line 82
        echo "
                        ";
        // line 83
        if ((twig_get_attribute($this->env, $this->source, ($context["shippingFree"] ?? null), "max", [], "any", false, false, false, 83) > 0)) {
            // line 84
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/component/listing/filter/filter-boolean.html.twig", "@Storefront/storefront/component/listing/filter-panel.html.twig", 84)->display(twig_array_merge($context, ["name" => "shipping-free", "displayName" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterFreeShippingDisplayName"))]));
            // line 88
            echo "                        ";
        }
        // line 89
        echo "                    ";
    }

    // line 93
    public function block_component_filter_panel_active_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 94
        echo "                <div class=\"filter-panel-active-container\">
                    ";
        // line 95
        $this->displayBlock('component_filter_panel_active_container_inner', $context, $blocks);
        // line 96
        echo "                </div>
            ";
    }

    // line 95
    public function block_component_filter_panel_active_container_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/listing/filter-panel.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  331 => 95,  326 => 96,  324 => 95,  321 => 94,  317 => 93,  313 => 89,  310 => 88,  307 => 84,  305 => 83,  302 => 82,  299 => 81,  295 => 80,  291 => 78,  288 => 77,  285 => 73,  283 => 72,  280 => 71,  277 => 70,  273 => 69,  269 => 67,  266 => 66,  264 => 60,  263 => 59,  261 => 58,  259 => 57,  256 => 56,  253 => 55,  249 => 54,  245 => 52,  242 => 51,  228 => 50,  226 => 47,  225 => 46,  224 => 44,  223 => 43,  221 => 42,  203 => 41,  201 => 40,  198 => 39,  195 => 38,  193 => 37,  189 => 36,  185 => 34,  182 => 33,  180 => 29,  179 => 28,  177 => 27,  174 => 26,  171 => 25,  169 => 24,  165 => 23,  160 => 90,  158 => 80,  155 => 79,  153 => 69,  150 => 68,  148 => 54,  145 => 53,  143 => 36,  140 => 35,  138 => 23,  134 => 21,  130 => 20,  125 => 98,  123 => 93,  120 => 92,  118 => 20,  111 => 19,  107 => 18,  101 => 13,  93 => 12,  87 => 9,  84 => 8,  80 => 7,  75 => 18,  72 => 16,  70 => 7,  67 => 6,  64 => 5,  61 => 4,  58 => 3,  55 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/listing/filter-panel.html.twig", "/opt/bitnami/apps/shopware/htdocs/vendor/shopware/storefront/Resources/views/storefront/component/listing/filter-panel.html.twig");
    }
}
