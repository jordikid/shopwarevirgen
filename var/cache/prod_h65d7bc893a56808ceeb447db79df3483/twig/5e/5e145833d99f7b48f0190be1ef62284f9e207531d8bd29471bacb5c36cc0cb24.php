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

/* @Storefront/storefront/base.html.twig */
class __TwigTemplate_909d66bb194c31b7019df93427d1f3dcf5d1fa045589347bc5178104e30bd3b8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'base_doctype' => [$this, 'block_base_doctype'],
            'base_html' => [$this, 'block_base_html'],
            'base_head' => [$this, 'block_base_head'],
            'base_body' => [$this, 'block_base_body'],
            'base_body_classes' => [$this, 'block_base_body_classes'],
            'base_body_inner' => [$this, 'block_base_body_inner'],
            'base_noscript' => [$this, 'block_base_noscript'],
            'base_header' => [$this, 'block_base_header'],
            'base_header_inner' => [$this, 'block_base_header_inner'],
            'base_navigation' => [$this, 'block_base_navigation'],
            'base_navigation_inner' => [$this, 'block_base_navigation_inner'],
            'base_offcanvas_navigation' => [$this, 'block_base_offcanvas_navigation'],
            'base_offcanvas_navigation_inner' => [$this, 'block_base_offcanvas_navigation_inner'],
            'base_main' => [$this, 'block_base_main'],
            'base_flashbags' => [$this, 'block_base_flashbags'],
            'base_main_inner' => [$this, 'block_base_main_inner'],
            'base_main_container' => [$this, 'block_base_main_container'],
            'base_breadcrumb' => [$this, 'block_base_breadcrumb'],
            'base_content' => [$this, 'block_base_content'],
            'base_footer' => [$this, 'block_base_footer'],
            'base_footer_inner' => [$this, 'block_base_footer_inner'],
            'base_scroll_up' => [$this, 'block_base_scroll_up'],
            'base_cookie_permission' => [$this, 'block_base_cookie_permission'],
            'base_pseudo_modal' => [$this, 'block_base_pseudo_modal'],
            'base_body_script' => [$this, 'block_base_body_script'],
            'base_script_token' => [$this, 'block_base_script_token'],
            'base_script_router' => [$this, 'block_base_script_router'],
            'base_script_breakpoints' => [$this, 'block_base_script_breakpoints'],
            'base_script_csrf' => [$this, 'block_base_script_csrf'],
            'base_script_hmr_mode' => [$this, 'block_base_script_hmr_mode'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["isHMRMode"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 2), "headers", [], "any", false, false, false, 2), "get", [0 => "hot-reload-mode"], "method", false, false, false, 2);
        // line 3
        echo "
";
        // line 4
        $this->displayBlock('base_doctype', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('base_html', $context, $blocks);
        // line 13
        echo "
";
        // line 14
        $this->displayBlock('base_head', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('base_body', $context, $blocks);
        // line 170
        echo "</html>
";
    }

    // line 4
    public function block_base_doctype($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "<!DOCTYPE html>
";
    }

    // line 8
    public function block_base_html($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "<html lang=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 9), "locale", [], "any", false, false, false, 9), "html", null, true);
        echo "\"
      itemscope=\"itemscope\"
      itemtype=\"https://schema.org/WebPage\">
";
    }

    // line 14
    public function block_base_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "    ";
        $this->loadTemplate("@Storefront/storefront/layout/meta.html.twig", "@Storefront/storefront/base.html.twig", 15)->display($context);
    }

    // line 18
    public function block_base_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    <body class=\"";
        $this->displayBlock('base_body_classes', $context, $blocks);
        echo "\">
    ";
        // line 20
        $this->displayBlock('base_body_inner', $context, $blocks);
        // line 96
        echo "
    ";
        // line 97
        $this->displayBlock('base_scroll_up', $context, $blocks);
        // line 100
        echo "
    ";
        // line 101
        $this->displayBlock('base_cookie_permission', $context, $blocks);
        // line 104
        echo "
    ";
        // line 105
        $this->displayBlock('base_pseudo_modal', $context, $blocks);
        // line 108
        echo "
    ";
        // line 109
        $this->displayBlock('base_body_script', $context, $blocks);
        // line 168
        echo "    </body>
