<?php

/* @Page:/srv/http/grav/user/pages/03.wydazenia */
class __TwigTemplate_134c402643b9fdc6bd8ce7c671f0dd436d820e3d5a08583bad2e931bb2621654 extends Twig_Template
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
        echo "<p>Najbliższe wydarzenia!</p>";
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
        return new Twig_Source("<p>Najbliższe wydarzenia!</p>", "@Page:/srv/http/grav/user/pages/03.wydazenia", "");
    }
}
