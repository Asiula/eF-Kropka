<?php

/* @Page:/srv/http/grav/user/pages/08.kontakt */
class __TwigTemplate_1e8cce91d10577075b2d1bf56b55245b3d38cd095971899376d6027497c4d3c5 extends Twig_Template
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
<p>fundacja@ef.org.pl<br />
KRS: 0000382481<br />
NIP: 9512336073<br />
REGON: 142886373<br />
Nr konta: 69203000451110000003721820     </p>
<p>Jerzy Kłoskowski - Prezes Zarządu<br />
tel. 605 220 927<br />
Joanna Krzyżanowska-Zbucka - Członek Zarządu<br />
tel. 601 671 573<br />
Marta Niedźwiedzka - Członek Zarządu<br />
tel. 501 035 457  </p>";
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
<p>fundacja@ef.org.pl<br />
KRS: 0000382481<br />
NIP: 9512336073<br />
REGON: 142886373<br />
Nr konta: 69203000451110000003721820     </p>
<p>Jerzy Kłoskowski - Prezes Zarządu<br />
tel. 605 220 927<br />
Joanna Krzyżanowska-Zbucka - Członek Zarządu<br />
tel. 601 671 573<br />
Marta Niedźwiedzka - Członek Zarządu<br />
tel. 501 035 457  </p>", "@Page:/srv/http/grav/user/pages/08.kontakt", "");
    }
}
