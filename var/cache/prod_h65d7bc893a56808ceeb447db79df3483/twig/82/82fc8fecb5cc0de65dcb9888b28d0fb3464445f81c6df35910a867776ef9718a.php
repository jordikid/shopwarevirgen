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

/* @Storefront/storefront/section/cms-section-block-container.html.twig */
class __TwigTemplate_7829ed1df8fc8034773eb2edee8da6327b95a90d88fe0c87e4f8f0cc4aa072e2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'section_content_block' => [$this, 'block_section_content_block'],
            'section_content_block_container' => [$this, 'block_section_content_block_container'],
            'section_content_block_row' => [$this, 'block_section_content_block_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('section_content_block', $context, $blocks);
    }

    public function block_section_content_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
    ";
        // line 3
        $context["top"] = ((twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginTop", [], "any", false, false, false, 3)) ? (twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginTop", [], "any", false, false, false, 3)) : (0));
        // line 4
        echo "    ";
        $context["right"] = ((twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginRight", [], "any", false, false, false, 4)) ? (twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginRight", [], "any", false, false, false, 4)) : (0));
        // line 5
        echo "    ";
        $context["bottom"] = ((twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginBottom", [], "any", false, false, false, 5)) ? (twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginBottom", [], "any", false, false, false, 5)) : (0));
        // line 6
        echo "    ";
        $context["left"] = ((twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginLeft", [], "any", false, false, false, 6)) ? (twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginLeft", [], "any", false, false, false, 6)) : (0));
        // line 7
        echo "
    ";
        // line 8
        if ((((($context["top"] ?? null) || ($context["right"] ?? null)) || ($context["bottom"] ?? null)) || ($context["left"] ?? null))) {
            // line 9
            echo "        ";
            $context["padding"] = ((((((($context["top"] ?? null) . " ") . ($context["right"] ?? null)) . " ") . ($context["bottom"] ?? null)) . " ") . ($context["left"] ?? null));
            // line 10
            echo "    ";
        }
        // line 11
        echo "
    ";
        // line 12
        $context["blockBgColor"] = twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "backgroundColor", [], "any", false, false, false, 12);
        // line 13
        echo "    ";
        $context["blockBgImg"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeMediaUrl(twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "backgroundMedia", [], "any", false, false, false, 13));
        // line 14
        echo "
    ";
        // line 15
        $context["blockClasses"] = [0 => twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "cssClass", [], "any", false, false, false, 15), 1 => ("pos-" . twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "position", [], "any", false, false, false, 15)), 2 => ("cms-block-" . twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "type", [], "any", false, false, false, 15))];
        // line 16
        echo "
    ";
        // line 17
        if (($context["blockBgImg"] ?? null)) {
            // line 18
            echo "        ";
            $context["blockClasses"] = twig_array_merge([0 => "bg-image"], ($context["blockClasses"] ?? null));
            // line 19
            echo "    ";
        }
        // line 20
        echo "
    ";
        // line 21
        if (($context["blockBgColor"] ?? null)) {
            // line 22
            echo "        ";
            $context["blockClasses"] = twig_array_merge([0 => "bg-color"], ($context["blockClasses"] ?? null));
            // line 23
            echo "    ";
        }
        // line 24
        echo "
    ";
        // line 25
        $context["columns"] = 3;
        // line 26
        echo "    ";
        $context["isInSidebar"] = (twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "sectionPosition", [], "any", false, false, false, 26) == "sidebar");
        // line 27
        echo "    ";
        $context["sidebarClasses"] = "";
        // line 28
        echo "
    ";
        // line 29
        if ((($context["isInSidebar"] ?? null) == true)) {
            // line 30
            echo "        ";
            $context["sidebarClasses"] = "has--sidebar";
            // line 31
            echo "    ";
        }
        // line 32
        echo "
    <div class=\"cms-block ";
        // line 33
        echo twig_escape_filter($this->env, twig_join_filter(($context["blockClasses"] ?? null), " "), "html", null, true);
        echo "\"
         style=\"";
        // line 34
        if (($context["blockBgColor"] ?? null)) {
            echo " background-color: ";
            echo twig_escape_filter($this->env, ($context["blockBgColor"] ?? null), "html", null, true);
            echo ";";
        }
        if (($context["blockBgImg"] ?? null)) {
            echo "background-image: url(";
            echo twig_escape_filter($this->env, ($context["blockBgImg"] ?? null), "html", null, true);
            echo "); background-size: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "backgroundMediaMode", [], "any", false, false, false, 34), "html", null, true);
            echo ";";
        }
        echo "\">

        ";
        // line 36
        $this->displayBlock('section_content_block_container', $context, $blocks);
        // line 47
        echo "    </div>
";
    }

    // line 36
    public function block_section_content_block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "            <div class=\"cms-block-container\"
                 style=\"";
        // line 38
        if (($context["padding"] ?? null)) {
            echo "padding: ";
            echo twig_escape_filter($this->env, ($context["padding"] ?? null), "html", null, true);
            echo ";";
        }
        echo "\">

                ";
        // line 40
        $this->displayBlock('section_content_block_row', $context, $blocks);
        // line 45
        echo "            </div>
        ";
    }

    // line 40
    public function block_section_content_block_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "                    <div class=\"cms-block-container-row row cms-row ";
        echo twig_escape_filter($this->env, ($context["sidebarClasses"] ?? null), "html", null, true);
        echo "\">
                        ";
        // line 42
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
        try {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =             ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName((("@Storefront/storefront/block/cms-block-" . twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "type", [], "any", false, false, false, 42)) . ".html.twig")));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/section/cms-section-block-container.html.twig", 42);
            })());
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
        }
        // line 43
        echo "                    </div>
                ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/section/cms-section-block-container.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  207 => 43,  191 => 42,  186 => 41,  182 => 40,  177 => 45,  175 => 40,  166 => 38,  163 => 37,  159 => 36,  154 => 47,  152 => 36,  136 => 34,  132 => 33,  129 => 32,  126 => 31,  123 => 30,  121 => 29,  118 => 28,  115 => 27,  112 => 26,  110 => 25,  107 => 24,  104 => 23,  101 => 22,  99 => 21,  96 => 20,  93 => 19,  90 => 18,  88 => 17,  85 => 16,  83 => 15,  80 => 14,  77 => 13,  75 => 12,  72 => 11,  69 => 10,  66 => 9,  64 => 8,  61 => 7,  58 => 6,  55 => 5,  52 => 4,  50 => 3,  47 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/section/cms-section-block-container.html.twig", "/opt/bitnami/apps/shopware/htdocs/vendor/shopware/storefront/Resources/views/storefront/section/cms-section-block-container.html.twig");
    }
}
