<?php

/* @Page:/srv/http/grav/user/pages/02.test/test/test */
class __TwigTemplate_31c1193a2ed6da162427cf0acb6d93df0baf2c11c3f6a0f7cf722249478e0381 extends Twig_Template
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