";
    }

    // line 19
    public function block_base_body_classes($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "is-ctl-";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["controllerName"] ?? null)), "html", null, true);
        echo " is-act-";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["controllerAction"] ?? null)), "html", null, true);
    }

    // line 20
    public function block_base_body_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "        ";
        $this->displayBlock('base_noscript', $context, $blocks);
        // line 29
        echo "
        ";
        // line 30
        $this->displayBlock('base_header', $context, $blocks);
        // line 39
        echo "
        ";
        // line 40
        $this->displayBlock('base_navigation', $context, $blocks);
        // line 47
        echo "
        ";
        // line 48
        $this->displayBlock('base_offcanvas_navigation', $context, $blocks);
        // line 57
        echo "
        ";
        // line 58
        $this->displayBlock('base_main', $context, $blocks);
        // line 85
        echo "
        ";
        // line 86
        $this->displayBlock('base_footer', $context, $blocks);
        // line 95
        echo "    ";
    }

    // line 21
    public function block_base_noscript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "            <noscript class=\"noscript-main\">
                ";
        // line 23
        $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/base.html.twig", 23)->display(twig_array_merge($context, ["type" => "info", "content" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.noscriptNotice"))]));
        // line 27
        echo "            </noscript>
        ";
    }

    // line 30
    public function block_base_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "            <header class=\"header-main\">
                ";
        // line 32
        $this->displayBlock('base_header_inner', $context, $blocks);
        // line 37
        echo "            </header>
        ";
    }

    // line 32
    public function block_base_header_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "                    <div class=\"container\">
                        ";
        // line 34
        $this->loadTemplate("@Storefront/storefront/layout/header/header.html.twig", "@Storefront/storefront/base.html.twig", 34)->display($context);
        // line 35
        echo "                    </div>
                ";
    }

    // line 40
    public function block_base_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "            <div class=\"nav-main\">
                ";
        // line 42
        $this->displayBlock('base_navigation_inner', $context, $blocks);
        // line 45
        echo "            </div>
        ";
    }

    // line 42
    public function block_base_navigation_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "                    ";
        $this->loadTemplate("@Storefront/storefront/layout/navigation/navigation.html.twig", "@Storefront/storefront/base.html.twig", 43)->display($context);
        // line 44
        echo "                ";
    }

    // line 48
    public function block_base_offcanvas_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 49), "navigation", [], "any", false, false, false, 49)) {
            // line 50
            echo "                <div class=\"d-none js-navigation-offcanvas-initial-content\">
                    ";
            // line 51
            $this->displayBlock('base_offcanvas_navigation_inner', $context, $blocks);
            // line 54
            echo "                </div>
            ";
        }
        // line 56
        echo "        ";
    }

    // line 51
    public function block_base_offcanvas_navigation_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "                        ";
        $this->loadTemplate("@Storefront/storefront/layout/navigation/offcanvas/navigation.html.twig", "@Storefront/storefront/base.html.twig", 52)->display(twig_array_merge($context, ["navigation" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 52), "navigation", [], "any", false, false, false, 52)]));
        // line 53
        echo "                    ";
    }

    // line 58
    public function block_base_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "            <main class=\"content-main\">
                ";
        // line 60
        $this->displayBlock('base_flashbags', $context, $blocks);
        // line 67
        echo "
                ";
        // line 68
        $this->displayBlock('base_main_inner', $context, $blocks);
        // line 83
        echo "            </main>
        ";
    }

    // line 60
    public function block_base_flashbags($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "                    <div class=\"flashbags container\">
                        ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 62));
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
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 63
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/base.html.twig", 63)->display(twig_array_merge($context, ["type" => $context["type"], "list" => $context["messages"]]));
            // line 64
            echo "                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                    </div>
                ";
    }

    // line 68
    public function block_base_main_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
        echo "                    <div class=\"container\">
                        ";
        // line 70
        $this->displayBlock('base_main_container', $context, $blocks);
        // line 81
        echo "                    </div>
                ";
    }

    // line 70
    public function block_base_main_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        echo "                            <div class=\"container-main\">
                                ";
        // line 72
        $this->displayBlock('base_breadcrumb', $context, $blocks);
        // line 77
        echo "
                                ";
        // line 78
        $this->displayBlock('base_content', $context, $blocks);
        // line 79
        echo "                            </div>
                        ";
    }

    // line 72
    public function block_base_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        echo "                                    ";
        if (($context["breadcrumbList"] ?? null)) {
            // line 74
            echo "                                        ";
            $this->loadTemplate("@Storefront/storefront/layout/breadcrumb.html.twig", "@Storefront/storefront/base.html.twig", 74)->display($context);
            // line 75
            echo "                                    ";
        }
        // line 76
        echo "                                ";
    }

    // line 78
    public function block_base_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 86
    public function block_base_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 87
        echo "            <footer class=\"footer-main\">
                ";
        // line 88
        $this->displayBlock('base_footer_inner', $context, $blocks);
        // line 93
        echo "            </footer>
        ";
    }

    // line 88
    public function block_base_footer_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 89
        echo "                    <div class=\"container\">
                        ";
        // line 90
        $this->loadTemplate("@Storefront/storefront/layout/footer/footer.html.twig", "@Storefront/storefront/base.html.twig", 90)->display($context);
        // line 91
        echo "                    </div>
                ";
    }

    // line 97
    public function block_base_scroll_up($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 98
        echo "        ";
        $this->loadTemplate("@Storefront/storefront/layout/scroll-up.html.twig", "@Storefront/storefront/base.html.twig", 98)->display($context);
        // line 99
        echo "    ";
    }

    // line 101
    public function block_base_cookie_permission($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 102
        echo "        ";
        $this->loadTemplate("@Storefront/storefront/layout/cookie/cookie-permission.html.twig", "@Storefront/storefront/base.html.twig", 102)->display($context);
        // line 103
        echo "    ";
    }

    // line 105
    public function block_base_pseudo_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 106
        echo "        ";
        $this->loadTemplate("@Storefront/storefront/component/pseudo-modal.html.twig", "@Storefront/storefront/base.html.twig", 106)->display($context);
        // line 107
        echo "    ";
    }

    // line 109
    public function block_base_body_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 110
        echo "        ";
        $this->displayBlock('base_script_token', $context, $blocks);
        // line 116
        echo "
        ";
        // line 117
        $this->displayBlock('base_script_router', $context, $blocks);
        // line 135
        echo "
        ";
        // line 136
        $this->displayBlock('base_script_breakpoints', $context, $blocks);
        // line 142
        echo "
        ";
        // line 143
        $this->displayBlock('base_script_csrf', $context, $blocks);
        // line 151
        echo "
        ";
        // line 152
        $this->displayBlock('base_script_hmr_mode', $context, $blocks);
        // line 167
        echo "    ";
    }

    // line 110
    public function block_base_script_token($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 111
        echo "            <script>
                window.accessKey = '";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 112), "accessKey", [], "any", false, false, false, 112), "html", null, true);
        echo "';
                window.contextToken = '";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "token", [], "any", false, false, false, 113), "html", null, true);
        echo "';
            </script>
        ";
    }

    // line 117
    public function block_base_script_router($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 118
        echo "            ";
        // line 119
        echo "            <script>
                window.activeNavigationId = '";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 120), "navigation", [], "any", false, false, false, 120), "active", [], "any", false, false, false, 120), "id", [], "any", false, false, false, 120), "html", null, true);
        echo "';
                window.router = {
                    'frontend.cart.offcanvas': '";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cart.offcanvas");
        echo "',
                    'frontend.cookie.offcanvas': '";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cookie.offcanvas");
        echo "',
                    'frontend.checkout.finish.page': '";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.finish.page");
        echo "',
                    'frontend.checkout.info': '";
        // line 125
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.info");
        echo "',
                    'frontend.menu.offcanvas': '";
        // line 126
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.menu.offcanvas");
        echo "',
                    'frontend.cms.page': '";
        // line 127
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page");
        echo "',
                    'frontend.cms.navigation.page': '";
        // line 128
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.navigation.page");
        echo "',
                    'frontend.account.addressbook': '";
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.addressbook");
        echo "',
                    'frontend.csrf.generateToken': '";
        // line 130
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.csrf.generateToken");
        echo "',
                    'frontend.country.country-data': '";
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.country.country.data");
        echo "',
                };
            </script>
        ";
    }

    // line 136
    public function block_base_script_breakpoints($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 137
        echo "            ";
        // line 138
        echo "            <script>
                window.breakpoints = ";
        // line 139
        echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "theme", [], "any", false, false, false, 139), "breakpoint", [], "any", false, false, false, 139));
        echo ";
            </script>
        ";
    }

    // line 143
    public function block_base_script_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 144
        echo "            <script>
                window.csrf = {
                    'enabled': '";
        // line 146
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "csrfEnabled", [], "any", false, false, false, 146), "html", null, true);
        echo "',
                    'mode': '";
        // line 147
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "csrfMode", [], "any", false, false, false, 147), "html", null, true);
        echo "'
                }
            </script>
        ";
    }

    // line 152
    public function block_base_script_hmr_mode($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 153
        echo "            ";
        if (($context["isHMRMode"] ?? null)) {
            // line 154
            echo "                ";
            $context["baseUrl"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 154), "getScheme", [], "method", false, false, false, 154) . "://") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 154), "getHost", [], "method", false, false, false, 154));
            // line 155
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["baseUrl"] ?? null), "html", null, true);
            echo ":9999/js/vendor-node.js\"></script>
                <script type=\"text/javascript\" src=\"";
            // line 156
            echo twig_escape_filter($this->env, ($context["baseUrl"] ?? null), "html", null, true);
            echo ":9999/js/vendor-shared.js\"></script>
                <script type=\"text/javascript\" src=\"";
            // line 157
            echo twig_escape_filter($this->env, ($context["baseUrl"] ?? null), "html", null, true);
            echo ":9999/js/runtime.js\"></script>
                <script type=\"text/javascript\" src=\"";
            // line 158
            echo twig_escape_filter($this->env, ($context["baseUrl"] ?? null), "html", null, true);
            echo ":9999/js/app.js\"></script>
                ";
            // line 160
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["baseUrl"] ?? null), "html", null, true);
            echo ":9999/js/storefront.js\"></script>
            ";
        } else {
            // line 162
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "theme", [], "any", false, false, false, 162), "assets", [], "any", false, false, false, 162), "js", [], "any", false, false, false, 162));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 163
                echo "                    <script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["file"]), "html", null, true);
                echo "\" async></script>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            echo "            ";
        }
        // line 166
        echo "        ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  680 => 166,  677 => 165,  668 => 163,  663 => 162,  657 => 160,  653 => 158,  649 => 157,  645 => 156,  640 => 155,  637 => 154,  634 => 153,  630 => 152,  622 => 147,  618 => 146,  614 => 144,  610 => 143,  603 => 139,  600 => 138,  598 => 137,  594 => 136,  586 => 131,  582 => 130,  578 => 129,  574 => 128,  570 => 127,  566 => 126,  562 => 125,  558 => 124,  554 => 123,  550 => 122,  545 => 120,  542 => 119,  540 => 118,  536 => 117,  529 => 113,  525 => 112,  522 => 111,  518 => 110,  514 => 167,  512 => 152,  509 => 151,  507 => 143,  504 => 142,  502 => 136,  499 => 135,  497 => 117,  494 => 116,  491 => 110,  487 => 109,  483 => 107,  480 => 106,  476 => 105,  472 => 103,  469 => 102,  465 => 101,  461 => 99,  458 => 98,  454 => 97,  449 => 91,  447 => 90,  444 => 89,  440 => 88,  435 => 93,  433 => 88,  430 => 87,  426 => 86,  420 => 78,  416 => 76,  413 => 75,  410 => 74,  407 => 73,  403 => 72,  398 => 79,  396 => 78,  393 => 77,  391 => 72,  388 => 71,  384 => 70,  379 => 81,  377 => 70,  374 => 69,  370 => 68,  365 => 65,  351 => 64,  348 => 63,  331 => 62,  328 => 61,  324 => 60,  319 => 83,  317 => 68,  314 => 67,  312 => 60,  309 => 59,  305 => 58,  301 => 53,  298 => 52,  294 => 51,  290 => 56,  286 => 54,  284 => 51,  281 => 50,  278 => 49,  274 => 48,  270 => 44,  267 => 43,  263 => 42,  258 => 45,  256 => 42,  253 => 41,  249 => 40,  244 => 35,  242 => 34,  239 => 33,  235 => 32,  230 => 37,  228 => 32,  225 => 31,  221 => 30,  216 => 27,  214 => 23,  211 => 22,  207 => 21,  203 => 95,  201 => 86,  198 => 85,  196 => 58,  193 => 57,  191 => 48,  188 => 47,  186 => 40,  183 => 39,  181 => 30,  178 => 29,  175 => 21,  171 => 20,  161 => 19,  156 => 168,  154 => 109,  151 => 108,  149 => 105,  146 => 104,  144 => 101,  141 => 100,  139 => 97,  136 => 96,  134 => 20,  129 => 19,  125 => 18,  120 => 15,  116 => 14,  107 => 9,  103 => 8,  98 => 5,  94 => 4,  89 => 170,  87 => 18,  84 => 17,  82 => 14,  79 => 13,  77 => 8,  74 => 7,  72 => 4,  69 => 3,  67 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/base.html.twig", "/opt/bitnami/apps/shopware/htdocs/vendor/shopware/storefront/Resources/views/storefront/base.html.twig");
    }
}
