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

/* partials/sidebar.html.twig */
class __TwigTemplate_c324a008f41423905440ffe7b74d500aa419302e73b2e577009c0a1842560daa extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["homeroute"] = "/home";
        // line 2
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "theme", [], "any", false, true), "config", [], "any", false, true), "params", [], "any", false, true), "articleroot", [], "any", true, true)) {
            // line 3
            echo "    ";
            $context["homeroute"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "theme", []), "config", []), "params", []), "articleroot", []);
        }
        // line 5
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "theme", [], "any", false, true), "config", [], "any", false, true), "params", [], "any", false, true), "articles", [], "any", false, true), "root", [], "any", true, true)) {
            // line 6
            echo "    ";
            $context["homeroute"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "theme", []), "config", []), "params", []), "articles", []), "root", []);
        }
        // line 8
        echo "
";
        // line 9
        $context["options"] = ["items" => ["@page.descendants" => ($context["homeroute"] ?? null)], "order" => ["by" => "date", "dir" => "desc"]];
        // line 10
        $context["my_collection"] = $this->getAttribute(($context["page"] ?? null), "collection", [0 => ($context["options"] ?? null)], "method");
        // line 11
        echo "
";
        // line 12
        $context["catlist"] = twig_get_array_keys_filter($this->getAttribute($this->getAttribute(($context["taxonomy"] ?? null), "taxonomy", []), "category", [], "array"));
        // line 13
        $context["blist"] = [];
        // line 14
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "theme", [], "any", false, true), "config", [], "any", false, true), "params", [], "any", false, true), "articles", [], "any", false, true), "blacklist", [], "any", true, true)) {
            // line 15
            echo "    ";
            $context["blist"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "theme", []), "config", []), "params", []), "articles", []), "blacklist", []);
            // line 16
            echo "    ";
            $context["tmplst"] = [];
            // line 17
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["catlist"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 18
                echo "        ";
                if (!twig_in_filter($context["cat"], ($context["blist"] ?? null))) {
                    // line 19
                    echo "            ";
                    $context["tmplst"] = twig_array_merge(($context["tmplst"] ?? null), [0 => $context["cat"]]);
                    // line 20
                    echo "        ";
                }
                // line 21
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "    ";
            $context["catlist"] = ($context["tmplst"] ?? null);
        }
        // line 24
        echo "
";
        // line 25
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "theme", []), "config", []), "params", []), "sidebar", []), "show", []), "categories", [])) {
            // line 26
            echo "<div>
    <h1><span>";
            // line 27
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "CATEGORIES");
            echo "</span></h1>
    <ul style=\"padding-left: 1rem\">
    ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter(($context["catlist"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 30
                echo "        ";
                // line 31
                echo "        ";
                $context["slug"] = twig_urlencode_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $context["cat"]));
                // line 32
                echo "        ";
                $context["p"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => ("/categories/" . ($context["slug"] ?? null))], "method");
                // line 33
                echo "        ";
                if ((($context["p"] ?? null) == null)) {
                    // line 34
                    echo "                <li><a href=\"";
                    echo ($context["base_url"] ?? null);
                    echo "/taxonomy?name=category&amp;val=";
                    echo twig_urlencode_filter($context["cat"]);
                    echo "\">";
                    echo $context["cat"];
                    echo "</a></li>
        ";
                } else {
                    // line 36
                    echo "                <li><a href=\"";
                    echo ($context["base_url"] ?? null);
                    echo "/categories/";
                    echo ($context["slug"] ?? null);
                    echo "\">";
                    echo $context["cat"];
                    echo "</a></li>
        ";
                }
                // line 38
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "    </ul>
</div>
";
        }
        // line 42
        echo "
";
        // line 43
        $context["maxcount"] = 5;
        // line 44
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "theme", [], "any", false, true), "config", [], "any", false, true), "params", [], "any", false, true), "sidebar", [], "any", false, true), "maxentries", [], "any", true, true)) {
            // line 45
            echo "    ";
            $context["maxcount"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "theme", []), "config", []), "params", []), "sidebar", []), "maxentries", []);
        }
        // line 47
        echo "
