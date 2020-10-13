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

/* partials/topiclist.html.twig */
class __TwigTemplate_e88ff7dfbf85daac43dc766087b4f1ed95d1b10ae4108680a583b43f3e589f54 extends \Twig\Template
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
        if ( !array_key_exists("maxcount", $context)) {
            // line 2
            echo "    ";
            $context["maxcount"] = (twig_length_filter($this->env, ($context["articles"] ?? null)) + 1);
        }
        // line 4
        echo "<ul>
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["articles"] ?? null), 0, ($context["maxcount"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 6
            echo "  ";
            // line 7
            echo "  ";
            if (( !$this->getAttribute($this->getAttribute($context["p"], "header", [], "any", false, true), "published", [], "any", true, true) || $this->getAttribute($this->getAttribute($context["p"], "header", []), "published", []))) {
                // line 8
                echo "    ";
                if (($this->getAttribute($this->getAttribute($context["p"], "header", []), "media", []) == "video")) {
                    // line 9
                    echo "      <li class=\"video\">
    ";
                } else {
                    // line 11
                    echo "      <li class=\"text\">
    ";
                }
                // line 13
                echo "    <a href=\"";
                echo $this->getAttribute($context["p"], "url", []);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "title", []));
                echo "</a>
    </li>
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "partials/topiclist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 17,  59 => 13,  55 => 11,  51 => 9,  48 => 8,  45 => 7,  43 => 6,  39 => 5,  36 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if maxcount is not defined %}
    {% set maxcount = (articles|length) + 1 %}
{% endif %}
<ul>
{% for p in articles|slice(0,maxcount) %}
  {# If the page isn't published, don't show it... #}
  {% if not p.header.published is defined or p.header.published %}
    {% if p.header.media == 'video' %}
      <li class=\"video\">
    {% else %}
      <li class=\"text\">
    {% endif %}
    <a href=\"{{p.url}}\">{{ p.title|e }}</a>
    </li>
  {% endif %}
{% endfor %}
</ul>
", "partials/topiclist.html.twig", "/Applications/MAMP/htdocs/knowledgebase/user/themes/knowledge-base/templates/partials/topiclist.html.twig");
    }
}
