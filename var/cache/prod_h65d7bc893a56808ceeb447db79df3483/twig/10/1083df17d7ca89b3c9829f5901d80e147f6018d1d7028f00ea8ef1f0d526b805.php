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

/* @Storefront/storefront/layout/navigation/navigation.html.twig */
class __TwigTemplate_6b82597bd23bfa620a568df959291dbe5e8ff906a2d582797612db21db255a41 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_main_navigation' => [$this, 'block_layout_main_navigation'],
            'layout_main_navigation_navbar' => [$this, 'block_layout_main_navigation_navbar'],
            'layout_main_navigation_menu' => [$this, 'block_layout_main_navigation_menu'],
            'layout_main_navigation_menu_home' => [$this, 'block_layout_main_navigation_menu_home'],
            'layout_main_navigation_menu_items' => [$this, 'block_layout_main_navigation_menu_items'],
            'layout_main_navigation_menu_item' => [$this, 'block_layout_main_navigation_menu_item'],
            'layout_main_navigation_menu_flyout_wrapper' => [$this, 'block_layout_main_navigation_menu_flyout_wrapper'],
            'layout_main_navigation_menu_flyout_container' => [$this, 'block_layout_main_navigation_menu_flyout_container'],
            'layout_main_navigation_menu_flyouts' => [$this, 'block_layout_main_navigation_menu_flyouts'],
            'layout_main_navigation_menu_flyout' => [$this, 'block_layout_main_navigation_menu_flyout'],
            'layout_main_navigation_menu_flyout_include' => [$this, 'block_layout_main_navigation_menu_flyout_include'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('layout_main_navigation', $context, $blocks);
    }

    public function block_layout_main_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
    <div class=\"main-navigation\"
         id=\"mainNavigation\"
         data-flyout-menu=\"true\">
        ";
        // line 6
        $this->displayBlock('layout_main_navigation_navbar', $context, $blocks);
        // line 60
        echo "
        ";
        // line 61
        $this->displayBlock('layout_main_navigation_menu_flyout_wrapper', $context, $blocks);
        // line 92
        echo "    </div>
