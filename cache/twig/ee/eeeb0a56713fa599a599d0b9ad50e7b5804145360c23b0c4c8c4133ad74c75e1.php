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

/* item.html.twig */
class __TwigTemplate_0324d1bd66b2794d4a64335641b27d8615d5a5d2a7ba8a37df776e74d11c23c0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base2.html.twig", "item.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "<article>
\t<section class=\"header\">
\t\t<h1>
\t        ";
        // line 7
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "media", []) == "video")) {
            // line 8
            echo "\t        <i class=\"fa fa-file-video-o rightpad\"></i>
\t        ";
        } else {
            // line 10
            echo "\t        <i class=\"fa fa-file-text-o rightpad\"></i>
\t        ";
        }
        // line 12
        echo "\t\t\t";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []));
        echo "
\t\t</h1>
\t";
        // line 14
        if (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "theme", []), "config", []), "params", []), "articles", []), "show", []), "date", []) || $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "theme", []), "config", []), "params", []), "articles", []), "show", []), "authors", [])) || $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "theme", []), "config", []), "params", []), "articles", []), "show", []), "topics", [])) || $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "theme", []), "config", []), "params", []), "articles", []), "show", []), "time", []))) {
            // line 15
            echo "\t\t<div class=\"details\">
\t\t";
            // line 16
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "theme", []), "config", []), "params", []), "articles", []), "show", []), "date", [])) {
                // line 17
                echo "\t\t\t<span>";
                echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "F j, Y");
                echo "</span>
\t\t";
            }
            // line 19
            echo "\t\t";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "theme", []), "config", []), "params", []), "articles", []), "show", []), "authors", [])) {
                // line 20
                echo "\t\t\t";
                $context["authorlist"] = [];
                // line 21
                echo "\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "author", [], "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
                    // line 22
                    echo "                ";
                    // line 23
                    echo "                ";
                    $context["slug"] = twig_urlencode_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $context["author"]));
                    // line 24
                    echo "                ";
                    $context["p"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => ("/authors/" . ($context["slug"] ?? null))], "method");
                    // line 25
                    echo "                ";
                    if ((($context["p"] ?? null) == null)) {
                        // line 26
                        echo "                    ";
                        $context["authorlist"] = twig_array_merge(($context["authorlist"] ?? null), [0 => (((((("<a href=\"" . ($context["base_url"] ?? null)) . "/taxonomy?name=author&amp;val=") . twig_urlencode_filter($context["author"])) . "\">") . $context["author"]) . "</a>")]);
                        // line 27
                        echo "                ";
                    } else {
                        // line 28
                        echo "                \t";
                        $context["authorlist"] = twig_array_merge(($context["authorlist"] ?? null), [0 => (((((("<a href=\"" . ($context["base_url"] ?? null)) . "/authors/") . ($context["slug"] ?? null)) . "\">") . $context["author"]) . "</a>")]);
                        // line 29
                        echo "                ";
                    }
                    // line 30
                    echo "\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "\t\t\t<span><i class=\"fa fa-user\"></i> ";
                echo twig_join_filter(($context["authorlist"] ?? null), ", ");
                echo "</span>
\t\t";
            }
            // line 33
            echo "\t\t";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "theme", []), "config", []), "params", []), "articles", []), "show", []), "topics", [])) {
                // line 34
                echo "\t\t\t";
                $context["catlist"] = [];
                // line 35
                echo "\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "category", []));
                foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                    // line 36
                    echo "\t\t\t\t";
                    $context["catlist"] = twig_array_merge(($context["catlist"] ?? null), [0 => (((((("<a href=\"" . ($context["base_url"] ?? null)) . "/taxonomy?name=category&amp;val=") . twig_urlencode_filter($context["cat"])) . "\">") . $context["cat"]) . "</a>")]);
                    // line 37
                    echo "\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "\t\t\t<span>";
                echo twig_join_filter(($context["catlist"] ?? null), ", ");
                echo "</span>
\t\t";
            }
            // line 40
            echo "\t\t";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "theme", []), "config", []), "params", []), "articles", []), "show", []), "time", [])) {
                // line 41
                echo "\t\t\t<span>";
                echo $this->env->getExtension('Grav\Plugin\ReadingTime\TwigReadingTimeFilters')->getReadingTime($this->getAttribute(($context["page"] ?? null), "content", []));
                echo "</span>
\t\t";
            }
            // line 43
            echo "\t\t</div>
