<?php

/* @Page:/srv/http/grav/user/pages/03.wydazenia/news */
class __TwigTemplate_c78014a0409b65ce8e74640b26bedff3e37c8586ae3d0852b4b0360f3cfce823 extends Twig_Template
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
        echo "<p>Zapraszamy na otwarte spotkania informacyjne w Mokotowskim Centrum Integracji Mieszkańców  ul. Woronicza 44a zawsze o godzinie 13.30.</p>
<p>Terminy spotkań w tym roku: 19.10.  2.11.  16.11.  30.11.  14.12.</p>
<p>Kontakt: fundacja@ef.org.pl   605 220 927</p>";
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
        return new Twig_Source("<p>Zapraszamy na otwarte spotkania informacyjne w Mokotowskim Centrum Integracji Mieszkańców  ul. Woronicza 44a zawsze o godzinie 13.30.</p>
<p>Terminy spotkań w tym roku: 19.10.  2.11.  16.11.  30.11.  14.12.</p>
<p>Kontakt: fundacja@ef.org.pl   605 220 927</p>", "@Page:/srv/http/grav/user/pages/03.wydazenia/news", "");
    }
}
