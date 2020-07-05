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

/* @Storefront/storefront/section/cms-section-default.html.twig */
class __TwigTemplate_b2e68d0ccdaf4b6799ee609056118e5ce8b39c601f3b231bb83db513b7fc9734 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_content_section_default' => [$this, 'block_page_content_section_default'],
            'section_default_content_block' => [$this, 'block_section_default_content_block'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('page_content_section_default', $context, $blocks);
    }

    public function block_page_content_section_default($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context["layout"] = ((twig_get_attribute($this->env, $this->source, ($context["section"] ?? null), "sizingMode", [], "any", false, false, false, 2)) ? (twig_replace_filter(twig_get_attribute($this->env, $this->source, ($context["section"] ?? null), "sizingMode", [], "any", false, false, false, 2), ["_" => "-"])) : ("container"));
        // line 3
        echo "    <div class=\"cms-section-default ";
        echo twig_escape_filter($this->env, ($context["layout"] ?? null), "html", null, true);
        echo "\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["section"] ?? null), "blocks", [], "any", false, false, false, 4));
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
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 5
            echo "
            ";
            // line 6
            $this->displayBlock('section_default_content_block', $context, $blocks);
            // line 9
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </div>
";
    }

    // line 6
    public function block_section_default_content_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "                ";
        $this->loadTemplate("@Storefront/storefront/section/cms-section-block-container.html.twig", "@Storefront/storefront/section/cms-section-default.html.twig", 7)->display($context);
        // line 8
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/section/cms-section-default.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  102 => 8,  99 => 7,  95 => 6,  90 => 10,  76 => 9,  74 => 6,  71 => 5,  54 => 4,  49 => 3,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/section/cms-section-default.html.twig", "/opt/bitnami/apps/shopware/htdocs/vendor/shopware/storefront/Resources/views/storefront/section/cms-section-default.html.twig");
    }
}
