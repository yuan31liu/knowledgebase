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

/* partials/base.html.twig */
class __TwigTemplate_0a142b454ef3fd68a987d9aeeb703bdfaf242bd82e536caff33546df8eb57409 extends \Twig\Template
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
        if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "theme", []), "config", []), "params", []), "sidebar", []), "show", []), "categories", []) || $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "theme", []), "config", []), "params", []), "sidebar", []), "show", []), "popular", [])) || $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "theme", []), "config", []), "params", []), "sidebar", []), "show", []), "latest", []))) {
            // line 3
            echo "    ";
            $context["showsidebar"] = true;
        }
        // line 5
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 6
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "theme", []), "config", []), "default_lang", [])));
        echo "\">
<head>
";
        // line 8
        $this->displayBlock('head', $context, $blocks);
        // line 35
        echo "</head>
<body id=\"top\" class=\"";
        // line 36
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []);
        echo "\">

<div class=\"pure-g wrapper\">
";
        // line 39
        $this->displayBlock('header', $context, $blocks);
        // line 65
        echo "
";
        // line 66
        if (($context["showsidebar"] ?? null)) {
            // line 67
            echo "<div class=\"pure-u-1 pure-u-md-16-24\">
";
        } else {
            // line 69
            echo "<div class=\"pure-u-1\">
";
        }
        // line 71
        $this->displayBlock('body', $context, $blocks);
        // line 78
        echo "</div> <!-- pure-u-16-24 -->

";
        // line 80
        if (($context["showsidebar"] ?? null)) {
            // line 81
            echo "<div class=\"pure-u-1 pure-u-md-8-24\">
";
            // line 82
            $this->displayBlock('sidebar', $context, $blocks);
            // line 89
            echo "</div> <!-- pure-u-8-24 -->
";
        }
        // line 91
        echo "
<div class=\"pure-u-1\">
";
        // line 93
        $this->displayBlock('footer', $context, $blocks);
        // line 102
        echo "</div> <!-- pure-u-1 -->

</div> <!-- pure-g -->

";
        // line 106
        $this->displayBlock('bottom', $context, $blocks);
        // line 109
        echo "</body>
";
    }

    // line 8
    public function block_head($context, array $blocks = [])
    {
        // line 9
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 10
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 14
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 14)->display($context);
        // line 15
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 16
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 17
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method");
        echo "\" />

    ";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "

    ";
        // line 29
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "

";
    }

    // line 19
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 20
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://fonts.googleapis.com/css?family=Inconsolata|Lato"], "method");
        // line 21
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://cdnjs.cloudflare.com/ajax/libs/pure/0.6.0/pure-min.css", 1 => 100], "method");
        // line 22
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://cdnjs.cloudflare.com/ajax/libs/pure/0.6.0/grids-responsive-min.css", 1 => 99], "method");
        // line 23
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css", 1 => 95], "method");
        // line 24
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/knowledge-base.css", 1 => 90], "method");
        // line 25
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css", 1 => 80], "method");
        // line 26
        echo "    ";
    }

    // line 29
    public function block_javascripts($context, array $blocks = [])
    {
        // line 30
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 100], "method");
        // line 31
        echo "    ";
    }

    // line 39
    public function block_header($context, array $blocks = [])
    {
        // line 40
        echo "    <div class=\"header\">
    <div class=\"pure-u-1 pure-u-md-2-5\">
        <div class=\"padding\">
            <a class=\"logo left\" href=\"";
        // line 43
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\">
                <i class=\"fa fa-rebel\"></i>
                ";
        // line 45
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", []), "title", []);
        echo "
            </a>
        </div>
    </div>
    <div class=\"pure-u-1 pure-u-md-3-5\">
        <div class=\"padding\">
            ";
        // line 51
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 56
        echo "        </div>
    </div>
    <div class=\"pure-u-1 search\">
        <div class=\"padding\">
            ";
        // line 60
        $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/base.html.twig", 60)->display($context);
        // line 61
        echo "        </div>
    </div>
    </div>
";
    }

    // line 51
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 52
        echo "            <nav class=\"pure-menu pure-menu-horizontal\">
                ";
        // line 53
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 53)->display($context);
        // line 54
        echo "            </nav>
            ";
    }

    // line 71
    public function block_body($context, array $blocks = [])
    {
        // line 72
        echo "    <section id=\"body\">
        <div class=\"padding\">
        ";
        // line 74
        $this->displayBlock('content', $context, $blocks);
        // line 75
        echo "        </div>
    </section>
";
    }

    // line 74
    public function block_content($context, array $blocks = [])
    {
    }

    // line 82
    public function block_sidebar($context, array $blocks = [])
    {
        // line 83
        echo "    <section id=\"sidebar\">
        <div class=\"padding\">
            ";
        // line 85
        $this->loadTemplate("partials/sidebar.html.twig", "partials/base.html.twig", 85)->display($context);
        // line 86
        echo "        </div>
    </section>
";
    }

    // line 93
    public function block_footer($context, array $blocks = [])
    {
        // line 94
        echo "    ";
        $context["footertext"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "FOOTER_TEXT");
        // line 95
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", [], "any", false, true), "footertext", [], "any", true, true)) {
            // line 96
            echo "        ";
            $context["footertext"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", []), "footertext", []);
            // line 97
            echo "    ";
        }
        // line 98
        echo "    <div class=\"footer\">
        ";
        // line 99
        echo ($context["footertext"] ?? null);
        echo "
    </div>
";
    }

    // line 106
    public function block_bottom($context, array $blocks = [])
    {
        // line 107
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 107,  314 => 106,  307 => 99,  304 => 98,  301 => 97,  298 => 96,  295 => 95,  292 => 94,  289 => 93,  283 => 86,  281 => 85,  277 => 83,  274 => 82,  269 => 74,  263 => 75,  261 => 74,  257 => 72,  254 => 71,  249 => 54,  247 => 53,  244 => 52,  241 => 51,  234 => 61,  232 => 60,  226 => 56,  224 => 51,  215 => 45,  210 => 43,  205 => 40,  202 => 39,  198 => 31,  195 => 30,  192 => 29,  188 => 26,  185 => 25,  182 => 24,  179 => 23,  176 => 22,  173 => 21,  170 => 20,  167 => 19,  159 => 32,  157 => 29,  151 => 27,  149 => 19,  144 => 17,  140 => 16,  137 => 15,  135 => 14,  124 => 10,  121 => 9,  118 => 8,  113 => 109,  111 => 106,  105 => 102,  103 => 93,  99 => 91,  95 => 89,  93 => 82,  90 => 81,  88 => 80,  84 => 78,  82 => 71,  78 => 69,  74 => 67,  72 => 66,  69 => 65,  67 => 39,  61 => 36,  58 => 35,  56 => 8,  51 => 6,  48 => 5,  44 => 3,  42 => 2,  40 => 1,);
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
{% if (grav.theme.config.params.sidebar.show.categories) or (grav.theme.config.params.sidebar.show.popular) or (grav.theme.config.params.sidebar.show.latest) %}
    {% set showsidebar = true %}
{% endif %}
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
", "partials/base.html.twig", "/Applications/MAMP/htdocs/knowledgebase/user/themes/knowledge-base/templates/partials/base.html.twig");
    }
}