";
        // line 48
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "theme", []), "config", []), "params", []), "sidebar", []), "show", []), "popular", [])) {
            // line 49
            echo "<div class=\"topiclist\">
\t";
            // line 50
            $context["counts"] = twig_reverse_filter($this->env, twig_sort_filter(($context["viewcounts"] ?? null)));
            // line 51
            echo "\t";
            $context["popular"] = [];
            // line 52
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["counts"] ?? null));
            foreach ($context['_seq'] as $context["route"] => $context["views"]) {
                // line 53
                echo "\t\t";
                if ((is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["route"]) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["homeroute"] ?? null)) && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)))) {
                    // line 54
                    echo "            ";
                    $context["thispage"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => $context["route"]], "method");
                    // line 55
                    echo "            ";
                    if ( !(null === ($context["thispage"] ?? null))) {
                        // line 56
                        echo "\t\t\t    ";
                        $context["popular"] = twig_array_merge(($context["popular"] ?? null), [0 => ($context["thispage"] ?? null)]);
                        // line 57
                        echo "            ";
                    }
                    // line 58
                    echo "\t\t";
                }
                // line 59
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['route'], $context['views'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "    ";
            $context["tmplst"] = [];
            // line 61
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["popular"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 62
                echo "        ";
                $context["blisted"] = false;
                // line 63
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["blist"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["bcat"]) {
                    // line 64
                    echo "            ";
                    if (twig_in_filter($context["bcat"], $this->getAttribute($this->getAttribute($context["page"], "taxonomy", []), "category", [], "array"))) {
                        // line 65
                        echo "                ";
                        $context["blisted"] = true;
                        // line 66
                        echo "            ";
                    }
                    // line 67
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bcat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                echo "        ";
                if ( !($context["blisted"] ?? null)) {
                    // line 69
                    echo "            ";
                    $context["tmplst"] = twig_array_merge(($context["tmplst"] ?? null), [0 => $context["page"]]);
                    // line 70
                    echo "        ";
                }
                // line 71
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "    ";
            $context["popular"] = ($context["tmplst"] ?? null);
            // line 73
            echo "\t<h1><span>";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "POPULAR_ARTICLES");
            echo "</span></h1>
    ";
            // line 74
            $this->loadTemplate("partials/topiclist.html.twig", "partials/sidebar.html.twig", 74)->display(twig_array_merge($context, ["articles" => ($context["popular"] ?? null), "maxcount" => ($context["maxcount"] ?? null)]));
            // line 75
            echo "</div>
";
        }
        // line 77
        echo "
";
        // line 78
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "theme", []), "config", []), "params", []), "sidebar", []), "show", []), "latest", [])) {
            // line 79
            echo "<div class=\"topiclist\">
\t<h1><span>";
            // line 80
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "LATEST_ARTICLES");
            echo "</span></h1>
    ";
            // line 81
            $context["tmplst"] = [];
            // line 82
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["my_collection"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 83
                echo "        ";
                $context["blisted"] = false;
                // line 84
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["blist"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["bcat"]) {
                    // line 85
                    echo "          ";
                    if ((twig_in_filter($context["bcat"], $this->getAttribute($this->getAttribute($context["page"], "taxonomy", []), "category", [], "array")) || ($this->getAttribute($this->getAttribute($context["page"], "header", [], "any", false, true), "published", [], "any", true, true) &&  !$this->getAttribute($this->getAttribute($context["page"], "header", []), "published", [])))) {
                        // line 86
                        echo "          ";
                        // line 87
                        echo "            ";
                        $context["blisted"] = true;
                        // line 88
                        echo "          ";
                    }
                    // line 89
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bcat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 90
                echo "        ";
                if ( !($context["blisted"] ?? null)) {
                    // line 91
                    echo "            ";
                    $context["tmplst"] = twig_array_merge(($context["tmplst"] ?? null), [0 => $context["page"]]);
                    // line 92
                    echo "        ";
                }
                // line 93
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "    ";
            $context["articles"] = twig_slice($this->env, ($context["tmplst"] ?? null), 0, ($context["maxcount"] ?? null));
            // line 95
            echo "    ";
            $this->loadTemplate("partials/topiclist.html.twig", "partials/sidebar.html.twig", 95)->display(twig_array_merge($context, ["articles" => ($context["articles"] ?? null), "maxcount" => ($context["maxcount"] ?? null)]));
            // line 96
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 96,  324 => 95,  321 => 94,  315 => 93,  312 => 92,  309 => 91,  306 => 90,  300 => 89,  297 => 88,  294 => 87,  292 => 86,  289 => 85,  284 => 84,  281 => 83,  276 => 82,  274 => 81,  270 => 80,  267 => 79,  265 => 78,  262 => 77,  258 => 75,  256 => 74,  251 => 73,  248 => 72,  242 => 71,  239 => 70,  236 => 69,  233 => 68,  227 => 67,  224 => 66,  221 => 65,  218 => 64,  213 => 63,  210 => 62,  205 => 61,  202 => 60,  196 => 59,  193 => 58,  190 => 57,  187 => 56,  184 => 55,  181 => 54,  178 => 53,  173 => 52,  170 => 51,  168 => 50,  165 => 49,  163 => 48,  160 => 47,  156 => 45,  154 => 44,  152 => 43,  149 => 42,  144 => 39,  138 => 38,  128 => 36,  118 => 34,  115 => 33,  112 => 32,  109 => 31,  107 => 30,  103 => 29,  98 => 27,  95 => 26,  93 => 25,  90 => 24,  86 => 22,  80 => 21,  77 => 20,  74 => 19,  71 => 18,  66 => 17,  63 => 16,  60 => 15,  58 => 14,  56 => 13,  54 => 12,  51 => 11,  49 => 10,  47 => 9,  44 => 8,  40 => 6,  38 => 5,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set homeroute = '/home' %}
{% if grav.theme.config.params.articleroot is defined %}
    {% set homeroute = grav.theme.config.params.articleroot %}
{% endif %}
{% if grav.theme.config.params.articles.root is defined %}
    {% set homeroute = grav.theme.config.params.articles.root %}
{% endif %}

{% set options = { items: {'@page.descendants': homeroute}, 'order': {'by': 'date', 'dir': 'desc'}} %}
{% set my_collection = page.collection(options) %}

{% set catlist = taxonomy.taxonomy[\"category\"]|keys %}
{% set blist = [] %}
{% if grav.theme.config.params.articles.blacklist is defined %}
    {% set blist = grav.theme.config.params.articles.blacklist %}
    {% set tmplst = [] %}
    {% for cat in catlist %}
        {% if cat not in blist %}
            {% set tmplst = tmplst|merge([cat]) %}
        {% endif %}
    {% endfor %}
    {% set catlist = tmplst %}
{% endif %}

{% if grav.theme.config.params.sidebar.show.categories %}
<div>
    <h1><span>{{ 'CATEGORIES'|t }}</span></h1>
    <ul style=\"padding-left: 1rem\">
    {% for cat in catlist|sort %}
        {# Check to see if a dedicated category page exists #}
        {% set slug = cat|hyphenize|url_encode %}
        {% set p = page.find('/categories/'~slug) %}
        {% if p == null %}
                <li><a href=\"{{ base_url }}/taxonomy?name=category&amp;val={{ cat|url_encode }}\">{{ cat }}</a></li>
        {% else %}
                <li><a href=\"{{ base_url }}/categories/{{slug}}\">{{ cat }}</a></li>
        {% endif %}
    {% endfor %}
    </ul>
</div>
{% endif %}

{% set maxcount = 5 %}
{% if grav.theme.config.params.sidebar.maxentries is defined %}
    {% set maxcount = grav.theme.config.params.sidebar.maxentries %}
{% endif %}

{% if grav.theme.config.params.sidebar.show.popular %}
<div class=\"topiclist\">
\t{% set counts = viewcounts|sort|reverse %}
\t{% set popular = [] %}
\t{% for route,views in counts %}
\t\t{% if route starts with homeroute %}
            {% set thispage = page.find(route) %}
            {% if thispage is not null %}
\t\t\t    {% set popular = popular|merge([thispage]) %}
            {% endif %}
\t\t{% endif %}
\t{% endfor %}
    {% set tmplst = [] %}
    {% for page in popular %}
        {% set blisted = false %}
        {% for bcat in blist %}
            {% if bcat in page.taxonomy[\"category\"] %}
                {% set blisted = true %}
            {% endif %}
        {% endfor %}
        {% if not blisted %}
            {% set tmplst = tmplst|merge([page]) %}
        {% endif %}
    {% endfor %}
    {% set popular = tmplst %}
\t<h1><span>{{ 'POPULAR_ARTICLES'|t }}</span></h1>
    {% include 'partials/topiclist.html.twig' with {'articles': popular, 'maxcount': maxcount} %}
</div>
{% endif %}

{% if grav.theme.config.params.sidebar.show.latest %}
<div class=\"topiclist\">
\t<h1><span>{{ 'LATEST_ARTICLES'|t }}</span></h1>
    {% set tmplst = [] %}
    {% for page in my_collection %}
        {% set blisted = false %}
        {% for bcat in blist %}
          {% if bcat in page.taxonomy[\"category\"] or (page.header.published is defined and not page.header.published) %}
          {# Setting this to blacklisted when the category is in the blacklist OR if the page isn't yet published #}
            {% set blisted = true %}
          {% endif %}
        {% endfor %}
        {% if not blisted %}
            {% set tmplst = tmplst|merge([page]) %}
        {% endif %}
    {% endfor %}
    {% set articles = tmplst|slice(0,maxcount) %}
    {% include 'partials/topiclist.html.twig' with {'articles': articles, 'maxcount': maxcount} %}
</div>
{% endif %}
", "partials/sidebar.html.twig", "/Applications/MAMP/htdocs/knowledgebase/user/themes/knowledge-base/templates/partials/sidebar.html.twig");
    }
}
