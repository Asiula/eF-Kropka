<?php

/* partials/base.html.twig */
class __TwigTemplate_2f7b2cdcb4ab8be74d96cb9759e973ea4f3c9a5954aec2cfa830d3f4aed8a288 extends Twig_Template
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
        // line 32
        echo "</head>
<body id=\"top\" class=\"";
        // line 33
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "body_classes", array());
        echo "\">

";
        // line 35
        $this->displayBlock('header', $context, $blocks);
        // line 64
        echo "
";
        // line 65
        $this->displayBlock('body', $context, $blocks);
        // line 72
        $this->displayBlock('footer', $context, $blocks);
        // line 84
        echo "
</body>
<script type='text/javascript' src='";
        // line 86
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("plugin://simplesearch/js/simplesearch.js");
        echo "'></script>
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
        // line 22
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

    ";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
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
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/home.css", 1 => 98), "method");
        // line 21
        echo "    ";
    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        // line 25
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "jquery", 1 => 100), "method");
        // line 26
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/uikit.min.js"), "method");
        // line 27
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJS", array(0 => "theme://js/uikit-icons.min.js"), "method");
        // line 28
        echo "    ";
    }

    // line 35
    public function block_header($context, array $blocks = array())
    {
        // line 36
        echo "        <div class=\"header color-primary-4 uk-flex uk-flex-column uk-flex-center\">
            <div class=\"logo-wrapper uk-flex-row\">
                <div>
            <a class=\"logo left\" href=\"";
        // line 39
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\">
                <div class=\"logo\">
                    <img alt=\"logo eF Kropka\" src=\"";
        // line 41
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/eflogo.svg");
        echo "\" id=\"eflogo\"/>
                </div>
            </a>
            </div>

            <div class=\"white-text uk-flex-bottom uk-flex-center\" id=\"text\">
                <p id=\"text\">
                    Przeciwdziałamy stygmatyzacji osób po kryzysie psychicznym
                </p>
            </div>
            <div class=\"uk-flex uk-flex-column\" id=\"searchID\">
                <div class=\"search uk-flex-right\">
                ";
        // line 53
        $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/base.html.twig", 53)->display($context);
        // line 54
        echo "            </div>
            </div>
                        </div>
            ";
        // line 57
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 62
        echo "        </div>
";
    }

    // line 57
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 58
        echo "                <div class=\"nav-wrapper color-secondary-2-4\">
                    ";
        // line 59
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 59)->display($context);
        // line 60
        echo "                    </div>
            ";
    }

    // line 65
    public function block_body($context, array $blocks = array())
    {
        // line 66
        echo "    <section id=\"body\" class=\"uk-section\">
        <div class=\"wrapper padding uk-container\">
        ";
        // line 68
        $this->displayBlock('content', $context, $blocks);
        // line 69
        echo "        </div>
    </section>
";
    }

    // line 68
    public function block_content($context, array $blocks = array())
    {
    }

    // line 72
    public function block_footer($context, array $blocks = array())
    {
        // line 73
        echo "    <div class=\"footer color-primary-4 uk-flex uk-flex-right uk-flex-middle\">
        <div class=\"white-text uk-flex-column\">
        <div class=\"jwd\">
            <p>Theme developed by Joanna Żelek & Spółdzielnia Kreatura</p>
        </div>
        <div class=\"white-text jwd\">
            <p><a href=\"http://getgrav.org\">Grav</a> was <a href=\"\" uk-icon=\"icon: code\"></a> with <a href=\"\" uk-icon=\"icon: heart\"></a> by <a href=\"http://www.rockettheme.com\">RocketTheme</a>.</p>
        </div>
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
        return array (  224 => 73,  221 => 72,  216 => 68,  210 => 69,  208 => 68,  204 => 66,  201 => 65,  196 => 60,  194 => 59,  191 => 58,  188 => 57,  183 => 62,  181 => 57,  176 => 54,  174 => 53,  159 => 41,  154 => 39,  149 => 36,  146 => 35,  142 => 28,  139 => 27,  136 => 26,  133 => 25,  130 => 24,  126 => 21,  123 => 20,  120 => 19,  117 => 18,  114 => 17,  111 => 16,  108 => 15,  100 => 29,  98 => 24,  92 => 22,  90 => 15,  85 => 13,  81 => 12,  78 => 11,  76 => 10,  70 => 6,  67 => 5,  60 => 86,  56 => 84,  54 => 72,  52 => 65,  49 => 64,  47 => 35,  42 => 33,  39 => 32,  37 => 5,  32 => 3,  29 => 2,  27 => 1,);
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
                {% do assets.addCss('theme://css/home.css', 98) %}
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
        <div class=\"header color-primary-4 uk-flex uk-flex-column uk-flex-center\">
            <div class=\"logo-wrapper uk-flex-row\">
                <div>
            <a class=\"logo left\" href=\"{{ base_url == '' ? '/' : base_url }}\">
                <div class=\"logo\">
                    <img alt=\"logo eF Kropka\" src=\"{{url('theme://images/eflogo.svg')}}\" id=\"eflogo\"/>
                </div>
            </a>
            </div>

            <div class=\"white-text uk-flex-bottom uk-flex-center\" id=\"text\">
                <p id=\"text\">
                    Przeciwdziałamy stygmatyzacji osób po kryzysie psychicznym
                </p>
            </div>
            <div class=\"uk-flex uk-flex-column\" id=\"searchID\">
                <div class=\"search uk-flex-right\">
                {% include 'partials/simplesearch_searchbox.html.twig' %}
            </div>
            </div>
                        </div>
            {% block header_navigation %}
                <div class=\"nav-wrapper color-secondary-2-4\">
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
{% block footer %}
    <div class=\"footer color-primary-4 uk-flex uk-flex-right uk-flex-middle\">
        <div class=\"white-text uk-flex-column\">
        <div class=\"jwd\">
            <p>Theme developed by Joanna Żelek & Spółdzielnia Kreatura</p>
        </div>
        <div class=\"white-text jwd\">
            <p><a href=\"http://getgrav.org\">Grav</a> was <a href=\"\" uk-icon=\"icon: code\"></a> with <a href=\"\" uk-icon=\"icon: heart\"></a> by <a href=\"http://www.rockettheme.com\">RocketTheme</a>.</p>
        </div>
        </div>
        </div>
{% endblock %}

</body>
<script type='text/javascript' src='{{ url('plugin://simplesearch/js/simplesearch.js') }}'></script>
</html>
", "partials/base.html.twig", "/srv/http/grav/user/themes/e-f-kropka/templates/partials/base.html.twig");
    }
}
