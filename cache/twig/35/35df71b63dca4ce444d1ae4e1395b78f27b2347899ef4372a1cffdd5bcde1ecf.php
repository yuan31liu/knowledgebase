<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/base2.html.twig */
class __TwigTemplate_d20251ea52eb9c0ddd087ccdfe0861c640b7707e834e5396143356acc92eb9d4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'header' => [$this, 'block_header'],
            'header_navigation' => [$this, 'block_header_navigation'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'sidebar' => [$this, 'block_sidebar'],
            'footer' => [$this, 'block_footer'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["showsidebar"] = false;
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "theme", []), "config", []), "default_lang", [])));
        echo "\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 32
        echo "</head>
<body id=\"top\" class=\"";
        // line 33
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []);
        echo "\">

<div class=\"pure-g wrapper\">
";
        // line 36
        $this->displayBlock('header', $context, $blocks);
        // line 62
        echo "
";
        // line 63
        if (($context["showsidebar"] ?? null)) {
            // line 64
            echo "<div class=\"pure-u-1 pure-u-md-16-24\">
";
        } else {
            // line 66
            echo "<div class=\"pure-u-1\">
";
        }
        // line 68
        $this->displayBlock('body', $context, $blocks);
        // line 75
        echo "</div> <!-- pure-u-16-24 -->

";
        // line 77
        if (($context["showsidebar"] ?? null)) {
            // line 78
            echo "<div class=\"pure-u-1 pure-u-md-8-24\">
";
            // line 79
            $this->displayBlock('sidebar', $context, $blocks);
            // line 86
            echo "</div> <!-- pure-u-8-24 -->
";
        }
        // line 88
        echo "
<div class=\"pure-u-1\">
";
        // line 90
        $this->displayBlock('footer', $context, $blocks);
        // line 99
        echo "</div> <!-- pure-u-1 -->

</div> <!-- pure-g -->

";
        // line 103
        $this->displayBlock('bottom', $context, $blocks);
        // line 106
        echo "</body>
";
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 11
        $this->loadTemplate("partials/metadata.html.twig", "partials/base2.html.twig", 11)->display($context);
        // line 12
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 14
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method");
        echo "\" />

    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "

    ";
        // line 26
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "

";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 17
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://fonts.googleapis.com/css?family=Inconsolata|Lato"], "method");
        // line 18
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://cdnjs.cloudflare.com/ajax/libs/pure/0.6.0/pure-min.css", 1 => 100], "method");
        // line 19
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://cdnjs.cloudflare.com/ajax/libs/pure/0.6.0/grids-responsive-min.css", 1 => 99], "method");
        // line 20
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css", 1 => 95], "method");
        // line 21
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/knowledge-base.css", 1 => 90], "method");
        // line 22
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css", 1 => 80], "method");
        // line 23
        echo "    ";
    }

    // line 26
    public function block_javascripts($context, array $blocks = [])
    {
        // line 27
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 100], "method");
        // line 28
        echo "    ";
    }

    // line 36
    public function block_header($context, array $blocks = [])
    {
        // line 37
        echo "    <div class=\"header\">
    <div class=\"pure-u-1 pure-u-md-2-5\">
        <div class=\"padding\">
            <a class=\"logo left\" href=\"";
        // line 40
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\">
                <i class=\"fa fa-rebel\"></i>
                ";
        // line 42
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", []), "title", []);
        echo "
            </a>
        </div>
    </div>
    <div class=\"pure-u-1 pure-u-md-3-5\">
        <div class=\"padding\">
            ";
        // line 48
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 53
        echo "        </div>
    </div>
    <div class=\"pure-u-1 search\">
        <div class=\"padding\">
            ";
        // line 57
        $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/base2.html.twig", 57)->display($context);
        // line 58
        echo "        </div>
    </div>
    </div>
";
    }

    // line 48
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 49
        echo "            <nav class=\"pure-menu pure-menu-horizontal\">
                ";
        // line 50
        $this->loadTemplate("partials/navigation.html.twig", "partials/base2.html.twig", 50)->display($context);
        // line 51
        echo "            </nav>
            ";
    }

    // line 68
    public function block_body($context, array $blocks = [])
    {
        // line 69
        echo "    <section id=\"body\">
        <div class=\"padding\">
        ";
        // line 71
        $this->displayBlock('content', $context, $blocks);
        // line 72
        echo "        </div>
    </section>
";
    }

    // line 71
    public function block_content($context, array $blocks = [])
    {
    }

    // line 79
    public function block_sidebar($context, array $blocks = [])
    {
        // line 80
        echo "    <section id=\"sidebar\">
        <div class=\"padding\">
            ";
        // line 82
        $this->loadTemplate("partials/sidebar.html.twig", "partials/base2.html.twig", 82)->display($context);
        // line 83
        echo "        </div>
    </section>
";
    }

    // line 90
    public function block_footer($context, array $blocks = [])
    {
        // line 91
        echo "    ";
        $context["footertext"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "FOOTER_TEXT");
        // line 92
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", [], "any", false, true), "footertext", [], "any", true, true)) {
            // line 93
            echo "        ";
            $context["footertext"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", []), "footertext", []);
            // line 94
            echo "    ";
        }
        // line 95
        echo "    <div class=\"footer\">
        ";
        // line 96
        echo ($context["footertext"] ?? null);
        echo "
    </div>
";
    }

    // line 103
    public function block_bottom($context, array $blocks = [])
    {
        // line 104
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 104,  308 => 103,  301 => 96,  298 => 95,  295 => 94,  292 => 93,  289 => 92,  286 => 91,  283 => 90,  277 => 83,  275 => 82,  271 => 80,  268 => 79,  263 => 71,  257 => 72,  255 => 71,  251 => 69,  248 => 68,  243 => 51,  241 => 50,  238 => 49,  235 => 48,  228 => 58,  226 => 57,  220 => 53,  218 => 48,  209 => 42,  204 => 40,  199 => 37,  196 => 36,  192 => 28,  189 => 27,  186 => 26,  182 => 23,  179 => 22,  176 => 21,  173 => 20,  170 => 19,  167 => 18,  164 => 17,  161 => 16,  153 => 29,  151 => 26,  145 => 24,  143 => 16,  138 => 14,  134 => 13,  131 => 12,  129 => 11,  118 => 7,  115 => 6,  112 => 5,  107 => 106,  105 => 103,  99 => 99,  97 => 90,  93 => 88,  89 => 86,  87 => 79,  84 => 78,  82 => 77,  78 => 75,  76 => 68,  72 => 66,  68 => 64,  66 => 63,  63 => 62,  61 => 36,  55 => 33,  52 => 32,  50 => 5,  45 => 3,  42 => 2,  40 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set showsidebar = false %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.theme.config.default_lang }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/logo.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

    {% block stylesheets %}
        {% do assets.addCss('https://fonts.googleapis.com/css?family=Inconsolata|Lato') %}
        {% do assets.addCss('https://cdnjs.cloudflare.com/ajax/libs/pure/0.6.0/pure-min.css', 100) %}
        {% do assets.addCss('https://cdnjs.cloudflare.com/ajax/libs/pure/0.6.0/grids-responsive-min.css', 99) %}
        {% do assets.addCss('https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', 95) %}
        {% do assets.addCss('theme://css/knowledge-base.css', 90) %}
        {% do assets.addCss('theme://css/custom.css', 80) %}
    {% endblock %}
    {{ assets.css() }}

    {% block javascripts %}
        {% do assets.addJs('jquery', 100) %}
    {% endblock %}
    {{ assets.js() }}

