<?php

/* partials/blog_item.html.twig */
class __TwigTemplate_fa54586edcf7c4f4369c194ea8d26a4e46ae121684b2ffab7e3616038b5637af extends Twig_Template
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
        echo "<header>
en:
  MONTHS_OF_THE_YEAR: [January, February, March, April, May, June, July, August, September, October, November, December]
</header>

<div class=\"list-item h-entry\">

    ";
        // line 8
        $context["header_image"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "header_image", array()), true);
        // line 9
        echo "    ";
        $context["header_image_width"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "header_image_width", array()), 900);
        // line 10
        echo "    ";
        $context["header_image_height"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "header_image_height", array()), 300);
        // line 11
        echo "    ";
        $context["header_image_file"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "header_image_file", array());
        // line 12
        echo "
    <div class=\"list-blog-header\">
        <span class=\"list-blog-date\">
            <time class=\"dt-published\" datetime=\"";
        // line 15
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "c");
        echo "\">
                <span>";
        // line 16
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "d");
        echo "</span>
                <em>";
        // line 17
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate(twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "M"));
        echo "</em>
            </time>
        </span>
        ";
        // line 20
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "link", array())) {
            // line 21
            echo "            <h4 class=\"p-name\">
                ";
            // line 22
            if ( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "continue_link", array()) === false)) {
                // line 23
                echo "                <a href=\"";
                echo $this->getAttribute(($context["page"] ?? null), "url", array());
                echo "\"><i class=\"fa fa-angle-double-right u-url\"></i></a>
                ";
            }
            // line 25
            echo "                <a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "link", array());
            echo "\" class=\"u-url\">";
            echo $this->getAttribute(($context["page"] ?? null), "title", array());
            echo "</a>
            </h4>
        ";
        } else {
            // line 28
            echo "            <h4 class=\"p-name\"><a href=\"";
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\" class=\"u-url\">";
            echo $this->getAttribute(($context["page"] ?? null), "title", array());
            echo "</a></h4>
        ";
        }
        // line 30
        echo "
        ";
        // line 31
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "tag", array())) {
            // line 32
            echo "        <span class=\"tags\">
            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "tag", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 34
                echo "            <a href=\"";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter($this->getAttribute(($context["blog"] ?? null), "url", array()), "/");
                echo "/tag";
                echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array());
                echo $context["tag"];
                echo "\" class=\"p-category\">";
                echo $context["tag"];
                echo "</a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "        </span>
        ";
        }
        // line 38
        echo "        ";
        if (($context["header_image"] ?? null)) {
            // line 39
            echo "            ";
            if (($context["header_image_file"] ?? null)) {
                // line 40
                echo "                ";
                $context["header_image_media"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), ($context["header_image_file"] ?? null), array(), "array");
                // line 41
                echo "            ";
            } else {
                // line 42
                echo "                ";
                $context["header_image_media"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
                // line 43
                echo "            ";
            }
            // line 44
            echo "            ";
            echo $this->getAttribute($this->getAttribute(($context["header_image_media"] ?? null), "cropZoom", array(0 => ($context["header_image_width"] ?? null), 1 => ($context["header_image_height"] ?? null)), "method"), "html", array());
            echo "
        ";
        }
        // line 46
        echo "
    </div>

    <div class=\"list-blog-padding\">

    ";
        // line 51
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "continue_link", array()) === false)) {
            // line 52
            echo "        <div class=\"e-content\">        
            ";
            // line 53
            echo $this->getAttribute(($context["page"] ?? null), "content", array());
            echo "
        </div>
        ";
            // line 55
            if ( !($context["truncate"] ?? null)) {
                // line 56
                echo "        ";
                $context["show_prev_next"] = true;
                // line 57
                echo "        ";
            }
            // line 58
            echo "    ";
        } elseif ((($context["truncate"] ?? null) && ($this->getAttribute(($context["page"] ?? null), "summary", array()) != $this->getAttribute(($context["page"] ?? null), "content", array())))) {
            // line 59
            echo "        <div class=\"p-summary e-content\">
            ";
            // line 60
            echo $this->getAttribute(($context["page"] ?? null), "summary", array());
            echo "
            <p><a href=\"";
            // line 61
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\">Czytaj dalej</a></p>
        </div>
    ";
        } elseif (        // line 63
($context["truncate"] ?? null)) {
            // line 64
            echo "        <div class=\"p-summary e-content\">
            ";
            // line 65
            echo $this->getAttribute(($context["page"] ?? null), "content", array());
            echo "
            <p><a href=\"";
            // line 66
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\">Czytaj dalej</a></p>
        </div>
    ";
        } else {
            // line 69
            echo "        <div class=\"e-content\">
            ";
            // line 70
            echo $this->getAttribute(($context["page"] ?? null), "content", array());
            echo "
        </div>

        ";
            // line 73
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "comments", array()), "enabled", array())) {
                // line 74
                echo "            ";
                $this->loadTemplate("partials/comments.html.twig", "partials/blog_item.html.twig", 74)->display($context);
                // line 75
                echo "        ";
            }
            // line 76
            echo "
        ";
            // line 77
            $context["show_prev_next"] = true;
            // line 78
            echo "    ";
        }
        // line 79
        echo "
    ";
        // line 80
        if (($context["show_prev_next"] ?? null)) {
            // line 81
            echo "
        <p class=\"prev-next\">
            ";
            // line 83
            if ( !$this->getAttribute(($context["page"] ?? null), "isFirst", array())) {
                // line 84
                echo "                <a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", array()), "url", array());
                echo "\"><i class=\"fa fa-chevron-left\"></i> ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("BLOG.ITEM.NEXT_POST");
                echo "</a>
            ";
            }
            // line 86
            echo "
            ";
            // line 87
            if ( !$this->getAttribute(($context["page"] ?? null), "isLast", array())) {
                // line 88
                echo "                <a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", array()), "url", array());
                echo "\">";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("BLOG.ITEM.PREV_POST");
                echo " <i class=\"fa fa-chevron-right\"></i></a>
            ";
            }
            // line 90
            echo "        </p>
    ";
        }
        // line 92
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 92,  254 => 90,  246 => 88,  244 => 87,  241 => 86,  233 => 84,  231 => 83,  227 => 81,  225 => 80,  222 => 79,  219 => 78,  217 => 77,  214 => 76,  211 => 75,  208 => 74,  206 => 73,  200 => 70,  197 => 69,  191 => 66,  187 => 65,  184 => 64,  182 => 63,  177 => 61,  173 => 60,  170 => 59,  167 => 58,  164 => 57,  161 => 56,  159 => 55,  154 => 53,  151 => 52,  149 => 51,  142 => 46,  136 => 44,  133 => 43,  130 => 42,  127 => 41,  124 => 40,  121 => 39,  118 => 38,  114 => 36,  100 => 34,  96 => 33,  93 => 32,  91 => 31,  88 => 30,  80 => 28,  71 => 25,  65 => 23,  63 => 22,  60 => 21,  58 => 20,  52 => 17,  48 => 16,  44 => 15,  39 => 12,  36 => 11,  33 => 10,  30 => 9,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header>
en:
  MONTHS_OF_THE_YEAR: [January, February, March, April, May, June, July, August, September, October, November, December]
