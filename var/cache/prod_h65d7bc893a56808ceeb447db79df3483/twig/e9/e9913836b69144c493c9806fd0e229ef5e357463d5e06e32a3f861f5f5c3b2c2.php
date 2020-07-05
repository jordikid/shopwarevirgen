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

/* @Storefront/storefront/element/cms-element-image.html.twig */
class __TwigTemplate_df855ba8f7f5a4d4ed286e99f42eecb8c8f841772d00a0cdb2de51ac6339c090 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'element_image' => [$this, 'block_element_image'],
            'element_product_slider_alignment' => [$this, 'block_element_product_slider_alignment'],
            'element_image_inner' => [$this, 'block_element_image_inner'],
            'element_image_container' => [$this, 'block_element_image_container'],
            'element_image_media' => [$this, 'block_element_image_media'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('element_image', $context, $blocks);
    }

    public function block_element_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context["config"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "fieldConfig", [], "any", false, false, false, 2), "elements", [], "any", false, false, false, 2);
        // line 3
        echo "
    <div class=\"cms-element-";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "type", [], "any", false, false, false, 4), "html", null, true);
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "verticalAlign", [], "any", false, false, false, 4), "value", [], "any", false, false, false, 4)) {
            echo " has-vertical-alignment";
        }
        echo "\">
        ";
        // line 5
        $this->displayBlock('element_product_slider_alignment', $context, $blocks);
        // line 49
        echo "    </div>
