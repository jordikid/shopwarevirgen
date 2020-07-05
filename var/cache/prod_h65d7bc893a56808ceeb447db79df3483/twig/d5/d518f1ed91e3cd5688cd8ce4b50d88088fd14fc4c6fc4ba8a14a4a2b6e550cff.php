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

/* @Storefront/storefront/utilities/offcanvas.html.twig */
class __TwigTemplate_2d52afb6e1f7b22bcc1ad2e5970c4fdac86e26fb96a5cff5eb9083af743a35f5 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'utilities_offcanvas' => [$this, 'block_utilities_offcanvas'],
            'utilities_offcanvas_close' => [$this, 'block_utilities_offcanvas_close'],
            'utilities_offcanvas_close_icon' => [$this, 'block_utilities_offcanvas_close_icon'],
            'utilities_offcanvas_close_text' => [$this, 'block_utilities_offcanvas_close_text'],
            'utilities_offcanvas_content_container' => [$this, 'block_utilities_offcanvas_content_container'],
            'utilities_offcanvas_content' => [$this, 'block_utilities_offcanvas_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('utilities_offcanvas', $context, $blocks);
    }

    public function block_utilities_offcanvas($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $this->displayBlock('utilities_offcanvas_close', $context, $blocks);
        // line 13
        echo "
    ";
        // line 14
        $this->displayBlock('utilities_offcanvas_content_container', $context, $blocks);
    }

    // line 2
    public function block_utilities_offcanvas_close($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "        <button class=\"btn btn-light btn-block offcanvas-close js-offcanvas-close sticky-top\">
            ";
        // line 4
        $this->displayBlock('utilities_offcanvas_close_icon', $context, $blocks);
        // line 7
        echo "
            ";
        // line 8
        $this->displayBlock('utilities_offcanvas_close_text', $context, $blocks);
        // line 11
        echo "        </button>
    ";
    }

    // line 4
    public function block_utilities_offcanvas_close_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "                ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/utilities/offcanvas.html.twig", 5);
        })())->display(twig_array_merge($context, ["size" => "sm", "name" => "x"]));
        // line 6
        echo "            ";
    }

    // line 8
    public function block_utilities_offcanvas_close_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "                ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.offcanvasCloseMenu"));
        echo "
            ";
    }

    // line 14
    public function block_utilities_offcanvas_content_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "        <div class=\"offcanvas-content-container\">
            ";
        // line 16
        $this->displayBlock('utilities_offcanvas_content', $context, $blocks);
        // line 17
        echo "        </div>
    ";
    }

    // line 16
    public function block_utilities_offcanvas_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/utilities/offcanvas.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  121 => 16,  116 => 17,  114 => 16,  111 => 15,  107 => 14,  100 => 9,  96 => 8,  92 => 6,  83 => 5,  79 => 4,  74 => 11,  72 => 8,  69 => 7,  67 => 4,  64 => 3,  60 => 2,  56 => 14,  53 => 13,  50 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/utilities/offcanvas.html.twig", "/opt/bitnami/apps/shopware/htdocs/vendor/shopware/storefront/Resources/views/storefront/utilities/offcanvas.html.twig");
    }
}
