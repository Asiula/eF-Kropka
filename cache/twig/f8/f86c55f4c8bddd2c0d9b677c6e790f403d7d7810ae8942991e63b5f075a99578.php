<?php

/* partials/facebook.post.html.twig */
class __TwigTemplate_982f2059dfd1e7f6123b3b09a8f2dc9343d56635e0793ccbc2182f1e732a9cbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id='facebook-posts'>
<a href=\"";
        // line 2
        echo ($context["pageLink"] ?? null);
        echo "\"><h3 class=\"heading\">";
        echo ($context["sectionTitleRaw"] ?? null);
        echo "</h3></a>
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["feed"] ?? null), 0, ($context["count"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 4
            echo "  <div class='facebook-post'>
    <a href='";
            // line 5
            echo $this->getAttribute($context["post"], "link", array());
            echo "' title='Facebook post'>
    <i class=\"fa fa-envelope post-icon\" aria-hidden='true'></i><h4 class='media-heading'>";
            // line 6
            echo $this->getAttribute($context["post"], "time", array());
            echo "</h4></a>
    <p>";
            // line 7
            echo $this->getAttribute($context["post"], "message", array());
            echo "</p>
    ";
            // line 8
            echo $this->getAttribute($context["post"], "image", array());
            echo "
    </p>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "partials/facebook.post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 12,  47 => 8,  43 => 7,  39 => 6,  35 => 5,  32 => 4,  28 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id='facebook-posts'>
<a href=\"{{ pageLink|raw}}\"><h3 class=\"heading\">{{ sectionTitleRaw|raw }}</h3></a>
{% for post in feed|slice(0, count)  %}
  <div class='facebook-post'>
    <a href='{{ post.link|raw }}' title='Facebook post'>
    <i class=\"fa fa-envelope post-icon\" aria-hidden='true'></i><h4 class='media-heading'>{{ post.time|raw }}</h4></a>
    <p>{{ post.message|raw }}</p>
    {{ post.image|raw }}
    </p>
  </div>
{% endfor %}
</div>", "partials/facebook.post.html.twig", "/srv/http/grav/user/plugins/facebook/templates/partials/facebook.post.html.twig");
    }
}
