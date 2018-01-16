<?php

/* @Page:/srv/http/grav/user/pages/03.wydazenia/news */
class __TwigTemplate_5f7909f4c33aae7195f97224996abc77c641013c7f7f395877bb6e462210a726 extends Twig_Template
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
        echo "<p>news 2
lorem</p>";
    }

    public function getTemplateName()
    {
        return "@Page:/srv/http/grav/user/pages/03.wydazenia/news";
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
        return new Twig_Source("<p>news 2
lorem</p>", "@Page:/srv/http/grav/user/pages/03.wydazenia/news", "");
    }
}
