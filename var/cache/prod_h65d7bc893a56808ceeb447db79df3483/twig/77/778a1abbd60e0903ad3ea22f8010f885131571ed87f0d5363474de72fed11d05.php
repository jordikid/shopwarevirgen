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

/* @Storefront/storefront/component/review/point.html.twig */
class __TwigTemplate_1aecc0cdd41db955445c9d3c46f8287fddd00f23a2958d78bee22b7fe7399bc1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_review_point' => [$this, 'block_component_review_point'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_review_point', $context, $blocks);
    }

    public function block_component_review_point($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        if ( !(isset($context["size"]) || array_key_exists("size", $context))) {
            // line 3
            echo "        ";
            $context["size"] = "xs";
            // line 4
            echo "    ";
        }
        // line 5
        echo "
    <span class=\"product-review-point\">
        ";
        // line 7
        if ((($context["type"] ?? null) == "half")) {
            // line 8
            echo "            ";
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/review/point.html.twig", 8);
            })())->display(twig_array_merge($context, ["color" => "review", "size" => ($context["size"] ?? null), "pack" => "solid", "name" => "star-half"]));
            // line 9
            echo "        ";
        } elseif ((($context["type"] ?? null) == "blank")) {
            // line 10
            echo "            ";
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/review/point.html.twig", 10);
            })())->display(twig_array_merge($context, ["color" => "light", "size" => ($context["size"] ?? null), "pack" => "solid", "name" => "star"]));
            // line 11
            echo "        ";
        } else {
            // line 12
            echo "            ";
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/review/point.html.twig", 12);
            })())->display(twig_array_merge($context, ["color" => "review", "size" => ($context["size"] ?? null), "pack" => "solid", "name" => "star"]));
            // line 13
            echo "        ";
        }
        // line 14
        echo "    </span>
";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/review/point.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  96 => 14,  93 => 13,  84 => 12,  81 => 11,  72 => 10,  69 => 9,  60 => 8,  58 => 7,  54 => 5,  51 => 4,  48 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/review/point.html.twig", "/opt/bitnami/apps/shopware/htdocs/vendor/shopware/storefront/Resources/views/storefront/component/review/point.html.twig");
    }
}
