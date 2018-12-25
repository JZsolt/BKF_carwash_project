<?php

/* formdata.html.twig */
class __TwigTemplate_3aad83813c4b8ab599981f91e3331620f9c73fe2efd644444d443ed2c3d131d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "formdata.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        if ((null === ($context["form"] ?? null))) {
            // line 4
            $context["form"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "session", array()), "getFlashObject", array(0 => "form"), "method");
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo ($context["content"] ?? null);
        echo "

    ";
        // line 10
        if (($context["form"] ?? null)) {
            // line 11
            echo "        ";
            $this->loadTemplate("partials/form-messages.html.twig", "formdata.html.twig", 11)->display($context);
            // line 12
            echo "
        <p>";
            // line 13
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_FORM.DATA_SUMMARY");
            echo "</p>

        ";
            // line 15
            $this->loadTemplate("forms/data.html.twig", "formdata.html.twig", 15)->display($context);
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "        <div class=\"notices warning yellow\"><p>";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_FORM.NO_FORM_DATA");
            echo "</p></div>
    ";
        }
        // line 19
        echo "
";
    }

    public function getTemplateName()
    {
        return "formdata.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 19,  61 => 17,  58 => 16,  56 => 15,  51 => 13,  48 => 12,  45 => 11,  43 => 10,  37 => 8,  34 => 7,  30 => 1,  27 => 4,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% if form is null %}
    {% set form = grav.session.getFlashObject('form') %}
{% endif  %}

{% block content %}
    {{ content|raw }}

    {% if form %}
        {% include 'partials/form-messages.html.twig' %}

        <p>{{ 'PLUGIN_FORM.DATA_SUMMARY'|t }}</p>

        {% include \"forms/data.html.twig\" %}
    {% else %}
        <div class=\"notices warning yellow\"><p>{{ 'PLUGIN_FORM.NO_FORM_DATA'|t }}</p></div>
    {% endif %}

{% endblock %}
", "formdata.html.twig", "/home3/bkfcarbc/test.bkf-carwash.ro/user/plugins/form/templates/formdata.html.twig");
    }
}