</header>

<div class=\"list-item h-entry\">

    {% set header_image = page.header.header_image|defined(true) %}
    {% set header_image_width  = page.header.header_image_width|defined(900) %}
    {% set header_image_height = page.header.header_image_height|defined(300) %}
    {% set header_image_file = page.header.header_image_file %}

    <div class=\"list-blog-header\">
        <span class=\"list-blog-date\">
            <time class=\"dt-published\" datetime=\"{{ page.date|date(\"c\") }}\">
                <span>{{ page.date|date(\"d\") }}</span>
                <em>{{ page.date|date(\"M\")| t }}</em>
            </time>
        </span>
        {% if page.header.link %}
            <h4 class=\"p-name\">
                {% if page.header.continue_link is not sameas(false) %}
                <a href=\"{{ page.url }}\"><i class=\"fa fa-angle-double-right u-url\"></i></a>
                {% endif %}
                <a href=\"{{ page.header.link }}\" class=\"u-url\">{{ page.title }}</a>
            </h4>
        {% else %}
            <h4 class=\"p-name\"><a href=\"{{ page.url }}\" class=\"u-url\">{{ page.title }}</a></h4>
        {% endif %}

        {% if page.taxonomy.tag %}
        <span class=\"tags\">
            {% for tag in page.taxonomy.tag %}
            <a href=\"{{ blog.url|rtrim('/') }}/tag{{ config.system.param_sep }}{{ tag }}\" class=\"p-category\">{{ tag }}</a>
            {% endfor %}
        </span>
        {% endif %}
        {% if header_image %}
            {% if header_image_file %}
                {% set header_image_media = page.media.images[header_image_file] %}
            {% else %}
                {% set header_image_media = page.media.images|first %}
            {% endif %}
            {{ header_image_media.cropZoom(header_image_width, header_image_height).html }}
        {% endif %}

    </div>

    <div class=\"list-blog-padding\">

    {% if page.header.continue_link is sameas(false) %}
        <div class=\"e-content\">        
            {{ page.content }}
        </div>
        {% if not truncate %}
        {% set show_prev_next = true %}
        {% endif %}
    {% elseif truncate and page.summary != page.content %}
        <div class=\"p-summary e-content\">
            {{ page.summary }}
            <p><a href=\"{{ page.url }}\">Czytaj dalej</a></p>
        </div>
    {% elseif truncate %}
        <div class=\"p-summary e-content\">
            {{ page.content }}
            <p><a href=\"{{ page.url }}\">Czytaj dalej</a></p>
        </div>
    {% else %}
        <div class=\"e-content\">
            {{ page.content }}
        </div>

        {% if config.plugins.comments.enabled %}
            {% include 'partials/comments.html.twig' %}
        {% endif %}

        {% set show_prev_next = true %}
    {% endif %}

    {% if show_prev_next %}

        <p class=\"prev-next\">
            {% if not page.isFirst %}
                <a class=\"button\" href=\"{{ page.nextSibling.url }}\"><i class=\"fa fa-chevron-left\"></i> {{ 'BLOG.ITEM.NEXT_POST'|t }}</a>
            {% endif %}

            {% if not page.isLast %}
                <a class=\"button\" href=\"{{ page.prevSibling.url }}\">{{ 'BLOG.ITEM.PREV_POST'|t }} <i class=\"fa fa-chevron-right\"></i></a>
            {% endif %}
        </p>
    {% endif %}

    </div>
</div>
", "partials/blog_item.html.twig", "/srv/http/grav/user/themes/e-f-kropka/templates/partials/blog_item.html.twig");
    }
}
