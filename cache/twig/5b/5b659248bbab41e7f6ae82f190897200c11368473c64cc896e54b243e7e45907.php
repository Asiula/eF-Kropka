<?php

/* partials/base.html.twig */
class __TwigTemplate_37adf3717ff9a0a94ecf2622c29368101697c6df390e92f34c66e69a27a04c90 extends Twig_Template
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
        // line 31
        echo "</head>
<body id=\"top\" class=\"";
        // line 32
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "body_classes", array());
        echo "\">

";
        // line 34
        $this->displayBlock('header', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 59
        echo "Eu feugiat pretium, nibh ipsum consequat nisl, vel pretium lectus quam id leo in vitae turpis. Morbi tincidunt augue interdum velit euismod in pellentesque massa placerat duis ultricies lacus sed.
";
        // line 60
        $this->displayBlock('footer', $context, $blocks);
        // line 67
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

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 10
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 10)->display($context);
        // line 11
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 13
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

    ";
        // line 23
        $this->displayBlock('javascripts', $context, $blocks);
        // line 28
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

";
    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 16
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "https://unpkg.com/purecss@1.0.0/build/pure-min.css", 1 => 100), "method");
        // line 17
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", 1 => 99), "method");
        // line 18
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/uikit.min.css", 1 => 98), "method");
        // line 19
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/custom.css", 1 => 98), "method");
        // line 20
        echo "    ";
    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        // line 24
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "jquery", 1 => 100), "method");
        // line 25
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/uikit.min.js"), "method");
        // line 26
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJS", array(0 => "theme://js/uikit-icons.min.js"), "method");
        // line 27
        echo "    ";
    }

    // line 34
    public function block_header($context, array $blocks = array())
    {
        // line 35
        echo "        <div class=\"header uk-background-primary wrapper\">
            <div class=\"logo-wrapper\">
            <a class=\"logo left\" href=\"";
        // line 37
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\">
                <div class=\"logo\">
                    <img alt=\"logo eF Kropka\" src=\"";
        // line 39
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo_FB_feed.png");
        echo "\" id=\"eflogo\"/>
                    </div>
                ";
        // line 41
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", array()), "title", array());
        echo "
            </a>
            </div>
            ";
        // line 44
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 49
        echo "        </div>
";
    }

    // line 44
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 45
        echo "                <div class=\"nav-wrapper\">
                    ";
        // line 46
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 46)->display($context);
        // line 47
        echo "                    </div>
            ";
    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        // line 53
        echo "    <section id=\"body\" class=\"uk-section\">
        <div class=\"wrapper padding uk-container\">
        ";
        // line 55
        $this->displayBlock('content', $context, $blocks);
        // line 56
        echo "        </div>
    </section>
";
    }

    // line 55
    public function block_content($context, array $blocks = array())
    {
    }

    // line 60
    public function block_footer($context, array $blocks = array())
    {
        // line 61
        echo "    <div class=\"footer text-center\">
        <div class=\"wrapper padding\">
            <p><a href=\"http://getgrav.org\">Grav</a> was <i class=\"fa fa-code\"></i> with <i class=\"fa fa-heart\"></i> by <a href=\"http://www.rockettheme.com\">RocketTheme</a>.</p>
        </div>
    </div>
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
        return array (  208 => 61,  205 => 60,  200 => 55,  194 => 56,  192 => 55,  188 => 53,  185 => 52,  180 => 47,  178 => 46,  175 => 45,  172 => 44,  167 => 49,  165 => 44,  159 => 41,  154 => 39,  149 => 37,  145 => 35,  142 => 34,  138 => 27,  135 => 26,  132 => 25,  129 => 24,  126 => 23,  122 => 20,  119 => 19,  116 => 18,  113 => 17,  110 => 16,  107 => 15,  99 => 28,  97 => 23,  91 => 21,  89 => 15,  84 => 13,  80 => 12,  77 => 11,  75 => 10,  69 => 6,  66 => 5,  59 => 67,  57 => 60,  54 => 59,  52 => 52,  49 => 51,  47 => 34,  42 => 32,  39 => 31,  37 => 5,  32 => 3,  29 => 2,  27 => 1,);
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

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

    {% block stylesheets %}
        {% do assets.addCss('https://unpkg.com/purecss@1.0.0/build/pure-min.css', 100) %}
        {% do assets.addCss('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', 99) %}
        {% do assets.addCss('theme://css/uikit.min.css', 98) %}
        {% do assets.addCss('theme://css/custom.css', 98) %}
    {% endblock %}
    {{ assets.css() }}

    {% block javascripts %}
        {% do assets.addJs('jquery', 100) %}
        {% do assets.addJs('theme://js/uikit.min.js') %}
        {% do assets.addJS('theme://js/uikit-icons.min.js') %}
    {% endblock %}
    {{ assets.js() }}

{% endblock head%}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }}\">

{% block header %}
        <div class=\"header uk-background-primary wrapper\">
            <div class=\"logo-wrapper\">
            <a class=\"logo left\" href=\"{{ base_url == '' ? '/' : base_url }}\">
                <div class=\"logo\">
                    <img alt=\"logo eF Kropka\" src=\"{{url('theme://images/logo_FB_feed.png')}}\" id=\"eflogo\"/>
                    </div>
                {{ config.site.title }}
            </a>
            </div>
            {% block header_navigation %}
                <div class=\"nav-wrapper\">
                    {% include 'partials/navigation.html.twig' %}
                    </div>
            {% endblock %}
        </div>
{% endblock %}

{% block body %}
    <section id=\"body\" class=\"uk-section\">
        <div class=\"wrapper padding uk-container\">
        {% block content %}{% endblock %}
        </div>
    </section>
{% endblock %}
Eu feugiat pretium, nibh ipsum consequat nisl, vel pretium lectus quam id leo in vitae turpis. Morbi tincidunt augue interdum velit euismod in pellentesque massa placerat duis ultricies lacus sed.
{% block footer %}
    <div class=\"footer text-center\">
        <div class=\"wrapper padding\">
            <p><a href=\"http://getgrav.org\">Grav</a> was <i class=\"fa fa-code\"></i> with <i class=\"fa fa-heart\"></i> by <a href=\"http://www.rockettheme.com\">RocketTheme</a>.</p>
        </div>
    </div>
{% endblock %}

</body>
</html>
", "partials/base.html.twig", "/srv/http/grav/user/themes/e-f-kropka/templates/partials/base.html.twig");
    }
}
