<?php

/* partials/language-selector.html.twig */
class __TwigTemplate_d384719d8df478b2317efbfb0fa221bac16441ac07804e81751ac8b9b5abc61b extends Twig_Template
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
        echo "<li class=\"language-selector\">
  <li class=\"uk-button\"  data-dropdown=\"langSelectorList\">
    ";
        // line 3
        if ((($this->getAttribute(($context["language_display"] ?? null), "button", array()) == "default") || ($this->getAttribute(($context["language_display"] ?? null), "button", array()) == "flag"))) {
            // line 4
            echo "    <img class=\"\" alt=\"";
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
  </li>
  <ul uk-dropdown=\"offset: 10;\" class=\" black-text uk-dropdown-nav uk-nav\" id=\"langSelectorList\">
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["language_selector"] ?? null), "languages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 13
            echo "
    ";
            // line 14
            $context["show_language"] = true;
            // line 15
            echo "    ";
            if (($context["language"] == $this->getAttribute(($context["language_selector"] ?? null), "current", array()))) {
                // line 16
                echo "        ";
                $context["lang_url"] = $this->getAttribute(($context["page"] ?? null), "url", array());
                // line 17
                echo "    ";
            } else {
                // line 18
                echo "        ";
                $context["base_lang_url"] = (($context["base_url_simple"] ?? null) . $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguageURLPrefix", array(0 => $context["language"]), "method"));
                // line 19
                echo "        ";
                $context["lang_url"] = ((($context["base_lang_url"] ?? null) . $this->getAttribute(($context["language_selector"] ?? null), "page_route", array())) . $this->getAttribute(($context["page"] ?? null), "urlExtension", array()));
                // line 20
                echo "        ";
                $context["untranslated_pages_behavior"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", array()), "plugins", array()), "language_selector", array()), "untranslated_pages_behavior", array());
                // line 21
                echo "        ";
                if ((($context["untranslated_pages_behavior"] ?? null) != "none")) {
                    // line 22
                    echo "            ";
                    $context["translated_page"] = $this->getAttribute($this->getAttribute(($context["language_selector"] ?? null), "translated_pages", array()), $context["language"], array(), "array");
                    // line 23
                    echo "            ";
                    if (( !($context["translated_page"] ?? null) ||  !$this->getAttribute(($context["translated_page"] ?? null), "published", array()))) {
                        // line 24
                        echo "                ";
                        if ((($context["untranslated_pages_behavior"] ?? null) == "redirect")) {
                            // line 25
                            echo "                    ";
                            $context["lang_url"] = (($context["base_lang_url"] ?? null) . "/");
                            // line 26
                            echo "                ";
                        } elseif ((($context["untranslated_pages_behavior"] ?? null) == "hide")) {
                            // line 27
                            echo "                    ";
                            $context["show_language"] = false;
                            // line 28
                            echo "                ";
                        }
                        // line 29
                        echo "            ";
                    }
                    // line 30
                    echo "        ";
                }
                // line 31
                echo "    ";
            }
            // line 32
            echo "
    ";
            // line 33
            if (($context["show_language"] ?? null)) {
                // line 34
                echo "        <li>
          <a href=\"";
                // line 35
                echo (($context["lang_url"] ?? null) . $this->getAttribute(($context["uri"] ?? null), "params", array()));
                echo "\">
            ";
                // line 36
                if ((($this->getAttribute(($context["language_display"] ?? null), "select", array()) == "default") || ($this->getAttribute(($context["language_display"] ?? null), "select", array()) == "flag"))) {
                    // line 37
                    echo "            <img alt=\"";
                    echo twig_capitalize_string_filter($this->env, call_user_func_array($this->env->getFunction('native_name')->getCallable(), array($context["language"])));
                    echo "\" src=\"";
                    echo (($context["path_flags"] ?? null) . $context["language"]);
                    echo ".png\" />
            ";
                }
                // line 39
                echo "            ";
                if ((($this->getAttribute(($context["language_display"] ?? null), "select", array()) == "default") || ($this->getAttribute(($context["language_display"] ?? null), "select", array()) == "name"))) {
                    // line 40
                    echo "            ";
                    echo twig_capitalize_string_filter($this->env, call_user_func_array($this->env->getFunction('native_name')->getCallable(), array($context["language"])));
                    echo "
            ";
                }
                // line 42
                echo "          </a>
        </li>
    ";
            }
            // line 45
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "  </ul>

</li>
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
        return array (  150 => 47,  143 => 45,  138 => 42,  132 => 40,  129 => 39,  121 => 37,  119 => 36,  115 => 35,  112 => 34,  110 => 33,  107 => 32,  104 => 31,  101 => 30,  98 => 29,  95 => 28,  92 => 27,  89 => 26,  86 => 25,  83 => 24,  80 => 23,  77 => 22,  74 => 21,  71 => 20,  68 => 19,  65 => 18,  62 => 17,  59 => 16,  56 => 15,  54 => 14,  51 => 13,  47 => 12,  42 => 9,  36 => 7,  33 => 6,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li class=\"language-selector\">
  <li class=\"uk-button\"  data-dropdown=\"langSelectorList\">
    {% if language_display.button == 'default' or language_display.button == 'flag' %}
    <img class=\"\" alt=\"{{ native_name(language_selector.current)|capitalize }}\" src=\"{{ path_flags ~ language_selector.current }}.png\" />
    {% endif %}
    {% if language_display.button == 'default' or language_display.button == 'name' %}
    {{ native_name(language_selector.current)|capitalize }}
    {% endif %}
    <i class=\"fa fa-caret-down\"></i>
  </li>
  <ul uk-dropdown=\"offset: 10;\" class=\" black-text uk-dropdown-nav uk-nav\" id=\"langSelectorList\">
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

</li>
", "partials/language-selector.html.twig", "/srv/http/grav/user/themes/e-f-kropka/templates/partials/language-selector.html.twig");
    }
}
