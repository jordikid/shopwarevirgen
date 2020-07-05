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

/* @Storefront/storefront/layout/meta.html.twig */
class __TwigTemplate_db0904309c2d71f6ef828bb5d40957bc8cfde1df3923df95b6aa9727d9a0e927 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_head_inner' => [$this, 'block_layout_head_inner'],
            'layout_head_meta_tags' => [$this, 'block_layout_head_meta_tags'],
            'layout_head_meta_tags_charset' => [$this, 'block_layout_head_meta_tags_charset'],
            'layout_head_meta_tags_viewport' => [$this, 'block_layout_head_meta_tags_viewport'],
            'layout_head_meta_tags_general' => [$this, 'block_layout_head_meta_tags_general'],
            'layout_head_meta_tags_robots' => [$this, 'block_layout_head_meta_tags_robots'],
            'layout_head_meta_tags_keywords' => [$this, 'block_layout_head_meta_tags_keywords'],
            'layout_head_meta_tags_description' => [$this, 'block_layout_head_meta_tags_description'],
            'layout_head_meta_tags_opengraph' => [$this, 'block_layout_head_meta_tags_opengraph'],
            'layout_head_meta_tags_description_og' => [$this, 'block_layout_head_meta_tags_description_og'],
            'layout_head_meta_tags_description_twitter' => [$this, 'block_layout_head_meta_tags_description_twitter'],
            'layout_head_meta_tags_schema_webpage' => [$this, 'block_layout_head_meta_tags_schema_webpage'],
            'layout_head_meta_tags_hreflangs' => [$this, 'block_layout_head_meta_tags_hreflangs'],
            'layout_head_favicon' => [$this, 'block_layout_head_favicon'],
            'layout_head_apple' => [$this, 'block_layout_head_apple'],
            'layout_head_android' => [$this, 'block_layout_head_android'],
            'layout_head_canonical' => [$this, 'block_layout_head_canonical'],
            'layout_head_title' => [$this, 'block_layout_head_title'],
            'layout_head_title_inner' => [$this, 'block_layout_head_title_inner'],
            'layout_head_stylesheet' => [$this, 'block_layout_head_stylesheet'],
            'layout_head_javascript_tracking' => [$this, 'block_layout_head_javascript_tracking'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('layout_head_inner', $context, $blocks);
    }

    public function block_layout_head_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context["metaInformation"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metaInformation", [], "any", false, false, false, 2);
        // line 3
        echo "    ";
        $context["basicConfig"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 3), "core", [], "any", false, false, false, 3), "basicInformation", [], "any", false, false, false, 3);
        // line 4
        echo "    ";
        $context["metaDescription"] = twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_trim_filter(strip_tags(twig_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "metaDescription", [], "any", false, false, false, 4)))), "truncate", [0 => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, true, false, 4), "seo", [], "any", false, true, false, 4), "descriptionMaxLength", [], "any", true, true, false, 4) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, true, false, 4), "seo", [], "any", false, true, false, 4), "descriptionMaxLength", [], "any", false, false, false, 4)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, true, false, 4), "seo", [], "any", false, true, false, 4), "descriptionMaxLength", [], "any", false, false, false, 4)) : (160))], "method", false, false, false, 4);
        // line 5
        echo "    ";
        $context["metaTitle"] = twig_trim_filter(strip_tags(twig_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "metaTitle", [], "any", false, false, false, 5)));
        // line 6
        echo "    ";
        $context["metaKeywords"] = twig_trim_filter(strip_tags(twig_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "metaKeywords", [], "any", false, false, false, 6)));
        // line 7
        echo "
    <head>
        ";
        // line 9
        $this->displayBlock('layout_head_meta_tags', $context, $blocks);
        // line 71
        echo "
        ";
        // line 72
        $this->displayBlock('layout_head_favicon', $context, $blocks);
        // line 76
        echo "
        ";
        // line 77
        $this->displayBlock('layout_head_apple', $context, $blocks);
        // line 82
        echo "
        ";
        // line 83
        $this->displayBlock('layout_head_android', $context, $blocks);
        // line 90
        echo "
        ";
        // line 91
        $this->displayBlock('layout_head_canonical', $context, $blocks);
        // line 92
        echo "
        ";
        // line 93
        $this->displayBlock('layout_head_title', $context, $blocks);
        // line 100
        echo "
        ";
        // line 101
        $this->displayBlock('layout_head_stylesheet', $context, $blocks);
        // line 111
        echo "
        ";
        // line 113
        echo "        ";
        $this->displayBlock('layout_head_javascript_tracking', $context, $blocks);
        // line 114
        echo "    </head>