";
    }

    // line 6
    public function block_layout_main_navigation_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "            <div class=\"container\">
                ";
        // line 8
        $this->displayBlock('layout_main_navigation_menu', $context, $blocks);
        // line 58
        echo "            </div>
        ";
    }

    // line 8
    public function block_layout_main_navigation_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "                    <nav class=\"nav main-navigation-menu\"
                        itemscope=\"itemscope\"
                        itemtype=\"http://schema.org/SiteNavigationElement\">
                        ";
        // line 12
        $this->displayBlock('layout_main_navigation_menu_home', $context, $blocks);
        // line 22
        echo "
                        ";
        // line 23
        $this->displayBlock('layout_main_navigation_menu_items', $context, $blocks);
        // line 56
        echo "                    </nav>
                ";
    }

    // line 12
    public function block_layout_main_navigation_menu_home($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "                            <a class=\"nav-link main-navigation-link";
        if ((($context["controllerAction"] ?? null) === "home")) {
            echo " active";
        }
        echo " home-link\"
                                href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.home.page");
        echo "\"
                                itemprop=\"url\"
                                title=\"";
        // line 16
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.homeLink")), "html", null, true);
        echo "\">
                                <div class=\"main-navigation-link-text\">
                                    <span itemprop=\"name\">";
        // line 18
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.homeLink"));
        echo "</span>
                                </div>
                            </a>
                        ";
    }

    // line 23
    public function block_layout_main_navigation_menu_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 24), "navigation", [], "any", false, false, false, 24), "tree", [], "any", false, false, false, 24));
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
        foreach ($context['_seq'] as $context["_key"] => $context["treeItem"]) {
            // line 25
            echo "                                ";
            $context["category"] = twig_get_attribute($this->env, $this->source, $context["treeItem"], "category", [], "any", false, false, false, 25);
            // line 26
            echo "                                ";
            $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "translated", [], "any", false, false, false, 26), "name", [], "any", false, false, false, 26);
            // line 27
            echo "                                ";
            $context["categorId"] = twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 27);
            // line 28
            echo "
                                ";
            // line 29
            $this->displayBlock('layout_main_navigation_menu_item', $context, $blocks);
            // line 54
            echo "                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['treeItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                        ";
    }

    // line 29
    public function block_layout_main_navigation_menu_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "                                    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "type", [], "any", false, false, false, 30) == "folder")) {
            // line 31
            echo "                                        <div class=\"nav-link main-navigation-link\"
                                            ";
            // line 32
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["treeItem"] ?? null), "children", [], "any", false, false, false, 32)) > 0)) {
                // line 33
                echo "                                                data-flyout-menu-trigger=\"";
                echo twig_escape_filter($this->env, ($context["categorId"] ?? null), "html", null, true);
                echo "\"
                                            ";
            }
            // line 35
            echo "                                              title=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">
                                            <div class=\"main-navigation-link-text\">
                                                <span itemprop=\"name\">";
            // line 37
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "</span>
                                            </div>
                                        </div>
                                    ";
        } else {
            // line 41
            echo "                                        <a class=\"nav-link main-navigation-link";
            if ((($context["categorId"] ?? null) === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 41), "navigation", [], "any", false, false, false, 41), "active", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41))) {
                echo " active";
            }
            echo "\"
                                           href=\"";
            // line 42
            if (twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "externalLink", [], "any", false, false, false, 42)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "externalLink", [], "any", false, false, false, 42), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.navigation.page", ["navigationId" => ($context["categorId"] ?? null)]), "html", null, true);
            }
            echo "\"
                                           itemprop=\"url\"
                                            ";
            // line 44
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["treeItem"] ?? null), "children", [], "any", false, false, false, 44)) > 0)) {
                // line 45
                echo "                                                data-flyout-menu-trigger=\"";
                echo twig_escape_filter($this->env, ($context["categorId"] ?? null), "html", null, true);
                echo "\"
                                            ";
            }
            // line 47
            echo "                                           title=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">
                                            <div class=\"main-navigation-link-text\">
                                                <span itemprop=\"name\">";
            // line 49
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "</span>
                                            </div>
                                        </a>
                                    ";
        }
        // line 53
        echo "                                ";
    }

    // line 61
    public function block_layout_main_navigation_menu_flyout_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "            ";
        $context["navigationChildrenCount"] = 0;
        // line 63
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 63), "navigation", [], "any", false, false, false, 63), "tree", [], "any", false, false, false, 63));
        foreach ($context['_seq'] as $context["_key"] => $context["treeItem"]) {
            // line 64
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["treeItem"], "category", [], "any", false, false, false, 64), "childCount", [], "any", false, false, false, 64) > 0)) {
                // line 65
                echo "                    ";
                $context["navigationChildrenCount"] = (($context["navigationChildrenCount"] ?? null) + 1);
                // line 66
                echo "                ";
            }
            // line 67
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['treeItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "
            ";
        // line 69
        if ((($context["navigationChildrenCount"] ?? null) > 0)) {
            // line 70
            echo "                ";
            $this->displayBlock('layout_main_navigation_menu_flyout_container', $context, $blocks);
            // line 90
            echo "            ";
        }
        // line 91
        echo "        ";
    }

    // line 70
    public function block_layout_main_navigation_menu_flyout_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        echo "                    <div class=\"navigation-flyouts\">
                        ";
        // line 72
        $this->displayBlock('layout_main_navigation_menu_flyouts', $context, $blocks);
        // line 88
        echo "                    </div>
                ";
    }

    // line 72
    public function block_layout_main_navigation_menu_flyouts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 73), "navigation", [], "any", false, false, false, 73), "tree", [], "any", false, false, false, 73));
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
        foreach ($context['_seq'] as $context["_key"] => $context["treeItem"]) {
            // line 74
            echo "                                ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["treeItem"], "children", [], "any", false, false, false, 74)) > 0)) {
                // line 75
                echo "                                    ";
                $this->displayBlock('layout_main_navigation_menu_flyout', $context, $blocks);
                // line 85
                echo "                                ";
            }
            // line 86
            echo "                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['treeItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "                        ";
    }

    // line 75
    public function block_layout_main_navigation_menu_flyout($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 76
        echo "                                        <div class=\"navigation-flyout\"
                                             data-flyout-menu-id=\"";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["treeItem"] ?? null), "category", [], "any", false, false, false, 77), "id", [], "any", false, false, false, 77), "html", null, true);
        echo "\">
                                            <div class=\"container\">
                                                ";
        // line 79
        $this->displayBlock('layout_main_navigation_menu_flyout_include', $context, $blocks);
        // line 82
        echo "                                            </div>
                                        </div>
                                    ";
    }

    // line 79
    public function block_layout_main_navigation_menu_flyout_include($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 80
        echo "                                                    ";
        $this->loadTemplate("@Storefront/storefront/layout/navigation/flyout.html.twig", "@Storefront/storefront/layout/navigation/navigation.html.twig", 80)->display(twig_to_array(["navigationTree" => ($context["treeItem"] ?? null), "level" => (($context["level"] ?? null) + 1)]));
        // line 81
        echo "                                                ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/navigation/navigation.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  395 => 81,  392 => 80,  388 => 79,  382 => 82,  380 => 79,  375 => 77,  372 => 76,  368 => 75,  364 => 87,  350 => 86,  347 => 85,  344 => 75,  341 => 74,  323 => 73,  319 => 72,  314 => 88,  312 => 72,  309 => 71,  305 => 70,  301 => 91,  298 => 90,  295 => 70,  293 => 69,  290 => 68,  284 => 67,  281 => 66,  278 => 65,  275 => 64,  270 => 63,  267 => 62,  263 => 61,  259 => 53,  252 => 49,  246 => 47,  240 => 45,  238 => 44,  229 => 42,  222 => 41,  215 => 37,  209 => 35,  203 => 33,  201 => 32,  198 => 31,  195 => 30,  191 => 29,  187 => 55,  173 => 54,  171 => 29,  168 => 28,  165 => 27,  162 => 26,  159 => 25,  141 => 24,  137 => 23,  129 => 18,  124 => 16,  119 => 14,  112 => 13,  108 => 12,  103 => 56,  101 => 23,  98 => 22,  96 => 12,  91 => 9,  87 => 8,  82 => 58,  80 => 8,  77 => 7,  73 => 6,  68 => 92,  66 => 61,  63 => 60,  61 => 6,  55 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/navigation/navigation.html.twig", "/opt/bitnami/apps/shopware/htdocs/vendor/shopware/storefront/Resources/views/storefront/layout/navigation/navigation.html.twig");
    }
}
