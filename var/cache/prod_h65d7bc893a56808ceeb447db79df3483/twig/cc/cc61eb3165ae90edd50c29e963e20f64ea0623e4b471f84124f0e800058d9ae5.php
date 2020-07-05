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

/* @Storefront/storefront/block/cms-block-image-text.html.twig */
class __TwigTemplate_2b08c46fab8c1486241a6126fee64d6bdb1a06824d3a864130998b6a22f25eca extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'block_image_text' => [$this, 'block_block_image_text'],
            'block_image_text_left' => [$this, 'block_block_image_text_left'],
            'block_image_text_left_inner' => [$this, 'block_block_image_text_left_inner'],
            'block_image_text_right' => [$this, 'block_block_image_text_right'],
            'block_image_text_right_inner' => [$this, 'block_block_image_text_right_inner'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('block_image_text', $context, $blocks);
    }

    public function block_block_image_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context["columns"] = 2;
        // line 3
        echo "    ";
        $context["id"] = twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "id", [], "any", false, false, false, 3);
        // line 4
        echo "
    ";
        // line 5
        $this->displayBlock('block_image_text_left', $context, $blocks);
        // line 14
        echo "
    ";
        // line 15
        $this->displayBlock('block_image_text_right', $context, $blocks);
    }

    // line 5
    public function block_block_image_text_left($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "        ";
        $context["element"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "slots", [], "any", false, false, false, 6), "getSlot", [0 => "left"], "method", false, false, false, 6);
        // line 7
        echo "
        <div class=\"col-md-6\" data-cms-element-id=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 9
        $this->displayBlock('block_image_text_left_inner', $context, $blocks);
        // line 12
        echo "        </div>
    ";
    }

    // line 9
    public function block_block_image_text_left_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "                ";
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
        try {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =             ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName((("@Storefront/storefront/element/cms-element-" . twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "type", [], "any", false, false, false, 10)) . ".html.twig")));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/block/cms-block-image-text.html.twig", 10);
            })());
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
        }
        // line 11
        echo "            ";
    }

    // line 15
    public function block_block_image_text_right($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "        ";
        $context["element"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "slots", [], "any", false, false, false, 16), "getSlot", [0 => "right"], "method", false, false, false, 16);
        // line 17
        echo "
        <div class=\"col-md-6\" data-cms-element-id=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 19
        $this->displayBlock('block_image_text_right_inner', $context, $blocks);
        // line 22
        echo "        </div>
    ";
    }

    // line 19
    public function block_block_image_text_right_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "                ";
        $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = null;
        try {
            $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 =             ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName((("@Storefront/storefront/element/cms-element-" . twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "type", [], "any", false, false, false, 20)) . ".html.twig")));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/block/cms-block-image-text.html.twig", 20);
            })());
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) {
            $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144->display($context);
        }
        // line 21
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/block/cms-block-image-text.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  155 => 21,  138 => 20,  134 => 19,  129 => 22,  127 => 19,  123 => 18,  120 => 17,  117 => 16,  113 => 15,  109 => 11,  92 => 10,  88 => 9,  83 => 12,  81 => 9,  77 => 8,  74 => 7,  71 => 6,  67 => 5,  63 => 15,  60 => 14,  58 => 5,  55 => 4,  52 => 3,  49 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/block/cms-block-image-text.html.twig", "/opt/bitnami/apps/shopware/htdocs/vendor/shopware/storefront/Resources/views/storefront/block/cms-block-image-text.html.twig");
    }
}
