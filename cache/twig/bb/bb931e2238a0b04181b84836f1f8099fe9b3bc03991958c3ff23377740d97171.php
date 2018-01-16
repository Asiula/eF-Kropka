<?php

/* blog.html.twig */
class __TwigTemplate_54b50f46ae1c085f5eff1f753b901c2b114aee5ef7175d8a7488c22ffd4e8242 extends Twig_Template
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
        $this->loadTemplate("blog.html.twig", "blog.html.twig", 1, "675467765")->display($context);
        // line 36
        echo "

";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 36,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

\t{% set collection = page.collection() %}

\t{% block content %}
\t\t{% set blog_image = page.media.images|first.grayscale().contrast(20).brightness(-100).colorize(-35,81,122) %}

\t\t{% if blog_image %}
\t\t<div class=\"flush-top blog-header blog-header-image\" style=\"background-image: url({{ blog_image.url }});\">
\t\t{% else %}
\t\t<div class=\"blog-header\">
\t\t{% endif %}
\t\t\t{{ page.content }}
\t\t</div>

    <!-- ukryty nagłówke który duplikuje zawartość -->
    <div class=\"hidden\">
\t\t\t{% if config.plugins.breadcrumbs.enabled %}
\t\t\t\t{% include 'partials/breadcrumbs.html.twig' %}
\t\t\t{% endif %}</div>

\t\t<div class=\"uk-flex-column uk-container wrapper padding\">
\t\t\t<div id=\"listing\" class=\"pure-u-3-3 uk-flex-column\">
\t\t\t\t{% for child in collection %}
\t\t\t        {% include 'partials/blog_item.html.twig' with {'blog':page, 'page':child, 'truncate':true} %}
\t\t\t    {% endfor %}

                {% if config.plugins.pagination.enabled and collection.params.pagination %}
                    {% include 'partials/pagination.html.twig' with {'base_url':page.url, 'pagination':collection.params.pagination} %}
                {% endif %}
\t\t\t</div>
\t\t</div>
\t{% endblock %}

{% endembed %}


", "blog.html.twig", "/srv/http/grav/user/themes/e-f-kropka/templates/blog.html.twig");
    }
}


/* blog.html.twig */
class __TwigTemplate_54b50f46ae1c085f5eff1f753b901c2b114aee5ef7175d8a7488c22ffd4e8242_675467765 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", array(), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t\t";
        $context["blog_image"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array())), "grayscale", array(), "method"), "contrast", array(0 => 20), "method"), "brightness", array(0 =>  -100), "method"), "colorize", array(0 =>  -35, 1 => 81, 2 => 122), "method");
        // line 7
        echo "
\t\t";
        // line 8
        if (($context["blog_image"] ?? null)) {
            // line 9
            echo "\t\t<div class=\"flush-top blog-header blog-header-image\" style=\"background-image: url(";
            echo $this->getAttribute(($context["blog_image"] ?? null), "url", array());
            echo ");\">
\t\t";
        } else {
            // line 11
            echo "\t\t<div class=\"blog-header\">
\t\t";
        }
        // line 13
        echo "\t\t\t";
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
\t\t</div>

    <!-- ukryty nagłówke który duplikuje zawartość -->
    <div class=\"hidden\">
\t\t\t";
        // line 18
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
            // line 19
            echo "\t\t\t\t";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "blog.html.twig", 19)->display($context);
            // line 20
            echo "\t\t\t";
        }
        echo "</div>

\t\t<div class=\"uk-flex-column uk-container wrapper padding\">
\t\t\t<div id=\"listing\" class=\"pure-u-3-3 uk-flex-column\">
\t\t\t\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 25
            echo "\t\t\t        ";
            $this->loadTemplate("partials/blog_item.html.twig", "blog.html.twig", 25)->display(array_merge($context, array("blog" => ($context["page"] ?? null), "page" => $context["child"], "truncate" => true)));
            // line 26
            echo "\t\t\t    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
                ";
        // line 28
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array()))) {
            // line 29
            echo "                    ";
            $this->loadTemplate("partials/pagination.html.twig", "blog.html.twig", 29)->display(array_merge($context, array("base_url" => $this->getAttribute(($context["page"] ?? null), "url", array()), "pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array()))));
            // line 30
            echo "                ";
        }
        // line 31
        echo "\t\t\t</div>
\t\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 31,  206 => 30,  203 => 29,  201 => 28,  198 => 27,  184 => 26,  181 => 25,  164 => 24,  156 => 20,  153 => 19,  151 => 18,  142 => 13,  138 => 11,  132 => 9,  130 => 8,  127 => 7,  124 => 6,  121 => 5,  117 => 1,  115 => 3,  101 => 1,  21 => 36,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

\t{% set collection = page.collection() %}

\t{% block content %}
\t\t{% set blog_image = page.media.images|first.grayscale().contrast(20).brightness(-100).colorize(-35,81,122) %}

\t\t{% if blog_image %}
\t\t<div class=\"flush-top blog-header blog-header-image\" style=\"background-image: url({{ blog_image.url }});\">
\t\t{% else %}
\t\t<div class=\"blog-header\">
\t\t{% endif %}
\t\t\t{{ page.content }}
\t\t</div>

    <!-- ukryty nagłówke który duplikuje zawartość -->
    <div class=\"hidden\">
\t\t\t{% if config.plugins.breadcrumbs.enabled %}
\t\t\t\t{% include 'partials/breadcrumbs.html.twig' %}
\t\t\t{% endif %}</div>

\t\t<div class=\"uk-flex-column uk-container wrapper padding\">
\t\t\t<div id=\"listing\" class=\"pure-u-3-3 uk-flex-column\">
\t\t\t\t{% for child in collection %}
\t\t\t        {% include 'partials/blog_item.html.twig' with {'blog':page, 'page':child, 'truncate':true} %}
\t\t\t    {% endfor %}

                {% if config.plugins.pagination.enabled and collection.params.pagination %}
                    {% include 'partials/pagination.html.twig' with {'base_url':page.url, 'pagination':collection.params.pagination} %}
                {% endif %}
\t\t\t</div>
\t\t</div>
\t{% endblock %}

{% endembed %}


", "blog.html.twig", "/srv/http/grav/user/themes/e-f-kropka/templates/blog.html.twig");
    }
}
