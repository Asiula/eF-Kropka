<?php

/* home.html.twig */
class __TwigTemplate_6d305cc927ab96c0fcacc9d4998a3e3d16d4283d73a99dc326a9baabf8968729 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "home.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <main class=\"uk-flex-row uk-flex home-main\">
    <section class=\"uk-flex home-section uk-flex-column\">
    ";
        // line 6
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
</section>
    <aside class=\"uk-flex-column uk-flex home-aside\">
        <div class=\"aside-top uk-flex uk-flex-column\">
            <h1> WESPRZYJ NAS - FINANSUJĄC STAŻ</h1>
            <h3>Fundacja eF kropka</h3>
            <p>
                Nr konta: 69203000451110000003721820 <br/>
                KRS: 0000382481 <br/>
                ....albo zostań wolontariuszem
                </p>
</div>
        <div class=\"aside-bot uk-flex uk-flex-column\">
";
        // line 19
        echo call_user_func_array($this->env->getFunction('facebook_posts')->getCallable(), array());
        echo "
</div>
    </aside>
    </main>
";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 19,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% block content %}
    <main class=\"uk-flex-row uk-flex home-main\">
    <section class=\"uk-flex home-section uk-flex-column\">
    {{ page.content }}
</section>
    <aside class=\"uk-flex-column uk-flex home-aside\">
        <div class=\"aside-top uk-flex uk-flex-column\">
            <h1> WESPRZYJ NAS - FINANSUJĄC STAŻ</h1>
            <h3>Fundacja eF kropka</h3>
            <p>
                Nr konta: 69203000451110000003721820 <br/>
                KRS: 0000382481 <br/>
                ....albo zostań wolontariuszem
                </p>
</div>
        <div class=\"aside-bot uk-flex uk-flex-column\">
{{ facebook_posts() }}
</div>
    </aside>
    </main>
{% endblock %}
", "home.html.twig", "/srv/http/grav/user/themes/e-f-kropka/templates/home.html.twig");
    }
}