{% endblock head%}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }}\">

<div class=\"pure-g wrapper\">
{% block header %}
    <div class=\"header\">
    <div class=\"pure-u-1 pure-u-md-2-5\">
        <div class=\"padding\">
            <a class=\"logo left\" href=\"{{ base_url == '' ? '/' : base_url }}\">
                <i class=\"fa fa-rebel\"></i>
                {{ config.site.title }}
            </a>
        </div>
    </div>
    <div class=\"pure-u-1 pure-u-md-3-5\">
        <div class=\"padding\">
            {% block header_navigation %}
            <nav class=\"pure-menu pure-menu-horizontal\">
                {% include 'partials/navigation.html.twig' %}
            </nav>
            {% endblock %}
        </div>
    </div>
    <div class=\"pure-u-1 search\">
        <div class=\"padding\">
            {% include 'partials/simplesearch_searchbox.html.twig' %}
        </div>
    </div>
    </div>
{% endblock %}

{% if showsidebar %}
<div class=\"pure-u-1 pure-u-md-16-24\">
{% else %}
<div class=\"pure-u-1\">
{% endif %}
{% block body %}
    <section id=\"body\">
        <div class=\"padding\">
        {% block content %}{% endblock %}
        </div>
    </section>
{% endblock %}
</div> <!-- pure-u-16-24 -->

{% if showsidebar %}
<div class=\"pure-u-1 pure-u-md-8-24\">
{% block sidebar %}
    <section id=\"sidebar\">
        <div class=\"padding\">
            {% include 'partials/sidebar.html.twig' %}
        </div>
    </section>
{% endblock %}
</div> <!-- pure-u-8-24 -->
{% endif %}

<div class=\"pure-u-1\">
{% block footer %}
    {% set footertext = 'FOOTER_TEXT'|t %}
    {% if config.site.footertext is defined %}
        {% set footertext = config.site.footertext %}
    {% endif %}
    <div class=\"footer\">
        {{footertext}}
    </div>
{% endblock %}
</div> <!-- pure-u-1 -->

</div> <!-- pure-g -->

{% block bottom %}
    {{ assets.js('bottom') }}
{% endblock %}
</body>
", "partials/base2.html.twig", "/Applications/MAMP/htdocs/knowledgebase/user/themes/knowledge-base/templates/partials/base2.html.twig");
    }
}
