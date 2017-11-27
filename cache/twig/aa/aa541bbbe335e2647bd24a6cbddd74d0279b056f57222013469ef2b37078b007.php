<?php

/* @Page:/srv/http/grav/user/pages/04.wydazenia */
class __TwigTemplate_13e666e34199f8caaafc2fdfbe252a389ac373f784610fc49803e6f5cb64cca5 extends Twig_Template
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
        echo "<p>news</p>";
    }

    public function getTemplateName()
    {
        return "@Page:/srv/http/grav/user/pages/04.wydazenia";
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
        return new Twig_Source("<p>news</p>", "@Page:/srv/http/grav/user/pages/04.wydazenia", "");
    }
}
