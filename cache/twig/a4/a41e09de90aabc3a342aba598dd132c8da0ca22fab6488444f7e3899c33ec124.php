<?php

/* partials/language-selector.html.twig */
class __TwigTemplate_854f9cbeb5c26397fcc9ea314619cf92e6ca501396adc5858de98a288dcf0151 extends Twig_Template
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
        echo "<div class=\"language-selector\">
  <button class=\"btn\" type=\"button\" data-dropdown=\"langSelectorList\">
    ";
        // line 3
        if ((($this->getAttribute(($context["language_display"] ?? null), "button", array()) == "default") || ($this->getAttribute(($context["language_display"] ?? null), "button", array()) == "flag"))) {
            // line 4
            echo "    <img alt=\"";
            echo twig_capitalize_string_filter($this->env, call_user_func_array($this->env->getFunction('native_name')->getCallable(), array($this->getAttribute(($context["language_selector"] ?? null), "current", array()))));
            echo "\" src=\"";
            echo (($context["path_flags"] ?? null) . $this->getAttribute(($context["language_selector"] ?? null), "current", array()));
            echo ".png\" />
    ";
        }
        // line 6
        echo "    ";
        if ((($this->getAttribute(($context["language_display"] ?? null), "button", array()) == "default") || ($this->getAttribute(($context["language_display"] ?? null), "button", array()) == "name"))) {
            // line 7
            echo "    ";
            echo twig_capitalize_string_filter($this->env, call_user_func_array($this->env->getFunction('native_name')->getCallable(), array($this->getAttribute(($context["language_selector"] ?? null), "current", array()))));
            echo "
    ";
        }
        // line 9
        echo "    <i class=\"fa fa-caret-down\"></i>
  </button>

  <ul class=\"dropdown-menu\" id=\"langSelectorList\">