";
    }

    // line 9
    public function block_layout_head_meta_tags($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "            ";
        $this->displayBlock('layout_head_meta_tags_charset', $context, $blocks);
        // line 13
        echo "
            ";
        // line 14
        $this->displayBlock('layout_head_meta_tags_viewport', $context, $blocks);
        // line 18
        echo "
            ";
        // line 19
        $this->displayBlock('layout_head_meta_tags_general', $context, $blocks);
        // line 31
        echo "
            ";
        // line 32
        $this->displayBlock('layout_head_meta_tags_opengraph', $context, $blocks);
        // line 55
        echo "
            ";
        // line 56
        $this->displayBlock('layout_head_meta_tags_schema_webpage', $context, $blocks);
        // line 66
        echo "
            ";
        // line 67
        $this->displayBlock('layout_head_meta_tags_hreflangs', $context, $blocks);
        // line 70
        echo "        ";
    }

    // line 10
    public function block_layout_head_meta_tags_charset($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "                <meta charset=\"utf-8\">
            ";
    }

    // line 14
    public function block_layout_head_meta_tags_viewport($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "                <meta name=\"viewport\"
                      content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
            ";
    }

    // line 19
    public function block_layout_head_meta_tags_general($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "                <meta name=\"author\"
                      content=\"";
        // line 21
        echo twig_escape_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "author", [], "any", false, false, false, 21)), "html", null, true);
        echo "\"/>
                <meta name=\"robots\"
                      content=\"";
        // line 23
        $this->displayBlock('layout_head_meta_tags_robots', $context, $blocks);
        echo "\"/>
                <meta name=\"revisit-after\"
                      content=\"";
        // line 25
        echo twig_escape_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "revisit", [], "any", false, false, false, 25)), "html", null, true);
        echo "\"/>
                <meta name=\"keywords\"
                      content=\"";
        // line 27
        $this->displayBlock('layout_head_meta_tags_keywords', $context, $blocks);
        echo "\"/>
                <meta name=\"description\"
                      content=\"";
        // line 29
        $this->displayBlock('layout_head_meta_tags_description', $context, $blocks);
        echo "\"/>
            ";
    }

    // line 23
    public function block_layout_head_meta_tags_robots($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "robots", [], "any", false, false, false, 23), "html", null, true);
    }

    // line 27
    public function block_layout_head_meta_tags_keywords($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["metaKeywords"] ?? null), "html", null, true);
    }

    // line 29
    public function block_layout_head_meta_tags_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["metaDescription"] ?? null), "html", null, true);
    }

    // line 32
    public function block_layout_head_meta_tags_opengraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "                <meta property=\"og:type\"
                      content=\"website\"/>
                <meta property=\"og:site_name\"
                      content=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["basicConfig"] ?? null), "shopName", [], "any", false, false, false, 36), "html", null, true);
        echo "\"/>
                <meta property=\"og:title\"
                      content=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["metaTitle"] ?? null), "html", null, true);
        echo "\"/>
                <meta property=\"og:description\"
                      content=\"";
        // line 40
        $this->displayBlock('layout_head_meta_tags_description_og', $context, $blocks);
        echo "\"/>
                <meta property=\"og:image\"
                      content=\"";
        // line 42
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "theme", [], "any", false, false, false, 42)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["sw-logo-desktop"] ?? null) : null), "html", null, true);
        echo "\"/>

                <meta name=\"twitter:card\"
                      content=\"website\"/>
                <meta name=\"twitter:site\"
                      content=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["basicConfig"] ?? null), "shopName", [], "any", false, false, false, 47), "html", null, true);
        echo "\"/>
                <meta name=\"twitter:title\"
                      content=\"";
        // line 49
        echo twig_escape_filter($this->env, ($context["metaTitle"] ?? null), "html", null, true);
        echo "\"/>
                <meta name=\"twitter:description\"
                      content=\"";
        // line 51
        $this->displayBlock('layout_head_meta_tags_description_twitter', $context, $blocks);
        echo "\"/>
                <meta name=\"twitter:image\"
                      content=\"";
        // line 53
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "theme", [], "any", false, false, false, 53)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["sw-logo-desktop"] ?? null) : null), "html", null, true);
        echo "\"/>
            ";
    }

    // line 40
    public function block_layout_head_meta_tags_description_og($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["metaDescription"] ?? null), "html", null, true);
    }

    // line 51
    public function block_layout_head_meta_tags_description_twitter($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["metaDescription"] ?? null), "html", null, true);
    }

    // line 56
    public function block_layout_head_meta_tags_schema_webpage($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "                <meta itemprop=\"copyrightHolder\"
                      content=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["basicConfig"] ?? null), "shopName", [], "any", false, false, false, 58), "html", null, true);
        echo "\"/>
                <meta itemprop=\"copyrightYear\"
                      content=\"";
        // line 60
        echo twig_escape_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "copyrightYear", [], "any", false, false, false, 60)), "html", null, true);
        echo "\"/>
                <meta itemprop=\"isFamilyFriendly\"
                      content=\"";
        // line 62
        if (twig_get_attribute($this->env, $this->source, ($context["basicConfig"] ?? null), "familyFriendly", [], "any", false, false, false, 62)) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\"/>
                <meta itemprop=\"image\"
                      content=\"";
        // line 64
        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "theme", [], "any", false, false, false, 64)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["sw-logo-desktop"] ?? null) : null), "html", null, true);
        echo "\"/>
            ";
    }

    // line 67
    public function block_layout_head_meta_tags_hreflangs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "                ";
        // line 69
        echo "            ";
    }

    // line 72
    public function block_layout_head_favicon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        echo "            <link rel=\"shortcut icon\"
                  href=\"";
        // line 74
        echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "theme", [], "any", false, false, false, 74)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["sw-logo-favicon"] ?? null) : null), "html", null, true);
        echo "\">
        ";
    }

    // line 77
    public function block_layout_head_apple($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "            <link rel=\"apple-touch-icon\"
                  sizes=\"180x180\"
                  href=\"";
        // line 80
        echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "theme", [], "any", false, false, false, 80)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["sw-logo-share"] ?? null) : null), "html", null, true);
        echo "\">
        ";
    }

    // line 83
    public function block_layout_head_android($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 84
        echo "            <link rel=\"icon\"
                  sizes=\"192x192\"
                  href=\"";
        // line 86
        echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "theme", [], "any", false, false, false, 86)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["sw-logo-share"] ?? null) : null), "html", null, true);
        echo "\">
            <meta name=\"theme-color\"
                  content=\"";
        // line 88
        echo twig_escape_filter($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "theme", [], "any", false, false, false, 88)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["sw-color-brand-primary"] ?? null) : null), "html", null, true);
        echo "\"/>
        ";
    }

    // line 91
    public function block_layout_head_canonical($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 93
    public function block_layout_head_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 94
        echo "            <title itemprop=\"name\">
                ";
        // line 95
        $this->displayBlock('layout_head_title_inner', $context, $blocks);
        // line 98
        echo "            </title>
        ";
    }

    // line 95
    public function block_layout_head_title_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        ob_start(function () { return ''; });
        // line 96
        echo "                    ";
        echo twig_escape_filter($this->env, ($context["metaTitle"] ?? null), "html", null, true);
        echo "
                ";
        $___internal_0f7b47e9fc6075a30dda05581591760a32f09051b53dba9337ebb97ebbc4e5d8_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 95
        echo twig_spaceless($___internal_0f7b47e9fc6075a30dda05581591760a32f09051b53dba9337ebb97ebbc4e5d8_);
    }

    // line 101
    public function block_layout_head_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 102
        echo "            ";
        if (($context["isHMRMode"] ?? null)) {
            // line 103
            echo "                ";
            // line 104
            echo "            ";
        } else {
            // line 105
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "theme", [], "any", false, false, false, 105), "assets", [], "any", false, false, false, 105), "css", [], "any", false, false, false, 105));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 106
                echo "                    <link rel=\"stylesheet\"
                      href=\"";
                // line 107
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["file"]), "html", null, true);
                echo "\">
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "            ";
        }
        // line 110
        echo "        ";
    }

    // line 113
    public function block_layout_head_javascript_tracking($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/meta.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  461 => 113,  457 => 110,  454 => 109,  446 => 107,  443 => 106,  438 => 105,  435 => 104,  433 => 103,  430 => 102,  426 => 101,  422 => 95,  416 => 96,  411 => 95,  406 => 98,  404 => 95,  401 => 94,  397 => 93,  391 => 91,  385 => 88,  380 => 86,  376 => 84,  372 => 83,  366 => 80,  362 => 78,  358 => 77,  352 => 74,  349 => 73,  345 => 72,  341 => 69,  339 => 68,  335 => 67,  329 => 64,  320 => 62,  315 => 60,  310 => 58,  307 => 57,  303 => 56,  296 => 51,  289 => 40,  283 => 53,  278 => 51,  273 => 49,  268 => 47,  260 => 42,  255 => 40,  250 => 38,  245 => 36,  240 => 33,  236 => 32,  229 => 29,  222 => 27,  215 => 23,  209 => 29,  204 => 27,  199 => 25,  194 => 23,  189 => 21,  186 => 20,  182 => 19,  176 => 15,  172 => 14,  167 => 11,  163 => 10,  159 => 70,  157 => 67,  154 => 66,  152 => 56,  149 => 55,  147 => 32,  144 => 31,  142 => 19,  139 => 18,  137 => 14,  134 => 13,  131 => 10,  127 => 9,  122 => 114,  119 => 113,  116 => 111,  114 => 101,  111 => 100,  109 => 93,  106 => 92,  104 => 91,  101 => 90,  99 => 83,  96 => 82,  94 => 77,  91 => 76,  89 => 72,  86 => 71,  84 => 9,  80 => 7,  77 => 6,  74 => 5,  71 => 4,  68 => 3,  65 => 2,  58 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/meta.html.twig", "/opt/bitnami/apps/shopware/htdocs/vendor/shopware/storefront/Resources/views/storefront/layout/meta.html.twig");
    }
}
