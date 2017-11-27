<?php

/* partials/base.html.twig */
class __TwigTemplate_740a99ceaeadea0e2f15be5f839ca179364626ce24bde448e2177783e706d07e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) : ($this->getAttribute(($context["theme_config"] ?? null), "default_lang", array())));
        echo "\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 32
        echo "</head>
<body id=\"top\" class=\"";
        // line 33
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "body_classes", array());
        echo "\">

    ";
        // line 35
        $this->displayBlock('header', $context, $blocks);
        // line 52
        echo "        </div>
        <main>
";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 61
        echo "</main>
";
        // line 62
        $this->displayBlock('footer', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('bottom', $context, $blocks);
        // line 74
        echo "
</body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", array()), "html");
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 11
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 11)->display($context);
        // line 12
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 14
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

    ";
        // line 25
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "https://unpkg.com/purecss@1.0.0/build/pure-min.css", 1 => 100), "method");
        // line 18
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", 1 => 99), "method");
        // line 19
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/custom.css", 1 => 98), "method");
        // line 20
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/materialize.min.css", 1 => 98), "method");
        // line 21
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "https://fonts.googleapis.com/icon?family=Material+Icons", 1 => 98), "method");
        // line 22
        echo "    ";
    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        // line 26
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "jquery", 1 => 100), "method");
        // line 27
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/materialize.min.js", 1 => 100), "method");
        // line 28
        echo "    ";
    }

    // line 35
    public function block_header($context, array $blocks = array())
    {
        // line 36
        echo "        <div class=\"header-wrapper\">
    <div class=\"header\">
        <div class=\"wrapper padding\" id=\"ef-logo\">
            <a class=\"logo left\" href=\"";
        // line 39
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\" class=\"brand-logo\">
                <i class=\"fa fa-rebel\"></i>
                ";
        // line 41
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", array()), "title", array());
        echo " <p> Przeciwdziałamy stygmatyzacji osób po kryzysie psychicznym</p>
            </a>
        </div>
    </div>
        <div class=\"search\">
        ";
        // line 46
        $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/base.html.twig", 46)->display($context);
        // line 47
        echo "    </div>
            ";
        // line 48
        $this->displayBlock('header_navigation', $context, $blocks);
    }

    public function block_header_navigation($context, array $blocks = array())
    {
        // line 49
        echo "                ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 49)->display($context);
        // line 50
        echo "            ";
    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
        // line 55
        echo "    <section id=\"body\">
        <div class=\"wrapper padding\">
        ";
        // line 57
        $this->displayBlock('content', $context, $blocks);
        // line 58
        echo "        </div>
    </section>
";
    }

    // line 57
    public function block_content($context, array $blocks = array())
    {
    }

    // line 62
    public function block_footer($context, array $blocks = array())
    {
        // line 63
        echo "    <footer class=\"footer text-center page-footer\">
        <div class=\"wrapper padding container\">
            <div>
            <p class=\"grey-text text-lighten-4 right\"><a href=\"http://getgrav.org\" class=\"grey-text\"> Grav </a> was <i class=\"fa fa-code\" aria-hidden=\"true\"></i> with &#10084 by <a href=\"http://www.rockettheme.com\" class=\"grey-text\"> RocketTheme</a></p></div>
        </div>
    </footer>
";
    }

    // line 71
    public function block_bottom($context, array $blocks = array())
    {
        // line 72
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(0 => "bottom"), "method");
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
        return array (  232 => 72,  229 => 71,  219 => 63,  216 => 62,  211 => 57,  205 => 58,  203 => 57,  199 => 55,  196 => 54,  192 => 50,  189 => 49,  183 => 48,  180 => 47,  178 => 46,  170 => 41,  165 => 39,  160 => 36,  157 => 35,  153 => 28,  150 => 27,  147 => 26,  144 => 25,  140 => 22,  137 => 21,  134 => 20,  131 => 19,  128 => 18,  125 => 17,  122 => 16,  114 => 29,  112 => 25,  106 => 23,  104 => 16,  99 => 14,  95 => 13,  92 => 12,  90 => 11,  79 => 7,  76 => 6,  73 => 5,  66 => 74,  64 => 71,  61 => 70,  59 => 62,  56 => 61,  54 => 54,  50 => 52,  48 => 35,  43 => 33,  40 => 32,  38 => 5,  33 => 3,  30 => 2,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">
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
        {% do assets.addCss('https://unpkg.com/purecss@1.0.0/build/pure-min.css', 100) %}
        {% do assets.addCss('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', 99) %}
        {% do assets.addCss('theme://css/custom.css', 98) %}
        {% do assets.addCss('theme://css/materialize.min.css', 98) %}
        {% do assets.addCss('https://fonts.googleapis.com/icon?family=Material+Icons', 98) %}
    {% endblock %}
    {{ assets.css() }}

    {% block javascripts %}
        {% do assets.addJs('jquery', 100) %}
        {% do assets.addJs('theme://js/materialize.min.js', 100) %}
    {% endblock %}
    {{ assets.js() }}

{% endblock head%}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }}\">

    {% block header %}
        <div class=\"header-wrapper\">
    <div class=\"header\">
        <div class=\"wrapper padding\" id=\"ef-logo\">
            <a class=\"logo left\" href=\"{{ base_url == '' ? '/' : base_url }}\" class=\"brand-logo\">
                <i class=\"fa fa-rebel\"></i>
                {{ config.site.title }} <p> Przeciwdziałamy stygmatyzacji osób po kryzysie psychicznym</p>
            </a>
        </div>
    </div>
        <div class=\"search\">
        {% include 'partials/simplesearch_searchbox.html.twig' %}
    </div>
            {% block header_navigation %}
                {% include 'partials/navigation.html.twig' %}
            {% endblock %}
{% endblock %}
        </div>
        <main>
{% block body %}
    <section id=\"body\">
        <div class=\"wrapper padding\">
        {% block content %}{% endblock %}
        </div>
    </section>
{% endblock %}
</main>
{% block footer %}
    <footer class=\"footer text-center page-footer\">
        <div class=\"wrapper padding container\">
            <div>
            <p class=\"grey-text text-lighten-4 right\"><a href=\"http://getgrav.org\" class=\"grey-text\"> Grav </a> was <i class=\"fa fa-code\" aria-hidden=\"true\"></i> with &#10084 by <a href=\"http://www.rockettheme.com\" class=\"grey-text\"> RocketTheme</a></p></div>
        </div>
    </footer>
{% endblock %}

{% block bottom %}
    {{ assets.js('bottom') }}
{% endblock %}

</body>
</html>
", "partials/base.html.twig", "/srv/http/grav/user/themes/ef-kropka/templates/partials/base.html.twig");
    }
}
