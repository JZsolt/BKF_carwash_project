<?php

/* @Var:[Site Contact Form] {{ form.value.name|e }} */
class __TwigTemplate_82ce5305c8263a2a8455d80e43ee7c56291dd56776ca81c9125b8e1a48e82436 extends Twig_Template
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
        echo "[Site Contact Form] ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "value", array()), "name", array()));
    }

    public function getTemplateName()
    {
        return "@Var:[Site Contact Form] {{ form.value.name|e }}";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("[Site Contact Form] {{ form.value.name|e }}", "@Var:[Site Contact Form] {{ form.value.name|e }}", "");
    }
}