\t";
        }
        // line 45
        echo "\t</section>
\t<section class=\"content\">
    \t";
        // line 47
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
\t";
        // line 48
        if ( !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hide_mediasummary", [])) {
            echo "\t\t
        <p></p>
        ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 51
                echo "           ";
                echo $this->getAttribute($this->getAttribute($context["image"], "cropResize", [0 => 700, 1 => 400], "method"), "html", [0 => "title", 1 => "alt", 2 => "itemscreenshot"], "method");
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "\t";
        }
        // line 54
        echo "
    </section>
    <section class=\"foot\">
    \t";
        // line 57
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", [])) > 0)) {
            // line 58
            echo "    \t";
            $context["taglist"] = [];
            // line 59
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", []));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 60
                echo "\t\t\t";
                $context["taglist"] = twig_array_merge(($context["taglist"] ?? null), [0 => (((((("<a href=\"" . ($context["base_url"] ?? null)) . "/taxonomy?name=tag&amp;val=") . twig_urlencode_filter($context["tag"])) . "\">") . $context["tag"]) . "</a>")]);
                // line 61
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "    \t<div class=\"tags\">
    \t\t<i class=\"fa fa-tags rightpad\"></i>";
            // line 63
            echo twig_join_filter(($context["taglist"] ?? null), ", ");
            echo "
    \t</div>
    \t";
        }
        // line 66
        echo "\t\t";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "relatedpages", []), "enabled", []) && (twig_length_filter($this->env, ($context["related_pages"] ?? null)) > 0))) {
            // line 67
            echo "    \t<div class=\"related topiclist\">
    \t\t<h2>";
            // line 68
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "RELATED_ARTICLES");
            echo "</h2>
\t\t    ";
            // line 69
            $this->loadTemplate("partials/relatedpages.html.twig", "item.html.twig", 69)->display($context);
            // line 70
            echo "    \t</div>
\t\t";
        }
        // line 71
        echo "    \t\t
    </section>
    ";
        // line 73
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "comments", []), "enabled", [])) {
            // line 74
            echo "        <section class=\"comments\">
    \t    <h2>";
            // line 75
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "COMMENTS");
            echo "</h2>
        </section>
    ";
        }
        // line 78
        echo "</article>
";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 78,  248 => 75,  245 => 74,  243 => 73,  239 => 71,  235 => 70,  233 => 69,  229 => 68,  226 => 67,  223 => 66,  217 => 63,  214 => 62,  208 => 61,  205 => 60,  200 => 59,  197 => 58,  195 => 57,  190 => 54,  187 => 53,  178 => 51,  174 => 50,  169 => 48,  165 => 47,  161 => 45,  157 => 43,  151 => 41,  148 => 40,  142 => 38,  136 => 37,  133 => 36,  128 => 35,  125 => 34,  122 => 33,  116 => 31,  110 => 30,  107 => 29,  104 => 28,  101 => 27,  98 => 26,  95 => 25,  92 => 24,  89 => 23,  87 => 22,  82 => 21,  79 => 20,  76 => 19,  70 => 17,  68 => 16,  65 => 15,  63 => 14,  57 => 12,  53 => 10,  49 => 8,  47 => 7,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base2.html.twig' %}

