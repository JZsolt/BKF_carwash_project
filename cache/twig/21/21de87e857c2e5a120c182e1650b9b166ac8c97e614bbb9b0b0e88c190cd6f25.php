<?php

/* forms/default/field.html.twig */
class __TwigTemplate_6c83ac5316b18b40e0365fbfd4a5d65502d79a9d21972e08f24f9f649da9d8d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'outer_field_classes' => array($this, 'block_outer_field_classes'),
            'contents' => array($this, 'block_contents'),
            'global_attributes' => array($this, 'block_global_attributes'),
            'group' => array($this, 'block_group'),
            'input' => array($this, 'block_input'),
            'prepend' => array($this, 'block_prepend'),
            'input_attributes' => array($this, 'block_input_attributes'),
            'append' => array($this, 'block_append'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["originalValue"] = (((isset($context["originalValue"]) || array_key_exists("originalValue", $context))) ? ((isset($context["originalValue"]) ? $context["originalValue"] : null)) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 2
        $context["toggleableChecked"] = ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "toggleable", array()) && ( !(null === (isset($context["originalValue"]) ? $context["originalValue"] : null)) &&  !twig_test_empty((isset($context["originalValue"]) ? $context["originalValue"] : null))));
        // line 3
        $context["isDisabledToggleable"] = ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "toggleable", array()) &&  !(isset($context["toggleableChecked"]) ? $context["toggleableChecked"] : null));
        // line 4
        $context["value"] = (((is_object((isset($context["value"]) ? $context["value"] : null)) || (null === (isset($context["value"]) ? $context["value"] : null)))) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 5
        $context["cookie_name"] = ((("forms-" . $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array())) . "-") . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()));
        // line 6
        $context["value"] = (((is_object((isset($context["value"]) ? $context["value"] : null)) || (null === (isset($context["value"]) ? $context["value"] : null)))) ? ((((null === $this->env->getExtension('Grav\Common\Twig\TwigExtension')->getCookie((isset($context["cookie_name"]) ? $context["cookie_name"] : null)))) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->getCookie((isset($context["cookie_name"]) ? $context["cookie_name"] : null))))) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 7
        $context["errors"] = $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "messages", array()), $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()));
        // line 8
        $context["required"] = ((isset($context["client_side_validation"]) ? $context["client_side_validation"] : null) && twig_in_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1)));
        // line 9
        $context["autofocus"] = (((isset($context["inline_errors"]) ? $context["inline_errors"] : null) == false) && twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autofocus", array()), array(0 => "on", 1 => "true", 2 => 1)));
        // line 10
        echo "
";
        // line 11
        if (((isset($context["inline_errors"]) ? $context["inline_errors"] : null) && (isset($context["errors"]) ? $context["errors"] : null))) {
            // line 12
            echo "    ";
            $context["autofocus"] = true;
        }
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('field', $context, $blocks);
    }

    public function block_field($context, array $blocks = array())
    {
        // line 16
        echo "    <div class=\"";
        echo (((isset($context["form_field_outer_classes"]) ? $context["form_field_outer_classes"] : null)) ? ((isset($context["form_field_outer_classes"]) ? $context["form_field_outer_classes"] : null)) : ("form-field"));
        echo " ";
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "outerclasses", array());
        echo " ";
        if ((isset($context["errors"]) ? $context["errors"] : null)) {
            echo " has-errors";
        }
        echo " ";
        $this->displayBlock('outer_field_classes', $context, $blocks);
        echo "\">
        ";
        // line 17
        $this->displayBlock('contents', $context, $blocks);
        // line 99
        echo "    </div>
