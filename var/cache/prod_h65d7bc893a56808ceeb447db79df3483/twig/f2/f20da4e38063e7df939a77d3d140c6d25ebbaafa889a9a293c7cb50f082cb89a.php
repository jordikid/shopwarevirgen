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

/* @Storefront/storefront/layout/header/actions/cart-widget.html.twig */
class __TwigTemplate_ed66944bc271193b47e41a1c77f0515aaecd15e4dacf63139899143b33ead49e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_header_actions_cart_widget' => [$this, 'block_layout_header_actions_cart_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('layout_header_actions_cart_widget', $context, $blocks);
    }

    public function block_layout_header_actions_cart_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <span class=\"header-cart-icon\">
        ";
        // line 3
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/header/actions/cart-widget.html.twig", 3);
        })())->display(twig_array_merge($context, ["name" => "bag"]));
        // line 4
        echo "    </span>
    ";
        // line 5
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, false, false, 5), "lineItems", [], "any", false, false, false, 5)) > 0)) {
            // line 6
            echo "        <span class=\"badge badge-primary header-cart-badge\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, false, false, 6), "lineItems", [], "any", false, false, false, 6)), "html", null, true);
            echo "</span>
    ";
        }
        // line 8
        echo "    <span class=\"header-cart-total\">
        ";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, false, false, 9), "price", [], "any", false, false, false, 9), "positionPrice", [], "any", false, false, false, 9)), "html", null, true);
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
        echo "
    </span>
";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/header/actions/cart-widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  70 => 9,  67 => 8,  61 => 6,  59 => 5,  56 => 4,  48 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/header/actions/cart-widget.html.twig", "/opt/bitnami/apps/shopware/htdocs/vendor/shopware/storefront/Resources/views/storefront/layout/header/actions/cart-widget.html.twig");
    }
}
