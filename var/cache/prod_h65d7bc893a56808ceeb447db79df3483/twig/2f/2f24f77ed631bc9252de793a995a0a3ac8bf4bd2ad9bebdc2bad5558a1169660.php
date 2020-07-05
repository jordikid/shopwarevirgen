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

/* @Storefront/storefront/utilities/alert.html.twig */
class __TwigTemplate_d4e609e712978e8b715c31c808d2d759117e05fdc3f0b722b2d2015167c8917d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'utilities_alert' => [$this, 'block_utilities_alert'],
            'utilities_alert_icon' => [$this, 'block_utilities_alert_icon'],
            'utilities_alert_content_container' => [$this, 'block_utilities_alert_content_container'],
            'utilities_alert_heading' => [$this, 'block_utilities_alert_heading'],
            'utilities_alert_content' => [$this, 'block_utilities_alert_content'],
            'utilities_alert_dismissible' => [$this, 'block_utilities_alert_dismissible'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 75
        echo "
";
        // line 76
        $this->displayBlock('utilities_alert', $context, $blocks);
    }

    public function block_utilities_alert($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 77
        echo "    <div role=\"alert\"
         class=\"alert ";
        // line 78
        if (($context["type"] ?? null)) {
            echo "alert-";
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        }
        if (($context["dismissible"] ?? null)) {
            echo " alert-dismissible fade show";
        }
        if ((($context["icon"] ?? null) != "error")) {
            echo " alert-has-icon";
        }
        echo "\">
        ";
        // line 79
        $this->displayBlock('utilities_alert_icon', $context, $blocks);
        // line 94
        echo "
        ";
        // line 95
        $this->displayBlock('utilities_alert_content_container', $context, $blocks);
        // line 135
        echo "    </div>
";
    }

    // line 79
    public function block_utilities_alert_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 80
        echo "            ";
        if ((($context["icon"] ?? null) != "false")) {
            // line 81
            echo "                ";
            if ((($context["type"] ?? null) == "danger")) {
                // line 82
                echo "                    ";
                ((function () use ($context, $blocks) {
                    $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                    $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                    return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/utilities/alert.html.twig", 82);
                })())->display(twig_array_merge($context, ["name" => "blocked"]));
                // line 83
                echo "                ";
            } elseif ((($context["type"] ?? null) == "warning")) {
                // line 84
                echo "                    ";
                ((function () use ($context, $blocks) {
                    $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                    $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                    return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/utilities/alert.html.twig", 84);
                })())->display(twig_array_merge($context, ["name" => "warning"]));
                // line 85
                echo "                ";
            } elseif ((($context["type"] ?? null) == "info")) {
                // line 86
                echo "                    ";
                ((function () use ($context, $blocks) {
                    $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                    $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                    return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/utilities/alert.html.twig", 86);
                })())->display(twig_array_merge($context, ["name" => "info"]));
                // line 87
                echo "                ";
            } elseif ((($context["type"] ?? null) == "success")) {
                // line 88
                echo "                    ";
                ((function () use ($context, $blocks) {
                    $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                    $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                    return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/utilities/alert.html.twig", 88);
                })())->display(twig_array_merge($context, ["name" => "checkmark-circle"]));
                // line 89
                echo "                ";
            } else {
                // line 90
                echo "                    ";
                ((function () use ($context, $blocks) {
                    $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                    $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                    return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/utilities/alert.html.twig", 90);
                })())->display(twig_array_merge($context, ["name" => "alert"]));
                // line 91
                echo "                ";
            }
            // line 92
            echo "            ";
        }
        // line 93
        echo "        ";
    }

    // line 95
    public function block_utilities_alert_content_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 96
        echo "            <div class=\"alert-content-container\">
                ";
        // line 97
        $this->displayBlock('utilities_alert_heading', $context, $blocks);
        // line 104
        echo "
                ";
        // line 105
        $this->displayBlock('utilities_alert_content', $context, $blocks);
        // line 122
        echo "
                ";
        // line 123
        $this->displayBlock('utilities_alert_dismissible', $context, $blocks);
        // line 133
        echo "            </div>
        ";
    }

    // line 97
    public function block_utilities_alert_heading($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 98
        echo "                    ";
        if (($context["heading"] ?? null)) {
            // line 99
            echo "                        <div class=\"alert-heading h5\">
                            ";
            // line 100
            echo twig_escape_filter($this->env, ($context["heading"] ?? null), "html", null, true);
            echo "
                        </div>
                    ";
        }
        // line 103
        echo "                ";
    }

    // line 105
    public function block_utilities_alert_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 106
        echo "                    <div class=\"alert-content\">
                        ";
        // line 107
        if ((twig_length_filter($this->env, ($context["list"] ?? null)) > 1)) {
            // line 108
            echo "                            <ul class=\"alert-list\">
                                ";
            // line 109
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 110
                echo "                                    <li>";
                echo twig_escape_filter($this->env, $context["entry"], "html", null, true);
                echo "</li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "                            </ul>
                        ";
        } elseif ((twig_length_filter($this->env,         // line 113
($context["list"] ?? null)) == 1)) {
            // line 114
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 115
                echo "                                ";
                echo twig_escape_filter($this->env, $context["entry"], "html", null, true);
                echo "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "                        ";
        } else {
            // line 118
            echo "                            ";
            echo twig_escape_filter($this->env, ($context["content"] ?? null), "html", null, true);
            echo "
                        ";
        }
        // line 120
        echo "                    </div>
                ";
    }

    // line 123
    public function block_utilities_alert_dismissible($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 124
        echo "                    ";
        if (($context["dismissible"] ?? null)) {
            // line 125
            echo "                        <button type=\"button\"
                                class=\"close\"
                                data-dismiss=\"alert\"
                                aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    ";
        }
        // line 132
        echo "                ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/utilities/alert.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  276 => 132,  267 => 125,  264 => 124,  260 => 123,  255 => 120,  249 => 118,  246 => 117,  237 => 115,  232 => 114,  230 => 113,  227 => 112,  218 => 110,  214 => 109,  211 => 108,  209 => 107,  206 => 106,  202 => 105,  198 => 103,  192 => 100,  189 => 99,  186 => 98,  182 => 97,  177 => 133,  175 => 123,  172 => 122,  170 => 105,  167 => 104,  165 => 97,  162 => 96,  158 => 95,  154 => 93,  151 => 92,  148 => 91,  139 => 90,  136 => 89,  127 => 88,  124 => 87,  115 => 86,  112 => 85,  103 => 84,  100 => 83,  91 => 82,  88 => 81,  85 => 80,  81 => 79,  76 => 135,  74 => 95,  71 => 94,  69 => 79,  56 => 78,  53 => 77,  46 => 76,  43 => 75,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/utilities/alert.html.twig", "/opt/bitnami/apps/shopware/htdocs/vendor/shopware/storefront/Resources/views/storefront/utilities/alert.html.twig");
    }
}
