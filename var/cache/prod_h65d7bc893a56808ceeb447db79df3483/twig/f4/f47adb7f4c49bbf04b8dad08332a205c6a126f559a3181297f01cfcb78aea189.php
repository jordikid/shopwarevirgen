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

/* @Storefront/storefront/layout/footer/footer.html.twig */
class __TwigTemplate_800be5afe04fe696981f07df2326815bcc4ad4625740e387098aa643cae638fd extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_footer_inner_container' => [$this, 'block_layout_footer_inner_container'],
            'layout_footer_navigation' => [$this, 'block_layout_footer_navigation'],
            'layout_footer_navigation_hotline' => [$this, 'block_layout_footer_navigation_hotline'],
            'layout_footer_navigation_hotline_headline' => [$this, 'block_layout_footer_navigation_hotline_headline'],
            'layout_footer_navigation_hotline_icons' => [$this, 'block_layout_footer_navigation_hotline_icons'],
            'layout_footer_navigation_hotline_content' => [$this, 'block_layout_footer_navigation_hotline_content'],
            'layout_footer_navigation_columns' => [$this, 'block_layout_footer_navigation_columns'],
            'layout_footer_navigation_column' => [$this, 'block_layout_footer_navigation_column'],
            'layout_footer_navigation_information_headline' => [$this, 'block_layout_footer_navigation_information_headline'],
            'layout_footer_navigation_information_icons' => [$this, 'block_layout_footer_navigation_information_icons'],
            'layout_footer_navigation_information_content' => [$this, 'block_layout_footer_navigation_information_content'],
            'layout_footer_navigation_information_links' => [$this, 'block_layout_footer_navigation_information_links'],
            'layout_footer_navigation_information_link_item' => [$this, 'block_layout_footer_navigation_information_link_item'],
            'layout_footer_navigation_information_link' => [$this, 'block_layout_footer_navigation_information_link'],
            'layout_footer_payment_shipping_logos' => [$this, 'block_layout_footer_payment_shipping_logos'],
            'layout_footer_payment_logos' => [$this, 'block_layout_footer_payment_logos'],
            'layout_footer_payment_logo' => [$this, 'block_layout_footer_payment_logo'],
            'layout_footer_shipping_logos' => [$this, 'block_layout_footer_shipping_logos'],
            'layout_footer_shipping_logo' => [$this, 'block_layout_footer_shipping_logo'],
            'layout_footer_bottom' => [$this, 'block_layout_footer_bottom'],
            'layout_footer_vat' => [$this, 'block_layout_footer_vat'],
            'layout_footer_service_menu' => [$this, 'block_layout_footer_service_menu'],
            'layout_footer_service_menu_content' => [$this, 'block_layout_footer_service_menu_content'],
            'layout_footer_service_menu_item' => [$this, 'block_layout_footer_service_menu_item'],
            'layout_footer_copyright' => [$this, 'block_layout_footer_copyright'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('layout_footer_inner_container', $context, $blocks);
    }

    public function block_layout_footer_inner_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $this->displayBlock('layout_footer_navigation', $context, $blocks);
        // line 105
        echo "
    ";
        // line 106
        $this->displayBlock('layout_footer_payment_shipping_logos', $context, $blocks);
        // line 153
        echo "
    ";
        // line 154
        $this->displayBlock('layout_footer_bottom', $context, $blocks);
    }

    // line 2
    public function block_layout_footer_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "        <div id=\"footerColumns\"
             class=\"row footer-columns\"
             data-collapse-footer=\"true\">
            ";
        // line 6
        $this->displayBlock('layout_footer_navigation_hotline', $context, $blocks);
        // line 46
        echo "
            ";
        // line 47
        $this->displayBlock('layout_footer_navigation_columns', $context, $blocks);
        // line 103
        echo "        </div>
    ";
    }

    // line 6
    public function block_layout_footer_navigation_hotline($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "                <div class=\"col-md-4 footer-column js-footer-column\">
                    ";
        // line 8
        $this->displayBlock('layout_footer_navigation_hotline_headline', $context, $blocks);
        // line 27
        echo "
                    ";
        // line 28
        $this->displayBlock('layout_footer_navigation_hotline_content', $context, $blocks);
        // line 44
        echo "                </div>
            ";
    }

    // line 8
    public function block_layout_footer_navigation_hotline_headline($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "                        <div class=\"footer-column-headline footer-headline js-footer-column-headline js-collapse-footer-column-trigger\"
                             id=\"collapseFooterHotlineTitle\"
                             data-target=\"#collapseFooterHotline\"
                             aria-expanded=\"true\"
                             aria-controls=\"collapseFooterHotline\">
                            ";
        // line 14
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer.serviceHotlineHeadline"));
        echo "
                            ";
        // line 15
        $this->displayBlock('layout_footer_navigation_hotline_icons', $context, $blocks);
        // line 25
        echo "                        </div>
                    ";
    }

    // line 15
    public function block_layout_footer_navigation_hotline_icons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "                                <div class=\"footer-column-toggle\">
                                    <span class=\"footer-plus-icon\">
                                        ";
        // line 18
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/footer/footer.html.twig", 18);
        })())->display(twig_array_merge($context, ["name" => "plus"]));
        // line 19
        echo "                                    </span>
                                    <span class=\"footer-minus-icon\">
                                        ";
        // line 21
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/footer/footer.html.twig", 21);
        })())->display(twig_array_merge($context, ["name" => "minus"]));
        // line 22
        echo "                                    </span>
                                </div>
                            ";
    }

    // line 28
    public function block_layout_footer_navigation_hotline_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "                        <div id=\"collapseFooterHotline\"
                             class=\"footer-column-content collapse js-footer-column-content footer-contact\"
                             aria-labelledby=\"collapseFooterHotlineTitle\">
                            <div class=\"footer-column-content-inner\">
                                <p class=\"footer-contact-hotline\">
                                    ";
        // line 34
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer.serviceHotline"));
        echo "
                                </p>
                            </div>
                            <div class=\"footer-contact-form\">
                                ";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer.serviceContactLink", ["%url%" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 39
($context["shopware"] ?? null), "config", [], "any", false, false, false, 39), "core", [], "any", false, false, false, 39), "basicInformation", [], "any", false, false, false, 39), "contactPage", [], "any", false, false, false, 39)])]);
        // line 40
        echo "
                            </div>
                        </div>
                    ";
    }

    // line 47
    public function block_layout_footer_navigation_columns($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, false, 48), "navigation", [], "any", false, false, false, 48), "tree", [], "any", false, false, false, 48));
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
        foreach ($context['_seq'] as $context["_key"] => $context["root"]) {
            // line 49
            echo "                    ";
            $this->displayBlock('layout_footer_navigation_column', $context, $blocks);
            // line 101
            echo "                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['root'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "            ";
    }

    // line 49
    public function block_layout_footer_navigation_column($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "                        <div class=\"col-md-4 footer-column js-footer-column\">
                            ";
        // line 51
        $this->displayBlock('layout_footer_navigation_information_headline', $context, $blocks);
        // line 70
        echo "
                            ";
        // line 71
        $this->displayBlock('layout_footer_navigation_information_content', $context, $blocks);
        // line 99
        echo "                        </div>
                    ";
    }

    // line 51
    public function block_layout_footer_navigation_information_headline($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "                                <div class=\"footer-column-headline footer-headline js-collapse-footer-column-trigger\"
                                     data-target=\"#collapseFooterTitle";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 53), "html", null, true);
        echo "\"
                                     aria-expanded=\"true\"
                                     aria-controls=\"collapseFooter";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 55), "html", null, true);
        echo "\">

                                    ";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["root"] ?? null), "category", [], "any", false, false, false, 57), "translated", [], "any", false, false, false, 57), "name", [], "any", false, false, false, 57), "html", null, true);
        echo "
                                    ";
        // line 58
        $this->displayBlock('layout_footer_navigation_information_icons', $context, $blocks);
        // line 68
        echo "                                </div>
                            ";
    }

    // line 58
    public function block_layout_footer_navigation_information_icons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "                                        <div class=\"footer-column-toggle\">
                                            <span class=\"footer-plus-icon\">
                                                ";
        // line 61
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/footer/footer.html.twig", 61);
        })())->display(twig_array_merge($context, ["name" => "plus"]));
        // line 62
        echo "                                            </span>
                                            <span class=\"footer-minus-icon\">
                                                ";
        // line 64
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/footer/footer.html.twig", 64);
        })())->display(twig_array_merge($context, ["name" => "minus"]));
        // line 65
        echo "                                            </span>
                                        </div>
                                    ";
    }

    // line 71
    public function block_layout_footer_navigation_information_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 72
        echo "                                <div id=\"collapseFooter";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 72), "html", null, true);
        echo "\"
                                     class=\"footer-column-content collapse js-footer-column-content\"
                                     aria-labelledby=\"collapseFooterTitle";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 74), "html", null, true);
        echo "\">
                                    <div class=\"footer-column-content-inner\">
                                        ";
        // line 76
        $this->displayBlock('layout_footer_navigation_information_links', $context, $blocks);
        // line 96
        echo "                                    </div>
                                </div>
                            ";
    }

    // line 76
    public function block_layout_footer_navigation_information_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 77
        echo "                                            <ul class=\"list-unstyled\">
                                                ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["root"] ?? null), "children", [], "any", false, false, false, 78));
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
            // line 79
            echo "                                                    ";
            $context["category"] = twig_get_attribute($this->env, $this->source, $context["treeItem"], "category", [], "any", false, false, false, 79);
            // line 80
            echo "                                                    ";
            $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "translated", [], "any", false, false, false, 80), "name", [], "any", false, false, false, 80);
            // line 81
            echo "                                                    ";
            $context["externalLink"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "translated", [], "any", false, false, false, 81), "externalLink", [], "any", false, false, false, 81);
            // line 82
            echo "                                                    ";
            $this->displayBlock('layout_footer_navigation_information_link_item', $context, $blocks);
            // line 93
            echo "                                                ";
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
        // line 94
        echo "                                            </ul>
                                        ";
    }

    // line 82
    public function block_layout_footer_navigation_information_link_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 83
        echo "                                                        <li class=\"footer-link-item\">
                                                            ";
        // line 84
        $this->displayBlock('layout_footer_navigation_information_link', $context, $blocks);
        // line 91
        echo "                                                        </li>
                                                    ";
    }

    // line 84
    public function block_layout_footer_navigation_information_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 85
        echo "                                                                <a class=\"footer-link\"
                                                                   href=\"";
        // line 86
        if (($context["externalLink"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["externalLink"] ?? null), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.navigation.page", ["navigationId" => twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 86)]), "html", null, true);
        }
        echo "\"
                                                                   title=\"";
        // line 87
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\">
                                                                    ";
        // line 88
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "
                                                                </a>
                                                            ";
    }

    // line 106
    public function block_layout_footer_payment_shipping_logos($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 107
        echo "        <div class=\"footer-logos\">
            ";
        // line 108
        $this->displayBlock('layout_footer_payment_logos', $context, $blocks);
        // line 129
        echo "
            ";
        // line 130
        $this->displayBlock('layout_footer_shipping_logos', $context, $blocks);
        // line 151
        echo "        </div>
    ";
    }

    // line 108
    public function block_layout_footer_payment_logos($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 109
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "salesChannelPaymentMethods", [], "any", false, false, false, 109));
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
        foreach ($context['_seq'] as $context["_key"] => $context["paymentMethod"]) {
            // line 110
            echo "                    ";
            $this->displayBlock('layout_footer_payment_logo', $context, $blocks);
            // line 127
            echo "                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paymentMethod'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "            ";
    }

    // line 110
    public function block_layout_footer_payment_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 111
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, ($context["paymentMethod"] ?? null), "media", [], "any", false, false, false, 111)) {
            // line 112
            echo "                            <div class=\"footer-logo is-payment\">
                                ";
            // line 113
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/thumbnail.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/footer/footer.html.twig", 113);
            })())->display(twig_array_merge($context, ["media" => twig_get_attribute($this->env, $this->source,             // line 114
($context["paymentMethod"] ?? null), "media", [], "any", false, false, false, 114), "sizes" => ["default" => "100px"], "attributes" => ["class" => "img-fluid footer-logo-image", "alt" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 120
($context["paymentMethod"] ?? null), "media", [], "any", false, false, false, 120), "translated", [], "any", false, false, false, 120), "alt", [], "any", false, false, false, 120)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paymentMethod"] ?? null), "media", [], "any", false, false, false, 120), "translated", [], "any", false, false, false, 120), "alt", [], "any", false, false, false, 120)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paymentMethod"] ?? null), "translated", [], "any", false, false, false, 120), "name", [], "any", false, false, false, 120))), "title" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 121
($context["paymentMethod"] ?? null), "media", [], "any", false, false, false, 121), "translated", [], "any", false, false, false, 121), "title", [], "any", false, false, false, 121)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paymentMethod"] ?? null), "media", [], "any", false, false, false, 121), "translated", [], "any", false, false, false, 121), "title", [], "any", false, false, false, 121)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paymentMethod"] ?? null), "translated", [], "any", false, false, false, 121), "name", [], "any", false, false, false, 121)))], "name" => "footer-payment-image-thumbnails"]));
            // line 124
            echo "                            </div>
                        ";
        }
        // line 126
        echo "                    ";
    }

    // line 130
    public function block_layout_footer_shipping_logos($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 131
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "salesChannelShippingMethods", [], "any", false, false, false, 131));
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
        foreach ($context['_seq'] as $context["_key"] => $context["shippingMethod"]) {
            // line 132
            echo "                    ";
            $this->displayBlock('layout_footer_shipping_logo', $context, $blocks);
            // line 149
            echo "                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shippingMethod'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "            ";
    }

    // line 132
    public function block_layout_footer_shipping_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 133
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, ($context["shippingMethod"] ?? null), "media", [], "any", false, false, false, 133)) {
            // line 134
            echo "                            <div class=\"footer-logo is-shipping\">
                                ";
            // line 135
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/thumbnail.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/footer/footer.html.twig", 135);
            })())->display(twig_array_merge($context, ["media" => twig_get_attribute($this->env, $this->source,             // line 136
($context["shippingMethod"] ?? null), "media", [], "any", false, false, false, 136), "sizes" => ["default" => "100px"], "attributes" => ["class" => "img-fluid footer-logo-image", "alt" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 142
($context["shippingMethod"] ?? null), "media", [], "any", false, false, false, 142), "translated", [], "any", false, false, false, 142), "alt", [], "any", false, false, false, 142)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shippingMethod"] ?? null), "media", [], "any", false, false, false, 142), "translated", [], "any", false, false, false, 142), "alt", [], "any", false, false, false, 142)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shippingMethod"] ?? null), "translated", [], "any", false, false, false, 142), "name", [], "any", false, false, false, 142))), "title" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 143
($context["shippingMethod"] ?? null), "media", [], "any", false, false, false, 143), "translated", [], "any", false, false, false, 143), "title", [], "any", false, false, false, 143)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shippingMethod"] ?? null), "media", [], "any", false, false, false, 143), "translated", [], "any", false, false, false, 143), "title", [], "any", false, false, false, 143)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shippingMethod"] ?? null), "translated", [], "any", false, false, false, 143), "name", [], "any", false, false, false, 143)))], "name" => "footer-shipping-image-thumbnails"]));
            // line 146
            echo "                            </div>
                        ";
        }
        // line 148
        echo "                    ";
    }

    // line 154
    public function block_layout_footer_bottom($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 155
        echo "        <div class=\"footer-bottom\">
            ";
        // line 156
        $this->displayBlock('layout_footer_vat', $context, $blocks);
        // line 165
        echo "
            ";
        // line 166
        $this->displayBlock('layout_footer_service_menu', $context, $blocks);
        // line 185
        echo "
            ";
        // line 186
        $this->displayBlock('layout_footer_copyright', $context, $blocks);
        // line 192
        echo "        </div>
    ";
    }

    // line 156
    public function block_layout_footer_vat($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 157
        echo "                <div class=\"footer-vat\">
                    ";
        // line 158
        if ((twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "taxState", [], "any", false, false, false, 158) == "gross")) {
            // line 159
            echo "                        <p>";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer.includeVat"));
            echo "</p>
                    ";
        } else {
            // line 161
            echo "                        <p>";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer.excludeVat"));
            echo "</p>
                    ";
        }
        // line 163
        echo "                </div>
            ";
    }

    // line 166
    public function block_layout_footer_service_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 167
        echo "                <div class=\"container\">
                    ";
        // line 168
        $this->displayBlock('layout_footer_service_menu_content', $context, $blocks);
        // line 183
        echo "                </div>
            ";
    }

    // line 168
    public function block_layout_footer_service_menu_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 169
        echo "                        <ul class=\"footer-service-menu-list list-unstyled\">
                            ";
        // line 170
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 170), "serviceMenu", [], "any", false, false, false, 170));
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
        foreach ($context['_seq'] as $context["_key"] => $context["serviceMenuItem"]) {
            // line 171
            echo "                                ";
            $this->displayBlock('layout_footer_service_menu_item', $context, $blocks);
            // line 180
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serviceMenuItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "                        </ul>
                    ";
    }

    // line 171
    public function block_layout_footer_service_menu_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 172
        echo "                                    <li class=\"footer-service-menu-item\">
                                        <a class=\"footer-service-menu-link\"
                                           href=\"";
        // line 174
        if (twig_get_attribute($this->env, $this->source, ($context["serviceMenuItem"] ?? null), "externalLink", [], "any", false, false, false, 174)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["serviceMenuItem"] ?? null), "externalLink", [], "any", false, false, false, 174), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.navigation.page", ["navigationId" => twig_get_attribute($this->env, $this->source, ($context["serviceMenuItem"] ?? null), "id", [], "any", false, false, false, 174)]), "html", null, true);
        }
        echo "\"
                                           title=\"";
        // line 175
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["serviceMenuItem"] ?? null), "translated", [], "any", false, false, false, 175), "name", [], "any", false, false, false, 175), "html", null, true);
        echo "\">
                                            ";
        // line 176
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["serviceMenuItem"] ?? null), "translated", [], "any", false, false, false, 176), "name", [], "any", false, false, false, 176), "html", null, true);
        echo "
                                        </a>
                                    </li>
                                ";
    }

    // line 186
    public function block_layout_footer_copyright($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 187
        echo "                <div class=\"footer-copyright\">
                    ";
        // line 188
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/footer/footer.html.twig", 188);
        })())->display(twig_array_merge($context, ["size" => "xs", "name" => "shopware"]));
        // line 189
        echo "                    ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer.copyrightInfo"));
        echo "
                </div>
            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/footer/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  766 => 189,  758 => 188,  755 => 187,  751 => 186,  743 => 176,  739 => 175,  731 => 174,  727 => 172,  723 => 171,  718 => 181,  704 => 180,  701 => 171,  684 => 170,  681 => 169,  677 => 168,  672 => 183,  670 => 168,  667 => 167,  663 => 166,  658 => 163,  652 => 161,  646 => 159,  644 => 158,  641 => 157,  637 => 156,  632 => 192,  630 => 186,  627 => 185,  625 => 166,  622 => 165,  620 => 156,  617 => 155,  613 => 154,  609 => 148,  605 => 146,  603 => 143,  602 => 142,  601 => 136,  594 => 135,  591 => 134,  588 => 133,  584 => 132,  580 => 150,  566 => 149,  563 => 132,  545 => 131,  541 => 130,  537 => 126,  533 => 124,  531 => 121,  530 => 120,  529 => 114,  522 => 113,  519 => 112,  516 => 111,  512 => 110,  508 => 128,  494 => 127,  491 => 110,  473 => 109,  469 => 108,  464 => 151,  462 => 130,  459 => 129,  457 => 108,  454 => 107,  450 => 106,  443 => 88,  439 => 87,  431 => 86,  428 => 85,  424 => 84,  419 => 91,  417 => 84,  414 => 83,  410 => 82,  405 => 94,  391 => 93,  388 => 82,  385 => 81,  382 => 80,  379 => 79,  362 => 78,  359 => 77,  355 => 76,  349 => 96,  347 => 76,  342 => 74,  336 => 72,  332 => 71,  326 => 65,  318 => 64,  314 => 62,  306 => 61,  302 => 59,  298 => 58,  293 => 68,  291 => 58,  287 => 57,  282 => 55,  277 => 53,  274 => 52,  270 => 51,  265 => 99,  263 => 71,  260 => 70,  258 => 51,  255 => 50,  251 => 49,  247 => 102,  233 => 101,  230 => 49,  212 => 48,  208 => 47,  201 => 40,  199 => 39,  198 => 38,  191 => 34,  184 => 29,  180 => 28,  174 => 22,  166 => 21,  162 => 19,  154 => 18,  150 => 16,  146 => 15,  141 => 25,  139 => 15,  135 => 14,  128 => 9,  124 => 8,  119 => 44,  117 => 28,  114 => 27,  112 => 8,  109 => 7,  105 => 6,  100 => 103,  98 => 47,  95 => 46,  93 => 6,  88 => 3,  84 => 2,  80 => 154,  77 => 153,  75 => 106,  72 => 105,  69 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/footer/footer.html.twig", "/opt/bitnami/apps/shopware/htdocs/vendor/shopware/storefront/Resources/views/storefront/layout/footer/footer.html.twig");
    }
}