";
    }

    // line 5
    public function block_element_product_slider_alignment($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "verticalAlign", [], "any", false, false, false, 6), "value", [], "any", false, false, false, 6)) {
            // line 7
            echo "                <div class=\"cms-element-alignment";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "verticalAlign", [], "any", false, false, false, 7), "value", [], "any", false, false, false, 7) == "center")) {
                echo " align-self-center";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "verticalAlign", [], "any", false, false, false, 7), "value", [], "any", false, false, false, 7) == "flex-end")) {
                echo " align-self-end";
            } else {
                echo " align-self-start";
            }
            echo "\">
            ";
        }
        // line 9
        echo "                ";
        $this->displayBlock('element_image_inner', $context, $blocks);
        // line 45
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "verticalAlign", [], "any", false, false, false, 45), "value", [], "any", false, false, false, 45)) {
            // line 46
            echo "                </div>
            ";
        }
        // line 48
        echo "        ";
    }

    // line 9
    public function block_element_image_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "                    ";
        ob_start(function () { return ''; });
        // line 11
        echo "                        ";
        $this->displayBlock('element_image_container', $context, $blocks);
        // line 33
        echo "                    ";
        $context["imageElement"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 34
        echo "
                    ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "translated", [], "any", false, false, false, 35), "config", [], "any", false, false, false, 35), "url", [], "any", false, false, false, 35), "value", [], "any", false, false, false, 35)) {
            // line 36
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "translated", [], "any", false, false, false, 36), "config", [], "any", false, false, false, 36), "url", [], "any", false, false, false, 36), "value", [], "any", false, false, false, 36), "html", null, true);
            echo "\"
                           class=\"cms-image-link\"
                           ";
            // line 38
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "translated", [], "any", false, false, false, 38), "config", [], "any", false, false, false, 38), "newTab", [], "any", false, false, false, 38), "value", [], "any", false, false, false, 38)) {
                echo "target=\"_blank\"";
            }
            echo ">
                            ";
            // line 39
            echo twig_escape_filter($this->env, ($context["imageElement"] ?? null), "html", null, true);
            echo "
                        </a>
                    ";
        } else {
            // line 42
            echo "                        ";
            echo twig_escape_filter($this->env, ($context["imageElement"] ?? null), "html", null, true);
            echo "
                    ";
        }
        // line 44
        echo "                ";
    }

    // line 11
    public function block_element_image_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "data", [], "any", false, false, false, 12), "media", [], "any", false, false, false, 12), "url", [], "any", false, false, false, 12)) {
            // line 13
            echo "                                <div class=\"cms-image-container is-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "translated", [], "any", false, false, false, 13), "config", [], "any", false, false, false, 13), "displayMode", [], "any", false, false, false, 13), "value", [], "any", false, false, false, 13), "html", null, true);
            echo "\"
                                    ";
            // line 14
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "translated", [], "any", false, false, false, 14), "config", [], "any", false, false, false, 14), "minHeight", [], "any", false, false, false, 14), "value", [], "any", false, false, false, 14) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "translated", [], "any", false, false, false, 14), "config", [], "any", false, false, false, 14), "displayMode", [], "any", false, false, false, 14), "value", [], "any", false, false, false, 14) == "cover"))) {
                echo " style=\"min-height: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "translated", [], "any", false, false, false, 14), "config", [], "any", false, false, false, 14), "minHeight", [], "any", false, false, false, 14), "value", [], "any", false, false, false, 14), "html", null, true);
                echo ";\"";
            }
            echo ">
                                    ";
            // line 15
            $this->displayBlock('element_image_media', $context, $blocks);
            // line 30
            echo "                                </div>
                            ";
        }
        // line 32
        echo "                        ";
    }

    // line 15
    public function block_element_image_media($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "                                        ";
        $context["attributes"] = ["class" => "cms-image", "alt" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 18
($context["element"] ?? null), "data", [], "any", false, false, false, 18), "media", [], "any", false, false, false, 18), "translated", [], "any", false, false, false, 18), "alt", [], "any", false, false, false, 18)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "data", [], "any", false, false, false, 18), "media", [], "any", false, false, false, 18), "translated", [], "any", false, false, false, 18), "alt", [], "any", false, false, false, 18)) : ("")), "title" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 19
($context["element"] ?? null), "data", [], "any", false, false, false, 19), "media", [], "any", false, false, false, 19), "translated", [], "any", false, false, false, 19), "title", [], "any", false, false, false, 19)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "data", [], "any", false, false, false, 19), "media", [], "any", false, false, false, 19), "translated", [], "any", false, false, false, 19), "title", [], "any", false, false, false, 19)) : (""))];
        // line 21
        echo "
                                        ";
        // line 22
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "translated", [], "any", false, false, false, 22), "config", [], "any", false, false, false, 22), "displayMode", [], "any", false, false, false, 22), "value", [], "any", false, false, false, 22) == "cover") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "translated", [], "any", false, false, false, 22), "config", [], "any", false, false, false, 22), "displayMode", [], "any", false, false, false, 22), "value", [], "any", false, false, false, 22) == "contain"))) {
            // line 23
            echo "                                            ";
            $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["data-object-fit" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "translated", [], "any", false, false, false, 23), "config", [], "any", false, false, false, 23), "displayMode", [], "any", false, false, false, 23), "value", [], "any", false, false, false, 23)]);
            // line 24
            echo "                                        ";
        }
        // line 25
        echo "
                                        ";
        // line 26
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/thumbnail.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/element/cms-element-image.html.twig", 26);
        })())->display(twig_array_merge($context, ["media" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 27
($context["element"] ?? null), "data", [], "any", false, false, false, 27), "media", [], "any", false, false, false, 27), "name" => "cms-image-thumbnails"]));
        // line 29
        echo "                                    ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/element/cms-element-image.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  210 => 29,  208 => 27,  201 => 26,  198 => 25,  195 => 24,  192 => 23,  190 => 22,  187 => 21,  185 => 19,  184 => 18,  182 => 16,  178 => 15,  174 => 32,  170 => 30,  168 => 15,  160 => 14,  155 => 13,  152 => 12,  148 => 11,  144 => 44,  138 => 42,  132 => 39,  126 => 38,  120 => 36,  118 => 35,  115 => 34,  112 => 33,  109 => 11,  106 => 10,  102 => 9,  98 => 48,  94 => 46,  91 => 45,  88 => 9,  76 => 7,  73 => 6,  69 => 5,  64 => 49,  62 => 5,  55 => 4,  52 => 3,  49 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/element/cms-element-image.html.twig", "/opt/bitnami/apps/shopware/htdocs/vendor/shopware/storefront/Resources/views/storefront/element/cms-element-image.html.twig");
    }
}
