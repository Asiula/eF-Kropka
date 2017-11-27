<?php

/* @Page:/srv/http/grav/user/pages/02.test/test/test */
class __TwigTemplate_f358a711af4e82890713a76da0c31f75f1036c977cd708d03728a1a0df166bf3 extends Twig_Template
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
        echo "<p>test3</p>";
    }

    public function getTemplateName()
    {
        return "@Page:/srv/http/grav/user/pages/02.test/test/test";
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
        return new Twig_Source("<p>test3</p>", "@Page:/srv/http/grav/user/pages/02.test/test/test", "");
    }
}
