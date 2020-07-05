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

/* @Storefront/storefront/page/content/detail.html.twig */
class __TwigTemplate_897850a86afaf06ca26c122f3ffc896750069fac1751a713c23028a6355c795d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_content_sections_inner' => [$this, 'block_page_content_sections_inner'],
            'page_content_section' => [$this, 'block_page_content_section'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('page_content_sections_inner', $context, $blocks);
    }

    public function block_page_content_sections_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"cms-sections\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["cmsPage"] ?? null), "sections", [], "any", false, false, false, 3));
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
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 4
            echo "            ";
            $context["sectionBgColor"] = twig_get_attribute($this->env, $this->source, $context["section"], "backgroundColor", [], "any", false, false, false, 4);
            // line 5
            echo "            ";
            $context["sectionBgImg"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeMediaUrl(twig_get_attribute($this->env, $this->source, $context["section"], "backgroundMedia", [], "any", false, false, false, 5));
            // line 6
            echo "            ";
            $context["sectionBgImgMode"] = twig_get_attribute($this->env, $this->source, $context["section"], "backgroundMediaMode", [], "any", false, false, false, 6);
            // line 7
            echo "
            ";
            // line 8
            $context["sectionClasses"] = [0 => twig_get_attribute($this->env, $this->source, $context["section"], "cssClass", [], "any", false, false, false, 8), 1 => ("pos-" . twig_get_attribute($this->env, $this->source, $context["section"], "position", [], "any", false, false, false, 8)), 2 => ("cms-section-" . twig_get_attribute($this->env, $this->source, $context["section"], "type", [], "any", false, false, false, 8))];
            // line 9
            echo "
            ";
            // line 10
            if (($context["sectionBgImg"] ?? null)) {
                // line 11
                echo "                ";
                $context["sectionClasses"] = twig_array_merge([0 => "bg-image"], ($context["sectionClasses"] ?? null));
                // line 12
                echo "            ";
            }
            // line 13
            echo "
            ";
            // line 14
            if (($context["sectionBgColor"] ?? null)) {
                // line 15
                echo "                ";
                $context["sectionClasses"] = twig_array_merge([0 => "bg-color"], ($context["sectionClasses"] ?? null));
                // line 16
                echo "            ";
            }
            // line 17
            echo "
            ";
            // line 18
            $this->displayBlock('page_content_section', $context, $blocks);
            // line 25
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </div>
";
    }

    // line 18
    public function block_page_content_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "                <div class=\"cms-section ";
        echo twig_escape_filter($this->env, twig_join_filter(($context["sectionClasses"] ?? null), " "), "html", null, true);
        echo "\"
                     style=\"";
        // line 20
        if (($context["sectionBgColor"] ?? null)) {
            echo "background-color: ";
            echo twig_escape_filter($this->env, ($context["sectionBgColor"] ?? null), "html", null, true);
            echo ";";
        }
        if (($context["sectionBgImg"] ?? null)) {
            echo "background-image: url(";
            echo twig_escape_filter($this->env, ($context["sectionBgImg"] ?? null), "html", null, true);
            echo ");background-size: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["section"] ?? null), "backgroundMediaMode", [], "any", false, false, false, 20), "html", null, true);
            echo ";";
        }
        echo "\">

                    ";
        // line 22
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName((("@Storefront/storefront/section/cms-section-" . twig_get_attribute($this->env, $this->source, ($context["section"] ?? null), "type", [], "any", false, false, false, 22)) . ".html.twig")));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/content/detail.html.twig", 22);
        })())->display($context);
        // line 23
        echo "                </div>
            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/content/detail.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  159 => 23,  151 => 22,  135 => 20,  130 => 19,  126 => 18,  121 => 26,  107 => 25,  105 => 18,  102 => 17,  99 => 16,  96 => 15,  94 => 14,  91 => 13,  88 => 12,  85 => 11,  83 => 10,  80 => 9,  78 => 8,  75 => 7,  72 => 6,  69 => 5,  66 => 4,  49 => 3,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/content/detail.html.twig", "/opt/bitnami/apps/shopware/htdocs/vendor/shopware/storefront/Resources/views/storefront/page/content/detail.html.twig");
    }
}
