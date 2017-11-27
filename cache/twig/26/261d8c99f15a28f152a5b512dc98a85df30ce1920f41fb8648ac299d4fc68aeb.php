<?php

/* @Page:/srv/http/grav/user/pages/08.kontakt */
class __TwigTemplate_9cc7d13979c81c2e22f02467b87574c87553c7f3ab54f31fb79a0d70ab605ae6 extends Twig_Template
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
        echo "<h1>Fundacja eF kropka</h1>
<p>fundacja@ef.org.pl
KRS: 0000382481
NIP: 9512336073
REGON: 142886373
Nr konta: 69203000451110000003721820
Jerzy Kłoskowski - Prezes Zarządu </p>
<ul>
<li>tel. 605 220 927
Joanna Krzyżanowska-Zbucka - Członek Zarządu</li>
<li>tel. 601 671 573
Marta Niedźwiedzka - Członek Zarządu</li>
<li>tel. 501 035 457</li>
</ul>";
    }

    public function getTemplateName()
    {
        return "@Page:/srv/http/grav/user/pages/08.kontakt";
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
        return new Twig_Source("<h1>Fundacja eF kropka</h1>
<p>fundacja@ef.org.pl
KRS: 0000382481
NIP: 9512336073
REGON: 142886373
Nr konta: 69203000451110000003721820
Jerzy Kłoskowski - Prezes Zarządu </p>
<ul>
<li>tel. 605 220 927
Joanna Krzyżanowska-Zbucka - Członek Zarządu</li>
<li>tel. 601 671 573
Marta Niedźwiedzka - Członek Zarządu</li>
<li>tel. 501 035 457</li>
</ul>", "@Page:/srv/http/grav/user/pages/08.kontakt", "");
    }
}