";
    }

    // line 16
    public function block_outer_field_classes($context, array $blocks = array())
    {
    }

    // line 17
    public function block_contents($context, array $blocks = array())
    {
        // line 18
        echo "            ";
        if (( !($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()) === false) &&  !($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "display_label", array()) === false))) {
            // line 19
            echo "                <div class=\"";
            echo (((isset($context["form_field_outer_label_classes"]) ? $context["form_field_outer_label_classes"] : null)) ? ((isset($context["form_field_outer_label_classes"]) ? $context["form_field_outer_label_classes"] : null)) : ("form-label"));
            echo " ";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "labelclasses", array());
            echo "\">
                    
                </div>
            ";
        }
        // line 23
        echo "            <span class=\"";
        echo (((isset($context["form_field_outer_data_classes"]) ? $context["form_field_outer_data_classes"] : null)) ? ((isset($context["form_field_outer_data_classes"]) ? $context["form_field_outer_data_classes"] : null)) : ("form-data"));
        echo " ";
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "dataclasses", array());
        echo " input input--nao\"
                ";
        // line 24
        $this->displayBlock('global_attributes', $context, $blocks);
        // line 29
        echo "            >
                ";
        // line 30
        $this->displayBlock('group', $context, $blocks);
        // line 85
        echo "                ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "description", array())) {
            // line 86
            echo "                    <div class=\"form-extra-wrapper ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "size", array()));
            echo " ";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "wrapper_classes", array());
            echo "\">
                        <span class=\"form-description\">
                            ";
            // line 88
            if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "markdown", array())) {
                // line 89
                echo "                                ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "description", array())), false);
                echo "
                            ";
            } else {
                // line 91
                echo "                                ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "description", array()));
                echo "
                            ";
            }
            // line 93
            echo "                        </span>
                    </div>
                ";
        }
        // line 96
        echo "
            </span>
        ";
    }

    // line 24
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 25
        echo "                data-grav-field=\"";
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type", array());
        echo "\"
                data-grav-disabled=\"";
        // line 26
        echo (((null === (isset($context["originalValue"]) ? $context["originalValue"] : null))) ? ("true") : ("false"));
        echo "\"
                data-grav-default=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())), "html_attr");
        echo "\"
                ";
    }

    // line 30
    public function block_group($context, array $blocks = array())
    {
        // line 31
        echo "                    ";
        $this->displayBlock('input', $context, $blocks);
        // line 84
        echo "                ";
    }

    // line 31
    public function block_input($context, array $blocks = array())
    {
        // line 32
        echo "                        <div class=\"";
        echo (((isset($context["form_field_wrapper_classes"]) ? $context["form_field_wrapper_classes"] : null)) ? ((isset($context["form_field_wrapper_classes"]) ? $context["form_field_wrapper_classes"] : null)) : ("form-input-wrapper"));
        echo " ";
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "size", array());
        echo " ";
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "wrapper_classes", array());
        echo " input__field input__field--nao\">
                            ";
        // line 33
        $this->displayBlock('prepend', $context, $blocks);
        // line 34
        echo "                            <input
                                ";
        // line 36
        echo "                                name=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())));
        echo "\"
                                value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_join_filter((isset($context["value"]) ? $context["value"] : null), ", "), "html_attr");
        echo "\"
                                ";
        // line 39
        echo "                                ";
        $this->displayBlock('input_attributes', $context, $blocks);
        // line 67
        echo "                            />
                            <label class=\"input__label input__label--nao\" for=\"input-1\">
                                <span class=\"input__label-content input__label-content--nao\">";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder", array())), "html_attr");
        echo "</span>
                              </label>
                              <svg class=\"graphic graphic--nao\" width=\"300%\" height=\"100%\" viewBox=\"0 0 1200 60\" preserveAspectRatio=\"none\">
                                <path d=\"M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0\"/>
                              </svg>
                            ";
        // line 74
        $this->displayBlock('append', $context, $blocks);
        // line 75
        echo "                            ";
        if (((isset($context["inline_errors"]) ? $context["inline_errors"] : null) && (isset($context["errors"]) ? $context["errors"] : null))) {
            // line 76
            echo "                                <div class=\"";
            echo (((isset($context["form_errors_classes"]) ? $context["form_errors_classes"] : null)) ? ((isset($context["form_errors_classes"]) ? $context["form_errors_classes"] : null)) : ("form-errors"));
            echo "\">
                                    ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 78
                echo "                                        <p class=\"form-message\"><i class=\"fa fa-exclamation-circle\"></i> ";
                echo $context["error"];
                echo "</p>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "                                </div>
                            ";
        }
        // line 82
        echo "                        </div>
                    ";
    }

    // line 33
    public function block_prepend($context, array $blocks = array())
    {
    }

    // line 39
    public function block_input_attributes($context, array $blocks = array())
    {
        // line 40
        echo "                                    class=\"";
        echo (isset($context["form_field_input_classes"]) ? $context["form_field_input_classes"] : null);
        echo " ";
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "classes", array());
        echo " input__field input__field--nao\" 
                                    ";
        // line 41
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array(), "any", true, true)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array()));
            echo "\" ";
        }
        // line 42
        echo "                                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "style", array(), "any", true, true)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "style", array()));
            echo "\" ";
        }
        // line 43
        echo "                                    ";
        if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "disabled", array()) || (isset($context["isDisabledToggleable"]) ? $context["isDisabledToggleable"] : null))) {
            echo "disabled=\"disabled\"";
        }
        // line 44
        echo "                                    ";
        if ((isset($context["autofocus"]) ? $context["autofocus"] : null)) {
            echo "autofocus=\"autofocus\"";
        }
        // line 45
        echo "                                    ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "novalidate", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "novalidate=\"novalidate\"";
        }
        // line 46
        echo "                                    ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "readonly", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "readonly=\"readonly\"";
        }
        // line 47
        echo "                                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autocomplete", array(), "any", true, true)) {
            echo "autocomplete=\"";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autocomplete", array());
            echo "\"";
        }
        // line 48
        echo "                                    ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autocapitalize", array()), array(0 => "off", 1 => "characters", 2 => "words", 3 => "sentences"))) {
            echo "autocapitalize=\"";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autocapitalize", array());
            echo "\"";
        }
        // line 49
        echo "                                    ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "inputmode", array()), array(0 => "none", 1 => "text", 2 => "decimal", 3 => "numeric", 4 => "tel", 5 => "search", 6 => "email", 7 => "url"))) {
            echo "inputmode=\"";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "inputmode", array());
            echo "\"";
        }
        // line 50
        echo "                                    ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "spellcheck", array()), array(0 => "true", 1 => "false"))) {
            echo "spellcheck=\"";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "spellcheck", array());
            echo "\"";
        }
        // line 51
        echo "
                                    ";
        // line 52
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "attributes", array(), "any", true, true)) {
            // line 53
            echo "                                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "attributes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 54
                echo "                                          ";
                echo $this->getAttribute($context["attribute"], "name", array());
                echo "=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "value", array()));
                echo "\"
                                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                                    ";
        }
        // line 57
        echo "                                    ";
        if ((isset($context["required"]) ? $context["required"] : null)) {
            echo "required=\"required\"";
        }
        // line 58
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "pattern", array())) {
            echo "pattern=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "pattern", array()));
            echo "\"";
        }
        // line 59
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "message", array())) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "message", array())));
            echo "\"
                                    ";
        } elseif ($this->getAttribute(        // line 60
(isset($context["field"]) ? $context["field"] : null), "title", array(), "any", true, true)) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "title", array())));
            echo "\" ";
        }
        // line 61
        echo "                                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "datasets", array())) {
            // line 62
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "datasets", array()));
            foreach ($context['_seq'] as $context["datakey"] => $context["datavalue"]) {
                // line 63
                echo "                                            data-";
                echo $context["datakey"];
                echo "=\"";
                echo twig_escape_filter($this->env, $context["datavalue"], "html_attr");
                echo "\"
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['datakey'], $context['datavalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                                    ";
        }
        // line 66
        echo "                                ";
    }

    // line 74
    public function block_append($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "forms/default/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  407 => 74,  403 => 66,  400 => 65,  389 => 63,  384 => 62,  381 => 61,  375 => 60,  368 => 59,  361 => 58,  356 => 57,  353 => 56,  342 => 54,  337 => 53,  335 => 52,  332 => 51,  325 => 50,  318 => 49,  311 => 48,  304 => 47,  299 => 46,  294 => 45,  289 => 44,  284 => 43,  277 => 42,  271 => 41,  264 => 40,  261 => 39,  256 => 33,  251 => 82,  247 => 80,  238 => 78,  234 => 77,  229 => 76,  226 => 75,  224 => 74,  216 => 69,  212 => 67,  209 => 39,  205 => 37,  200 => 36,  197 => 34,  195 => 33,  186 => 32,  183 => 31,  179 => 84,  176 => 31,  173 => 30,  167 => 27,  163 => 26,  158 => 25,  155 => 24,  149 => 96,  144 => 93,  138 => 91,  132 => 89,  130 => 88,  122 => 86,  119 => 85,  117 => 30,  114 => 29,  112 => 24,  105 => 23,  95 => 19,  92 => 18,  89 => 17,  84 => 16,  79 => 99,  77 => 17,  64 => 16,  58 => 15,  55 => 14,  51 => 12,  49 => 11,  46 => 10,  44 => 9,  42 => 8,  40 => 7,  38 => 6,  36 => 5,  34 => 4,  32 => 3,  30 => 2,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set originalValue = originalValue is defined ? originalValue : value %}
{% set toggleableChecked = field.toggleable and (originalValue is not null and originalValue is not empty) %}
{% set isDisabledToggleable = field.toggleable and not toggleableChecked %}
{% set value = (is_object(value) or value is null ? field.default : value) %}
{% set cookie_name = 'forms-' ~ form.name ~ '-' ~ field.name %}
{% set value = (is_object(value) or value is null ? (get_cookie(cookie_name) is null ? field.default : get_cookie(cookie_name)) : value) %}
{% set errors = attribute(form.messages, field.name) %}
{% set required = client_side_validation and field.validate.required in ['on', 'true', 1] %}
{% set autofocus = (inline_errors == false) and field.autofocus in ['on', 'true', 1] %}

{% if inline_errors and errors %}
    {% set autofocus = true %}
{% endif %}

{% block field %}
    <div class=\"{{ form_field_outer_classes ?: 'form-field' }} {{ field.outerclasses }} {% if errors %} has-errors{% endif %} {% block outer_field_classes %}{% endblock %}\">
        {% block contents %}
            {% if field.label is not same as(false) and field.display_label is not same as(false) %}
                <div class=\"{{ form_field_outer_label_classes ?: 'form-label' }} {{ field.labelclasses }}\">
                    
                </div>
            {% endif %}
            <span class=\"{{ form_field_outer_data_classes ?: 'form-data' }} {{ field.dataclasses }} input input--nao\"
                {% block global_attributes %}
                data-grav-field=\"{{ field.type }}\"
                data-grav-disabled=\"{{ originalValue is null ? 'true' : 'false' }}\"
                data-grav-default=\"{{ field.default|json_encode()|e('html_attr') }}\"
                {% endblock %}
            >
                {% block group %}
                    {% block input %}
                        <div class=\"{{ form_field_wrapper_classes ?: 'form-input-wrapper' }} {{ field.size }} {{ field.wrapper_classes }} input__field input__field--nao\">
                            {% block prepend %}{% endblock prepend %}
                            <input
                                {# required attribute structures #}
                                name=\"{{ (scope ~ field.name)|fieldName }}\"
                                value=\"{{ value|join(', ')|e('html_attr') }}\"
                                {# input attribute structures #}
                                {% block input_attributes %}
                                    class=\"{{ form_field_input_classes }} {{ field.classes }} input__field input__field--nao\" 
                                    {% if field.id is defined %}id=\"{{ field.id|e }}\" {% endif %}
                                    {% if field.style is defined %}style=\"{{ field.style|e }}\" {% endif %}
                                    {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                                    {% if autofocus %}autofocus=\"autofocus\"{% endif %}
                                    {% if field.novalidate in ['on', 'true', 1] %}novalidate=\"novalidate\"{% endif %}
                                    {% if field.readonly in ['on', 'true', 1] %}readonly=\"readonly\"{% endif %}
                                    {% if field.autocomplete is defined %}autocomplete=\"{{ field.autocomplete }}\"{% endif %}
                                    {% if field.autocapitalize in ['off', 'characters', 'words', 'sentences'] %}autocapitalize=\"{{ field.autocapitalize }}\"{% endif %}
                                    {% if field.inputmode in ['none', 'text', 'decimal', 'numeric', 'tel', 'search', 'email', 'url'] %}inputmode=\"{{ field.inputmode }}\"{% endif %}
                                    {% if field.spellcheck in ['true', 'false'] %}spellcheck=\"{{ field.spellcheck }}\"{% endif %}

                                    {% if field.attributes is defined %}
                                      {% for attribute in field.attributes %}
                                          {{ attribute.name }}=\"{{ attribute.value|e }}\"
                                      {% endfor %}
                                    {% endif %}
                                    {% if required %}required=\"required\"{% endif %}
                                    {% if field.validate.pattern %}pattern=\"{{ field.validate.pattern|e }}\"{% endif %}
                                    {% if field.validate.message %}title=\"{{ field.validate.message|t|e }}\"
                                    {% elseif field.title is defined %}title=\"{{ field.title|t|e }}\" {% endif %}
                                    {% if field.datasets %}
                                        {% for datakey, datavalue in field.datasets %}
                                            data-{{ datakey }}=\"{{ datavalue|e('html_attr') }}\"
                                        {% endfor %}
                                    {% endif %}
                                {% endblock %}
                            />
                            <label class=\"input__label input__label--nao\" for=\"input-1\">
                                <span class=\"input__label-content input__label-content--nao\">{{ field.placeholder|t|e('html_attr') }}</span>
                              </label>
                              <svg class=\"graphic graphic--nao\" width=\"300%\" height=\"100%\" viewBox=\"0 0 1200 60\" preserveAspectRatio=\"none\">
                                <path d=\"M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0\"/>
                              </svg>
                            {% block append %}{% endblock append %}
                            {% if inline_errors and errors %}
                                <div class=\"{{ form_errors_classes ?: 'form-errors' }}\">
                                    {% for error in errors %}
                                        <p class=\"form-message\"><i class=\"fa fa-exclamation-circle\"></i> {{ error }}</p>
                                    {% endfor %}
                                </div>
                            {% endif %}
                        </div>
                    {% endblock %}
                {% endblock %}
                {% if field.description %}
                    <div class=\"form-extra-wrapper {{ field.size|e }} {{ field.wrapper_classes }}\">
                        <span class=\"form-description\">
                            {% if field.markdown %}
                                {{ field.description|t|markdown(false)|raw }}
                            {% else %}
                                {{ field.description|t|raw }}
                            {% endif %}
                        </span>
                    </div>
                {% endif %}

            </span>
        {% endblock %}
    </div>
{% endblock %}
", "forms/default/field.html.twig", "/Applications/AMPPS/www/grav/user/plugins/form/templates/forms/default/field.html.twig");
    }
}
