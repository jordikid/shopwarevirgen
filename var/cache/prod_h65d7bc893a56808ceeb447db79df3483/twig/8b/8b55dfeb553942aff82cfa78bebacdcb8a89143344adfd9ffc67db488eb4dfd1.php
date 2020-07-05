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

/* @Storefront/storefront/component/listing/breadcrumb.html.twig */
class __TwigTemplate_1bf0b2e35da961fb7661ea8ad6751b1f89f305b207a2c65392d8bf3017dc22a2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_listing_breadcrumb' => [$this, 'block_component_listing_breadcrumb'],
            'component_listing_breadcrumb_category' => [$this, 'block_component_listing_breadcrumb_category'],
            'component_listing_breadcrumb_link_name' => [$this, 'block_component_listing_breadcrumb_link_name'],
            'component_listing_breadcrumb_placeholder' => [$this, 'block_component_listing_breadcrumb_placeholder'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_listing_breadcrumb', $context, $blocks);
        // line 24
        echo "
";
    }

    // line 1
    public function block_component_listing_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context["breadcrumb"] = twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "buildSeoBreadcrumb", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 2), "navigationCategoryId", [], "any", false, false, false, 2)], "method", false, false, false, 2);
        // line 3
        echo "
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumb"] ?? null));
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
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 5
            echo "        <div class=\"breadcrumb-container\">
            ";
            // line 6
            $this->displayBlock('component_listing_breadcrumb_category', $context, $blocks);
            // line 14
            echo "            ";
            $this->displayBlock('component_listing_breadcrumb_placeholder', $context, $blocks);
            // line 21
            echo "        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 6
    public function block_component_listing_breadcrumb_category($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "                <a class=\"";
        if ((($context["key"] ?? null) === twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 7))) {
            echo " is-active";
        }
        echo "\"
                   href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.navigation.page", ["navigationId" => ($context["key"] ?? null)]), "html", null, true);
        echo "\">
                    ";
        // line 9
        $this->displayBlock('component_listing_breadcrumb_link_name', $context, $blocks);
        // line 12
        echo "                </a>
            ";
    }

    // line 9
    public function block_component_listing_breadcrumb_link_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "                        ";
        echo twig_escape_filter($this->env, ($context["item"] ?? null), "html", null, true);
        echo "
                    ";
    }

    // line 14
    public function block_component_listing_breadcrumb_placeholder($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "                ";
        if ((($context["item"] ?? null) != twig_last($this->env, ($context["breadcrumb"] ?? null)))) {
            // line 16
            echo "                    <div class=\"breadcrumb-placeholder\">
                        ";
            // line 17
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/listing/breadcrumb.html.twig", 17);
            })())->display(twig_array_merge($context, ["size" => "fluid", "pack" => "solid", "name" => "arrow-medium-right"]));
            // line 18
            echo "                    </div>
                ";
        }
        // line 20
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/listing/breadcrumb.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  155 => 20,  151 => 18,  143 => 17,  140 => 16,  137 => 15,  133 => 14,  126 => 10,  122 => 9,  117 => 12,  115 => 9,  111 => 8,  104 => 7,  100 => 6,  83 => 21,  80 => 14,  78 => 6,  75 => 5,  58 => 4,  55 => 3,  52 => 2,  48 => 1,  43 => 24,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/listing/breadcrumb.html.twig", "/opt/bitnami/apps/shopware/htdocs/vendor/shopware/storefront/Resources/views/storefront/component/listing/breadcrumb.html.twig");
    }
}
