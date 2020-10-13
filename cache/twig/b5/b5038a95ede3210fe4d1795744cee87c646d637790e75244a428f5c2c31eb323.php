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

/* partials/frontlist.html.twig */
class __TwigTemplate_cab77083dda553b9cdab96ba15a8f8fb2a9784b246ca1ecf1b6abb2315892e92 extends \Twig\Template
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
        $context["articles"] = $this->getAttribute($this->getAttribute(($context["taxonomy"] ?? null), "findTaxonomy", [0 => ["category" => ($context["category"] ?? null)]], "method"), "order", [0 => "title"], "method");
        // line 2
        echo "<section class=\"topiclist\">
    <h2>
\t    ";
        // line 5
        echo "\t    ";
        $context["slug"] = twig_urlencode_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", ($context["category"] ?? null)));
        // line 6
        echo "\t    ";
        $context["p"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => ("/categories/" . ($context["slug"] ?? null))], "method");
        // line 7
        echo "\t    ";
        if ((($context["p"] ?? null) == null)) {
            // line 8
            echo "\t\t    <a href=\"";
            echo ($context["base_url"] ?? null);
            echo "/taxonomy?name=category&amp;val=";
            echo twig_urlencode_filter(($context["category"] ?? null));
            echo "\">";
            echo twig_escape_filter($this->env, ($context["category"] ?? null));
            echo "</a> 
\t    ";
        } else {
            // line 10
            echo "\t\t    <a href=\"";
            echo ($context["base_url"] ?? null);
            echo "/categories/";
            echo ($context["slug"] ?? null);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["category"] ?? null));
            echo "</a> 
\t    ";
        }
        // line 12
        echo "    \t<span class=\"count\">(";
        echo twig_length_filter($this->env, ($context["articles"] ?? null));
        echo ")</span>
    </h2>
    ";
        // line 14
        $this->loadTemplate("partials/topiclist.html.twig", "partials/frontlist.html.twig", 14)->display(twig_array_merge($context, ["articles" => ($context["articles"] ?? null), "maxcount" => ($context["maxcount"] ?? null)]));
        // line 15
        echo "</section>
";
    }

    public function getTemplateName()
    {
        return "partials/frontlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 15,  71 => 14,  65 => 12,  55 => 10,  45 => 8,  42 => 7,  39 => 6,  36 => 5,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set articles = taxonomy.findTaxonomy({'category': category}).order('title') %}
<section class=\"topiclist\">
    <h2>
\t    {# Check to see if a dedicated category page exists #}
\t    {% set slug = category|hyphenize|url_encode %}
\t    {% set p = page.find('/categories/'~slug) %}
\t    {% if p == null %}
\t\t    <a href=\"{{ base_url }}/taxonomy?name=category&amp;val={{ category|url_encode }}\">{{ category|e }}</a> 
\t    {% else %}
\t\t    <a href=\"{{ base_url }}/categories/{{slug}}\">{{ category|e }}</a> 
\t    {% endif %}
    \t<span class=\"count\">({{ articles|length }})</span>
    </h2>
    {% include 'partials/topiclist.html.twig' with {'articles': articles, 'maxcount': maxcount} %}
</section>
", "partials/frontlist.html.twig", "/Applications/MAMP/htdocs/knowledgebase/user/themes/knowledge-base/templates/partials/frontlist.html.twig");
    }
}
