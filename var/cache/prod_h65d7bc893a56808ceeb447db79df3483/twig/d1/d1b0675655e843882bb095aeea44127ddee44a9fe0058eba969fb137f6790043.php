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

/* @Storefront/storefront/component/listing/filter/filter-rating.html.twig */
class __TwigTemplate_4ae815ecc8368e596cf17ce723466996e5304b6217785dcfd752dc47a035686c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_filter_rating' => [$this, 'block_component_filter_rating'],
            'component_filter_rating_toggle' => [$this, 'block_component_filter_rating_toggle'],
            'component_filter_rating_display_name' => [$this, 'block_component_filter_rating_display_name'],
            'component_filter_rating_count' => [$this, 'block_component_filter_rating_count'],
            'component_filter_rating_toggle_icon' => [$this, 'block_component_filter_rating_toggle_icon'],
            'component_filter_rating_dropdown' => [$this, 'block_component_filter_rating_dropdown'],
            'component_filter_rating_container' => [$this, 'block_component_filter_rating_container'],
            'component_filter_rating_point_label' => [$this, 'block_component_filter_rating_point_label'],
            'component_filter_rating_point_radio' => [$this, 'block_component_filter_rating_point_radio'],
            'component_filter_rating_point_radio_element' => [$this, 'block_component_filter_rating_point_radio_element'],
            'component_filter_rating_text_placeholder' => [$this, 'block_component_filter_rating_text_placeholder'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["filterItemId"] = ((("filter-" . ($context["name"] ?? null)) . "-") . twig_random($this->env));
        // line 2
        echo "
";
        // line 3
        if ( !(isset($context["maxPoints"]) || array_key_exists("maxPoints", $context))) {
            // line 4
            echo "    ";
            $context["maxPoints"] = 5;
        }
        // line 6
        echo "
";
        // line 7
        if ( !(isset($context["filterRatingActiveLabelStart"]) || array_key_exists("filterRatingActiveLabelStart", $context))) {
            // line 8
            echo "    ";
            $context["filterRatingActiveLabelStart"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterRatingActiveLabelStart"));
        }
        // line 10
        echo "
";
        // line 11
        if ( !(isset($context["filterRatingActiveLabelEnd"]) || array_key_exists("filterRatingActiveLabelEnd", $context))) {
            // line 12
            echo "    ";
            $context["filterRatingActiveLabelEnd"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.filterRatingActiveLabelEnd"));
        }
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('component_filter_rating', $context, $blocks);
    }

    public function block_component_filter_rating($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    <div class=\"filter-rating filter-panel-item";
        if ( !($context["sidebar"] ?? null)) {
            echo " dropdown";
        }
        echo "\"
         data-filter-rating=\"true\"
         data-filter-rating-options='{
            \"name\": \"";
        // line 19
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\",
            \"maxPoints\": \"";
        // line 20
        echo twig_escape_filter($this->env, ($context["maxPoints"] ?? null), "html", null, true);
        echo "\",
            \"snippets\": {
                \"filterRatingActiveLabelStart\": \"";
        // line 22
        echo twig_escape_filter($this->env, ($context["filterRatingActiveLabelStart"] ?? null), "html", null, true);
        echo "\",
                \"filterRatingActiveLabelEnd\": \"";
        // line 23
        echo twig_escape_filter($this->env, ($context["filterRatingActiveLabelEnd"] ?? null), "html", null, true);
        echo "\"
            }
         }'>

        ";
        // line 27
        $this->displayBlock('component_filter_rating_toggle', $context, $blocks);
        // line 52
        echo "
        ";
        // line 53
        $this->displayBlock('component_filter_rating_dropdown', $context, $blocks);
        // line 88
        echo "    </div>
";
    }

    // line 27
    public function block_component_filter_rating_toggle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "            <button class=\"filter-panel-item-toggle btn";
        if (($context["sidebar"] ?? null)) {
            echo " btn-block";
        }
        echo "\"
                    aria-expanded=\"false\"
                    ";
        // line 30
        if (($context["sidebar"] ?? null)) {
            // line 31
            echo "                    data-toggle=\"collapse\"
                    data-target=\"#";
            // line 32
            echo twig_escape_filter($this->env, ($context["filterItemId"] ?? null), "html", null, true);
            echo "\"
                    ";
        } else {
            // line 34
            echo "                    data-toggle=\"dropdown\"
                    data-offset=\"0,8\"
                    aria-haspopup=\"true\"
                    ";
        }
        // line 37
        echo ">

                ";
        // line 39
        $this->displayBlock('component_filter_rating_display_name', $context, $blocks);
        // line 42
        echo "
                ";
        // line 43
        $this->displayBlock('component_filter_rating_count', $context, $blocks);
        // line 46
        echo "
                ";
        // line 47
        $this->displayBlock('component_filter_rating_toggle_icon', $context, $blocks);
        // line 50
        echo "            </button>
        ";
    }

    // line 39
    public function block_component_filter_rating_display_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "                    ";
        echo twig_escape_filter($this->env, ($context["displayName"] ?? null), "html", null, true);
        echo "
                ";
    }

    // line 43
    public function block_component_filter_rating_count($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "                    <span class=\"filter-rating-count\"></span>
                ";
    }

    // line 47
    public function block_component_filter_rating_toggle_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "                    ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/listing/filter/filter-rating.html.twig", 48);
        })())->display(twig_array_merge($context, ["pack" => "solid", "size" => "xs", "class" => "filter-panel-item-toggle", "name" => "arrow-medium-down"]));
        // line 49
        echo "                ";
    }

    // line 53
    public function block_component_filter_rating_dropdown($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "            <div class=\"filter-rating-dropdown filter-panel-item-dropdown";
        if (($context["sidebar"] ?? null)) {
            echo " collapse";
        } else {
            echo " dropdown-menu";
        }
        echo "\"
                 id=\"";
        // line 55
        echo twig_escape_filter($this->env, ($context["filterItemId"] ?? null), "html", null, true);
        echo "\">

                ";
        // line 57
        $this->displayBlock('component_filter_rating_container', $context, $blocks);
        // line 86
        echo "            </div>
        ";
    }

    // line 57
    public function block_component_filter_rating_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "                    <div class=\"filter-rating-container\" data-rating-system=\"true\">
                        ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["maxPoints"] ?? null)));
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
        foreach ($context['_seq'] as $context["_key"] => $context["point"]) {
            // line 60
            echo "
                            ";
            // line 61
            $this->displayBlock('component_filter_rating_point_label', $context, $blocks);
            // line 79
            echo "                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['point'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "
                        ";
        // line 81
        $this->displayBlock('component_filter_rating_text_placeholder', $context, $blocks);
        // line 84
        echo "                    </div>
                ";
    }

    // line 61
    public function block_component_filter_rating_point_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "                                <label data-review-form-point=\"";
        echo twig_escape_filter($this->env, ($context["point"] ?? null), "html", null, true);
        echo "\"
                                       class=\"filter-rating-star ";
        // line 63
        if ((($context["currentPoints"] ?? null) >= ($context["point"] ?? null))) {
            echo " is-active";
        }
        echo "\">

                                    ";
        // line 65
        $this->displayBlock('component_filter_rating_point_radio', $context, $blocks);
        // line 71
        echo "
                                    ";
        // line 72
        $this->displayBlock('component_filter_rating_point_radio_element', $context, $blocks);
        // line 77
        echo "                                </label>
                            ";
    }

    // line 65
    public function block_component_filter_rating_point_radio($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 66
        echo "                                        <input class=\"product-detail-review-form-radio\"
                                               type=\"radio\"
                                               name=\"points\"
                                               value=\"";
        // line 69
        echo twig_escape_filter($this->env, ($context["point"] ?? null), "html", null, true);
        echo "\">
                                    ";
    }

    // line 72
    public function block_component_filter_rating_point_radio_element($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        echo "                                        ";
        $this->loadTemplate("@Storefront/storefront/component/review/point.html.twig", "@Storefront/storefront/component/listing/filter/filter-rating.html.twig", 73)->display(twig_array_merge($context, ["type" => "blank"]));
        // line 76
        echo "                                    ";
    }

    // line 81
    public function block_component_filter_rating_text_placeholder($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 82
        echo "                            <div data-rating-text=\"true\"></div>
                        ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/listing/filter/filter-rating.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 82,  346 => 81,  342 => 76,  339 => 73,  335 => 72,  329 => 69,  324 => 66,  320 => 65,  315 => 77,  313 => 72,  310 => 71,  308 => 65,  301 => 63,  296 => 62,  292 => 61,  287 => 84,  285 => 81,  282 => 80,  268 => 79,  266 => 61,  263 => 60,  246 => 59,  243 => 58,  239 => 57,  234 => 86,  232 => 57,  227 => 55,  218 => 54,  214 => 53,  210 => 49,  201 => 48,  197 => 47,  192 => 44,  188 => 43,  181 => 40,  177 => 39,  172 => 50,  170 => 47,  167 => 46,  165 => 43,  162 => 42,  160 => 39,  156 => 37,  150 => 34,  145 => 32,  142 => 31,  140 => 30,  132 => 28,  128 => 27,  123 => 88,  121 => 53,  118 => 52,  116 => 27,  109 => 23,  105 => 22,  100 => 20,  96 => 19,  87 => 16,  80 => 15,  77 => 14,  73 => 12,  71 => 11,  68 => 10,  64 => 8,  62 => 7,  59 => 6,  55 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/listing/filter/filter-rating.html.twig", "/opt/bitnami/apps/shopware/htdocs/vendor/shopware/storefront/Resources/views/storefront/component/listing/filter/filter-rating.html.twig");
    }
}
