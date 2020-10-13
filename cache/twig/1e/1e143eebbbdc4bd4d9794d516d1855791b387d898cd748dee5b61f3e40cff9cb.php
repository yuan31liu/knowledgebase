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

/* front.html.twig */
class __TwigTemplate_e06c13dffb1d767deaaae0e28f7a6bf1d66c5522b56365447759f63362b3b370 extends \Twig\Template
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
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "front.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "
";
        // line 5
        $context["catlist"] = twig_get_array_keys_filter($this->getAttribute($this->getAttribute(($context["taxonomy"] ?? null), "taxonomy", []), "category", [], "array"));
        // line 6
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "theme", [], "any", false, true), "config", [], "any", false, true), "params", [], "any", false, true), "articles", [], "any", false, true), "blacklist", [], "any", true, true)) {
            // line 7
            echo "\t";
            $context["blist"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "theme", []), "config", []), "params", []), "articles", []), "blacklist", []);
            // line 8
            echo "\t";
            $context["tmplst"] = [];
            // line 9
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["catlist"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 10
                echo "\t\t";
                if (!twig_in_filter($context["cat"], ($context["blist"] ?? null))) {
                    // line 11
                    echo "\t\t\t";
                    $context["tmplst"] = twig_array_merge(($context["tmplst"] ?? null), [0 => $context["cat"]]);
                    // line 12
                    echo "\t\t";
                }
                // line 13
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "\t";
            $context["catlist"] = ($context["tmplst"] ?? null);
        }
        // line 16
        echo "
";
        // line 17
        $context["rows"] = [];
        // line 18
        $context["node"] = [];
        // line 19
        $context["maxrows"] = 3;
        // line 20
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "theme", [], "any", false, true), "config", [], "any", false, true), "params", [], "any", false, true), "front", [], "any", false, true), "maxrows", [], "any", true, true)) {
            // line 21
            echo "\t";
            $context["maxrows"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "theme", []), "config", []), "params", []), "front", []), "maxrows", []);
        }
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_sort_filter(($context["catlist"] ?? null)), 0, (($context["maxrows"] ?? null) * 2)));
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
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 24
            echo "\t";
            $context["node"] = twig_array_merge(($context["node"] ?? null), [0 => $context["cat"]]);
            // line 25
            echo "\t";
            if (((twig_length_filter($this->env, ($context["node"] ?? null)) == 2) || $this->getAttribute($context["loop"], "last", []))) {
                // line 26
                echo "\t\t";
                $context["rows"] = twig_array_merge(($context["rows"] ?? null), [0 => ($context["node"] ?? null)]);
                // line 27
                echo "\t\t";
                $context["node"] = [];
                // line 28
                echo "\t";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
";
        // line 31
        $context["maxcount"] = 5;
        // line 32
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "theme", [], "any", false, true), "config", [], "any", false, true), "params", [], "any", false, true), "front", [], "any", false, true), "maxentries", [], "any", true, true)) {
            // line 33
            echo "\t";
            $context["maxcount"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "theme", []), "config", []), "params", []), "front", []), "maxentries", []);
        }
        // line 35
        echo "<section id=\"articlelist\">
\t<div class=\"pure-g\">
\t\t<div class=\"pure-u-1\">
\t\t\t<h1>";
        // line 38
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "ARTICLE_CATEGORIES");
        echo "</h1>
\t\t</div>
";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 41
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
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
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 42
                echo "\t\t<div class=\"pure-u-1 pure-u-md-1-2 frontrow\">
\t\t\t";
                // line 43
                $this->loadTemplate("partials/frontlist.html.twig", "front.html.twig", 43)->display(twig_array_merge($context, ["category" => $context["cat"], "maxcount" => ($context["maxcount"] ?? null)]));
                // line 44
                echo "\t\t</div>
\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t</div>
</section>

";
    }

    public function getTemplateName()
    {
        return "front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 47,  199 => 44,  197 => 43,  194 => 42,  176 => 41,  159 => 40,  154 => 38,  149 => 35,  145 => 33,  143 => 32,  141 => 31,  138 => 30,  123 => 28,  120 => 27,  117 => 26,  114 => 25,  111 => 24,  94 => 23,  90 => 21,  88 => 20,  86 => 19,  84 => 18,  82 => 17,  79 => 16,  75 => 14,  69 => 13,  66 => 12,  63 => 11,  60 => 10,  55 => 9,  52 => 8,  49 => 7,  47 => 6,  45 => 5,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% block content %}

{% set catlist = taxonomy.taxonomy[\"category\"]|keys %}
{% if grav.theme.config.params.articles.blacklist is defined %}
\t{% set blist = grav.theme.config.params.articles.blacklist %}
\t{% set tmplst = [] %}
\t{% for cat in catlist %}
\t\t{% if cat not in blist %}
\t\t\t{% set tmplst = tmplst|merge([cat]) %}
\t\t{% endif %}
\t{% endfor %}
\t{% set catlist = tmplst %}
{% endif %}

{% set rows=[] %}
{% set node=[] %}
{% set maxrows = 3 %}
{% if grav.theme.config.params.front.maxrows is defined %}
\t{% set maxrows = grav.theme.config.params.front.maxrows %}
{% endif %}
{% for cat in catlist|sort|slice(0,maxrows*2) %}
\t{% set node = node|merge([cat]) %}
\t{% if (node|length == 2) or (loop.last) %}
\t\t{% set rows = rows|merge([node]) %}
\t\t{% set node = [] %}
\t{% endif %}
{% endfor %}

{% set maxcount = 5 %}
{% if grav.theme.config.params.front.maxentries is defined %}
\t{% set maxcount = grav.theme.config.params.front.maxentries %}
{% endif %}
<section id=\"articlelist\">
\t<div class=\"pure-g\">
\t\t<div class=\"pure-u-1\">
\t\t\t<h1>{{ 'ARTICLE_CATEGORIES'|t }}</h1>
\t\t</div>
{% for row in rows %}
\t{% for cat in row %}
\t\t<div class=\"pure-u-1 pure-u-md-1-2 frontrow\">
\t\t\t{% include 'partials/frontlist.html.twig' with {'category': cat, 'maxcount': maxcount} %}
\t\t</div>
\t{% endfor %}
{% endfor %}
\t</div>
</section>

{% endblock %}", "front.html.twig", "/Applications/MAMP/htdocs/knowledgebase/user/themes/knowledge-base/templates/front.html.twig");
    }
}
