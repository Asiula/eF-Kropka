<?php

/* @Page:/srv/http/grav/user/pages/03.wydazenia */
class __TwigTemplate_b0fe0d01e035e3cbc8b3dca8f0a797fa8fbedb4a5b10d354348deb05ccebe29b extends Twig_Template
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
        echo "<p>news posts</p>";
    }

    public function getTemplateName()
    {
        return "@Page:/srv/http/grav/user/pages/03.wydazenia";
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
        return new Twig_Source("<p>news posts</p>", "@Page:/srv/http/grav/user/pages/03.wydazenia", "");
    }
}
