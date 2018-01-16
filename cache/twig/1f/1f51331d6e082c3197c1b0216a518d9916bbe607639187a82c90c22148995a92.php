<?php

/* @Page:/srv/http/grav/user/pages/03.wydazenia/news-3 */
class __TwigTemplate_3c4f1707f7b6312eb54421544f8dea6933de3ab675404e9dd6ba16d39a282cae extends Twig_Template
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
        echo "<p>lorem ipsum news 3</p>";
    }

    public function getTemplateName()
    {
        return "@Page:/srv/http/grav/user/pages/03.wydazenia/news-3";
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
        return new Twig_Source("<p>lorem ipsum news 3</p>", "@Page:/srv/http/grav/user/pages/03.wydazenia/news-3", "");
    }
}