{% block content %}
<article>
\t<section class=\"header\">
\t\t<h1>
\t        {% if page.header.media == 'video' %}
\t        <i class=\"fa fa-file-video-o rightpad\"></i>
\t        {% else %}
\t        <i class=\"fa fa-file-text-o rightpad\"></i>
\t        {% endif %}
\t\t\t{{ page.title|e }}
\t\t</h1>
\t{% if (grav.theme.config.params.articles.show.date) or (grav.theme.config.params.articles.show.authors) or (grav.theme.config.params.articles.show.topics) or (grav.theme.config.params.articles.show.time) %}
\t\t<div class=\"details\">
\t\t{% if grav.theme.config.params.articles.show.date %}
\t\t\t<span>{{ page.date|date(\"F j, Y\") }}</span>
\t\t{% endif %}
\t\t{% if grav.theme.config.params.articles.show.authors %}
\t\t\t{% set authorlist = [] %}
\t\t\t{% for author in page.taxonomy['author'] %}
                {# Check to see if a dedicated author page exists #}
                {% set slug = author|hyphenize|url_encode %}
                {% set p = page.find('/authors/'~slug) %}
                {% if p == null %}
                    {% set authorlist = authorlist|merge(['<a href=\"'~base_url~'/taxonomy?name=author&amp;val='~(author|url_encode)~'\">'~author~'</a>']) %}
                {% else %}
                \t{% set authorlist = authorlist|merge(['<a href=\"'~base_url~'/authors/'~slug~'\">'~author~'</a>']) %}
                {% endif %}
\t\t\t{% endfor %}
\t\t\t<span><i class=\"fa fa-user\"></i> {{ authorlist|join(', ') }}</span>
\t\t{% endif %}
\t\t{% if grav.theme.config.params.articles.show.topics %}
\t\t\t{% set catlist = [] %}
\t\t\t{% for cat in page.taxonomy.category %}
\t\t\t\t{% set catlist = catlist|merge(['<a href=\"'~base_url~'/taxonomy?name=category&amp;val='~(cat|url_encode)~'\">'~cat~'</a>']) %}
\t\t\t{% endfor %}
\t\t\t<span>{{ catlist|join(', ') }}</span>
\t\t{% endif %}
\t\t{% if grav.theme.config.params.articles.show.time %}
\t\t\t<span>{{ page.content|readingtime }}</span>
\t\t{% endif %}
\t\t</div>
\t{% endif %}
\t</section>
\t<section class=\"content\">
    \t{{ page.content }}
\t{% if not page.header.hide_mediasummary %}\t\t
        <p></p>
        {% for image in page.media.images %}
           {{ image.cropResize(700, 400).html(\"title\", \"alt\", \"itemscreenshot\") }}
        {% endfor %}
\t{% endif %}

    </section>
    <section class=\"foot\">
    \t{% if page.taxonomy.tag|length > 0 %}
    \t{% set taglist = [] %}
\t\t{% for tag in page.taxonomy.tag %}
\t\t\t{% set taglist = taglist|merge(['<a href=\"'~base_url~'/taxonomy?name=tag&amp;val='~(tag|url_encode)~'\">'~tag~'</a>']) %}
\t\t{% endfor %}
    \t<div class=\"tags\">
    \t\t<i class=\"fa fa-tags rightpad\"></i>{{ taglist|join(', ') }}
    \t</div>
    \t{% endif %}
\t\t{% if config.plugins.relatedpages.enabled and related_pages|length > 0 %}
    \t<div class=\"related topiclist\">
    \t\t<h2>{{ 'RELATED_ARTICLES'|t }}</h2>
\t\t    {% include 'partials/relatedpages.html.twig' %}
    \t</div>
\t\t{% endif %}    \t\t
    </section>
    {% if config.plugins.comments.enabled %}
        <section class=\"comments\">
    \t    <h2>{{ 'COMMENTS'|t }}</h2>
        </section>
    {% endif %}
</article>
{% endblock %}
", "item.html.twig", "/Applications/MAMP/htdocs/knowledgebase/user/themes/knowledge-base/templates/item.html.twig");
    }
}
