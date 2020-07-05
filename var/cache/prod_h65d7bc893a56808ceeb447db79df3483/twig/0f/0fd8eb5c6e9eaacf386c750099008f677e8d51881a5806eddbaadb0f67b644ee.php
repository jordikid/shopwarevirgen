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

/* @Storefront/storefront/layout/header/account-menu.html.twig */
class __TwigTemplate_21047b87b796de1f449079420dc1f31dd1b75bc6bc3f0ae61a47da844064c1e5 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'utilities_offcanvas_content' => [$this, 'block_utilities_offcanvas_content'],
            'layout_header_actions_account_widget_dropdown_header' => [$this, 'block_layout_header_actions_account_widget_dropdown_header'],
            'layout_header_actions_account_widget_dropdown_login' => [$this, 'block_layout_header_actions_account_widget_dropdown_login'],
            'layout_header_actions_account_widget_dropdown_links' => [$this, 'block_layout_header_actions_account_widget_dropdown_links'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/utilities/offcanvas.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Storefront/storefront/utilities/offcanvas.html.twig", "@Storefront/storefront/layout/header/account-menu.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_utilities_offcanvas_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"account-menu\">
        ";
        // line 5
        $this->displayBlock('layout_header_actions_account_widget_dropdown_header', $context, $blocks);
        // line 12
        echo "
        ";
        // line 13
        $this->displayBlock('layout_header_actions_account_widget_dropdown_login', $context, $blocks);
        // line 29
        echo "
        ";
        // line 30
        $this->displayBlock('layout_header_actions_account_widget_dropdown_links', $context, $blocks);
        // line 35
        echo "    </div>
";
    }

    // line 5
    public function block_layout_header_actions_account_widget_dropdown_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "            ";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 6), "guest", [], "any", false, false, false, 6)) {
            // line 7
            echo "                <div class=\"dropdown-header account-menu-header\">
                    ";
            // line 8
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.myAccount"));
            echo "
                </div>
            ";
        }
        // line 11
        echo "        ";
    }

    // line 13
    public function block_layout_header_actions_account_widget_dropdown_login($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "            ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 14)) {
            // line 15
            echo "                <div class=\"account-menu-login\">
                    <a href=\"";
            // line 16
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.login.page");
            echo "\"
                       title=\"";
            // line 17
            echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.loginSubmit")), "html", null, true);
            echo "\"
                       class=\"btn btn-primary account-menu-login-button\">
                        ";
            // line 19
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.loginSubmit"));
            echo "
                    </a>

                    <div class=\"account-menu-register\">
                        ";
            // line 23
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.orRegister"));
            echo " <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.login.page");
            echo "\"
                                                            title=\"";
            // line 24
            echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.orRegisterLink")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.orRegisterLink")), "html", null, true);
            echo "</a>
                    </div>
                </div>
            ";
        }
        // line 28
        echo "        ";
    }

    // line 30
    public function block_layout_header_actions_account_widget_dropdown_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "            <div class=\"account-menu-links\">
                ";
        // line 32
        $this->loadTemplate("@Storefront/storefront/page/account/sidebar.html.twig", "@Storefront/storefront/layout/header/account-menu.html.twig", 32)->display(twig_array_merge($context, ["headerWidget" => true]));
        // line 33
        echo "            </div>
        ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/header/account-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 33,  145 => 32,  142 => 31,  138 => 30,  134 => 28,  125 => 24,  119 => 23,  112 => 19,  107 => 17,  103 => 16,  100 => 15,  97 => 14,  93 => 13,  89 => 11,  83 => 8,  80 => 7,  77 => 6,  73 => 5,  68 => 35,  66 => 30,  63 => 29,  61 => 13,  58 => 12,  56 => 5,  53 => 4,  49 => 3,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/header/account-menu.html.twig", "/opt/bitnami/apps/shopware/htdocs/vendor/shopware/storefront/Resources/views/storefront/layout/header/account-menu.html.twig");
    }
}
