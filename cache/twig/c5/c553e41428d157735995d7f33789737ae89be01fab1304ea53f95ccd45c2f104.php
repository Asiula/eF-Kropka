<?php

/* partials/nav-toggle.html.twig */
class __TwigTemplate_d4a596f1e19fbeec10718468356c44eba498d1fe702f11c85c227010628df8de extends Twig_Template
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
        echo "<button class=\"lines-button x\" type=\"button\" role=\"button\" aria-label=\"Toggle Navigation\" data-sidebar-mobile-toggle>
    <span class=\"lines\"></span>
</button>
";
    }

    public function getTemplateName()
    {
        return "partials/nav-toggle.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<button class=\"lines-button x\" type=\"button\" role=\"button\" aria-label=\"Toggle Navigation\" data-sidebar-mobile-toggle>
    <span class=\"lines\"></span>
</button>
", "partials/nav-toggle.html.twig", "/srv/http/grav/user/plugins/admin/themes/grav/templates/partials/nav-toggle.html.twig");
    }
}