";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["language_selector"] ?? null), "languages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 14
            echo "
    ";
            // line 15
            $context["show_language"] = true;
            // line 16
            echo "    ";
            if (($context["language"] == $this->getAttribute(($context["language_selector"] ?? null), "current", array()))) {
                // line 17
                echo "        ";
                $context["lang_url"] = $this->getAttribute(($context["page"] ?? null), "url", array());
                // line 18
                echo "    ";
            } else {
                // line 19
                echo "        ";
                $context["base_lang_url"] = (($context["base_url_simple"] ?? null) . $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguageURLPrefix", array(0 => $context["language"]), "method"));
                // line 20
                echo "        ";
                $context["lang_url"] = ((($context["base_lang_url"] ?? null) . $this->getAttribute(($context["language_selector"] ?? null), "page_route", array())) . $this->getAttribute(($context["page"] ?? null), "urlExtension", array()));
                // line 21
                echo "        ";
                $context["untranslated_pages_behavior"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", array()), "plugins", array()), "language_selector", array()), "untranslated_pages_behavior", array());
                // line 22
                echo "        ";
                if ((($context["untranslated_pages_behavior"] ?? null) != "none")) {
                    // line 23
                    echo "            ";
                    $context["translated_page"] = $this->getAttribute($this->getAttribute(($context["language_selector"] ?? null), "translated_pages", array()), $context["language"], array(), "array");
                    // line 24
                    echo "            ";
                    if (( !($context["translated_page"] ?? null) ||  !$this->getAttribute(($context["translated_page"] ?? null), "published", array()))) {
                        // line 25
                        echo "                ";
                        if ((($context["untranslated_pages_behavior"] ?? null) == "redirect")) {
                            // line 26
                            echo "                    ";
                            $context["lang_url"] = (($context["base_lang_url"] ?? null) . "/");
                            // line 27
                            echo "                ";
                        } elseif ((($context["untranslated_pages_behavior"] ?? null) == "hide")) {
                            // line 28
                            echo "                    ";
                            $context["show_language"] = false;
                            // line 29
                            echo "                ";
                        }
                        // line 30
                        echo "            ";
                    }
                    // line 31
                    echo "        ";
                }
                // line 32
                echo "    ";
            }
            // line 33
            echo "
    ";
            // line 34
            if (($context["show_language"] ?? null)) {
                // line 35
                echo "        <li>
          <a href=\"";
                // line 36
                echo (($context["lang_url"] ?? null) . $this->getAttribute(($context["uri"] ?? null), "params", array()));
                echo "\">
            ";
                // line 37
                if ((($this->getAttribute(($context["language_display"] ?? null), "select", array()) == "default") || ($this->getAttribute(($context["language_display"] ?? null), "select", array()) == "flag"))) {
                    // line 38
                    echo "            <img alt=\"";
                    echo twig_capitalize_string_filter($this->env, call_user_func_array($this->env->getFunction('native_name')->getCallable(), array($context["language"])));
                    echo "\" src=\"";
                    echo (($context["path_flags"] ?? null) . $context["language"]);
                    echo ".png\" />
            ";
                }
                // line 40
                echo "            ";
                if ((($this->getAttribute(($context["language_display"] ?? null), "select", array()) == "default") || ($this->getAttribute(($context["language_display"] ?? null), "select", array()) == "name"))) {
                    // line 41
                    echo "            ";
                    echo twig_capitalize_string_filter($this->env, call_user_func_array($this->env->getFunction('native_name')->getCallable(), array($context["language"])));
                    echo "
            ";
                }
                // line 43
                echo "          </a>
        </li>
    ";
            }
            // line 46
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/language-selector.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 48,  144 => 46,  139 => 43,  133 => 41,  130 => 40,  122 => 38,  120 => 37,  116 => 36,  113 => 35,  111 => 34,  108 => 33,  105 => 32,  102 => 31,  99 => 30,  96 => 29,  93 => 28,  90 => 27,  87 => 26,  84 => 25,  81 => 24,  78 => 23,  75 => 22,  72 => 21,  69 => 20,  66 => 19,  63 => 18,  60 => 17,  57 => 16,  55 => 15,  52 => 14,  48 => 13,  42 => 9,  36 => 7,  33 => 6,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"language-selector\">
  <button class=\"btn\" type=\"button\" data-dropdown=\"langSelectorList\">
    {% if language_display.button == 'default' or language_display.button == 'flag' %}
    <img alt=\"{{ native_name(language_selector.current)|capitalize }}\" src=\"{{ path_flags ~ language_selector.current }}.png\" />
    {% endif %}
    {% if language_display.button == 'default' or language_display.button == 'name' %}
    {{ native_name(language_selector.current)|capitalize }}
    {% endif %}
    <i class=\"fa fa-caret-down\"></i>
  </button>

  <ul class=\"dropdown-menu\" id=\"langSelectorList\">
{% for language in language_selector.languages %}

    {% set show_language = true %}
    {% if language == language_selector.current %}
        {% set lang_url = page.url %}
    {% else %}
        {% set base_lang_url = base_url_simple ~ grav.language.getLanguageURLPrefix(language) %}
        {% set lang_url = base_lang_url ~ language_selector.page_route ~ page.urlExtension %}
        {% set untranslated_pages_behavior = grav.config.plugins.language_selector.untranslated_pages_behavior %}
        {% if untranslated_pages_behavior != 'none' %}
            {% set translated_page = language_selector.translated_pages[language] %}
            {% if (not translated_page) or (not translated_page.published) %}
                {% if untranslated_pages_behavior == 'redirect' %}
                    {% set lang_url = base_lang_url ~ '/' %}
                {% elseif untranslated_pages_behavior == 'hide' %}
                    {% set show_language = false %}
                {% endif %}
            {% endif %}
        {% endif %}
    {% endif %}

    {% if show_language %}
        <li>
          <a href=\"{{ lang_url ~ uri.params }}\">
            {% if language_display.select == 'default' or language_display.select == 'flag' %}
            <img alt=\"{{ native_name(language)|capitalize }}\" src=\"{{ path_flags ~ language }}.png\" />
            {% endif %}
            {% if language_display.select == 'default' or language_display.select == 'name' %}
            {{ native_name(language)|capitalize }}
            {% endif %}
          </a>
        </li>
    {% endif %}

{% endfor %}
  </ul>
</div>
", "partials/language-selector.html.twig", "/srv/http/grav/user/plugins/language-selector/templates/partials/language-selector.html.twig");
    }
}
