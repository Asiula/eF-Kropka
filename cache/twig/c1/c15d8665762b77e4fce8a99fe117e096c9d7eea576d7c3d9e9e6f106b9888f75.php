<?php

/* @Page:/srv/http/grav/user/pages/03.nowa */
class __TwigTemplate_ddf2d591ade6f671284d8b8f41f6aff2fe752292f568493e232bd2cabb179ce5 extends Twig_Template
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
        echo "<p>nowa strona</p>";
    }

    public function getTemplateName()
    {
        return "@Page:/srv/http/grav/user/pages/03.nowa";
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
        return new Twig_Source("<p>nowa strona</p>", "@Page:/srv/http/grav/user/pages/03.nowa", "");
    }
}
